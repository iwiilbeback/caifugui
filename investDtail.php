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

    <link rel="stylesheet" href="./css/bootstrap.css" />
    <link rel="stylesheet" href="./css/main.css" />
    
    
</head>
<body id="investContent">
  
   <?php 
        include("./head.php");
    ?>
    
    <div class="pagePosition comWidth">
        <span><a href="index.php">首页</a> > <a href="./invest.php">我要投资</a> > <a href="#">投资详情</a></span>
    </div>
   
   
    <div class="detailTop comWidth">
        <div class="detTopLeft f-fl">
            <div class="detailTopTit">
                <span class="title_icon ">活</span>
                <span>财富柜上线活动第二标</span>
            </div>
            <div class="detLeftCont">
                <div class="deLefConUint f-fl">
                    <p class="f-fb6">借款额度</p>
                    <span class="f-fb23">100,000.00</span><span class="f-fco"> 元</span>
                </div>
                <div class="deLefConUint f-fl">
                    <p class="f-fb6">预计年化率</p>
                    <span class="f-fb23">15.00</span><span class="f-fco">%</span>
                </div>
                <div class="deLefConUint f-fl">
                    <p class="f-fb6">还款方式</p>
                    <span class="f-fb19">付息还本</span>
                </div>
                <hr />
                 <div class="deLefConUint f-fl">
                    <p class="f-fb6">借款期限</p>
                    <span class="f-fb19">3个月</span>
                </div>
                <div class="deLefConUint f-fl">
                    <p class="f-fb6">已完成<span style="color:#35a7e0;">100.00%</span>    </p>
                    <span class="f-fb19">100,000.00元</span>
                </div>
                <div class="deLefConUint f-fl">
                    <p class="f-fb6">还需金额 </p>
                    <span class="f-fbo19">100,000.00</span><span class="f-fco"> 元</span>
                </div>
            </div>
        </div>

        <div class="detTopRight f-fr">
            <div class="detailTopTit">
                <span>投资金额</span>
            </div>
            <div class="detTopRiCont">
                <p class="f-fn14 detTopRiContP">账户余额 <a href="#" class="btnLogin f-fcb14">登陆</a> 后可见</p>
                <div class="input-append">
                  <input class="span2" id="" type="text" placeholder="最低100元">
                  <span class="add-on">元</span>
                </div>
                <p class="f-fn14">预期收益： <span class="f-fcb14">0.00</span> 元</p>
               
                <div class="detCheck ">
                    <label class="">
                        <input type="checkbox" /> 
                        我已阅读并同意
                        <a href="#">
                        <span style="color:#35a7e0">《财富柜用户投标须知》</span>
                        </a>
                    </label>
                </div>
                <button id="invConBtn">确认投资</button>
            </div>
        </div>
        
    </div>
    <div class="clear"></div>
   <div class="invdetCont comWidth">
       <div class="detContHead comWidth f-f17">
           <span>借货信息</span>
           <span>投资记录</span>
           <span>还款方案</span>
       </div>

       <div class="detContBotm comWidth">
            <div class="jiedaiMes">
                <span class="f-fb16">借货人信息</span>
                <p class="MesHeadP">公司名称：<span>XX汽车租赁公司</span></p>
                <p class="MesHeadP">公司性质：<span>国内合资</span></p>
                <p class="MesHeadP">成立时间：<span>2004年6月</span></p>
                <hr />
                <span class="f-fb16">抵押物信息</span>
                <div class="diyawuMes">
                    <p>一、抵押物信息详情</p>
                    <p>车辆品牌：雪佛兰（小驾车）车辆制造厂商：上海通用东岳汽车有限公司</p>
                    <p>二、车辆描述：</p>
                    <p>雪佛兰小型轿车，内置高配，行程公里中前期，每年做定期的保养，车身状况良好，车牌为沪牌，容易变现。</p>
                    <p>三、车辆评估：</p>
                    <p>（车辆+沪牌）市场评估值20万，借款10万元</p>
                    <p>四、风险控制：</p>
                    <p>已经签订汽车拍卖协议，汽车转让协议，抵押借款合同等相关的手续，若到期借款公司没有偿还能力，拍卖公司自动拍卖抵押物，资金及时兑付给投资人。</p>
                </div>
                <hr />
                <span class="f-fb16">抵押证明</span>
                <div class="clear"></div>
                <div class="detFocus ">
                    <div id="containerss">
                        <div id="list" style="left: 0px;">
                                <li>
                                  <img src="./img/tempFocus/0.jpg" height="400" width="480" />
                                  <p>汽车汽车1</p>
                                </li>
                                <li>
                                  <img src="./img/tempFocus/1.jpg" height="400" width="480" />
                                  <p>汽车汽车2</p>
                                </li>
                                <li>
                                  <img src="./img/tempFocus/2.jpg" height="400" width="480" />
                                  <p>汽车汽车3</p>
                                </li>
                                <li>
                                  <img src="./img/tempFocus/3.jpg" height="400" width="480" />
                                  <p>汽车汽车4</p>
                                </li>
                                <li>
                                  <img src="./img/tempFocus/4.jpg" height="400" width="480" />
                                  <p>汽车汽车5</p>
                                </li>
                                <li>
                                  <img src="./img/tempFocus/5.jpg" height="400" width="480" />
                                  <p>汽车汽车6</p>
                                </li>
                                <li>
                                  <img src="./img/tempFocus/6.jpg" height="400" width="480" />
                                  <p>汽车汽车7</p>
                                </li>
                                <li>
                                  <img src="./img/tempFocus/7.jpg" height="400" width="480" />
                                  <p>汽车汽车8</p>
                                </li>
                        </div>
                       
                        <a href="javascript:;" id="prev" class="arrow">&lt;</a>
                        <a href="javascript:;" id="next" class="arrow">&gt;</a>
                    </div>
                </div>
            </div>
            <div class="touziRec">
                <table class="table">
                        <thead>
                        <tr>
                        <th>投标人</th>
                        <th>财富等级</th>
                        <th>投标金额　</th>
                        <th>投标时间</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>s**888</td>
                            <td><img src="./img/jifenicon/jifen_1.png"></td>
                            <td>￥40200</td>
                            <td>15-07-22 10:01:18</td>
                        </tr>
                        <tr>
                            <td>s**888</td>
                            <td><img src="./img/jifenicon/jifen_1.png"></td>
                            <td>￥40200</td>
                            <td>15-07-22 10:01:18</td>
                        </tr>
                        <tr>
                            <td>s**888</td>
                            <td><img src="./img/jifenicon/jifen_1.png"></td>
                            <td>￥40200</td>
                            <td>15-07-22 10:01:18</td>
                        </tr>
                        
                       
                        </tbody>
                    </table>
               
           </div>
           <div class="payWay">
               <table class="table" >
                        <thead>
                        <tr>
                        <th>序号</th>
                        <th>编号</th>
                        <th>还款截止日</th>
                        <th>当期本息</th>
                        <th>剩余本金</th>
                        <th>还款状态</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>15-07-22</td>
                            <td>￥40200</td>
                            <td>￥40200</td>
                            <td><img src="./img/icon/daihuan.jpg" height="20" width="20">　待还</td>
                        </tr>
                         <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>15-07-22</td>
                            <td>￥40200</td>
                            <td>￥40200</td>
                             <td><img src="./img/icon/daihuan.jpg" height="20" width="20">　待还</td>
                        </tr>
                         <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>15-07-22</td>
                            <td>￥40200</td>
                            <td>￥40200</td>
                             <td><img src="./img/icon/daihuan.jpg" height="20" width="20">　待还</td>
                        </tr>
                         <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>15-07-22</td>
                            <td>￥40200</td>
                            <td>￥40200</td>
                             <td><img src="./img/icon/daihuan.jpg" height="20" width="20">　待还</td>
                        </tr>
                       
                        
                       
                        </tbody>
                    </table>
           </div>
       </div>
       
   </div>

   <?php 
    include("./footer.php");
    ?>
       




    



    
    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/main.js"></script>
</body>
</html>