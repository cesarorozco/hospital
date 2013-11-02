<?php
App::uses('AppController', 'Controller');
/**
 * Doctors Controller
 *
 * @property Doctor $Doctor
 * @property PaginatorComponent $Paginator
 */
class DoctorsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Doctor->recursive = 0;
		$this->set('doctors', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Doctor->exists($id)) {
			throw new NotFoundException(__('Invalid doctor'));
		}
		$options = array('conditions' => array('Doctor.' . $this->Doctor->primaryKey => $id));
		$this->set('doctor', $this->Doctor->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Doctor->create();
			if ($this->Doctor->save($this->request->data)) {
				$this->Session->setFlash(__('The doctor has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The doctor could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Doctor->exists($id)) {
			throw new NotFoundException(__('Invalid doctor'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Doctor->save($this->request->data)) {
				$this->Session->setFlash(__('The doctor has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The doctor could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Doctor.' . $this->Doctor->primaryKey => $id));
			$this->request->data = $this->Doctor->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Doctor->id = $id;
		if (!$this->Doctor->exists()) {
			throw new NotFoundException(__('Invalid doctor'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Doctor->delete()) {
			$this->Session->setFlash(__('The doctor has been deleted.'));
		} else {
			$this->Session->setFlash(__('The doctor could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
