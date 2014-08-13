<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h1>Edit Category</h1>
      </div>

      <form class="well" method="post" action="" >
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
            <h4 class="alert-heading">Category updated!</h4>
          </div>
        <?php endif; ?>
        
          <input type="hidden" name="row[id]" value="<?php echo $category->id; ?>"/>
          <input type="hidden" name="row[name_c]" value="<?php echo $category->name; ?>"/>
          <input type="hidden" name="row[slug_c]" value="<?php echo $category->slug; ?>"/>
          <div class="form-group">
            <label>Name</label>
            
              <input type="text" class="form-control" value="<?php echo $category->name; ?>" name="row[name]" id="input01">
           
          </div>
          <div class="form-group">
            <label>Slug</label>
            
              <input type="text" class="form-control" value="<?php echo $category->slug; ?>" name="row[slug]" id="input01">
              <p class="help-block">for url friendly address</p>
            
          </div>

          <div class="form-group">
            <label>Parent</label>
            
              <select id="select01" class="form-control" name="row[parent_id]">
                <option <?php if ($category->id == 0): ?>selected="selected"<?php endif; ?> value="0">-- none --</option>  
                <?php foreach ($categories as $cat): ?>
                  <?php if ($category->id != $cat['id']): ?>
                    <option <?php if ($category->parent_id == $cat['id']): ?>selected="selected"<?php endif; ?> value="<?php echo $cat['id']; ?>"><?php echo $cat['name']; ?></option>
                  <?php else: ?>
                    <option disabled style="background:#d3d3d3;" value="<?php echo $cat['id']; ?>"><?php echo $cat['name']; ?></option>
                  <?php endif; ?>
                <?php endforeach; ?>
              </select>
            
          </div>
          
          <div class="form-group">
            <input type="submit" name="btn-edit" class="btn btn-primary" value="Save"/>
          </div>
        
      </form>

    </div>
  </div>
</div>
