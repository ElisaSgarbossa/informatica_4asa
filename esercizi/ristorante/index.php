<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menù ristorante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<?php
 $primi = array("Spaghetti alle vongole", "Penne all'arrabbiata", "Risotto ai funghi");
 $secondi = array("Arrosto di carne", "Grigliata di manzo", " Peperoni ripieni");
 $contorni = array("Patate al forno", "Fagioli in salsa", "Verdura cotta");
 $dolci = array("Crostata alle prugne", "Cheesecake al caramello", "Pavlova alle fragole");
?>   
<div class="table-responsive">
  <table class="table align-middle">
    <thead>
      <tr>
      <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <tr>
      <th scope="row">#</th>
      <th scope="col">Primi</th>
      <th scope="col">Secondi</th>
      <th scope="col">Contorni</th>
      <th scope="col">Dolci</th>
      </tr>
      <tr class="align-bottom">
      <th scope="row">1</th>
      <td>
        <?php
        foreach ($primi as $value) {
            echo "$value <br>";
          }
        ?>
      </td>
      
      </tr>
      <tr>
        <td>...</td>
        <td>...</td>
        <td class="align-top">This cell is aligned to the top.</td>
        <td>...</td>
      </tr>
    </tbody>
  </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>

