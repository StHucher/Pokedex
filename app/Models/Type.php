<?php

namespace Pokedex\Models;

use PDO;
use Pokedex\Utils\Database;

class Type extends CoreModel
{
  private $name;
  private $color;

  /**
   * Get the value of name
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * Get the value of color
   */
  public function getColor()
  {
    return $this->color;
  }

  public function findAll()
  {
    $sql = "SELECT *
            FROM type
            ORDER by name";

    
    $pdo = Database::getPDO();
    $request = $pdo->query($sql);
    $types = $request->fetchALL(PDO::FETCH_CLASS, self::class);

    return $types;
  }
}