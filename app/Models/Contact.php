<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['lastname','firstname','gender','email','postcode','address','opinion'];
    public static $rules = array(
        'lastname'=>'required',
        'firstname'=>'required',
        'gender'=>'required',
        'email'=>'required|email',
        'postcode'=>'required',
        'address'=>'required',
        'opinion'=>'required',
    );

        /**
     * 絞り込み・キーワード検索
     * @param \Illuminate\Database\Eloquent\Builder
     * @param array
     * @return \Illuminate\Database\Eloquent\Builder
     */

    public function scopeSerach(Builder $query, array $params): Builder
    {
        // 性別絞り込み
        if (!empty($params['gender'])) $query->where('gender', $params['gender']);

        // 名前検索
        if (!empty($params['keyword'])) {
            $query->where(function ($query) use ($params) {
                $query->where('lastname', 'like', '%' . $params['keyword'] . '%')
                    ->orWhere('firstname', 'like', '%' . $params['keyword'] . '%');
            });
        }

        //登録日検索
        if (!empty($params['from']&&!empty($param['until']))) {
            $query->where(function ($query) use ($params) {
                $query->whereBetween('created_at', [$params['from'], $params['until']]);
            });
        }
        //メールアドレス検索
        if (!empty($params['keyword-email'])) {
            $query->where(function ($query) use ($params) {
                $query->where('email', 'like', '%' . $params['keyword-email'] . '%');
            });
        }
        return $query;
    }
}
