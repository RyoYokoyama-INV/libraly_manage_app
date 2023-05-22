<?php

namespace App;
// Modelクラスの宣言
use Illuminate\Database\Eloquent\Model;

// itemsを単数形、アッパーキャメルケースで記述
// Modelクラスを継承
class Item extends Model
{
    // created_atとupdated_atの自動挿入を無効に
    public $timestamps = false;

    // INSERT、UPDATEで許可するカラムを指定
    protected $fillable = [
        "name",
        "price"
    ];
}
