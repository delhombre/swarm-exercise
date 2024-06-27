<!DOCTYPE html>
<html>
  <head>
    <!--site web modifié le 03-08-2022-->
    <title>Utilisation du langage PHP</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, width=device-width" />
    <link rel="stylesheet" href="css/global.css">
  </head>

  <body>
    <main>
      <h1>Page d'accueil utilisant le langage PHP</h1>
      <h2><?php echo $_SERVER['SERVER_ADDR'];?></h2>
      <?php phpinfo();?>
    </main>
  </body>
</html>
