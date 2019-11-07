<?php
/*
*
*/
class homeController extends Controller {
	public function index($id ='', $name='') {
		$this->view('home\index', [
			'name' => $name,
			'id' => $id
		]);
		$this->view->pageTitle = 'Page title';
		$this->view->render();
	}

	public function aboutUs() {
		$this->view('home\aboutUs');
		$this->view->pageTitle = 'Page title 2';
		$this->view->render();
	}
}