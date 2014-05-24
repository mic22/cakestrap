<?php
App::uses('Controller', 'Controller');

class AppController extends Controller
{
	public function beforeFilter()
	{
		$this->namee = Inflector::singularize($this->name);

		AppController::loadModel('Page');
		$this->set('pages', $this->Page->listing(null, 'title'));
		$this->set('logged', $this->Session->read('User'));
		}

	public function index() {
		$this->set(strtolower($this->name), $this->{$this->namee}->find());
	}

	public function view($id = null) {
		$this->set(strtolower($this->namee), $this->{$this->namee}->read($id));
	}

	public function add() {
		if ($this->request->is('post')) {
			if ($this->{$this->namee}->save($this->request->data)) {
				$this->Session->setFlash(__('The row has been saved.'));
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('The row could not be saved. Please, try again.'));
			}
		}
	}

	public function edit($id = null) {
		if ($this->request->is(array('post', 'put'))) {
			if ($this->{$this->namee}->save($this->request->data)) {
				$this->Session->setFlash(__('The row has been saved.'));
				return $this->redirect($this->referer());
			} else {
				$this->Session->setFlash(__('The row could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->{$this->namee}->read($id);
		}
	}

	public function delete($id = null) {
		$this->request->onlyAllow('post', 'delete');
		if ($this->{$this->namee}->delete($id)) {
			$this->Session->setFlash(__('The row has been deleted.'));
		} else {
			$this->Session->setFlash(__('The row could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}