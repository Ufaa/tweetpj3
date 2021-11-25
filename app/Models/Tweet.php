<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tweet extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['content'];
    //protected $table = 'tweets';  //モデルとテーブルを紐づけ
    //protected $primaryKey = 'id'; //プライマリーキーを id に紐づけ
    //public $timestamps = true; //タイムスタンプを無効にする
}
