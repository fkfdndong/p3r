<!DOCTYPE html>
<html lang="en">

<head>

  <title> Bulltin de note bac</title>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <link rel="stylesheet" href="p3.css">

</head>

<pre>

<?php
// declaration des liste
$matiére = ['<h3>Moyenne</h3>',];
$coefficient = [1,];
//reception des note
$Note = $_POST['Note'];
// initialisation de la variable sommeNote
$sommeNote = 0;
for ($i = 0; $i <= 0; $i++) {
  $sommeNote = $sommeNote + $Note[$i] * $coefficient[$i];
}
//calcule de la moyenne
$moyenne = $sommeNote / 1

?>
 </pre>

<body>
  <h2>
    <?php
    if ($moyenne < 10)
      echo 'Non Admis.e';
    elseif ($moyenne <= 12 && $moyenne >= 10)
      echo ' Admis avec une mention : Passable';
    elseif ($moyenne <= 14 && $moyenne >= 12)
      echo 'Admis avec une mention :Assez-bien';
    elseif ($moyenne <= 16 && $moyenne >= 14)
      echo ' Admis avec une mention :Bien';
    elseif ($moyenne <= 18 && $moyenne >= 16)
      echo ' Admis avec une mention : Trés Bien';
    elseif ($moyenne  >= 18)
      echo 'Admis avec une mention: Excellent';

    ?>

  </h2>
  <form method="post" action="#">

    <table class="tables  text-center">
      <tr>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
      </tr>

      <?php

      foreach ($matiére as $key => $value) {
        echo '<tr><td>' . $value . '</td><td><input type="number" name="Note[]" value="' . $Note[$key] . '"> </td>';
      }

      ?>
      <tr>
        <th></th>
        <th></th>
        <th></th>
        <th> </th>
      </tr>

    </table>
    <br>
    <input type="submit" name="Envoyer" value="Envoyer">

  </form>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKI PhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>