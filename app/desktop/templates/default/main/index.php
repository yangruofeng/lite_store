<style>
    body{
        background-color: #faf1d3;
    }



    .page-bottom{
        margin: 20px 0;
        padding: 10px 0;
    }

    .pl-div > div{
        padding: 8px 0;
        border-bottom: 1px solid #f5f5f5;
    }

    #fd_box{
        height: 350px;
        overflow: hidden;
        background-color: #fff;
        padding: 0 20px;
        border-radius: 15px;
        margin-top: 50px;
    }

    #pl_div{
        padding: 20px 20px;
       /* background-color: #fcf8e3;*/
        background-image: url(<?php echo PROJECT_RESOURCE_SITE_URL.'/images/index/pj_bg.png'; ?>);
        background-repeat: no-repeat;
        -webkit-background-size:100%;
        background-size:100%;
        -o-background-size: 100%;
        padding-top: 18%;
    }

    .cs-btn{
        display: block;
        margin: 0 auto;
        padding: 10px 0;
        text-align: center;
        font-size: 3em;
        background-color: #d63129;
        color: #fff;
        border-radius: 10px;
        text-decoration: none;
        margin-top: 30px;
    }

    #fd_cs{
        display: none;
        position: fixed;
        bottom:0;
        width: 100%;
    }
</style>

<div style="max-width: 750px;margin: 0 auto;background-color: #fff;">
    <div class="text-center">
        <div >
            <div>
                <?php include template('widget/header1');?>
            </div>
            <div>
                <img class="img-responsive" src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/index/i1.png'; ?>" alt="">
            </div>

            <div>
                <img class="img-responsive" src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/index/i2.png'; ?>" alt="">
            </div>







            <div class="cs-parent  clearfix" >
                <img style="display: none;" class="img-responsive" src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/index/i62.png'; ?>" alt="">
                <div class="cs-content" style="padding: 0 3%;">

                    <div class="col-sm-12 text-center clearfix">
                        <div class="col-sm-6">
                            <a href="<?php echo getDesktopUrl('index','caifu'); ?>"  onclick="//changeProduct('<?php echo productTypeEnum::CF; ?>');">
                                <img class="img-responsive" src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/index/cf.png'; ?>" alt="">
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="<?php echo getDesktopUrl('index','sy'); ?>"  onclick="//changeProduct('<?php echo productTypeEnum::SY; ?>');">
                                <img class="img-responsive" src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/index/sy.png'; ?>" alt="">
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="<?php echo getDesktopUrl('index','ml'); ?>"  onclick="//changeProduct('<?php echo productTypeEnum::ML; ?>');">
                                <img class="img-responsive" src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/index/ml.png'; ?>" alt="">
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="<?php echo getDesktopUrl('index','hy'); ?>"  onclick="//changeProduct('<?php echo productTypeEnum::HY; ?>');">
                                <img class="img-responsive" src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/index/hy.png'; ?>" alt="">
                            </a>
                        </div>
                    </div>

                    <div style="display: none;" class="cs-row">
                        <div class="cs-item-row">
                            <a href="<?php echo getDesktopUrl('index','caifu'); ?>" class="cs-item" onclick="//changeProduct('<?php echo productTypeEnum::CF; ?>');">
                                <img class="img-responsive" src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/index/s1.png'; ?>" alt="">
                            </a>
                            <a href="<?php echo getDesktopUrl('index','sy'); ?>" class="cs-item cs-item-right" onclick="//changeProduct('<?php echo productTypeEnum::SY; ?>');">
                                <img class="img-responsive" src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/index/s4.png'; ?>" alt="">
                            </a>
                        </div>
                        <div class="cs-item-row">
                            <a href="<?php echo getDesktopUrl('index','ml'); ?>" class="cs-item" onclick="//changeProduct('<?php echo productTypeEnum::ML; ?>');">
                                <img class="img-responsive" src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/index/s3.png'; ?>" alt="">
                            </a>
                            <a href="<?php echo getDesktopUrl('index','hy'); ?>" class="cs-item cs-item-right" onclick="//changeProduct('<?php echo productTypeEnum::HY; ?>');">
                                <img class="img-responsive" src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/index/s2.png'; ?>" alt="">
                            </a>
                        </div>
                    </div>
                    <div>

                    </div>
                </div>
            </div>


            <div id="cs_frm">

                <?php include template('widget/cesuan.form');?>

                <div>
                    <a data-submit="1" style="cursor: pointer;" id="cs_button" onclick="submitOrder();">
                        立即测算
                    </a>
                </div>

            </div>

            <div class="">
                <img class="img-responsive" src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/index/i52.png'; ?>" alt="">
            </div>

            <!--<div>
            <img class="img-responsive" src="<?php /*echo PROJECT_RESOURCE_SITE_URL.'/images/index/i7.png'; */?>" alt="">
        </div>

        <div>
            <img class="img-responsive" src="<?php /*echo PROJECT_RESOURCE_SITE_URL.'/images/index/i8.png'; */?>" alt="">
        </div>

        <div>
            <img class="img-responsive" src="<?php /*echo PROJECT_RESOURCE_SITE_URL.'/images/index/i9.png'; */?>" alt="">
        </div>-->


            <div class="text-left" id="pl_div" style="">
                <!--<h3 class="text-center" style="font-weight: 700;">来自测算用户的真实评价</h3>-->

                <div id="fd_box" class="box3">
                    <div id="pl_box" style="margin-top: 20px;" class="pl-div border3">
                        <div>
                            136xxxx1456（贵州毕节）：感谢张天师，挽救了我的家庭
                            <img  src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/emotions/heshi.png'; ?>" alt="">
                            <img  src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/emotions/heshi.png'; ?>" alt="">
                            <img  src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/emotions/heshi.png'; ?>" alt="">

                        </div>
                        <div>
                            189xxxx7865（广东佛山）：我这几年财运不好，做生意赔、炒股也亏，幸好张老师帮我测算了财运，寄了灵宝。现在已改善许多，感谢张天师。
                        </div>
                        <div>
                            166xxxx6369（河北保定）：太厉害了，老师一测就知道了我的问题
                            <img  src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/emotions/dianzan.png'; ?>" alt="">

                        </div>
                        <div>
                            138xxxx1257（安徽池州）：朋友的介绍，卦金便宜，可以推荐！！
                        </div>
                        <div>
                            133xxxx0098（辽宁营口）：离婚后，一直没有合适的人，感谢张天师帮我
                            <img  src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/emotions/kelian.png'; ?>" alt="">

                        </div>
                        <div>
                            182xxxx2463（河南安阳）：听过两堂老师的课，收获的确很多。
                        </div>
                        <div>
                            183xxxx5763（山东烟台）：老师分析的很到位，内容很丰富，给我点明了道路
                            <img  src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/emotions/laugh.png'; ?>" alt="">

                        </div>
                        <div>
                            158xxxx7590（河南信阳）：谢谢老师！
                        </div>
                        <div>
                            156xxxx0011（山东聊城）：生意上的失败，生活上的无助，在我遇见张天师之前如此，甚至有过放弃生活的想法，经过老师的帮助，现在一切都变好了，真的太神奇了。
                        </div>
                        <div>
                            139xxxx0635（上海）：感恩老师的帮助
                            <img  src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/emotions/heshi.png'; ?>" alt="">
                            <img  src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/emotions/heshi.png'; ?>" alt="">
                            <img  src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/emotions/heshi.png'; ?>" alt="">

                        </div>
                        <div>
                            177xxxx2473（浙江宁波）：张老师人很好，是我很尊敬的老师。
                        </div>
                        <div>
                            134xxxx3697（四川成都）：之前打牌一直输，老师喊我改了一下方位，最近手气就上来了
                            <img  src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/emotions/laugh.png'; ?>" alt="">

                        </div>
                        <div>
                            178xxxx9324（广东广州）：值得推荐
                            <img  src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/emotions/dianzan.png'; ?>" alt="">

                        </div>
                        <div>
                            135xxxx2537（内蒙古包头）：太牛了，老师，孩子的学习真的变好了，我本来是半信半疑的，没想到真变好了，现在全班第六名了                    <img  src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/emotions/smile.png'; ?>" alt="">
                            ，谢谢张老师。
                        </div>
                        <div>
                            152xxxx4786（福建龙岩）：以前不是很相信这个，自从张老师给我讲解化解之后，让我不得不相信了，以后还是会多多请教张老师。
                        </div>
                        <div>
                            130xxxx4073(四川绵阳)：老师的话让我如雷贯耳，知道自己的运势方向不对财路一直没有起色，现在在老师的指导下已经有了不一样，谢谢老师
                        </div>
                        <div>
                            155xxxx5584（湖南湘西）：老师耐心给我讲解了卦象，给我解开了谜团，觉得很值得。
                        </div>
                        <div>
                            137xxxx3939（浙江杭州）：张老师真的很厉害！
                        </div>
                        <div>
                            185xxxx6974（安徽六安）：
                            <img  src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/emotions/dianzan.png'; ?>" alt="">
                            <img  src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/emotions/dianzan.png'; ?>" alt="">
                            <img  src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/emotions/dianzan.png'; ?>" alt="">

                        </div>
                        <div>
                            137xxxx6822（广西河池）：张老师很仔细的给我讲了我的事业发展，很多都说的对
                        </div>
                        <div>
                            137xxxx5135（浙江杭州）：今年事业不是很顺很迷茫，有幸遇见了张老师，帮我指点了方向，也不再向之前那么迷茫了。
                        </div>
                        <div>
                            139xxxx4373(云南宏德)：老师，谢谢您！欢迎您来我们云南做客
                        </div>
                        <div>
                            136xxxx9036（浙江台州）：测算结果很不错，值得参考，我测算了自己的桃花运，大师给我分析的很彻底，本身身上有许多坏毛病，被大师指点出来要我改正，我相信经过大师的指点，我会遇见真爱的。
                        </div>
                        <div>
                            139xxxx4990（内蒙古鄂尔多斯）:嗯！
                        </div>
                        <div>
                            134xxxx3725（北京）：今年和朋友一起做生意，总是感觉哪里不顺，最后被张大师点出了原因，我也会慢慢注意 ，感谢张大师帮助我。
                        </div>
                        <div>
                            134xxxx2345（广东茂名）：请教了好几个先生，只有张先生灰常有耐心，把我的所有顾虑都一一解答，还告诉了我以后需要注意的地方和破解的方法，特别是最近的一些事让我心里兮兮，在老师的指点下都有了改善。万分感谢。
                        </div>
                        <div>
                            132xxxx1156（湖南长沙）：真的不是迷信，分析的很客观很有道理，能够从我的先天八格反应出我的一些经历和一些不足，我之后一定会加以改正。
                        </div>
                        <div>
                            130xxxx2177（广东韶光）：能获得师傅的指点是我的荣幸
                        </div>
                        <div>
                            130xxxx5655（四川绵阳）：最近家里老是发生一些怪事，老师说我是风水的问题，我接受了老师的建议，这些怪事也很少发生了。
                        </div>
                        <div>
                            135xxxx1444（四川阿坝）：大师厉害！
                        </div>
                        <div>
                            185xxxx0625（河南信阳）：通过张老师的分析，我现在已经结婚了，婚后也很幸福，值得推荐，我也要把老师推荐给我闺蜜。
                        </div>
                        <div>
                            139xxxx9282（广东茂名）：张先生有实力的。
                        </div>
                        <div>
                            181xxxx6766（山东青岛）：刚买了房忙完了装修，入住后倒霉的事接二连三的出现，本以为是房子的风水不好，没想到在这里找到了答案，原来问题出现在自己的身上，按照提醒行事，现在已有好转。
                        </div>
                        <div>
                            139xxxx5188（广东东莞）：老师万福！
                        </div>
                        <div>
                            173xxxx7085（福建三明）：很多人说我旺夫，不管是我面相还是生辰，都不是很好，经过大师的改善，现在已有好转，找到个男朋友，对我很好。我特别开心！
                        </div>
                        <div>
                            181xxxx5434（辽宁营口）：感谢张老师给我孙子取的福名，我们全家人都很满意，老师第一次给取得福名不错，不过他爷爷不满意，老师又免费取了一个，这次我们全家都很满意，儿子和媳妇还说让我当面谢谢老师。老师用心了！
                        </div>
                        <div>
                            152xxxx5869（新疆乌鲁木齐）：我是一个国学爱好者，家里父母都比较传统，从小都让我读三字经、论语之类的，现在易经、道德经是我枕边必备之书，希望有机会跟张老师多请教。
                        </div>
                        <div>
                            181xxxx2888（新疆阿克苏）：感谢！
                        </div>
                        <div>
                            137xxxx9660（河北秦皇岛）：感谢张老师给我指点迷津，让我找准了方向，现在事业非常顺，张老师知识面太丰富了。以后多多请教张老师。
                        </div>
                        <div>
                            152xxxx5005（河南南阳）：张大师水平高！
                        </div>
                        <div>
                            188xxxx8765（浙江宁波）：张老师太厉害了，把我分析的透透是道。太神了吧！
                        </div>
                        <div>
                            139xxxx2866(广东佛山)：不错！
                        </div>
                        <div>
                            155xxxx5855（辽宁营口）：张老师真的很亲切和蔼，很耐心给我分析了我八字，解决问题时也特别有耐心。
                        </div>
                        <div>
                            158xxxx2332(江苏苏州)：老师，我想给你送一盆景，以表达我的感激之情！
                        </div>
                        <div>
                            186xxxx6676（山东济南）：之前婚姻一直不顺，经常和老婆吵架，经过张大师的讲解，该注意什么，该改正什么，都很准，现在婚姻也顺了。
                        </div>
                        <div>
                            158xxxx6786（江苏苏州）：谢谢老师指点。
                        </div>
                        <div>
                            187xxxx6794（山西太原）：我是自学周易的，和很多做预测的师傅都交流过，在周易测算这个圈子里，张天瑞师傅水平是公认的高，尤其是四柱预测，找他算我觉得你肯定会很值。
                        </div>
                        <div>
                            177xxxx5232(广东梅州)：大师辛苦了！
                        </div>
                        <div>
                            177xxxx4375（海南海口）：张天瑞老师真的很厉害，值得推荐
                            <img  src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/emotions/dianzan.png'; ?>" alt="">
                            <img  src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/emotions/dianzan.png'; ?>" alt="">
                            <img  src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/emotions/dianzan.png'; ?>" alt="">

                        </div>
                        <div>
                            199xxxx2377（河北廊坊）：谢谢！
                        </div>
                        <div>
                            185xxxx4475（河北石家庄）：今年财运一直不顺，做生意感觉一直在亏，张老师说我今年不适合做投资之类的生意，我采纳了张老师的建议，心情就好多了。
                        </div>
                        <div>
                            133xxxx5745（广西百色）：我其实找了很多大师算过，张老师给我的感觉不一样，很专业，因为我脾气不好，张老师很耐心地给我讲。以后有事就找张天瑞老师了。
                        </div>
                        <div>
                            186xxxx5060（重庆）：有点厉害！
                        </div>
                        <div>
                            150xxxx9035（浙江杭州）：第二次找张老师了，人非常好，感谢给我开导。
                        </div>
                        <div>
                            177xxxx3699(甘肃陇南)：感谢老师的细心讲解，让我的生活有了极大的起色，从新开始新的章程
                        </div>
                        <div>
                            133xxxx3765（广西南宁）：朋友介绍的，老师确实比较准，很感谢！
                        </div>
                        <div>
                            158xxxx7786（浙江杭州）：在张老师这儿给女儿取的名字，寓意好，也好听，不大众。谢谢啦
                        </div>
                        <div>
                            158xxxx5325（云南曲靖）：听完老师的解答，豁然开朗。
                        </div>
                        <div>
                            188xxxx8856（吉林长春）：有真才实学！
                        </div>
                        <div>
                            134xxxx7786（内蒙古赤峰）：听老师的建议换了床头朝向，运气好了不少，连成几个大单，十分感谢，介绍给周围的朋友，他们也说很厉害。
                        </div>
                        <div>
                            189xxxx4897（黑龙江双鸭山）：请老师起的结婚吉日，很满意。
                        </div>
                        <div>
                            176xxxx9256（广西南宁）：在老师这里请的节节高升，事业发展顺利很多。
                        </div>
                        <div>
                            133xxxx8856（浙江温州）：请老师看了孩子的健康运势，放心不少。
                        </div>
                        <div>
                            199xxxx7756（广西贵港）：谢谢老师o(^o^)o
                        </div>
                        <div>
                            177xxxx5566（安徽安庆）：张大师的卦准！
                        </div>
                        <div>
                            156xxxx7789（广西河池）：朋友们，听张老师的建议没错，他是我见过最厉害的老师。
                        </div>
                        <div>
                            138xxxx2588（广东汕头）：怀着试试的心态请老师测看，没想到竟然都说到我心坎里了，厉害！
                        </div>
                        <div>
                            130xxxx7785：（广东深圳）：在老师这里请的碧玺，很漂亮。
                        </div>
                        <div>
                            134xxxx5689（浙江杭州）：和在老家请师父看的一样，不错。
                        </div>
                        <div>
                            136xxxx4458（黑龙江哈尔滨）：近两年破财多，请老师看的财运，说的和我现实情况一样，服！
                        </div>
                    </div>
                </div>


            </div>

        </div>


        <div class="page-bottom" style="display: none;">
            Copyright © 2019  北京时智时悦科技有限公司 版权所有
        </div>
    </div>

    <div class="text-center" style="position: fixed;right:0;top:48%;">
        <a target="_blank" href="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/index/kefu.jpg'; ?>">
            <img style="width: 120px;height: 120px;" src="<?php echo PROJECT_RESOURCE_SITE_URL.'/images/index/kefu.jpg'; ?>" alt="">
        </a>
        <div>扫码加微信</div>
    </div>

</div>

<div id="fd_cs" style="" >
    <div class="text-center">
        <a class="cs-btn" href="#cs_frm"  style="cursor: pointer;" onclick="fdc();">
            立即测算
        </a>
    </div>
</div>

<script>

    function fdc(){
        $('#fd_cs').hide();
    }

    function showGD()
    {
        $('#fd_cs').show();
        setTimeout(function(){
            console.log('test');
            $('#fd_cs').hide();
        },5000);
    }

    $(function(){

        $(document).on("mousewheel DOMMouseScroll", function (e) {
            var delta = (e.originalEvent.wheelDelta && (e.originalEvent.wheelDelta > 0 ? 1 : -1)) ||  // chrome & ie
                (e.originalEvent.detail && (e.originalEvent.detail > 0 ? -1 : 1));              // firefox
            if (delta > 0) {
                // 向上滚
                //console.log("wheelup");

            } else if (delta < 0) {
                // 向下滚
                //console.log("wheeldown");
                showGD();
            }
        });


       /* $('#fd_cs').hide();
        $('body')
            .bind('mousewheel', function(event, delta) {
                showGD();
            });*/

    });

    var s123 = setInterval(dh123,2000);
    function dh123()
    {

        var _border = $('#pl_box');
        var _div = $('<div></div>');
        var _content = $($('#pl_box > div').get(0));
        _div.html(_content.html());
        _content.remove();
        _border.append(_div);

    }


    function changeProduct(type)
    {
        if( !type ){

        }else{
            $('#product_type').val(type);
        }
    }



</script>