<?php

/* 
 * 与BTLike配套的前端页面
 * 作者:老季
 * 网址：http://www.jiloc.com
 * 安装完成后请手动配置修改以下参数
 */

// 定义标题
define('TITLE','BTMoster/BT巨兽');
// 定义描述
define('DESCRIPTION','BTMoster是收录最快，最全的bt搜索引擎。');
// 定义关键词
define('KEYWORDS','BT搜索,Magnet磁力搜索,电影下载,电视剧在线播放,在线观看');
// 定义域名路径
define('DOMAIN_PATH','//btmoster/');
// 定义API路径
//define('API_PATH','http://api.btlike.com/');
define('API_PATH','http://btmoster.com:8088/');



// 定义数据库地址
define('HOSTNAME','btmoster.com');
// 定义数据库用户名
define('DBUSERNAME','torrent');
// 数据库密码
define('DBPASSWD','jjjjjj');
// 定义数据库名
define('DBNAME','torrent');



// 定义统计代码
define('STATISTICS', '<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?a4cd99028565d3de95d4b68618c99c4d";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
');



/*-----------------------------------------------------------------------------------
 * 以下内容不用修改
 */

date_default_timezone_set('Asia/Shanghai'); 
try {
    $pdo = new PDO('mysql:host='.HOSTNAME.';dbname='.DBNAME, DBUSERNAME, DBPASSWD);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

// 定义torrent表名
$TBAry = array('0','1','2','3','4','5','6','7','8','9','a','b','c','d','e','f');

