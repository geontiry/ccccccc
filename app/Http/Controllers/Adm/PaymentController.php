<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use App\Services\MPesaService;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment(Request $request, MPesaService $mpesa)
    {
        $total = $mpesa->express();
        return $total;
    }
}
