<?php

namespace App\Enums\Product;

enum ProductPack: string
{
    case Piece = 'Piece';
    case Pack = 'Pack';
    case Packet = 'Packet';
    case Box = 'Box';
    case Container = 'Container';
    case Can = 'Can';
    case Jerican = 'Jerican';
    case Roll = 'Roll';
}
