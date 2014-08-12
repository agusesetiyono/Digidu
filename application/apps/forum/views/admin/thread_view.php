<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="page-header">
                <h1>List of Threads</h1>
            </div>

            <?php if (isset($tmp_success)): ?>
                <div class="alert alert-info">
                    <a class="close" data-dismiss="alert" href="#">&times;</a>
                    <h4 class="alert-heading">Thread updated!</h4>
                </div>
            <?php endif; ?>
            <?php if (isset($tmp_success_del)): ?>
                <div class="alert alert-info">
                    <a class="close" data-dismiss="alert" href="#">&times;</a>
                    <h4 class="alert-heading">Thread deleted!</h4>
                </div>
            <?php endif; ?>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th width="5%" style="text-align:center;">No</th>
                        <th width="75%">Threads</th>
                        <th width="10%"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($threads as $key => $thread): ?>
                        <tr>
                            <td style="text-align:center;"><?php echo $key + 1 + $start; ?></td>
                            <td>
                                <a class="linkviewtip" title="Go to: <?php echo $thread->title; ?>" href="<?php echo site_url('forum/thread/talk/'.$thread->slug); ?>"><?php echo $thread->title; ?></a>
                                <span style="display:block;font-size: 10px;font-style: italic;"><?php echo $thread->cat_name; ?></span>
                            </td>
                            <td style="text-align: center;"><a class="btn btn-default" title="edit" href="<?php echo site_url('forum/admin/thread_edit').'/'.$thread->id; ?>"><i class="fa fa-edit"></i></a> 
                            <a class="btn btn-danger" title="delete" class="del" id="thread_id<?php echo $thread->id; ?>" href="<?php echo site_url('forum/admin/thread_delete').'/'.$thread->id; ?>"><i class="fa fa-eraser"></i></a> </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <div style="text-align:center;">
                <ul class="pagination"><?php echo $page; ?></ul>
            </div>

        </div>
    </div>
</div>

    <script>
        $(function() {
            $('#modalConfirm').modal({
                keyboard: true,
                backdrop: true,
                show: false
            });

            var cat_id;

            $('.del').click(function() {
                thread_id = $(this).attr('id').replace("thread_id", "");
                $('#modalConfirm').modal('show');
                return false;
            });

            $('#btn-delete').click(function() {
                window.location = '<?php echo site_url('forum/admin/thread_delete'); ?>/'+thread_id;
            });
        })
    </script>
    <div class="modal hide" id="modalConfirm">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h3>Delete Category</h3>
        </div>
        <div class="modal-body">
            <p style="text-align: center;">
            Are you sure want to delete this thread ?
            <br/>
            <span style="font-weight: bold;color:#ff0000;font-size: 14px;">All posts in this thread will be deleted<span>
            </p>
        </div>
        <div class="modal-footer" style="text-align: center;">
            <a href="#" class="btn" data-dismiss="modal">Cancel</a>
            <a href="#" class="btn btn-primary" id="btn-delete">Delete</a>
        </div>
    </div>


        <style>
            table td {padding:7px !important;vertical-align: middle !important;}
        </style>
        <script>
            $(function() {
                $('.linkviewtip').tooltip();
            });
        </script>






