<div class="col-md-12">
	<div class="panel panel-primary">
		<div class="panel-heading">Chỉnh sửa bài nhạc</div>
		<div class="panel-body">
			<form action="index.php?controller=music/edit&act=edit&id=<?php echo $value["maBH"] ?>" method="post" enctype="multipart/form-data">
				<div class="col-md-3">
					<?php if(isset($value["Anh"]) && $value["Anh"]!=""){ ?>
						<img src="../<?php echo $value["Anh"] ?>" alt="" width="100%">
					<?php } ?>
					<input type="file" name="image">
				</div>
				<div class="col-md-9">
					<input type="text" name="name" value="<?php echo $value["tenBH"] ?>" class="form-control" style="margin-bottom: 10px;">
					<select name="catalog" class="form-control" class="form-control" style="margin-bottom: 10px;">
						<?php
							$data = $this->Model->fetch("select * from chude");
							foreach ($data as $key) {
						?>
							<option value="<?php echo $key["maCD"]?>"
								<?php echo isset($value["maCD"])&&$value["maCD"]==$key["maCD"]?"selected":""; ?>
							><?php echo $key["tenCD"] ?></option>
						<?php } ?>
					</select>
					<div style="margin-bottom: 10px;">
						<select name="casi" class="form-control" style="margin-top: 10px; padding: 3px;">
								<?php
							$data = $this->Model->fetch("select * from nghesi");
							foreach ($data as $key) {
						?>
							<option value="<?php echo $key["maCS"]?>"
								<?php echo isset($value["maCS"])&&$value["maCS"]==$key["maCS"]?"selected":""; ?>
							><?php echo $key["tenCS"] ?></option>
						<?php } ?>
							</select>
					</div>
					<select name="moi" class="form-control" style="margin-bottom: 10px">
								<option value="Có">Có</option>
								<option value="Không">Không</option>
								
						</select>
					<?php if(isset($value["link"]) && $value["link"]!=""){ ?>
						<img src="../<?php echo $value["link"] ?>" alt="" width="100%">
					<?php } ?>
					<input type="file" name="song">
					<br>
					<!-- btn -->
					<center>
					<input type="submit" class="btn btn-primary" value="Cập nhật">
					<a href="index.php?controller=music/list" class="btn btn-success">Quay lại</a>
						</center>
				</div>
			</form>
		</div>
	</div>
</div>