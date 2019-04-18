<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Tag</a>
    </li>
    <li class="breadcrumb-item active">Tag List</li>
</ol>

<div class="card mb-3">
    <div class="card-header">
        <i class="fa fa-table"></i> Tag List</div>
    <div class="card-body">
        <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th class="text-center">id</th>
                <th class="text-center">show_name</th>
                <th class="text-center">value_name</th>
                <th class="text-center">desc</th>
                <th class="text-center">create_time</th>
                <th class="text-center">handle</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th class="text-center">id</th>
                <th class="text-center">show_name</th>
                <th class="text-center">value_name</th>
                <th class="text-center">desc</th>
                <th class="text-center">create_time</th>
                <th class="text-center">handle</th>
            </tr>
            </tfoot>
            <tbody>
            <?php foreach($this->tag_model->get_tag()->result() as $k => $v) { ?>
                <tr>
                    <td class="text-center"><?php echo $v->id ?></td>
                    <td class="text-center"><?php echo $v->show_name ?></td>
                    <td class="text-center"><?php echo $v->value_name ?></td>
                    <td class="text-center"><?php echo htmlentities($v->desc,ENT_QUOTES,'UTF-8') ?></td>
                    <td class="text-center"><?php echo $v->create_time ?></td>
                    <td class="text-center">
                        <a href="/tag/delete?id=<?php echo $v->id ?>"><i class="fa fa-times"></i>
                        </a> 
                        <a href="/tag/edit?id=<?php echo $v->id ?>"><i class="fa fa-pencil"></i>
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
