<!DOCTYPE html>
<html>
<head>
     <meta charset="UTF-8" />
     <title>Testing PEAR HTML_QuickForm</title>
</head>
<body>
<?php
     require_once "HTML/QuickForm.php";
     $form = new HTML_QuickForm('frmTest', 'get');
     $form->addElement('header', 'MyHeader', 'QuickFormのテスト');
     $form->display();
?>
<?php 
  require_once 'PEAR/Info.php'; 
  $info = new PEAR_Info(); 
  $info->show(); 
?>
</body>
</html>