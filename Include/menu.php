<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>CTI games</title>
  </head>

    <body>
        <ul class="nav justify-content-center">
        <?php
        foreach ($colecaoCategoria as $indice=> $value) {
 
        ?>
            <li class="nav-item">
                <b><a class="nav-link" href="categoria.php?cat=<?php echo $indice; ?>"><?php echo $value;?></a></b> 
                
            </li>
            <?php
        }
        ?>
            <li class="searchbar">
                <input type="text" id="txtBusca" placeholder="Buscar..."/>
                <svg class="search" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
            </li>
        </ul>
        <br>
    </body>
</html>
