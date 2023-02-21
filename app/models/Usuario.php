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
			$this->db->query('SELECT * FROM sprints WHERE id = :id');
			$this->db->bind(':id', $id);
			$projects = $this->db->getSet();
			return $projects;
		}


	}
?>