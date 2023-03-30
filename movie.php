<?php

class Movie{
    public string $title;
    public string $type;
    public int $year;

    function __construct($_title, $_type,$_year){
        $this->title = $_title;
        $this->type = $_type;
        $this->year = $_year;
    }
}
