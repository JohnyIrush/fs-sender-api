<?php

namespace Cchivhima\Sendfood\Http\Controllers;

use Illuminate\Http\Request;

use Cchivhima\Sendfood\Models\BankList;

use Cchivhima\Sendfood\Models\AgentList;

use Cchivhima\Sendfood\Models\BeneficiarieReceivingMethod;

use Illuminate\Support\Facades\Auth;

use Cchivhima\Sendfood\Models\AgentLocation;

use Cchivhima\Sendfood\Models\MobileWalletTemplate;

use Cchivhima\Sendfood\Models\CashPickupTemplate;

use Cchivhima\Sendfood\Models\ZipWallet;

use Cchivhima\Sendfood\Http\Drivers\Memory;

use DB;

use Session;
 
class ReceivingMethodsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');   
    }
    /**
     * fetch bank lists
     */
    public function bankList()
    {
        $bank_lists =  BankList::all();
        return response()->json($bank_lists,200);
    }

    /**
     * fetch agent lists
     */
    public function agentList()
    {
        $agent_lists =  AgentList::all();
        return response()->json($agent_lists,200);
    }

    /**
     * fetch agent locations
     */
    public function agentLocation($id)
    {
        $agentlocation =  AgentList::find($id)->agentlocation;
        return response()->json($agentlocation,200);
    }

    /**
     * fetch agent locations
     */
    public function agentMobile($id)
    {
        $agentmobile =  AgentList::find($id);
        return response()->json($agentmobile,200);
    }

    /**
     * fetch mobile wallet templates
     */
    public function mobileWalletTemplate()
    {
        $mobilewallets =  MobileWalletTemplate::all();
        return response()->json($mobilewallets,200);
    }

    /**
     * fetch cashpickup templates
     */
    public function cashPickUpTemplates()
    {
        $cashpickuptemplates =  CashPickupTemplate::all();
        return response()->json($cashpickuptemplates,200);
    }  

    /**
     * fetch cashpickup templates
     */
    public function zipWallet()
    {
        $zipwallets =  ZipWallet::all();
        return response()->json($zipwallets,200);
    }  


    

    //create beneficiary receiving methods

    public function createReceivingMethod(Request $request)
    {
        //dd($request);

      $beneficiaryreceivingmethod = new BeneficiarieReceivingMethod();
      $beneficiaryreceivingmethod->beneficiary_id = 1; //Supposed to be from the session of the beneficiary created or selected
      $beneficiaryreceivingmethod->bank = $request->bank;
      $beneficiaryreceivingmethod->agent = $request->agent;
      $beneficiaryreceivingmethod->mobile_operator_id = $request->mobile_operator_id;
      $beneficiaryreceivingmethod->zipwallet = $request->zipwallet;
      $beneficiaryreceivingmethod->mobile = $request->mobile;
      $beneficiaryreceivingmethod->created_by = Auth::id();
      $beneficiaryreceivingmethod->updated_by = Auth::id();
      $beneficiaryreceivingmethod->save();

      $memory = new Memory();
      //$memory->receivingMethod(DB::table('beneficiarie_receiving_methods')->orderBy('id', 'DESC')->first()->id);
      Session::put('receivingmethod',DB::table('beneficiarie_receiving_methods')->orderBy('id', 'DESC')->first()->id);
      Session::save();
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
