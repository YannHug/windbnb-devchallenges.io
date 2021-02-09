<?php

if(!empty($_GET)){
  $location = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_STRING);
}


