<?php
require('datas/stays.php');
require('functions/get.php');


if(!empty($_GET)){
  $location = $_GET['site-search'];
}
?>


<main>
  <h1>
    Stays in Finland
  </h1>
  <section class="block-cards">
    <?=
      get_location($stays, $location);
    ?>
  </section>
</main>