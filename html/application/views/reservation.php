<?php 
	$startDate=set_value('check_in');
	$endDate=set_value('check_out');
	
	$date1 = new DateTime($startDate);
	$date2 = new DateTime($endDate);

	$interval = date_diff($date1, $date2);
?>

<script>

function select_room()
	{
		var str;
		str = form1.sel_room_no.value;
		if(str == "")
		{
			form1.room_no.value = "";
			//form1.name.value = "";
			form1.price.value = "";
		}
		else
		{
			str = str.split("^^");
			form1.room_no.value = str[0];
			//form1.name.value = str[1];
			form1.price.value = str[1];
			form1.total_price.value = str[1] * "<? echo($interval->days)?>";
		}
	}


 
var a ='2016-01-01';


출처: https://webinformation.tistory.com/84 [끄적끄적]
 $(function(){
		$('#check_in') .datetimepicker({
			locale: 'ko',
			format: 'YYYY-MM-DD',
			defaultDate: moment()
		});
		$("#text1") .on("dp.change", function (e){
				find_text();
		});
	});


</script>



	<?$user_no = $this->session->userdata("no");?>
	<?$user_name = $this->session->userdata("uid");?>

<section class="site-hero inner-page overlay" style="background-image: url(/~team3/my/images/hero_4.jpg)" data-stellar-background-ratio="0.5">
  <div class="container">
	<div class="row site-hero-inner justify-content-center align-items-center">
	  <div class="col-md-10 text-center" data-aos="fade">
		<h1 class="heading mb-3">Reservation</h1>
		<ul class="custom-breadcrumbs mb-4">
		  <li><a href="index.html">Home</a></li>
		  <li>&bullet;</li>
		  <li>Reservation</li>
		</ul>
	  </div>
	</div>
  </div>

  <a class="mouse smoothscroll" href="#next">
	<div class="mouse-icon">
	  <span class="mouse-wheel"></span>
	</div>
  </a>
</section>
    <!-- END section -->

	<section class="section contact-section" id="next">
		<div class="container">

			<div class="row">
			
			  <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
				<form name="form1" action="" method="post" enctype="multipart/form-data" class="bg-white p-md-5 p-4 mb-5 border">
					  
					  <div class="row">
						<div class="col-md-6 form-group">
						  <label class="text-black font-weight-bold">User No</label>
						  <input type="text" name="user_no" value="<?=$user_no; ?>" class="form-control" readonly>
						</div>
					  </div>

					  <div class="row">
						<div class="col-md-6 form-group">
						  <label class="text-black font-weight-bold">User Name</label>
						  <input type="text" name="user_name" value="<?=$user_name; ?>" class="form-control" readonly>
						</div>
					  </div>

					  <div class="row">
						<div class="col-md-6 form-group">
						  <label class="text-black font-weight-bold" for="checkin_date">Date Check In</label>
						  <input type="date" name="check_in" placeholder="ex) 2021-01-01" maxlength="10" class="form-control" value="<?=set_value('check_in'); ?>"  onChange="cal_price();" >
						</div>
						<div class="col-md-6 form-group">
						  <label class="text-black font-weight-bold" for="checkout_date">Date Check Out</label>
						  <input type="date" name="check_out" maxlength="10" placeholder="ex) 2021-01-01" class="form-control" value="<?=set_value('check_out'); ?>"  onChange="cal_price();" >
						</div>
					  </div>


					<div class="row">
					  <div style="white-space:nowrap" class="col-md-3 form-group">
						  <label class="text-black font-weight-bold">Card Number</label>
						   </br>
						  <input type="text" name="card_number1" maxlength="4" class="form-control" value="" style="display:inline"> -
						  <input type="text" name="card_number2" maxlength="4" class="form-control" value="" style="display:inline"> -
						  <input type="text" name="card_number3" maxlength="4" class="form-control" value="" style="display:inline" > -
						  <input type="text" name="card_number4" maxlength="4" class="form-control" value="" style="display:inline">
					  </div>
					</div>
					
					<div class="row">
					  <div style="white-space:nowrap" class="col-md-3 form-group">
						  <label class="text-black font-weight-bold">M / Y</label>
						   </br><? If (form_error("card_m")==true) echo form_error("card_m"); ?>
						  <input type="text" name="card_m" maxlength="2" class="form-control " value="<?=set_value('card_m'); ?>" style="display:inline"> /
						  <input type="text" name="card_y" maxlength="2" class="form-control " value="<?=set_value('card_y'); ?>" style="display:inline">
						  <? If (form_error("card_y")==true) echo form_error("card_y"); ?>
					  </div>
					</div>
					
					<div class="row">
					  <div style="white-space:nowrap" class="col-md-6 form-group">
						  <label class="text-black font-weight-bold">CVC</label>
						   </br>
						  <input type="text" name="card_cvc" maxlength="3" class="form-control " value="<?=set_value('card_cvc'); ?>" style="display:inline">
						  <? If (form_error("card_cvc")==true) echo form_error("card_cvc"); ?>
					  </div>
					</div>
				
				&nbsp
				
					<div class="row">
					  <div class="col-md-6 form-group">
						<p><span class="d-block text-primary">Choose Your Room</span> 
							<input type="hidden" name="room_no" value="<?=set_value("room_no");?>">
							<select name="sel_room_no" class="form-control form-control-sm" onchange="select_room();">
							<option value="" selected> 선택하세요. </option>
							
							<?
								$room_no=set_value("room_no");
								foreach ($list as $row)
								{
									if ($row->no==$room_no)
										echo("<option value='$row->no^^$row->price' selected>$row->name($row->price)</option>");
									else
										echo("<option value='$row->no^^$row->price'>$row->name($row->price)</option>");
								}
							?>
							</select>
					  </div>
					</div>
					
					<div class="row">
						<div class="col-md-6 form-group">
						  <label class="text-black font-weight-bold">Dayily Rate</label>
						  <input type="text" name="price" value="<?=set_value("price"); ?>" class="form-control" onChange="cal_price();" readonly>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-6 form-group">
						  <label class="text-black font-weight-bold">Total Price</label>
						  <input type="text" name="total_price" value="" class="form-control" onChange="cal_price();" readonly>
						</div>
					</div>					
				
				
				  <!--Footer-->
					<div align="center">
						<input type="submit" value="저장" class="btn btn-primary text-white"></a>
						<input type="button" value="이전화면" class="btn btn-sm bg-gradient-primary" style="color:white" onclick = "history.back();">
					</div>

				</form>
			  </div>
			  
			  
			<div class="col-md-5" data-aos="fade-up" data-aos-delay="200">
				<div class="row">
				  <div class="col-md-10 ml-auto contact-info">
					<p><span class="d-block">Address:</span> <span class="text-black">서울특별시 노원구 초안산로 12</span></p>
					<p><span class="d-block">Phone:</span> <span class="text-black"> (02) 950-7000</span></p>
					<p><span class="d-block">Email:</span> <span class="text-black"><a href="mailto:idu@induk.ac.kr" title="문의 메일 보내기">idu@induk.ac.kr</a></span></p>
				  </div>
				</div>
			</div>
			
			</div>
			

		</div>
    </section>
	
