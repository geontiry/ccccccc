<?php

namespace App\Enums\Inventory;

enum StockMovement: string
{
    case Supply = 'Supply';
    case Sale = 'Sale';
    case Utility = 'Utility';
    case Transfer = 'Transfer';
    case Return = 'Return';
    case Damage = 'Damage';
    case Obsolete = 'Obsolete';
    case Loss = 'Loss';
    case Audit = 'Audit';
}
