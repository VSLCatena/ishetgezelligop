<?php
#include './config.php';

// Declared the files here for easy adjustments later
$fileKader = 'message_kader.txt';
$fileCounter = 'aantal.log';

// Declare them all so we don't get undefined variable warnings.
$messageKader = '';
$messageStatus = '';
$messageAmount = '';
$messageModified = '';

// Kader stuff
if (file_exists($fileKader))
    $messageKader = file_get_contents($fileKader);

// Amount stuff
if (file_exists($fileCounter)) {
    // Last time we modified the file
    $messageModified = date ("H:i", filemtime($fileCounter));

    // Retrieve, calculate and estimate the amount of people on Catena
    $rawAmount = file_get_contents($fileCounter);
    $corrFactor = 1.1;
    $corrNumber = 8;
    $amount = ($rawAmount-$corrNumber) * $corrFactor;

    // Generate amount status message
    if ($amount < 10)  # 0 - 9
        $messageAmount = "rustig";
    elseif ($amount < 25) # 10 - 24
        $messageAmount="gezellig";
    elseif ($amount < 50) # 25 - 49
        $messageAmount="erg gezellig";
    else # 50+
        $messageAmount="lekker druk";

}


// Generate open status message
$day = date("l");
$hour = date("H");

if($hour >= 21 || $hour == 0 || // we're always open from 21:00, and from 0:00 till 0:59
    $hour >= 16 && !($day == 'Saturday' || $day == 'Sunday')) // If it's NOT saturday or sunday, we're open from 14:00
    $messageStatus = 'open';
elseif($hour < 6) // If it's before 6:00, we might still be open!
    $messageStatus = 'mogelijk nog open';
elseif($hour >= 6 && $hour <= 16) // Between 6:00 and 13:59 we might be closed
    $messageStatus = 'mogelijk gesloten';
else // Otherwise we're closed.
    $messageStatus = 'gesloten';

?>
<!DOCTYPE html>
<html lang="en">
<!-- Alleen nerds komen op deze pagina, klik maar gauw weer weg -->
<head>
    <title>Catena</title>
    <meta http-equiv="refresh" content="300" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8"> 

    <!-- Load in the font -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
	
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Load our own stylesheet -->
    <link href="./style.css" rel="stylesheet">
</head>
<body>
    <!-- DE SM-KELDER BESTAAT -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h1 class="opening">Catena is <?=$messageStatus?></h1>
                <p class="hetisnu">Het is nu</p>
                <p class="amount-text"><?=$messageAmount?></p>

                <div class="bottom">
                    <?php if(!empty($messageKader)):?>
                        <p class="kader"><?=$messageKader;?></p>
                    <?php endif; ?>
                    <p class="update">Laatst ge&uuml;pdatet om: <?=$messageModified?></p>
                    <a class="btn btn-danger privacy" href="./privacy.php">Privacy</a>
                </div>
            </div>
        </div>
    <!-- Jij dacht hier wat interessants te vinden of niet? -->
    </div>
</body>
</html>
