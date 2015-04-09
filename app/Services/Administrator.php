<?php namespace App\Services;

    use \GuzzleHttp\EntityBody;
    use \GuzzleHttp\Message\Request;
    use \GuzzleHttp\Message\Response;

class Administrator{



	public static function getTrait($file, $attr){
		$arr = (array)json_decode(file_get_contents(storage_path().'/'.$file));
		return $arr[$attr];
	}

	public static function save($title, $content){
		$path = storage_path().'/'.$title;
		if($title == 'contact'){
			$content  = Administrator::modifyAddress($content);
		}
		file_put_contents($path, json_encode($content), LOCK_EX);
	}

	public static function modifyAddress($array){
		$client = new \GuzzleHttp\Client();
		$address = $array['address'];
		$address = str_replace('\\n', ' ', $address);
		$address = str_replace(',', '', $address);
		$address = str_replace(' ', '+', $address);		
		$res = $client->get('http://open.mapquestapi.com/nominatim/v1/search.php?format=json&q='.$address);
		$json = $res->json()[0];
		$array['longitude'] = $json['lon'];
		$array['latitude']  = $json['lat'];
		print_r($array);
		die();
		return $array;
	}
}

?>