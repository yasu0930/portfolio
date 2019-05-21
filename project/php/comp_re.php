<?php
$studio = $_POST["studio"];
$plan = $_POST["plan"];
$date = $_POST["date"];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">    
    <title> 予約フォーム</title>
</head>
<body>
<header>
</header>

<form method="post" action="comp.php">
  <div class="jumbotron">
    <div class="text-align">
   <fieldset>
    <legend>予約者情報入力</legend>
    <div class="apoint">
    <label>【必須】お名前：<input type="text" name="name" placeholder="例: 山田 太朗"><br><br>
    <label>【必須】フリガナ：<input type="text" name="kana" placeholder="例:  ヤマダ タロウ"></label><br><br>
    <label>【必須】性別：
    <input type="radio" name="sex" value="男性" <?php if($sex == "男性"){echo "checked";}?>><span class="text"> 男性</span>
    <input type="radio" name="sex" value="女性" <?php if($sex == "女性"){echo "checked";}?>><span class="text">女性</span>
    </label><br><br>
    <label>【必須】電話番号：<input type="text" name="tel" placeholder="例: 08011112222"></label>
    <p>※ - (ハイフン）なしで 半角英数字11文字以内</p>
    <label> 【必須】メールアドレス：<input type="text" name="email" placeholder="例: taroyamada@gmail.com"></label><br><br>
    <label> （確認）メールアドレス：<input type="text" name="email" placeholder="確認用"></label><br><br>
    <div class="alert alert-dark" role="alert">
    <strong>[任意]予約についてのご要望などメッセージがございましたらご記入ください</strong><br>
    <label><input name="cmt" type="text"></label><br><br>
    </div>
    </div>
    </div class="">
        <div class="">
        <button>前の画面に戻る</button>
        <div>
        </div class="">
        <div>
        <input type="submit" value="次へ進む">
        </div>
     </div>
    </fieldset>
    <input type="hidden" name="studio" value="<?=$studio?>"><br>
  <input type="hidden" name="plan" value="<?=$plan?>"><br>
  <input type="hidden" name="date" value="<?=$date?>"><br>

  </div>
</form>
