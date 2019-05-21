<?php
//共通に使う関数を記述

function h($a)
{
    return htmlspecialchars($a, ENT_QUOTES);
}

function project_con()
{
    try {
        return new PDO('mysql:dbname=project;charset=utf8;host=localhost', 'root', ''); //XAMP
        //return new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost', 'root', 'root'); //MAMP
    } catch (PDOException $e) {
        exit('DB_CONECTION_ERROR:' . $e->getMessage());
    }
}

function sqlError($stmt)
{
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    $error = $stmt->errorInfo();
    exit("SQL_ERROR:" . $error[2]);
}

function chkSsid(){
    if(!isset($_SESSION["chk_ssid"]) || $_SESSION["chk_ssid"] != session_id()   ){
        exit("LoginWrror");  //ここは本来何もない（""）
    
    }else{
        session_regenerate_id(true);
        $_SESSION["chk_ssid"] = session_id();
    }
    }