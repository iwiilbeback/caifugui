<!DOCTYPE html>
<html id="findPwHtml">
<head>
    <meta charset="UTF-8">
    <title>财富柜</title>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>

    <!-- <meta name="viewport" content="width=device-width,initial-scale=1.0"/> -->
    
    <link rel="shortcut icon" href="./img/favicon.ico"/>
    <link rel="apple-touch-icon" href="./img/touchicon.png"/>

    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/main.css">
    
    
</head>
<body id="findPw">
  
   <?php 
        include("./head.php");
    ?>
    <!-- <div class="clear"></div> -->
    <div class="findBg">
      <div class="findContent comWidth">
          <div class="findLeftTxt f-fl">
          </div> 
          <div class="findForm">
            <div class="findFormHead">
              <p class="findFormTit">找回密码</p>
             
            </div>
            <form action="#" method="post" class="form-horizontal">
            <div class="control-group">
                <label for="regUserName">我的账户：<span>*</span></label>
                <input type="text" value="" placeholder="用户名" id="regUserName" class="control-label" />
                <span class="errorTips">错误提示</span>
            </div>
            <div class="control-group">
                <label for="findPhone">手机号码：<span>*</span></label>
                <input type="text" value="" placeholder="" id="findPhone" class="control-label" />
                <span class="errorTips">错误提示</span>
            </div>
             <div class="control-group">
                <label for="findImgVerify">图片验证：<span>*</span></label>
                <input type="text" value="" placeholder="" id="findImgVerify" class="control-label" />
                <span class="errorTips" id="findImgVerTip">验证码错误!</span>
                <div class="findImgBox">
                    <img src="./img/icon/loginVerify.png" height="30" width="65" />
                    <span style="margin-left:2px;"><a href="">换一张</a></span>  
                </div>
            </div>
            <div class="control-group">
              <label for="findPhImgvefy">短信验证：<span>*</span></label>
              <input type="text" value="" placeholder="" id="findPhImgvefy" class="control-label" />
              <span class="errorTips">错误提示</span>
              <button type="button" id="findPhonevefy">获取手机验证码</button>
            </div>
            <div class="control-group">
                <label for="findPassWd">新的密码：<span>*</span></label>
                <input type="password" value="" placeholder="" id="findPassWd" class="control-label" />
                <span class="errorTips">错误提示</span>
            </div>
            <div class="control-group">
                <label for="findRePassWd">确认密码：<span>*</span></label>
                <input type="password" value="" placeholder="" id="findRePassWd" class="control-label" />
                <span class="errorTips">错误提示</span>
            </div class="control-group">
           

             <button  type="button" id="findBtn" data-loading-text="注册..." >确认提交</button>
             
            </form>
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