<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cart_test extends CI_Controller {

	function __construct(){/* esta funcion sobre escribe el CI_Controller y toma PHP nativo*/

		parent::__construct();// Se hacer fererencia al "parent" que en este caso el CI_Controller
		$this->load->library('session');
		$this->load->library('encrypt');
	}

	function add()
	{
			$data = array(
               'id'      => 'sku_123ABC',
               'qty'     => 1,
               'price'   => 39.95,
               'name'    => 'T-Shirt',
               'options' => array('Size' => 'L', 'Color' => 'Red')
            );

			$this->cart->insert($data);
			echo "add() called";
	}

	function show()
	{

		$cart = $this->cart->contents();

		echo "<pre>";
		print_r($cart);
	}

	function add2()
	{
		$data = array(
               'id'      => 'sku_123DFG',
               'qty'     => 2,
               'price'   => 7.95,
               'name'    => 'Pants',
               'options' => array('Size' => 'M', 'Color' => 'Azul')
        );

		$this->cart->insert($data);
		echo "add2() called";
	}

	function update()
	{
		$data = array(
			'rowid' => '4f16ae6c6afe619532ede8790cf8daf6',
			'qty' => '1' 
		);
		$this->cart->update($data);
		echo "update() called";
	}

	function total()
	{

		echo $this->cart->total();
	}

	function remove()
	{

		$data = array(
			'rowid' => '4f16ae6c6afe619532ede8790cf8daf6',
			'qty' => '0' 
		);
		$this->cart->update($data);
		echo "remove() called";
	}

	function destroy()
	{
		$this->cart->destroy();
		echo "destroy() called";
	}
}