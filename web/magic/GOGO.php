<?php

$flag = "flag{N1c3_w0rk!!@__@!}";

$user_hash = $_GET['GOGO'];

if(sha1("10932435112") == md5($user_hash)){
    echo "<h1>".$flag."</h1>";
}
else{
    echo "no... -_-;";
}
?>
