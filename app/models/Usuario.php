<?php 
	class Usuario {
		private $db;

		public function __construct() {
			$this->db = new Database;
		}

		public function getProjects() {
			$this->db->query('SELECT * FROM projects');
			$projects = $this->db->getSet();
			return $projects;
		}

		public function getSprints($id) {
			$this->db->query('SELECT * FROM sprints WHERE project_id = :id');
			$this->db->bind(':id', $id);
			$projects = $this->db->getSet();
			return $projects;
		}

		public function getProjectById($id) {
			$this->db->query('SELECT * FROM projects WHERE id = :id');
			$this->db->bind(':id', $id);
			$project = $this->db->getSingle();
			return $project;
		}

		public function getStoriesBySprint($project,$sprint) {
			$this->db->query('SELECT * FROM stories WHERE project_id = :project AND sprint_num = :sprint');
			$this->db->bind(':project', $project);
			$this->db->bind(':sprint', $sprint);
			$stories = $this->db->getSet();
			return $stories;
		}

		public function getTasksBySprint($project,$sprint) {
			$this->db->query('SELECT * FROM tasks WHERE project_id = :project AND sprint_id = :sprint');
			$this->db->bind(':project', $project);
			$this->db->bind(':sprint', $sprint);
			$tasks = $this->db->getSet();
			return $tasks;
		
		}




	}
?>