		<?
			$no=$row->no;                                    // 사용자번호
			$phone1 = trim(substr($row->phone,0,3));      // 전화 : 지역번호 추출
			$phone2 = trim(substr($row->phone,3,4));      // 전화 : 국번호 추출
			$phone3 = trim(substr($row->phone,7,4));      // 전화 : 번호 추출
			$phone = $phone1 . "-" . $phone2 . "-" . $phone3;       // 합치기
			$birth1=substr($row->birth,0,4);
			$birth2=substr($row->birth,5,2);
			$birth3=substr($row->birth,8,2);
			$birth = sprintf("%04d-%02d-%02d", $birth1, $birth2, $birth3);
			//$gubun = $row->gubun==0 ? "고객" : "관리자" ;      // 0->고객, 1->관리자
		?>
		<?    $tmp = $text1 ? "/no/$no/text1/$text1/page/$page" : "/no/$no/page/$page";   ?>

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
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
									<tr><td width="20%" align="middle">번호</td><td><?=$row->no; ?></td></tr>
									<tr><td width="20%" align="middle">이름</td><td><?=$row->name; ?></td></tr>
									<tr><td width="20%" align="middle">아이디</td><td><?=$row->uid; ?></td></tr>
									<tr><td width="20%" align="middle">암호</td><td><?=$row->pwd; ?></td></tr>
									<tr><td width="20%" align="middle">생일</td><td><?=$row->birth; ?></td></tr>
									<tr><td width="20%" align="middle">이메일</td><td><?=$row->email; ?></td></tr>
									<tr><td width="20%" align="middle">우편번호</td><td><?=$row->zipcode; ?></td></tr>
									<tr><td width="20%" align="middle">주소</td><td><?=$row->address; ?></td></tr>
									<tr><td width="20%" align="middle">구분</td>
									<td><? if ($row->gubun==0){?>고객<?}
									else if ($row->gubun==1){?>직원<?}
									else {?>관리자<?}?></td></tr>
                                </table>
                            </div>
                        </div>
                    </div>


					<div align="center">
						<a href="/~team3/a_user/edit<?=$tmp?>" class="btn btn-sm  bg-gradient-primary" style="color:white">수정</a>  
						<a href="/~team3/a_user/del<?=$tmp?>" class="btn btn-sm bg-gradient-primary" style="color:white" onClick="return confirm('삭제할까요?');">삭제</a> &nbsp;
						<input type="button" value="이전화면" class="btn btn-sm bg-gradient-primary" style="color:white" onclick = "history.back();">
					</div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

