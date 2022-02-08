<?php
session_start();

$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'index.php';

echo '我是一二三七八九'.'<br/>';
echo $_SESSION['language'].'<br/>';
echo isset($_SESSION['language']) ? $_SESSION['language'] : 'no language';
echo isset($_SESSION['language']);


if (isset($_GET['language'])) {
    $_SESSION['language'] = $_GET['language'];
    $lang = $_SESSION['language'];
    echo '<br/>'.$lang;
    echo '<br/>'. dirname($host . $uri) . '/' .$_SESSION['language'] . '/' . $extra . '<br/>';

    $to = 'Location: http://' .dirname($host . $uri) . '/' .$lang . '/' . $extra;
    echo $to;
    header($to);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/all.css">
  <title>Document</title>
</head>
<body>
  <a href="index.php?language=en" class="btn02">en</a>
</body>
</html>