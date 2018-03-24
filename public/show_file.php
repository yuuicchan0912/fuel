<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>ファイル表示プログラム</title>
<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body>
<?php
  
  //ファイル名指定
  $file = __FILE__;

  //ファイルの中身を代入
  $content = file_get_contents($file);

  //ファイルの中身を表示
  echo nl2br(htmlspecialchars($content,ENT_QUOTES,"UTF-8",false));

?>
</body>
</html>