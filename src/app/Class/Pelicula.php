<?php

namespace Ciclost\Proyecto1\Class;

use Ciclost\Proyecto1\Class\Content;
use Ciclost\Proyecto1\Enums\MovieClassification;

class Pelicula extends Content{
private int $length;
private string $synopsis;
private array $type;
private MovieClassification $classification;
public function __construct()
{
    parent::__construct(Uuid::uuid4());
}


}