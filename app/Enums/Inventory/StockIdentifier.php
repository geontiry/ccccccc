<?php

namespace App\Enums\Inventory;

enum StockIdentifier: string
{
    case PCode = 'Product Code';
    case PNumber = 'Product No';
    case Batchno = 'Batch No';
    case Serialno = 'Serial No';
}
