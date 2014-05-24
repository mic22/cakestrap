<?php
App::uses('AppModel', 'Model');

class User extends AppModel {

	public function beforeSave(&$data)
	{
		if($data['User']['password'])
			$data['User']['password'] = sha1($data['User']['password']);

		return true;
	}
}