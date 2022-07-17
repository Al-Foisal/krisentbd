<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $clients = Client::orderBy('id', 'DESC')->get();

        return view('backend.client.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('backend.client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'image'   => 'required',
            'image.*' => 'required|image|mimes:jpeg,png,jpg,gif',
            'url'     => 'required',
            'url.*'   => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all())->withInput();
        }

        #file insertion area
        $files = [];

        if ($request->hasfile('image')) {

            foreach ($request->file('image') as $file) {
                $name = time() . rand(1, 100) . '.' . $file->extension();
                $file->move(public_path('images/client/'), $name);
                $files[] = 'images/client/' . $name;
            }

        }

        foreach ($files as $key => $f) {
            Client::create(['url' => $request->url[$key], 'image' => $f]);
        }

        return redirect()->route('admin.clients.index')->withToastSuccess('Images Added Successfully!!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client) {
        return view('backend.client.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client) {
        $validator = Validator::make($request->all(), [
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'url'   => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all())->withInput();
        }

        if ($request->hasFile('image')) {

            $image_file = $request->file('image');

            if ($image_file) {
                $image_path = public_path($client->image);

                if (File::exists($image_path)) {
                    File::delete($image_path);
                }

                $img_gen   = hexdec(uniqid());
                $image_url = 'images/client/';
                $image_ext = strtolower($image_file->getClientOriginalExtension());

                $img_name    = $img_gen . '.' . $image_ext;
                $final_name1 = $image_url . $img_gen . '.' . $image_ext;

                $image_file->move($image_url, $img_name);
                $client->update([
                    'image' => $final_name1,
                ]);

            }

        }

        $client->update([
            'url' => $request->url,
        ]);

        return redirect()->route('admin.clients.index')->withToastSuccess('Image Updated Successfully!!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client) {
        $image_path = public_path($client->image);

        if (File::exists($image_path)) {
            File::delete($image_path);
        }

        $client->delete();

        return redirect()->route('admin.clients.index')->withToastSuccess('Image deleted Successfully!!');

    }

}
