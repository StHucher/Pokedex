<?php

namespace Pokedex\Models;

use PDO;
use Pokedex\Utils\Database;

class Pokemon extends CoreModel
{

  private $nom;
  private $pv;
  private $attaque;
  private $defense;
  private $attaque_spe;
  private $defense_spe;
  private $vitesse;
  private $numero;

  /**
   * Get the value of nom
   */ 
  public function getNom()
  {
    return $this->nom;
  }

  /**
   * Get the value of pv
   */
  public function getPv()
  {
    return $this->pv;
  }

  /**
   * Get the value of attaque
   */
  public function getAttaque()
  {
    return $this->attaque;
  }

  /**
   * Get the value of defense
   */
  public function getDefense()
  {
    return $this->defense;
  }

  /**
   * Get the value of attaque_spe
   */
  public function getAttaqueSpe()
  {
    return $this->attaque_spe;
  }

  /**
   * Get the value of defense_spe
   */
  public function getDefenseSpe()
  {
    return $this->defense_spe;
  }

  /**
   * Get the value of vitesse
   */
  public function getVitesse()
  {
    return $this->vitesse;
  }

  /**
   * Get the value of numero
   */
  public function getNumero()
  {
    return $this->numero;
  }
  

  public function findAll()
  {
    $sql = "SELECT *
            FROM pokemon
            ORDER BY numero";

    $pdo = Database::getPDO();
    $request = $pdo->query($sql);
    $pokemonList = $request->fetchAll(PDO::FETCH_CLASS, self::class);

    return $pokemonList;
  }

  public function find($numero)
  {
    $sql = "SELECT *
            FROM pokemon
            WHERE numero ={$numero}
            LIMIT 1";

    $pdo = Database::getPDO();
    $request = $pdo->query($sql);
    $pokemon = $request->fetchObject(self::class);

    return $pokemon;
  }

  public function getTypes()
  {
    $sql = "SELECT type.*
            FROM pokemon_type
            INNER JOIN type ON type.id = pokemon_type.type_id
            WHERE pokemon_type.pokemon_numero = {$this->getNumero()}";

    $pdo = Database::getPDO();
    $request = $pdo->query($sql);
    $types = $request->fetchAll(PDO::FETCH_CLASS, Type::class);

    return $types;
  }

  public function findByType($typeId)
  {
    $sql = "SELECT *
            FROM pokemon
            INNER JOIN pokemon_type ON pokemon_type.pokemon_numero = pokemon.numero
            WHERE pokemon_type.type_id = {$typeId}
            ORDER BY pokemon.numero";

    $pdo = Database::getPDO();
    $request = $pdo->query($sql);
    $pokemons = $request->fetchAll(PDO::FETCH_CLASS, self::class);

    return $pokemons;
  }

}