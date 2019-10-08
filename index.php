<html>
<head>
    <meta charset="utf-8">
    <title>comments_and_variables</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>

<body>
    <div>
        <div id="title">
            <?php
                echo "Einfache Rechnung in PHP";
            ?>
        </div>

        <div id="content">
            <?php
                $liter1 = 40.5;
                $liter2 = 35.7;
                $price = 1.499;
                $cost = 0;

                // caluculating the total price using the addition and multiplication operations
                $cost = $liter1 * $price + $liter2 * $price;

                $output = "Die Benzinkosten betragen für " . ($liter1 + $liter2) . " Liter $cost €";
		
		// print the result
                echo $output;
            ?>
        </div>
    </div>
</body>
</html>


