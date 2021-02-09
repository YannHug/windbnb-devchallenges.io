<?php
require ('functions/create-cards.php');
require ('functions/create-list.php');
require ('datas/stays.php');

?>

<header>
  <nav>
    <h1>
      <a href="index.php">
        <img src="img/logo.png" alt="logo for WindBnB">
      </a>
    </h1>
    <form action="" method="get">
      <label for="search">Search the site:</label>
      <select name="search" id="search">
        <option value="">--Please choose an option--</option>
        <?=create_list($stays)?>
      </select>
      <button>Search</button>
    </form>
  </nav>
</header>