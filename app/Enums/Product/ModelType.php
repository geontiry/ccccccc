<?php

namespace App\Enums\Product;

enum ModelType: string //sku, code, isbn,partno
{
    case Sku = 'SKU';
    case Isbn = 'ISBN';
    case Code = 'Product Code';
    case Partno = 'Part Number';
}
