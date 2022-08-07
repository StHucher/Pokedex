    <?php
     $pokemon = $viewVars['pokemon'];
     $types = $viewVars['types'];
     ?>
    
    <div class = "main_pokemon">
      <h1>Details <?php echo $pokemon->getNom() ?></h1>

      <div class = "wrapper">
        <div class = "left_side">
          <img class="illustration" src="<?= $_SERVER['BASE_URI']. '/img/'. $pokemon->getNumero(). '.png' ?>" alt="<?= $pokemon->getNom() ?>">
        </div>

        <div class ="right_side">
          <h2><span>#<?= $pokemon->getNumero(); ?></span><?= $pokemon->getNom() ?></h2>
          <div class ="types">
            <ul>
              <?php
              foreach ($types as $type):
                echo "<li class = 'type' style='background:#".$type->getColor()."'>". $type->getName(). "</li>";
              endforeach;
              ?>
            </ul>
          </div>

          <div class = "stats">
            <h3>Statistiques</h3>
            <div class ="stat">
              <div class="label">LP</div>
              <div class ="value"><?php echo $pokemon->getPv() ?></div>
              <div class ="stat_container">
                <div class="bar_value" style="width:<?php echo ($pokemon->getPv() * 100) / 255 ?>%"></div>
              </div>
            </div>
            <div class ="stat">
              <div class="label">Attack</div>
              <div class ="value"><?php echo $pokemon->getAttaque() ?></div>
              <div class ="stat_container">
                <div class="bar_value" style="width:<?php echo ($pokemon->getAttaque() * 100) / 255 ?>%"></div>
              </div>
            </div>
            <div class ="stat">
              <div class="label">Defense</div>
              <div class ="value"><?php echo $pokemon->getDefense() ?></div>
              <div class ="stat_container">
                <div class="bar_value" style="width:<?php echo ($pokemon->getDefense() * 100) / 255 ?>%"></div>
              </div>
            </div>
            <div class ="stat">
              <div class="label">Special Att.</div>
              <div class ="value"><?php echo $pokemon->getAttaqueSpe() ?></div>
              <div class ="stat_container">
                <div class="bar_value" style="width:<?php echo ($pokemon->getAttaqueSpe() * 100) / 255 ?>%"></div>
              </div>
            </div>
            <div class ="stat">
              <div class="label">Special Def.</div>
              <div class ="value"><?php echo $pokemon->getDefenseSpe() ?></div>
              <div class ="stat_container">
                <div class="bar_value" style="width:<?php echo ($pokemon->getDefenseSpe() * 100) / 255 ?>%"></div>
              </div>
            </div>
            <div class ="stat">
              <div class="label">Speed</div>
              <div class ="value"><?php echo $pokemon->getVitesse() ?></div>
              <div class ="stat_container">
                <div class="bar_value" style="width:<?php echo ($pokemon->getVitesse() * 100) / 255 ?>%"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    