<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct(){/* esta funcion sobre escribe el CI_Controller y toma PHP nativo*/

		parent::__construct();// Se hacer fererencia al "parent" que en este caso el CI_Controller
		$this->load->library('session');
		$this->load->library('encrypt');
		$this->load->model('users_model');
	}

	public function index()
	{
		$ci_session = $this->session->userdata('user_data');
		if (empty($ci_session)===FALSE){
			redirect(base_url('admin/logout'));
		}
		else
		{
			
			$data['all_userdata'] = $this->session->all_userdata();
			$this->load->view('header');
			$this->load->view('navbar');
			$this->load->view('registro_user_view',$data);
			$this->load->view('footer');
		}
	}


	function nuevo_usuario()
	{
		if(isset($_POST['grabar']) and $_POST['grabar'] == 'si')
		{
			//SI EXISTE EL CAMPO OCULTO LLAMADO GRABAR CREAMOS LAS VALIDACIONES
			$this->form_validation->set_rules('nom','Nombre','required|trim|xss_clean');
			$this->form_validation->set_rules('correo','Correo','required|valid_email|trim|xss_clean');
			//$this->form_validation->set_rules('nick','Usuario','required|trim|xss_clean');
			$this->form_validation->set_rules('pass','Password','required|trim|xss_clean|md5');
			
			//SI HAY ALGÚNA REGLA DE LAS ANTERIORES QUE NO SE CUMPLE MOSTRAMOS EL MENSAJE
			//EL COMODÍN %s SUSTITUYE LOS NOMBRES QUE LE HEMOS DADO ANTERIORMENTE, EJEMPLO, 
			//SI EL NOMBRE ESTÁ VACÍO NOS DIRÍA, EL NOMBRE ES REQUERIDO, EL COMODÍN %s 
			//SERÁ SUSTITUIDO POR EL NOMBRE DEL CAMPO
			$this->form_validation->set_message('required', 'El %s es requerido');
	        $this->form_validation->set_message('valid_email', 'El %s no es válido');
			
			//SI ALGO NO HA IDO BIEN NOS DEVOLVERÁ AL INDEX MOSTRANDO LOS ERRORES
			if($this->form_validation->run()==FALSE)
			{
				$this->index();
			}else{
			//EN CASO CONTRARIO PROCESAMOS LOS DATOS
				$nombre = $this->input->post('nom');
				$correo = $this->input->post('correo');
				$rol = $this->input->post('rol');
				$password = $this->input->post('pass');
                        //ENVÍAMOS LOS DATOS AL MODELO CON LA SIGUIENTE LÍNEA
				$insert = $this->users_model->new_user($nombre,$correo,$rol,$password);
				//si el modelo nos responde afirmando que todo ha ido bien, envíamos un correo
				//al usuario y lo redirigimos al index, en verdad deberíamos redirigirlo al home de
				//nuestra web para que puediera iniciar sesión
				$this->email->from('aqui el email que quieres que envíe los datos', 'uno-de-piera.com');
				$this->email->to($correo);
				//super importante, para poder envíar html en nuestros correos debemos ir a la carpeta 
				//system/libraries/Email.php y en la línea 42 modificar el valor, en vez de text debemos poner html
				$this->email->subject('Bienvenido/a a uno-de-piera.com');
				$this->email->message('<h2>' . $nombre . ' gracias por registrarte en uno-de-piera.com</h2><hr><br><br>
				Tu nombre de usuario es: ' . $rol . '.<br>Tu password es: ' . $password);
				$this->email->send();
			}
		}
	}



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */