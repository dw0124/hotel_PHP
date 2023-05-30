<?
	class Mypage extends CI_Controller {
        function __construct()                           // Ŭ���������� �� �ʱ⼳��
        {
            parent::__construct();
            $this->load->database();                     // �����ͺ��̽� ����
            $this->load->model("mypage_m");		 // �� ����
			$this->load->helper(array("url", "date"));
			$this->load->library('pagination');
        }

		public function index()                            // ���� ���� ����Ǵ� �Լ�
        {
            $this->view();                                        // list �Լ� ȣ��
        }

		
		
		public function view()
        {       
			$uri_array=$this->uri->uri_to_assoc(3);
			$no	= array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;

			$data["row"] = $this->mypage_m->getrow($no);
			$data["list"] = $this->mypage_m->getlist($no);

			$this->load->view("main_header");
            $this->load->view("mypage_view",$data);
            $this->load->view("main_footer");
        }

		public function edit()
		{
			$uri_array=$this->uri->uri_to_assoc(3);
			$no	= array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
			$page = array_key_exists("page",$uri_array) ? "/page/" . urldecode($uri_array["page"]) : "" ;


			$this->load->library("form_validation");
			$this->form_validation->set_rules("name","�̸�","required|max_length[20]");
			$this->form_validation->set_rules("uid","���̵�","required|max_length[20]");
			$this->form_validation->set_rules("pwd","��ȣ","required|max_length[20]");
			

			$address1 = $this->input->post("address1",TRUE);
			$address2 = $this->input->post("address2",TRUE);
			$address = $address1." ".$address2;
				
			$data=array(
				"name"	=> $this->input->post("name",TRUE),
				"uid"		=> $this->input->post("uid",TRUE),
				"pwd"		=> $this->input->post("pwd",TRUE),
				"birth"		=> $this->input->post("birth",TRUE),
				"email"		=> $this->input->post("email",TRUE),
				"phone"		=> $this->input->post("phone",TRUE),
				"zipcode"		=> $this->input->post("zipcode",TRUE),
				"address"		=> $address
				);
			$result = $this->mypage_m->updaterow($data,$no); 

			redirect("/~team3/mypage/view/no/" . $no . $text1 . $page);    //   ���ȭ������ �̵�.
			
		}


		public function del()
        {
			$uri_array=$this->uri->uri_to_assoc(3);
			$resvno	= array_key_exists("resvno",$uri_array) ? $uri_array["resvno"] : "" ;
			$no	= array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;


			$this->mypage_m->deleterow($resvno);

			redirect("/~team3/mypage/view/no/". $no);
		}
		
	}
?>