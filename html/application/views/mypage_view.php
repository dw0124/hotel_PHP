<!-- END head -->
	    <section class="site-hero overlay" style="background-image: url(/~team3/my/images/hero_4.jpg)" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center" data-aos="fade-up">
            <span class="custom-caption text-uppercase text-white d-block  mb-3">Welcome To 5 <span class="fa fa-star text-primary"></span>   Hotel</span>
            <h1 class="heading">Mypage</h1>
          </div>
        </div>
      </div>

      <a class="mouse smoothscroll" href="#next">
        <div class="mouse-icon">
          <span class="mouse-wheel"></span>
        </div>
      </a>
    </section>
<!---헤더부분--->
	
      
    </section>
    <!-- END section -->
	
	<section class="section bg-light pb-0" id="next"></section>

	<section class="py-5 bg-light">
      <div class="container">
        <div class="row align-items-center" >



		<script>
			

			function find_product()
			{
				window.open("/~team3/findaddress","","resizable=yes,scrollbars=yes,width=500,height=600");
			}
			
		</script>

	<?
		$address = explode(" ", $row->address);
		$address_count = substr_count($row->address, " ");
		$juso_detail = $address[$address_count];
		unset($address[$address_count]);
		$juso = implode (" ", $address);
	?>


		  <!-- Grid column -->
		  <div class="col-md-5 col-lg-8 col-xl-8 mx-xl-auto" data-aos="fade-up" data-aos-delay="200">
			<section class="form-elegant scrollbar-light-blue">
			  <!--Form without header-->
			  <div class="card">

				<div class="card-body mx-4">



				<ul class="nav nav-tabs">
				  <li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#view">My info</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#resv">My Reservation</a>
				  </li>
				</ul>

				<div class="tab-content">
				  <div class="tab-pane fade show active" id="view">

					<div class="col-md-5 col-lg-8 col-xl-7 mx-xl-auto">
						<form name="form1" method="post" action="/~team3/mypage/edit/no/<?=$row->no; ?>">
						  <!--Header-->
						  <div class="text-center">
							<h3 class="dark-grey-text mb-5"><strong></strong></h3>
						  </div>
						  <input type="hidden" name="id" value="<?=$row->no; ?>">
						  <!--Body-->
						  <div class="md-form">
						  Your name
							<input type="text" name="name" value="<?=$row->name; ?>" class="form-control">
							
						  </div>

						  <div class="md-form" style="margin-top: 5px;">
						  Your id
							<input type="text" name="uid" value="<?=$row->uid; ?>" class="form-control" style="border:0;" readonly>
							
						  </div>

						  <div class="md-form" style="margin-top: 5px;">
						  Your password
							<input type="password" name="pwd" value="<?=$row->pwd; ?>" class="form-control">
							
						  </div>

						  <div class="" style="margin-top: 5px;">
							Your birthday
								<div class="field-icon-wrap">
									<div class="icon"><span class="icon-calendar"></span></div>
									<input type="date" name="birth" id="checkin_date"  value="<?=$row->birth; ?>" class="form-control">
								</div>
							</div>

						  <div class="md-form" style="margin-top: 5px;">
						  Your email
							<input type="text" name="email" value="<?=$row->email; ?>" class="form-control">
							
						  </div>

						  <div class="md-form" style="margin-top: 5px;">
						  Your phone
							<input type="text" name="phone" value="<?=$row->phone; ?>" class="form-control">
							
						  </div>

						  

						  <div class="md-form pb-3" style="margin-top: 5px;">
						  Your address
							<input type="text" name="zipcode" placeholder="zipcode"  value="<?=$row->zipcode; ?>" class="form-control" readonly style="border:0; margin-bottom:5px;">
							<input type="text" name="address1" value="<?=$juso; ?>" class="form-control" onClick="find_product();" style=" margin-bottom:5px;">
							<input type="text" name="address2" value="<?=$juso_detail; ?>" class="form-control" placeholder="상세주소">
						  </div>

						  <div class="text-center mb-3">
							<button type="button" class="btn blue-gradient btn-block btn-rounded z-depth-1a" onclick="javascript:form1.submit();">edit</button>
						  </div>
						</form>
					</div>

					
				  </div>
				  <div class="tab-pane fade" id="resv">


						<div class="row">
						  <div class=" mx-auto m-4 contact-info">





					<?
						if (!$list)
						{
							echo("<p>No Data</p>");
						}
						else
						{
					?>


							<table class="table  table-bordered table-sm " style="margin:5px 0px 5px 0px;" width="1000">
								<thead class="thead-light">
									<tr class="" align="center">
										
										<th width="22.331%">Room</td>
										<th width="23.529%">Check in</td>
										<th width="23.46%">Chek out</td>
										<th width="19.26%">Card number<br>(back 4)</td>
										<th width="11.30%">Price</td>
										<th></td>

										<!--
										<th width="12.86%">Room</td>
										<th width="24.57%">Check in</td>
										<th width="25.75%">Chek out</td>
										<th width="26.90%">Card number</td>
										<th width="9.80%">Price</td>	-->

									</tr>
								</thead>
								<?
									foreach ($list as $row1)                             // 연관배열 list를 row를 통해 출력한다.
									{
										$no=$row1->no;                                    // 예약번호
										$card_back_num = substr($row1->card_number,12);
								?>
								<tr>
									<td align="center"><?=$row1->room_name; ?></td>
									<td align="center"><?=$row1->check_in; ?></td>
									<td align="center"><?=$row1->check_out; ?></td>
									<td align="center"><?=$card_back_num; ?></td>
									<td align="center"><?=number_format($row1->price); ?></td>
									<td align="center"><a href="/~team3/mypage/del/no/<?=$row->no ?>/resvno/<?=$no ?>" class="btn  btn-primary btn-block " style="padding: 0.25rem 0.5rem; font-size: .875rem; line-height: 1.5; border-radius: 0.2rem;">취소</a></td>
								</tr>
								<?
									}
								?>
								</table>

							</table>
					<?
							}
					?>

				  </div>
				</div>




				
				  

				  






				</div>

				<!--Footer-->
				

			  </div>
			  <!--/Form without header-->

			</section>

		  </div>
		  <!-- Grid column -->
          
		  
          
          
        </div>
      </div>
    </section>