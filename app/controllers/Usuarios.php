<?php 
	class Usuarios extends Controller {
		public function __construct() {
			$this->usuario = $this->model('Usuario');
		}

		public function index() {
			if (userLoggedIn()) {
				$this->view('usuario/index');
			} else {
				$this->view('pages/login');
			}
		}

		public function panel() {
			if (userLoggedIn()) {
				$this->view('usuario/panel');
			} else {
				$this->view('pages/login');
			}
		}

	}
?>