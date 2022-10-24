<?php

namespace App\Enums\Asset;

enum FileName: string
{
    case Comp = 'Compressed';
    case Docs = 'Documents';
    case Mus = 'Music';
    case Pics = 'Pictures';
    case Prgs = 'Programs';
    case Vid = 'Video';
}
