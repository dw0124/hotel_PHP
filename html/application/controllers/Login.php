<?
    class Login extends CI_Controller {       // loginŬ���� ����
        function __construct()                           // Ŭ���������� �� �ʱ⼳��
        {
            parent::__construct();
            $this->load->database();                     // �����ͺ��̽� ����
            $this->load->model("login_m");    // �� login_m ����
			$this->load->helper(array("url", "date"));

			//date_default_timezone_set("Asia/Seoul");

        }

        public function index()                            // ���� ���� ����Ǵ� �Լ�
        {
			$this->login();
        }

		public function add()
		{
			$uri_array=$this->uri->uri_to_assoc(3);
			


			$this->load->library("form_validation");
			$this->form_validation->set_rules("name","name","required|max_length[20]");
			$this->form_validation->set_rules("uid","id","required|max_length[20]");
			$this->form_validation->set_rules("pwd","password","required|max_length[20]");
			$this->form_validation->set_rules("email","email","required|max_length[30]");
			$this->form_validation->set_rules("phone","phone","required|max_length[11]");
			$this->form_validation->set_rules("address1","address","required|max_length[100]");
			$this->form_validation->set_rules("address2","address","required|max_length[50]");

			if ( $this->form_validation->run()==FALSE )	// ���ȭ���� �߰���ư Ŭ���� ���
			{
				$this->load->view("main_header");
				$this->load->view("login_add");    // �Է�ȭ�� ǥ��
				$this->load->view("main_footer");
			}
			else              // �Է�ȭ���� �����ư Ŭ���� ���
			{
				$address1=$this->input->post("address1",TRUE);
				$address2=$this->input->post("address2",TRUE);

				$address = $address1." ".$address2;


				$data=array(
					"name"	=> $this->input->post("name",TRUE),
					"uid"	=> $this->input->post("uid",TRUE),
					"pwd"	=> $this->input->post("pwd",TRUE),
					"birth"	=> $this->input->post("birth",TRUE),
					"email"	=> $this->input->post("email",TRUE),
					"phone"	=> $this->input->post("phone",TRUE),
					"zipcode"	=> $this->input->post("zipcode",TRUE),
					"address"	=> $address,
					"gubun"	=> 0
					);
				$this->login_m->insertrow($data); 

				redirect("/~team3/login/");
			}
		}

/*
		public function check()
        {
			

			$uid=$this->input->post("uid",TRUE);
			$pwd=$this->input->post("pwd",TRUE);

			$row=$this->login_m->getrow($uid,$pwd);
			if ($row)
			{
				$data=array(
					"no"	=>$row->no,
					"uid"	=>$row->uid
				);
				$this->session->set_userdata($data);

				redirect("/~team3/main/");
			}

			else
			{
				redirect("/~team3/login/");
			}
			
        }	*/

		public function login()                            // ���� ���� ����Ǵ� �Լ�
        {
			$this->load->library("form_validation");
			$this->form_validation->set_rules("uid","id","required|max_length[20]");
			$this->form_validation->set_rules("pwd","password","required|max_length[20]");

			if ( $this->form_validation->run()==FALSE )	// ���ȭ���� �߰���ư Ŭ���� ���
			{
				$this->load->view("main_header");
				$this->load->view("login");    // �Է�ȭ�� ǥ��
				$this->load->view("main_footer");
			}
			else              // �Է�ȭ���� �����ư Ŭ���� ���
			{

				$uid=$this->input->post("uid",TRUE);
				$pwd=$this->input->post("pwd",TRUE);

				$row=$this->login_m->getrow($uid,$pwd);
				if ($row)
				{
					$data=array(
						"no"	=>$row->no,
						"uid"	=>$row->uid
					);
					$this->session->set_userdata($data);

					redirect("/~team3/main/");
				}

				else
				{
					redirect("/~team3/login/");
				}
			}
        }

		public function logout()
        {
			$data=array("no","uid");
			$this->session->unset_userdata($data);

			redirect("/~team3/main/");
        }

    }
?>
