<!DOCTYPE html>
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
<body id="joinus">
  
   <?php 
        include("./head.php");
    ?>
    <div class="joinusHead"></div>
    <div class="pagePosition comWidth">
        <span><a href="index.php">首页</a> > <a href="#">加盟中心</a></span>
    </div>
    <div class="comContent comWidth">
        <div class="comLeftMune f-fl">
            <div class="muneUnit">申请加盟</div>
            <hr />
            <div class="muneUnit">运营模式</div>
            <hr />
            <div class="muneUnit">加盟收益</div>
            <hr />
            <div class="muneUnit">公司支持</div>
            <hr />
            <div class="muneUnit">加盟条件</div>
        </div>
        <div class="TabRight f-fl">
            <div class="comRightBox">
                <div class="comTitle">
                    <p>请填写信息</p>
                    <span>【INFORMATION】</span>
                </div>
                <div class="comRigBotm joinusInfo">
                    <hr />
                    <form action="#" method="post">
                        <label for="joinusName">姓　　名：</label>
                        <input type="text" id="joinusName" />
                        <label for="joinusPhone">手机号码：</label>
                        <input type="text" id="joinusPhone" />
                        <label for="joinusCity">加盟城市：</label>
                        <input type="password" id="joinusCity" />
                        <button>确认提交</button>
                    </form>
                </div>
            </div>
            <div class="comRightBox defaultNone">
                <div class="comTitle">
                    <p>运营模式</p>
                    <span>【OPERATIONS】</span>
                </div>
                <div class="comRigBotm">
                    <img src="img/joinus/join04.png" height="455" width="1033" />
                </div>
            </div>
            <div class="comRightBox defaultNone">
                <div class="comTitle">
                    <p>加盟收益</p>
                    <span>【EARNINGS】</span>
                </div>
                <div class="comRigBotm">
                    <img src="img/joinus/join03.png" height="455" width="1033" />
                </div>
                
            </div>
            <div class="comRightBox defaultNone">
                <div class="comTitle">
                    <p>公司支持</p>
                    <span>【COMPANY SUPPORT】</span>
                </div>
                <div class="comRigBotm">
                    <img src="img/joinus/join03.png" height="455" width="1033" />
                </div>
            </div>
            <div class="comRightBox defaultNone">
               <div class="comTitle">
                    <p>加盟条件</p>
                    <span>【JOIN CONDITIONS】</span>
                </div>
                <div class="comRigBotm">
                    <img src="img/joinus/join05.png" height="455" width="1033" />
                </div>
            </div>
       
        </div>
      
    </div>
       <!-- 公共底部 -->
    <?php  include("./footer.php"); ?>
   <!-- /公共底部 -->
    
   
       




    



    
    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/main.js"></script>
</body>
</html>