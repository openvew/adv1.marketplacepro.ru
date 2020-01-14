<?php 
namespace App\Helpers;
use Auth;
class ProductWidget
{
	public function getAll($params)
	{
		
		if(!$params) return "";
		switch($params["template"]){
			case "counter_offers":
			    return $this->counterOffers();
			break;
			case "counter_shops":
			    return $this->counterShops();
			break;	
			case "counter_companies":
			    return $this->counterCompanies($params);
			break;			
			case "counter_balamnce":
			    return $this->counterBalance();
			break;				
		}
		return view('blocks.product.default') ;
	}
	public function counterBalance(){
		return view('blocks.product.counter_balance') ;
	}		
    public function counterCompanies($params){
		return view('blocks.product.counter_companies',["params"=>$params]) ;
	}		
	public function counterOffers(){
		return view('blocks.product.counter_offers') ;
	}
    public function counterShops(){
		return view('blocks.product.counter_shops') ;
	}	
}