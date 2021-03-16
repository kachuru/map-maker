<?php

namespace Kachuru\MapMaker;

interface MapTile
{
    public function getTileId(): int;

    public function getCoordinates(): MapCoordinates;
}
