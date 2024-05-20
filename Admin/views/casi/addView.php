<div class="col-md-12" style="margin-top:20px;">
	<div class="panel panel-primary">
		<div class="panel-heading">Thêm ca sĩ</div>
		<div class="panel-body">
			<form action="index.php?controller=casi/add&act=add" method="post" enctype="multipart/form-data">
				<table cellpadding="3" style="width: 100%">
					<tr>
						<td width="10%">Tên ca sĩ</td>
						<td width="90%">
							<input type="text" name="name" placeholder="Tên bài nhạc" class="form-control" required>
						</td>
					</tr>
					<!-- upload image -->
					<tr>
						<td>Ảnh</td>
						<td>
							<input type="file" name="image" style="padding-top: 10px;">
						</td>
					</tr>
					<!-- end upload -->
					<!-- catalog -->
					<tr>
						<td>Quốc gia </td>
						<td>
							<select name="quocgia" style="margin-top: 10px; padding: 3px;">
								<option value="Việt Nam">Việt Nam</option>
								<option value="Âu Mỹ">Âu Mỹ</option>
								<option value="Hàn Quốc">Hàn Quốc</option>
								<option value="Trung Quốc">Trung Quốc</option>
							</select>
						</td>
					</tr>
					<!-- end catalog -->
					<tr>
						<span>Giới thiệu ca sĩ</span> <br>
						<textarea name="gioithieu">
						</textarea>
						<script>
							CKEDITOR.replace('gioithieu');
						</script>
					</tr>
				</table>
				<center>
				<input type="submit" class="btn btn-primary" value="Thêm ca sĩ" style="margin-top: 10px;">
				<a href="index.php?controller=casi/list" class="btn btn-success" style="margin-top: 10px;">Quay lại</a></center>
			</form>
		</div>
	</div>
</div>