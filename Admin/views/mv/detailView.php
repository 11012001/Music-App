<div class="col-md-12">
	<div class="panel panel-primary">
		<div class="panel-heading">Chi tiết MV</div>
		<div class="panel-body">
			<div class="col-md-3">
				<img src="../<?php echo $value["Anh"] ?>" alt="Error" width="100%" />
			</div>
			<div class="col-md-9">
				<h2 style="margin: 0;">
					<?php echo $value["tenMV"] ?>
				</h2>
				<p style="margin-top: 10px; font-style: italic">
					<b>Thuộc danh mục: </b>
					<?php
						$loaimv = $this->Model->fetchOne("select * from loaimv where maLMV=".$value["maLMV"]);
						if(isset($loaimv["maLMV"]))
							echo $loaimv["tenLMV"];
					?>
				</p>
				<p style="margin-top: 10px; font-style: italic">
					<b>Ca sĩ: </b>
					<?php
						$casi = $this->Model->fetchOne("select * from nghesi where maCS=".$value["maCS"]);
						if(isset($casi["maCS"]))
							echo $casi["tenCS"];
					?>
				</p>
				<p>
					<b>Quốc gia:</b>
					<?php
						echo $value["Quocgia"]
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
				<a href="index.php?controller=mv/edit&id=<?php echo $value["maMV"];?>" class="btn btn-primary">Cập nhật</a>
				<a href="index.php?controller=mv/list" class="btn btn-success">Quay lại</a>
			</div>
		</div>
	</div>
</div>
