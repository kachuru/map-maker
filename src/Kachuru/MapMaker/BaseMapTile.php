<?php

namespace Kachuru\MapMaker;

class BaseMapTile implements MapTile
{
    private $tileId;

    private $mapCoordinates;

    public function __construct(int $tileId, MapCoordinates $mapCoordinates)
    {
        $this->tileId = $tileId;
        $this->mapCoordinates = $mapCoordinates;
    }

    public function getTileId(): int
    {
        return $this->tileId;
    }

    public function getCoordinates(): MapCoordinates
    {
        return $this->mapCoordinates;
    }
}
