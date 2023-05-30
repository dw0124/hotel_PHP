<?
    class Login_m extends CI_Model     // 모델 클래스 선언
    {
        function getrow($uid,$pwd)
        {
			$sql="select * from user where uid='$uid' and pwd='$pwd'";
			return $this->db->query($sql)->row();				// 쿼리실행, 결과 리턴
        }
		
		function insertrow($row)
		{
			return $this->db->insert("user",$row);
		}
		

		

		
    }
?>
