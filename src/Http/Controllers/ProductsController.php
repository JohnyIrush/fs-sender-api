<?php

namespace Cchivhima\Sendfood\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Session;

use Cchivhima\Sendfood\Models\hamperItem;

use Cchivhima\Sendfood\Models\hamperImage;

use Illuminate\Support\Facades\Auth;

use Cchivhima\Sendfood\Models\Hamper;

use Cchivhima\Sendfood\Models\Item;

use Cchivhima\Sendfood\Models\Drink;

class ProductsController extends Controller
{

   /**
     * Returns send food hamper list
     */
    public function hampers()
    {
        
      $hampers = DB::table('hampers')->get();

      return view('sendfood::Plugins.Products.hampers')->with(
          [
              'hampers'=>$hampers,
          ]
      );
    }

    //return hamper items


    public function hamperItems($id)
    {
        $hampersitems = hamperItem::find($id);
        $items = explode(',',$hampersitems->item);
        return response()->json($items,200);
    }

    //return hamper images
    public function hamperImages($id)
    {
        $hampersimages = hamperImage::where('hamper',$id)->get();
        return response()->json($hampersimages,200);
    }

   /**
     * Returns send food single items
     */
    public function singleItems()
    { 
        $items = Item::all();
        return view('sendfood::Plugins.Products.singleitems')->with(
            [
                'items'=>$items,
            ]
        );
    }

   /**
     * Returns send food wine items
     */
    public function wine()
    { 
        /*$wine = Drink::where('category','1');*/
        $wine = DB::table('drinks')->where('category','1')->paginate(32);
        return view('sendfood::Plugins.Products.wine')->with(
            [
                'wine'=>$wine,
            ]
        );
    }

   /**
     * Returns send food wine items
     */
    public function gin()
    { 
        $gin = DB::table('drinks')->where('category','3')->paginate(32);
        return view('sendfood::Plugins.Products.gin')->with(
            [
                'gin'=>$gin,
            ]
        );
    }

   /**
     * Returns send food beer items
     */
    public function beer()
    { 
        $beer = DB::table('drinks')->where('category','2')->paginate(32);
        return view('sendfood::Plugins.Products.beer')->with(
            [
                'beer'=>$beer,
            ]
        );
    }

   /**
     * Returns send food water items
     */
    public function water()
    { 
        $water = DB::table('drinks')->where('category','4')->paginate(32);
        return view('sendfood::Plugins.Products.water')->with(
            [
                'water'=>$water,
            ]
        );
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
