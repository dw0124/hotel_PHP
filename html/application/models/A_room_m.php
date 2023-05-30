<?
    class A_room_m extends CI_Model     // 모델 클래스 선언
    {
		public function getlist($text1,$start,$limit)
		{
			if(!$text1)
				$sql="select * from room order by name limit $start , $limit";
			else
				$sql="select * from room where name like '%$text1%' order by name limit $start , $limit";
			return $this->db->query($sql)->result();
		}
		public function getrow($no)
		{
			$sql="select * from room where no=$no";
			return $this->db->query($sql)->row();
		}

		public function delrow($no)
		{
			$sql="delete from room where no=$no";
			return $this->db->query($sql);
		}
		public function insertrow($row)
		{
			return $this->db->insert("room",$row);
		}
		public function updaterow($row,$no)
		{
			$where = array("no"=>$no);
			return $this->db->update("room",$row,$where);
		}
		public function rowcount($text1)
		{
			if (!$text1)
				$sql="select * from room";
			else
				$sql="select * from room where name like '%$text1%' ";
			return $this->db->query($sql)->num_rows();
		}
		function getlist_room()
		{
			$sql="select * from room order by name";
			return $this->db->query($sql)->result();
		}
    }
?>