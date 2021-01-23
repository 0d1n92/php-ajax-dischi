<!-- Stampare a schermo una decina di dischi musicali
(vedi screenshot) in due modi diversi:
- Solo con l’utilizzo di PHP, che stampa
direttamente i dischi in pagina: al caricamento
della pagina ci saranno tutti i dischi. -->
<?php
include  __DIR__."/db.php";
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <title>php-ajax-dischi</title>
</head>
<body>
    <?php 
   
    include __DIR__."/includes/header.php";
    include __DIR__."/includes/main.php";
    include  __DIR__."/includes/footer.php";
    ?>   
</body>
</html>