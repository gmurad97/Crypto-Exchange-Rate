<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CryptoExchange Rate</title>
    <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
    $responseEncodeJson = file_get_contents('https://api.binance.com/api/v3/ticker/price');
    $responseDecodeJson = json_decode($responseEncodeJson);
    ?>
    <table class="table table-striped table-hover">
        <thead>
            <th>Symbol</th>
            <th>Price</th>
        </thead>
        <tbody>
            <?php
            foreach ($responseDecodeJson as $kus) {
                echo "<tr>";
                echo "<td>";
                echo $kus->symbol;
                echo "</td>";
                echo "<td>";
                echo $kus->price;
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>