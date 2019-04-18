<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Tag</a>
    </li>
    <li class="breadcrumb-item active">Edit Tag</li>
</ol>

<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-pencil"></i> Edit Tag
    </div>
    <div class="card-body">
        <?php echo form_open('tag/edit?id=' . $id,array("class" => "form-horizontal")); ?>
            <div class="row">
                <div class="col-lg-12"><h4>基本</h4></div>
                <div class="col-lg-2">
                    <label class="control-label pull-right">Showname</label>
                </div>
                <div class="col-lg-9" style="margin-bottom:45px;">
                    <input type="text" class="form-control" placeholder="Showname" name="show_name">
                </div>
                <div class="col-lg-2">
                    <label class="control-label pull-right">Valuename</label>
                </div>
                <div class="col-lg-9" style="margin-bottom:45px;">
                    <input type="text" class="form-control" placeholder="Valuename" name="value_name">
                </div>
                <div class="col-lg-2">
                    <label class="control-label pull-right">Description</label>
                </div>
                <div class="col-lg-9" style="margin-bottom:45px;">
                    <textarea rows="10" class="form-control" name="desc"></textarea>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="col-lg-2">
                    <label class="control-label pull-right"></label>
                </div>
                <div class="col-lg-9" style="margin-bottom:45px;">
                    <input type="submit" class="btn btn-info" value="提交">
                </div>
            </div>
        <?php echo form_close(); ?>
    </div>
    <div class="card-footer small text-muted">Now <?php echo date('Y-m-d H:i:s'); ?></div>
</div>
<script>
    var $id = <?php echo $id; ?>
</script>