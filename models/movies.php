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
