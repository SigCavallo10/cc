<?php
session_start();
include_once('connessione.php');
connessione();
$query="SELECT nome,cognome,tempo,articoli.id,testo,titolo FROM articoli,autori WHERE fk_autore = autori.id";
$result=mysqli_query(connessione(),$query);
if(mysqli_num_rows($result) > 0){?>
    <div class="articoli">
<?php
    while($riga = mysqli_fetch_assoc($result)){?>
    <div class="articolo">
        <div>
            <h1><?php echo $riga['titolo']?></h1>    
            <h4><?php echo $riga['cognome']." ".$riga['nome']?></h4>
            <h4><?php echo $riga['tempo']?></h4>
        </div>
        <div>
            <p><?php echo substr($riga['testo'], 0, 100)?></p>
        </div>
        <div>
            <form action="articolo.php" method="GET">
                <input type="hidden" name="articolo" value="<?php echo $riga['id'] ?>">
                <button type="submit">leggi di più</button>
            </form>
        </div>
    </div>
    <?php
    }
}
?>
</div>
<style>
    .articoli{
        display: flex;
        flex-direction: row;
    }
    .articolo{
        margin: 50px 20px;
        width: 200px;
        height: 300px;
    }
</style>