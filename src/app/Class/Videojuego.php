<?php

namespace Ciclost\Proyecto1\Class;

use Ciclost\Proyecto1\Class\Content;
use Ciclost\Proyecto1\Enums\PlataformType;

class Videojuego extends Content
{
private PlataformType $plataform;
private int $players;

    /**
     * @param PlataformType $plataform
     * @param int $players
     */
    public function __construct(PlataformType $plataform, int $players)
    {
        parent::__construct(Uuid::uuid4());
        $this->plataform = $plataform;
        $this->players = $players;
    }

}