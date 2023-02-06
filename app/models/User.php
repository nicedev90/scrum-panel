<?php 
	class User {
		private $db;

		public function __construct() {
			$this->db = new Database;
		}

		public function login($user, $password) {
			$this->db->query('SELECT * FROM usuarios WHERE usuario = :user');
			$this->db->bind(':user', $user);

			$userData = $this->db->getSingle();
			$userPass = $userData->password;

			if ($password == $userPass) {
				return $userData;
			} else {
				return false;
			}
		}

		public function findUser($user) {
			$this->db->query('SELECT * FROM usuarios WHERE usuario = :user');
			$this->db->bind(':user', $user);
			$this->db->getSingle();

			if ($this->db->rows() > 0) {
				return true;
			} else {
				return false;
			}
		}
	}
?>