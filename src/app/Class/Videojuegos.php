<?php

namespace David\Proyecto1\Class;

use David\Proyecto1\Class\Content;
use David\Proyecto1\Enums\PlatformType;

class Videojuegos extends Content
{
    private PlatformType $plataform;
    private int $playes;

    public function getPlataform(): PlatformType
    {
        return $this->plataform;
    }

    public function setPlataform(PlatformType $plataform): Videojuegos
    {
        $this->plataform = $plataform;
        return $this;
    }

    public function getPlayes(): int
    {
        return $this->playes;
    }

    public function setPlayes(int $playes): Videojuegos
    {
        $this->playes = $playes;
        return $this;
    }

    public function __construct(PlatformType $plataform, int $playes)
    {
        parent::__construct(Uuid::$uuid);
        $this->platform=$platform;
        $this->players=$players;
    }


}