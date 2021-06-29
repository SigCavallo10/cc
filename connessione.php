<?php
function connessione(){
    $conn = mysqli_connect ("localhost", "root", "", "blog");
    if($conn){
    return $conn;
    }else{
    exit();
    }
}