<?php

namespace Cchivhima\Sendfood\Http\Controllers;

use Illuminate\Http\Request;

use Cchivhima\Sendfood\Models\Beneficiary;

use Cchivhima\Sendfood\Models\Country;

use Cchivhima\Sendfood\Models\State;

use Cchivhima\Sendfood\Models\City;

use Illuminate\Support\Facades\Auth;

use Session;

class BeneficiaryController extends Controller
{
    /**
     * Fetch existing beneficiaries and
     * render beneficiary into the dashboard
     */
    public function beneficiary()
    {
      if (!Session::get('cart')->totalQty==0) {
        $beneficiaries = Beneficiary::all();
        return view('sendfood::Themes.beneficiary.beneficiary')
        ->with([
         'beneficiaries' => $beneficiaries
        ]);
       }else{
           return redirect()->back()->with(['warning'=>'Your Cart is Empty Please Add Some Products To Proceed!']);
       }


    }

    //Create a new Beneficiary

    public function create(Request $request){
      //dd($request);
      $beneficiary = new Beneficiary();
      $beneficiary->name = $request->name;
      $beneficiary->user_id = 1;
      $beneficiary->address = $request->address;
      $beneficiary->city = $request->city;
      $beneficiary->state = $request->state;
      $beneficiary->postal_code = $request->zip;
      $beneficiary->country = $request->country;
      //$beneficiary->bank_name = $request->bank_name;
      //$beneficiary->branch_name = $request->branch_name;
      //$beneficiary->account_number = $request->account_number;
      $beneficiary->email = $request->email;
      $beneficiary->phone = ($request->phonecode + $request->phone);
      $beneficiary->created_by = 1;
      $beneficiary->active = 1;
      $beneficiary->updated_by = 1;
      $beneficiary->save();

    }

        /**
     * Fetch existing beneficiaries and
     * render beneficiary into the dashboard
     */
    public function country()
    {
      $countries = Country::all();
      return response()->json($countries,200);
    }

    public function state()
    {
      $states = State::all();
      return response()->json($states,200);
    }

    public function city()
    {
    $cities = City::all()->take(1000);
     // City::chunk(100, function ($cities) {
     //   foreach ($cities as $citys) {
     //       return response()->json($cities,200);
     //   }
     //});
      return response()->json($cities,200);
    }

    public function phoneCode()
    {
      $phonecodes = DB::table('countries')->select('phonecode')->get();
      return response()->json($phonecodes,200);
    }


}
