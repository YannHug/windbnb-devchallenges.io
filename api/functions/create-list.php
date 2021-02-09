<?php

function create_list($stays)
{
  foreach ($stays as $rentalInfos) {
    if (!isAlreadyInList($rentalInfos['city'], $citys)) {
      $citys[] = $rentalInfos['city'];
    }
  }
  list_city($citys);
};


function isAlreadyInList($rentalInfos, $citys)
{
    if (in_array($rentalInfos, $citys)) {
        return true;
    } else {
        return false;
    }
};

function list_city($citys) {
  foreach($citys as $city ){
    echo '<option value="' . $city . '">' . $city . '</option>';
  }
};
