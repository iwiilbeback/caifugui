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
<body id="borrow">
  
   <?php 
        include("./head.php");
    ?>
    <div class="borrowHead"></div>
    <div class="pagePosition comWidth">
        <span><a href="index.php">首页</a> > <a href="#">我要借款</a></span>
    </div>
    <div class="borContent comWidth">
       
         
           <div class="borLeft f-fl">
               <form name="" action="#" method="get">
                   <fieldset>
                       <legend>借款信息</legend>
                       <div class="formitm">
                           <label class="lab broNameIcon" for="borName">姓　名：</label>
                           <div class="ipt">
                               <input type="text" id="borName" class="u-ipt" placeholder="请输入您的真实姓名"/>
                              
                           </div>
                       </div>
                       <div class="formitm">
                           <label class="lab broAreaIcon">地　区：</label>
                           <div class="ipt">
                              <select id="province" runat="server" name="province"></select> 
                              <select id="city" runat="server" name="city"></select> 
                              <select id="county" runat="server" name="city"></select> 
                           </div>
                       </div>
                       <div class="formitm">
                           <label class="lab broPledIcon">抵押物品：</label>
                           <div class="ipt">
                               <!-- <input type="text" class="u-ipt"/> -->
                               <textarea class="u-ipt">
                                   
                               </textarea>
                               
                           </div>
                       </div>
                        <div class="formitm">
                           <label class="lab broDesIcon">抵押物品概述：</label>
                           <div class="ipt">
                               <input type="text" class="u-ipt"/>
                               
                           </div>
                       </div>
                       <div class="formitm">
                           <label class="lab broMoneyIcon">借入金额：</label>
                           <div class="ipt">
                               <input type="text" class="u-ipt"/><span class="domain">万元</span>
                               
                           </div>
                       </div>
                       <div class="formitm">
                           <label class="lab broPhoneIcon">手　机：</label>
                           <div class="ipt">
                               <input type="text" class="u-ipt"/>
                               
                           </div>
                       </div>
                        <hr />
                       <div class="formitm formitm-1">
                          <label class="checkbox inline">
                          <input type="checkbox"> 确认<span style="color:#35a7e0">信息无误</span>
                          </label>
                          <button class="u-btn" type="button">提　交</button>
                       </div>
                   </fieldset>
               </form>
           </div>

            <div class="borRight f-fr">
                <div class="broTextTop">
                    <h2>基本要求：</h2>
                    <p>1、抵押房产范围：商品住房、商铺、办公楼、别墅、汽车；</p>
                    <p>2、产证上借款产权人的年龄必须为18至59周岁，抵押物房龄不得大于20年， 借款期限原则
                          &nbsp;&nbsp;&nbsp;&nbsp;上不超过5个月，借款成数最高为抵押物的6成， 单笔借款金额不得低于30万。</p>
                </div>
                <hr />
                <div class="broTextBtm">
                    <h2>借款人所需提交的材料：</h2>
                    <p>1.借款人及配偶需提供：身份证、户口本（从户主到空白页）、婚姻证明原件扫 描件;如单身
                         &nbsp;&nbsp;&nbsp;&nbsp;需提供单身证明，结婚后离婚的还需提供婚史证明、离婚协议。</p>
                    <p>2.借款人房产证，土地使用权证，产调原件扫描件。抵押物实际情况照片5张以上原件扫描
                         &nbsp;&nbsp;&nbsp;&nbsp;件。</p>
                    <p>3.借款人征信报告原件或复印件。</p>
                    <p>4.商铺、办公楼的买入发票（收据）及合同凭证原件扫描件。</p>
                </div>
            </div>   
          <div style="clear:both;"></div>

             <div class="comWidth broFoot f-fl">
            <div class="broFootTitle">
              借款流程
            </div>
            <div class="borProcess"></div>
            </div>
        </div>

  <!-- 公共底部 -->
    <?php  include("./footer.php"); ?>
   <!-- /公共底部 -->
        
    
    
   
       




    
    <!-- 三级省市县下拉菜单，只需要在本页面引入 -->
    <script src="./js/area.js"></script>
    <script type="text/javascript">
      setup() 
    </script>
    <!-- /三级省市县下拉菜单，只需要在本页面引入 -->

    
    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/main.js"></script>
</body>
</html>