<?php

    $relationshipsArray[] = "You will have a large family";
    $relationshipsArray[] = "You will have a few close friends";
    $relationshipsArray[] = "You will have a smaller family, but many close friends";

    $moneyArray[] = "You will come upon a large fortune";
    $moneyArray[] = "You will live comfortably and want for nothing";
    $moneyArray[] = "You will be able to afford to do anything you want";

    $fameArray[] = "You will become extremly famous";
    $fameArray[] = "You will be known to a few select individuals";
    $fameArray[] = "You will be a local legend";

    $relationshipsCount = count($relationshipsArray) - 1;

    $relationshipsRandom = random_int(0, count($relationshipsArray) - 1);
    $moneyRandom = random_int(0, count($moneyArray) - 1);
    $fameRandom = random_int(0, count($fameArray) - 1);

    $luckyNumber = random_int(0, 100);

    $relationshipFortune = $relationshipsArray[$relationshipsRandom];
    $moneyFortune = $moneyArray[$moneyRandom];
    $fameFortune = $fameArray[$fameRandom];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Dial-a-Fortune</title>
    </head>
    <body>
        by Kory Anderson
        <br>
        <h1><?php echo $relationshipFortune; ?></h1>
        <h1><?php echo $moneyFortune; ?></h1>
        <h1><?php echo $fameFortune; ?></h1>
        <h1>Lucky Number</h1>
        <?php
            for($i=0; $i<=$luckyNumber; $i++){
                echo $i . ' ';
            }
        ?>
    </body>
</html>