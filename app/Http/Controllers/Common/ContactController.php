<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller {
    public function showContact() {
        $data                   = [];
        $data['contact_people'] = Contact::orderBy('id', 'DESC')->paginate(20);

        return view('backend.contact', $data);
    }

    public function deleteContact(Contact $contact) {

        $contact->delete();

        return redirect()->back()->withToastSuccess('Contact Message Deleted Successfully!!');
    }
}
