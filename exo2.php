<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
<?php include("./partial/_navBar.php"); ?>
<a href="./Exo.php">EXERCICE 2</a>
<h1>Exercice 2</h1>
<h3>Décoder des messages</h3>
        <p>les messages à décoder</p>
        <?php
        $message1 = "0@sn9sirppa@#?ia'jgtvryko1";
        $message2 = "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
        $message3 = "aopi?sgnirts@#?sedhtg+p9l!";
        ?>
        <ul>
            <li>message 1 : <?php echo $message1; ?></li>
            <li>message 2 : <?php echo $message2; ?></li>
            <li>message 3 : <?php echo $message3; ?></li>
        </ul>
        <p>comment proceder?</p>
        <ol>
            <li>Calculer la longueur de la chaîne et la diviser par 2, tu obtiendras ainsi le "chiffre-clé".</li>
            <li>Récupère ensuite la <a href="https://www.php.net/manual/fr/function.substr.php">sous-chaîne</a> de la longueur du chiffre-clé en commençant à partir du 6ème caractère.</li>
            <li>Remplace les chaînes '@#?' par un espace.</li>
            <li>Pour finir, inverse la chaîne de caractères.</li>
        </ol>
        <?php
        /**
         * pour la division, un code à tester:
         * $number = 50;
         * $result = 50 / 2;
         * echo $result;
         */
        // TO DO
        $chiffreCle = strlen ($message1) / 2;
        $sousChaine = substr ($message1, 5, $clef);
        $espace = str_replace ("@#?", "", $sousChaine);
        $decodedMessage1 = strrev ($espace);
        // TO DO
        $chiffreCle = strlen ($message2) / 2;
        $sousChaine = substr ($message2, 5, $clef);
        $espace = str_replace ("@#?", "", $sousChaine);
        $decodedMessage2 = strrev ($espace);
        
        // TO DO
        $chiffreCle = strlen ($message3) / 2;
        $sousChaine = substr ($message3, 5, $clef);
        $espace = str_replace ("@#?", "", $sousChaine);
        $decodedMessage3= strrev ($espace);
     
        ?>
        <p>résultats:</p>
        <p>message1: <?php echo $decodedMessage1 ?><br>
            message2: <?php echo $decodedMessage2 ?><br>
            message3: <?php echo $decodedMessage3 ?><br>
        </p>





<script src="./bootstrap.bundle.min.js"></script>
</body>
</html>