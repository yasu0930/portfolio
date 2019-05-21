<?php
//  変数の受け取り
$studio = $_POST["studio"];
$plan = $_POST["plan"];
$date = $_POST["date"];
$name = $_POST["name"];
$kana = $_POST["kana"];
$sex = $_POST["sex"];
$tel = $_POST["tel"];
$email = $_POST["email"];
$cmt = $_POST["cmt"];

$error = array();
if (empty($name)) {
  $error['name'] = "名前を入力してください。";
}
if (empty($kana)) {
  $error['kana'] = " フリガナを入力してください。";
}
if (empty($sex)) {
  $error['sex'] = "性別を選択して下さい。";
}if (empty($tel)) {
  $error['tel'] = "電話番号を入力してください。";
}
if (empty($email)) {
  $error['email'] = "メールドレスを入力してください。";
}

if(count($error) === 0){
  header('location: comp_con.php');
  exit();
}


?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title> 予約フォーム</title>
</head>
<body>
<header>
</header>


<!--main-->
<form method="post" action="comp.php">
  <div class="jumbotron">
    <div class="text-align">
   <fieldset>
    <legend>予約者情報入力</legend>
    <div class="apoint">
    <label>【必須】お名前：<input type="text" name="name" placeholder="例: 山田 太朗"></label><p><?php if(empty($name)){ echo $error['name']; } ?></p>
    <label>【必須】フリガナ：<input type="text" name="kana" placeholder="例:  ヤマダ タロウ"></label><p><?php if(empty($kana)){ echo $error['kana']; } ?></p>
    <label>【必須】性別：
    <input type="radio" name="sex" value="男性"<?php if($sex == "男性"){echo "checked";}?>><span class="text"> 男性</span>
    <input type="radio" name="sex" value="女性"<?php if($sex == "女性"){echo "checked";}?>><span class="text">女性</span>
    </label><p><?php if(empty($sex)){ echo $error['sex']; } ?></p>
    <label>【必須】電話番号：<input type="text" name="tel" placeholder="例: 08011112222"></label><p><?php if(empty($tel)){ echo $error['tel']; } ?></p>
    <p>※ - (ハイフン）なしで 半角英数字11文字以内</p>
    <label> 【必須】メールアドレス：<input type="text" name="email" placeholder="例: taroyamada@gmail.com"></label><p><?php if(empty($email)){ echo $error['email']; } ?></p>
    <div class="alert alert-dark" role="alert">
    <strong>[任意]予約についてのご要望などメッセージがございましたらご記入ください</strong><br>
    <label><input name="cmt" type="text"></label><br><br>
    </div>
    </div>
    </div class="">
        <div class="">
        <button r>前の画面に戻る</button>
        <div>
        </div class="">
        <div>
        <input type="submit" value="次へ進む">
        </div>
     </div>
    </fieldset>
  </div>
  <input type="hidden" name="studio" value="<?=$studio?>"><br>
  <input type="hidden" name="plan" value="<?=$plan?>"><br>
  <input type="hidden" name="date" value="<?=$date?>"><br>

</form>




    
</body>
</html>