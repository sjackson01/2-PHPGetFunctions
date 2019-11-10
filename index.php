<?php

$_GET = 'Steven';

function greeting(){
    $name = $_GET['name'];
    echo "Hello" . $name;  
}
greeting();

?>

