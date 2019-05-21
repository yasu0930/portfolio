<?php
       
    
    // $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
    // $kana = htmlspecialchars($_POST['kana'], ENT_QUOTES);
    // $sex = htmlspecialchars($_POST['sex'], ENT_QUOTES);
    // $tel = htmlspecialchars($_POST['tel'], ENT_QUOTES);
    // $email = htmlspecialchars($_POST['email'], ENT_QUOTES);
    
    
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> 予約フォーム</title>
</head>
<body>
    <div>
    <strong>最終内容確認</strong>
    <p>入力内容に間違いはございませんか？<br>よろしければ「予約を確定する」を押してください。</p>
        <table>
        <strong>予約内容</strong>
        <tr>
            <th>[予約日時]</th>
            <td></td>
        </tr>
        <tr>
            <th>[料金]</th>
            <td></td>
        </tr>
        <tr>
            <th>[スタジオ]</th>
            <td></td>
        </tr>
        <tr>
            <th>[撮影プラン]</th>
            <td></td>
        </tr>    
        </table>
        <table>
        <strong>予約者情報</strong>
        <tr>
            <th>[お名前]</th>
            <td><?=$name?></td>
        </tr>
        <tr>
            <th>[フリガナ]</th>
            <td><?=$kana?></td>
        </tr>
        <tr>
            <th>[性別]</th>
            <td><?=$sex?></td>
        </tr>
        <tr>
            <th>[電話番号]</th>
            <td><?=$tel?></td>
        </tr>
        <tr>
            <th>[メールアドレス]</th>
            <td><?=$email?></td>
        </tr>
        <tr>
            <th>[お客様のメッセージ]</th>
            <td><?=$cmt?></td>
        </tr>
        </table>
    </div><br><br>
    <form  method="post" action="insert.php">
    </div class="">
            <div class="">
            <button>前の画面に戻る</button>
            <div>
            </div class="">
            <div>
            <input type="submit" value="予約を確定する">
            <input type="hidden" name="studio" value="<?=$studio?>"><br>
        <input type="hidden" name="plan" value="<?=$plan?>"><br>
        <input type="hidden" name="date" value="<?=$date?>"><br>
        <input type="hidden" name="name" value="<?=$name?>"><br>
        <input type="hidden" name="kana" value="<?=$kana?>"><br>
        <input type="hidden" name="sex" value="<?=$sex?>"><br>
        <input type="hidden" name="tel" value="<?=$tel?>"><br>
        <input type="hidden" name="email" value="<?=$email?>"><br>
        <input type="hidden" name="cmt" value="<?=$cmt?>"><br><br><br>
    </form>
</body>
</html>

