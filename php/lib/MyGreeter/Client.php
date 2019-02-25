<?php

namespace MyGreeter;

class Client {

    public function getGreeting (){

        $hour = date('H');

        if ($hour >= 0 && $hour < 12){

            return 'Good morning';

        } elseif ($hour >= 12 && $hour < 18){

            return 'Good afternoon';

        } else {

            return 'Good evening';
        }
    }
}