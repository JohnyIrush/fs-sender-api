<?php

namespace Cchivhima\Sendfood\Http\Controllers;

use Illuminate\Http\Request;

class SendFoodUiController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');   
  }
  
    /**
     * Returns send food dashboard UI
     */
    public function dashboard()
    {
        
      return view('sendfood::Themes.dashboard');
    }

}
