<div class="col-md-12" style="margin-top:20px;">
	<div class="panel panel-primary">
		<div class="panel-heading">Thêm Playlist</div>
		<div class="panel-body">
			<form action="index.php?controller=playlist/add&act=add" method="post" enctype="multipart/form-data">
				<table cellpadding="3" style="width: 100%">
					<tr>
						<td width="10%">Tên playlist</td>
						<td width="90%">
							<input type="text" name="name" placeholder="Tên playlist" class="form-control" required>
						</td>
					</tr>
					<!-- upload image -->
					<tr>
						<td>Ảnh</td>
						<td>
							<input type="file" name="image" style="padding-top: 10px;">
						</td>
					</tr>
					<tr>
						<td>Danh sách chủ đề Album </td>
						<td>
							<select name="album" class="form-control" style="margin-top: 10px;margin-bottom:10px; padding: 3px;">
								<?php
									$data = $this->Model->fetch("select * from album");
									foreach ($data as $value) {
								?>
								<option value="<?php echo $value["maAB"];?>"><?php echo $value["tenAB"];?></option>
								<?php } ?>
							</select>
						</td>
					</tr>
				</table>
				<center>
				<input type="submit" class="btn btn-primary" value="Thêm Playlist" style="margin-top: 10px;">
				<a href="index.php?controller=playlist/list" class="btn btn-success" style="margin-top: 10px;">Quay lại</a>
			</center>
			</form>
		</div>
	</div>
</div>