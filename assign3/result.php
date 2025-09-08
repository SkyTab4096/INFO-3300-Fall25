<?php
$firstName = filter_input(INPUT_GET, "firstName");
$lastName = filter_input(INPUT_GET, "lastName");
$minorName = filter_input(INPUT_GET, "minorName");
$age = filter_input(INPUT_GET, "age");
$birthDate = filter_input(INPUT_GET, "birthDate");
$street = filter_input(INPUT_GET, "street");
$city = filter_input(INPUT_GET, "city");
$state = filter_input(INPUT_GET,"state");
$zip = filter_input(INPUT_GET,"zip");
$email = filter_input(INPUT_GET,"email");
$signature = filter_input(INPUT_GET,"signature");
$authorize = filter_input(INPUT_GET,"authorize");
$data = ["firstName=$firstName", "lastName=$lastName", "minorName=$minorName", "age=$age", "birthDate=$birthDate", "street=$street", "city=$city", "state=$state", "zip=$zip", "email=$email", "signature=$signature", "authorize=$authorize"];
$errors = 1;
$zip = (string) $zip;

if (strlen($firstName) < 2 ) {
    #$errors[] = "First Name is required";
    $errors *= 2;
}
if (strlen($lastName) < 2 ) {
    #$errors[] = "Last Name is required";
    $errors *= 3;
}
if (strlen($minorName) <= 0 ) {
    #$errors[] = "Minor's Name is required";
    $errors *= 5;
}
if (gettype($age) == "integer") {
    if ( $age > 18 | $age <= 0) {
        #$errors[] = "Minor's age must be a number and be less than 18";
        $errors *= 7;
    }
} elseif (gettype($age) == "string") {
    $age = (int) $age;
    if ( $age > 18 | $age <= 0) {
        $errors *= 7;
    }
}
if (strlen($birthDate) <= 0) {
    #$errors[] = "Minor's birth date is required";
    $errors *= 11;
}
if (strlen($street) <= 0) {
    #$errors[] = "Street is required";
    $errors *= 13;
}
if (strlen($city) <= 0) {
    #$errors[] = "City is required";
    $errors *= 17;
}
if (strlen($state) != 2) {
    $errors *= 19;
}
if (strlen($zip) <= 0 ) {
    #$errors[] = "Zip code is required";
    $errors *= 23;
}
if (strlen($email) <= 0 ) {
    #$errors[] = "Guardian's email is required";
    $errors *= 29;
} elseif (str_contains($email, "@") == false) {
    $errors *= 29;
}
if (strlen($signature) <= 2) {
    #$errors[] = "A signature is required";
    $errors *= 31;
}

#if (count($errors) > 0) {
#    $page = "waiver.php";
#    foreach ($errors as $error) {
#        $page .= $error . "&";
#    }
#    foreach ($data as $value) {
#        $page .= $value . "&";
#    }
#    header("Location: $page");
#}

if ($errors > 1 & $authorize == "no") {
    $page = "waiver.php?";
    $page .= "errors=" . $errors . "&";
    foreach ($data as $value) {
        $page .= "". $value . "&";
    }
    $page .= "ageError=" . $ageError;
    header("Location: $page");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="headWaiver">
        <span id="title"><b>DMM Carnival Waiver</b></span>
        <img id="headerImage" src="ferris_wheel.jpg">
    </div>
    <div id="result">
        <span>Congratulations your minor (<?php echo $minorName?>) is cleared to play</span>
    </div>
</body>
</html>