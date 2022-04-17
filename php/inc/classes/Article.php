<?php

class Article
{
  //=======================
  // Propriétés
  //=======================

  public $title;
  public $content;
  public $date;
  public $author;
  public $category;

  //=======================
  // Méthodes
  //=======================

  public function __construct($title = '', $content = '', $author = '', $date = '', $category = '')
  {
    $this->title = $title;
    $this->content = $content;
    $this->author = $author;
    $this->date = $date;
    $this->category = $category;
  }

  public function getDateFr()
  {
    return date( 'd/m/Y à H:i:s', strtotime( $this->date ) );
  }
}
