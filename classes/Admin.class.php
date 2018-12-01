<?php


/**
* 
*/
class Admin extends User
{
	function __construct() {

	}

	public function addImage() {
		$_d = Input::getAll('file')['file'];
		return CloudinaryAccess::uploadImage($_d['name'], $_d['tmp_name']);
	}

}