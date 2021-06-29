<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        .container{
            display: flex;
            flex-direction: column;
        }
        h1{text-align: center;}
        form{
            display: flex;
            flex-direction: column;
            margin: 20px;
        }
        input{
            width: 300px;
            padding: 10px;
        }
        h2{margin: 15px 0;}
        button{
            width: 100px;
            padding: 10px;
            margin: 15px 0;
        }
    textarea {
      width: 100%;
      height: 500px;
      resize: none;
    }
</style>
</head>
<body>
<div class="container">
    <h1>Crea articolo</h1>
    <form action="add_articolo.php" method="POST">
    <h2>Inserisci titolo articolo</h2>
    <input type="text" name="title" placeholder="inserisci titolo">
    <h2>Inserisci testo</h2>
    <textarea name="text" placeholder="inserisci testo..."></textarea>
    <button type="submit">add</button>
    </form>
</div>
</body>
</html>