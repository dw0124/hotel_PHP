<?
	class About extends CI_Controller {               // Ŭ�����̸� ù ���ڴ� �빮��
		public function index()                              // ���� ���� ����Ǵ� �Լ�
		{
			$this->load->view("main_header");   // view������ main_header.php ��
			$this->load->view("about");
			$this->load->view("main_footer");     //                   main_footer.php ȣ��
		}
	}
?>