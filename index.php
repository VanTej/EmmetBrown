<?php

$presentTime = new DateTime();

$destinationTime = (new DateTime('20 december 2061'))->setTime(14, 15);

$tripDuration = $presentTime->diff($destinationTime);

$tripMinutes = $tripDuration->days *24*60 + $tripDuration->h *60 + $tripDuration->i;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Document</title>
</head>

<body>
    <main>
        <section class="destination container">
            <div class="month">
                <h3>MONTH</h3>
                <p><?= $destinationTime->format('M') ?></p>
            </div>
            <div class="day">
                <h3>DAY</h3>
                <p><?= $destinationTime->format('d') ?></p>
            </div>
            <div class="year">
                <h3>YEAR</h3>
                <p><?= $destinationTime->format('Y') ?></p>
            </div>
            <div class="ampm">
                <h3>AM</h3>
                <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="<?php if ($destinationTime->format('a') == 'am') {
                                                                                            echo 'red';
                                                                                        } else {echo 'rgba(17, 17, 17, 0.6)';}?>" class="bi bi-circle-fill" viewBox="0 0 16 16">
                    <circle cx="8" cy="8" r="8" />
                </svg>
                <h3>PM</h3>
                <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="<?php if ($destinationTime->format('a') == 'pm') {
                                                                                            echo 'red';
                                                                                        } else {echo 'rgba(17, 17, 17, 0.6)';}?>" class="bi bi-circle-fill" viewBox="0 0 16 16">
                    <circle cx="8" cy="8" r="8" />
                </svg>
            </div>
            <div class="hour">
                <h3>HOUR</h3>
                <p><?= $destinationTime->format('h') ?></p>
            </div>
            <div class="sep">
                <p>:</p>
            </div>
            <div class="min">
                <h3>MIN</h3>
                <p><?= $destinationTime->format('i') ?></p>
            </div>
        </section>
        <h2>DESTINATION TIME</h2>

        <section class="present container">
            <div class="month">
                <h3>MONTH</h3>
                <p><?= $presentTime->format('M') ?></p>
            </div>
            <div class="day">
                <h3>DAY</h3>
                <p><?= $presentTime->format('d') ?></p>
            </div>
            <div class="year">
                <h3>YEAR</h3>
                <p><?= $presentTime->format('Y') ?></p>
            </div>
            <div class="ampm">
                <h3>AM</h3>
                <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="<?php if ($presentTime->format('a') == 'am') {
                                                                                            echo 'green';
                                                                                        } else {echo 'rgba(17, 17, 17, 0.6)';}?>" class="bi bi-circle-fill" viewBox="0 0 16 16">
                    <circle cx="8" cy="8" r="8" />
                </svg>
                <h3>PM</h3>
                <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="<?php if ($presentTime->format('a') == 'pm') {
                                                                                            echo 'green';
                                                                                        } else {echo 'rgba(17, 17, 17, 0.6)';}?>" class="bi bi-circle-fill" viewBox="0 0 16 16">
                    <circle cx="8" cy="8" r="8" />
                </svg>
            </div>
            <div class="hour">
                <h3>HOUR</h3>
                <p><?= $presentTime->format('h') ?></p>
            </div>
            <div class="sep">
                <p>:</p>
            </div>
            <div class="min">
                <h3>MIN</h3>
                <p><?= $presentTime->format('i') ?></p>
            </div>
        </section>
        <h2>PRESENT TIME</h2>
    </main>
    <h1>We are gonna make a trip to the future Marty, into <?= $tripDuration->format('%y years, %m months, %d days, %h hours, %i minutes') . ' soit ' . $tripMinutes?>  minutes! Il nous faudra <?=ceil($tripMinutes/10000)?> litres de carburant. Oups j'ai oublié ma CB...</h1>
</body>

</html>