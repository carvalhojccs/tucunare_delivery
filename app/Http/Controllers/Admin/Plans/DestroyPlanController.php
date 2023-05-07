<?php

namespace App\Http\Controllers\Admin\Plans;

use App\Http\Controllers\Controller;
use App\Models\Plans;

class DestroyPlanController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($url)
    {
      Plans::where('url', $url)->delete();

      //Plans::destroy($plan);
      
      return redirect()->route('plans.index');

    }
}
