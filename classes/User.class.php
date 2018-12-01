<?php


/**
* 
*/
class User extends DBO
{
	private $id;
	
	function __construct($user = null) {
		# code...
		if ($user == null) {
			# code...
			if (Session::exists('id')) {
				# code...
				$this->id = Session::get('id');
			} else {
				$this->id = false;
			}
		} else {
			$this->id = $user;
		}
	}

	public function logIn($params = array()) {
		$data = self::get('user', array('email' => $params['email']));
		if ($data != null) {
			# code...
			if (Pee::verify($params['password'], $data[0]->password)) {
				# code...
				Session::put('email', $params['email']);
				Session::put('phone', $data[0]->phone);
				Session::put('name', $data[0]->name);
				Session::put('id', $data[0]->id);
				Cookie::set('email', $params['email']);
				Cookie::set('name', $data[0]->name);
				Cookie::set('uid', $data[0]->uid);

				return true;
			}
		}
		return false;
	}

	public function signUp($params = array()) {
		$iniPass = $params['password'];
		if (isset($params['password'])) {
			# code...
			$params['password'] = Pee::hide($params['password']);
		}
		self::dbc()->insert('user', $params);
		if (!self::dbc()->error()) {
			# code...
			self::dbc()->update('user', $params, array('uid' => md5(self::get('user', $params)[0]->id)));
			Session::put('signup_success', 'true');
			$login = $this->login(array('email' => $params['email'], 'password' => $iniPass));
			return $login;
		}
	}

	public function hasLoggedIn() {
		return Session::exists('id'); 
	}

	public static function logout() {
		Session::delete('email');
		Session::delete('id');
		Session::delete('name');
		Cookie::delete('email');
		Cookie::delete('id');
		Cookie::delete('name');
	}

	public function checkSensor() {
		$status = CloudinaryAccess::censor(Input::getAll('file')['file']['tmp_name']);
		if($status['moderation'][0]['status'] == "approved") {
			return $status['secure_url'];
		}
		return "rejected";
		
	}

}