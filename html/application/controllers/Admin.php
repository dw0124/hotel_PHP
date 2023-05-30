<?
	class Admin extends CI_Controller {
		public function index()
		{
			$this->load->view("a_main_header");
			$this->load->view("admin");
			$this->load->view("a_main_footer");
		}
	}
?>