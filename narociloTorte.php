<?php

//$strings = explode('Ime in priimek:', $_POST['narocilo'])[1];
$strings = preg_split("/(Ime in priimek:|Naslov:|Telefonska številka:|Email:|Datum prevzema:|Ura prevzema:|Oblika:|Teža:|Teža \(1KG - 7 OSEB\):|Dekoracija:|Napis:|Okus:|Priložnost:|Slika za tisk:|Posebni napotki\/Želje:)/", trim($_POST['narocilo']));
$names = array("Ime in priimek:", "Naslov:", "Telefonska številka:", "Email:", "Datum prevzema:", "Ura prevzema:", "Oblika:", "Teža:", "Dekoracija:", "Napis:", "Okus:", "Priložnost:", "Slika za tisk:", "Posebni napotki\/Želje:");
$final = array();

array_shift($strings);


for ($i=0; $i < count($names); $i++)
{
  if(isset($strings[$i]) && strlen(trim($strings[$i])) != 0)
  {
    $final[$names[$i]] = $strings[$i];
  }
}

if(isset($final["Datum prevzema:"]) && isset($final["Ura prevzema:"]))
{
  $dat = $final["Datum prevzema:"];
  $ura = $final["Ura prevzema:"];
  unset($final["Ura prevzema:"]);
  $final["Datum prevzema:"] = $dat." ob ".$ura;
}
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

      <?php
        foreach ($final as $key => $value)
        {
          echo "<tr>";
          echo "<td class=\"firstCol\">$key</td>";
          echo "<td class=\"secondCol\">$value</td>";
          echo "</tr>";
        }
        ?>

    </table>
  </div>
<audio src="test.mp3" autoplay="autoplay" loop="loop"></audio>
</body>
</html>
