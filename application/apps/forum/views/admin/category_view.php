<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="page-header">
                <h1>Kategori Forum</h1>
            </div>

            <?php if (isset($tmp_success_del)): ?>
                <div class="alert alert-info">
                    <a class="close" data-dismiss="alert" href="#">&times;</a>
                    <h4 class="alert-heading">Category deleted!</h4>
                </div>
            <?php endif; ?>


            <table class="table table-striped">
                <thead>
                    <tr>
                        <th width="38%">Category</th>
                        <th width="38%">Slug</th>
                        <th width="12%"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($categories as $cat): ?>
                        <tr>
                            <td><?php echo $cat['name']; ?></td>
                            <td><?php echo $cat['slug']; ?></td>
                            <td style="text-align: center;">
                                <a class="btn btn-default" title="edit" href="<?php echo site_url('admin/category_edit').'/'.$cat['id']; ?>"><i class="fa fa-edit"></i></a>
                                <a class="btn btn-danger" title="delete" class="del" id="cat_id_<?php echo $cat['id']; ?>" href="<?php echo site_url('admin/category_delete').'/'.$cat['id']; ?>"><i class="fa fa-eraser"></i></a> 
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>

<style>table td {padding:7px !important;}</style>

<script>
    $(function() {
        $('#modalConfirm').modal({
            keyboard: true,
            backdrop: true,
            show: false
        });

        var cat_id;

        $('.del').click(function() {
            cat_id = $(this).attr('id').replace("cat_id_", "");
            $('#modalConfirm').modal('show');
            return false;
        });

        $('#btn-delete').click(function() {
            window.location = '<?php echo site_url('admin/category_delete'); ?>/'+cat_id;
        });
    })
</script>


<div class="modal hide" id="modalConfirm">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3>Delete Category</h3>
    </div>
    <div class="modal-body">
        <p style="text-align: center;">Are you sure want to delete this category ?</p>
    </div>
    <div class="modal-footer" style="text-align: center;">
        <a href="#" class="btn" data-dismiss="modal">Cancel</a>
        <a href="#" class="btn btn-primary" id="btn-delete">Delete</a>
    </div>
</div>