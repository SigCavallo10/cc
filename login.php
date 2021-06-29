<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="POST">
        <input type="email" name="email" placeholder="inserisci email...">
        <input type="password" name="pass" placeholder="inserisci password">
        <button type="submit">login</button>
    </form>

<?php
include_once('connessione.php');
function input($dato){
  $dato = trim($dato);
  $dato = stripslashes($dato);
  return $dato;
}
if(isset($_POST['email']) && isset($_POST['pass'])){
    $email = input($_POST['email']);
    $password = input($_POST['pass']);
    connessione();
    $controllo_utente = "SELECT * FROM autori WHERE email = '$email' AND pass = '$password'";
    $result = mysqli_query(connessione(),$controllo_utente);
    if(mysqli_num_rows($result) === 1){
        $_SESSION['email'] = $email;
        header("location: home.php");
    }
}else{
    echo '<script>alert("email e/o password non inserite")</script>';
}
?>
</body>
</html>