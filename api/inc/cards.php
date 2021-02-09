<article class="cards">
  <figure>
    <img class="cards__img" src="<?= $rentalInfos['photo'] ?>" alt="<?= $rentalInfos['title'] ?>">
    <figcaption><?php $rentalInfos['type'] ?></figcaption>
  </figure>
  <strong>
    <?php if($rentalInfos['superHost'] === true) echo '<em class="cards__em">SUPER HOST</em>'  ?>
  </strong>
  <strong><?= $rentalInfos['type'] ?></strong>
  <strong>
    <i class="cards__icon">&#9733;</i>
    <?= $rentalInfos['rating'] ?>
  </strong>
  <h2><?= $rentalInfos['title'] ?></h2>
</article>