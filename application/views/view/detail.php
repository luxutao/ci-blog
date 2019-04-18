<header class="masthead" style="background-image: url('/resource/img/post-bg.jpg')" id="top">
<div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10">
                <div class="post-heading">
                <div class="tags">
                <?php foreach ($this->article_model->query('select tag.id,tag.show_name,tag.value_name from tag left join articletag on tag.id=articletag.tag_id where article_id=' . $id) as $kk => $vv) { ?>
                    <a href="/view/tag#<?php echo $vv->value_name; ?>"><?php echo $vv->show_name; ?></a>
                <?php } ?>
                </div>
                <h1><?php echo $title; ?></h1>
                <h2 class="subheading"><?php echo $subtitle; ?></h2>
                <span class="meta">Posted by<a href="/view/about"> luxutaoooo </a>on <?php echo $create_time; ?></span>
                </div>
            </div>
        </div>
    </div>
</header>
<?php $this->article_model->addviews($id); ?>
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <p><?php echo $content; ?></p>
            </div>
        </div>
        <hr>
        <div class="row" style="font-size:13px">
            <div class="col-lg-8 col-md-10 mx-auto">
                <form action="/comment/create?id=<?php echo $id; ?>" method="post">
                    <div class="form-group">
                        <label for="">邮箱地址：</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label for="">名称：</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="">发表评论：</label><br>
                        <textarea name="content" id="" rows="5" class="form-control"></textarea>
                    </div>
                    <input type="submit" class="btn btn-info" value="提交评论">
                </form>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <ul class="media-list">
                    <?php foreach ($this->comment_model->get_comment($id)->result() as $k => $v) {?>
                    <li class="media" style="margin-bottom:20px">
                        <div class="media-left">
                            <span style="font-size:12px"><?php echo $v->floor; ?> #</span>
                            <a href="#">
                                <img class="media-object img-circle" src="<?php echo $v->avatar_url; ?>" alt="..."
                                     style="width:64px;height:64px;">
                            </a>
                        </div>
                        <div class="media-body" style="line-height:1.0">
                            <h4 class="media-heading" style="font-size:13px">
                                <?php echo $v->name; ?>
                                <small><?php echo $v->create_time; ?></small>
                            </h4>
                            <span style="font-size:10px"><?php echo $v->content; ?></span>
                        </div>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</article>
