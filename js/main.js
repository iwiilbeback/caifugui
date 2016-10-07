$(function(){
	
	// 首页新闻模块加hover效果
    $(".media_box_content").mouseover(function() {
        $(this).css("background-color", "#fafafa");
    });
    $(".media_box_content").mouseout(function() {
        $(this).css("background-color", "#fff");
    });
    // 首页新闻模块加hover效果 end

    // 登录悬浮层
    function conPosition() {
        var oBackground = document.getElementById("background");
        var dw = $(document).width();
        var dh = $(document).height();
        oBackground.style.width = dw + 'px';
        oBackground.style.height = dh + 'px';
        var oContent = document.getElementById("content");
        var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
        var l = (document.documentElement.clientWidth - oContent.offsetWidth) / 2;
        var t = ((document.documentElement.clientHeight - oContent.offsetHeight) / 2) + scrollTop;
        // var t = ((document.documentElement.clientHeight / 2) - (oContent.offsetHeight / 2) );
        oContent.style.left = l + 'px';
        oContent.style.top = t + 'px';
    }
    $(".btnLogin").click(function() {
        $("#background, #content").fadeIn('slow');
        conPosition();
    });
    $("#background,#close").click(function() {
        $("#background, #content").hide();
    });

    $(document).keyup(function() {
        if (event.keyCode == 27) {
            $("#background,#content").hide();
        }
    })
    $(window).resize(function() {
        conPosition();
    });
     // 登录悬浮层 end

     // joinus,account,about 左侧标签切换
    var $tabLeft = $(".comLeftMune .muneUnit");
    $(".comLeftMune .muneUnit:first()").addClass('muneUnitHover');
    // $("#account .comLeftMune .muneUnit:eq(4)").addClass('muneUnitHover');
    $tabLeft.click(function() {
        $(this).addClass('muneUnitHover').siblings().removeClass('muneUnitHover');
        var index = $tabLeft.index(this);
        $(".TabRight>.comRightBox").eq(index).show("slow").siblings().hide("slow");
    });

     // 回到顶部
    $(window).scroll(function() {
        if ($(window).scrollTop() > 1000)
            $('div.go-top').show();
        else
            $('div.go-top').hide();
    });
    $('div.go-top').click(function() {
        $('html, body').animate({
            scrollTop: 0
        }, 1000);
    });


    // 账户中心　更多信息切换效果
    var $infoSpan = $(".moreInfo .infoHead p");
    $(".moreInfo .infoHead p:first()").addClass('infoPHover');
    // $(".infoHead p:first()>span").addClass('infoSpanHover');

    $infoSpan.click(function() {

        $(this).addClass('infoPHover').siblings().removeClass('infoPHover');


        var index = $infoSpan.index(this);
        $(".infoForm>div").eq(index).show("slow").siblings().hide("slow");
    })
	
	// 账户中心　认证管理切换效果
    var $certP = $(".certManage .certHead P");
    $(".certManage .certHead P:first()").addClass('certPHover');
    $certP.click(function() {
        $(this).addClass('certPHover').siblings().removeClass('certPHover');
        var index = $certP.index(this);
        $(".certForm>div").eq(index).show().siblings().hide();
    });

    // 账户中心　充值　提现按钮
    $("#chongqian").click(function() {
        $(".TabRight>.comRightBox").hide();
        $(".chongzhiBox").show();
    });

    $("#tixian").click(function() {
        $(".TabRight>.comRightBox").hide();
        $(".tixianBox").show();
    });

    // 投资详情　切换效果
    var $detConSpan = $(".invdetCont .detContHead span");
    $(".invdetCont .detContHead span:first()").addClass('invdetSpanHover');

    $detConSpan.click(function() {
        $(this).addClass('invdetSpanHover').siblings().removeClass('invdetSpanHover');
        var index = $detConSpan.index(this);
        $(".invdetCont .detContBotm>div").eq(index).show().siblings().hide();

    });
    /*详情页 抵押物轮播器*/
    var container = $('#containerss');
    var list = $('#list');
    var buttons = $('#buttons span');
    var prev = $('#prev');
    var next = $('#next');
    var index = 1;
    var len = $('#list img').length;
    var interval = 3000;
    var timer;

    function animate(offset) {
        var left = parseInt(list.css('left')) + offset;
        if (offset > 0) {
            offset = '+=' + offset;
        } else {
            offset = '-=' + Math.abs(offset);
        }
        list.animate({
            'left': offset
        }, 0, function() {
            if (left > 0) {
                list.css('left', -480 * (len - 2));
            }
            if (left < (-480 * (len - 2))) {
                list.css('left', 0);
            }
        });
    }

    next.bind('click', function() {
        animate(480);
    })
    prev.bind('click', function() {
        animate(-480);
    })
 	/*/详情页 抵押物轮播器*/


})//　jq end

