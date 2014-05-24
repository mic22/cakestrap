<?php
App::uses('AppController', 'Controller');

class NewsController extends AppController
{
	public function index() {
		$this->set('news', $this->News->getNews());
		AppController::loadModel('User');
		$this->set('users', $this->User->find());
	}

	public function add() {
		if ($this->request->is('post'))
		{
			$filename = DS.'files'.DS.time().$this->data['News']['thumbnail']['name'];
			move_uploaded_file($this->data['News']['thumbnail']['tmp_name'], WWW_ROOT.$filename);
			$this->request->data['News']['thumbnail'] = $filename;

			if ($this->News->save($this->request->data)) {
				$this->Session->setFlash(__('The row has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The row could not be saved. Please, try again.'));
			}
		}
	}

	public function view($id = null)
	{
		parent::view($id);
		AppController::loadModel('Comment');
		$this->set('comments', $this->Comment->getComments("news_id = '$id'"));
		AppController::loadModel('User');
		$this->set('users', $this->User->listing(null, 'name'));
	}
}