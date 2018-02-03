<?php if (!defined('BASEPATH')) exit('No direct script access allowed');?>
<!doctype html>
<html>
<head>
    
<?php
include dirname(dirname(__FILE__))."\common\head.html";;
?>

</head>
<body>
<div class="wrapper">
	<div class="mod-toolbar-top cf">
	    <div class="left">
          <div class="mod-crumb fl"><span class="cur"></span></div>
          <div id="assisting-category-select" class="ui-tab-select">
            <strong class="tit">类别</strong>
            <ul class="ui-tab mrb">
            </ul>
            <span class="fl mrb dn">
               <span id="custom-assisting"></span>
            </span>
            <ul class="searchbox cf">
		        <li>
		          <input type="text" id="matchCon" class="ui-input ui-input-ph matchCon" value="输入类别名称查询">
		        </li>
		        <li><a class="ui-btn mrb" id="search"><?php echo showlang('common', 'common_query');?></a></li>
		    </ul>
          </div>
        </div>
	    <div class="fr"><a href="#" class="ui-btn ui-btn-sp mrb" id="btn-add"><?php echo showlang('common', 'common_add');?></a><a class="ui-btn" id="btn-refresh">刷新</a></div>
	  </div>
    <div class="grid-wrap">
	    <table id="grid">
	    </table>
	    <div id="page"></div>
	  </div>
</div>
<script src="<?=skin_url()?>/js/dist/categoryList.js?999"></script>

</body>
</html>

