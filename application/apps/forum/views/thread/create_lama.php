<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="page-header">
                <h1>Create New Thread</h1>
            </div>

            <?php if (isset($error)): ?>
            <div class="alert alert-error">
                <a class="close" data-dismiss="alert" href="#">&times;</a>
                <h4 class="alert-heading">Error!</h4>
                <?php if (isset($error['title'])): ?>
                    <div>- <?php echo $error['title']; ?></div>
                <?php endif; ?>
                <?php if (isset($error['slug'])): ?>
                    <div>- <?php echo $error['slug']; ?></div>
                <?php endif; ?>  
                <?php if (isset($error['category'])): ?>
                    <div>- <?php echo $error['category']; ?></div>
                <?php endif; ?>  
                <?php if (isset($error['post'])): ?>
                    <div>- <?php echo $error['post']; ?></div>
                <?php endif; ?>  
            </div>
            <?php endif; ?>

             <form class="well" action="" method="post" style="margin: 5px 10px;">
                <script>
                $(function() {
                    $('#title').change(function() {
                        var title = $('#title').val().toLowerCase().replace(/[^a-z0-9\s]/gi, '').replace(/[_\s]/g, '-');
                        $('#slug').val(title);
                    });
                });
                </script>
                
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" id="title" name="row[title]" class="form-control" placeholder="">
                </div>

                <div class="form-group">
                    <label>Slug (url friendly)</label>
                    <input type="text" id="slug" name="row[slug]" class="form-control" placeholder="">
                </div>

                <div class="form-group">
                    <label>Category</label>
                    <select class="form-control" name="row[category_id]">
                        <option value="0">-- none --</option>  
                        <?php foreach ($categories as $cat): ?>
                        <option value="<?php echo $cat['id']; ?>"><?php echo $cat['name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>First Post</label>
                    <textarea name="row_post[post]" id="firstpost"  rows="8" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <input type="submit" style="margin-top:15px;font-weight: bold;" name="btn-create" class="btn btn-primary btn-large" value="Create Thread"/>
                </div>
           </form>

        </div>
    </div>
</div>


   
