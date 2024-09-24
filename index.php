<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>O'clock</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">


</head>
<body class="body">

<div class="container">
    <span class="welcome__page">Welcome to the site.</span>
    <div class="block__buttons">
        <form method="post">
            <button type="submit" name="city" value="Tokyo" class="btn"
                    style="background-color: #d50f0f; color: white;">Tokyo
            </button>
            <button type="submit" name="city" value="New York" class="btn"
                    style="background-color: #2E86C1; color: white;">New York
            </button>
            <button type="submit" name="city" value="London" class="btn"
                    style="background-color: #A569BD; color: white;">London
            </button>
            <button type="submit" name="city" value="Berlin" class="btn"
                    style="background-color: #e65622; color: white;">Berlin
            </button>
            <button type="submit" name="city" value="Sydney" class="btn"
                    style="background-color: #1ABC9C; color: white;">Sydney
            </button>
            <button type="submit" name="city" value="Shanghai" class="btn"
                    style="background-color: #E74C3C; color: white;">Shanghai
            </button>
            <button type="submit" name="city" value="Kolkata" class="btn"
                    style="background-color: #174367; color: white;">Kolkata
            </button>
            <button type="submit" name="city" value="Los Angeles" class="btn"
                    style="background-color: #bb12f3; color: white;">Los Angeles
            </button>
            <button type="submit" name="city" value="Johannesburg" class="btn"
                    style="background-color: #3498DB; color: white;">Johannesburg
            </button>
        </form>
    </div>
</div>

<?php

if (isset($_POST['city'])) {
    $city = $_POST['city'];
    $timeZoneMap = [
        'Tokyo' => 'Asia/Tokyo',
        'New York' => 'America/New_York',
        'London' => 'Europe/London',
        'Berlin' => 'Europe/Berlin',
        'Sydney' => 'Australia/Sydney',
        'Shanghai' => 'Asia/Shanghai',
        'Kolkata' => 'Asia/Kolkata',
        'Los Angeles' => 'America/Los_Angeles',
        'Johannesburg' => 'Africa/Johannesburg',
    ];

    if (array_key_exists($city, $timeZoneMap)) {
        date_default_timezone_set($timeZoneMap[$city]);
        $currentTime = date('H:i:s');
        echo "<p class='time__zone'>Now time in $city: $currentTime</p>";
    } else {
        echo "<p class='time__zone'>cant find this city: $city.</p>";
    }


}


?>

<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>