<?php

namespace Pokedex\Controllers;

use Pokedex\Models\Pokemon;
use Pokedex\Models\Type;

class MainController
{
  public function list()
  {
    $pokemonObject = new Pokemon();
    $pokemonList = $pokemonObject->findAll();

    $this->show('list', [
          'title'=>'Welcome',
          'pokemons'=>$pokemonList
        ]);
  }

  public function detail($params)
  {
    $pokemonObject = new Pokemon();
    $pokemon = $pokemonObject->find($params['numero']);
    $types = $pokemon->getTypes();

    $this->show('detail', [
      'title' => 'Welcome',
      'pokemon' => $pokemon,
      'types' => $types
    ]);
  }

  public function types()
  {
    $typeObject = new Type();
    $typeList = $typeObject->findAll();

    $this->show('types', [
      'title' => 'Type List',
      'types'=>$typeList
    ]);
  }

  public function type($params)
  {
    $pokemonObject = new Pokemon();
    $pokemons = $pokemonObject->findByType($params['type']);

    $this->show('list',[
      'title' => 'Filtered by Type',
      'pokemons' => $pokemons
    ]);
  }



  public function show($viewName, $viewVars=[])
  {
    include(__DIR__.'/../views/header.tpl.php');
    include(__DIR__. '/../views/' . $viewName . '.tpl.php');
    include(__DIR__.'/../views/footer.tpl.php');
  }


//TODO Faire toutes les vues. Bootstrap ?







}