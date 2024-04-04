<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=stylesheet href=style.css>
    <title>Sklep</title>
</head>

<body>
    <header class="flex-container topnav">
        <img src="img/image-removebg-preview.png" alt="logo" id="logo">
        <form action="search.php" method="get">
            <input type="text" name="search" id="search" placeholder="Wyszukaj Produkt">
            <input type="submit" value="Szukaj">
        </form>
        <a href="cart.php" id="cart">Koszyk</a>
    </header>


    <main class="flex-container-wrap">
        <div class="card text-center">
            <h3>nazwa oferty </h3>
            <!--cena-->
            <p>cena:100zł</p>
        </div>

        <?php
        include "display_products.php";
        ?>

    </main>
</body>

</html>