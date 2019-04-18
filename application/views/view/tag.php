<header class="masthead" style="background-image: url('/resource/img/about-bg.jpg')" id="top">
<div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10">
                <div class="post-heading">
                    <h1>luxutaoooo Blog</h1>
                    <span class="subheading">TAB page article scrolling</span>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-lg-offset-2">
            <hr>
            <div class="tags" style="margin-bottom:20px;">
            <?php foreach ($this->tag_model->get_tag()->result() as $k => $v) { ?>
                <a href="#<?php echo $v->value_name; ?>"
                   style="background-color:<?php $data = array('red','green','blue','yellow');echo $data[array_rand($data,1)]; ?>;"><?php echo $v->show_name; ?></a>
            <?php } ?>
            </div>
        <?php foreach ($this->tag_model->get_tag()->result() as $k => $v) { ?>
            <div class="one-tag-list" id="<?php echo $v->value_name; ?>">
			  	<span class="fa fa-tag listing-seperator">
                    <span class="tag-text"><?php echo $v->show_name; ?></span>
                </span>
                <?php foreach ($this->article_model->query('select article.id,article.title,article.subtitle,article.status from article right join articletag on article.id=articletag.article_id where tag_id=' . $v->id) as $kk => $vv) { ?>
                    <?php if ($vv->status == 1) { ?>
                <div class="post-preview">
                    <a href="/view/detail?id=<?php echo $vv->id; ?>">
                        <h2 class="post-title">
                            <?php echo $vv->title; ?>
                        </h2>

                        <h3 class="post-subtitle">
                            <?php echo $vv->subtitle; ?>
                        </h3>

                    </a>
                </div>
                <hr>
                <?php } ?>
                <?php } ?>
            </div>
        <?php } ?>
        </div>
    </div>

</div>