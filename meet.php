<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=Big5">
<title>個人行事曆</title>
<link rel="stylesheet" href="./js/jquery-ui.css">
<script src="./js/jquery.js"></script>
<script src="./js/jquery-ui.js"></script>
<link rel="stylesheet" href="./js/style.htm">

<style type="text/css">
	li.ui-state-default{
		font-size: 14px;
	}	
	
</style>

<script>  $(function() {    $( "#tabs" ).tabs();  });  </script>
</head>

<body bgcolor="#000000" text="#FFFFFF">
<div class="ui-tabs ui-widget ui-widget-content ui-corner-all" id="tabs">
	<ul role="tablist" class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
		
		<li aria-selected="true" aria-labelledby="ui-id-1" aria-controls="tabs-1" tabindex="0" role="tab" class="ui-state-default ui-corner-top ui-tabs-active ui-state-active"><a id="ui-id-1" tabindex="-1" role="presentation" class="ui-tabs-anchor" href="#tabs-1">個人行事曆</a></li>
        
		<li aria-selected="false" aria-labelledby="ui-id-2" aria-controls="tabs-2" tabindex="-1" role="tab" class="ui-state-default ui-corner-top"><a id="ui-id-2" tabindex="-1" role="presentation" class="ui-tabs-anchor" href="#tabs-2">最新公告</a></li>
        
		<li aria-selected="false" aria-labelledby="ui-id-3" aria-controls="tabs-3" tabindex="-1" role="tab" class="ui-state-default ui-corner-top"><a id="ui-id-3" tabindex="-1" role="presentation" class="ui-tabs-anchor" href="#tabs-3">未使用</a></li>
        
		<li aria-selected="false" aria-labelledby="ui-id-4" aria-controls="tabs-4" tabindex="-1" role="tab" class="ui-state-default ui-corner-top"><a id="ui-id-4" tabindex="-1" role="presentation" class="ui-tabs-anchor" href="#tabs-4">未使用</a></li>
        
	</ul>
	<div aria-hidden="false" aria-expanded="true" role="tabpanel" class="ui-tabs-panel ui-widget-content ui-corner-bottom" aria-labelledby="ui-id-1" id="tabs-1">
      
      
     <input type="button" value="返回首頁" onclick="self.location.href='index2.php'" />
      <p>
        <iframe src="./my.php" height="100%" width="100%"></iframe>
      </p>
	  
	</div>
	<div aria-hidden="true" aria-expanded="false" style="display: none;" role="tabpanel" class="ui-tabs-panel ui-widget-content ui-corner-bottom" aria-labelledby="ui-id-2" id="tabs-2">
    <input type="button" value="返回首頁" onclick="self.location.href='index2.php'" />
		<p><iframe src="http://163.17.21.59/p/ice/XMLBulletin/newslist.php" height="100%" width="100%"></iframe></p>
	</div>
	<div aria-hidden="true" aria-expanded="false" style="display: none;" role="tabpanel" class="ui-tabs-panel ui-widget-content ui-corner-bottom" aria-labelledby="ui-id-3" id="tabs-3">
	   <p><iframe src="./js/#.htm" height="100%" width="100%"></iframe></p>
	</div>
	<div aria-hidden="true" aria-expanded="false" style="display: none;" role="tabpanel" class="ui-tabs-panel ui-widget-content ui-corner-bottom" aria-labelledby="ui-id-4" id="tabs-4">
	   <ul role="tablist" class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
	     <input type="button" value="回首頁" onClick="self.location.href='index.php'" />
      </ul>
	   <p>&nbsp;</p>
	   <p>
	     <iframe src="./js/#.htm" height="100%" width="100%"></iframe>
      </p>
	   <p>&nbsp;</p>
	</div>
</div>




</body></html>