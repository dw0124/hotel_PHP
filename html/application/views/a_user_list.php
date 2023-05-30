	<br>
	<script>
		function find_text()
		{
			if (!form1.text1.value)       // 값이 없는 경우, 전체 자료
				form1.action="/~team3/a_user/lists/page";
			else                                    // 값이 있는 경우, text1 값 전달
				form1.action="/~team3/a_user/lists/text1/" + form1.text1.value+"/page";
			form1.submit();
		}
	</script>

	<?     $tmp = $text1 ? "/text1/$text1/page/$page" : "/page/$page";   ?>

	<!-- Content Wrapper -->
			<div id="content-wrapper" class="d-flex flex-column">

				<!-- Main Content -->
				<div id="content">

					<!-- Begin Page Content -->
					<div class="container-fluid">

						<!-- Page Heading -->
						<h1 class="h3 mb-2 text-gray-800" style="margin-top: 30px">사용자</h1>

						<div class="card shadow mb-4">

							<div class="card-body">
								<form name="form1" method="post" action="" >
									<div class="row">
										<div class="col-3" align="left">
										<div class="input-group input-group-sm">
											<input type='text' placeholder="이름을 입력하세요" name='text1' value='<?= $text1 ?>' class='form-control' onKeydown='if (event.keyCode == 13) { find_text(); }'>
											<span class="input-group-btn">
												<button class="btn btn-sm bg-gradient-primary" style="color:white" type="button" onClick="javascript:find_text();">검색</button>
											</span>
										</div>
									</div>
										<div class="col-9" align="right">           
											<a href="/~team3/A_user/add<?=$tmp; ?>" class="btn btn-sm bg-gradient-primary" style="color:white">추가</a>
										</div>
									</div>
								</form>
								<br>

								<table class="table  table-bordered  table-sm  mymargin5">
									<tr class="mycolor2">
										<td width="10%">번호</td>
										<td width="10%">이름</td>
										<td width="20%">아이디</td>
										<td width="30%">이메일</td>
										<td width="20%">전화</td>
										<td width="10%">구분</td>
									</tr>
									<?
										foreach ($list as $row)                             // 연관배열 list를 row를 통해 출력한다.
										{
											$no=$row->no;                                    // 사용자번호
											$phone1 = trim(substr($row->phone,0,3));      // 전화 : 지역번호 추출
											$phone2 = trim(substr($row->phone,3,4));      // 전화 : 국번호 추출
											$phone3 = trim(substr($row->phone,7,4));      // 전화 : 번호 추출
											$phone = $phone1 . "-" . $phone2 . "-" . $phone3;       // 합치기
											$gubun=$row->gubun;
									?>
									<tr>
										<td><?=$no; ?></td>
										<td><a href="/~team3/A_user/view/no/<?=$no;?><?=$tmp; ?>"><?=$row->name; ?></a></td>
										<td><?=$row->uid; ?></td>
										<td><?=$row->email; ?></td>
										<td><?=$phone; ?></td>
										<td><? if ($row->gubun==0){?>고객<?}
												else if ($row->gubun==1){?>직원<?}
												else {?>관리자<?}?>
										</td>
									</tr>
									<?
										}
									?>

								</table>
								<?=$pagination;?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>