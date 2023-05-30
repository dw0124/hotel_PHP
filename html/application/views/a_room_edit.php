<script>

			$(function() {
				$('#text1').datetimepicker({
					locale:'ko',
					format:'YYYY-MM-DD',
					defaultDate: moment()
				});

				$("#text1") .on("dp.change", function (e){
					find_text();
				});
			});
</script>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->


			<div id="content">

<form name="form1" method="post" action="" enctype="multipart/form-data" class="form-inline">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800" style="margin-top: 30px">Room</h1>

                    <div class="card shadow mb-4">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

									<tr>
										<td width="20%" align="middle">name</td>
										<td>
											<div class="form-inline"><input type="text1" name="name" size="30" maxlength="30" value="<?=$row->name?>" class="form-control form-control-sm">
											<? If (form_error("name")==true) echo form_error("name"); ?></div>
										</td>
										
									</tr>
									<tr>
										<td width="20%" align="middle">price</td>
										<td>
										<div class="form-inline"><input type="text2" name="price" size="30" maxlength="30" value="<?=$row->price; ?>" class="form-control form-control-sm">
										<? If (form_error("price")==true) echo form_error("price"); ?></div>
										</td>
									</tr>
									<tr>
										<td width="20%" align="middle">pic</td>
										<td><div class="form-inline"><input type="file" name="pic" size="30" maxlength="30" value="<?=$row->pic?>" class="form-control form-control-sm"></div>
											<?
												if ($row->pic)     // 이미지가 있는 경우
													echo("<img src='/~team3/product_img/$row->pic' width='200’ class='img-fluid img-thumbnail'>");
												else                   // 이미지가 없는 경우
													echo("<img src='' width='200’ class='img-fluid img-thumbnail'>");
											?>										
										</td>
									</tr>
									<tr style="height:80px">
										<td width="20%" align="center">bigo</td>
										<td><div class="form-inline"><textarea name="bigo" cols="50" rows="8"><?=$row->bigo?></textarea></div></td>
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


