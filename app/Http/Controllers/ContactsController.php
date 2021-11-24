<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\PostRequest;


class ContactsController extends Controller
{
    public function index()
    {

        return view('contacts.index');
    }

    public function confirm(PostRequest $request)
    {
        $inputs=$request->all();
        return view('contacts.confirm',compact('inputs')
        );
    }

    public function send(Request $request)
    {
        $this->validate($request,Contact::$rules);
        $inputs=$request->all();
        Contact::create($inputs);
        return view('contacts.thanks');
    }

    public function admin()
    {
        $contacts=Contact::all();
        return view('contacts.admin')->with('contacts',$contacts);
    }

    public function search(Request $request){
        $params = $request->query();
        $contacts = Contact::serach($params)->paginate(10);
        return view('contacts.admin')->with([
            'contacts' => $contacts,
            'params' => $params,
        ]);
        }
    public function delete(Request $request){
        Contact::find($request->id)->delete();
        return redirect('/contacts/admin');
    }
}
