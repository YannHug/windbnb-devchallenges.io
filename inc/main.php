<?php
require('datas/stays.php');
?>

<main>
  <h1>
    Stays in Finland
  </h1>
  <section class="block-cards">
    <?php
      foreach ($stays as $rentalIndex => $rentalInfos) {
        include('cards.php');
      }
    ?>
  </section>
</main>