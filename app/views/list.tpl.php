<?php
$pokemons = $viewVars['pokemons'];

if(!empty($pokemons)) {
  echo "<ul class='main_list'>";

  foreach($pokemons as $pokemon): ?>     
    <li>
      <a href="<?= $_SERVER['BASE_URI']. '/detail/'. $pokemon->getNumero() ?>">
        <img class="illustration" src="<?= $_SERVER['BASE_URI'] . '/img/'. $pokemon->getNumero() . '.png' ?>" alt="<?= $pokemon->getNom() ?>">
        <div class="name"><span class="number">#<?= $pokemon->getNumero() ?></span> <?= $pokemon->getNom() ?></div>
      </a>
    </li>
  <?php endforeach;
  echo "</ul>";
} else {
  echo "Oups, I didn't found anything !";
}