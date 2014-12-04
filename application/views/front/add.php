<div class="container">
	<form role="form" method="post" action="<?php echo base_url('location/add_location_exec') ?>" style="margin-bottom: 50px" class="row">
		<div class="col-xs-12 col-sm-4">
			<div class="form-group">
				<label for="">Tên địa điểm</label>
				<input type="text" class="form-control" id="" placeholder="" name="name">
			</div>
			<div class="form-group">
				<label for="">Địa chỉ</label>
				<input type="text" class="form-control" id="" placeholder="" name="address">
			</div>
			<div class="form-group">
				<label for="">Tỉnh</label>
				<select name="province" id="" class="form-control">
					<option value="1">Hà Nội</option>
					<option value="2">Thái Bình</option>
				</select>
			</div>
			<div class="form-group">
				<label for="">Tọa độ</label>
				<input type="text" class="form-control" id="" placeholder="" name="coordination">
				<p style="font-size: 0.8em; font-style: italic">Ví dụ: 21.027424,105.832716. Hướng dẫn tại <a href="https://support.google.com/maps/answer/18539?hl=vi">đây</a>. Lấy tọa độ tại <a href="https://www.google.com/maps">đây</a></p>
			</div>
			<div class="form-group">
				<label for="">Hình đại diện</label>
				<input type="text" class="form-control" id="" placeholder="" name="icon" value="http://localhost/resource/icon/200_flat_icons/png/64px/1.png">
			</div>
			<button type="submit" class="btn btn-success">Tạo</button>
		</div>
		<div class="col-xs-12 col-sm-8">
			<div class="form-group">
				<label for="">Sơ lược</label>
				<p style="font-size: 0.8em; font-style: italic">Sẽ hiển thị cùng logo của bạn trên bản đồ</p>
				<textarea name="brief" id="brief" cols="30" rows="5" class="form-control" placeholder="Nhập thông tin sơ lược sẽ hiển thị trên map"></textarea>
			</div>
			<div class="form-group">
				<label for="">Trang catalog</label>
				<textarea name="detail" id="detail" cols="30" rows="10" class="form-control" placeholder="Viết trang catalog của bạn tại đây"></textarea>
			</div>
		</div>
	</form>

	<script src="<?php echo base_url('assets/ebz/plugins/ckeditor/ckeditor.js');?>"></script>
	<script>
		CKEDITOR.replace( 'detail', {
			customConfig: 'config_full.js'
		});
	</script>
</div>