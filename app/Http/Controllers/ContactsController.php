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
        $items=Contact::all();
        return view('contacts.admin')->with('items',$items);
    }

    public function search(Request $request){
        $params = $request->query();
        $contacts = Contact::serach($params)->paginate(10);

    return view('contacts.admin')->with([
        'contacts' => $contacts,
        'params' => $params,
    ]);
    }
    public function hashtag(Request $request){
        //日付が選択されたら
        if (!empty($request['from']) && !empty($request['until'])) {
            //ハッシュタグの選択された20xx/xx/xx ~ 20xx/xx/xxのレポート情報を取得
            $date = Contact::getDate($request['from'], $request['until']);
        } else {
            //リクエストデータがなければそのままで表示
            $date = Contact::get();
        }
        //取得したデータをviewに渡す
        return view('contact.admin', [
            "date" => $date
        ]);
    }
    public function delete(Request $request){
        Contact::find($request->id)->delete();
        return redirect('/contacts/admin');
    }
}
