<div class="col-md-12">
	<div class="panel panel-primary">
		<div class="panel-heading">Chi tiết MV</div>
		<div class="panel-body">
			<div class="col-md-3">
				<img src="../<?php echo $value["AnhMV"] ?>" alt="Error" width="100%" />
			</div>
			<div class="col-md-9">
				<h2 style="margin: 0;">
					<?php echo $value["tenMV"] ?>
				</h2>
				
				<p style="margin-top: 10px; font-style: italic">
					<b>Tên User: </b>
					<?php
						$casi = $this->Model->fetchOne("select * from users where id=".$value["id"]);
						if(isset($casi["id"]))
							echo $casi["name"];
					?>
				</p>
				<p>
					<b>Ngày thêm:</b>
					<?php echo $value["dateTime"] ?>
				</p>
				<p>
					<b>Link:</b>
					<?php echo $value["Link"] ?>
				</p>
				<!-- btn -->
				<a href="index.php?controller=mvtl/edit&id=<?php echo $value["maMV"];?>" class="btn btn-primary">Cập nhật</a>
				<a href="index.php?controller=mvtl/list" class="btn btn-success">Quay lại</a>
			</div>
		</div>
	</div>
</div>
