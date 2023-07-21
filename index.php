<?php
include __DIR__ . '/models/movies.php';
include __DIR__ . '/data/actors.php';

$flash = new Movie('The Flash', '2h 24m', 69, $actors['Fla']);
$oppenheimer = new Movie('Oppenheimer', '3h 9m', 82, $actors['Opp']);

// $movies = [$flash, $oppenheimer];
$flash->getMovieCard();
$flash->getApproval(69);
var_dump($flash);

$oppenheimer->getMovieCard();
$oppenheimer->getApproval(82);
var_dump($oppenheimer);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP-1</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <!-- <section class="container">
        <?php foreach ($movies as $movie) {
            $p = new Movie($title['title'], $length['length'], $score['score'], $actors['actors']) ?>
            <h1><?php $p->title ?></h1>
            <p><?php $p->length ?></p>
            <p><?php $p->score ?></p>
            <div><?php $p->actors ?></div>
        <?php } ?>
    </section> -->
</body>

</html>