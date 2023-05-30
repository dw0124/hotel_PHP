<br>
		<div class="alert mycolor1"  style="color:black; background-color: sandybrown;" role="alert">우편번호 찾기</div>

		<script>

			function find_text()
			{
				if (!form1.text1.value)
					form1.action="/~team3/findaddress/lists/page";
				else
					form1.action="/~team3/findaddress/lists/text1/" + form1.text1.value+"/page";
				form1.submit();
			}

			function SendAddress(zip, address)
			{
				opener.form1.zipcode.value = zip;
				opener.form1.address1.value = address;
				self.close();
			}


		</script>

<?     $tmp = $text1 ? "/text1/$text1/page/$page" : "/page/$page";   ?>

		<form name="form1" method="post" action="" >
			<div class="row">

				<div class="col-8" align="left">            
					<div class="input-group  input-group-sm">
						<div class="input-group-prepend">
							<span class="input-group-text">도로명 주소</span>
						</div>
						<input type="text" name="text1" value="<?=$text1 ?>" class="form-control" onKeydown="if (event.keyCode == 13) { find_text(); }" >
						<div class="input-group-append">
							<button class="btn mycolor1" type="button" onClick="find_text();">검색</button>
						</div>
					</div>
				</div>
				<div class="col-4" align="right">           
					
				</div>
			</div>

		

		</form>


		



		<table class="table  table-bordered  table-sm  mymargin5" style="margin:5px 0px 5px 0px;">
			<tr style="color:black; background-color: lightgray;">
				
				<td width="15%">우편번호</td>
				<td width="85%">주소</td>
			</tr>
			<?
				foreach ($list as $row)                             // 연관배열 list를 row를 통해 출력한다.
				{
					$no=$row->no;                                    // 사용자번호
					$A=$row->juso1." ".$row->juso2."".$row->juso3." ".$row->juso4;
					if($row->juso5)$A=$A." $row->juso5";
					if($row->juso6!="0")$A=$A."-$row->juso6";
					if($row->juso7)$A=$A." $row->juso7";
			?>
			<tr>
				
				<td align="center"><?=$row->zip; ?></td>
				<td>
					<a href="javascript:SendAddress('<?=$row->zip; ?>', '<?=$A; ?>');" style="color:black"><?=$A; ?></a>
				</td>
			</tr>
			<?
				}
			?>

		</table>

<?=$pagination ?>
<!--
		<nav aria-label="Page navigation example">
		  <ul class="pagination pagination-sm justify-content-center mymargin5">
			<li class="page-item">
			  <a class="page-link" href="#" aria-label="Previous">
				<span aria-hidden="true">◀</span>
			  </a>
			</li>
			<li class="page-item"><a class="page-link" href="#">1</a></li>
			<li class="page-item"><a class="page-link" href="#">2</a></li>
			<li class="page-item"><a class="page-link" href="#">3</a></li>
			<li class="page-item">
			  <a class="page-link" href="#" aria-label="Next">
				<span aria-hidden="true">▶</span>
			  </a>
			</li>
		  </ul>
		</nav>	-->



