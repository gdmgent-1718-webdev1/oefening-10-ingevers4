<?php
$title = 'opdracht 10';
$message = 'Contactformulier';

$isSubmitted = isset($_REQUEST['submit']);

if($isSubmitted) {
    $voornaam = $_POST['voornaam'];
    $familienaam = $_POST['familienaam'];
    $wachtwoord = $_POST['wachtwoord'];
    $bericht = $_POST['bericht'];
    $emailadres = $_POST['e-mailadres'];

    $text = "Your name is {$voornaam} {$familienaam}" . '<br>' . " Message: {$bericht} " . '<br>' . "Your e-mailadress is {$emailadres}" . '<br>' . "Your password is secret";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=$title?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>


    <div class="container"

    <?php if ($isSubmitted): ?>
        <h1><?=$text?></h1>
    <?php else: ?>
    <h1><?=$message?></h1>
    <form action="" method="POST">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <input type="text" class="form-control" name="voornaam" placeholder="voornaam">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <input type="text" class="form-control" name="familienaam" placeholder="familienaam">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <input type="email" class="form-control" name="e-mailadres" placeholder="e-mailadres">  
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <input type="password" class="form-control" name="wachtwoord" placeholder="wachtwoord">
                    </div>
                </div>
            </div>
            <div class="form-group">    
                <input type="text" class="form-control" name="bericht" placeholder="bericht">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="submit">
            </div>
        </form>

    </div>

<?php endif ?>

</body>

</html>