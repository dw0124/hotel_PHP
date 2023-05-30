<?
    class A_user extends CI_Controller {       // A_user클래스 선언
        function __construct()                           // 클래스생성할 때 초기설정
        {
            parent::__construct();
            $this->load->database();                     // 데이터베이스 연결
            $this->load->model("A_user_m");		// 모델 A_user_m 연결
			$this->load->helper(array("url", "date"));    
			$this->load->library("pagination");
        }
        public function index()                            // 제일 먼저 실행되는 함수
        {
            $this->lists();                                        // list 함수 호출
        }
        public function lists()
        {
			$uri_array=$this->uri->uri_to_assoc(3);
			//$no	= array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
			$text1 = array_key_exists("text1",$uri_array) ? urldecode($uri_array["text1"]) : "" ;   // URI: /a_user/lists/text1/값
			$page = array_key_exists("page",$uri_array) ? urldecode($uri_array["page"]) : "" ;

			if ($text1=="") 
				$base_url = "/a_user/lists/page";                        // $page_segment = 4;
			else 
				$base_url = "/a_user/lists/text1/$text1/page";    // $page_segment = 6;
			$page_segment = substr_count( substr($base_url,0,strpos($base_url,"page")) , "/" )+1;
			$base_url = "/~team3".$base_url;

			$config["per_page"] = 5;                              // 페이지당 표시할 line 수
			$config["total_rows"] = $this->A_user_m->rowcount($text1);  // 전체 레코드개수 구하기
			$config["uri_segment"] = $page_segment;		 // 페이지가 있는 segment 위치
			$config["base_url"]	 =$base_url;                // 기본 URL
			$this->pagination->initialize($config);           // pagination 설정 적용

			$data["page"]=$this->uri->segment($page_segment,0);  // 시작위치, 없으면 0.
			$data["pagination"] = $this->pagination->create_links();  // 페이지소스 생성

			$start=$data["page"];                 // n페이지 : 시작위치
			$limit=$config["per_page"];        // 페이지 당 라인수
			$data["list"]=$this->A_user_m->getlist($text1,$start,$limit);   // 해당페이지 자료읽기


			$data["text1"]=$text1;                                      // text1 값 전달을 위한 처리
			//$data["list"]=$this->A_user_m->getlist($text1);

            //$data["list"] = $this->A_user_m->getlist();    // 자료읽어 data배열에 저장 
            $this->load->view("a_main_header");                    // 상단출력(메뉴)
            $this->load->view("a_user_list",$data);           // a_user_list에 자료전달
            $this->load->view("a_main_footer");                      // 하단 출력 
        }
		public function view()
        {
			$uri_array=$this->uri->uri_to_assoc(3);
			$no	= array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
		    $text1 = array_key_exists("text1",$uri_array) ? urldecode($uri_array["text1"]) : "" ;
			$page = array_key_exists("page",$uri_array) ? urldecode($uri_array["page"]) : "" ;

			$data["row"] = $this->A_user_m->getrow($no);
			$data["text1"]=$text1; 
			$data["page"] = $page;

			$this->load->view("a_main_header");
            $this->load->view("a_user_view",$data);
            $this->load->view("a_main_footer");
		}
		public function view1()
        {
			$uri_array=$this->uri->uri_to_assoc(3);
			$no	= array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
		    $text1 = array_key_exists("text1",$uri_array) ? urldecode($uri_array["text1"]) : "" ;
			$page = array_key_exists("page",$uri_array) ? urldecode($uri_array["page"]) : "" ;

			$data["row"] = $this->A_user_m->getrow($no);
			$data["text1"]=$text1; 
			$data["page"] = $page;
			
			$this->load->view("a_main_header");
            $this->load->view("a_user_view1",$data);
            $this->load->view("a_main_footer");
		}
		public function del()
		{
			$uri_array=$this->uri->uri_to_assoc(3);
			$no    =array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
			$text1=array_key_exists("text1",$uri_array) ? "/text1/" . urldecode($uri_array["text1"]) : "";       // URI: /a_user/del/no/1
			$page = array_key_exists("page",$uri_array) ? "/page/" . urldecode($uri_array["page"]) : "" ;

			$this->A_user_m->deleterow($no);
			redirect("/~team3/a_user/lists". $text1. $page);             // 목록화면으로 돌아가기
		}

		public function add()
		{
			$uri_array=$this->uri->uri_to_assoc(3);
			//$no	= array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
		    $text1=array_key_exists("text1",$uri_array) ? "/text1/" . urldecode($uri_array["text1"]) : "";       // URI: /a_user/del/no/1
			$page = array_key_exists("page",$uri_array) ? "/page/" . urldecode($uri_array["page"]) : "" ;

			$this->load->library("form_validation");
			$this->form_validation->set_rules("name","이름","required|max_length[20]");
			$this->form_validation->set_rules("uid","아이디","required|max_length[20]");
			$this->form_validation->set_rules("pwd","암호","required|max_length[20]");
			$this->form_validation->set_rules("email","이메일","required|max_length[30]","required|'@'");

			if ($this->form_validation->run()==FALSE ) // 목록화면의 추가버튼 클릭한 경우
			{
				$this->load->view("a_main_header");
				$this->load->view("a_user_add");    // 입력화면 표시
				$this->load->view("a_main_footer");
			}

			else              // 입력화면의 저장버튼 클릭한 경우
			{
				$phone1 = $this->input->post("phone1",true);
				$phone2 = $this->input->post("phone2",true);
				$phone3 = $this->input->post("phone3",true);
				$phone = sprintf("%-3s%-4s%-4s", $phone1, $phone2, $phone3);

				$birth1 = $this->input->post("birth1",true);
				$birth2 = $this->input->post("birth2",true);
				$birth3 = $this->input->post("birth3",true);
				$birth = sprintf("%04d-%02d-%02d", $birth1, $birth2, $birth3);

				$address1=$this->input->post("address1",true);
				$address2=$this->input->post("address2",true);
				$address = $address1." ".$address2;

				$data=array( 
					"name"	=> $this->input->post("name",true),
					"uid"	=> $this->input->post("uid",true),
					"pwd"	=> $this->input->post("pwd",true),
					"birth"	=> $birth,
					"email"	=> $this->input->post("email",true),
					"phone"	=> $phone,
					"zipcode"	=> $this->input->post("zipcode",true),
					"address"	=> $address,
					"gubun"	=> $this->input->post("gubun",true)
					);
				//exit("OK");
				$result = $this->A_user_m->insertrow($data); 

				redirect("/~team3/A_user/lists". $text1. $page);    //   목록화면으로 이동.
			}
		}

		public function edit()
		{
			$uri_array=$this->uri->uri_to_assoc(3);
			$no    =array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
			$text1=array_key_exists("text1",$uri_array) ? "/text1/" . urldecode($uri_array["text1"]) : "";
			$page = array_key_exists("page",$uri_array) ? "/page/" . urldecode($uri_array["page"]) : "" ;


			$this->load->library("form_validation");
			$this->form_validation->set_rules("name","이름","required|max_length[20]");
			$this->form_validation->set_rules("uid","아이디","required|max_length[20]");
			$this->form_validation->set_rules("pwd","암호","required|max_length[20]");

			if ( $this->form_validation->run()==FALSE )     // 수정버튼 클릭한 경우
			{
				$this->load->view("a_main_header");
				$data["row"]=$this->A_user_m->getrow($no);
				$this->load->view("a_user_edit",$data);
				$this->load->view("a_main_footer");
			}
			else                                                                   // 저장버튼 클릭한 경우
			{
				$phone1 = $this->input->post("phone1",true);
				$phone2 = $this->input->post("phone2",true);
				$phone3 = $this->input->post("phone3",true);
				$phone = sprintf("%-3s%-4s%-4s", $phone1, $phone2, $phone3);

				$birth1 = $this->input->post("birth1",true);
				$birth2 = $this->input->post("birth2",true);
				$birth3 = $this->input->post("birth3",true);
				$birth = sprintf("%04d-%02d-%02d", $birth1, $birth2, $birth3);

				$address1=$this->input->post("address1",true);
				$address2=$this->input->post("address2",true);
				$address = $address1." ".$address2;

				$data=array( 
					"name"	=> $this->input->post("name",true),
					"uid"	=> $this->input->post("uid",true),
					"pwd"	=> $this->input->post("pwd",true),
					"birth"	=> $birth,
					"email"	=> $this->input->post("email",true),
					"phone"	=> $phone,
					"zipcode"	=> $this->input->post("zipcode",true),
					"address"	=> $address,
					"gubun"	=> $this->input->post("gubun",true)
					);
				$result = $this->A_user_m->updaterow($data,$no);
				redirect("/~team3/a_user/lists". $text1. $page);
			}
		}
    }
?>