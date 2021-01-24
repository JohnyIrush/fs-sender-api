<?php

namespace Cchivhima\Sendfood\Http\Controllers;

use Illuminate\Http\Request;

use Cchivhima\Sendfood\Models\Beneficiary;

use Cchivhima\Sendfood\Models\Country;


use Illuminate\Support\Facades\Auth;

class BeneficiaryController extends Controller
{
    /**
     * Fetch existing beneficiaries and
     * render beneficiary into the dashboard
     */
    public function beneficiary()
    {

      $beneficiaries = Beneficiary::all();
      return view('sendfood::Themes.beneficiary.beneficiary')
      ->with([
       'beneficiaries' => $beneficiaries
      ]);
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
      $beneficiary->phone = $request->phone;
      $beneficiary->created_by = 1;
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

}
