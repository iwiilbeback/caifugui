<!DOCTYPE html>
<!-- 这是一个测试 -->
<html>
<head>
    <meta charset="UTF-8">
    <title>财富柜</title>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>

    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    
    <link rel="shortcut icon" href="./img/favicon.ico"/>
    <link rel="apple-touch-icon" href="./img/touchicon.png"/>

    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/main.css">
    

</head>
<body id="index">
    <?php 
        include("./head.php");
    ?>
    <!-- 轮播 -->
    <div class="carousel slide" id="myCarousel">
       <!-- 轮播（Carousel）项目 -->
       <div class="carousel-inner">
          <div class="item active">
             <img src="./img/index/myfocus_01.png" alt="First slide">
          </div>
          <div class="item">
             <img src="./img/index/myfocus_01.png" alt="Second slide">
          </div>
          <div class="item">
             <img src="./img/index/myfocus_01.png" alt="Third slide">
          </div>
          <div class="item">
             <img src="./img/index/myfocus_01.png" alt="fourth slide">
          </div>
       </div>
        <!-- 轮播（Carousel）指标 -->
       <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
       </ol> 
       <!-- 轮播（Carousel）导航 -->
       <a class="carousel-control left" href="#myCarousel" 
          data-slide="prev">&lsaquo;</a>
       <a class="carousel-control right" href="#myCarousel" 
          data-slide="next">&rsaquo;</a>
    </div>

    <!-- /轮播 -->

    <div class="clear"></div>


    <div class="content comWidth">
        <div class="ad_sign comWidth">
        </div>
        <div class="tender_active comWidth">
            <div class="tender_title active_title">
                <span>活动标</span>
                <p class="f-fr">预计年化收益率 15%</p>
            </div>
            <div class="clear"></div>
            <div>
                <div class="tender_content">
                    <span class="title_icon f-fl">活</span>
                    <span class="content_title f-fl">
                        <a href="./investDtail.php" class="f-csp">财富柜上线活动第二标2</a>
                    </span>
                    <p class="content_month f-fl">
                        <span style="font-size:20px;">3</span>个月
                    </p>
                     <p class="content_money f-fl">
                        <span style="font-size:20px;">10</span>万
                    </p>
                    <p class="content_lilv f-fl">
                        <span style="font-size:20px;color:#eb862d;">15.00%</span>
                    </p>
                   
                    <div class="progress line f-fl">
                        <div class="bar" style="width: 60%;"></div>
                    </div>
                    <span class="line_text">60%</span>
                    <button class="tender_btn paying f-fr">
                        还款中
                    </button>
                    <button class="tender_btn already" style="display:none">
                        已还款
                    </button>
                </div>
                <div style="clear:both;"></div>
            </div>
            <div>
                <div class="tender_content">
                    <span class="title_icon f-fl">活</span>
                    <span class="content_title f-fl">
                        <a href="./investDtail.php" class="f-csp">财富柜上线活动第二标</a>
                    </span>
                    <p class="content_month f-fl">
                        <span style="font-size:20px;">3</span>个月
                    </p>
                     <p class="content_money f-fl">
                        <span style="font-size:20px;">10</span>万
                    </p>
                    <p class="content_lilv f-fl">
                        <span style="font-size:20px;color:#eb862d;">15.00%</span>
                    </p>
                   
                    <div class="progress line f-fl">
                        <div class="bar" style="width: 60%;"></div>
                    </div>
                    <span class="line_text">60%</span>
                    <button class="tender_btn paying">
                        还款中
                    </button>
                    <button class="tender_btn already" style="display:none">
                        已还款
                    </button>
                </div>
                <div style="clear:both;"></div>
            </div>
            <div>
                <div class="tender_content">
                    <span class="title_icon f-fl">活</span>
                    <span class="content_title f-fl">
                        <a href="./investDtail.php" class="f-csp">财富柜上线活动第二标</a>
                    </span>
                    <p class="content_month f-fl">
                        <span style="font-size:20px;">3</span>个月
                    </p>
                     <p class="content_money f-fl">
                        <span style="font-size:20px;">10</span>万
                    </p>
                    <p class="content_lilv f-fl">
                        <span style="font-size:20px;color:#eb862d;">15.00%</span>
                    </p>
                   
                    <div class="progress line f-fl">
                        <div class="bar" style="width: 60%;"></div>
                    </div>
                    <span class="line_text">60%</span>
                    <button class="tender_btn paying">
                        还款中
                    </button>
                    <button class="tender_btn already" style="display:none">
                        已还款
                    </button>
                </div>
                <div style="clear:both;"></div>
            </div>
            <div class="tender_more f-ff1 comWidth">
                <span><a href="">查看更多活动标</a></span>
            </div>
                 
                 
        </div>
        <div style="clear:both;"></div>
        <div class="tender_car comWidth">
            <div class="tender_title car_title">
                <span>普通标</span>
                <p class="f-fr">预计年化收益率 15%</p>
            </div>
           
              
            <div>
                <div class="tender_content">
                    <span class="title_icon f-fl">活</span>
                    <span class="content_title f-fl">
                        <a href="./investDtail.php" class="f-csp">财富柜上线活动第二标</a>
                    </span>
                    <p class="content_month f-fl">
                        <span style="font-size:20px;">3</span>个月
                    </p>
                     <p class="content_money f-fl">
                        <span style="font-size:20px;">10</span>万
                    </p>
                    <p class="content_lilv f-fl">
                        <span style="font-size:20px;color:#eb862d;">15.00%</span>
                    </p>
                   
                    <div class="progress line f-fl">
                        <div class="bar" style="width: 60%;"></div>
                    </div>
                    <span class="line_text">60%</span>
                    <button class="tender_btn paying">
                        还款中
                    </button>
                    <button class="tender_btn already" style="display:none">
                        已还款
                    </button>
                </div>
                <div style="clear:both;"></div>
            </div>
            <div>
                <div class="tender_content">
                    <span class="title_icon f-fl">活</span>
                    <span class="content_title f-fl">
                        <a href="./investDtail.php" class="f-csp">财富柜上线活动第二标</a>
                    </span>
                    <p class="content_month f-fl">
                        <span style="font-size:20px;">3</span>个月
                    </p>
                     <p class="content_money f-fl">
                        <span style="font-size:20px;">10</span>万
                    </p>
                    <p class="content_lilv f-fl">
                        <span style="font-size:20px;color:#eb862d;">15.00%</span>
                    </p>
                   
                    <div class="progress line f-fl">
                        <div class="bar" style="width: 60%;"></div>
                    </div>
                    <span class="line_text">60%</span>
                    <button class="tender_btn paying">
                        还款中
                    </button>
                    <button class="tender_btn already" style="display:none">
                        已还款
                    </button>
                </div>
                <div style="clear:both;"></div>
            </div>
            <div>
                <div class="tender_content">
                    <span class="title_icon f-fl">活</span>
                    <span class="content_title f-fl">
                        <a href="./investDtail.php">财富柜上线活动第二标</a>
                    </span>
                    <p class="content_month f-fl">
                        <span style="font-size:20px;">3</span>个月
                    </p>
                     <p class="content_money f-fl">
                        <span style="font-size:20px;">10</span>万
                    </p>
                    <p class="content_lilv f-fl">
                        <span style="font-size:20px;color:#eb862d;">15.00%</span>
                    </p>
                   
                    <div class="progress line f-fl">
                        <div class="bar" style="width: 60%;"></div>
                    </div>
                    <span class="line_text">60%</span>
                    <button class="tender_btn paying"  style="display:none">
                        还款中
                    </button>
                    <button class="tender_btn already">
                        已还款
                    </button>
                </div>
                <div style="clear:both;"></div>
            </div>
            <div>
                <div class="tender_content">
                    <span class="title_icon f-fl">活</span>
                    <span class="content_title f-fl">
                        <a href="./investDtail.php" class="f-csp">财富柜上线活动第二标</a>
                    </span>
                    <p class="content_month f-fl">
                        <span style="font-size:20px;">3</span>个月
                    </p>
                     <p class="content_money f-fl">
                        <span style="font-size:20px;">10</span>万
                    </p>
                    <p class="content_lilv f-fl">
                        <span style="font-size:20px;color:#eb862d;">15.00%</span>
                    </p>
                   
                    <div class="progress line f-fl">
                        <div class="bar" style="width: 60%;"></div>
                    </div>
                    <span class="line_text">60%</span>
                    <button class="tender_btn paying">
                        还款中
                    </button>
                    <button class="tender_btn already" style="display:none">
                        已还款
                    </button>
                </div>
                <div style="clear:both;"></div>
            </div>


            <div class="tender_more f-ff1 comWidth">
                <span><a href="">查看更多活动标</a></span>
            </div>

        </div>
      
        <!-- 首页底部三个盒子 -->
        <div class="mixbox comWidth">

        <!-- 新闻动态 -->
            <div class="new_box">
                <div class="mixbox_head">
                    <span class="f-fl">新闻动态</span>
                    <a href="./investDtail.php" class="f-fr">more>></a>
                </div>
                <div class="progress">
                        <div class="bar" style="width: 30%;"></div>
                </div>
                <div class="new_box_content">
                    <ul>
                        <li>
                        <a href="">正合源盛上线活动第二标</a>
                        <span class="f-fr">2015.07.30</span>
                        </li>
                        <li><a href="">正合源盛上线活动第二标</a><span class="f-fr">2015.07.30</span></li>
                        <li><a href="">正合源盛上线活动第二标</a><span class="f-fr">2015.07.30</span></li>
                        <li><a href="">正合源盛上线活动第二标</a><span class="f-fr">2015.07.30</span></li>
                        <li><a href="">正合源盛上线活动第二标</a><span class="f-fr">2015.07.30</span></li>
                        <li><a href="">正合源盛上线活动第二标</a><span class="f-fr">2015.07.30</span></li>
                    </ul>
                </div>
            </div>
            <!-- /新闻动态 -->

            <!--  媒体报道 -->
            <div class="media_box">
                <div class="mixbox_head">
                    <span class="f-fl">媒体报道</span>
                    <a href="./investDtail.php" class="f-fr">more>></a>
                </div>
                <div class="progress">
                        <div class="bar" style="width: 30%;"></div>
                </div>
                
                <div class="media_box_content">
                    <img src="./img/news.png" height="65" width="101" class="f-fl">
                   <p class="f-fr">
                        正合源盛上线活动第二标正合源盛上线
                        活动正合源盛上线活动....
                   </p> 
                   <div style="clear:both;"></div>
                </div>
                 <div class="media_box_content">
                    <img src="./img/news.png" height="65" width="101" class="f-fl">
                   <p class="f-fr">
                        正合源盛上线活动第二标正合源盛上线
                        活动正合源盛上线活动....
                   </p> 
                   <div style="clear:both;"></div>
                </div>
                 <div class="media_box_content">
                    <img src="./img/news.png" height="65" width="101" class="f-fl">
                   <p class="f-fr">
                        正合源盛上线活动第二标正合源盛上线
                        活动正合源盛上线活动....
                   </p> 
                   <div style="clear:both;"></div>
                </div>
            </div>
            <!--  /媒体报道 -->

            <!-- 积分排行榜 -->
            <div class="userorder_box">
                <div class="mixbox_head">
                    <span class="f-fl">牛人排行</span>
                    <a href="./investDtail.php" class="f-fr">more>></a>
                </div>
                <div class="progress">
                        <div class="bar" style="width: 30%;"></div>
                </div>

                   <div class="userorder_box_content">
                    <ul>
                        <li>
                        <a href="">第一名 xxxxxx</a>
                        <span class="f-fr">
                        <img src="img/jifenicon/jifen_1.png" height="20" width="20">
                        </span>
                        </li>
                        <li><a href="">第二名 xxxxxx</a><span class="f-fr"><img src="img/jifenicon/jifen_1.png" height="20" width="20"></span></li>
                        <li><a href="">第三名 xxxxxx</a><span class="f-fr"><img src="img/jifenicon/jifen_2.png" height="20" width="20"></span></li>
                        <li><a href="">第四名 xxxxxx</a><span class="f-fr"><img src="img/jifenicon/jifen_3.png" height="20" width="20"></span></li>
                        <li><a href="">第五名 xxxxxx</a><span class="f-fr"><img src="img/jifenicon/jifen_4.png" height="20" width="20"></span></li>

                        <li>
                            <a href="">第六名 vvvvv</a>
                            <span class="f-fr">
                                <img src="img/jifenicon/jifen_5.png" height="20" width="20" />
                                <img src="img/jifenicon/jifen_5.png" height="20" width="20" />
                                <img src="img/jifenicon/jifen_5.png" height="20" width="20" />
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /积分排行榜 -->
            <div style="clear:both;"></div>
        </div>
        <!-- /首页底部三个盒子 -->

    </div>

    <div class="friendLink comWidth">
        <div class="friendLink_title tender_title comWidth">
            <span>合作伙伴</span>
        </div>
        <hr />
        <img src="./img/links/links.png" height="90" width="1200"  />
        <!-- <img src="./img/links/freidlylink_02.png" height="88" width="200" />
        <img src="./img/links/freidlylink_03.png" height="88" width="200" />
        <img src="./img/links/freidlylink_04.png" height="88" width="200" />
        <img src="./img/links/freidlylink_05.png" height="88" width="200" />
        <img src="./img/links/freidlylink_06.png" height="88" width="180" /> -->
    </div>
    <!-- 公共底部 -->
    <?php  include("./footer.php"); ?>
   <!-- /公共底部 -->



    
    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/main.js"></script>
</body>
</html>