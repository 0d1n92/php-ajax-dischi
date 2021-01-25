<?php
  include __DIR__ ."/includes/variable.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    

    <title>php-ajax-dischi</title>
</head>
<body>
  <header>
   <div class="wrapper_margin_68">
    <div id="header_logo">
        <a href="#">
        <img src='img/logo.svg' alt="">
        </a>
    </div>
    <div class=header_right>
    <form action="<?php $genrs=$_GET["Genrs"] ?>" method="post">
    
    <select name="Genrs" id="genrs">
      <option value="Rock">Rock</option>
      <option value="Pop">Pop</option>
      <option value="Rap">Rap</option>
    </select>
    </form>
    </div>
  </header>
  
<main id="app">
    <div id="container_disk" class="container_flex wrapper_margin_68 space_between">
   
      <div v-for="disc in library"class=box_card_disk>
          <div class="card">
              <img :src="disc.poster" :alt="'cover_'+ disc.title">
              <h4 class="title_disk">{{disc.title}}</h4>
              <p class="author">{{disc.author}}</p>
              <p class="year">{{disc.year}}</p>
          </div>
      </div>
                  
    </div>
</main>
 <script src="js/script.js"></script>
</body>
</html>