<?php $this->load->view('_blocks/header_admin'); ?>
<div id="content" class="container">
    <p class="pull-right"><a class="btn btn-default" href="<?php echo base_url('blog/manage_user'); ?>">Back</a></p>
<p><?php echo $sub_judul ?></p>

<?php if(!empty($message)) echo '<div id="infoMessage" class="alert alert-warning"><i class="fa fa-warning"></i> '.$message.'</div>';?>

<?php echo form_open($post_url, array('class' => 'form-horizontal'));?>
		
		
		<div class="form-group">
           <label class="col-sm-2 control-label">Status</label>
            <div class="col-sm-3">
			<?php
			 $options = array(
					'N'  => 'Aktif',
					'Y'  => 'Blokir',
					);
echo form_dropdown('status', $options, $status, 'class="form-control"'); 
?>
			</div>
		</div>
		
      <div class="form-group">
             <label class="col-sm-2 control-label">Nama Lengkap</label>
           <div class="col-sm-3">
			 <input type="text" class="form-control" name="nama" value="<?php echo $nama?>">
			</div>
      </div>

		<div class="form-group">
           <label class="col-sm-2 control-label">Username</label>
            <div class="col-sm-3">
			 <input type="text" class="form-control" name="username" value="<?php echo $username?>">
			</div>
		</div>

      <div class="form-group">
            <label class="col-sm-2 control-label">Email</label>
             <div class="col-sm-3">
			 <input type="text" class="form-control" name="email" value="<?php echo $email ?>">
			</div>
      </div>

      <div class="form-group">
           <label class="col-sm-2 control-label">No. Handphone</label>
            <div class="col-sm-3">
			 <input type="text" class="form-control" name="hp" value="<?php echo $hp?>">
			</div>
      </div>

	  <div class="form-group">
           <label class="col-sm-2 control-label">Password Lama</label>
            <div class="col-sm-3">
			 	***********                <small><i><a href="#" id="ubah">ubah password</a><a href="#" id="batal">batal ubah password</a></i></small>
			</div>
      </div>
	  
      <div class="form-group kotak">
            <label class="col-sm-2 control-label">Password</label> 
             <div class="col-sm-3">
			 <input type="text" class="form-control" name="password">
			</div>
      </div>

      <div class="form-group kotak">
            <label class="col-sm-2 control-label">Confirm Password</label>
             <div class="col-sm-3">
			 <input type="text" class="form-control" name="password_fix">
			</div>
      </div>

	<div class="form-group">
           <label class="col-sm-2 control-label">Roles</label>
            <div class="col-sm-3">
			 <select name="role" class="form-control">
			 <option value="">Pilih role</option>
			 <?php
				foreach($role->result() as $row) { ?>
				<option value="<?php echo $row->id?>" <?php if($row->id == $p_role) { echo "selected = 'selected'";} ?>>
				<?php echo $row->role ?>
				</option>
				<?php } ?>
			 </select>
			</div>
		</div>
		
      <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10"><?php echo form_submit(array('name' => 'submit', 'value' => 'Create', 'class' => 'btn btn-primary btn-large'));?></div>
      </div>

<?php echo form_close();?>


<?php $this->load->view('_blocks/footer'); ?>

	<script>
$(function() {
$(".kotak").hide();
$("#batal").hide();


$("#ubah").click(function(){
$("#ubah").hide();
$("#batal").show();
$(".kotak").show();
$('#submit').prop('disabled', true);
});

$("#batal").click(function(){
$("#ubah").show();
$("#batal").hide();
$(".kotak").hide();
$("#pass").val("");
$("#password2").val("");
$('#submit').prop('disabled', false);
});

$('#password2').keyup(function(){
if($(this).val() == $("#pass").val()){
$('#submit').prop('disabled', false);
}
else{
$('#submit').prop('disabled', true);
}	
});

$("#aside").click(function(){
$(this).hide();
});

});
</script>