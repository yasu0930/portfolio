<?php
//  データ取得
$name = $_POST["name"];
$kana = $_POST["kana"];
$sex = $_POST["sex"];
$tel = $_POST["tel"];
$email = $_POST["email"];
$cmt = $_POST["cmt"];

// DB接続
include "func.php";
$pdo = project_con();

//  データ登録SQL
$sql = "INSERT INTO receive_table(name,kana,sex,tel,email,cmt,indate)VALUES(:name,:kana,:sex,:tel,:email,:cmt,sysdate())";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $name, PDO::PARAM_STR); 
$stmt->bindValue(':kana', $kana, PDO::PARAM_STR); 
$stmt->bindValue(':sex', $sex, PDO::PARAM_STR); 
$stmt->bindValue(':tel', $tel ,PDO::PARAM_INT); 
$stmt->bindValue(':email', $email, PDO::PARAM_STR); 
$stmt->bindValue(':cmt', $cmt ,PDO::PARAM_STR); 

$status = $stmt->execute();

//  データ登録処理後
if ($status == false) {
    sqlError($stmt);
} else {
    //５．index.phpへリダイレクト
    header("Location: comp_act.php");
    exit;
}

?>