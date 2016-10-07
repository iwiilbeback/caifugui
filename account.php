<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>财富柜</title>

    <meta name="keywords" content=""/>
    <meta name="description" content=""/>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    
    <link rel="shortcut icon" href="./img/favicon.ico"/>
    <link rel="apple-touch-icon" href="./img/touchicon.png"/>

    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/main.css">
    
    
</head>
<body id="account">
  
   <?php 
        include("./head.php");
    ?>
    <div class="accountHead"></div>
    <div class="pagePosition comWidth">
        <span><a href="index.php">首页</a> > <a href="#">账户中心</a></span>
    </div>
    <div class="comContent comWidth">
        <div class="comLeftMune f-fl">
            <div class="muneUnit">我要充值</div>
             <hr />
             <div class="muneUnit">投资记录</div>
             <hr />
             <div class="muneUnit">资金记录</div>
             <hr />
             <div class="muneUnit">认证管理</div>
             <hr />
             <div class="muneUnit">积分管理</div>
             <hr />  
             <div class="muneUnit">更多信息</div>
             <hr />
             <div class="muneUnit">修改密码</div>               
        </div>
        <div class="TabRight f-fl">
            <!-- 我要充值 -->
            <div class="comRightBox">
                <div class="comTitle">
                    <p>我要充值</p>
                    <span>【Fill recharge】</span>
                </div>
                <div class="comRigBotm recharge">
                   
                    <p class="f-fgs">
                        <b style="margin-right:15px;font-size:18px;">账富柜账户</b>
                        账户名：<span>$张禹</span>  
                    </p>
                    <hr />
                     <div style="width:200px;float:left;">
                         <p style="margin-top:10px;">
                        <b class="f-fgs">账户余额：</b>
                        <span class="f-fob">0.00</span>
                        <span class="f-fos">元</span>
                    </p>
                    </div>
                   
                    <div class="rechargeBtn f-fr">
                        <button id="chongqian">充值</button>
                        <button id="tixian">提现</button>    
                    </div>
                    <div class="clear"></div>
                    <div class="rechargeBotm">
                        <div class="recBotmTop"></div>
                        <p>账户总览</p>
                        <div class="recBotmBtom">
                            <div class="recDetails">
                                <p>您累计充值金额</p>
                                <span>￥<b>0.00</b></span>
                            </div>
                            <div class="recDetails">
                                <p>您累计投标金额</p>
                                <span>￥<b>0.00</b></span>
                            </div>
                            <div class="recDetails">
                                <p>从加入至今共收益</p>
                                <span>￥<b>0.00</b></span>
                            </div>
                            <div class="recDetails">
                                <p>您还有如下待收款项</p>
                                <span>待收本金：￥0.00</span>
                                <br /><br />
                                <span>待收利息：￥0.00</span>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- /我要充值 -->
            <!-- 充值 -->
            <div class="ctCom chongzhiBox">
                <div class="ctTit">
                    <p>充值</p>
                </div>
                <p class="baofuLogo"></p>
                <div class="chongzhiBoxBtm">
                    <div class="CZBtnBox">
                        <label>充值金额</label>
                        <input type="text" />
                        <button id="confirmBtn">确认充值</button>    
                    </div>
                    
                    <div class="chongzhiText">
                    <span>温馨提示</span>
                    <p>1.在支付页面完成后，请点击“返回商户”链接不要直接关闭支窗口，否则会造成充值金额到账延迟</p>
                    <p>2.每日充值限额以各银行限额为准</p>
                    <p>3.严禁利用充值功能进行信用卡套现，转账，洗钱等行为，一经发现，资金将退回原卡并封停账号30天</p>
                    <p>4.充值后未用于投资的提现申请金额，将视情况通过第三方支付平台退回原卡，因银行结算周期需要2-7个工作日（实际到账时间以银行通知为准）。</p>
                    <p>5.点击充值按钮，表示您已经仔细阅读并同意以上资金管理规定条款</p>
                    </div>
                </div>
                
                
            </div>
            <div class="ctCom tixianBox">
                <div class="ctTit">
                    <p>我要提现</p>
                </div>
                <div class="tixianBoxBtm">
                    <div class="tixianBoxForm">
                        <form>
                         
                            <label for="">提现金额</label>
                            <input type="text" value="" id="TXMoneyVal" />    
                            
                            
                            <label>验 证 码</label>
                            <input type="text" value="" id="TXCodeVal" />    
                           
                            
                            <button id="TXCodeBtn">获取手机验证码</button>
                            <button id="tixianBtn">申请提现</button>
                        </form>
                    </div>
                    <div class="useMes">
                        <p>姓名：xxxx</p>
                        <p>开户银行：xxxx</p>
                        <p>卡号：xxxx</p>
                        <p>可提现的现金：<span class="f-fob">￥00.00</span><span class="f-fos">元</span></p>
                    </div>
                    
                </div>
                <div class="tixianText">
                    <span>温馨提示</span>
                    <p>1.除法定节假日外，周一至周日全天处理提款。</p>
                    <p>2.每日16:00之前申请提款财务在当日处理，16:00之后申请提款财务次日处理。</p>
                    <p>3.每笔提款申请，会按照银行的相关规定，来进行提现金额限定。</p>
                    <p>4.节假日因用户开户行填写格式有误或银行系统处理不及时导致的延误，最迟在假后的第一个工作日内到帐。</p>
                    <p>5.为防止违法行为，将对异常提款（包括提取未投标资金）进行严格审核，审核时间在15个工作日之后。</p>
                    <p>6.因第三方托管平台周末不支持实时转账，所以周末处理的提现到帐时间较慢，请知悉。</p>
                </div>
            </div>
            
            <!-- 投资记录 -->
            <div class="comRightBox defaultNone">
                <div class="comTitle">
                    <p>投资记录</p>
                    <span>【Investment Record】</span>
                </div>
                <div class="comRigBotm investRec">
                    <table class="table">
                        <thead>
                        <tr>
                        <th>投资金额（元）</th>
                        <th>利息</th>
                        <th>借款时间</th>
                        <th>待收利息（元）</th>
                        <th>已还</th>
                        <th>投标时间</th>
                        <th>协议</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>0.00</td>
                            <td>0.00</td>
                            <td>2015/08/11</td>
                            <td>0.00</td>
                            <td>0.00</td>
                            <td>2015/08/11</td>
                            <td><a href="">查看　</a><a href="">下载</a></td>
                        </tr>
                        <tr>
                            <td>0.00</td>
                            <td>0.00</td>
                            <td>2015/08/11</td>
                            <td>0.00</td>
                            <td>0.00</td>
                            <td>2015/08/11</td>
                            <td><a href="">查看　</a><a href="">下载</a></td>
                        </tr>
                        <tr>
                            <td>0.00</td>
                            <td>0.00</td>
                            <td>2015/08/11</td>
                            <td>0.00</td>
                            <td>0.00</td>
                            <td>2015/08/11</td>
                            <td><a href="">查看　</a><a href="">下载</a></td>
                        </tr>
                        <tr>
                            <td>0.00</td>
                            <td>0.00</td>
                            <td>2015/08/11</td>
                            <td>0.00</td>
                            <td>0.00</td>
                            <td>2015/08/11</td>
                            <td><a href="">查看　</a><a href="">下载</a></td>
                        </tr>
                        <tr>
                            <td>0.00</td>
                            <td>0.00</td>
                            <td>2015/08/11</td>
                            <td>0.00</td>
                            <td>0.00</td>
                            <td>2015/08/11</td>
                            <td><a href="">查看　</a><a href="">下载</a></td>
                        </tr>
                          <tr>
                            <td>0.00</td>
                            <td>0.00</td>
                            <td>2015/08/11</td>
                            <td>0.00</td>
                            <td>0.00</td>
                            <td>2015/08/11</td>
                            <td><a href="">查看　</a><a href="">下载</a></td>
                        </tr>
                          <tr>
                            <td>0.00</td>
                            <td>0.00</td>
                            <td>2015/08/11</td>
                            <td>0.00</td>
                            <td>0.00</td>
                            <td>2015/08/11</td>
                            <td><a href="">查看　</a><a href="">下载</a></td>
                        </tr>
                          <tr>
                            <td>0.00</td>
                            <td>0.00</td>
                            <td>2015/08/11</td>
                            <td>0.00</td>
                            <td>0.00</td>
                            <td>2015/08/11</td>
                            <td><a href="">查看　</a><a href="">下载</a></td>
                        </tr>
                        </tbody>
                    </table>
                    
                </div>
            </div>
            <!-- /投资记录 -->
            <!-- 资金记录 -->
            <div class="comRightBox defaultNone">
                <div class="comTitle">
                    <p>资金记录</p>
                    <span>【Financial records】</span>
                </div>
                <div class="comRigBotm moneyRec">
                    <p style="margin-top:5px;">
                        <b class="f-fgs">可用余额：</b>
                        <span class="f-fob">0.00</span>
                        <span class="f-fos">元</span>
                    </p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>编号</th>
                                <th>金额</th>
                                <th>类型</th>
                                <th>手续费</th>
                                <th>状态</th>
                                <th>时间</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>0.00</td>
                                <td>0.00</td>
                                <td>2015/08/11</td>
                                <td>0.00</td>
                                <td>0.00</td>
                                <td>2015/08/11</td>
                            </tr>
                            <tr>
                                <td>0.00</td>
                                <td>0.00</td>
                                <td>2015/08/11</td>
                                <td>0.00</td>
                                <td>0.00</td>
                                <td>2015/08/11</td>
                            </tr>
                            <tr>
                                <td>0.00</td>
                                <td>0.00</td>
                                <td>2015/08/11</td>
                                <td>0.00</td>
                                <td>0.00</td>
                                <td>2015/08/11</td>
                            </tr>
                            <tr>
                                <td>0.00</td>
                                <td>0.00</td>
                                <td>2015/08/11</td>
                                <td>0.00</td>
                                <td>0.00</td>
                                <td>2015/08/11</td>
                            </tr>
                            <tr>
                                <td>0.00</td>
                                <td>0.00</td>
                                <td>2015/08/11</td>
                                <td>0.00</td>
                                <td>0.00</td>
                                <td>2015/08/11</td>
                            </tr>
                            <tr>
                                <td>0.00</td>
                                <td>0.00</td>
                                <td>2015/08/11</td>
                                <td>0.00</td>
                                <td>0.00</td>
                                <td>2015/08/11</td>
                            </tr>
                            <tr>
                                <td>0.00</td>
                                <td>0.00</td>
                                <td>2015/08/11</td>
                                <td>0.00</td>
                                <td>0.00</td>
                                <td>2015/08/11</td>
                            </tr>
                            <tr>
                                <td>0.00</td>
                                <td>0.00</td>
                                <td>2015/08/11</td>
                                <td>0.00</td>
                                <td>0.00</td>
                                <td>2015/08/11</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /资金记录 -->
            <!-- 认证管理 -->
            <div class="comRightBox defaultNone">
                <div class="comTitle">
                    <p>认证管理</p>
                    <span>【Certified Management】</span>
                </div>
                <div class="comRigBotm certManage">
                    <div class="certHead">
                        <p><span class="certPhone">手机认证</span></p>
                        <p><span class="certIDCard">实名/银行卡认证</span></p>
                        <p><span class="certMail">邮箱认证</span></p>
                    </div>
                    <div class="certForm">
                        <div class="certPhoneCon">
                            <p>手机号码：182******111</p>
                        </div>
                        <div class="certIDCardCon">
                            <form action="#" method="post">
                                    <label for="realName">真实姓名：</label>
                                    <input type="text" id="realName" placeholder="真实姓名"/>
                                    <label for="IDCardNum">身份证号:</label>
                                    <input type="text" id="IDCardNum" placeholder="身份证号码" />
                                    <label for="bankName">开户银行:</label>
                                    <input type="text" id="bankName" placeholder="开户银行" />
                                    <label for="Partbank">开户支行:</label>
                                    <input type="text" id="Partbank" placeholder="开户支行" />
                                    <label for="bankCardNum">银行卡号:</label>
                                    <input type="text" id="bankCardNum" placeholder="开户支行" />
                                    <!-- <span class="warnSpan">&nbsp;</span> -->
                                    <!-- <span class="Getverify">获取验证码</span> -->
                                    <button>确认提交</button>
                                </form>
                        </div>
                        <div class="certMailCon">
                           
                                <form action="#" method="post">
                                    <label for="eMailverify">邮箱账号：</label>
                                    <input type="text" id="eMailverify" />
                                    
                                        <label for="emailVeryCod">验 证 码：</label>
                                    <div class="emailVerCodBox">
                                        <input type="text" id="emailVeryCod" placeholder="请输入您收到的验证码" />
                                        <input type="button" value="获取验证码" class="Getverify" >
                                    </div>
                                    <div class="search-form" action="#" target="_blank">
                                        <input type="text" class="search-text" name="q"/>
                                        <input type="submit" class="search-button" value="获取验证码"/>
                                    </div>
                                    <span class="warnSpan">&nbsp;</span>
                                    <!-- <span class="Getverify">获取验证码</span> -->
                                    <button>确认提交</button>
                                </form>
                                
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- /认证管理 -->
            <!-- 积分管理 -->
            <div class="comRightBox defaultNone">
                <div class="comTitle">
                    <p>积分管理</p>
                    <span>【Integral Management】</span>
                </div>
                <div class="comRigBotm inteManage">
                    <p style="margin-top:5px;">
                        <b class="f-fgs">剩余积分：</b>
                        <span class="f-fob">10</span>
                        <span class="interTxt f-fr"><a href="#">如何获得积分</a></span>
                    </p>
                     <table class="table">
                        <thead>
                            <tr>
                                <th>编号</th>
                                <th>积分</th>
                                <th>类型</th>
                                <th>剩余积分</th>
                                <th>时间</th>
                                <th>明细</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td class="f-fco">+10</td>
                                <td class="f-fcg">收入</td>
                                <td>10</td>
                                <td>2015/08/11</td>
                                <td>注册</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td class="f-fco">+10</td>
                                <td class="f-fcg">收入</td>
                                <td>10</td>
                                <td>2015/08/11</td>
                                <td>注册</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td class="f-fco">+10</td>
                                <td class="f-fcg">收入</td>
                                <td>10</td>
                                <td>2015/08/11</td>
                                <td>注册</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td class="f-fco">+10</td>
                                <td class="f-fcg">收入</td>
                                <td>10</td>
                                <td>2015/08/11</td>
                                <td>注册</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td class="f-fco">+10</td>
                                <td class="f-fcg">收入</td>
                                <td>10</td>
                                <td>2015/08/11</td>
                                <td>注册</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td class="f-fco">+10</td>
                                <td class="f-fcg">收入</td>
                                <td>10</td>
                                <td>2015/08/11</td>
                                <td>注册</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td class="f-fco">+10</td>
                                <td class="f-fcg">收入</td>
                                <td>10</td>
                                <td>2015/08/11</td>
                                <td>注册</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td class="f-fco">+10</td>
                                <td class="f-fcg">收入</td>
                                <td>10</td>
                                <td>2015/08/11</td>
                                <td>注册</td>
                            </tr>
                           
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /积分管理 -->
            <!-- 更多信息 -->
            <div class="comRightBox defaultNone">
                <div class="comTitle">
                    <p>更多信息</p>
                    <span>【More information】</span>
                </div>
                <div class="comRigBotm moreInfo">
                    <div class="infoHead">
                        <p><span class="jinjiSpan">紧急联系人</span></p>
                        <p><span class="zichanSpan">资产收益人</span></p>
                    </div>
                    <div class="infoForm">
                        <div class="infoJinji">
                            <form action="#" method="post">
                                <label for="jinjiMan">紧急联系人：</label>
                                <input type="text" id="jinjiMan" />
                                <label for="jinjiPhNum">联系人号码：</label>
                                <input type="text" id="jinjiPhNum" />
                                <button>确认提交</button>
                            </form>
                        </div>
                        <div class="infozichan">
                            <form action="#" method="post">
                                <label for="shouyiMan">资产受益人：</label>
                                <input type="text" id="shouyiMan" />
                                <label for="shouyiPhNum">受益人号码：</label>
                                <input type="text" id="shouyiPhNum" />
                                <button>确认提交</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /更多信息 -->
            <!-- 修改密码 -->
            <div class="comRightBox defaultNone">
                <div class="comTitle">
                    <p>修改密码</p>
                    <span>【Change Password】</span>
                </div>
                <div class="comRigBotm changePw">
                    <hr />
                    <form action="#" method="post">
                        <label for="newPw">新的密码：</label>
                        <input type="password" id="newPw" />
                        <label for="newRePw">确认密码：</label>
                        <input type="password" id="newRePw" />
                        <button>确认提交</button>
                    </form>
                </div>
            </div>
            <!-- /修改密码 -->
       
        </div>  <!-- TabRight end-->
      
    </div>　　<!-- comContent end-->



    <!-- 公共底部 -->
    <?php  include("./footer.php"); ?>
   <!-- /公共底部 -->
   
    
   
       




    



    
    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/main.js"></script>
</body>
</html>