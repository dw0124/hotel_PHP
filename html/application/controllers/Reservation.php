<?
	class Reservation extends CI_Controller {
        function __construct()
        {
            parent::__construct();
            $this->load->database();
            $this->load->model("reservation_m");
			$this->load->helper(array("url", "date"));
			$this->load->library('pagination');
        }

		public function index()
        {
            $this->lists();
        }

		public function lists()
		{
			$uri_array=$this->uri->uri_to_assoc(3);
			$no	= array_key_exists("no",$uri_array) ? $uri_array["no"] : "" ;

			$base_url = "/reservation/lists/no/$no/listpage";
			$page_segment = substr_count( substr($base_url,0,strpos($base_url,"listpage")) , "/" )+1;
			$base_url = "/~team3" . $base_url;

			$config["per_page"]	 = 5;                              
			$config["total_rows"] = $this->reservation_m->rowcount($no);  
			$config["uri_segment"] = $page_segment;		 
			$config["base_url"]	 = $base_url;                
			$this->pagination->initialize($config);           

			$data["page"]=$this->uri->segment($page_segment,0);  
			$data["pagination"] = $this->pagination->create_links();  

			$start=$data["page"];                 
			$limit=$config["per_page"];        

			

			$data["row"] = $this->reservation_m->getrow($no);
			$data["list"] = $this->reservation_m->getlist($no,$start,$limit);

			$text1=array_key_exists("text1",$uri_array) ? "/text1/" . urldecode($uri_array["text1"]) : "";       // URI: /a_user/del/no/1
			$page = array_key_exists("page",$uri_array) ? "/page/" . urldecode($uri_array["page"]) : "" ;
			$this->load->library("form_validation");
			$this->form_validation->set_rules("card_cvc","card cvc","required|max_length[3]");
			$this->form_validation->set_rules("card_m","card m","required|max_length[2]");
			$this->form_validation->set_rules("card_y","card y","required|max_length[2]");
			$this->form_validation->set_rules("check_in","날짜","required");
			$this->form_validation->set_rules("check_out","날짜","required");

			if ( $this->form_validation->run()==FALSE )	
			{
				

				$data["check_in"] = $this->input->post("check_in",true);
				$data["check_out"] = $this->input->post("check_out",true);

				

				$this->load->view("main_header");
				$this->load->view("reservation", $data);    
				$this->load->view("main_footer");
			}
			else //화면에서 저장 버튼을 눌렀을 때            
			{
				$card_number1 = $this->input->post("card_number1",true);
				$card_number2 = $this->input->post("card_number2",true);
				$card_number3 = $this->input->post("card_number3",true);
				$card_number4 = $this->input->post("card_number4",true);
				$card_number = sprintf("%-4s%-4s%-4s%-4s", $card_number1, $card_number2, $card_number3, $card_number4);

				$card_m = $this->input->post("card_m",true);
				$card_y = $this->input->post("card_y",true);
				$card_ex = sprintf("%-2s%-2s", $card_m,$card_y);
				

				$data=array(

					"user_no"	=> $this->input->post("user_no",TRUE),
					"check_in"	=> $this->input->post("check_in",TRUE),
					"check_out"	=> $this->input->post("check_out",TRUE),
					"card_number"	=> $card_number,
					"card_ex"	=> $card_ex,
					"card_cvc"	=> $this->input->post("card_cvc",TRUE),
					"room_no"	=> $this->input->post("room_no",TRUE),
					"price"     => $this->input->post("price",TRUE),
					"total_price"     => $this->input->post("total_price",TRUE)
					);

				$this->reservation_m->insertrow($data);
				redirect("/~team3/main");
			}

			
		}
		

	}
?>
