		<?
			$no=$row->no;
			$tmp = $text1 ? "/no/$no/text1/$text1/page/$page" : "/no/$no/page/$page";
		?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800" style="margin-top: 30px">Room</h1>

                    <div class="card shadow mb-4">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
									<tr><td width="20%" align="middle">No</td><td><?=$row->no; ?></td></tr>
									<tr><td width="20%" align="middle">name</td><td><?=$row->name; ?></a></td></tr>
									<tr><td width="20%" align="middle">price</td><td><?=number_format($row->price); ?></td></tr>
									<tr><td width="20%" align="middle">pic</td>
										<td>
											<div class="form-inline">
											<b>파일이름</b> : <?=$row->pic ?> <br>

											</div>
											<?
												if ($row->pic)     // 이미지가 있는 경우
													echo("<img src='/~team3/product_img/$row->pic' width='200’ class='img-fluid img-thumbnail'>");
												else                   // 이미지가 없는 경우
													echo("<img src='' width='200’ class='img-fluid img-thumbnail'>");
											?>										
										</td>
									</tr>
									<tr style="height:80px"><td width="20%" align="center">bigo</td><td><?=$row->bigo; ?></td></tr>

                                </table>
                            </div>
                        </div>
                    </div>


					<div align="center">
						<a href="/~team3/a_room/edit<?=$tmp?>" class="btn btn-sm  bg-gradient-primary" style="color:white">수정</a>  
						<a href="/~team3/a_room/del<?=$tmp?>" class="btn btn-sm bg-gradient-primary" style="color:white" onClick="return confirm('삭제할까요?');">삭제</a> &nbsp;
						<input type="button" value="이전화면" class="btn btn-sm bg-gradient-primary" style="color:white" onclick = "history.back();">
					</div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

