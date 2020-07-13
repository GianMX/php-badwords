<?php
// Creare una variabile con un paragrafo di testo.
$string = "Who are you talking to right now? Who is it you think you see? Do you know how much I make a year? I mean, even if I told you, you wouldn't believe it. Do you know what would happen if I suddenly decided to stop going into work? A business big enough that it could be listed on the NASDAQ goes belly up. Disappears! It ceases to exist without me. No, you clearly don't know who you're talking to, so let me clue you in. I am not in danger, Skyler. I am the danger! A guy opens his door and gets shot and you think that of me? No. I am the one who knocks!";
$badword = $_GET['badword'];
$new_string_text = str_replace($badword,'***',$string);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BadWord</title>
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <!-- MY STYLE  -->
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h2>PARAGRAFO ORIGINALE</h2>
    <!-- Visualizzare a schermo il paragrafo con la relative lunghezza -->
      <p><?php echo $string; ?></p>
      <p class="bold">Paragrafo di <?php echo strlen($string); ?> parole.</p>
    <h2>PARAGRAFO CON CENSURA</h2>
    <!--  sostituire la badword passata in GET con tre * -->
      <p><?php echo $new_string_text ?></p>
      <p class="bold">E' stata censurata la seguente parola : <?php echo $badword; ?></p>
      <p class="bold">La parola censurata è composta da <?php echo strlen($badword); ?> lettere.</p>
  </body>
</html>
