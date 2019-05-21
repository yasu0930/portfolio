<?php
session_start();


include "func.php";
chkSsid();
$pdo = project_con();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM receive_table");
$status = $stmt->execute();

//３．データ表示
$view = "";
if ($status == false) {
    sqlError($stmt);
}else {
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)){
        $r=$result["name"];

        
    }
}    