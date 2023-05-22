<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <!-- View ごとに利用ページの項目を記述 -->
    <title>商品一覧表示ページ</title>
</head>

<body>
    <!-- 見出しが変わります -->
    <h1>商品編集ページ</h1>
    <!-- actionが変わります -->
    <!-- blade.phpでは{{ $item->id }}とすれば、$item->id を出力します -->
    <form action="/item_manager/public/item/henshu/{{ $item->id }}" method="post">
        <div>
            <label>商品名</label>
        </div>
        <div>
            <!-- valueを追加します -->
            <input type="text" name="name" value="{{ $item->name }}" placeholder="商品名を入力">
        </div>
        <div>
            <label>価格</label>
        </div>
        <div>
            <!-- valueを追加します -->
            <input type="number" name="price" value="{{ $item->price }}" placeholder="価格を入力">
        </div>
        <div>
            {{ csrf_field() }}
            <!-- ボタンのテキストを変えました -->
            <input type="submit" name="send" value="編集する">
        </div>
        <div>
            <!-- 一覧に戻る -->
            <a href="/item">戻る</a>
        </div>
    </form>
</body>

</html>