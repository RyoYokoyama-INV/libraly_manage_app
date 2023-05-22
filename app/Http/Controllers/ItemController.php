<?php

namespace App\Http\Controllers;
// Requestクラスを宣言します
use Illuminate\Http\Request;
use App\Item;

class ItemController extends Controller
{
    // 商品一覧の表示
    public function index()
    {
        $items = Item::all();
        // views\item\index.blade.phpを表示
        // 画面で利用する変数として$itemsを連想配列で渡す
        return view("item.index", ["items" => $items]);
    }

    // 商品登録ページ表示用
    public function torokuPage()
    {
        // views\item\torokuPage.blade.phpを表示
        return view("item.torokuPage");
    }

    // 商品登録の実行
    public function toroku(Request $request)
    {
        $item = new Item();

        // リクエストからModelの$fillableに設定したプロパティのみを抽出・保存
        $item->fill($request->all())->save();

        // views\item\index.blade.phpにリダイレクト
        return redirect("/item");
    }

    // 商品編集ページ
    public function henshuPage($id)
    {
        // 商品データを1件取得
        $item = Item::find($id);

        // views\item\henshuPage.blade.phpを表示
        // 画面で利用する変数として$itemを連想配列で渡す
        return view("item.henshuPage", ["item" => $item]);
    }

    // 商品編集の実行
    public function henshu($id, Request $request)
    {
        // 商品データを1件取得
        $item = Item::find($id);

        // リクエストからModelの$fillableに設定したプロパティのみを抽出・保存
        $item->fill($request->all())->save();

        // views\item\index.blade.phpにリダイレクト
        return redirect("/item");
    }

    // 商品削除の実行
    public function sakujo($id)
    {
        // 商品データを1件取得
        $item = Item::find($id);

        // 削除
        $item->delete();

        // views\item\index.blade.phpにリダイレクト
        return redirect("/item");
    }
}
