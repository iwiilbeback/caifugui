	function openNew() {
		//获取页面的高度和宽度
		var sWidth=document.body.scrollWidth;
		var sHeight=document.body.scrollHeight;
		//获取页面的可视区域高度和宽度
		var wHeight=document.documentElement.clientHeight;

		var oMask=document.createElement("div");
		oMask.id="mask";
		oMask.style.height=sHeight+"px";
		oMask.style.width=sWidth+"px";
		document.body.appendChild(oMask);
		var oLogin=document.createElement("div");
		oLogin.id="login";
		document.body.appendChild(oLogin);
		// var logincontent = "<div class='loginCon'>
  //        <form action='#' method='post'>
  //       <div id='close'>点击关闭</div>
  //       <div class='loginTit'>登录财富柜</div>
  //       <div class='loginMain'>
  //           <input type='text' placeholder='用户名/手机号码' value='' id='loginUser' class='f-fl' /><span class='f-fl'><a href=''>忘记用户名？</a></span>
  //           <input type='password' placeholder='' value='' id='loginPw' class='f-fl' /><span class='f-fl'><a href=''>忘记密码？</a></span>
  //           <p class='f-fl'>
  //           <b>验证码</b> 
  //           <input type='password' placeholder='' value='' id='loginVerify' /> 
  //           <img src='./img/icon/loginVerify.png' />
  //           <span><a href="">换一张</a></span>
  //           </p>
  //           <button class='f-fl'>立即登录</button>
  //           <div class='loginGoReg f-fl'>
  //               <span>没有账号？</span><a href=''>免费注册</a>
  //           </div>
  //       </div>
  //       </form>
  //   </div>";
    	// var logincontent = "<div class='loginCon'><div id='close'>点击关闭</div></div>";
		$("#login").html("<div class='loginCon'><div id='close'>点击关闭</div></div>");
		// $("#login").html(logincontent);
		$(".loginCon").show();
		// $("#login").hide();
		$("#login").fadeIn('slow');
	
		//获取登陆框的宽和高
		var dHeight=oLogin.offsetHeight;
		var dWidth=oLogin.offsetWidth;
			//设置登陆框的left和top
		oLogin.style.left=sWidth/2-dWidth/2+"px";
		oLogin.style.top=wHeight/2-dHeight/2+"px";
		
		$("#close,#mask").on('click', function() {
			$("#login,#mask").remove();
		});
	}
	
	$("#btnLogin").click(function(event) {
		openNew();
		return false;
	});
	$(document).keyup(function(){
        if(event.keyCode == 27){
            $("#login,#mask").remove();
              }
        })
