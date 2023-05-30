

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->


			<div id="content">

<form name="form1" method="post" action="" enctype="multipart/form-data" class="form-inline">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800" style="margin-top: 30px">User</h1>

                    <div class="card shadow mb-4">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
									<tr>
										<td width="20%" class="mycolor2" style="vertical-align:middle"> 번호</td>
										<td width="80%" align="left"><?=$row->no;?></td>
									</tr>
									<tr>
										<td width="20%" align="middle">이름</td>
										<td>
											<div class="form-inline"><input type="text" name="name" size="30" maxlength="30" value="<?=$row->name; ?>" class="form-control form-control-sm">
											<? If (form_error("name")==true) echo form_error("name"); ?></div>
										</td>
									</tr>
									<tr>
										<td width="20%" class="info" style="vertical-align:middle">
											<font color="red">*</font> 아이디
										</td>
										<td width="80%" align="left">
											<div class="form-inline">
												<input  type="text" name="uid" class="form-control form-control-sm" size="20" value="<?=$row->uid; ?>">
												<? If (form_error("uid")==true) echo form_error("uid"); ?>
											</div>
										</td>
									</tr>
									<tr>
										<td width="20%" class="info" style="vertical-align:middle">
											<font color="red">*</font> 암호
										</td>
										<td width="80%" align="left">
											<div class="form-inline">
												<input  type="text" name="pwd" class="form-control form-control-sm" size="20" value="<?=$row->pwd; ?>">
												<? If (form_error("pwd")==true) echo form_error("pwd"); ?>
											</div>
										</td>
									</tr>
									<?
										$birth1=substr($row->birth,0,4);
										$birth2=substr($row->birth,5,2);
										$birth3=substr($row->birth,8,2);
									?>
									<tr>
										<td width="20%" class="info" style="vertical-align:middle">
											<font color="red">*</font> 생일
										</td>
										<td width="80%" align="left">
											<div class="form-inline">
												<input  type="text" name="birth1" class="form-control form-control-sm" size="3" value="<?=$birth1;?>">-
												<input  type="text" name="birth2" class="form-control form-control-sm" size="4" value="<?=$birth2;?>">-
												<input  type="text" name="birth3" class="form-control form-control-sm" size="4" value="<?=$birth3;?>">
											</div>
										</td>
									</tr>
									<tr>
										<td width="20%" class="info" style="vertical-align:middle">
											<font color="red">*</font> 이메일
										</td>
										<td width="80%" align="left">
											<div class="form-inline">
												<input  type="text" name="email" class="form-control form-control-sm" size="20" value="<?=$row->email; ?>">
												<? If (form_error("email")==true) echo form_error("email"); ?>
											</div>
										</td>
									</tr>
									<?
										$phone1 = trim(substr($row->phone,0,3));      // 전화 : 지역번호 추출
										$phone2 = trim(substr($row->phone,3,4));      // 전화 : 국번호 추출
										$phone3 = trim(substr($row->phone,7,4));      // 전화 : 번호 추출
									?>
									<tr>
										<td width="20%" class="info" style="vertical-align:middle">
											<font color="red">*</font> 전화
										</td>
										<td width="80%" align="left">
											<div class="form-inline">
												<input  type="text" name="phone1" class="form-control form-control-sm" size="3" value="<?=$phone1;?>">-
												<input  type="text" name="phone2" class="form-control form-control-sm" size="4" value="<?=$phone2;?>">-
												<input  type="text" name="phone3" class="form-control form-control-sm" size="4" value="<?=$phone3;?>">
											</div>
										</td>
									</tr>
									<tr>
										<td width="20%" class="info" style="vertical-align:middle">
											<font color="red">*</font> 우편번호
										</td>
										<td width="80%" align="left">
											<div class="form-inline">
												<input  type="text" name="zipcode" class="form-control form-control-sm" size="20" value="<?=$row->zipcode; ?>">
											</div>
										</td>
									</tr>
									<?
										$address = explode(" ", $row->address);
										$address_count = substr_count($row->address, " ");
										$juso_detail = $address[$address_count];
										unset($address[$address_count]);
										$juso = implode (" ", $address)
									?>
									<tr>
										<td width="20%" class="info" style="vertical-align:middle">
											<font color="red">*</font> 주소
										</td>
										<td width="80%" align="left">
											<div class="form-inline">
												<input  type="text" name="address1" class="form-control form-control-sm" size="20" value="<?=$juso; ?>">
											</div>
										</td>
									</tr>
									<tr>
										<td width="20%" class="info" style="vertical-align:middle">
											<font color="red">*</font> 상세 주소
										</td>
										<td width="80%" align="left">
											<div class="form-inline">
												<input  type="text" name="address2" class="form-control form-control-sm" size="20" value="<?=$juso_detail; ?>">
											</div>
										</td>
									</tr>
									<tr>
										<td width="20%" class="info" style="vertical-align:middle">
											<font color="red">*</font> 구분
										</td>
										<td width="80%" align="left">
											<div class="form-inline">
												<? if ($row->gubun==0){?>
													<input type="radio" name="gubun" value="0" checked> 고객 &nbsp; &nbsp;
													<input type="radio" name="gubun" value="1" > 직원 &nbsp; &nbsp;
													<input type="radio" name="gubun" value="2" > 관리자
												<? } else if ($row->gubun==1){ ?>
													<input type="radio" name="gubun" value="0" > 고객 &nbsp; &nbsp;
													<input type="radio" name="gubun" value="1" checked> 직원 &nbsp; &nbsp;
													<input type="radio" name="gubun" value="2" > 관리자
												<? } else{?>
													<input type="radio" name="gubun" value="0" > 고객 &nbsp; &nbsp;
													<input type="radio" name="gubun" value="1" > 직원 &nbsp; &nbsp;
													<input type="radio" name="gubun" value="2" checked> 관리자
												<? } ?>
											</div>
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