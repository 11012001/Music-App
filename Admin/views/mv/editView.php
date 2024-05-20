<div class="col-md-12">
	<div class="panel panel-primary">
		<div class="panel-heading">Chỉnh sửa MV</div>
		<div class="panel-body">
			<form action="index.php?controller=mv/edit&act=edit&id=<?php echo $value["maMV"] ?>" method="post" enctype="multipart/form-data">
				<div class="col-md-3">
					<?php if(isset($value["AnhMV"]) && $value["Anh"]!=""){ ?>
						<img src="../<?php echo $value["Anh"] ?>" alt="" width="100%">
					<?php } ?>
					<input type="file" name="image">
				</div>
				<div class="col-md-9">
					<input type="text" name="name" value="<?php echo $value["tenMV"] ?>" class="form-control" style="margin-bottom: 10px;">
					<select name="loaimv" class="form-control" style="margin-bottom: 10px;">
						<?php
							$data = $this->Model->fetch("select * from loaimv");
							foreach ($data as $key) {
						?>
							<option value="<?php echo $key["maLMV"]?>"
								<?php echo isset($value["maLMV"])&&$value["maLMV"]==$key["maLMV"]?"selected":""; ?>
							><?php echo $key["tenLMV"] ?></option>
						<?php } ?>
					</select>
					<select name="casi" class="form-control" style="margin-bottom: 10px;">
						<?php
							$data = $this->Model->fetch("select * from nghesi");
							foreach ($data as $key) {
						?>
							<option value="<?php echo $key["maCS"]?>"
								<?php echo isset($value["maCS"])&&$value["maCS"]==$key["maCS"]?"selected":""; ?>
							><?php echo $key["tenCS"] ?></option>
						<?php } ?>
					</select>
					<div style="margin-bottom: 10px;">
						<select name="quocgia" class="form-control" style="margin-top: 10px">
								<option value="Việt Nam">Việt Nam</option>
								<option value="Âu Mỹ">Âu Mỹ</option>
								<option value="Châu Á">Châu Á</option>
							</select>
					</div>
					<?php if(isset($value["Link"]) && $value["Link"]!=""){ ?>
						<img src="../<?php echo $value["Link"] ?>" alt="" width="100%">
					<?php } ?>
					<input type="file" name="mv">
					<!-- btn -->
					<center>
					<input type="submit" class="btn btn-primary" value="Cập nhật">
					<a href="index.php?controller=mv/list" class="btn btn-success">Quay lại</a></center>
				</div>
			</form>
		</div>
	</div>
</div>