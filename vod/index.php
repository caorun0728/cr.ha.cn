<?php 
if(htmlspecialchars($_GET['u'])){
	header("location: index.php#!u=".htmlspecialchars($_GET['u']));
}
?>
<!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>�Ƶ㲥4.3-�Ʋ���|�Ʋ�|�Ƶ㲥|��Ȩ����</title>
<meta name="keywords" content="�Ʋ�,�Ƶ㲥,������Ȩ,�Ʋ���,�Ƶ���,yun,С���Ʋ�,�氮�Ƶ㲥,�����Ʋ���,�϶���,��ͨ����"/>
<meta name="description" content="�Ƶ㲥4.3�Ǽ�����汾�Ƶ㲥��BT���ӡ���Ƶ�����������߿��ٲ��ŵķ���֧�ֶ��������ƻ���Ͱ�׿ϵͳ��ipad���ƶ��豸"/>
<link href="./yb/css/style.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="favicon.ico"><script src="./yb/js/190.js" type="text/javascript"></script>
<script src="./yb/js/94d0b14f.js" type="text/javascript"></script>
<script>
	var right_str ='QQ����Ⱥ[-0-]';
	var left_str = '�Ƶ㲥4.3��汾�Ƶ㲥��ʽ���ߣ���ӭ�´�ʹ�ã��ǵü����ղؼ�Ŷ~лл����֧�֣�';
	function setCookie(name,value){
		var Days = 30;
		var exp = new Date(); 
		exp.setTime(exp.getTime() + Days*24*60*60*1000);
		document.cookie = name + "="+ escape (value) + ";expires=" + exp.toGMTString();
	}
	//��ȡcookies
	function getCookie(name){
		var arr,reg=new RegExp("(^| )"+name+"=([^;]*)(;|$)");
		if(arr=document.cookie.match(reg)) return unescape(arr[2]);
		else return null;
	}
	//ɾ��cookies
	function delCookie(name){
		var exp = new Date();
		exp.setTime(exp.getTime() - 1);
		var cval=getCookie(name);
		if(cval!=null) document.cookie= name + "="+cval+";expires="+exp.toGMTString();
	}

</script>
<script src="./yb/function.js" type="text/javascript"></script>
</head>

 <?php
$edfunc = htmlspecialchars($_COOKIE['edfunc']);
$edarray = array('iapi', 'oapi', 'zapi', 'capi');
if(!in_array($edfunc, $edarray))	$edfunc = "iapi";		
$edchang[$edfunc] = "checked";
$u = htmlspecialchars($_POST['u']);
$u = !trim($u) || $u == '�ڴ�������Ƶ���ӣ�thunder��ftp��http��ed2k��magnet��xplan��mms��bt://�����ϴ�BT����' ? null : $u;
$iframeurl	= $u ? "http://vod.7ibt.com/$edfunc.php?url=".$u : './yb/yundianbo.htm';
$ustr = $u ? $u : '�ڴ�������Ƶ���ӣ�thunder��ftp��http��ed2k��magnet��xplan��mms��bt://�����ϴ�BT����';

if($u){
	$uri = $u;

	if( preg_match('/^magnet:\?(.*)/i', $uri, $m) ){
		$newuri = strtoupper($m[1]);
		$btinurl = 1;
	}elseif(strtoupper(substr($uri, 0, 2)) == 'BT'){
		$btinurl = 1;
		$uri = urldecode($uri);
		preg_match('/^bt:\/\/([A-F0-9]{40})(?:(?:\/(\d+))?)$/i', $uri, $m);
		$newuri = strtoupper($m[1]);
	}elseif(preg_match('/^([A-F0-9]{40})$/i', $uri, $m)){
		$btinurl = 1;
		$newuri = strtoupper($m[1]);
	}
	
	
	if($btinurl == 1){
		$btfile = 'http://bt.box.n0808.com/'.substr($newuri, 0, 2).'/'.substr($newuri, -2).'/'.$newuri.'.torrent';
		$hashdown = $btfile;
	}elseif(substr($gurl, 0, 7) == 'thunder'){
		$isthunder = 1;
		$hashdown = urldecode($u);
	}
}

?>

<body>
<div class="header">
	<div class="wrap">
		<div class="logo"><a href="./"><img src="./yb/img/logo.gif"/></a></div>
		<ul class="sub_nav">

<li><a class="hdstyle1" target="_blank" style="margin-top:16px; padding:6px 8px 3px 8px;" href="./diaoyong.html"> - ���ýӿ� -</a></li>
<li><a class="hdstyle1"style="margin-top:16px; padding:6px 8px 3px 8px;" href="./"> - ˢ����ҳ - </a></li>
</ul> 

</div>
</div>
<div class="main">
	<div style="height:5px;" class="cls"></div>
	<div class="wrap">
	<div id="player" style="height: 515px;margin: 5px auto 10px;text-shadow: 0 0 5px #000;box-shadow: 0 0 10px 0 #000;position: relative;z-index: 100;background-color: #000000;background-repeat: repeat;">
<div align="center"> <div style="width: 960px; overflow: hidden;"><div style="margin-top: -140px; margin-left: -160px; margin-right: 0px; height: 660px; width: 1280px;  overflow: hidden;"><iframe scrolling="no" frameborder="0" align="center" name="apiwind" id="apiwind" rel="nofollow" border="0" style="background:#000; word-wrap: break-word; width: 1280px; height: 655px" src="<?php echo $iframeurl;?>"></iframe></div></div>
</div>  </div>
     </div>

	<div style="height:10px;" class="cls"></div>
	<div class="wrap" style="height:15px;">
		<span class="instant" style="float: left">ѡ��Ĭ�ϵ��Ƶ㲥�汾��
			<label style="padding-right:5px; cursor:pointer;"><input type="radio" value="iapi" name="edchange" onclick="setCookie('edfunc',this.value);document.getElementById('apiwind').src='http://vod.7ibt.com/'+this.value+'.php?url=<?php echo $u;?>';" <?php echo $edchang['iapi'];?>>��ͨ��һ</label>
			<label style="padding-right:5px; cursor:pointer;"><input type="radio" value="oapi" name="edchange" onclick="setCookie('edfunc',this.value);document.getElementById('apiwind').src='http://vod.7ibt.com/'+this.value+'.php?url=<?php echo $u;?>';" <?php echo $edchang['oapi'];?>>��ͨ����</label>
			<label style="padding-right:5px; cursor:pointer;"><input type="radio" value="zapi" name="edchange" onclick="setCookie('edfunc',this.value);document.getElementById('apiwind').src='http://vod.7ibt.com/'+this.value+'.php?url=<?php echo $u;?>';" <?php echo $edchang['zapi'];?>>������Ļ��</label>
			<label style="padding-right:5px; cursor:pointer;"><input type="radio" value="capi" name="edchange" onclick="setCookie('edfunc',this.value);document.getElementById('apiwind').src='http://vod.7ibt.com/'+this.value+'.php?url=<?php echo $u;?>';" <?php echo $edchang['capi'];?>>����CK��</label>
		</span>
		<div class="right" style="float: right;"><a href="javascript:;" class="instant" onclick="alert('���Ƶ㲥�����ĸ��汾��\n\n\r ��ͨ��һ����������ͨ���������Ͻǿ����л���\n\r ��ͨ������Ҳ��������ͨ���������Ͻǿ����л���\n\r ������Ļ�棺���غͻ����ٶȿ죬�Զ�������Ļ�����϶��ѻ�������\n\r ����CK�棺CK�����������غͻ����ٶȿ죻\n\n����������ѡ������汾���Ƶ㲥���йۿ���'); return false;">����˽���汾������</a></div>
	</div>
	

	<div class="input_wrap">
		<form id="frompost" method="post" autocomplete="off" name="" action="./">
			<div class="txt_wrap"<?php if($u){?> style="width:640px;"<?php }?>>
				<input id="u" name="u" value="<?php echo $ustr;?>" type="text">
			</div>
			<?php if($u){?>
			<script src="http://pstatic.xunlei.com/js/webThunderDetect.js"></script>
			<script src="http://pstatic.xunlei.com/js/base64.js"></script>
			<script language="JavaScript" type="text/javascript">
			var thunder_url = "<?php echo $hashdown;?>";
			var thunder_pid = "25284";
			var restitle = "";
			document.write('<a class="btn_download" href="#" thunderHref="' + <?php if($isthunder){?>thunder_url<?php }else{?>ThunderEncode(thunder_url)<?php }?> + '" thunderPid="' + thunder_pid + '" thunderResTitle="' + restitle + '" onClick="return OnDownloadClick_Simple(this,2,4); return false;" oncontextmenu="ThunderNetwork_SetHref(this)" style="margin-left:10px;" id="thunderdown">���ر�Ƭ</a>');
			</script>
			<?php }?>
			<a class="btn_bt" href="#" onclick="return false;" id="btupload">BT�ϴ�</a>
			<a class="btn_url" href="#" onclick="return false;" id="playnow" name="playnow">����</a>
			<input type="submit" id="playfrm" name="playfrm" value="playfrm" style="cursor: pointer; display:none;"/>
		</form>
	</div>

	
	<div style="height:10px;" class="cls"></div>

	<div class="daysbox days">
		<div class="wrap" style="padding-top:12px;">
			<a href="./index.php#!u=51DA518BC32097016FB0300159F337D877821646" class="instant">���޴�ѧ</a> | 
			<a href="./index.php#!u=magnet:?xt=urn:btih:c0d974e2bb8b407fcba5961fc01db289ebd81e22" class="instant">��̫ƽ��</a> | 
			<a href="./index.php#!u=8477295aef5df773b78c712ca870555eb769a457" class="instant">ԭʼ�˸���</a> | 
			<a href="./index.php#!u=D031A95669600959165E119B6F1ACB19F74AC0C7" class="instant">�ط�����</a> | 
			<a href="./index.php#!u=247294757246EBF4458D5C1208E921540A0EA771" class="instant">��̨</a> | 
			<a href="./index.php#!u=B4C1408D8AA8AA2EC6FD6D15FE0CC962AF45BF2D" class="instant">����֮��</a> | 
			<a href="./index.php#!u=32936ED390EA9553AEC7E0CAD4D02D46CA380E6E" class="instant">ä̽</a> | 
			<a href="./index.php#!u=C4759FE57225B30A4A59810B5C2B489899EA92B3" class="instant">Сʱ��-����</a> | 
			<a href="./index.php#!u=47B118BFBBFE4E5CE5A55C9893B805F499D4A4EA" class="instant">������̽</a> | 
			<a href="./index.php#!u=ftp%3A%2F%2Fdy131.com%3A6vdy.com%40ftp1.66e.cc%3A1528%2F%A1%BE%D7%EE%D0%C2%B5%E7%D3%B0www.66e.cc%A1%BF%C8%CB%C0%E0%C7%E5%B3%FD%BC%C6%BB%AEHD%D6%D0%D7%D61280%B0%E6.mkv" class="instant">��������ƻ�HD</a> | 
			<a href="./index.php#!u=thunder://QUFmdHA6Ly9iZDpiZEBmMDA4LmZmZHkuY2M6NzI5L7bMsfq4qzNCRNbQ19Yucm12Ylpa" class="instant">�̱���3</a> | 
			<a href="./index.php#!u=F5AF99D9DB12A618842F6DA883132D4D37B50E78" class="instant">�й��ϻ���</a> | 
			<a href="./index.php#!u=3E6346278ACB203BC1EBBA1F19FC8A3CA7DC6538" class="instant">������3</a> | 
			<a href="./index.php#!u=84E663C6C12A338FF979AE665385472EF0506729" class="instant">���ഺ</a>

		<br>
<!-- Baidu Button BEGIN -->
<script type="text/javascript" id="bdshare_js" data="type=slide&amp;img=0&amp;pos=right&amp;uid=6731140" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);
</script>
<!-- Baidu Button END -->
</div>

</div>

</body>
</html>