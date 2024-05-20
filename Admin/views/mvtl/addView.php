<div class="col-md-12" style="margin-top:20px;">
	<div class="panel panel-primary">
		<div class="panel-heading">Thêm MV</div>
		<div class="panel-body">
			<form action="index.php?controller=mvtl/add&act=add" method="post" enctype="multipart/form-data">
				<table cellpadding="3" style="width: 100%">
					<tr>
						<th width="10%">Tên MV</th>
						<td width="90%">
							<input type="text" name="name" placeholder="Tên bài nhạc" class="form-control" required>
						</td>
					</tr>
					<tr>
						<th>User</th>
						<td>
							<select name="id" class="form-control" style="margin-top: 10px; padding: 3px;">
								<?php
									$data = $this->Model->fetch("select * from users");
									foreach ($data as $value) {
								?>
								<option value="<?php echo $value["id"];?>"><?php echo $value["name"];?></option>
								<?php } ?>
							</select>
						</td>
					</tr>
					<tr>
						<th>Ảnh</th>
						<td>
							<input type="file" name="image" style="padding-top: 10px;">
						</td>
					</tr>
					<tr>
						<th>Link MV</th>
						<td>
							<input type="file" name="mv" style="padding-top: 10px;" required>
						</td>
					</tr>
				</table>
				<center>
				<input type="submit" class="btn btn-primary" value="Thêm MV" style="margin-top: 10px;">
				<a href="index.php?controller=mvtl/list" class="btn btn-success" style="margin-top: 10px;">Quay lại</a></center>
			</form>
		</div>
	</div>
</div>