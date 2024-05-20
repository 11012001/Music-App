<div class="col-md-12">
	<div class="panel panel-primary">
		<div class="panel-heading">Chỉnh sửa Playlist</div>
		<div class="panel-body">
			<form action="index.php?controller=playlist/edit&act=edit&id=<?php echo $value["maList"] ?>" method="post" enctype="multipart/form-data">
				<div class="col-md-3">
					<?php if(isset($value["Anh"]) && $value["Anh"]!=""){ ?>
						<img src="../<?php echo $value["Anh"] ?>" alt="" width="100%">
					<?php } ?>
					<input type="file" name="image">
				</div>
				<div class="col-md-9">
					<input type="text" name="name" value="<?php echo $value["tenList"] ?>" class="form-control" style="margin-bottom: 10px;">
					<div style="margin-bottom: 10px;">
						<select name="album" class="form-control" style="margin-top: 10px; padding: 3px;">
								<?php
									$data = $this->Model->fetch("select * from album");
									foreach ($data as $album) {
								?>
								<option value="<?php echo $album["maAB"];?>"><?php echo $album["tenAB"];?></option>
								<?php } ?>
							</select>
					</div>
					<input type="submit" class="btn btn-primary" value="Cập nhật">
					<a href="index.php?controller=playlist/list" class="btn btn-success">Quay lại</a>
				</div>
			</form>
		</div>
	</div>
</div>