<?php

namespace Cchivhima\Sendfood\Http\Controllers;

use Illuminate\Http\Request;

class SendFoodUiController extends Controller
{
    /**
     * Returns send food dashboard UI
     */
    public function dashboard()
    {
        
      return view('sendfood::Themes.dashboard');
    }

}
