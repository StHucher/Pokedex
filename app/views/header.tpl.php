<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pokedex</title>
  <link rel="stylesheet" href="<?= $_SERVER['BASE_URI']?>/css/style.css">
</head>
<body>
  <header>
    <div class="container">
      <a class="logo" href="<?= $_SERVER['BASE_URI'] ?>">Pokédex</a>
      <nav>
        <ul>
          <li><a href="<?= $_SERVER['BASE_URI'] ?>">List</a></li>
          <li><a href="<?= $_SERVER['BASE_URI']. '/types' ?>">Category</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="container">