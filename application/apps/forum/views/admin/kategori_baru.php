<div id="content" class="container">
    <p class="pull-right"><a class="btn btn-default" href="<?php echo base_url('blog/manage_user'); ?>">Back</a></p>
<p><?php echo $sub_judul ?></p>

<?php if(!empty($message)) echo '<div id="infoMessage" class="alert alert-warning"><i class="fa fa-warning"></i> '.$message.'</div>';?>

<?php echo form_open("", array('class' => 'form-horizontal'));?>
		<?php if (isset($error)): ?>
        <div class="alert alert-error">
            <a class="close" data-dismiss="alert" href="#">&times;</a>
            <h4 class="alert-heading">Error!</h4>
            <?php if (isset($error['name'])): ?>
                <div>- <?php echo $error['name']; ?></div>
            <?php endif; ?>
            <?php if (isset($error['slug'])): ?>
                <div>- <?php echo $error['slug']; ?></div>
            <?php endif; ?>  
        </div>
        <?php endif; ?>  
        <?php if (isset($tmp_success)): ?>
        <div class="alert alert-success">
            <a class="close" data-dismiss="alert" href="#">&times;</a>
            <h4 class="alert-heading">New category added!</h4>
        </div>
        <?php endif; ?>
        <script>
        $(function() {
		
            $('#name').change(function() {
                var name = $('#name').val().toLowerCase().replace(/[^a-z0-9\s]/gi, '').replace(/[_\s]/g, '-');
                $('#slug').val(name);
            });
        });
        </script>
		
		
      <div class="form-group">
             <label class="col-sm-2 control-label">Nama Kategori</label>
           <div class="col-sm-3">
			 <input type="text" class="form-control" name="row[name]" id="name">
			</div>
      </div>

		<div class="form-group">
           <label class="col-sm-2 control-label">Slug</label>
            <div class="col-sm-3">
			 <input type="text" class="form-control" name="row[slug]" id="slug">
			</div>
		</div>

     	<div class="form-group">
           <label class="col-sm-2 control-label">Parent</label>
            <div class="col-sm-3">
			 <select id="select01" name="row[parent_id]" class="form-control">
			 <option value="0"> -- </option>
			
				<?php foreach ($categories as $cat): ?>
                <option value="<?php echo $cat['id']; ?>"><?php echo $cat['name']; ?></option>
                <?php endforeach; ?>
				
			 </select>
			</div>
		</div>
		
      <div class="form-group">
	    <label class="col-sm-2 control-label"></label>
	   <div class="col-sm-3">
         <input type="submit" class="btn btn-primary btn-large" name="btn-create" value="Simpan Kategori"/>
		 </div>
      </div>

<?php echo form_close();?>




