<?php
require ('functions/create-cards.php');
require ('datas/stays.php');

?>

<header>
  <nav>
    <h1>
      <img src="img/logo.png" alt="logo for WindBnB">
    </h1>
    <form action="" method="get">
      <label for="search">Search the site:</label>
      <select name="search" id="search">
        <option value="">--Please choose an option--</option>
        <?php foreach ($stays as $rentalIndex => $rentalInfos): ?>
        <option value="<?= $rentalInfos['city']; ?>"><?= $rentalInfos['city']; ?></option>
        <?php endforeach ?>
      </select>
      <button>Search</button>
    </form>
  </nav>
</header>