<div class="types_list">
    <p>Click on a category to see all related Pokemons </p>

    <?php  $types = $viewVars['types'];

    if(!$types) {
        echo "Oups, no category found!";
    } else {
        echo "<ul>";
        foreach ($types as $type): ?>
            <li class="type" style="background: #<?= $type->getColor() ?>;">
                <a href="<?= $_SERVER['BASE_URI'] . '/type/' . $type->getId() ?>"><?php echo $type->getName() ?></a>
            </li>
        <?php endforeach;
        echo "</ul>";
    }?>
</div>
