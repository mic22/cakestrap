<?php
App::uses('AppController', 'Controller');

class UsersController extends AppController
{
	public function add()
	{
		parent::add();
		AppController::loadModel('Role');
		$this->set('roles', $this->Role->listing(null, 'name'));
	}

	public function register()
	{
		$this->request->data['User']['role_id'] = 6;
		parent::add();
		AppController::loadModel('Role');
		$this->set('roles', $this->Role->listing(null, 'name'));
	}

	public function edit($id = null)
	{
		parent::edit($id);
		AppController::loadModel('Role');
		$this->set('roles', $this->Role->listing(null, 'name'));
	}

	public function login()
	{
		if($this->request->is('post'))
		{
			$email = $this->request->data['User']['email'];
			$password = sha1($this->request->data['User']['password']);

			$user = $this->User->find("`email` = '{$email}' AND `password` = '{$password}'");

			if(!empty($user))
			{
				$this->Session->write('User', $user[0]['User']);
				$this->Session->setFlash(__('Welcome in!'));
				return $this->redirect('/');
			}
			else
			{
				$this->Session->setFlash(__('The user could not be logged in. Please, try again.'));
			}
		}
	}

	public function logout()
	{
		$this->Session->destroy();
		$this->redirect('/users/login/');
		exit();
	}
}