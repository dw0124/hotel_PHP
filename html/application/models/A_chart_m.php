<?
    class A_chart_m extends CI_Model     // 모델 클래스 선언
    {
        public function getlist($text1, $start, $limit)
		{
        $sql="select room.name as room_name,
                sum(if(month(reservation.check_in)=1 , if( reservation.state !=1 , reservation.total_price , false ) , 0)) as s1,
                sum(if(month(reservation.check_in)=2 , if( reservation.state !=1 , reservation.total_price , false ) , 0)) as s2,
                sum(if(month(reservation.check_in)=3 , if( reservation.state !=1 , reservation.total_price , false ) , 0)) as s3,
                sum(if(month(reservation.check_in)=4 , if( reservation.state !=1 , reservation.total_price , false ) , 0)) as s4,
                sum(if(month(reservation.check_in)=5 , if( reservation.state !=1 , reservation.total_price , false ) , 0)) as s5,
                sum(if(month(reservation.check_in)=6 , if( reservation.state !=1 , reservation.total_price , false ) , 0)) as s6,
                sum(if(month(reservation.check_in)=7 , if( reservation.state !=1 , reservation.total_price , false ) , 0)) as s7,
                sum(if(month(reservation.check_in)=8 , if( reservation.state !=1 , reservation.total_price , false ) , 0)) as s8,
                sum(if(month(reservation.check_in)=9 , if( reservation.state !=1 , reservation.total_price , false ) , 0)) as s9,
                sum(if(month(reservation.check_in)=10 , if( reservation.state !=1 , reservation.total_price , false ) , 0)) as s10,
                sum(if(month(reservation.check_in)=11 , if( reservation.state !=1 , reservation.total_price , false ) , 0)) as s11,
                sum(if(month(reservation.check_in)=12 , if( reservation.state !=1 , reservation.total_price , false ) , 0)) as s12,
				sum(if(year(reservation.check_in)=$text1 , if( reservation.state !=1 , reservation.total_price , false ) , 0)) as s13
                from reservation left join room on reservation.room_no=room.no
                where year(reservation.check_in)=$text1 
                group by reservation.room_no
                order by room.name limit $start, $limit";
                return $this->db->query($sql)->result();
				
		/*$sql="select room.name as room_name
                sum( if(month(reservation.check_out)=1, reservation.total_price,0) ) as s1,
                sum( if(month(reservation.check_out)=2, reservation.total_price,0) ) as s2,
                sum( if(month(reservation.check_out)=3, reservation.total_price,0) ) as s3,
                sum( if(month(reservation.check_out)=4, reservation.total_price,0) ) as s4,
                sum( if(month(reservation.check_out)=5, reservation.total_price,0) ) as s5,
                sum( if(month(reservation.check_out)=6, reservation.total_price,0) ) as s6,
                sum( if(month(reservation.check_out)=7, reservation.total_price,0) ) as s7,
                sum( if(month(reservation.check_out)=1, reservation.total_price,0) ) as s8,
                sum( if(month(reservation.check_out)=2, reservation.total_price,0) ) as s9,
                sum( if(month(reservation.check_out)=3, reservation.total_price,0) ) as s10,
                sum( if(month(reservation.check_out)=4, reservation.total_price,0) ) as s11,
                sum( if(month(reservation.check_out)=5, reservation.total_price,0) ) as s12,
                from reservation left join room on reservation.room_no=room.no
                where year(reservation.check_in)=$text1 
                group by reservation.room_no
                order by room.name limit $start, $limit";
                return $this->db->query($sql)->result();*/
       }

        public function rowcount($text1) 
        {
           $sql="select room_no from reservation
                   where year(check_in)=$text1 group by room_no";
            return $this->db->query($sql)->num_rows();
		}
		public function sumall()
		{
			$sql="select sum(total_price) from reservation";
			return $this->db->query($sql)->result();
		}
	}
?>