<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "text<br>";
        $name="Janusz";
        $surname="Kowalski";

        echo $name." ".$surname,"<br>";
        echo $name." ".$surname,"<br>";

        echo "$name $surname";
        echo '$name $surname';

        echo <<<SHOW
        <hr>
        Imię: $name<br>
        Nazwisko: $surname
        <hr>
SHOW;

        $text= <<<SHOW
        <hr>
        Imię: $name<br>
        Nazwisko: $surname
        <hr>
SHOW;

    echo $text;

    ?>
</body>
</html>