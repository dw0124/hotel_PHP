<?
    class Login_m extends CI_Model     // �� Ŭ���� ����
    {
        function getrow($uid,$pwd)
        {
			$sql="select * from user where uid='$uid' and pwd='$pwd'";
			return $this->db->query($sql)->row();				// ��������, ��� ����
        }
		
		function insertrow($row)
		{
			return $this->db->insert("user",$row);
		}
		

		

		
    }
?>
