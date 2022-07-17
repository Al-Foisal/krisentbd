<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ShippingCharge;
use App\Models\UserAddress;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller {
    public function checkout() {
        $data            = [];
        $data['is_shop'] = true;
        $data['carts']   = $carts   = Cart::content();

        $additional_charge = 0;
        $total             = 0;

//calculating total price without discount and additional charge
        foreach ($carts as $charge) {
            $total += $charge->options->oreginal_price * $charge->qty;
            if ($charge->options->additional_charge) {
                $additional_charge += $charge->options->additional_charge * $charge->qty;
            }

        }

        $data['total']             = $total;
        $data['additional_charge'] = $additional_charge;
        $data['subtotal']          = $subtotal          = Cart::subtotal();
        $data['discount']          = $discount          = $total - $subtotal;
        $data['paid_amount']       = ($subtotal + $additional_charge) - $discount;
        Session::put(['paid_amount' => $data['paid_amount']]);

// if (session()->has('coupon')) {

//     // $data['subtotal'] = $subtotal - Session::get('coupon')['discount'];

//     $data['paid_amount'] = ($subtotal + $additional_charge) - ($discount + Session::get('coupon')['discount']);

//     Session::put(['paid_amount' => $data['paid_amount']]);

// }

        //shipping charge
        $data['ship']         = ShippingCharge::find(1);
        $data['user_address'] = UserAddress::where('user_id', auth()->user()->id)->first();

        return view('frontend.shop.checkout', $data);
    }

}
