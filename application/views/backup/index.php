<?php if(!defined('BASEPATH')) exit('No direct script access allowed');?>
<!doctype html>
<html>
<head>
    
<?php
include dirname(dirname(__FILE__))."\common\head.html";;
?>

</head>

<body>
<div class="wrapper setting-wrap">
    <div class="mod-toolbar-top cf">
        <a class="ui-btn ui-btn-sp fl mrb" id="start-backup" herf="#">开始备份</a>
        <!--<a class="ui-btn fl" id="auto-backup" herf="#">自动备份</a>-->
        <!--<a herf="#" class="ui-btn fl local-recover" id="localRecover">上传本地备份</a>-->
    </div>
    <div class="grid-wrap">
    	<div id="backup-status" class="backup-status"></div>
    </div> 
</div>
<script src="<?=skin_url()?>/js/dist/backup.js?2"></script>
</body>
</html>