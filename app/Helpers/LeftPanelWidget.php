<?php 
namespace App\Helpers;
use Auth;
class LeftPanelWidget
{
	
	public function __construct(){
		
	}
	public function getAll($params=null)
	{
		if(Auth::user()->isAdmin()){
		    return view('blocks.left_panel.admins');
		}
		if(Auth::user()->isClient()){
		    return view('blocks.left_panel.users');
		}
	}
}