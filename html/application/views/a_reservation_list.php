		<script>
			function find_text()
			{
				if (!form1.text1.value)       
					form1.action="/~team3/a_reservation/lists/page";
				else
					form1.action="/~team3/a_reservation/lists/text1/" + form1.text1.value + "/page";
				form1.submit();
			}

/*
			function changeSelection(){ 
				var selectedElement = document.getElementById("state"); 
				var optionVal = selectedElement.options[selectedElement.selectedIndex].value; 
				var optionTxt = selectedElement.options[selectedElement.selectedIndex].text;
				var optionNo = document.getElementById("no").value;
				console.log("optionNo :",optionNo);
				console.log("optionVal :",optionVal);
				//form1.action ="/~team3/a_reservation/edit/optionNo/" + optionNo  + "/optionVal/" + optionVal;
				//form1.submit();
				}
*/

		</script>


		<?
			$tmp = $text1 ? "/text1/$text1/page/$page" : "/page/$page";
		?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800" style="margin-top: 30px">Reservation</h1>

                    <div class="card shadow mb-4">

                        <div class="card-body">

							<form name="form1" method="post" action="" enctype="multipart/form-data" class="form-inline">
							<!--검색버튼-->
							<div class="row"  style="margin-bottom:10px">
								<div class="col-12" align="left">
									<div class="input-group input-group-sm">
										<input type='text' placeholder="방이름 또는 사용자를 입력하세요" name='text1' value='<?= $text1 ?>' class='form-control' onKeydown='if (event.keyCode == 13) { find_text(); }'>
										<span class="input-group-btn">
											<button class="btn btn-sm bg-gradient-primary" style="color:white" type="button" onClick="javascript:find_text();">검색</button>
										</span>
									</div>
								</div>
							</div>
							</form>

                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>방 이름</th>
                                            <th>체크인</th>
                                            <th>체크아웃</th>
											<th>사용자</th>
											<th>카드번호</th>
											<th>카드만료일</th>
											<th>cvc번호</th>
											<th>결제금액</th>
											<th>상태</th>
											<th></th>
                                        </tr>
                                    </thead>




                                    <tbody>
										<?
											 foreach ($list as $row)                             // 연관배열 list를 row를 통해 출력한다.
											{
												$no=$row->no;                                    // 사용자번호
												
												$startDate=$row->check_in;
												$endDate=$row->check_out;

												$date1 = new DateTime($startDate);
												$date2 = new DateTime($endDate);

												$interval = date_diff($date1, $date2);

										?>
										<tr>
											<td><?=$row->no; ?></td>
											<td><?=$row->room_name; ?></td>
											<td><?=$row->check_in; ?></td>
											<td><?=$row->check_out; ?></td>
											<td><?=$row->user_name; ?></td>
											<td><?=$row->card_number; ?></td>
											<td><?=$row->card_ex; ?></td>
											<td><?=$row->card_cvc; ?></td>
											<td><?=number_format($interval->days * $row->price); ?></td>
											<? $state_value = $row->state; ?>
											<td>
												<?= ($state_value==0) ? '예약':'' ?>
												<?= ($state_value==1) ? '취소':'' ?>
												<?= ($state_value==2) ? '구매확정':'' ?>

											</td>
											<td>
												<div class="col-9" align="right" style="margin-bottom:10px">
												<a href="/~team3/a_reservation/edit/no/<?=$row->no?><?=$tmp;?>" class="btn btn-sm  bg-gradient-primary" style="color:white">수정</a>
												</div>
											</td>
										</tr>
										<?
											}
										?>
									</tbody>
                                </table>
								<?=$pagination?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


