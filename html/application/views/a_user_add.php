	<script>
			$(function() {
					$('#checkin_date') .datepicker({
						format: 'YYYY-MM-DD',
						defaultDate: moment()
					});

					$("#birth") .on("dp.change", function (e) {
						find_text();
					});
				});

			function select_product()
			{
				var str;
				str = form1.sel_product_no.value;
				if (str=="")
				{
					form1.product_no.value = "";
					form1.price.value = "";
					form1.prices.value = "";
				}
				else
				{
					str = str.split("^^");
					form1.product_no.value = str[0];
					form1.price.value = str[1];
					form1.prices.value = Number(form1.price.value) * Number(form1.numo.value);
				}
			}

			function cal_prices()
			{
				form1.prices.value=Number(form1.price.value) * Number(form1.numo.value);
				form1.bigo.focus();
			}

			function find_product()
			{
				window.open("/~team3/findaddress","","resizable=yes,scrollbars=yes,width=500,height=600");
			}
			
	</script>

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
										<td width="20%" align="middle">이름</td>
										<td>
											<div class="form-inline"><input type="text" name="name" size="30" maxlength="30" value="<?=set_value('name'); ?>" class="form-control form-control-sm">
											<? If (form_error("name")==true) echo form_error("name"); ?></div>
										</td>
									</tr>
									<tr>
										<td width="20%" class="info" style="vertical-align:middle">
											<font color="red">*</font> 아이디
										</td>
										<td width="80%" align="left">
											<div class="form-inline">
												<input  type="text" name="uid" class="form-control form-control-sm" size="20" value="<?=set_value("uid"); ?>">
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
												<input  type="text" name="pwd" class="form-control form-control-sm" size="20" value="<?=set_value("pwd"); ?>">
												<? If (form_error("pwd")==true) echo form_error("pwd"); ?>
											</div>
										</td>
									</tr>
									<tr>
										<td width="20%" class="info" style="vertical-align:middle">
											<font color="red">*</font> 생일
										</td>
										<td width="80%" align="left">
											<div class="form-inline">
												<input  type="text" name="birth1" class="form-control form-control-sm" size="3" value="">-
												<input  type="text" name="birth2" class="form-control form-control-sm" size="4" value="">-
												<input  type="text" name="birth3" class="form-control form-control-sm" size="4" value="">
											</div>
										</td>
									</tr>
									<tr>
										<td width="20%" class="info" style="vertical-align:middle">
											<font color="red">*</font> 이메일
										</td>
										<td width="80%" align="left">
											<div class="form-inline">
												<input  type="text" name="email" class="form-control form-control-sm" size="20" value="<?=set_value("email"); ?>">
												<? If (form_error("email")==true) echo form_error("email"); ?>
											</div>
										</td>
									</tr>
									<tr>
										<td width="20%" class="info" style="vertical-align:middle">
											<font color="red">*</font> 전화
										</td>
										<td width="80%" align="left">
											<div class="form-inline">
												<input  type="text" name="phone1" class="form-control form-control-sm" size="3" value="">-
												<input  type="text" name="phone2" class="form-control form-control-sm" size="4" value="">-
												<input  type="text" name="phone3" class="form-control form-control-sm" size="4" value="">
											</div>
										</td>
									</tr>
									<tr>
										<td width="20%" class="info" style="vertical-align:middle">
											<font color="red">*</font> 우편번호
										</td>
										<td width="80%" align="left">
											<div class="form-inline">
												<input  type="text" name="zipcode" class="form-control form-control-sm" size="20"> &nbsp; &nbsp;
												<input type="button" value="주소찾기" class="btn btn-sm bg-gradient-primary" style="color:white" onclick = "find_product();">
											</div>
										</td>
									</tr>
									<tr>
										<td width="20%" class="info" style="vertical-align:middle">
											<font color="red">*</font> 주소
										</td>
										<td width="80%" align="left">
											<div class="form-inline">
												<input  type="text" name="address1" class="form-control form-control-sm" size="20">
											</div>
										</td>
									</tr>
									<tr>
										<td width="20%" class="info" style="vertical-align:middle">
											<font color="red">*</font> 상세 주소
										</td>
										<td width="80%" align="left">
											<div class="form-inline">
												<input  type="text" name="address2" class="form-control form-control-sm" size="20">
											</div>
										</td>
									</tr>
									<tr>
										<td width="20%" class="info" style="vertical-align:middle">
											<font color="red">*</font> 구분
										</td>
										<td width="80%" align="left">
											<div class="form-inline">
												<input type="radio" name="gubun" value="0" checked> 고객 &nbsp; &nbsp;
												<input type="radio" name="gubun" value="1" > 직원 &nbsp; &nbsp;
												<input type="radio" name="gubun" value="2" > 관리자
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