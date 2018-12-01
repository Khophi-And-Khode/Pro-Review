<?php 

/**
 * 
 */
class Makepayment extends DBO {
	
	public function pay ($params) {
		$CustomerName = $params["name"];
		$CustomerNumber = $params["phone"];
		$CustomerEmail = $params["email"];
		$Channel = $params["channel"];
		$Amount = 1;
		$PrimaryCallbackUrl = 'http://localhost/';
		$SecondaryCallbackUrl = 'http://localhost/';
		$Description = 'Application Fees';
		$ClientReference = 'inv001';
		$FeesOnCustomer =  false;


		$receive_momo_request = array(
		 'CustomerName' => $CustomerName,
		 'CustomerMsisdn'=> $CustomerNumber,
		 'CustomerEmail'=> $CustomerEmail,
		 'Channel'=> $Channel,
		 'Amount'=> $Amount,
		 'PrimaryCallbackUrl'=> $PrimaryCallbackUrl,
		 'SecondaryCallbackUrl'=> $SecondaryCallbackUrl,
		 'Description'=> $Description,
		 'ClientReference'=> $ClientReference,
		 'FeesOnCustomer' => $FeesOnCustomer,
		);

		//API Keys

		$clientId = 'rqmbuuzm';
		$clientSecret = 'pfzowqdz';
		// $clientId = 'odebwnqt';
		// $clientSecret = 'vwxkvmqk';
		$basic_auth_key =  'Basic ' . base64_encode($clientId . ':' . $clientSecret);
		$request_url = 'https://api.hubtel.com/v1/merchantaccount/merchants/HM0512170026/receive/mobilemoney';
		$receive_momo_request = json_encode($receive_momo_request);

		$ch =  curl_init($request_url);  
		  curl_setopt( $ch, CURLOPT_POST, true );  
		  curl_setopt( $ch, CURLOPT_POSTFIELDS, $receive_momo_request);  
		  curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );  
		  curl_setopt( $ch, CURLOPT_HTTPHEADER, array(
		      'Authorization: '.$basic_auth_key,
		      'Cache-Control: no-cache',
		      'Content-Type: application/json',
		     ));

		$result = curl_exec($ch); 
		$err = curl_error($ch);
		curl_close($ch);

		if($err){
		echo $err;
		}else{
		echo $result;
		}
	}
}