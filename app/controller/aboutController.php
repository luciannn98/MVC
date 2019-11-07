<?php
/*
*
*/
class aboutController extends Controller {
	public function index() {
		$this->model('about');
		$this->view('about', $this->model->getUsers());
		$this->view->pageTitle = '#Page about';
		$this->view->render();
		//print_r($this->model->getUsers());
	}

	public function user($id='') {
		$this->model('about');
		$this->view('view_user', [
			'id' => $id,
			'result' => $this->model->getUsers([(int)$id])
		]);
		$this->view->pageTitle = '#Page about';
		$this->view->render();
		//var_dump($this->model->getUsers([$name]));
	}
}