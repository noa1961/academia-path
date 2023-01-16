<?php
namespace App\Model;

class Livro
{
  /* example of a method */
  public function shortName()
  {
    return substr($this->nome,0,10);
  }
}