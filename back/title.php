<!-- 共同區塊_start -->
<div class="di" style="height:540px; border:#999 1px solid; width:76.5%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
	<!--正中央-->
	<table width="100%">
		<tbody>
			<tr>
				<td style="width:70%;font-weight:800; border:#333 1px solid; border-radius:3px;" class="cent"><a href="?do=admin" style="color:#000; text-decoration:none;">後台管理區</a></td>
				<td>
					<button onclick="location.href='./api/logout.php'" style="width:99%; margin-right:2px; height:50px;">管理登出</button>
				</td>
			</tr>
		</tbody>
	</table>
	<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
		<p class="t cent botli">網站標題管理</p>
		<form method="post" target="back" action="./api/edit.php">
			<table width="100%">
					<tr class="yel">
						<td width="45%">網站標題</td>
						<td width="23%">替代文字</td>
						<td width="7%">顯示</td>
						<td width="7%">刪除</td>
						<td></td>
					</tr>
					<tr>
						<td width="45%">
							<img src="./upload/" style="width: 300px;height:30px">
						</td>
						<td width="23%">
							<input type="text" name="text[]" value="">
						</td>
						<td width="7%">
						<input type="radio" name="sh" value="">
						</td>
						<td width="7%">
						<input type="checkbox" name="del[]" value="">
						</td>
						<td>
							<input type="button" value="更新圖片" onclick="op('#cover','#cvr','./modal/<?=$do;?>.php?table=<?=$do;?>&id= ')">
							<input type="hidden" name="id[]" value="">
						</td>
					</tr>

			</table>
			<table style="margin-top:40px; width:70%;">
				<tbody>
					<tr>
						<td width="200px">
							<input type="button" onclick="op('#cover','#cvr','./modal/<?=$do;?>.php?table=<?=$do;?>')" value="新增網站標題圖片">
						</td>
						<td class="cent">
							<input type="hidden" name="table" value="">
							<input type="submit" value="修改確定">
							<input type="reset" value="重置">
						</td>
					</tr>
				</tbody>
			</table>
		</form>
	</div>
</div>
<!-- 共同區塊_end -->