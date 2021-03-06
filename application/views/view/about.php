<header class="masthead" style="background-image: url('/resource/img/about-bg.jpg')" id="top">
<div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10">
                <div class="post-heading">
                <h1>About Me</h1>
                <span class="subheading">Hey,this is luxutaoooo blog</span>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-lg-9 col-md-9 mx-auto">
            <blockquote>
              <p>
                  内心的无数次挣扎，都是为了所谓的“跑马圈地”，最后变成了“画地为牢”。我们每一次绕过去的那个点叫做原点。所以，就有了我们的一生，回不去的叫原点，离不开的也是原点。</p>

                <p>书上讲了很多道理，三百六十行 行行出状元;条条大路通罗马。于是就有了千里之行，始于足下。然后我们步履蹒跚，心惊胆战，走了一段，任凭前方刀山火海，我却逆流而上，最后摔的满身伤痕，体无完肤，忍着疼痛告诉自己失败乃成功之母。从此走向大道的不归路，不幸者，从此杳无音讯，默默一生。侥幸者，登高远望，用血一般的经历来证明大道崎岖，得道难!</p>

                <p>三国时期，曹操取得徐州后，与刘备小亭对酒，曹操说：“今天下英雄，惟使君与操耳!”当时的刘备只有刘关张三人，身怀匡扶汉室之心，凭其行事有德仁之义，后来就有了三分天下的局面。所以成为什么样的人，要有什么样的心。我们说不忘初心，方得始终。</p>

<p>古人云：成事者，讲究天时地利人和。天时，时序，时事。我们在做事之前，先站在原点，把顺序理好，什么时间做什么时间该做的事要搞明白。诸葛孔明用兵运筹帷幄，决胜千里。世人传言其有奇门遁甲之术，他说真正的用兵之计不过在于察地形，知天文，晓人心，没有捷径。</p>

<p>哈哈。大道理是理论完了，还是想说说我们这些真正的普通人，现在的生活对于我们来讲可能没有大志之心，甚至不求于小有所成。只是为了养家糊口，解决一日三餐，夜眠三尺之地。毕竟，成大事者是少数人，我们只要回到我们自己的原点，知道我们要做好的事就好。</p>

<p>所以那些活明白的人，你看不到丁点儿乐趣，他却乐此不疲。</p>
            </blockquote>
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
                    <hr><h5><a href="/view/about">ABOUT ME</a></h5>
                    <div class="short-about">
                            <img src="/resource/img/avatar.jpg">
                            <p>写写代码，做做设计，<br>离开世界之前，一切都是过程</p>
                        <!-- SNS Link -->
                        <ul class="list-inline">
                            <li>
                                <a href="https://twitter.com/huxpro">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.zhihu.com/people/huxpro">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa  fa-stack-1x fa-inverse">知</i>
                                    </span>
                                </a>
                            </li>


                            <li>
                                <a target="_blank" href="https://weibo.com/huxpro">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-weibo fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>



                            <li>
                                <a target="_blank" href="https://github.com/huxpro">
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