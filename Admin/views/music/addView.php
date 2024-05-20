<div class="col-md-12" style="margin-top:20px;">
	<div class="panel panel-primary">
		<div class="panel-heading">Thêm bài nhạc</div>
		<div class="panel-body">
			<form action="index.php?controller=music/add&act=add" method="post" enctype="multipart/form-data">
				<table cellpadding="3" style="width: 100%;">
					<tr>
						<th width="10%">Tên bài nhạc</th>
						<td width="90%">
							<input type="text" name="name" placeholder="Tên bài nhạc" class="form-control" required>
						</td>
					</tr>
					<!-- upload image -->
					<tr>
						<th>Ảnh</th>
						<td>
							<input type="file" name="image" style="padding-top: 10px;">
						</td>
					</tr>
					<!-- end upload -->
					<!-- catalog -->
					<tr>
						<th>Chủ đề</th>
						<td>
							<select name="catalog" class="form-control" style="margin-top: 10px; padding: 3px;">
								<?php
									$data = $this->Model->fetch("select * from chude");
									foreach ($data as $value) {
								?>
								<option value="<?php echo $value["maCD"];?>"><?php echo $value["tenCD"];?></option>
								<?php } ?>
							</select>
						</td>
					</tr>
					<!-- end catalog -->
					<tr>
						<th>Ca sĩ</th>
						<td>
							<select name="description" class="form-control" style="margin-top: 10px; padding: 3px;">
								<?php
									$data = $this->Model->fetch("select * from nghesi");
									foreach ($data as $value) {
								?>
								<option value="<?php echo $value["maCS"];?>"><?php echo $value["tenCS"];?></option>
								<?php } ?>
							</select>
						</td>
					</tr>
					<tr>
						<th>Nhạc mới</th>
						<td>
							<select name="moi" class="form-control" style="margin-top: 10px;margin-bottom:10px; padding: 3px;">
								
								<option value="Có">Có</option>
								<option value="Không">Không</option>								
							</select>
						</td>
					</tr>
					<tr>
						<th>Link nhạc</th>
						<td>
							<input type="file" name="song" style="padding-top: 10px;">
						</td>
					</tr>
				</table>
				<center>
				<input type="submit" class="btn btn-primary" value="Thêm nhạc" style="margin-top: 10px;">
				<a href="index.php?controller=music/list" class="btn btn-success" style="margin-top: 10px;">Quay lại</a>
					</center>
			</form>
		</div>
	</div>
</div>