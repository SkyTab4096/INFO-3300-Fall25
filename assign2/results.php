<?php

    $professions = ["dentist" => 0, "doctor" => 0, "pharmacist" => 0];
    
    #Question 1
    $workoutLocation = filter_input(INPUT_GET, 'workoutLocation');
    if ( !is_null($workoutLocation) ) {
        if ( $workoutLocation == 'countryClub') {
            $professions['dentist']++;
        } else if ( $workoutLocation == 'outside') {
            $professions['doctor']++;
        } else if ( $workoutLocation == 'nothing') {
            $professions['pharmacist']++;
        }
    };

    #Question 2
    $activityCount = 0;
    $activities = filter_input(INPUT_GET, 'activities', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
    if ( !is_null($activities) ) {
        $activityCount = count($activities);
    
        if ( $activityCount >= 3) {
            $professions['dentist']++;
        } elseif ( $activityCount == 2) {
            $professions['doctor']++;
        } else {
            $professions['pharmacist']++;
        }
    };

    #Question 3
    $boyName = filter_input(INPUT_GET, 'boyName');
    $boyVowelCount = vowelCount($boyName);
    if ( $boyVowelCount >= 4) {
        $professions['pharmacist']++;
    } elseif ( $boyVowelCount >= 2) {
        $professions['dentist']++;
    } else {
        $professions['doctor']++;
    }

    #Question 4
    $girlName = filter_input(INPUT_GET, 'girlName');
    $girlVowelCount = vowelCount($girlName);
    if ( $girlVowelCount >= 4) {
        $professions['pharmacist']++;
    } elseif ( $girlVowelCount >= 2) {
        $professions['dentist']++;
    } else {
        $professions['doctor']++;
    }

    #Question 5
    $talent = filter_input(INPUT_GET, 'talents');
    if ( strlen($talent) > 40) {
        $professions['pharmacist']++;
    } elseif ( strlen($talent) <= 40 && strlen($talent) >= 20) {
        $professions['dentist']++;
    } else {
        $professions['doctor']++;
    }

    #Question 6
    $likelyTask = filter_input(INPUT_GET,'likelyTask');
    if ( $likelyTask == 'tanning') {
        $professions['dentist']++;
    } elseif ( $likelyTask == 'hgh') {
        $professions['pharmacist']++;
    } elseif ($likelyTask == 'stitch') {
        $professions['doctor']++;
    }

    #Question 7
    $tvShows = filter_input(INPUT_GET,'tvShows', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
    $doctorShowCount = 0;
    if ( !is_null($tvShows) ) {
        $tvShowsCount = count($tvShows);  
        if ( $tvShowsCount >= 5 ) {
            $professions['pharmacist']++;
        } else {
            if ( in_array('house', $tvShows) ) {
                ++$doctorShowCount;
            }
            if ( in_array('greysAnatomy', $tvShows) ) {
                ++$doctorShowCount;
            }
            if ( in_array('chicago', $tvShows) ) {
                ++$doctorShowCount;
            }
            if ( $doctorShowCount >= 2)  {
                $professions['doctor']++;
            } else {
                $professions['dentist']++;
            }
        }
    }

    function vowelCount($name) {
        $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
        $vowelCount = 0;
        for ($i = 0; $i < strlen($name); $i++) {
            if (in_array($name[$i], $vowels)) {
                $vowelCount++;
            }
        }
        return $vowelCount;
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <title>Results</title>
</head>
<body>
    <h1>Kory's Personalities and Professions</h1>
    <div id="results">
        <br>
        <b>Our proprietary algorithm has uncovered the following:</b><br>
        <br>
        <b>Results:</b>
        <div class="resultsDisplay">
            <?php
                foreach ( $professions as $key => $value ) {
                    echo $key .'='. $value . '<br>';
                }
            ?>
        </div>
        <br>
    </div>
</body>
</html>