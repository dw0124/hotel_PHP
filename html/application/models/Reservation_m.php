<?
    class Reservation_m extends CI_Model     // ���� Ŭ���� ����
    {
		public function getlist($text1,$start,$limit)
		{
/*			if(!$text1)
				$sql="select * from room order by name limit $start , $limit";
			else
				$sql="select * from room where name like '%$text1%' order by name limit $start , $limit";
			return $this->db->query($sql)->result();
*/

		  if(!$text1)
			$sql="select * from room order by name limit $start , $limit";
		  else
			$sql="select * from room where name like '%$text1%' order by name limit $start, $limit";
		  return $this->db->query($sql)->result();

			// if(!$text1)
			// 	$sql="select reservation.*, room.name as room_name, user.name as user_name
			// 		from reservation left join room on reservation.room_no=room.no left join user on reservation.user_no=user.no
			// 		order by reservation.no limit $start , $limit";
			// else
			// 	$sql="select reservation.*, room.name as room_name , user.name as user_name
			// 		from reservation left join room on reservation.room_no=room.no left join user on reservation.user_no=user.no
			// 		where user.name like '%$text1%' or room.name like '%$text1%'
			// 		order by reservation.no limit $start,$limit";

			return $this->db->query($sql)->result();
		}

		public function getrow($no)
		{
			  $sql="select * from room where no='$no'";

			// $sql="select reservation.*, room.name as room_name, user.name as user_name
			// 	from reservation left join room on reservation.room_no=room.no left join user on reservation.user_no=user.no
			// 	where reservation.no='$no'";

			return $this->db->query($sql)->row();
		}

		function getlist_room()
		{
			$sql="select * from room";
			return $this->db->query($sql)->result();
		}

		public function insertrow($row)
		{
			return $this->db->insert("reservation",$row);
		}

		public function rowcount($text1)
		{
			if (!$text1)
				$sql="select * from reservation";
			else
				$sql="select * from reservation where room.name like '%$text1%' ";
			return $this->db->query($sql)->num_rows();
		}
    }
?>
