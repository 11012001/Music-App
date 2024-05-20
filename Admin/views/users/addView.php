<div class="col-md-8 col-md-offset-2" style="margin-top: 30px; margin-bottom: 100px;">
	<div class="panel panel-primary">
		<div class="panel-heading">Thêm người dùng</div>
		<div class="panel-body">

			<form action="index.php?controller=users/add&act=add" method="post">
				<table class="table">
					<tr>
						<td width="200px;">Tên người dùng</td>
						<td>
							<input type="text" name="username" placeholder="Tên người dùng" class="form-control" required>
						</td>
					</tr>
					<tr>
						<td>Email người dùng</td>
						<td>
							<input type="email" name="email" placeholder="Email người dùng" class="form-control" required>
						</td>
					</tr>
					<tr>
						<td>Mật khẩu người dùng</td>
						<td>
							<input type="password" name="password1" placeholder="Mật khẩu" class="form-control" required>
						</td>
					</tr>
					<tr>
						<td>Nhập lại mật khẩu</td>
						<td>
							<input type="password" name="password2" placeholder="Nhập lại mật khẩu" class="form-control" required>
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
							<input type="submit" value="Tạo tài khoản" class="btn btn-primary">
							<a href="index.php?controller=users/list" class="btn btn-success">Quay lại</a>
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</div>