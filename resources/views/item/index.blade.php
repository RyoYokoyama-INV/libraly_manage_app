<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <!-- View ごとに利用ページの項目を記述 -->
    <title>商品一覧表示ページ</title>
</head>

<body>
    <h1>商品一覧表示ページ</h1>
    <div>
        <!-- 新規登録ページにアクセスします -->
        <a href="/item_manager/public/item/toroku">新規登録</a>
    </div>
    <table>
        <!-- テーブルの見出し -->
        <thead>
            <tr>
                <th>id</th>
                <th>商品名</th>
                <th>価格</th>
                <th><!-- 編集ボタン --></th>
                <th><!-- 削除ボタン --></th>
            </tr>
        </thead>
        <!-- テーブルの中身を出力します -->
        <tbody>
            <!-- 画面でforeachを利用できます -->
            <?php foreach ($items as $item) : ?>
                <tr>
                    <!-- $itemはItemクラスのオブジェクトです -->
                    <td><?php echo $item->id; ?></td>
                    <td><?php echo $item->name; ?></td>
                    <!-- number_format()関数を利用することで下3桁ごとにカンマを付けてくれます -->
                    <td><?php echo number_format($item->price); ?></td>
                    <td>
                        <!-- 編集ページにアクセスします -->
                        <form action="/item_manager/public/item/henshu/<?php echo $item->id; ?>" method="get">
                            <input type="submit" value="編集">
                        </form>
                    </td>
                    <td>
                        <!-- 削除実行フォームです -->
                        <form action="/item_manager/public/item/sakujo/<?php echo $item->id; ?>" method="post">
                            <!-- POST通信のため、csrf_field()用意しておきましょう -->
                            {{ csrf_field() }}
                            <input type="submit" value="削除">
                        </form>
                    </td>
                </tr>
                <!-- foreachを終了します -->
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>