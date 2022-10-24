<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ExportController extends Controller
{
    public function csv(Request $request)
    {
      $handle = fopen(public_path('storage/export.csv'), 'w');

      User::chunk(2000, function ($users) use ($handle) {
          foreach ($users->toArray() as $user) {
              fputcsv($handle, $user);
          }
      });

      fclose($handle);

      return Storage::disk('public')->download('export.csv');
    }
    
}
