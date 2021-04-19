<meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title><?php echo $title; ?></title>
<script language="javascript" type="text/javascript" src="http://ratio.uwayapply.com/ratioadmin/Image/js/img_url_new.js"></script>

<link href=".//css/2017/ratio_15.css" rel="stylesheet" type="text/css">

<script language="javascript" type="text/javascript" src=".//js/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src=".//js/htm_control.js"></script>
<script>
	$(function(){
		if(!location.href.match(/(v=pc)/)){
			$('head').append('<meta name=\'viewport\' content=\'user-scalable=no, width=device-width\' />');if(navigator.userAgent.match(/(iPhone|Android|Opera Mini|SymblanOS|Windows CE|BlackBerry|Nokia|SonyEricsson|web OS|Palm)/) ){	$('body').after('<div style=\'text-align: center;\'><a style=\'color:#5b595b;\' href='+location.href+'?&v=pc><img src=\'.//btn_pcView.gif\' alt=\'PC버전으로보기\'></a></div>');	$('#ul_gobtn').hide(); }
		}

		if( !$('fieldset').is('.finalwrap') ){
			$("#header").attr("style",'height:75px;');
			$("#container").attr("style",'padding-top:50px;');
		}
	});
	$(window).scroll(function() {
		if($(window).scrollTop()>10) {
			$("#header").addClass("fixed");
		} else {
			$("#header").removeClass("fixed");
		}
	});
</script>