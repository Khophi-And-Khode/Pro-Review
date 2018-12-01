<?php

/**
 * 
 */
class Utility
{
	public static function uploadImage($file = array(), $name, $location) {
		if (is_uploaded_file($file[$name]['tmp_name'])) {
			# code...
			$path = $file[$name]['tmp_name'];
			$rp = "{$location}".$file[$name]['name'];
			$dataPath = "{$location}".$file[$name]['name'];
			$dataPath = str_replace('..', '', $dataPath);
			if (move_uploaded_file($path, $rp)) {
				# code...
				return $dataPath;
			}
		}
		return $file;
	}

	public static function uploadMultipleImages($file = array(), $name, $location) {
		$return = array();
		for ($i=0; $i < count($file[$name]['name']); $i++) { 
			# code...
			if (is_uploaded_file($file[$name]['tmp_name'][$i])) {
				# code...
				$path = $file[$name]['tmp_name'][$i];
				$rp = "{$location}".$file[$name]['name'][$i];
				$dataPath = "{$location}".$file[$name]['name'][$i];
				$dataPath = str_replace('..', '', $dataPath);
				if (move_uploaded_file($path, $rp)) {
					# code...
					$return[] = $dataPath;
				}
			}
		}
		return $return;
	}

	public function sendMail($params) {
		# code...
		$to = '';//the lecturer's email
		$subject = 'Question asked on Lecture';
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$headers .= 'From: EduWorld'. "\r\n";
		return mail($to,$subject,$message,$headers);
	}
}