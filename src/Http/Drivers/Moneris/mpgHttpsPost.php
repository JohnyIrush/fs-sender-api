<?php

namespace Cchivhima\Sendfood\Http\Drivers\Moneris;

use Cchivhima\Sendfood\Http\Drivers\Moneris\httpsPost;

use Cchivhima\Sendfood\Http\Drivers\Moneris\mpgResponse;


class mpgHttpsPost
{

 	var $api_token;
 	var $store_id;
 	var $app_version;
 	var $mpgRequest;
 	var $mpgResponse;
 	var $xmlString;
 	var $txnType;
 	var $isMPI;

 	public function __construct($storeid,$apitoken,$mpgRequestOBJ)
 	{

  		$this->store_id=$storeid;
  		$this->api_token= $apitoken;
  		$this->app_version = null;
  		$this->mpgRequest=$mpgRequestOBJ;
  		$this->isMPI=$mpgRequestOBJ->getIsMPI();
  		$this->isMPI2=$mpgRequestOBJ->getIsMPI2();
  		$dataToSend=$this->toXML();
  		
		$url = $this->mpgRequest->getURL();
		
  		$httpsPost= new httpsPost($url, $dataToSend);	
  		$response = $httpsPost->getHttpsResponse();

  		if(!$response)
  		{

     			$response="<?xml version=\"1.0\"?><response><receipt>".
          			"<ReceiptId>Global Error Receipt</ReceiptId>".
          			"<ReferenceNum>null</ReferenceNum><ResponseCode>null</ResponseCode>".
          			"<AuthCode>null</AuthCode><TransTime>null</TransTime>".
          			"<TransDate>null</TransDate><TransType>null</TransType><Complete>false</Complete>".
          			"<Message>Global Error Receipt</Message><TransAmount>null</TransAmount>".
          			"<CardType>null</CardType>".
          			"<TransID>null</TransID><TimedOut>null</TimedOut>".
          			"<CorporateCard>false</CorporateCard><MessageId>null</MessageId>".
          			"</receipt></response>";
   		}

  		$this->mpgResponse=new mpgResponse($response);

 	}

	public function setAppVersion($app_version)
	{
		$this->app_version = $app_version;
	}

 	public function getMpgResponse()
 	{
  		return $this->mpgResponse;

 	}

 	public function toXML()
 	{

  		$req=$this->mpgRequest;
  		$reqXMLString=$req->toXML();
  		
  		if($this->isMPI2 === true)
  		{
  			$this->xmlString .="<?xml version=\"1.0\"?>".
								"<Mpi2Request>".
									"<store_id>$this->store_id</store_id>".
									"<api_token>$this->api_token</api_token>";
  			
  			if($this->app_version != null)
  			{
  				$this->xmlString .= "<app_version>$this->app_version</app_version>";
  			}
									
			$this->xmlString .= 	$reqXMLString.
								"</Mpi2Request>";
  		}
  		else if($this->isMPI === true)
  		{
  			$this->xmlString .="<?xml version=\"1.0\"?>".
   			"<MpiRequest>".
   			"<store_id>$this->store_id</store_id>".
   			"<api_token>$this->api_token</api_token>";
  			
  			if($this->app_version != null)
  			{
  				$this->xmlString .= "<app_version>$this->app_version</app_version>";
  			}
  			
  			$this->xmlString .= 	$reqXMLString.
  			"</MpiRequest>";
  		}
  		else
  		{
  			$this->xmlString .= "<?xml version=\"1.0\" encoding=\"UTF-8\"?>".
               					"<request>".
               						"<store_id>$this->store_id</store_id>".
               						"<api_token>$this->api_token</api_token>";
  			
  			if($this->app_version != null)
  			{
  				$this->xmlString .= "<app_version>$this->app_version</app_version>";
  			}
  			
            $this->xmlString .=    	$reqXMLString.
                				"</request>";
  		}

  		return ($this->xmlString);

 	}

}//end class mpgHttpsPost
