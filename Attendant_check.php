<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <title>出席確認しました</title>
</head>

<body>
    <?php
    $deadline = $_POST["deadline"];
    $class = $_POST["class"];
    $number = $_POST["number"];
    $name = $_POST["name"];
    $write_data = array($deadline, $number, $class);

    echo ($deadline . ':' . $number . ':' . $name . 'の' . $class . 'の出席を受け付けました。');

    $file = fopen('./data/' . $deadline . $class . '.csv', 'a');
    // ファイルロックの処理
    flock($file, LOCK_EX);
    // ファイル書き込み処理
    fputcsv($file, $write_data);
    // ファイルアンロックの処理
    flock($file, LOCK_UN);
    // ファイルを閉じる処理
    fclose($file);
    // 入力画面へ移動
    // header("");
    ?>
</body>

</html>