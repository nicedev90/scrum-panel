<?php 
	class Users extends Controller {
		public function __construct() {
			$this->model = $this->model('User');
		}

		public function index() {
			if (userLoggedIn()) {
				$this->view('usuario/index');
			} else {
				$this->view('pages/login');
			}
		}

		public function login() {
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

				$user = $_POST['user'];
				$pass = $_POST['password'];

				$userRegister = $this->model->findUser($user);

				if ($userRegister) {
					$logged = $this->model->login($user,$pass);

					if ($logged) {
						$this->createSession($logged);
					} else {
						$_SESSION['msg'] = 'Contaseña incorrecta';
						redirect('users/login');
					}
				} else {
					$_SESSION['msg'] = 'User no registrado';
					redirect('users/login');
				}

				
			} else {
				$this->view('pages/login');
			}
		}

		public function createSession($user) {
			$_SESSION['user_rol'] = $user->rol;
			$_SESSION['user_usuario'] = $user->usuario;
			$_SESSION['user_nombre'] = $user->nombre;
			redirect('usuarios/index');
		}

		public function logout() {
			unset($_SESSION['user_rol']);
			unset($_SESSION['user_usuario']);
			unset($_SESSION['user_nombre']);

			session_destroy();
			redirect('users/login');
		}
	}
?>