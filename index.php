<?php
class Movie
{
    public $title;
    public $length;
    public $score;

    function __construct($title, $length, $score)
    {
        $this->title = $title;
        $this->length = $length;
        $this->score = $score;
    }
    public function getApproval($score)
    {
        $approval = ' Accoglienza positiva';
        if ($score < 70) {
            $approval = ' Accoglienza negativa';
        }
        echo $approval;
    }
    public function getMovieCard()
    {
        echo 'Il film ' . $this->title . ' ha una durata di ' . $this->length . ' e il suo punteggio è di ' . $this->score . ' su 100';
    }
}
$flash = new Movie('The Flash', '2h 24m', 69);
$oppenheimer = new Movie('Oppenheimer', '3h 9m', 82);


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
    <!-- FontAwesome -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css"> -->
    <!-- Axios -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script> -->
    <!-- Vue -->
    <!-- <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script defer src="js/script.js"></script> -->
</head>

<body>
    <div id="root">

    </div>
</body>

</html>