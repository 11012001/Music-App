<div class="col-md-8 col-md-offset-2" style="margin-top: 30px; margin-bottom: 100px;">
	<div class="panel panel-primary">
		<div class="panel-heading">Sửa thông người dùng</div>
		<div class="panel-body">

			<?php if(isset($_GET["err"]) && $_GET["err"]=="false"){ ?>
				<div class="alert alert-danger">
					Nhập lại mật khẩu không đúng
				</div>
			<?php } ?>

			<form action="index.php?controller=users/edit&act=edit&id=<?php echo $value["id"]; ?>" method="post">
				<table class="table">
					<tr>
						<td>Email người dùng</td>
						<td>
							<input type="email" name="email" value="<?php echo $value["email"] ?>" class="form-control" readonly>
						</td>
					</tr>
					<tr>
						<td width="200px;">Tên người dùng</td>
						<td>
							<input type="text" name="username" value="<?php echo $value["name"] ?>" class="form-control" required>
						</td>
					</tr>
					<tr>
						<td>Mật khẩu người dùng</td>
						<td>
							<input type="password" name="password" placeholder="Nếu muốn thay đổi mật khẩu thì mời nhập vào" class="form-control">
						</td>
					</tr>
					<tr>
						<td>Quyền</td>
						<td>
							<select name="Quyen" class="form-control" style="margin-top: 10px;margin-bottom:10px; padding: 3px;">
								
								<option value="0">User</option>
								<option value="1">Admin</option>
																
							</select>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" value="Cập nhật thông tin" class="btn btn-primary">
							<a href="index.php?controller=users/list" class="btn btn-success">Quay lại</a>
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</div>