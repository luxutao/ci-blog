<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Article</a>
    </li>
    <li class="breadcrumb-item active">Article List</li>
</ol>

<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> Article List</div>
    <div class="card-body">
        <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th class="text-center">id</th>
                <th class="text-center">title</th>
                <th class="text-center">subtitle</th>
                <th class="text-center">content</th>
                <th class="text-center">create_time</th>
                <th class="text-center">status</th>
                <th class="text-center">views</th>
                <th class="text-center">handle</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th class="text-center">id</th>
                <th class="text-center">title</th>
                <th class="text-center">subtitle</th>
                <th class="text-center">content</th>
                <th class="text-center">create_time</th>
                <th class="text-center">status</th>
                <th class="text-center">views</th>
                <th class="text-center">handle</th>
            </tr>
            </tfoot>
            <tbody>
            <?php foreach($this->article_model->get_article()->result() as $k => $v) { ?>
                <tr>
                    <td class="text-center"><?php echo $v->id ?></td>
                    <td class="text-center"><?php echo $v->title ?></td>
                    <td class="text-center"><?php echo $v->subtitle ?></td>
                    <td class="text-center"><?php echo htmlentities($v->content,ENT_QUOTES,'UTF-8') ?></td>
                    <td class="text-center"><?php echo $v->create_time ?></td>
                    <td class="text-center"><?php echo $v->status == "0" ? 'draft' : 'publish' ?></td>
                    <td class="text-center"><?php echo $v->views ?></td>
                    <td class="text-center">
                        <a href="/article/delete?id=<?php echo $v->id ?>"><i class="fa fa-times"></i>
                        </a> 
                        <a href="/article/edit?id=<?php echo $v->id ?>"><i class="fa fa-pencil"></i>
                        </a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        </div>
    </div>
    <div class="card-footer small text-muted">Now <?php echo date('Y-m-d H:i:s'); ?></div>
    </div>
