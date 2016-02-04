<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Shop extends CI_Controller{

	function __construct(){/* esta funcion sobre escribe el CI_Controller y toma PHP nativo*/

		parent::__construct();// Se hacer fererencia al "parent" que en este caso el CI_Controller
		$this->load->library('session');
		$this->load->library('encrypt');
	}

	public function index()
	{
		$ci_session = $this->session->userdata('user_data');
		if (empty($ci_session)===FALSE){
			redirect(base_url('admin/logout'));
		}
		else
		{
			$this->load->model('products_model');
			$data['all_userdata'] = $this->session->all_userdata();
			$data['products'] = $this->products_model->get_all();
			$this->load->view('header');
			$this->load->view('navbar');
			$this->load->view('products',$data);
			$this->load->view('footer');
		}
	}

	function add()
	{
		$this->load->model('products_model');

		$product = $this->products_model->get($this->input->post('id'));

		$insert = array(
			'id' => $this->input->post('id'),
			'qty' => 1,
			'price' => $product->price,
			'name' => $product->name,
		);

		if ($product->option_name) {
			$insert['options'] = array(
				$product->option_name => $product->option_values[$this->input->post($product->option_name)]
			);
		}

		$this->cart->insert($insert);

		redirect('shop'); 
	}

	function remove($rowid)
	{
		$this->cart->update(array(
			'rowid' => $rowid,
			'qty' => 0
		));
		redirect('shop');
	}



}
