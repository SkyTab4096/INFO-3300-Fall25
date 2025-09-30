<?php
include ("../model/user.php");
session_start();
/** 2. require the file ../model/user.php */
/** 3. session start */
/** 4. If the $_SESSION key 'username' is not set, redirect to front-end controller */
/** 5. Declare variable $action */
/** 6. Get value for action from POST, if null, get value from GET, if null , set default to fill_waiver */

if (!isset($_SESSION['username'])) {
    header("Location: /");
}

$action = "";
if (isset($_POST['action'])) {
    $action = $_POST['action'];
} elseif (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = "fill_waiver";
}

 $first_name='';
 $last_name = '';
 $minor_name = '';
 $minor_age = '';
 $minor_birth_date = '';
 $street= '';
 $city = '';
 $state = '';    
 $zip = '';    
 $email = '';    
 $signature = '';

 $first_name_error='';
 $last_name_error = '';
 $minor_name_error = '';
 $minor_age_error = '';
 $minor_birth_date_error = '';
 $street_error= '';
 $city_error = '';
 $state_error = '';    
 $zip_error = '';    
 $email_error = '';    
 $signature_error = '';

/** 7. if condition block, check whether $action == 'fill_waiver, if yes include 'input.php' */
if ($action == "fill_waiver") {
    include("./input.php");
} elseif ($action == "result") {


/** 8. else if block whether $action == 'result' */

    #1-------------------------------------------------------------------
    $error_count = 0;
    $first_name=filter_input(INPUT_GET,'first_name');
    #NULL if first_name was not set
    if($first_name == null){
        $first_name_error='<div class=\'errors\'>First name is required</div>';
        $error_count++;
    } elseif(strlen($first_name) < 3){
        $first_name_error='<div class=\'errors\'>First name must be greater than 2 characters</div>';
        $error_count++;
    }
    #2-------------------------------------------------------------------
    $last_name=filter_input(INPUT_GET,'last_name');
    if($last_name == null){
        $last_name_error='<div class=\'errors\'>Last name is required</div>';
        $error_count++;
    } elseif(strlen($last_name) < 3){
        $last_name_error='<div class=\'errors\'>Last name must be greater than 2 characters</div>';
        $error_count++;
    }
    #3-------------------------------------------------------------------
    $minor_name=filter_input(INPUT_GET,'minor_name');
    if($minor_name == null){
        $minor_name_error='<div class=\'errors\'>Minor\'s name is </div>';
        $error_count++;
    }
    #4-------------------------------------------------------------------
    $minor_age=filter_input(INPUT_GET,'minor_age',FILTER_VALIDATE_INT);
    #FALSE if not a valid INT
    if($minor_age == null){
        $minor_age_error='<div class=\'errors\'>Minor\'s age is required</div>';
        $error_count++;
    } elseif(!$minor_age){
        $minor_age_error='<div class=\'errors\'>Age must be all numbers</div>';
        $error_count++;
    } else if($minor_age > 122){
        $minor_age_error='<div class=\'errors\'>Age must be less than 18</div>';
        $error_count++;
    }
    #5-------------------------------------------------------------------
    $minor_birth_date=filter_input(INPUT_GET,'minor_birth_date');
    if($minor_birth_date == null){
        $minor_birth_date_error='<div class=\'errors\'>Minor\'s birth date is required</div>';
        $error_count++;
    }
    #6-------------------------------------------------------------------
    $street=filter_input(INPUT_GET,'street');
    if($street == null){
        $street_error='<div class=\'errors\'>Street is required</div>';
        $error_count++;
    }
    #7-------------------------------------------------------------------
    $city=filter_input(INPUT_GET,'city');
    if($city == null){
        $city_error='<div class=\'errors\'>City is required</div>';
        $error_count++;
    }
    #8-------------------------------------------------------------------
    $state=filter_input(INPUT_GET,'state');
    if($state == null){
        $state_error='<div class=\'errors\'>State is required</div>';
        $error_count++;
    }
    #9-------------------------------------------------------------------
    $zip=filter_input(INPUT_GET,'zip',FILTER_VALIDATE_INT);
    #FALSE if not a valid INT
    if($zip == null){
        $zip_error='<div class=\'errors\'>Zip is required</div>';
        $error_count++;
    } elseif(!$zip){
        $zip_error='<div class=\'errors\'>Zip must be all numbers</div>';
        $error_count++;
    }
    #10-------------------------------------------------------------------
    $email=filter_input(INPUT_GET,'email',FILTER_VALIDATE_EMAIL);
    if($email == null){
        $email_error='<div class=\'errors\'>Guardian\'s email is required</div>';
        $error_count++;
    } elseif(!$email){
        $email_error='<div class=\'errors\'>Guardian\'s email must be a valid email address</div>';
        $error_count++;
    }
    #-------------------------------------------------------------------
    $signature=filter_input(INPUT_GET,'signature');
    if($signature == null){
        $signature_error='<div class=\'errors\'>A signature is required</div>';
        $error_count++;
    } elseif(strlen($signature) < 3){
        $signature_error='<div class=\'errors\'>A real signature is required</div>';
        $error_count++;
    }
    #-------------------------------------------------------------------
    $authorize_play = filter_input(INPUT_GET,'authorize_play',FILTER_VALIDATE_BOOLEAN);
    #-------------------------------------------------------------------
    
    /** 9.  Check in an if block whether the $error_count is greater than 0. If so include 'input.php'*/
    /** 10. In an else block (resulting from no errors occuring), do the following:
     *  assign a varaible $user the user from  $_SESSION['user']
     *  call the setWaiverFilled(true) method on the $user variable.
     *  assign the $user variable back to the $_SESSION['user']
     *  finally, include the file ('result.php') */

    if ($error_count > 0) {
        include("./input.php");
    } else {
        $user = $_SESSION['user'];
        $user->setWaiverFilled(true);
        $_SESSION['user'] = $user;
        include("./result.php");
    }
    

 //Closing else if curly brace
}