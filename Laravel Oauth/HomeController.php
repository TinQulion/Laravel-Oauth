<?php

class HomeController extends BaseController {

	public function index(){
		// Checks if the user is logged in and if so just redirects to the /projects route
		if(Auth::check()){
			return Redirect::to('/project');
		}else{
			// get data from input
			$code = Input::get( 'code' );
			// get google service
			$googleService = OAuth::consumer( 'Google' );
			// check if code is valid
			// if code is provided get user data and sign in
			if ( empty( $code ) ) {
				echo Input::get( 'code' );
			}
			return View::make('home');
		}
	}
}
