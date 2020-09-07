<?php

use App\PromocodeUsage;
use App\ServiceType;
use Twilio\Rest\Client;
use Twilio\Exceptions\TwilioException;

function currency($value = '')
{
	if($value == ""){
		return config('constants.currency').number_format(0, 2, '.', '');
	} else {
		return config('constants.currency').number_format($value, 2, '.', '');
	}
}

function distance($value = '')
{
    if($value == ""){
        return "0 ".config('constants.distance', 'Kms');
    }else{
        return $value." ".config('constants.distance', 'Kms');
    }
}

function img($img){
	if($img == ""){
		return asset('main/avatar.jpg');
	}else if (strpos($img, 'http') !== false) {
        return $img;
    }else{
		return asset('storage/'.$img);
	}
}

function image($img){
	if($img == ""){
		return asset('main/avatar.jpg');
	}else{
		return asset($img);
	}
}

function promo_used_count($promo_id)
{
	return PromocodeUsage::where('status','USED')->where('promocode_id',$promo_id)->count();
}

function curl($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $return = curl_exec($ch);
    curl_close ($ch);
    return $return;
}

function get_all_service_types()
{
	return ServiceType::all();
}

function demo_mode(){
	if(\Setting::get('demo_mode', 0) == 1) {
        return back()->with('flash_error', 'Disabled for demo purposes! Please contact us at info@appdupe.com');
    }
}

function get_all_language()
{
	return array('en'=>'English','ar'=>'Arabic' ,'pt' => 'Portuguese');
}

function sendTwilioSMS($mobileno, $otp){
  \Log::info("Twilio MObile".$mobileno. '---' .$otp);

    $status = '';
   
    $message = "Your Verification Code: ". $otp ."";
    $accountSid = Setting::get('twilio_accountsid');
    $authToken = Setting::get('twilio_token');
    $twilioNumber = Setting::get('twilio_mobile');
   
    $client = new Client($accountSid, $authToken);
    try {
      $client->messages->create(
          $mobileno,
          [
              "body" => $message,
              "from" => $twilioNumber
          ]);
      return $status = "success";
      
    }catch (TwilioException $e) {

      \Log::info($e->getMessage());

      return $e->getMessage();
      // return response()->json(['error'=> $e->getMessage()]);
      Log::info(
          'Could not send SMS notification.' .
          ' Twilio replied with: ' . $e
          );
    }
    }


    function sendSMS($mobileno, $otp)
    {
      $curl = curl_init();

      $hashId = Setting::get('sms_hash_id');
      $message = urlencode("Your Verification Code: ". $otp);

      curl_setopt_array($curl, array(
        CURLOPT_URL => "https://smsmobile.com.br/sms/shortcode/routes/sms.php?hash=".$hashId."&numero=".$mobileno."&mensagem=".$message,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);

      curl_close($curl);

      return json_decode($response);
    }

    function pagar_transaction_status($url){
      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_HTTPHEADER => array(
        ),
      ));

      $response = curl_exec($curl);

      $err = curl_error($curl);

      curl_close($curl);

      return json_decode($response);
    }