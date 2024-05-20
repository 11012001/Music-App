<div class="col-md-12">
	<div class="panel panel-primary">
		<div class="panel-heading">Chỉnh sửa MV</div>
		<div class="panel-body">
			<form action="index.php?controller=mvtl/edit&act=edit&id=<?php echo $value["maMV"] ?>" method="post" enctype="multipart/form-data">
				<div class="col-md-3">
					<?php if(isset($value["AnhMV"]) && $value["AnhMV"]!=""){ ?>
						<img src="../<?php echo $value["AnhMV"] ?>" alt="" width="100%">
					<?php } ?>
					<input type="file" name="image">
				</div>
				<div class="col-md-9">
					<input type="text" name="name" value="<?php echo $value["tenMV"] ?>" class="form-control" style="margin-bottom: 10px;">
					
					<select name="iduser" class="form-control" style="margin-bottom: 10px;">
						<?php
							$data = $this->Model->fetch("select * from users");
							foreach ($data as $key) {
						?>
							<option value="<?php echo $key["id"]?>"
								<?php echo isset($value["id"])&&$value["id"]==$key["id"]?"selected":""; ?>
							><?php echo $key["name"] ?></option>
						<?php } ?>
					</select>
				
					<?php if(isset($value["Link"]) && $value["Link"]!=""){ ?>
						<img src="../<?php echo $value["Link"] ?>" alt="" width="100%">
					<?php } ?>
					<input type="file" name="mv">
					<!-- btn -->
					<center>
					<input type="submit" class="btn btn-primary" value="Cập nhật">
					<a href="index.php?controller=mvtl/list" class="btn btn-success">Quay lại</a></center>
				</div>
			</form>
		</div>
	</div>
</div>