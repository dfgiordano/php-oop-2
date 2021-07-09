<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
$c = new CreditCard(..);
$user->insertCreditCard($c); -->
<?php 
    require __DIR__ . "/classes/product.php" ;

    $dragon = new Product("Shenron DragonBall Pop Vinyl","Dragon Ball Shenron Dragon 10-Inch Funko Pop! Il vinile verrà fornito in una scatola da vetrina.",30 . "€", 5,"https://cdn.webshopapp.com/shops/316089/files/362178442/1500x4000x3/funko-dragon-ball-z-shenron-funko-pop-super-sized.jpg");
    $donatello = new Product("Ninja Turtles Donatello Funko Pop","Ninja Turtles Donatello 10-Inch Funko Pop! Il vinile verrà fornito in una scatola da vetrina.",20 . "€", 2,"https://static.thcdn.com/images/large/webp//productimg/1600/1600/12906486-2084877258573118.jpg");
    $andromeda = new Product("Andromeda Shun Funko Pop","Andromeda Shun 10-Inch Funko Pop! Il vinile verrà fornito in una scatola da vetrina.",15 . "€", 2,"https://static.thcdn.com/images/large/webp//productimg/1600/1600/12365144-2054817622111729.jpg");
    $curry = new NewArrivals("Stephen Curry NBA LIMITED EDITION","Stephen Curry NBA 10-Inch Funko Pop! Il vinile verrà fornito in una scatola da vetrina.",50 . "€", 1,"https://m.media-amazon.com/images/I/416iXVkf0nL._SL320_.jpg",$available_from = "31/07/2021");
    $james = new NewArrivals("Lebron James NBA LIMITED EDITION","Lebron James NBA 10-Inch Funko Pop! Il vinile verrà fornito in una scatola da vetrina e starà MOLTO ALTO",50 . "€", 1,"https://static.thcdn.com/images/large/webp/productimg/1600/1600/11867439-5754641679887648.jpeg",$available_from = "31/07/2021");
    $bryant = new NewArrivals("Kobe Bryant NBA LIMITED EDITION","Kobe BryantNBA 10-Inch Funko Pop! Il vinile verrà fornito in una scatola da vetrina.",50 . "€", 1,"https://images-na.ssl-images-amazon.com/images/I/51RiIFDiMSL._AC_SY355_.jpg",$available_from = "31/07/2021");
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Shop Online (OOP)</title>
</head>
<body>
    <?php require __DIR__ . "/partials/header.php" ?>
    <main>
        <div class="container">
            <div class="product">
                <div>
                    <img class= "product_image available_now" src=" <?= $dragon -> image ?> " alt="shenron_funko_pop">
                </div>
                <h2> <?= $dragon -> product_name ?> </h2>
                <div class="price"> <?="Prezzo :". $dragon -> price ?> </div>
                <div class="availability"> <?="Disponibilità :" . $dragon -> available ?> </div>
                <p class="hide"> <?= $dragon -> description ?> </p>
                <?php require __DIR__ . "/partials/button.php" ?>
            </div>
            <div class="product">
                <div>
                    <img class= "product_image available_now" src=" <?= $donatello -> image ?> " alt="donatello_funko_pop">
                </div>
                <h2> <?= $donatello -> product_name ?> </h2>
                <div class="price"> <?="Prezzo :". $donatello -> price ?> </div>
                <div class="availability"> <?="Disponibilità :" . $donatello -> available ?> </div>
                <p class="hide"> <?= $donatello -> description ?> </p>
                <?php require __DIR__ . "/partials/button.php" ?>
            </div>
            <div class="product">
                <div>
                    <img class= "product_image available_now" src=" <?= $andromeda -> image ?> " alt="andromeda_funko_pop">
                </div>
                <h2> <?= $andromeda -> product_name ?> </h2>
                <div class="price"> <?="Prezzo :". $andromeda -> price ?> </div>
                <div class="availability"> <?="Disponibilità :" . $andromeda -> available ?> </div>
                <p class="hide"> <?= $andromeda -> description ?> </p>
                <?php require __DIR__ . "/partials/button.php" ?>
            </div>
            <div class="product">
                <h3> <?= $curry -> setAvailability($available_from) ?> </h3>
                <div>
                    <img class= "product_image" src=" <?= $curry -> image ?> " alt="curry_funko_pop">
                </div>
                <h2> <?= $curry -> product_name ?> </h2>
                <div class="price"> <?="Prezzo :". $curry -> price ?> </div>
                <div class="availability"> <?="Disponibilità :" . $curry -> available ?> </div>
                <p class="hide"> <?= $curry -> description ?> </p>
                <?php require __DIR__ . "/partials/button.php" ?>
            </div>
            <div class="product">
                <h3> <?= $james -> setAvailability($available_from) ?> </h3>
                <div>
                    <img class= "product_image" src=" <?= $james -> image ?> " alt="james_funko_pop">
                </div>
                <h2> <?= $james -> product_name ?> </h2>
                <div class="price"> <?="Prezzo :". $james -> price ?> </div>
                <div class="availability"> <?="Disponibilità :" . $james -> available ?> </div>
                <p class="hide"> <?= $james -> description ?> </p>
                <?php require __DIR__ . "/partials/button.php" ?>
            </div>
            <div class="product">
            <h3> <?= $bryant -> setAvailability($available_from) ?> </h3>
                <div>
                    <img class= "product_image" src=" <?= $bryant -> image ?> " alt="bryant_funko_pop">
                </div>
                <h2> <?= $bryant -> product_name ?> </h2>
                <div class="price"> <?="Prezzo :". $bryant -> price ?> </div>
                <div class="availability"> <?="Disponibilità :" . $bryant -> available ?> </div>
                <p class="hide"> <?= $bryant -> description ?> </p>
                <?php require __DIR__ . "/partials/button.php" ?>
            </div>
        </div>
        
    </main>

    <?php require __DIR__ . "/partials/footer.php" ?>
    
    
    
    
    
    



</body>
</html>