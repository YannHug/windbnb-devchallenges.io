<?php

function get_location($stays, $location) {
    foreach ($stays as $rentalInfos) {
      if (empty($location)){
        include('inc/cards.php');
      }elseif (ucfirst($location) === $rentalInfos['city']){
        include('inc/cards.php');
      }
    }
  }
