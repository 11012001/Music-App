<div class="col-md-12" style="margin-top:20px;">
	<div class="panel panel-primary">
		<div class="panel-heading">Thêm MV</div>
		<div class="panel-body">
			<form action="index.php?controller=mv/add&act=add" method="post" enctype="multipart/form-data">
				<table cellpadding="3" style="width: 100%">
					<tr>
						<td width="10%">Tên MV</td>
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
						<td>Chủ đề</td>
						<td>
							<select name="loaimv" class="form-control" style="margin-top: 10px; padding: 3px;">
								<?php
									$data = $this->Model->fetch("select * from loaimv");
									foreach ($data as $value) {
								?>
								<option value="<?php echo $value["maLMV"];?>"><?php echo $value["tenLMV"];?></option>
								<?php } ?>
							</select>
						</td>
					</tr>
					<tr>
						<td>Ca sĩ</td>
						<td>
							<select name="casi" class="form-control" style="margin-top: 10px; padding: 3px;">
								<?php
									$data = $this->Model->fetch("select * from nghesi");
									foreach ($data as $value) {
								?>
								<option value="<?php echo $value["maCS"];?>"><?php echo $value["tenCS"];?></option>
								<?php } ?>
							</select>
						</td>
					</tr>
					<!-- end catalog -->
					<tr>
						<td>Quốc gia</td>
						<td>
							<select name="quocgia" class="form-control" style="margin-top: 10px;margin-bottom:10px; padding: 3px;">
								
								<option value="Việt Nam">Việt Nam</option>
								<option value="Âu Mỹ">Âu Mỹ</option>
								<option value="Châu Á">Châu Á</option>
								
							</select>
						</td>
					</tr>
					<tr>
						<br><td>Link MV</td>
						<td>
							<input type="file" name="mv" style="padding-top: 10px;" required>
						</td>
					</tr>
				</table>
				<center>
				<input type="submit" class="btn btn-primary" value="Thêm MV" style="margin-top: 10px;">
				<a href="index.php?controller=mv/list" class="btn btn-success" style="margin-top: 10px;">Quay lại</a></center>
			</form>
		</div>
	</div>
</div>