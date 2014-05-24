<?php
App::uses('AppController', 'Controller');

class QueriesController extends AppController
{
	public function index()
	{
		parent::index();
		$this->layout = 'ajax';
	}
	public function view($id = null) { exit(); }
	public function edit($id = null) { exit(); }
	public function delete($id = null) { exit(); }
}