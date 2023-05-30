	<script>
   	function find_text()
		{
			form1.action="/~team3/A_chart/lists/text1/" + form1.text1.value; //+"/page";
			form1.submit();
		}
		
		$(function() {
			$('#text1') .datetimepicker({
				locale: 'ko', 
				format: 'YYYY',
				viewMode: 'years',
				defaultDate: moment()
			});
			
			$("#text1") .on("dp.change", function (e){find_text();});
		});
	</script>

	<form name="form1" action="" method="post">    <!--검색 버튼-->
		<div class="row">
			<div class="col-12"> 
				<div class="form-inline">
					<div class="input-group  input-group-sm table-sm date" id="text1">
						<div class="input-group-prepend">
							<span class="input-group-text">년도</span>
						</div>
						<input type="date" name="text1" value="<?=$text1;?>" class="form-control" size="9" onKeydown="if (event.keyCode == 13) { find_text(); }" >
						<div class="input-group-append">
							<div class="input-group-text">
								<div class="input-group-addon"><i class="far fa-calendar-alt fa-lg"></i></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>

	<br>
		<table class="table  table-bordered  table-sm  mymargin5">
				<tr class="mycolor2">
					
					<td width="12%">방 이름</td>
					<td width="7%">1월</td>
					<td width="7%">2월</td>
					<td width="7%">3월</td>
					<td width="7%">4월</td>
					<td width="7%">5월</td>
					<td width="7%">6월</td>
					<td width="7%">7월</td>
					<td width="7%">8월</td>
					<td width="7%">9월</td>
					<td width="7%">10월</td>
					<td width="7%">11월</td>
					<td width="7%">12월</td>
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

</tr>
<?
	}
?>

			</table>
			 
</div>
</body>
</html>
