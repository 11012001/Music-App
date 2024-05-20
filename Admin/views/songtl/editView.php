<div class="col-md-12">
	<div class="panel panel-primary">
		<div class="panel-heading">Chỉnh sửa bài nhạc</div>
		<div class="panel-body">
			<form action="index.php?controller=songtl/edit&act=edit&id=<?php echo $value["maBH"] ?>" method="post" enctype="multipart/form-data">
				<div class="col-md-3">
					<?php if(isset($value["AnhBH"]) && $value["AnhBH"]!=""){ ?>
						<img src="../<?php echo $value["Anh"] ?>" alt="" width="100%">
					<?php } ?>
					<input type="file" name="image">
				</div>
				<div class="col-md-9">
					<input type="text" name="name" value="<?php echo $value["tenBH"] ?>" class="form-control" style="margin-bottom: 10px;">
					<div style="margin-bottom: 10px;">
						<select name="iduser" class="form-control" style="margin-top: 10px; padding: 3px;">
								<?php
							$data = $this->Model->fetch("select * from users");
							foreach ($data as $key) {
						?>
							<option value="<?php echo $key["id"]?>"
								<?php echo isset($value["id"])&&$value["id"]==$key["id"]?"selected":""; ?>
							><?php echo $key["name"] ?></option>
						<?php } ?>
							</select>
					</div>
					<?php if(isset($value["Link"]) && $value["Link"]!=""){ ?>
						<img src="../<?php echo $value["Link"] ?>" alt="" width="100%">
					<?php } ?>
					<input type="file" name="song">
					<br>
					<!-- btn -->
					<center>
					<input type="submit" class="btn btn-primary" value="Cập nhật">
					<a href="index.php?controller=songtl/list" class="btn btn-success">Quay lại</a>
						</center>
				</div>
			</form>
		</div>
	</div>
</div>