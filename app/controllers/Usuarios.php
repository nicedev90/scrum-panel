<?php 
	class Usuarios extends Controller {
		public function __construct() {
			$this->usuario = $this->model('Usuario');
		}

		public function index() {
			if (userLoggedIn()) {

				$projects = $this->getProjects();

				$sprints = [];

				for ($i = 0; $i < count($projects); $i++) {
					$sprints[$projects[$i]->id] = $this->getSprints($projects[$i]->id);
				}


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


		public function panel($id = null, $sprint = null) {
			if (userLoggedIn()) {

				if (is_null($sprint)) {
					$project = $this->getProjectById($id);

					$sprints = $this->getSprints($id);

					$data = [
						'projects' => $project,
						'sprints' => $sprints
					];

					$this->view('usuario/panel',$data);

				} else {
					$project = $this->getProjectById($id)->name;

					$stories = $this->getStoriesBySprint($id,$sprint);

					$tasks = $this->getTasksBySprint($id,$sprint);

					$data = [
						'project' => $project,
						'sprint' => $sprint,
						'stories' => $stories,
						'tasks' => $tasks
					];

					$this->view('usuario/sprint',$data);

				}
			} else {
				$this->view('pages/login');
			}
		}

		public function getProjectById($id) {
			$project = $this->usuario->getProjectById($id);
			return $project;
		}

		public function getStoriesBySprint($project,$sprint) {
			$stories = $this->usuario->getStoriesBySprint($project,$sprint);
			return $stories;
		}

		public function getTasksBySprint($project,$sprint) {
			$tasks = $this->usuario->getTasksBySprint($project,$sprint);
			return $tasks;
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