<?
	class Room extends CI_Controller {
        function __construct()                           // 클래스생성할 때 초기설정
        {
            parent::__construct();
            $this->load->database();                     // 데이터베이스 연결
            $this->load->model("room_m");		 // 모델 연결
			$this->load->helper(array("url", "date"));
			//$this->load->library('pagination');
        }

		public function index()                            // 제일 먼저 실행되는 함수
        {
            $this->lists();                                        // list 함수 호출
        }

		public function lists()
		{
			$uri_array=$this->uri->uri_to_assoc(3);
			$text1 = array_key_exists("text1",$uri_array) ? urldecode($uri_array["text1"]) : "" ;
			
			if ($text1=="") 
				$base_url = "/room/lists/page";                        // $page_segment = 4;
			else 
				$base_url = "/room/lists/text1/$text1/page";    // $page_segment = 6;
			$page_segment = substr_count( substr($base_url,0,strpos($base_url,"page")) , "/" )+1;
			$base_url = "/~team3" . $base_url;

			$config["per_page"]	= 12;                              // 페이지당 표시할 룸 수
			$config["total_rows"] = $this->room_m->rowcount($text1);  // 전체 레코드개수 구하기
			//$config["uri_segment"] = $page_segment;		 // 페이지가 있는 segment 위치
			$config["base_url"]	 = $base_url;                // 기본 URL
			//$this->pagination->initialize($config);           // pagination 설정 적용

			$data["page"]=$this->uri->segment($page_segment,0);  // 시작위치, 없으면 0.
			//$data["pagination"] = $this->pagination->create_links();  // 페이지소스 생성

			$start=$data["page"];                 // n페이지 : 시작위치
			$limit=$config["per_page"];        // 페이지 당 라인수

			$data["text1"]=$text1;
			$data["list"] = $this->room_m->getlist($text1,$start,$limit);
			$this->load->view("main_header");
			$this->load->view("room_list",$data);	// room_list에 자료전달		data라는 이름으로 text1, list 한번에 전달
			$this->load->view("main_footer");
		}
		
		public function view()
        {       
			$uri_array=$this->uri->uri_to_assoc(3);
			$no = array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
			$text1 = array_key_exists("text1",$uri_array) ? urldecode($uri_array["text1"]) : "" ;
			$page = array_key_exists("page",$uri_array) ? urldecode($uri_array["page"]) : "" ;
			
			$data["page"] = $page;
			$data["text1"]=$text1;
			$data["row"] = $this->room_m->getrow($no);

			$this->load->view("main_header");
			$this->load->view("room_view",$data);	// a_room_list에 자료전달		data라는 이름으로 text1, list 한번에 전달
			$this->load->view("main_footer");
        }
		
	}
?>