<link href="<?= base_url('assets/bootstrap/datetimepicker/css/bootstrap-datetimepicker.min.css') ?>" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?= base_url('assets/bootstrap/datetimepicker/js/bootstrap-datetimepicker.min.js') ?>"></script>
<div class="container">
	<div class="row">
		<div class="col-lg-8">
			<br>
			<?= $this->session->flashdata('msg') ?>
			<?= form_open('kontributor/create-event') ?>
            <div class="columns_wrap">
            	<div style="margin-bottom: 5%;text-align: center;">
            		<h3>New Event</h3>
                </div>
                <div class="form-group">
                    <label>Nama Event </label>
                    <input required type="text" name="nama" class="form-control">
                </div>
                <div class="form-group">
                	<div class="row">
                		<div class="col-md-4">
                			<label>Jadwal Mulai </label>
		                    <div class="input-append date form_datetime">
			                    <input required type="text" name="date_mulai">
			                    <span class="add-on"><i class="icon-th"></i></span>
						    </div>
                		</div>
                		<div class="col-md-4">
                			<label>Jadwal Selesai </label>
		                    <div class="input-append date form_datetime">
			                    <input required type="text" name="date_selesai">
			                    <span class="add-on"><i class="icon-th"></i></span>
						    </div>
                		</div>
                	</div>
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                   	<textarea required name="deskripsi" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>Score</label>
                    <input min="0" required type="number" name="score" class="form-control">
                </div>
                <div class="form-group">
                    <label>Password Event</label>
                    <input required type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <label>Confirm Password Event</label>
                    <input required type="password" name="confirm_password" class="form-control">
                </div>
                <input type="submit" name="create" class="btn btn-success btn-lg" value="Buat Event">
            </div>
		    <?= form_close() ?>
        </div>
    </div>
</div>
<br>

<script type="text/javascript">
	$(document).ready(function() {
		$('body').removeClass('home page body_style_fullscreen body_filled article_style_stretch layout_single-standard top_panel_style_dark top_panel_opacity_transparent top_panel_show top_panel_over menu_right user_menu_show sidebar_hide');
		$('body').addClass('error404 body_style_wide body_filled article_style_stretch layout_excerpt top_panel_style_dark top_panel_opacity_solid top_panel_above menu_right sidebar_hide');
		$('#home').removeClass('current-menu-ancestor current-menu-parent');
		$('#course').addClass('current-menu-ancestor current-menu-parent');

	});

    $(".form_datetime").datetimepicker({
        format: "yyyy-mm-dd hh:ii:ss"
    });
</script>	
<script type="text/javascript" src="<?= base_url('assets/ectc/education/js/jquery/ui/mouse.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/ectc/education/js/jquery/ui/draggable.min.js') ?>"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="<?= base_url('assets/ectc/education/js/core.googlemap.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/ectc/education/js/core.reviews.min.js') ?>"></script>