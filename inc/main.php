<?php
require('datas/stays.php');
require('functions/get.php');

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