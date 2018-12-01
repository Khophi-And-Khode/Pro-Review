<?php


/**
 * 
 */
class Guest extends DBO
{
	
	function __construct() {
		# code...
	}

	public function apply($params) {
		// return $params;
		$momo = new Makepayment();
		$pay_status = $momo->pay($params);
		$user = self::get('author', array('email' => $params['email'], 'phone' => $params['phone']));
		if (count($user) == 1) {
			# code...
			$user_id = $user[0]->id;
		} else {
			$user_id = self::insert('author', array('email' => $params['email'], 'phone' => $params['phone']))[0]->id;
		}
		return self::insert('application', array('title' => $params['title'], 'message' => $params['message'], 'author' => $user_id));
	}

	public function verifyISBN($params) {
		$ret = self::get('isbn', $params);
		if (count($ret)) {
			# code...
			$ret = $ret[0];
			$book['isbn'] = $ret;
			$book['book'] = self::get('book', array('isbn' => $ret->id));
			return $book;
		} else {
			return false;
		}
	}

	public function getBooks() {
		$array = array();
		foreach (self::get('book', array()) as $key => $value) {
			# code...
			$array[$key]['book'] = $value;
			$array[$key]['isbn'] = self::get('isbn', array('id' => $value->isbn))[0];
			$array[$key]['author'] = self::get('author', array('id' => $value->author))[0];
		}
		return $array;
	}

}