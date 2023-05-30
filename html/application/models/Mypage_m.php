<?
    class Mypage_m extends CI_Model     // 모델 클래스 선언
    {
		
        public function getlist($no)
		{

			

			
			$sql="select reservation.*, room.name as room_name
						from reservation left join room on reservation.room_no=room.no 
						where reservation.user_no=$no order by reservation.no";
			
			return $this->db->query($sql)->result();
		}



		public function getrow($no)  
		{
			$sql="select * from user where no=$no";
			return $this->db->query($sql)->row();
		}

		function updaterow($row, $no)
		{
			$where=array( "no"=>$no );
			return $this->db->update( "user", $row, $where );
		}


		
		public function rowcount($no) 
		{
			
			$sql="select * from reservation where user_no=$no";
			
			return $this->db->query($sql)->num_rows();
		}

		function deleterow($no) 
		{
			$sql="delete from reservation where no=$no";
			return  $this->db->query($sql);
		}
    }
?>
