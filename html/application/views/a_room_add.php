

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
											<div class="form-inline"><input type="text" name="name" size="30" maxlength="30" value="<?=set_value('name'); ?>" class="form-control form-control-sm">
											<? If (form_error("name")==true) echo form_error("name"); ?></div>
										</td>
										
									</tr>
									<tr>
										<td width="20%" align="middle">price</td>
										<td>
										<div class="form-inline"><input type="text" name="price" size="30" maxlength="30" value="<?=set_value('price'); ?>" class="form-control form-control-sm">
										<? If (form_error("price")==true) echo form_error("price"); ?></div>
										</td>
									</tr>
									<tr>
										<td width="20%" align="middle">pic</td>
										<td>
											<div class="form-inline" style="display:block">
												<input  type="file" name="pic" value="" class="form-control form-control-sm">
											</div>											
										</td>
									</tr>
									<tr style="height:80px">
										<td width="20%" align="center">bigo</td>
										<td><div class="form-inline"><textarea name="bigo" cols="50" rows="8"></textarea></div></td>
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


