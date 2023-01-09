<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Bad Words</title>
</head>

<body>
    <p>
        <?php
        $myParagraph = "Che bello è quando lo stadio è pieno
        E la musica, la musica riempie il cielo
        È una libidine
        E una rivoluzione
        È una libidine
        È una rivoluzione
        Ciao mamma guarda come mi diverto
        Hey hey, hey hey, ah ah ah
        Ciao mamma guarda come mi diverto
        Whoo, oh yeah yeah
        Ciao mamma guarda come mi diverto
        Everybody, everybody
        Ciao mamma guarda come mi diverto, whoo";
        echo $myParagraph;
        ?>
    </p>
    <span>
        <?php
        echo 'La lunghezza del testo è ' . strlen($myParagraph);

        ?>
    </span>
    <p>
        <?php
        $censured = $_GET['parola'];
        echo $mySecondP = str_replace($censured, "***", $myParagraph);
        ?>
    </p>
    <span>
        <?php
        echo 'La lunghezza del testo è ' . strlen($mySecondP);
        ?>
    </span>

</body>

</html>