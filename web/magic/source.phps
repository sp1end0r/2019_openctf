<?php
$flag = "^^";
$user_hash = $_GET['GOGO'];
if(sha1("10932435112") == md5($user_hash)){
    echo "<h1>".$flag."</h1>";
}
else{
    echo "no... -_-;";
}
?>
