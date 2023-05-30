<?
	class A_chart extends CI_Controller {
		function __construct()                           // 클래스생성할 때 초기설정
        {
            parent::__construct();
            $this->load->database();                     // 데이터베이스 연결
            $this->load->model("A_chart_m");		// 모델 A_user_m 연결
			$this->load->helper(array("url", "date"));    
			$this->load->library("pagination");
        }
		public function index()
		{
			$this->lists();
		}
		 public function lists()
        {
			$uri_array=$this->uri->uri_to_assoc(3);
			//$no	= array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;
			$text1 = array_key_exists("text1",$uri_array) ? urldecode($uri_array["text1"]) : date("Y") ;   // URI: /a_user/lists/text1/값
			$page = array_key_exists("page",$uri_array) ? urldecode($uri_array["page"]) : "" ;

			$base_url = "/a_chart/lists/text1/$text1/page";    // $page_segment = 6;
			$page_segment = substr_count( substr($base_url,0,strpos($base_url,"page")) , "/" )+1;
			$base_url = "/~team3".$base_url;

			$config["per_page"] = 5;                              // 페이지당 표시할 line 수
			$config["total_rows"] = $this->A_chart_m->rowcount($text1);  // 전체 레코드개수 구하기
			$config["uri_segment"] = $page_segment;		 // 페이지가 있는 segment 위치
			$config["base_url"]	 =$base_url;                // 기본 URL
			$this->pagination->initialize($config);           // pagination 설정 적용

			$data["page"]=$this->uri->segment($page_segment,0);  // 시작위치, 없으면 0.
			$data["pagination"] = $this->pagination->create_links();  // 페이지소스 생성

			$start=$data["page"];                 // n페이지 : 시작위치
			$limit=$config["per_page"];        // 페이지 당 라인수
			$data["list"]=$this->A_chart_m->getlist($text1,$start,$limit);   // 해당페이지 자료읽기

			$data["text1"]=$text1;                                      // text1 값 전달을 위한 처리
			//$data["list"]=$this->A_user_m->getlist($text1);

            //$data["list"] = $this->A_user_m->getlist();    // 자료읽어 data배열에 저장 
            $this->load->view("a_main_header");// 상단출력(메뉴)
			$this->load->view("a_chart_main",$data);
            //$this->load->view("a_chart_table",$data);           // a_user_list에 자료전달
            $this->load->view("a_main_footer");                      // 하단 출력 
        }
	}
?>