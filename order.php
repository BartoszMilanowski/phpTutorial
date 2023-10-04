<!DOCTYPE html>
<html lang="pl">

<head>
    <title>Podsumowanie zamówienia</title>
</head>

<body>

    <?php

    $tomato = $_POST['tomato'];
    $cucumber = $_POST['cucumber'];

    $tomato_price = 0.99;
    $cucumber_price = 1.99;

    $tomato_total = $tomato * $tomato_price;
    $cucumber_total = $cucumber * $cucumber_price;

    $total = $tomato_total + $cucumber_total;


    echo <<<END
    <h2>Podsumowanie zamówienia</h2>

    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
    <td>Pomidory</td><td>$tomato_price</td><td>$tomato_total</td>
    </tr>
    <tr>
    <td>Ogórki</td><td>$cucumber_price</td><td>$cucumber_total</td>
    </tr>
    <tr>
    <td>Suma zamówienia</td><td/><td>$total PLN</td>
    </tr>
    </table>
    <br/><a href='index.php'>Powrót do strony głównej</a>

END;
    ?>

</body>

</html>