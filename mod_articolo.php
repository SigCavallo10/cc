<?php
include_once('connessione.php');

if(isset($_GET['articolo'])){
connessione();
$id_articolo = $_GET['articolo'];
$query="SELECT * FROM articoli WHERE articoli.id=$id_articolo";
$result=mysqli_query(connessione(),$query);
if(mysqli_num_rows($result) > 0){
$riga=mysqli_fetch_assoc($result);?>
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?php echo $id_articolo ?>">
        <input type="text" name="titolo" value="<?php echo $riga['titolo']?>">
        <textarea name="testo"><?php echo $riga['testo']?></textarea>
        <button type="submit">modifica</button>
    </form>
<?php
}
}
if(isset($_POST['id'])){
$id = $_POST['id'];
$titolo = $_POST['titolo'];
$testo = $_POST['testo'];
$update="UPDATE articoli SET titolo='$titolo' WHERE id = $id";
$result= mysqli_query(connessione(),$update);
if($result){
    header("location: articoli.php");
}else{
    echo "errore";
}
}
?>
