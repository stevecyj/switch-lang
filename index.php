<?php
session_start();


$browser_lang=$_SERVER['HTTP_ACCEPT_LANGUAGE'];
echo "您的瀏覽器語系是：".$browser_lang;
echo "<br />";

$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'index.php';

if (isset($_SESSION['language'])) {
    $lang = $_SESSION['language'];
    echo '<br/>'.$lang;
    echo '<br/>'. dirname($host . $uri) . '/' .$_SESSION['language'] . '/' . $extra . '<br/>';

    $to = 'Location: http://' .($host . $uri) . '/' .$lang . '/' . $extra;
    echo $to;
    header($to);
} else {
    /* 根據當前請求所在的目錄，重導向到不同的頁面 */
    if (strtok($_SERVER['HTTP_ACCEPT_LANGUAGE'], ',')=='zh-TW') {
        echo "Taiwan Very Good~~" . "<br/>";
        header("Location: http://$host$uri/zh/$extra");
    } else {
        echo "I am one two three" . "<br/>";
        header("Location: http://$host$uri/en/$extra");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./css/all.css">
</head>
<body>
  <a href="javascript:void(0)" class="btn02">zh</a>
  <a href="javascript:void(0)" class="btn02">en</a>
</body>
</html>