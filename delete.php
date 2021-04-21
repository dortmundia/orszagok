
<!doctype html>
<html lang="en">
<head>
<title>Ország csúcsok</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta charset="UTF-8">
    <style>

    h1    {font-size:400%; text-align:center; font-color:#603030 ;  text-shadow: 1px 1px #303060; }
   
    .col-sm-12,.col-sm-3{ 
      background-color:#efefff ;
      border-radius: 5px;
      border: 5px solid   #dedeff ;   
    }

    body{background-color:#101030;}
    
    </style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="background-color:#101030;">


  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <a href="index.php"> Lista </a>
        <a href="delete.php"> Törlés </a>
        <a href="edit.php"> Módosítás </a>
        <h1 >Ország csúcsok</h1>
      </div>
    </div>

      <?php
        include("server.php");
        $torleslista = new adatbazis();

        if(isset($_GET["torlendo"]) and is_numeric($_GET["torlendo"]))
        {
            $torleslista->torles($_GET["torlendo"]);
        }

        $torleslista->lista_torlesel();
      ?>

   
    <div class="row">
      <div class="col-sm-12">
       Készítette: Berendi Barnabás, 2021
      
    </div>
  </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="jquery.min.js"></script>
    <script src="scripts.js"></script>
  </body>
</html>