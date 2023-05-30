<?
    class A_user_m extends CI_Model     // 모델 클래스 선언
    {
        public function getlist($text1,$start,$limit)
		{
			if (!$text1)
				$sql="select * from user order by name limit $start,$limit";    // 전체 자료
			else
				$sql="select * from user where name like '%$text1%' order by name limit $start,$limit";
			return $this->db->query($sql)->result();
			
			$db_zip = $this->load->database("db_zip", true);
			
			if (!$text1)
				$sql="select * from zip1 order by no limit $start,$limit";    // 전체 자료
			else
				$sql="select * from  zip1 where juso4 like '%$text1%' order by no limit $start,$limit";
			return $this->$db_zip->query($sql)->result();
		}

		public function rowcount($text1) {
			if (!$text1)
				$sql="select * from user";
			else
				$sql="select * from user where name like '%$text1%' ";
			return $this->db->query($sql)->num_rows();
		}

		function getrow($no)  {
			$sql="select * from user where no=$no";
			return  $this->db->query($sql)->row();
		}

		function deleterow($no)  {
			$sql="delete from user where no=$no";
			return  $this->db->query($sql);
		}
		
		function insertrow($row)
		{
			return $this->db->insert("user",$row);
		}

		function updaterow( $row, $no )
		{
			$where=array( "no"=>$no );
			return $this->db->update( "user", $row, $where );
		}
    }
?>
