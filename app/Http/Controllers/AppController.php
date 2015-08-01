<?php

namespace App\Http\Controllers;

use App\Tab;

use Auth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AppController extends Controller
{
	
  /**
   * getApp function.
   * 
   * @access public
   * @return view
   */
  public function getApp()
  {
  	if (Auth::check()) {
	  	return view('app');
  	} else {
	  	return view('auth.login');
  	}
  }
  
  
  /**
   * getTabs function.
   * 
   * @access public
   * @return array JSON
   */
  public function getTabs() {
	  
	  $tabs = Tab::all();
	  
	  return $tabs;
  }
  
  /**
   * createTab function.
   * 
   * @access public
   * @param Request $request
   * @return void
   */
  public function createTab(Request $request)
  {
  	Tab::create($request->all());
  }
  
  /**
   * deleteTab function.
   * 
   * @access public
   * @param int $id
   * @return void
   */
  public function deleteTab($id)
  {
  	$tab = Tab::find($id);
  	
  	$tab->delete();
  }
  
}
