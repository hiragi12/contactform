<?php
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");

$sql = "insert into contactform(name,mail,age,comments) values(?,?,?,?)";
$stml = $pdo->prepare($sql);

$stml->bindValue(1, $_POST['name']);
$stml->bindValue(1, $_POST['mail']);
$stml->bindValue(1, $_POST['age']);
$stml->bindValue(1, $_POST['comments']);

$stml->execute();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせフォームを作る</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
    <h1>お問い合わせフォーム</h1>

    <div class="confirm">
        <p>
            お問い合わせ有難うございました。<br>3営業日以内に担当者よりご連絡差し上げます。
        </p>
    </div>
    
</body>
</html>