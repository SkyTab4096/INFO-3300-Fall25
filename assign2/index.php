<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <title>Personalities and Professions</title>
</head>
<body>
    <h1>Welcome to Kory's Personalities and Professions</h1>
    <h3>Answer the following questions and our system will match you to a profession</h3>
    
    <div id=questionnaire>
        <form method="get" action="results.php">
            <ol>
                <li>Where do you prefer to workout?</li>
                    <input type="radio" name="workoutLocation" value="countryClub">Country Club
                    <input type="radio" name="workoutLocation" value="outside">Outside
                    <input type="radio" name="workoutLocation" value="nothing">I would rather eat potato chips than workout
                    <br><br>
                <li>Check all the recreation activies you want to pursue in your life?</li>
                    <input type="checkbox" name="activities[]" value="wakeSurfing">Wake Surfing<br>
                    <input type="checkbox" name="activities[]" value="snowmobiling">Snowmobiling<br>
                    <input type="checkbox" name="activities[]" value="reading">Reading<br>
                    <input type="checkbox" name="activities[]" value="hiking">Extreme Hiking<br>
                    <input type="checkbox" name="activities[]" value="foreignCountries">Visiting Foreign Countries<br>
                    <input type="checkbox" name="activities[]" value="motorcycleTours">Motorcycle tours of the US<br>
                    <br>
                <li>Type your favorite boy's name.</li>
                    <input type="text" name="boyName" placeholder="Enter Name"><br>
                    <br>
                <li>Type your favorite girl's name.</li>
                    <input type="text" name="girlName" placeholder="Enter Name"><br>
                    <br>
                <li>Describe one of your talents.</li>
                    <textarea name="talents" cols="30" rows="10"></textarea><br><br>
                <li>Which of the following are you most likely to do?</li>
                    <select name="likelyTask">
                        <option value="tanning">Go to a tanning salon</option>
                        <option value="hgh">Take human growth hormones (HGH)</option>
                        <option value="stitch">Stitch up your own finger</option>
                    </select>
                    <br><br>
                <li>Select all the TV shows you like.</li>
                    <select name="tvShows[]" size="9" multiple>
                        <option value="house">House</option>
                        <option value="breakingBad">Breaking Bad</option>
                        <option value="wives">Housewives of Beverly Hills</option>
                        <option value="greysAnatomy">Grey's Anatomy</option>
                        <option value="ncis">NCIS</option>
                        <option value="csi">CSI: New York</option>
                        <option value="chicago">Chicago Hope</option>
                        <option value="bachelor">The Bachelor</option>
                        <option value="survivor">Survivor</option>
                    </select>
                    <br><br>
                <input type="submit" value="Submit">
            </ol>
        </form>
    </div>
</body>
</html>