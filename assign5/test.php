<?php
    include ('career.php');
    include('fortune.php');
    include('memory.php');
    include('user.php');
    $user = new User('koryanderson', true);
    $memory_game = array();
    $memory_game[] = new Memory('What is the sum of the numbers', 'What was number 2', 'You are a genius');
    $memory_game[] = new Memory('What was number 3', 'What was number 2', 'You are a genius');
    $memory_game[] = new Memory('What is the product of the numbers', 'What was number 4', 'Keep trying');

    $career_game = array();
    $career_game[] = new Career(3,2,2,'Dentist');
    $career_game[] = new Career(5,1,1,'Doctor');
    $career_game[] = new Career(0,1,6,'Pharmacist');
    $career_game[] = new Career(1,1,5,'Pharmacist');

    $fortune_game = array();
    $fortune_game[] = new Fortune('You will have a large family','You will be rich','You will be famous', 7 );
    $fortune_game[] = new Fortune('You will have a few close friends',
                                  'You will be rich','You prefer your privacy', 13);
    $fortune_game[] = new Fortune('You will have a few close friends',
                                  'You will be rich','You prefer your privacy', 71);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Welcome User</h1>
    <?php echo "Username: $user->username | Waiver Signed: $user->waiverSigned"; ?>
    <h1>Memory Games</h1>
    <?php 
    foreach($memory_game as $mgame) {
        echo "Question 1: $mgame->question1<br>";
        echo "Question 2: $mgame->question2<br>";
        echo "Outcome: $mgame->outcome" . "<br><br>";
    }
    ?>
    <h1>Career Games</h1>
    <?php 
    foreach($career_game as $cgame) {
        echo "$cgame->dentistScore" . "$cgame->doctorScore" . "$cgame->pharmacistScore = $cgame->career" . '<br><br>';
    }?>
    <h1>Fortunes</h1>
    <?php 
    foreach($fortune_game as $fgame) {
        echo "Relationships: $fgame->relationships<br>";
        echo "Wealth: $fgame->money<br>";
        echo "Fame: $fgame->fame<br>";
        echo "Lucky Number: $fgame->luckyNumber" . "<br><br>";
    }?>
</body>
</html>