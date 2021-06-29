<?php
include_once('connessione.php');
connessione();
if(isset($_GET['articolo'])){
    $id_articolo = $_GET['articolo'];
    $query = "SELECT * FROM articoli,autori WHERE articoli.id = $id_articolo";
    $result=mysqli_query(connessione(),$query);
if(mysqli_num_rows($result) > 0){
    $riga=mysqli_fetch_assoc($result);
?>
    <h1><?php echo $riga['titolo']?></h1>
    <a href="mod_articolo.php?articolo=<?php echo $id_articolo ?>">modifica articolo</a>
    <a href="elimina_articolo.php?articolo=<?php echo $id_articolo ?>">elimina articolo</a>
    <h4><?php echo $riga['cognome']." ".$riga['nome']?></h4> 
    <h4><?php echo $riga['tempo']?></h4>
    <p><?php echo $riga['testo']?></p>
    <?php
}
}else{
    echo 'articolo non impostato';
}
?>