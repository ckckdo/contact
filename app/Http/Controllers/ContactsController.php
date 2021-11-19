<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;


class ContactsController extends Controller
{
    public function index()
    {

        return view('contacts.index');
    }

    public function confirm(Request $request)
    {
        $this->validate($request,Contact::$rules);
            $inputs=$request->all();
        return view('contacts.confirm',[
            'inputs' => $inputs,
        ]);
    }

    public function process()
    {
        
    }

    public function complete()
    {
        return view('contacts.complete');
    }
}
