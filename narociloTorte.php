<?php

//$strings = explode('Ime in priimek:', $_POST['narocilo'])[1];
$strings = preg_split("/(Ime in priimek:|Naslov:|Telefonska številka:|Email:|Datum prevzema:|Ura prevzema:|Oblika:|Teža:|Teža \(1KG - 7 OSEB\):|Dekoracija:|Napis:|Okus:|Priložnost:|Slika za tisk:|Posebni napotki\/Želje:)/", $_POST['narocilo'] );

?>


<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>The HTML5 Herald</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="style.css">

  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>

<body>
  <script src="js/scripts.js"></script>

  <div>
    <table class="table table-bordered">
      <tr>
        <td class="firstCol">Ime in priimek:</td>
        <td class="secondCol"><?php echo $strings[1]; ?></td>
      </tr>
      <tr>
        <td class="firstCol">Naslov:</td>
        <td class="secondCol"><?php echo $strings[2]; ?></td>
      </tr>
      <tr>
        <td class="firstCol">Telefonska številka:</td>
        <td class="secondCol"><?php echo $strings[3]; ?></td>
      </tr>
      <tr>
        <td class="firstCol">Email:</td>
        <td class="secondCol"><?php echo $strings[4]; ?></td>
      </tr>
      <tr>
        <td class="firstCol">Datum prevzema:</td>
        <td class="secondCol"><?php echo $strings[5].' / '.$strings[6]; ?></td>
      </tr>
      <tr>
        <td class="firstCol">Oblika:</td>
        <td class="secondCol"><?php echo $strings[7]; ?></td>
      </tr>
      <tr>
        <td class="firstCol">Teža:</td>
        <td class="secondCol"><?php echo $strings[8]; ?></td>
      </tr>
      <tr>
        <td class="firstCol">Dekoracija:</td>
        <td class="secondCol"><?php echo $strings[9]; ?></td>
      </tr>
      <tr>
        <td class="firstCol">Napis:</td>
        <td class="secondCol"><?php echo $strings[10]; ?></td>
      </tr>
      <tr>
        <td class="firstCol">Okus:</td>
        <td class="secondCol"><?php echo $strings[11]; ?></td>
      </tr>
      <tr>
        <td class="firstCol">Slika za tisk:</td>
        <td class="secondCol"><?php echo $strings[13]; ?></td>
      </tr>
      <tr>
        <td class="firstCol">Posebni napotki/Želje:</td>
        <td class="secondCol"><?php echo $strings[14]; ?></td>
      </tr>
    </table>
  </div>
<audio src="test.mp3" autoplay="autoplay" loop="loop"></audio>
</body>
</html>
