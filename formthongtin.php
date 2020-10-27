<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function kiemtra() {
			var hoten = document.all.txtname.value;
			if (hoten == '') {
				alert('Họ tên không được để trống')
				document.all.txthoten.focus();
				return;
			}
			var phone = document.all.txtphone.value;
			if (phone == '') {
				alert('Số điện thoại không được để trống');
				document.all.txtphone.focus();
				return;
			}
			if (isNaN(phone) == true) {
				alert('Số điện thoại phải là số');
				document.all.txtphone.focus();
				return;
			}

			

		}
	</script>
	<?php
	  include('connect.php');


		$sqltp = 'select * from nv4_vi_location_province';
		$tp = $con->query($sqltp);	

		$sqlqh = 'select * from nv4_vi_location_district';
		$qh = $con->query($sqlqh);

		$sqlxp = 'select *from nv4_vi_location_ward';
		$xp =$con->query($sqlxp)
	?>
</head>
<form action="xulythongtin.php" method="post">
	<table border="1">
		<tr>
			<td colspan="2" align="center"><b>Thông Tin></td>
		</tr>
		<tr>
			<td>Họ tên:</td>
			<td><input type="text" name="txtname" ></td>
		</tr>
		<tr>
			<td>Điện thoại:</td>
			<td><input type="text" name="txtphone"></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="text" name="txtemail"></td>
		</tr>
		<tr>
			<td rowspan="3">Địa chỉ:</td>
			<td><p>Thành phố :</p>
				<select name="thanhpho" id="thanhpho">
					<?php
						foreach ($tp as $row) {
					?>
						<option><?php echo $row['alias'] ?></option>
					<?php
						}
					?>
				</select>
			</td>
		</tr>
		<tr>			
			<td><p>Quận/Huyện :</p>
				<select name="quanhuyen" id="quanhuyen">
					<?php
						foreach ($qh as $row) {
					?>
						<option><?php echo $row['alias'] ?></option>
					<?php
						}
					?>
				</select>
			</td>
		</tr>
		<tr>			
			<td><p>Xã/Phường :</p>
				<select name="xaphuong" id="xaphuong">
					<?php
						foreach ($xp as $row) {
					?>
						<option><?php echo $row['alias'] ?></option>
					<?php
						}
					?>
				</select>
			</td>
		</tr>	
		<tr>
			<td colspan="2" align="center"><input type="submit" onclick="kiemtra()" name="" value="Nhập">
			<input type="reset" name="" value="Reset"></td>
		</tr>
	</table>
</form>
</html>