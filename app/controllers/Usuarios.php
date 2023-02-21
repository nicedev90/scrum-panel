<?php 
	class Usuarios extends Controller {
		public function __construct() {
			$this->usuario = $this->model('Usuario');
		}

		public function index() {
			if (userLoggedIn()) {

				$projects = $this->getProjects();
				$id = $projects[0]->id;

				$sprints = $this->getSprints($id);

				$data = [
					'projects' => $projects,
					'sprints' => $sprints
				];
				$this->view('usuario/index',$data);
			} else {
				$this->view('pages/login');
			}
		}

		public function getProjects() {
			$projects = $this->usuario->getProjects();
			return $projects;
		}

		public function getSprints($id) {
			$projects = $this->usuario->getSprints($id);
			return $projects;
		}


		public function panel() {
			if (userLoggedIn()) {
				$this->view('usuario/panel');
			} else {
				$this->view('pages/login');
			}
		}

		public function calcular() {
			if (userLoggedIn()) {
				$this->view('usuario/calcular');
			} else {
				$this->view('pages/login');
			}
		}

	}
?>