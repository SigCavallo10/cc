<?php
include_once('connessione.php');

if(isset($_GET['articolo'])){
connessione();
$id_articolo = $_GET['articolo'];
$query="DELETE FROM articoli WHERE articoli.id=$id_articolo";
$result=mysqli_query(connessione(),$query);
if($result){
    header("location: articoli.php");
}else{
    echo "errore";
}
}
?>
