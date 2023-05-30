<script>

		$(function() {
			$('#check_in').datetimepicker({
				locale:'ko',
				format:'YYYY-MM-DD',
				defaultDate: moment()
			});

			$("#check_in") .on("dp.change", function (e){
				find_text();
			});
		});

		$(function() {
			$('#text2').datetimepicker({
				locale:'ko',
				format:'YYYY-MM-DD',
				defaultDate: moment()
			});

			$("#text2") .on("dp.change", function (e){
				find_text();
			});
		});

</script>


		<?php 

		$startDate=$row->check_in;
		$endDate=$row->check_out;

		$date1 = new DateTime($startDate);
		$date2 = new DateTime($endDate);

		$interval = date_diff($date1, $date2);

		?>
		<br><br>
		<?php 
			//echo $interval->days;
		?>



        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->


			<div id="content">

<form name="form1" method="post" action="" enctype="multipart/form-data" class="form-inline">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800" style="margin-top: 30px">reservation</h1>

                    <div class="card shadow mb-4">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

									<tr>
										<td width="20%" align="middle">name</td>
										<td>
											<?=$row->room_name?>
										</td>
										
									</tr>
									<tr>
										<td width="20%" align="middle">사용자</td>
										<td>
											<?=$row->user_name?>
										</td>
										
									</tr>
									<tr>
										<td width="20%" align="middle">체크인</td>
										<td>
											<div class="input-group input-group-sm table-sm date" id="check_in">
												<input type="date" name="check_in" size="30" maxlength="30" value="<?=$row->check_in; ?>" class="form-control form-control-sm date">

											</div>
										</td>
									</tr>
									<tr>
										<td width="20%" align="middle">체크아웃</td>
										<td>
										<div class="input-group input-group-sm table-sm date" id="text2">
											<input type="date" name="check_out" value="<?=$row->check_out; ?>" class="form-control date">
										</div>
										</td>
									</tr>
									<tr>
										<td width="20%" align="middle">카드번호</td>
										<td>
										<?=$row->card_number; ?>
										</td>
									</tr>									
									<tr>
										<td width="20%" align="middle">cvc번호</td>
										<td>
										<?=$row->card_cvc; ?>
										</td>
									</tr>									
									<tr>
										<td width="20%" align="middle">카드만료일</td>
										<td>
										<?=$row->card_ex; ?>
										</td>
									</tr>									
									<tr>
										<td width="20%" align="middle">결제 금액</td>
										<td>
										<?=number_format($interval->days * $row->price); ?>
										</td>
									</tr>						
									<tr>
										<td width="20%" align="middle">상태</td>
										<td>
										<div class="form-inline">
										<input type="radio" name="state" <? if ($row->state == 0) echo "checked";?> value="0" class="form-control form-control-sm">예약 &nbsp
										<input type="radio" name="state" <? if ($row->state == 1) echo "checked";?> value="1" class="form-control form-control-sm">취소 &nbsp
										<input type="radio" name="state" <? if ($row->state == 2) echo "checked";?> value="2" class="form-control form-control-sm">구매확정 &nbsp
										<? If (form_error("state")==true) echo form_error("state"); ?></div>
										</td>
									</tr>
                                </table>
                            </div>
                        </div>
                    </div>


					<div align="center">
						<input type="submit" value="저장" class="btn btn-sm  bg-gradient-primary" style="color:white"></a>  
						<input type="button" value="이전화면" class="btn btn-sm bg-gradient-primary" style="color:white" onclick = "history.back();">
					</div>

                </div>
                <!-- /.container-fluid -->
</form>

            </div>
            <!-- End of Main Content -->


