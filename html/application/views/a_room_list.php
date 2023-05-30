		<script>
			function find_text()
			{
				if (!form1.text1.value)       
					form1.action="/~team3/a_room/lists/page";
				else
					form1.action="/~team3/a_room/lists/text1/" + form1.text1.value + "/page";
				form1.submit();
			}
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
                    <h1 class="h3 mb-2 text-gray-800" style="margin-top: 30px">Room</h1>

                    <div class="card shadow mb-4">

                        <div class="card-body">

							<form name="form1" method="post" action="" >
							<!--검색버튼-->
							<div class="row">
								<div class="col-3" align="left">
									<div class="input-group input-group-sm">
										<input type='text' placeholder="이름을 입력하세요" name='text1' value='<?= $text1 ?>' class='form-control' onKeydown='if (event.keyCode == 13) { find_text(); }'>
										<span class="input-group-btn">
											<button class="btn btn-sm bg-gradient-primary" style="color:white" type="button" onClick="javascript:find_text();">검색</button>
										</span>
									</div>
								</div>
								<!--추가버튼-->
								<div class="col-9" align="right" style="margin-bottom:10px">
									<a href="/~team3/a_room/add<?=$tmp;?>" class="btn btn-sm  bg-gradient-primary" style="color:white">추가</a>  
								</div>
							</div>
							</form>

                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>price</th>
                                            <th>pic</th>
											<th>bigo</th>
                                        </tr>
                                    </thead>

                                    <tbody>
										<?
											 foreach ($list as $row)                             // 연관배열 list를 row를 통해 출력한다.
											{
												$no=$row->no;                                    // 사용자번호
										?>
										<tr>
											<td><?=$no; ?></td>
											<td><a href="/~team3/a_room/view/no/<?=$no?><?=$tmp?>"><?=$row->name; ?></a></td>
											<td><?=number_format($row->price); ?></td>
											<td><?=$row->pic; ?></td>
											<td><?=$row->bigo; ?></td>
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


