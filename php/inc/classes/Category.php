<?php

  class Category
  {
    //=======================
    // Propriétés
    //=======================

    public $title;

    //=======================
    // Méthodes
    //=======================

    public function __construct( $title )
    {
      $this->title = $title;
    }
  }
