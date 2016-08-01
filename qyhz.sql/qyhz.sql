-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- 主机: localhost
-- 生成日期: 2016 年 04 月 29 日 07:24
-- 服务器版本: 5.0.45
-- PHP 版本: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 数据库: `qyhz`
-- 

-- --------------------------------------------------------

-- 
-- 表的结构 `arc`
-- 

CREATE TABLE `arc` (
  `arc_id` int(4) NOT NULL auto_increment,
  `lb` varchar(100) default NULL,
  `title` varchar(100) default NULL,
  `content` text,
  `arc_rq` datetime default NULL,
  `pic` varchar(100) NOT NULL,
  `hits` int(4) NOT NULL default '0',
  PRIMARY KEY  (`arc_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=144 ;

-- 
-- 导出表中的数据 `arc`
-- 

INSERT INTO `arc` (`arc_id`, `lb`, `title`, `content`, `arc_rq`, `pic`, `hits`) VALUES (134, '关于我们', '五一期间小店全场8.5折优惠！', '我们是中国化妆品行业风采独具、潜力非凡的新锐力量。悦目化妆品公司秉承“品质第一，服务第一，团队第一”的企业宗旨，坚持“天然、奢华、纯真”的品牌理念，凭藉“勇于探索，敢于拼搏”的企业精神，以市场为导向，以消费者为核心，研发销售美容护肤精品，在行业中拥有极好的声誉公司产品品牌“膜法世家1908”，聚焦“膜类产品”，树立品牌的差异化优势。旗下主要产品有精品面膜系列、天然蚕丝系列、膜方蜜汁系列、膜方护眼系列、膜方护唇系列、体膜系列等，是淘宝网最有竞争力的化妆品品牌之一，长期位居淘宝化妆品销售前五位。产品包装精美，品质精良，功效突出，深入广大消费者的喜爱，其中绿豆泥浆面膜、樱桃睡眠面膜、金桂蜜花瓣眼膜、蜂蜜柚子蜜汁等独家产品更是网销化妆品的明星。', '2016-04-10 00:00:00', 'upload/1461664992.jpg', 0);
INSERT INTO `arc` (`arc_id`, `lb`, `title`, `content`, `arc_rq`, `pic`, `hits`) VALUES (137, '新闻动态', '百强连锁“历史性”的共聚上海 818上海会议要达成哪些使命', '对于这次会议，广州冯建军营销策划有限公司总经理冯建军说：“如果百强连锁能够聚齐，这次会议将是历史性的”。<br />\r\n<br />\r\n据了解，2013年，化妆品报社经过一年多时间的集中调研，在走访了中国、欧美和日韩等多国市场之后发现，化妆品专营店渠道在世界各国的化妆品零售渠道中，都占据着非常重要的地位，而且发展空间十分广阔。<br />\r\n<br />\r\n但是，我国多达16万家的化妆品专营店仍然处于散、乱、小的局面，在面临电商及其它渠道的挤压时，缺乏相应的竞争手段和抗风险能力；在供应链上也缺乏科学的管理能力。即使是目前在各区域已经形成一定规模的区域性连锁店，在走向跨区域发展的过程中，也仍然面临很多无法突破的障碍，同时还缺乏横向交流，缺乏探讨和解决发展中的共性问题的平台。<br />', '2016-04-28 00:00:00', '', 0);
INSERT INTO `arc` (`arc_id`, `lb`, `title`, `content`, `arc_rq`, `pic`, `hits`) VALUES (138, '新闻动态', '化妆品中的维生素 都是啥 ', '化妆品由基质成分和皮肤护理成分组成，清洁类化妆品还会含有一些表面活性剂。但是化妆品的成分标识常采用一些专业的术语，让人们一头雾水，下面简单介绍一下化妆品中常用的维生素。<br />\r\n<br />\r\n　　维生素a：化妆品成分常标为视黄醇、视黄醛，口服具有维持正常视觉的功效，化妆品中它可以起到抗衰老的作用。<br />\r\n<br />\r\n　　维生素b3：化妆品成分标为烟酰胺，它具有强化表皮保湿屏障作用，另外它还可调节皮脂分泌，提亮肤色及淡化细纹。<br />\r\n<br />\r\n　　维生素b5：化妆品成分标为泛醇，它可增加皮肤的含水能力，达到温和保湿的作用。<br />\r\n<br />\r\n　　维生素c：化妆品成分标为抗坏血酸。它可清除体内氧自由基，化妆品中它主要起着抗氧化和美白的作用。<br />\r\n<br />\r\n　　维生素e：化妆品成分标为生育酚，与维生素c一样，具有很强的抗氧化能力，化妆品中它起着保湿、抗氧化及抗衰老的功效。<br />\r\n<br />', '2016-04-28 00:00:00', '', 0);
INSERT INTO `arc` (`arc_id`, `lb`, `title`, `content`, `arc_rq`, `pic`, `hits`) VALUES (139, '新闻动态', '盘点2015年十大热门国货化妆品：经典国货百雀羚上榜', 'Top1：百雀羚：经典老国货成功年轻化双十一破亿创新纪录<br />\r\n百雀羚创立于1931年，是经典老牌国货代表之一，自2011年起，更换包装、聘请全新代言人、专注公益、“国礼”身份引发系列连锁效应，实现由“奶奶用的化妆品”转变为“大众年轻群体青睐的品牌”这一华丽蜕变。<br />\r\n2015年天猫双十一狂欢购物节，几大品牌疯狂“追逐”的最终结果是，百雀羚以1.08亿元夺取美妆类目第一名。据了解，这也是天猫双十一首个单店破亿的美妆商家，也是唯一一个。百雀羚品牌以现实数据宣告，在化妆品零售市场阵阵寒风之下，在消费者需求不断升级之下，百雀羚不仅能保持住“国礼效应”的热度，且在此基础上，不断突破，也实现了品牌重塑。<br />\r\n百雀羚为什么这么“火”，且持续“火”了这么些年？除开其大手笔广告营销、重视用户体验、不断推出新品、口碑、公益营销等方面，从其天猫操盘手、网创负责人叮当的话中可见一斑：品牌重塑，要从经典形象中找寻、提炼出时尚因素，展现出一点不同的情怀和意义，从陈述同质化产品卖点向体现价值的方向转变。<br />', '2016-04-28 00:00:00', '', 0);
INSERT INTO `arc` (`arc_id`, `lb`, `title`, `content`, `arc_rq`, `pic`, `hits`) VALUES (140, '新闻动态', '“医生”系化妆品年底面临整改', '以“医生”命名的化妆品品牌，年底前将面临强制注销！日前，广东食药监局官网转发《食品药品监督管理总局关于国产非特殊用途化妆品命名有关事宜的批复》（下称《批复》）。《批复》中提到，新申请备案产品一律不得使用“医生”进行命名。已使用“医生”命名的化妆品应在年底前完成整改，否则会被强制注销。<br />\r\n<br />\r\n一石激起千层浪，《批复》的发布引起广大化妆品企业的关注。诸多以“医生”命名的化妆品企业在整改的同时也面临诸多疑问，比如多年来积累的品牌形象该如何补救？而那些申请过品牌注册商标的“医生”系化妆品企业，是否也需要改名？<br />\r\n<br />\r\n以“医生”命名的化妆品不在少数<br />\r\n<br />\r\n实际上，关于化妆品命名的规定早在2010年就已经被提及。2010年2月5日，国家食品药品监督管理局发布了《关于印发化妆品命名规定和命名指南的通知》，要求化妆品命名不得含有医疗术语、明示或暗示医疗作用和效果的词语，但该《通知》并未真正落地。<br />\r\n<br />\r\n而近日，国家食药监总局再次发布《批复》，将6年前未完成的整改进行明确细化和彻底落地。《批复》明确要求各化妆品企业自发文之日起，新申请备案产品一律不得使用“医生”等相关用语进行命名。对于已使用“医生”等相关用语已备案的化妆品，企业应在今年12月31日前完成整改，否则会被强制注销。<br />\r\n<br />\r\n这在“医生”系化妆品中引起了轩然大波。记者走访各大百货了解到，“医生”系化妆品并不在少数，有名气的“李医生”、“植物医生”等化妆品品牌均在其中。记者在淘宝网上搜索“医生、化妆品”等字样，立即出现1103件产品。除了较为有名的“米洛医生”外，还有“瓷肌医生”、“完美医生”、“瑷伦医生”、“尚医生”等品牌。记者通过国产非特殊用途化妆品备案服务平台查询到，目前以“医生”用语备案的产品数有694条。<br />\r\n<br />\r\n已注册商标用不用改名备受关注<br />', '2016-04-28 00:00:00', '', 0);
INSERT INTO `arc` (`arc_id`, `lb`, `title`, `content`, `arc_rq`, `pic`, `hits`) VALUES (141, '新闻动态', '这些假化妆品大多流往中国', '众所周知，韩国除了整容，化妆品业也十分发达。很多中国的爱美人士都会通过各种途径从韩国购置化妆品，韩系化妆品因为价格便宜还好用，特别受姑娘们欢迎。很多人抱怨中国假货很多，于是跋山涉水去往韩国购买她们心目中的正品，但是却没料到，不是只在中国有假货，韩国一样有，而且专门盯住中国游客。<br />\r\n<br />\r\n　　据韩联社消息，2015年9月10日，韩国警方成功捣毁一非法制售“马油面霜”团伙，逮捕柳某和李某等11名涉案人员。消息称，部分涉案产品已流向中国，其余产品则在韩国明洞等主要景点向中国游客兜售。<br />\r\n<br />\r\n　　韩国警方介绍称，柳某等3名制造商从今年2月底起开始在位于京畿道境内的两家化妆品制造工厂仿造A公司知名马油面霜产品，并提供给批发商李某进行分销。警方称，涉案的柳某曾担任过数十年的化妆品商标设计师，假冒马油外包装与正品真假难辨，甚至连A公司为防止假货流通而特别开发的正品认证标签，也仿冒得几乎一模一样。<br />\r\n<br />\r\n　　截至案发，该团伙已生产马油面霜29万个（市场价格约合人民币8456万元）。<br />\r\n<br />\r\n　　马油假货猖獗购者多是中国人<br />\r\n<br />\r\n　　按照韩国媒体的描述，马油假货几乎全部卖给了中国人――要么直接在韩国卖给来韩旅游的中国消费者，要么流入中国再向中国消费者出售。<br />', '2016-04-28 00:00:00', '', 0);
INSERT INTO `arc` (`arc_id`, `lb`, `title`, `content`, `arc_rq`, `pic`, `hits`) VALUES (143, '新闻动态', '广州两家企业《化妆品生产企业卫生许可证》被吊销', '20日，广州市食品药品监督管理局官网发布的《广州市食品药品违法违规企业“黑名单”信息(第三期)》显示，两家企业的《化妆<br />\r\n<br />\r\n品生产企业卫生许可证》被吊销。<br />\r\n<br />\r\n信息显示，广州市妆源化妆品有限公司因涉嫌生产未取得批准文号的特殊用途的化妆品，被吊销《化妆品生产企业卫生许可证》。<br />\r\n<br />\r\n广州市白云区新市艾璐诗化妆品厂因违法转让《化妆品生产企业卫生许可证》和使用化妆品禁用原料生产不合格化妆品，被处以没<br />\r\n<br />\r\n收违法所得60414元、罚款302070元（违法所得5倍）的行政处罚，并吊销《化妆品生产企业卫生许可证》。<br />', '2016-04-28 00:00:00', '', 0);

-- --------------------------------------------------------

-- 
-- 表的结构 `bigname`
-- 

CREATE TABLE `bigname` (
  `b_id` int(4) NOT NULL auto_increment,
  `bigcm` varchar(100) default NULL,
  PRIMARY KEY  (`b_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=19 ;

-- 
-- 导出表中的数据 `bigname`
-- 

INSERT INTO `bigname` (`b_id`, `bigcm`) VALUES (5, '洗发护发类');
INSERT INTO `bigname` (`b_id`, `bigcm`) VALUES (3, '香水类');
INSERT INTO `bigname` (`b_id`, `bigcm`) VALUES (6, '护肤类');
INSERT INTO `bigname` (`b_id`, `bigcm`) VALUES (7, '美容工具');
INSERT INTO `bigname` (`b_id`, `bigcm`) VALUES (8, '身体护理');

-- --------------------------------------------------------

-- 
-- 表的结构 `category`
-- 

CREATE TABLE `category` (
  `c_id` int(4) NOT NULL auto_increment,
  `b_id` int(4) default NULL,
  `category` varchar(100) default NULL,
  PRIMARY KEY  (`c_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=62 ;

-- 
-- 导出表中的数据 `category`
-- 

INSERT INTO `category` (`c_id`, `b_id`, `category`) VALUES (38, 3, '清新花香香水');
INSERT INTO `category` (`c_id`, `b_id`, `category`) VALUES (34, 3, '中性香水');
INSERT INTO `category` (`c_id`, `b_id`, `category`) VALUES (37, 3, '女士香水');
INSERT INTO `category` (`c_id`, `b_id`, `category`) VALUES (36, 3, '男士香水');
INSERT INTO `category` (`c_id`, `b_id`, `category`) VALUES (39, 5, '洗发水');
INSERT INTO `category` (`c_id`, `b_id`, `category`) VALUES (40, 5, '护发素');
INSERT INTO `category` (`c_id`, `b_id`, `category`) VALUES (41, 5, '弹力素');
INSERT INTO `category` (`c_id`, `b_id`, `category`) VALUES (42, 6, '洁面类');
INSERT INTO `category` (`c_id`, `b_id`, `category`) VALUES (43, 6, '卸妆类');
INSERT INTO `category` (`c_id`, `b_id`, `category`) VALUES (44, 6, '面膜/眼膜');
INSERT INTO `category` (`c_id`, `b_id`, `category`) VALUES (45, 6, '面部精油');
INSERT INTO `category` (`c_id`, `b_id`, `category`) VALUES (46, 7, '美容电器');
INSERT INTO `category` (`c_id`, `b_id`, `category`) VALUES (47, 7, '化妆品收纳');
INSERT INTO `category` (`c_id`, `b_id`, `category`) VALUES (48, 8, '沐浴乳/沐浴露');
INSERT INTO `category` (`c_id`, `b_id`, `category`) VALUES (49, 8, '身体精油');

-- --------------------------------------------------------

-- 
-- 表的结构 `hy`
-- 

CREATE TABLE `hy` (
  `hy_id` int(4) NOT NULL auto_increment,
  `userid` varchar(50) default NULL,
  `password` varchar(50) default NULL,
  `email` varchar(50) default NULL,
  `name` varchar(50) default NULL,
  `sex` varchar(20) default NULL,
  `tel` varchar(50) default NULL,
  `postcode` varchar(50) default NULL,
  `post_address` varchar(100) default NULL,
  `je` int(4) NOT NULL default '0',
  PRIMARY KEY  (`hy_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=30 ;

-- 
-- 导出表中的数据 `hy`
-- 

INSERT INTO `hy` (`hy_id`, `userid`, `password`, `email`, `name`, `sex`, `tel`, `postcode`, `post_address`, `je`) VALUES (16, '110', '1102', '24785388@163.com', '黄小婉', '男', '13932344299', NULL, '常平市六和街道39号', 0);
INSERT INTO `hy` (`hy_id`, `userid`, `password`, `email`, `name`, `sex`, `tel`, `postcode`, `post_address`, `je`) VALUES (17, 'wike110', 'wike110', '13658954@sohu.com', '张涛', '男', '13698741256', NULL, '上海市淮海大厦222号', 85);
INSERT INTO `hy` (`hy_id`, `userid`, `password`, `email`, `name`, `sex`, `tel`, `postcode`, `post_address`, `je`) VALUES (20, '熊熊', 'xiongxiong', '1382828171@qq.com', '熊瓶', '男', '1382828171', NULL, NULL, 0);

-- --------------------------------------------------------

-- 
-- 表的结构 `product`
-- 

CREATE TABLE `product` (
  `product_id` int(4) NOT NULL auto_increment,
  `name` varchar(100) default NULL,
  `price` int(4) default NULL,
  `content` text,
  `c_id` int(4) default NULL,
  `pic` varchar(100) default NULL,
  `kc` int(4) NOT NULL default '0',
  `sj` varchar(100) default NULL,
  `tj` int(4) NOT NULL,
  `b_id` int(4) default NULL,
  PRIMARY KEY  (`product_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=81 ;

-- 
-- 导出表中的数据 `product`
-- 

INSERT INTO `product` (`product_id`, `name`, `price`, `content`, `c_id`, `pic`, `kc`, `sj`, `tj`, `b_id`) VALUES (72, '芬尚梦幻女士香水50ml', 69, '芬尚梦幻女士香水50ml 香水女士持久清新淡香清甜果花香芬尚梦幻女士香水50ml 香水女士持久清新淡香清甜果花香芬尚梦幻女士香水50ml 香水女士持久清新淡香清甜果花香芬尚梦幻女士香水50ml 香水女士持久清新淡香清甜果花香芬尚梦幻女士香水50ml 香水女士持久清新淡香清甜果花香芬尚梦幻女士香水50ml 香水女士持久清新淡香清甜果花香芬尚梦幻女士香水50ml 香水女士持久清新淡香清甜果花香芬尚梦幻女士香水50ml 香水女士持久清新淡香清甜果花香芬尚梦幻女士香水50ml 香水女士持久清新淡香清甜果花香芬尚梦幻女士香水50ml 香水女士持久清新淡香清甜果花香芬尚梦幻女士香水50ml 香水女士持久清新淡香清甜果花香芬尚梦幻女士香水50ml 香水女士持久清新淡香清甜果花香', 37, 'upload/1461809678.jpg', 0, '芬芳专卖店', 0, 5);
INSERT INTO `product` (`product_id`, `name`, `price`, `content`, `c_id`, `pic`, `kc`, `sj`, `tj`, `b_id`) VALUES (73, '洗面奶女男补水保湿控油', 40, '洗面奶女男补水保湿控油洗面奶女男补水保湿控油洗面奶女男补水保湿控油洗面奶女男补水保湿控油洗面奶女男补水保湿控油洗面奶女男补水保湿控油洗面奶女男补水保湿控油洗面奶女男补水保湿控油洗面奶女男补水保湿控油洗面奶女男补水保湿控油', 42, 'upload/1461809891.jpg', 0, '专卖店', 1, 6);
INSERT INTO `product` (`product_id`, `name`, `price`, `content`, `c_id`, `pic`, `kc`, `sj`, `tj`, `b_id`) VALUES (74, '眼唇卸妆液110ml 温和卸妆油', 28, '<h3 class="tb-main-title" style="font-size:16px;color:#3C3C3C;font-family:tahoma, arial, ''Hiragino Sans GB'', 宋体, sans-serif;background-color:#FFFFFF;">\r\n	眼唇卸妆液110ml 温和卸妆油70+40 脸部卸妆水深层清洁正品眼唇卸妆液110ml 温和卸妆油70+40 脸部卸妆水深层清洁正品眼唇卸妆液110ml 温和卸妆油70+40 脸部卸妆水深层清洁正品眼唇卸妆液110ml 温和卸妆油70+40 脸部卸妆水深层清洁正品<br />\r\n</h3>', 43, 'upload/1461810060.jpg', 0, '专卖店', 0, 6);
INSERT INTO `product` (`product_id`, `name`, `price`, `content`, `c_id`, `pic`, `kc`, `sj`, `tj`, `b_id`) VALUES (75, '夏季补水保湿舒缓晒后舒缓面膜 女士护肤品套装', 89, '夏季补水保湿舒缓晒后舒缓面膜 女士护肤品套装夏季补水保湿舒缓晒后舒缓面膜 女士护肤品套装夏季补水保湿舒缓晒后舒缓面膜 女士护肤品套装夏季补水保湿舒缓晒后舒缓面膜 女士护肤品套装夏季补水保湿舒缓晒后舒缓面膜 女士护肤品套装夏季补水保湿舒缓晒后舒缓面膜 女士护肤品套装夏季补水保湿舒缓晒后舒缓面膜 女士护肤品套装夏季补水保湿舒缓晒后舒缓面膜 女士护肤品套装夏季补水保湿舒缓晒后舒缓面膜 女士护肤品套装夏季补水保湿舒缓晒后舒缓面膜 女士护肤品套装', 44, 'upload/1461810169.jpg', 0, '专卖店', 1, 6);
INSERT INTO `product` (`product_id`, `name`, `price`, `content`, `c_id`, `pic`, `kc`, `sj`, `tj`, `b_id`) VALUES (76, '美纳米喷雾器美容仪保湿补水仪器', 199, '&nbsp;美纳米喷雾器美容仪保湿补水仪器便携冷喷机脸部加湿器蒸脸器&nbsp;美纳米喷雾器美容仪保湿补水仪器便携冷喷机脸部加湿器蒸脸器&nbsp;美纳米喷雾器美容仪保湿补水仪器便携冷喷机脸部加湿器蒸脸器&nbsp;美纳米喷雾器美容仪保湿补水仪器便携冷喷机脸部加湿器蒸脸器&nbsp;美纳米喷雾器美容仪保湿补水仪器便携冷喷机脸部加湿器蒸脸器&nbsp;美纳米喷雾器美容仪保湿补水仪器便携冷喷机脸部加湿器蒸脸器&nbsp;美纳米喷雾器美容仪保湿补水仪器便携冷喷机脸部加湿器蒸脸器&nbsp;美纳米喷雾器美容仪保湿补水仪器便携冷喷机脸部加湿器蒸脸器&nbsp;美纳米喷雾器美容仪保湿补水仪器便携冷喷机脸部加湿器蒸脸器&nbsp;美纳米喷雾器美容仪保湿补水仪器便携冷喷机脸部加湿器蒸脸器', 46, 'upload/1461810282.jpg', 0, '专卖店', 0, 7);
INSERT INTO `product` (`product_id`, `name`, `price`, `content`, `c_id`, `pic`, `kc`, `sj`, `tj`, `b_id`) VALUES (77, '宝石水莲花香水沐浴露精油沐浴乳2瓶装600ml', 78, '宝石水莲花香水沐浴露精油沐浴乳2瓶装600ml宝石水莲花香水沐浴露精油沐浴乳2瓶装600ml宝石水莲花香水沐浴露精油沐浴乳2瓶装600ml宝石水莲花香水沐浴露精油沐浴乳2瓶装600ml宝石水莲花香水沐浴露精油沐浴乳2瓶装600ml宝石水莲花香水沐浴露精油沐浴乳2瓶装600ml宝石水莲花香水沐浴露精油沐浴乳2瓶装600ml宝石水莲花香水沐浴露精油沐浴乳2瓶装600ml宝石水莲花香水沐浴露精油沐浴乳2瓶装600ml宝石水莲花香水沐浴露精油沐浴乳2瓶装600ml宝石水莲花香水沐浴露精油沐浴乳2瓶装600ml', 48, 'upload/1461810431.jpg', 0, '专卖店', 0, 8);
INSERT INTO `product` (`product_id`, `name`, `price`, `content`, `c_id`, `pic`, `kc`, `sj`, `tj`, `b_id`) VALUES (80, '中性白瓶淡香水持久花果香水清新男女香水', 115, '中性白瓶淡香水持久花果香水清新男女香水中性白瓶淡香水持久花果香水清新男女香水中性白瓶淡香水持久花果香水清新男女香水中性白瓶淡香水持久花果香水清新男女香水中性白瓶淡香水持久花果香水清新男女香水中性白瓶淡香水持久花果香水清新男女香水中性白瓶淡香水持久花果香水清新男女香水中性白瓶淡香水持久花果香水清新男女香水中性白瓶淡香水持久花果香水清新男女香水', 34, 'upload/1461825557.jpg', 0, '成都代理商', 0, 3);
INSERT INTO `product` (`product_id`, `name`, `price`, `content`, `c_id`, `pic`, `kc`, `sj`, `tj`, `b_id`) VALUES (71, '男士香水持久淡香', 88, '<div>\r\n	男士香水持久淡香 浅蓝香水50ml时尚清新海洋香调 专柜正品古龙水男士香水持久淡香 浅蓝香水50ml时尚清新海洋香调 专柜正品古龙水<br />\r\n	<div>\r\n		<br />\r\n	</div>\r\n男士香水持久淡香 浅蓝香水50ml时尚清新海洋香调 专柜正品古龙水<br />\r\n	<div>\r\n		<br />\r\n	</div>\r\n<br />\r\n	<div>\r\n		<br />\r\n	</div>\r\n<br />\r\n</div>\r\n<span id="__kindeditor_bookmark_start_28__"></span>\r\n<div>\r\n	<br />\r\n</div>', 36, 'upload/1461809545.jpg', 0, '芬芳专卖店', 1, 3);
INSERT INTO `product` (`product_id`, `name`, `price`, `content`, `c_id`, `pic`, `kc`, `sj`, `tj`, `b_id`) VALUES (69, 'olive/韩伊弹力素卷发专用正品', 14, 'olive/韩伊弹力素卷发专用正品 持久保湿定型护理橄榄', 41, 'upload/1461809293.jpg', 0, '专卖店', 1, 5);
INSERT INTO `product` (`product_id`, `name`, `price`, `content`, `c_id`, `pic`, `kc`, `sj`, `tj`, `b_id`) VALUES (70, '芬尚女士香水秘密50ml', 84, '芬尚女士香水秘密50ml 香水女士持久淡香清新 买1送7专柜正品包邮芬尚女士香水秘密50ml 香水女士持久淡香清新 买1送7专柜正品包邮芬尚女士香水秘密50ml 香水女士持久淡香清新 买1送7专柜正品包邮芬尚女士香水秘密50ml 香水女士持久淡香清新 买1送7专柜正品包邮芬尚女士香水秘密50ml 香水女士持久淡香清新 买1送7专柜正品包邮芬尚女士香水秘密50ml 香水女士持久淡香清新 买1送7专柜正品包邮芬尚女士香水秘密50ml 香水女士持久淡香清新 买1送7专柜正品包邮芬尚女士香水秘密50ml 香水女士持久淡香清新 买1送7专柜正品包邮芬尚女士香水秘密50ml 香水女士持久淡香清新 买1送7专柜正品包邮芬尚女士香水秘密50ml 香水女士持久淡香清新 买1送7专柜正品包邮芬尚女士香水秘密50ml 香水女士持久淡香清新 买1送7专柜正品包邮', 38, 'upload/1461809430.jpg', 0, '芬芳专卖店', 0, 3);
INSERT INTO `product` (`product_id`, `name`, `price`, `content`, `c_id`, `pic`, `kc`, `sj`, `tj`, `b_id`) VALUES (68, '潘婷乳液修护洗发水500ml*2瓶+护发素500ml送旅行装', 105, '潘婷乳液修护洗发水500ml*2瓶+护发素500ml送旅行装潘婷乳液修护洗发水500ml*2瓶+护发素500ml送旅行装潘婷乳液修护洗发水500ml*2瓶+护发素500ml送旅行装潘婷乳液修护洗发水500ml*2瓶+护发素500ml送旅行装潘婷乳液修护洗发水500ml*2瓶+护发素500ml送旅行装潘婷乳液修护洗发水500ml*2瓶+护发素500ml送旅行装潘婷乳液修护洗发水500ml*2瓶+护发素500ml送旅行装潘婷乳液修护洗发水500ml*2瓶+护发素500ml送旅行装潘婷乳液修护洗发水500ml*2瓶+护发素500ml送旅行装潘婷乳液修护洗发水500ml*2瓶+护发素500ml送旅行装潘婷乳液修护洗发水500ml*2瓶+护发素500ml送旅行装潘婷乳液修护洗发水500ml*2瓶+护发素500ml送旅行装', 40, 'upload/1461809131.jpg', 0, '保洁公司', 0, 5);
INSERT INTO `product` (`product_id`, `name`, `price`, `content`, `c_id`, `pic`, `kc`, `sj`, `tj`, `b_id`) VALUES (67, '海飞丝清爽去油去屑洗发水750ml*2瓶', 108, '海飞丝清爽去油去屑洗发水750ml*2瓶 送旅行装 控油去油洗护套装海飞丝清爽去油去屑洗发水750ml*2瓶 送旅行装 控油去油洗护套装海飞丝清爽去油去屑洗发水750ml*2瓶 送旅行装 控油去油洗护套装海飞丝清爽去油去屑洗发水750ml*2瓶 送旅行装 控油去油洗护套装海飞丝清爽去油去屑洗发水750ml*2瓶 送旅行装 控油去油洗护套装', 39, 'upload/1461808979.jpg', 0, '保洁公司', 1, 5);

-- --------------------------------------------------------

-- 
-- 表的结构 `web_admin`
-- 

CREATE TABLE `web_admin` (
  `admin_id` int(4) NOT NULL auto_increment,
  `web_admin` varchar(25) default NULL,
  `password` varchar(25) default NULL,
  PRIMARY KEY  (`admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=3 ;

-- 
-- 导出表中的数据 `web_admin`
-- 

INSERT INTO `web_admin` (`admin_id`, `web_admin`, `password`) VALUES (1, 'admin', 'admin');
INSERT INTO `web_admin` (`admin_id`, `web_admin`, `password`) VALUES (2, '120', '120');
