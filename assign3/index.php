<?php
if (isset( $_GET['errors'])) {
    $errors = $_GET['errors'];
} else {
    $errors = 1;
}
if (isset($_GET['firstName'])) {
    $firstName = $_GET['firstName'];
}
if (isset($_GET['lastName'])) {
    $lastName = $_GET['lastName'];
}
if (isset($_GET['minorName'])) {
    $minorName = $_GET['minorName'];
}
if (isset($_GET['age'])) {
    $age = $_GET['age'];
}
if (isset($_GET['birthDate'])) {
    $birthDate = $_GET['birthDate'];
}
if (isset($_GET['street'])) {
    $street = $_GET['street'];
}
if (isset($_GET['city'])) {
    $city = $_GET['city'];
}
if (isset($_GET['state'])) {
    $state = $_GET['state'];
}
if (isset($_GET['zip'])) {
    $zip = $_GET['zip'];
}
if (isset($_GET['email'])) {
    $email = $_GET['email'];
}
if (isset($_GET['signature'])) {
    $signature = $_GET['signature'];
}
if (isset($_GET['authorize'])) {
    $authorize = $_GET['authorize'];
}
$errorMessages = array("First name is required", "Last name is required", "Minor's name is required", "Minor's age is required", "Minor's birthdate is required", "Street is required", "City is required", "State is required", "Zip is required", "Guardian's email is required", "A signature is required");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dial-A-Fortune</title>
</head>

<body>
    <div id="headWaiver">
        <span id="title"><b>DMM Carnival Waiver</b></span>
        <img id="headerImage" src="ferris_wheel.jpg">
    </div>

    <div id="waiver">
        <form method="get" action="result.php">
            <ul>
                <li>
                    <label>Guardian First Name</label>
                    <input name="firstName" type="text" placeholder="First Name" value="<?php if (isset($firstName)) {echo $firstName;} ?>">
                    <div class=errors>
                        <?php if ( $errors %2 == 0 ) {echo $errorMessages[0];};?>
                    </div>
                </li>
                <li>
                    <label>Guardian Last Name</label>
                    <input name="lastName" type="text" placeholder="Last Name" value="<?php if (isset($lastName)) {echo $lastName;} ?>">
                    <div class=errors>
                        <?php if ( $errors %3 == 0 ) {echo $errorMessages[1];};?>
                    </div>
                </li>
                <li>
                    <label>Minor's Name</label>
                    <input name="minorName" type="text" placeholder="Minor's Name" value="<?php if (isset($minorName)) {echo $minorName;} ?>">
                    <div class=errors>
                        <?php if ( $errors %5 == 0 ) {echo $errorMessages[2];};?>
                    </div>
                </li>
                <li>
                    <label>Minor's Age</label>
                    <input name="age" type="text" placeholder="Age" size=3 value="<?php if (isset($age)) {echo $age;} ?>">
                    <div class=errors>
                        <?php if ( $errors %7 == 0 ) {echo $errorMessages[3];};?>
                    </div>
                </li>
                <li>
                    <label>Minor's Birth Date</label>
                    <input name="birthDate" type="text" placeholder="Birth Date" value="<?php if (isset($birthDate)) {echo $birthDate;} ?>">
                    <div class=errors>
                        <?php if ( $errors %11 == 0 ) {echo $errorMessages[4];};?>
                    </div>
                </li>
                <li>
                    <label>Street</label>
                    <input name="street" type="text" placeholder="Street" size="30" value="<?php if (isset($street)) {echo $street;} ?>">
                    <div class=errors>
                        <?php if ( $errors %13 == 0 ) {echo $errorMessages[5];};?>
                    </div>
                </li>
                <li>
                    <span>
                        <label>City</label>
                        <input name="city" type="text" placeholder="City" value="<?php if (isset($city)) {echo $city;} ?>">
                        <div class=errors>
                        <?php if ( $errors %17 == 0 ) {echo $errorMessages[6];};?>
                    </div>
                    </span>
                    <span>
                        <label>State</label>
                        <input name="state" type="text" placeholder="State" size="2" value="<?php if (isset($state)) {echo $state;} ?>">
                        <div class=errors>
                            <?php if ( $errors %19 == 0 ) {echo $errorMessages[7];};?>
                        </div>
                    </span>
                    <span>
                        <label>Zip Code</label>
                        <input name="zip" type="text" placeholder="Zip" size="5" value="<?php if (isset($zip)) {echo $zip;} ?>">
                        <div class=errors>
                            <?php if ( $errors %23 == 0 ) {echo $errorMessages[8];};?>
                        </div>
                    </span>
                </li>
                <li>
                    <label>Gaurdian's Email</label>
                    <input name="email" type="email" placeholder="Email" value="<?php if (isset($email)) {echo $email;} ?>">
                    <div class=errors>
                        <?php if ( $errors %29 == 0 ) {echo $errorMessages[9];};?>
                    </div>
                </li>
                <li>
                    <label>Please type your name in the text area</label><br>
                    <textarea name="signature" cols="50" rows="3"><?php if (isset($signature)) {echo $signature;} ?></textarea><br>
                    <div class=errors>
                        <?php if ( $errors %31 == 0 ) {echo $errorMessages[10];};?>
                    </div>
                </li>
                <li>
                    <label>I agree to allow my child to play Dial-A-Fortune</label>
                    <span>
                        <input name="authorize" type="radio" value="yes">
                        <label>Yes</label>
                    </span>
                    <span>
                        <input name="authorize" type="radio" checked value="no">
                        <label>No</label>
                    </span>
                </li>
            </ul>
            <input type="submit" value="Submit">Submit</button>
        </form>
    </div>
</body>

</html>