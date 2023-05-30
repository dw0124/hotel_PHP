<?
    class A_reservation_m extends CI_Model     // 모델 클래스 선언
    {
		public function getlist($text1,$start,$limit)
		{
			if (!$text1)
				$sql="select reservation.*, room.name as room_name , user.name as user_name 
                from reservation left join room on reservation.room_no=room.no left join user on reservation.user_no=user.no 
                order by reservation.no limit $start,$limit";    // 전체 자료
			else
				$sql="select reservation.*, room.name as room_name , user.name as user_name
			from reservation left join room on reservation.room_no=room.no left join user on reservation.user_no=user.no 
			where user.name like '%$text1%' or room.name like '%$text1%' order by reservation.no limit $start,$limit";
			return $this->db->query($sql)->result();
		}
		public function getrow($no)
		{
			$sql="select reservation.*, room.name as room_name , user.name as user_name 
                from reservation left join room on reservation.room_no=room.no left join user on reservation.user_no=user.no
				where reservation.no=$no";
			return $this->db->query($sql)->row();
		}

		public function delrow($no)
		{
			$sql="delete from reservation where no=$no";
			return $this->db->query($sql);
		}
		public function insertrow($row)
		{
			$sql="insert into reservation(user_no) value()";
			return $this->db->insert("reservation",$row);
		}
		public function updaterow($row,$no)
		{
			$where = array("no"=>$no);
			return $this->db->update("reservation",$row,$where);
		}
		public function rowcount($text1)
		{
			if (!$text1)
				$sql="select * from reservation";
			else
				$sql="select * from reservation left join user on reservation.user_no=user.no where user.name like '%$text1%' ";
			return $this->db->query($sql)->num_rows();
		}
    }
?>