<?
    class Findaddress_m extends CI_Model
    {
        public function getlist($text1,$start,$limit)
        {
			$db_zip = $this->load->database("db_zip", true);

			if (!$text1)
				$sql="select * from zip1 order by no limit $start,$limit";
			else
				$sql="select * from zip1 where juso4 like '%$text1%' order by no limit $start,$limit";

			return $db_zip->query($sql)->result();	
        }

		

		public function rowcount($text1)
        {
			$db_zip = $this->load->database("db_zip", true);
			if (!$text1)
				$sql="select * from zip1";
			else
				$sql="select * from zip1 where juso4 like '%$text1%' ";

			return $db_zip->query($sql)->num_rows();
        }

		function getrow($no) 
		{
			$sql="select product.*, gubun.name43 as gubun_name 
					from product left join gubun on product.gubun_no43=gubun.no43 
					where product.no43=$no";

			return  $this->db->query($sql)->row();
		}
			
	}
?>