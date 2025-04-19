<?php

interface Penggerak{

    public function bergerak();
}


class Robot implements Penggerak{

    public function bergerak()
    {
        echo "Robot bergerak dengan roda";
    }
}

// buat object 
$robot = new Robot();
$robot->bergerak(); // Robot bergerak dengan roda