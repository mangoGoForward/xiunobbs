<?php exit;?>	2020-07-08 10:55:21	127.0.0.1	/	0	DELETE FROM `bbs_online` WHERE last_date<'1594173321'
<?php exit;?>	2020-07-08 10:55:21	127.0.0.1	/	0	REPLACE INTO bbs_kv SET  k='runtime_append', v='{\"cron_1_last_date\":1594176921}'
<?php exit;?>	2020-07-08 10:55:21	127.0.0.1	/	0	UPDATE `bbs_forum` SET `todayposts`='0',`todaythreads`='0' WHERE fid='1'
<?php exit;?>	2020-07-08 10:55:21	127.0.0.1	/	0	DELETE FROM `bbs_online` WHERE last_date<'1594173321'
<?php exit;?>	2020-07-08 10:55:21	127.0.0.1	/	0	TRUNCATE `bbs_ipaccess`
<?php exit;?>	2020-07-08 10:55:21	127.0.0.1	/	0	TRUNCATE `bbs_guest_agree`
<?php exit;?>	2020-07-08 10:55:21	127.0.0.1	/	0	REPLACE INTO bbs_kv SET  k='runtime_append', v='{\"cron_1_last_date\":1594176921,\"cron_2_last_date\":1594137600}'
<?php exit;?>	2020-07-08 10:55:21	127.0.0.1	/	0	REPLACE INTO bbs_table_day SET `year`='2020', `month`='7', `day`='8', `create_date`='1594148121', `table`='bbs_thread', `maxid`='', `count`='0'
<?php exit;?>	2020-07-08 10:55:21	127.0.0.1	/	0	REPLACE INTO bbs_table_day SET `year`='2020', `month`='7', `day`='8', `create_date`='1594148121', `table`='bbs_post', `maxid`='', `count`='0'
<?php exit;?>	2020-07-08 10:55:21	127.0.0.1	/	0	REPLACE INTO bbs_table_day SET `year`='2020', `month`='7', `day`='8', `create_date`='1594148121', `table`='bbs_user', `maxid`='', `count`='0'
<?php exit;?>	2020-07-08 10:55:43	127.0.0.1	/index.htm	0	REPLACE INTO `bbs_online` SET `sid`='5f05359974d6b',`uid`='0',`gid`='0',`fid`='0',`url`='/index.htm',`ip`='2130706433',`useragent`='Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Safari/537.36',`data`='',`last_date`='1594176943'
<?php exit;?>	2020-07-08 10:55:54	127.0.0.1	/admin/index-login.htm	0	UPDATE `bbs_user` SET `login_ip`='2130706433',`login_date`='1594176954',`logins`=`logins`+'1' WHERE uid='1'
<?php exit;?>	2020-07-08 10:55:56	127.0.0.1	/admin/	1	REPLACE INTO bbs_kv SET  k='last_version', v='1594176956'
<?php exit;?>	2020-07-08 10:58:42	127.0.0.1	/	1	REPLACE INTO `bbs_online` SET `sid`='5f05359974d6b',`uid`='1',`gid`='1',`fid`='0',`url`='/',`ip`='2130706433',`useragent`='Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Safari/537.36',`data`='',`last_date`='1594177122'
<?php exit;?>	2020-07-08 11:00:42	127.0.0.1	/thread-create.htm	1	INSERT INTO `bbs_post` SET `tid`='0',`isfirst`='1',`uid`='1',`create_date`='1594177242',`userip`='2130706433',`sid`='5f05359974d6b',`message`='<p>这是一个什么样的网站</p>'
<?php exit;?>	2020-07-08 11:00:42	127.0.0.1	/thread-create.htm	1	INSERT INTO `bbs_thread` SET `fid`='1',`subject`='这是一个什么样的网站',`uid`='1',`create_date`='1594177242',`last_date`='1594177242',`firstpid`='1',`lastpid`='1',`userip`='2130706433'
<?php exit;?>	2020-07-08 11:00:42	127.0.0.1	/thread-create.htm	1	UPDATE `bbs_user` SET `threads`=`threads`+'1' WHERE uid='1'
<?php exit;?>	2020-07-08 11:00:42	127.0.0.1	/thread-create.htm	1	UPDATE `bbs_forum` SET `threads`=`threads`+'1',`todaythreads`=`todaythreads`+'1' WHERE fid='1'
<?php exit;?>	2020-07-08 11:00:42	127.0.0.1	/thread-create.htm	1	UPDATE `bbs_post` SET `tid`='1' WHERE pid='1'
<?php exit;?>	2020-07-08 11:00:42	127.0.0.1	/thread-create.htm	1	INSERT INTO `bbs_thread_new` SET tid='1'
<?php exit;?>	2020-07-08 11:00:42	127.0.0.1	/thread-create.htm	1	INSERT INTO `bbs_mythread` SET uid='1', tid='1'
<?php exit;?>	2020-07-08 11:00:42	127.0.0.1	/thread-create.htm	1	INSERT INTO `bbs_thread_lastpid` SET tid='1', lastpid='1'
<?php exit;?>	2020-07-08 11:01:33	127.0.0.1	/thread-create.htm	1	INSERT INTO `bbs_post` SET `tid`='0',`isfirst`='1',`uid`='1',`create_date`='1594177293',`userip`='2130706433',`sid`='5f05359974d6b',`message`='<p>这是一个什么样的网站</p>'
<?php exit;?>	2020-07-08 11:01:33	127.0.0.1	/thread-create.htm	1	INSERT INTO `bbs_thread` SET `fid`='1',`subject`='这是一个什么样的网站',`uid`='1',`create_date`='1594177293',`last_date`='1594177293',`firstpid`='2',`lastpid`='2',`userip`='2130706433'
<?php exit;?>	2020-07-08 11:01:33	127.0.0.1	/thread-create.htm	1	UPDATE `bbs_user` SET `threads`=`threads`+'1' WHERE uid='1'
<?php exit;?>	2020-07-08 11:01:33	127.0.0.1	/thread-create.htm	1	UPDATE `bbs_forum` SET `threads`=`threads`+'1',`todaythreads`=`todaythreads`+'1' WHERE fid='1'
<?php exit;?>	2020-07-08 11:01:33	127.0.0.1	/thread-create.htm	1	UPDATE `bbs_post` SET `tid`='2' WHERE pid='2'
<?php exit;?>	2020-07-08 11:01:33	127.0.0.1	/thread-create.htm	1	INSERT INTO `bbs_thread_new` SET tid='2'
<?php exit;?>	2020-07-08 11:01:33	127.0.0.1	/thread-create.htm	1	INSERT INTO `bbs_mythread` SET uid='1', tid='2'
<?php exit;?>	2020-07-08 11:01:33	127.0.0.1	/thread-create.htm	1	INSERT INTO `bbs_thread_lastpid` SET tid='2', lastpid='2'
<?php exit;?>	2020-07-08 11:01:33	127.0.0.1	/thread-create.htm	1	REPLACE INTO `bbs_online` SET `sid`='5f05359974d6b',`uid`='1',`gid`='1',`fid`='1',`url`='/thread-create.htm',`ip`='2130706433',`useragent`='Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Safari/537.36',`data`='',`last_date`='1594177293'
<?php exit;?>	2020-07-08 11:01:41	127.0.0.1	/	1	DELETE FROM `bbs_online` WHERE last_date<'1594173701'
<?php exit;?>	2020-07-08 11:01:41	127.0.0.1	/	1	REPLACE INTO bbs_kv SET  k='runtime_append', v='{\"cron_1_last_date\":1594177301,\"cron_2_last_date\":1594137600}'
<?php exit;?>	2020-07-08 11:01:54	127.0.0.1	/mod-delete-2.htm	1	DELETE FROM `bbs_thread` WHERE tid='2'
<?php exit;?>	2020-07-08 11:01:54	127.0.0.1	/mod-delete-2.htm	1	DELETE FROM `bbs_post` WHERE pid='2'
<?php exit;?>	2020-07-08 11:01:54	127.0.0.1	/mod-delete-2.htm	1	DELETE FROM `bbs_mythread` WHERE uid='1' AND tid='2' LIMIT 1
<?php exit;?>	2020-07-08 11:01:54	127.0.0.1	/mod-delete-2.htm	1	UPDATE `bbs_forum` SET `threads`=`threads`-'1' WHERE fid='1'
<?php exit;?>	2020-07-08 11:01:54	127.0.0.1	/mod-delete-2.htm	1	UPDATE `bbs_user` SET `threads`=`threads`-'1' WHERE uid='1'
<?php exit;?>	2020-07-08 11:01:54	127.0.0.1	/mod-delete-2.htm	1	DELETE FROM bbs_thread_url WHERE tid='2'
<?php exit;?>	2020-07-08 11:01:54	127.0.0.1	/mod-delete-2.htm	1	DELETE FROM `bbs_thread_new` WHERE tid='2'
<?php exit;?>	2020-07-08 11:01:54	127.0.0.1	/mod-delete-2.htm	1	DELETE FROM `bbs_thread_top` WHERE tid='2'
<?php exit;?>	2020-07-08 11:01:54	127.0.0.1	/mod-delete-2.htm	1	DELETE FROM `bbs_thread_lastpid` WHERE tid='2'
<?php exit;?>	2020-07-08 11:01:54	127.0.0.1	/mod-delete-2.htm	1	INSERT INTO `bbs_modlog` SET `uid`='1',`tid`='2',`pid`='2',`subject`='这是一个什么样的网站',`comment`='',`create_date`='1594177314',`action`='delete'
<?php exit;?>	2020-07-08 11:31:27	127.0.0.1	/mobile/thread-1.htm	1	UPDATE LOW_PRIORITY `bbs_thread` SET views=views+1 WHERE tid='1'