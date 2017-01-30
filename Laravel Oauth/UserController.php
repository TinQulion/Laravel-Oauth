<?php


class UserController extends BaseController
{

	/*
		Author : Joakim
	*/

	public function register()
	{


	}

	public function loginWithFacebook()
	{

		// get data from input
		$code = Input::get('code');

		// get fb service
		$fb = OAuth::consumer('Facebook');

		// check if code is valid

		// if code is provided get user data and sign in
		if (!empty($code)) {

			// This was a callback request from facebook, get the token
			$token = $fb->requestAccessToken($code);

			// Send a request with it
			$result = json_decode($fb->request('/me'), true);

			$message = 'Your unique facebook user id is: ' . $result['id'] . ' and your name is ' . $result['name'];
			echo $message . "<br/>";

			//Var_dump
			//display whole array().
			dd($result);

		} // if not ask for permission first
		else {
			// get fb authorization
			$url = $fb->getAuthorizationUri();

			// return to facebook login url
			return Redirect::to((string)$url);
		}

	}

	public function loginWithGoogle()
	{
		echo 1;
		// get data from input
		$code = Input::get('code');

		// get google service
		$googleService = OAuth::consumer('Google');

		// if code is provided get user data and sign in
		if (!empty($code)) {

			// This was a callback request from google, get the token
			$token = $googleService->requestAccessToken($code);


			// Send a request with it
			$result = json_decode($googleService->request('https://www.googleapis.com/oauth2/v1/userinfo'), true);

			// Check to see if user already exists
			$user = DB::select('select user_id from users where email = ?', array($result['email']));

			$user = User::whereEmail($result['email'])->first(['user_id']);

			if (empty($user)) {
				$user = new User;
				$user->fname = $result['given_name'];
				$user->email = $result['email'];
				$user->lname = $result['family_name'];

				$user->save();
			}

			Auth::login($user);


		} // if not ask for permission first
		else {
			// get googleService authorization
			$url = $googleService->getAuthorizationUri();

			// return to google login url
			return Redirect::to((string)$url);
		}


}
    public function logIn(){
        //Checking if email and password match the information in the database
        $email = Input::get('email');
        $password = Input::get('password');
        if (Auth::attempt(array('email' => $email, 'password' => $password))){
            echo 1;
        


        }
    }
}



