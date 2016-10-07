<!DOCTYPE html>
<html id="regHtml">
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
<body id="reg">
  
   <?php 
        include("./head.php");
    ?>
    <!-- <div class="clear"></div> -->
    <div class="regBg">
      <div class="regContent comWidth">
          <div class="regLeftTxt f-fl">
          </div> 
          <div class="regForm">
            <div class="regFormHead">
              <p class="regFormTit">注册财富柜账户</p>
              <p class="regFormTit2">如果您已拥有财富柜账号,请 <a href="#" class="btnLogin">点此登录</a> </p>
            </div>
            <p class="regTips" style="margin-top:15px;">提示：<span>*</span>为必填项</p>
            <form action="#" method="post" class="form-horizontal">
            <div class="control-group">
                <label for="regUserName">我的账户：<span>*</span></label>
                <input type="text" value="" placeholder="" id="regUserName" class="control-label" />
                <span class="errorTips">错误提示</span>
            </div>
            <div class="control-group">
                <label for="regPhone">手机号码：<span>*</span></label>
                <input type="text" value="" placeholder="" id="regPhone" class="control-label" />
                <span class="errorTips">错误提示</span>
            </div>
             <div class="control-group">
                <label for="imgVerify">图片验证：<span>*</span></label>
                <input type="text" value="" placeholder="" id="imgVerify" class="control-label" />
                <span class="errorTips" id="imgVerifyTip">验证码错误!</span>
                <div class="regImgBox">
                    <img src="./img/icon/loginVerify.png" height="30" width="65" />
                    <span style="margin-left:2px;"><a href="">换一张</a></span>  
                </div>
            </div>
            <div class="control-group">
              <label for="regPhImgvefy">短信验证：<span>*</span></label>
              <input type="text" value="" placeholder="" id="regPhImgvefy" class="control-label" />
              <span class="errorTips">错误提示</span>
              <button type="button" id="regPhonevefy">获取手机验证码</button>
            </div>
            <div class="control-group">
                <label for="regPassWd">登录密码：<span>*</span></label>
                <input type="password" value="" placeholder="" id="regPassWd" class="control-label" />
                <span class="errorTips">错误提示</span>
            </div>
            <div class="control-group">
                <label for="regRePassWd">确认密码：<span>*</span></label>
                <input type="password" value="" placeholder="" id="regRePassWd" class="control-label" />
                <span class="errorTips">错误提示</span>
            </div class="control-group">
           

            <div class="formitm-1">
                <label class="checkbox inline">
                <input type="checkbox"/> 
                我已阅读并接受
                <a href="#">
                  <span style="color:#35a7e0"> 
                  《财富柜免费申明和注册协议》
                  </span>
                </a>
                
                </label>
                
             </div>
             <button  type="button" id="regbtn" data-loading-text="注册..." >同意协议并注册</button>
             
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