<?php

function create_list($stays)
{
  $citys = [];
  foreach ($stays as $rentalInfos) {
    if (!isAlreadyInList($rentalInfos, $citys)) {
      $citys[] = $rentalInfos['city'];
    }
  }
  list_city($citys);
};


function isAlreadyInList($rentalInfos, $citys)
{
    if (in_array($citys, $rentalInfos)) {
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
