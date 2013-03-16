<?php

namespace Coddict\DevExtraBundle\Services;
use Guzzle\Http\Client;

class PackagistSearchService extends AbstractService
{
	protected $url = 'http://packagist.org';
	
	protected function package_sorter($key) {
	    return function ($a, $b) use ($key) {
	        return strnatcmp($b[$key], $a[$key]);
	    };
	}

	public function search($word){
		$client = new Client($this->url);
		$request = $client->get('/search.json?q=' . urlencode($word));
		$data = $request->send()->json()["results"];
		// sort the packages by downloads
		usort($data, $this->package_sorter('downloads'));
		$output = array();
		foreach($data as $key => $package){
			$output[] = array(
				"name"			=> $package["name"],
				"description"	=> $package["description"],
				"package"		=> $package["url"],
			);
		}
		return $output;
	}
	
	public function getPackage($name){
		if(empty($name))
			throw new \Exception("name is empty");
		$client = new Client($this->url);
		$request = $client->get('/packages/'.$name.'.json');
		$fullPackage = $request->send()->json();
		if(!array_key_exists("package", $fullPackage) )
			throw new \Exception("The package was not found");
		return $fullPackage["package"];
	}
}

?>
