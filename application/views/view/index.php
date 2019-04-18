<header class="masthead" style="background-image: url('/resource/img/home-bg.jpg')" id="top">
<div class="overlay"></div>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10">
            <div class="post-heading">
            <h1>luxutaoooo Blog</h1>
            <span class="subheading">一个专注于技术和科技的个人文章分享</span>
            </div>
        </div>
    </div>
</div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-9 col-md-9 mx-auto">
            <?php foreach ($this->article_model->where(array("status" => 1),0,10)->result() as $k => $v) { ?>
            <div class="post-preview">
                <a href="/view/detail?id=<?php echo $v->id; ?>">
                    <h4 class="post-title">
                        <?php echo $v->title; ?>
                    </h4>
                    <h5 class="post-subtitle">
                        <?php echo $v->subtitle; ?>
                    </h5>
                </a>
                <div class="post-content-preview">
                    <?php echo mb_substr($v->content,0,100,'utf-8'); ?>...
                </div>
                <p class="post-meta">Posted by
                    <a href="{% url 'about' %}">luxutaoooo</a>
                    on <?php echo $v->create_time; ?></p>
            </div>
            <hr>
            <?php } ?>
            <div class="clearfix text-center">
                <a class="btn btn-primary" onclick="javascript:loading();">Loading...</a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 sidebar-container">
            <hr>
            <section>
                <h5>Tags</h5>
                <div class="tags">
                    <?php foreach ($this->tag_model->get_tag()->result() as $k => $v) { ?>
                    <a href="{% url 'bg_tta' %}?filter={{ tag.valuename }}"><?php echo $v->show_name; ?></a>
                    <?php } ?>
                </div>
            </section>
            <section class="visible-md visible-lg">
                <hr>
                <h5><a href="">ABOUT ME</a></h5>
                <div class="short-about">
                        <img src="/resource/img/avatar.jpg">
                        <p>写写代码，做做设计，<br>离开世界之前，一切都是过程</p>
                    <ul class="list-inline">
                        <li>
                            <a href="https://twitter.com/">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.zhihu.com/">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa  fa-stack-1x fa-inverse">知</i>
                                </span>
                            </a>
                        </li>


                        <li>
                            <a target="_blank" href="https://weibo.com/">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-weibo fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>



                        <li>
                            <a target="_blank" href="https://github.com/">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </section>
            <hr>
            <h5>FRIENDS</h5>
            <ul class="list-inline">

                <li><a href="http://mida.re/">乱序</a></li>

                <li><a href="http://qianduan.guru/">前端外刊评论</a></li>

                <li><a href="http://lingyu.wang/">天镶的博客</a></li>

                <li><a href="https://hmqk1995.github.io">Luke 的自留地</a></li>

                <li><a href="http://ebnbin.com/">Ebn's Blog</a></li>

                <li><a href="https://blog.smdcn.net">SmdCn's Blog</a></li>

                <li><a href="http://xieminis.me/">解旻的博客</a></li>

                <li><a href="http://dhong.co">DHong Say</a></li>

                <li><a href="https://ingf.github.io/">尹峰以为</a></li>

                <li><a href="https://wepiaofei.github.io/blog/">前端神盾局</a></li>
            </ul>
        </div>
    </div>
</div>