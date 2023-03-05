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

		public function creator() {
			if (userLoggedIn()) {


				// $data = [
				// 	'projects' => $projects,
				// 	'sprints' => $sprints
				// ];

				$this->view('usuario/creator');

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
			if (isset($_POST['backlog'])) {
				// $id_story = $_POST['id_story'];
				$id_task = $_POST['id_task'];

				$status = "Backlog";

				$this->usuario->setTaskStatus($id_task,$status);

				$project = $this->getProjectById($id)->name;

				$stories = $this->getStoriesBySprint($id,$sprint);

				$tasks = $this->usuario->getTasks($id,$sprint);

				$data = [
					'project' => $project,
					'sprint' => $sprint,
					'stories' => $stories,
					'tasks' => $tasks
				];

				$this->view('usuario/sprint',$data);
			}

			if (isset($_POST['progress'])) {
				// $id_story = $_POST['id_story'];
				$id_task = $_POST['id_task'];

				$status = "In Progress";

				$this->usuario->setTaskStatus($id_task,$status);
				$this->usuario->setStartTime($id_task);

				$project = $this->getProjectById($id)->name;

				$stories = $this->getStoriesBySprint($id,$sprint);

				$tasks = $this->usuario->getTasks($id,$sprint);

				$data = [
					'project' => $project,
					'sprint' => $sprint,
					'stories' => $stories,
					'tasks' => $tasks
				];

				$this->view('usuario/sprint',$data);
				
			}

			if (isset($_POST['done'])) {
				// $id_story = $_POST['id_story'];
				$id_task = $_POST['id_task'];

				$status = "Done";

				$this->usuario->setTaskStatus($id_task,$status);
				$this->usuario->setFinishTime($id_task);
				$this->usuario->setTotalHours($id_task);

				$project = $this->getProjectById($id)->name;

				$stories = $this->getStoriesBySprint($id,$sprint);

				$tasks = $this->usuario->getTasks($id,$sprint);

				$data = [
					'project' => $project,
					'sprint' => $sprint,
					'stories' => $stories,
					'tasks' => $tasks
				];

				$this->view('usuario/sprint',$data);
				
			}

			if (!empty($_POST['title']) && isset($_POST['add_story'])) {
				$project_id = $id;
				$sprint_num = $sprint;
				$story_num = $_POST['story_num'];
				$title = $_POST['title'];
				$details = $_POST['details'];
				
				$status = "In Progress";

				$this->usuario->addStory($project_id,$sprint_num,$story_num,$title,$details,$status);

				$project = $this->getProjectById($id)->name;

				$stories = $this->getStoriesBySprint($id,$sprint);
				$newStory = end($stories)->story_num + 1;

				$tasks = $this->usuario->getTasks($id,$sprint);

				$data = [
						'project' => $project,
						'sprint' => $sprint,
						'stories' => $stories,
						'newStory' => $newStory,
						'tasks' => $tasks
					];

				unset($title);


				$this->view('usuario/sprint',$data);
			}

			if (!empty($_POST['details']) && isset($_POST['add_task'])) {
				$project_id = $id;
				$sprint_num = $sprint;
				$story_num = $_POST['story_num'];
				$estimate = $_POST['estimate'];
				$importance = $_POST['importance'];
				$details = $_POST['details'];
				
				$status = "Backlog";

				$this->usuario->addTask($project_id,$sprint_num,$story_num,$estimate,$importance,$details,$status);
				$project = $this->getProjectById($id)->name;

				$stories = $this->getStoriesBySprint($id,$sprint);
				$newStory = end($stories)->story_num + 1;

				$tasks = $this->usuario->getTasks($id,$sprint);

				$data = [
						'project' => $project,
						'sprint' => $sprint,
						'stories' => $stories,
						'newStory' => $newStory,
						'tasks' => $tasks
					];

				unset($details);
				$this->view('usuario/sprint',$data);
			}

			if (!empty($_POST['details']) && isset($_POST['edit_task'])) {

				$id_task = $_POST['id_task'];
				$story_num = $_POST['story_num'];
				$estimate = $_POST['estimate'];
				$importance = $_POST['importance'];
				$details = $_POST['details'];

				$this->usuario->editTask($id_task,$story_num,$estimate,$importance,$details);
				$project = $this->getProjectById($id)->name;

				$stories = $this->getStoriesBySprint($id,$sprint);
				$newStory = end($stories)->story_num + 1;

				$tasks = $this->usuario->getTasks($id,$sprint);

				$data = [
						'project' => $project,
						'sprint' => $sprint,
						'stories' => $stories,
						'newStory' => $newStory,
						'tasks' => $tasks
					];

				unset($details);
				$this->view('usuario/sprint',$data);
			}

			if (isset($_POST['delete_task'])) {

				$id_task = $_POST['id_task'];

				$this->usuario->deleteTask($id_task);

				$project = $this->getProjectById($id)->name;

				$stories = $this->getStoriesBySprint($id,$sprint);
				$newStory = end($stories)->story_num + 1;

				$tasks = $this->usuario->getTasks($id,$sprint);

				$data = [
						'project' => $project,
						'sprint' => $sprint,
						'stories' => $stories,
						'newStory' => $newStory,
						'tasks' => $tasks
					];

				$this->view('usuario/sprint',$data);
			}


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
					$newStory = end($stories)->story_num + 1;
					

					$tasks = $this->usuario->getTasks($id,$sprint);
					// echo "<pre>";
					// print_r($newStory);
					// die('detenido');

					// $tasks = [];

					// for ($i = 0; $i < count($stories); $i++) {
					// 	$tasks[$stories[$i]->story_num] = $this->getTasks($id,$sprint);;
					// }

					$data = [
						'project' => $project,
						'sprint' => $sprint,
						'stories' => $stories,
						'newStory' => $newStory,
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

		public function getTasks($project,$sprint) {
			$tasks = $this->usuario->getTasks($project,$sprint);
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