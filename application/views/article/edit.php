<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Article</a>
    </li>
    <li class="breadcrumb-item active">Edit Article</li>
</ol>

<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-pencil"></i> Edit Article
    </div>
    <div class="card-body">
        <?php echo form_open('article/edit?id=' . $id,array("class" => "form-horizontal")); ?>
            <div class="row">
                <div class="col-lg-12"><h4>基本</h4></div>
                <div class="col-lg-2">
                    <label class="control-label pull-right">Title</label>
                </div>
                <div class="col-lg-9" style="margin-bottom:45px;">
                    <input type="text" class="form-control" placeholder="Title" name="title">
                </div>
                <div class="col-lg-2">
                    <label class="control-label pull-right">Subtitle</label>
                </div>
                <div class="col-lg-9" style="margin-bottom:45px;">
                    <input type="text" class="form-control" placeholder="Subtitle" name="subtitle">
                </div>
                <div class="hr-line-dashed"></div>
                <div class="col-lg-12"><h4>内容</h4></div>
                <div class="col-lg-2">
                    <label class="control-label pull-right">Content</label>
                </div>
                <div class="col-lg-9" style="margin-bottom:45px;" id="editor">
                </div>
                <div class="col-lg-2">
                    <label class="control-label pull-right">Content(HTML)</label>
                </div>
                <div class="col-lg-9" style="margin-bottom:45px;">
                    <textarea name="content" id="editor_html" rows="10" class="form-control" name="content"></textarea>
                    <p class="help-block">change invalid</p>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="col-lg-12"><h4>其他</h4></div>
                <div class="col-lg-2">
                    <label class="control-label pull-right">标签</label>
                </div>
                <div class="col-lg-9" style="margin-bottom:45px;">
                <select class="js-example-basic-multiple form-control" name="tag[]" multiple="multiple">
                <?php foreach($this->tag_model->get_tag()->result() as $k => $v) { ?>
                    <option value="<?php echo $v->id; ?>"><?php echo $v->show_name; ?></option>
                <?php } ?>
                </select>
                </div>
                <div class="col-lg-2">
                    <label class="control-label pull-right">状态</label>
                </div>
                <div class="col-lg-9" style="margin-bottom:45px;">
                    <select name="status" id="" class="form-control">
                        <option value="true">发布</option>
                        <option value="false">草稿</option>
                    </select>
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