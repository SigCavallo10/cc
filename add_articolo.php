<?php
session_start();
include_once('connessione.php');
if(isset($_POST['title']) && isset($_POST['text']) && !empty($_POST['title']) && !empty($_POST['text'])){
    $title = $_POST['title'];
    $text = $_POST['text'];
    $tempo = date('H:i',time());
    connessione();
    $autore = "SELECT * FROM autori WHERE email= '{$_SESSION['email']}'";
    $result =  $result = mysqli_query(connessione(),$autore);
    if(mysqli_num_rows($result) === 1){
    $riga = mysqli_fetch_assoc($result);
    $autore = $riga['id'];
    $inserisci_articolo = "INSERT INTO articoli(titolo,testo,fk_autore,tempo) VALUES ('$title','$text',$id,$tempo)";
    $result = mysqli_query(connessione(),$inserisci_articolo);
    }
    if($result == true){
        echo '<script>alert("Articolo inserito")</script>
        <a href="articoli.php">Visualizza articoli</a>';
    }else{
        echo '<script>alert("Articolo non inserito")</script>';
        exit();
    }
}else{
    echo '<script>alert("Titolo e/o testo non inseriti")</script>';
    exit();
}

?>