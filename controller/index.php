<?php 
require_once('../core/init.php');
Redirect::view('application/json');

$user = new User;
$admin = new Admin;
$data = array();
$db = DB::getInstance();
$url = Input::getAll('get');

$router = new Router($url['url']);
$table = $router->pop();

// echo "<pre>";
// // if (Input::exists('post')) {
// // 		# code...
// // 	echo "All posts";
// // 	var_dump(Input::getAll('post'));
// // }
// 	echo "all files";
// 	echo "<br>";
// if (Input::exists('file')) {
// 		# code...
// 	print_r($admin->addImage());
// 	// var_dump(Input::getAll('file'));
// }
// die;

if (Input::exists('post')) {
	# code...
	if (Input::has('_method')) {
		# code...
		$_method = Input::get('_method');
		$params = Input::getAll();
		$where = array('id' => $router->pop());
		unset($params['_method']);
		switch ($_method) {
			case 'put':
				# code...
				$data['where'] = $where;
				$data['params'] = $params;
				$db->update($table, $where, $params);
				$db->get($table, $where);
				$data[] = $db->results();
				// echo "execute put request";
				break;
			
			case 'delete':
				# code...
				$data[] = $db->delete($table, $where);
				// $data[] = $db->delete($table, $where);
				// echo "execute delete request";
				break;
			
			case '_addProduct':
				# code...
				$data[] = $admin->addImage();
				break;
			
			case '_reqReview':
				# code...
				$data[] = $user->checkSensor();
				break;

		}
	} else {
		// echo('sign up intended');
		if ($router->hasJuice()) {
			# code...
			echo "error: go to 404 page";
		} else {
			// $data['form-data'] = Input::getAll();
			$db->get($table, Input::getAll());
			if (count($db->results())) {
				# code...
			} else {
				if ($db->insert($table, Input::getAll())) {
					# code...
					$db->get($table, Input::getAll());
					$data[] = $db->results();
				}
			}
		}
		
	}
}
elseif (Input::exists('get')) {
	# code...
	$array = array();
	if ($router->hasJuice()) {
		# code...
		if (is_double(count($router->getArr()) / 2)) {
			# code...
			$data[] = 'url undefined';
			
		} else {
			while ($router->hasJuice()) {
				# code...
				$array[$router->pop()] = $router->pop();
			}
		}
	}
	if ($table == 'make_order') {
		# code..
		$o = new Order;
		$o->createOrder($user->getId());
	} else {
		$db->get($table, $array);
	}
	$data[] = $db->results();
}


echo json_encode($data);