	<script>
   	function find_text()
		{
			form1.action="/~team3/A_chart/lists/text1/" + form1.text1.value; //+"/page";
			form1.submit();
		}
		
		$(function() {
			$('#text1') .datetimepicker({
				locale: 'ko', 
				format: 'yyyy',
				viewMode: 'years',
				defaultDate: moment()
			});
			
			$("#text1") .on("dp.change", function (e){find_text();});
		});
	</script>
	<!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <!-- Nav Item - Messages -->

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
		<!---
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>
			--->
                    <!-- Content Row -->
            <!---
					<div class="row">
			--->
                        <!-- Earnings (Monthly) Card Example -->
            

                        <!-- Earnings (Monthly) Card Example -->
                   <!---
						<div class="col-xl-4 col-md-8 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">연간 매출</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
					--->
                        <!-- Earnings (Monthly) Card Example -->




                        <!-- Pending Requests Card Example -->
					 <!---
                        <div class="col-xl-4 col-md-8 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                예약 건수</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?=$row->s14;?></div>
											</div>
											<div class="col-auto">
												<i class="fas fa-comments fa-2x text-gray-300"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					--->
                    <!-- Content Row -->
                    <div class="row">
                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">연매출 차트</h6>
                                 </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <form name="form1" action="" method="post">    <!--검색 버튼-->
									<div class="row">
										<div class="col-12"> 
											<div class="form-inline">
												<div class="input-group  input-group-sm table-sm date" id="text1">
													<div class="input-group-prepend">
														<span class="input-group-text">년도</span>
													</div>
													<input type="text" name="text1" value="<?=$text1;?>" class="form-control" size="9" onKeydown="if (event.keyCode == 13) { find_text(); }" >
													<span class="input-group-btn">
													<button class="btn btn-sm bg-gradient-primary" style="color:white" type="button" onClick="javascript:find_text();">검색</button>
												</span>
											</div>
											</div>
										</div>
									</div>
								</form>

								<br>
									<table class="table  table-bordered  table-sm  mymargin5">
											<tr class="mycolor2">
												
												<td width="22%">방 이름</td>
												<td width="6%">1월</td>
												<td width="6%">2월</td>
												<td width="6%">3월</td>
												<td width="6%">4월</td>
												<td width="6%">5월</td>
												<td width="6%">6월</td>
												<td width="6%">7월</td>
												<td width="6%">8월</td>
												<td width="6%">9월</td>
												<td width="6%">10월</td>
												<td width="6%">11월</td>
												<td width="6%">12월</td>
												<td width="6%">합계</td>
											</tr>

							<?
								foreach ($list as $row)                       // 연관배열 list를 row를 통해 출력한다.
								{
								
							?>
								<tr>
								
								<td align="left" bgcolor="lightyellow"><?=$row->room_name; ?></td>
								<td align="right"><?=$row->s1==0 ? "" : number_format($row->s1); ?> </td>
								<td align="right"><?=$row->s2==0 ? "" : number_format($row->s2); ?> </td>
								<td align="right"><?=$row->s3==0 ? "" : number_format($row->s3); ?> </td>
								<td align="right"><?=$row->s4==0 ? "" : number_format($row->s4); ?> </td>
								<td align="right"><?=$row->s5==0 ? "" : number_format($row->s5); ?> </td>
								<td align="right"><?=$row->s6==0 ? "" : number_format($row->s6); ?> </td>
								<td align="right"><?=$row->s7==0 ? "" : number_format($row->s7); ?> </td>
								<td align="right"><?=$row->s8==0 ? "" : number_format($row->s8); ?> </td>
								<td align="right"><?=$row->s9==0 ? "" : number_format($row->s9); ?> </td>
								<td align="right"><?=$row->s10==0 ? "" : number_format($row->s10); ?> </td>
								<td align="right"><?=$row->s11==0 ? "" : number_format($row->s11); ?> </td>
								<td align="right"><?=$row->s12==0 ? "" : number_format($row->s12); ?> </td>
								<td align="right"><?=$row->s13==0 ? "" : number_format($row->s13); ?> </td>
							</tr>
							<?
								}
							?>

										</table>
                                </div>
                            </div>
                        </div>
                        <!-- Pie Chart --
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">-->
                                <!-- Card Header - Dropdown --
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>-->
                                <!-- Card Body --
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> Direct
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-success"></i> Social
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-info"></i> Referral
                                        </span>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->