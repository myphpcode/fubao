-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2019 年 03 月 05 日 01:35
-- 服务器版本: 5.6.43
-- PHP 版本: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `fubao`
--

-- --------------------------------------------------------

--
-- 表的结构 `tp_article`
--

CREATE TABLE IF NOT EXISTS `tp_article` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '文章id',
  `title` varchar(30) NOT NULL COMMENT '标题',
  `keywords` varchar(60) NOT NULL COMMENT '关键词',
  `description` varchar(150) NOT NULL COMMENT '描述',
  `author` varchar(10) NOT NULL COMMENT '作者',
  `email` varchar(20) NOT NULL COMMENT '电子邮箱',
  `link_url` varchar(100) NOT NULL COMMENT '外链',
  `thumb` varchar(100) NOT NULL DEFAULT '' COMMENT '缩略图',
  `content` longtext NOT NULL COMMENT '内容',
  `show_top` tinyint(1) NOT NULL DEFAULT '0' COMMENT '置顶 1：是 0：否',
  `show_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '显示 1:是  0：否',
  `cate_id` smallint(6) NOT NULL COMMENT '所属栏目',
  `addtime` int(10) NOT NULL COMMENT '发布时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=54 ;

--
-- 转存表中的数据 `tp_article`
--

INSERT INTO `tp_article` (`id`, `title`, `keywords`, `description`, `author`, `email`, `link_url`, `thumb`, `content`, `show_top`, `show_status`, `cate_id`, `addtime`) VALUES
(35, '漯河市妇幼保健院来我院参观交流', '漯河市妇幼保健院来我院参观交流', '漯河市妇幼保健院来我院参观交流', '', '', '', '20190301/6ae655ebb57adb97441a0ff87137184f.png', '<pre style="background-color: rgb(255, 255, 255); font-family: 宋体; font-size: 9pt;">漯河市妇幼保健院来我院参观交流</pre><p><br/></p>', 0, 1, 28, 1551407626),
(25, '元媛', '', '', '', '', '', '', '<p><strong style="color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);"><strong><strong><span style="font-size: 18px;"><span style="font-family: SimSun;">元媛</span></span></strong></strong></strong></p>', 0, 1, 3, 1516245025),
(26, '韩文丽', '', '', '', '', '', '', '<p><strong style="color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="font-family: SimSun; font-size: 18px;">韩文丽</span></strong></p>', 0, 1, 3, 1516245037),
(27, '张建芳', '', '', '', '', '', '', '<p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);"><strong><span style="color: rgb(229, 51, 51); font-family: SimSun; font-size: 18px;">姓 &nbsp;</span><span style="color: rgb(229, 51, 51); font-family: SimSun; font-size: 18px;">名：</span><span style="font-family: SimSun; font-size: 18px;">张建芳</span><br/><span style="color: rgb(229, 51, 51); font-family: SimSun; font-size: 18px;">职 &nbsp;</span><span style="color: rgb(229, 51, 51); font-family: SimSun; font-size: 18px;">务：</span><span style="font-family: SimSun; font-size: 18px;">党委书记</span><br/><span style="color: rgb(229, 51, 51); font-family: SimSun; font-size: 18px;">简 &nbsp;历：</span><span style="font-family: SimSun; font-size: 18px;">本科学历，副主任护师，中共党员，从事护理专业20多年，热爱护理事业，擅长助产技术、妊高症规范化管理和妇产科护理管理工作，有扎实的理论基础和丰富的临床经验，先后在国家级、省级杂志上发表论文十余篇。</span></strong></p><p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);"><strong><span style="font-family: SimSun; font-size: 18px;"></span></strong></p><p style="text-align:left;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);"><strong><img src="/ueditor/php/upload/image/20190227/1551254756744664.png" alt="" style="border: 0px;"/></strong></p><p><br/></p>', 0, 1, 3, 1516245050),
(28, '陈新', '', '', '', '', '', '', '<p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255); text-align: center;"><span style="font-size: 18px;"><img src="/ueditor/php/upload/image/20190227/1551254782459622.png" alt="" style="border: 0px;"/><br/></span></p><p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 12px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="font-family: SimSun; font-size: 18px;"><strong><span style="color: rgb(229, 51, 51);">姓 &nbsp;名：</span>陈新</strong></span><br/><span style="font-family: SimSun; font-size: 18px;"><strong><span style="color: rgb(229, 51, 51);">职 &nbsp;务：</span>院长、党委副书记</strong></span><br/><span style="font-family: SimSun; font-size: 18px;"><strong><span style="color: rgb(229, 51, 51);">简 &nbsp;历：</span>口腔科主任医师，从事口腔科临床工作30余年，具有系统的理论知识和丰富的临床经验，在安阳市最早开展口腔固定正畸治疗，获有三项安阳市科技进步奖，著有国家级、省级论文二十余篇。</strong></span><br/><span style="font-family: SimSun; font-size: 18px;"><strong><span style="color: rgb(229, 51, 51);">专 &nbsp;业：</span>口腔内科、外科、修复科、正畸科疾病的诊断、治疗。</strong></span></p><p><br/></p>', 0, 1, 3, 1516245066),
(36, '食物不耐受', '食物不耐受', '食物不耐受', '', '', '', '', '<p><a href="http://www.ayfy.com.cn/ShowMagNews.aspx?newsid=75&channel=healthedu" style="color: rgb(68, 68, 68); text-decoration-line: none;">食物不耐受</a></p><p><br/></p>', 0, 1, 39, 1551415754),
(37, '节能环保', '节能环保', '', '', '', '', '', '<p><a href="http://www.ayfy.com.cn/ShowNews.aspx?newsid=513" style="color: rgb(68, 68, 68); text-decoration-line: none;">节能环保</a></p><p><br/></p>', 0, 1, 40, 1551416133),
(38, '儿童重症医学科开展早产儿 “袋鼠式护理”', '儿童重症医学科开展早产儿 “袋鼠式护理”', '儿童重症医学科开展早产儿 “袋鼠式护理”', '', '', '', '', '<p>儿童重症医学科开展早产儿 “袋鼠式护理”</p>', 0, 1, 41, 1551416528),
(39, '表扬信', '表扬信', '表扬信', '', '', '', '', '<ul class="main_center_a4_right_content list-paddingleft-2" style="list-style-type: none;"><li><p><a href="http://www.ayfy.com.cn/ShowNews.aspx?newsid=687" style="color: rgb(68, 68, 68); text-decoration-line: none;">表扬信</a></p></li></ul><p><br/></p>', 0, 1, 42, 1551416574),
(40, '政策解读', '政策解读', '政策解读', '', '', '', '20190301/d04beb0268bedf083daf89c92494e518.png', '<p>政策解读</p>', 0, 1, 43, 1551416659),
(41, '我院举办安阳市2018年下半年孕产妇死亡评审会议', '', '', '', '', '', '20190301/51d78e8e8544025afd2ec9ae59f57a2b.png', '<p>&nbsp; &nbsp;我院举办安阳市2018年下半年孕产妇死亡评审会议</p>', 0, 1, 28, 1551422509),
(42, '安阳市妇幼保健院文化建设采购项目 中标结果公示', '安阳市妇幼保健院文化建设采购项目 中标结果公示', '安阳市妇幼保健院文化建设采购项目 中标结果公示', '', '', '', '', '<h1 class="title" style="margin: 0px; padding: 0px 10px; font-size: 24px; text-align: center; line-height: 50px; color: rgb(34, 34, 34); font-family: " microsoft="" white-space:="" background-color:="">安阳市妇幼保健院文化建设采购项目 中标结果公示</h1><p><br/></p>', 1, 1, 29, 1551425399),
(43, '安阳市妇幼保健院污水运营项目 结果公示', '', '', '', '', '', '', '<h1 class="title" style="margin: 0px; padding: 0px 10px; font-size: 24px; text-align: center; line-height: 50px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; white-space: normal; background-color: rgb(255, 255, 255);">安阳市妇幼保健院污水运营项目 结果公示</h1><p><br/></p>', 0, 1, 29, 1551425860),
(44, '儿内呼吸科', '', '', '', '', '', '', '<p style="text-align:center;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="font-family: SimSun; color: rgb(229, 51, 51); font-size: 24px;"><strong>儿内呼吸科简介</strong></span></p><p style="text-align:center;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="font-family: SimSun; color: rgb(229, 51, 51); font-size: 24px;"></span>&nbsp;</p><p style="text-align:left;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><br/></p><p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="font-family: SimSun; font-size: 18px;">&nbsp;&nbsp;&nbsp; 小儿呼吸内科，目前开设床位51张，现有24名医护人员，其中主任医师1人，副主任医师1人、主治医师2人，住院医师4人；主管护师2人、护师9人、护士5人。病区年住院患者2500余人次。</span></p><p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="font-family: SimSun; font-size: 18px;">&nbsp;&nbsp;&nbsp; 主要收治小儿呼吸系统疾病如反复上呼吸道感染、急性喉炎、支气管炎、各种肺炎、哮喘、慢性咳嗽、川崎病、传染性单核细胞增多症、先天性心脏病合并肺炎心力衰竭等。特别注重儿童重症肺炎、反复喘息及儿童哮喘病的早期诊断及规范化治疗。科室拥有先进的多参数心电监护仪，输液泵，血气分析仪，血糖仪，空气压缩泵、深部机械排痰仪及储雾罐、峰速仪、过敏原、儿童肺功能仪及纤维支气管镜等设备。建立有哮喘专科门诊、标准化、规范化的雾化吸入治疗室。开展了儿童过敏原点刺试验、儿童肺功能检测、小儿儿纤维支气管镜检查及灌洗技术。科研项目《儿童哮喘的早期诊断和规范化管理》荣获安阳市科技成果普及奖二等奖。</span></p><p><br/></p>', 0, 1, 19, 1551429798),
(45, '新生儿科', '', '', '', '', '', '', '<p style="text-align:center;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="font-family: SimSun; color: rgb(229, 51, 51); font-size: 24px;"><strong>新生儿科简介</strong></span></p><p style="text-align:center;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="font-family: SimSun; color: rgb(229, 51, 51); font-size: 24px;"></span>&nbsp;</p><p><span style="color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; background-color: rgb(255, 255, 255);"></span><span style="color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; background-color: rgb(255, 255, 255);"></span></p><p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="font-family: SimSun; font-size: 18px;"></span></p><p><span style="color: rgb(34, 34, 34); background-color: rgb(255, 255, 255); font-family: SimSun; font-size: 18px;">&nbsp;&nbsp;&nbsp; 我院新生儿科是豫北地区规模最大，成立最早的新生儿科之一，拥有一支技术娴熟、配合默契的医疗团队。科内实行分区管理，配备有常频呼吸机、高频振荡呼吸机、脑功能监护仪、nCPAP、血气分析仪、呼气末CO2测定仪、微量血胆红素测定仪、床旁X线及B超、超净工作台等。开展了新生儿脑电及振幅整合脑电监测、高频振荡通气、压力限制容量保护通气、NIPPV、动静脉置管同步换血技术、巨大儿PICC、小早产儿袋鼠式护理等先进技术，对新生儿多脏器功能障碍、新生儿呼吸窘迫综合症、新生儿肺出血、新生儿气胸、胎粪吸入综合征、新生儿败血症、感染性休克、DIC、新生儿缺氧缺血性脑病、新生儿溶血病等新生儿危重症和疾病具有成熟规范的诊疗技术和经验。对罕见疾病如：色素失禁症、葡萄球菌烫伤样皮肤综合症、先天性低通气综合征等亦做出了诊断。科内大力倡导新生儿母乳喂养，为提高母乳喂养率做出了贡献。</span></p><p><br/></p>', 0, 1, 19, 1551429835),
(46, '儿童神经康复科', '', '', '', '', '', '', '<p style="text-align:center;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: " microsoft="" font-size:="" white-space:="" background-color:=""><span style="color: rgb(229, 51, 51); font-size: 24px;">儿童神经康复科简介</span></p><p style="text-align:center;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: " microsoft="" font-size:="" white-space:="" background-color:="">&nbsp;</p><p style="text-align:left;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: " microsoft="" font-size:="" white-space:="" background-color:=""><span style="font-size: 18px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 神经康复科成立于2003年，随着学科的不断发展，2012年神经康复科搬至西院区，开设两个病区，神经康复一病区床位78张，神经康复二病区床位80张，现有神经康复医师14人，康复训练师22人 。</span></p><p style="text-align:left;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: " microsoft="" font-size:="" white-space:="" background-color:=""><span style="font-size: 18px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p><p style="text-align:center;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: " microsoft="" font-size:="" white-space:="" background-color:=""><span style="color: rgb(229, 51, 51); font-size: 24px;">儿童神经康复一科</span></p><p style="text-align:center;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: " microsoft="" font-size:="" white-space:="" background-color:=""><span style="color: rgb(229, 51, 51); font-size: 24px;"></span>&nbsp;</p><p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: " microsoft="" font-size:="" white-space:="" background-color:=""><span style="font-size: 18px;">&nbsp;&nbsp; &nbsp;&nbsp; 主任医师1人、副主任医师1人、主治医师4人、住院医师4人、护士18人、脑电图技师2人、诱发电位技师1人、康复评定医师3人；视频脑电图机2台、诱发电位仪1台、小儿神经门诊室1间。&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p><p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: " microsoft="" font-size:="" white-space:="" background-color:=""><span style="font-size: 18px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 神经康复科包括小儿神经专业和康复专业两部分，神经科多收治各科抽搐发作，脑炎、颅内压增高等，同时进行癫痫的门诊诊治，遗传代谢病的筛查，染色体病的诊断等，康复方面主要对脑瘫、臂丛神经损伤、运动发育迟缓、早产儿发育迟缓，HIE恢复期等的康复治疗。设置有PT室、OT室、ST室，水疗室各种理疗、针灸、推拿、感觉统合训练，特殊教育等专业。近2年新开展感染和消化两个亚专业，隔离收治手足口病和消化系统系统专科疾病，配备小儿胃肠镜等检查设备，收治各类急腹性腹泻、癫痫待查。&nbsp;&nbsp;</span></p><p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: " microsoft="" font-size:="" white-space:="" background-color:="">&nbsp;</p><p style="text-align:center;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: " microsoft="" font-size:="" white-space:="" background-color:=""><span style="font-size: 18px;">&nbsp;<span style="color: rgb(229, 51, 51); font-size: 24px;">儿童</span></span><span style="color: rgb(229, 51, 51); font-size: 24px;">神经康复二科</span></p><p style="text-align:center;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: " microsoft="" font-size:="" white-space:="" background-color:="">&nbsp;</p><p><span style="color: rgb(34, 34, 34); font-family: " microsoft="" background-color:="" font-size:="">&nbsp; &nbsp;&nbsp; &nbsp;小儿神经康复二科前身为综合科，成立于2007年，主要收治HIE恢复期、小儿癫痫、脑性瘫痪、各种脑炎及儿科普通病人。2012年更名为小儿神经康复二科，2013年增设了小儿内分泌及小儿肾脏专业，扩大了收治病人范围。科室固定床位80张，有专科独立诊室，年专科出院人数1600多人次，年门诊量约5000人次。现有医师7人，护士18人，其中主任医师1人，副主任医师2人，硕士2人，住院医师1人，主管护师2人。</span><br style="color: rgb(34, 34, 34); font-family: " microsoft="" font-size:="" white-space:="" background-color:=""/><span style="color: rgb(34, 34, 34); font-family: " microsoft="" background-color:="" font-size:="">&nbsp; &nbsp;&nbsp;&nbsp; 我科依据中西医理论结合现代康复技术、综合手段治疗脑瘫、脑发育不全、小儿癫痫、中枢神经系统感染性疾病、脑炎及手足口后遗症、生长障碍（矮小、巨人症）、青春期发育异常（性早熟、小阴茎）、甲状腺疾病、肾上腺疾病、甲状旁腺疾病、难治性佝偻病、儿童糖尿病、肥胖病、尿崩症、低血糖、急慢性肾小球肾炎、肾病综合征、泌尿系统感染、肾小管疾病及间质性肾炎、急性肾损伤、慢性肾脏病、紫癜性肾炎等疾病。</span></p><p><br/></p>', 0, 1, 19, 1551429907),
(47, '儿外科', '', '', '', '', '', '', '<p style="text-align:center;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="font-family: SimSun; color: rgb(229, 51, 51); font-size: 24px;"><strong>儿外科简介</strong></span></p><p style="text-align:center;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="font-family: SimSun; color: rgb(229, 51, 51); font-size: 24px;"></span>&nbsp;</p><p style="text-align:left;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="font-family: SimSun; font-size: 18px;">&nbsp;&nbsp;&nbsp; 我院小儿外科成立于1994年，是我市唯一一个专门治疗14岁以下儿童外科疾病的科室，成立至今，先后派出包括医生、麻醉师、护士、放射、检验、超声、病理在内的四十余名医务人员到北京、上海、南京等地的儿童医院进修学习，组成了高素质的小儿外科专业队伍。现有床位35张，副主任医师2人，主治医师2人，住院医师4人，是豫北地区最大的小儿外科疾病治疗中心。每年开展新生儿外科、普外科、泌尿外科、骨科等手术一千余例，尤以新生儿外科见长。先天性食道闭锁、胆道闭锁、胆总管囊肿、重度尿道下裂、肾盂积水、经肛门巨结肠根治、以及腹腔镜、结肠镜手术的成功开展，标志着技术水平已达省内先进行列。空气灌肠机治疗肠套叠填补了我市的空白，成功率达90℅。腹股沟斜疝、包茎等门诊手术已形成自己的专科特色。</span></p><p><br/></p>', 0, 1, 19, 1551429966),
(48, '儿童重症监护室', '', '', '', '', '', '', '<p style="text-align:center;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="font-family: SimSun; color: rgb(229, 51, 51); font-size: 24px;"><strong>儿童重症监护室简介</strong></span></p><p style="text-align:left;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="font-family: SimSun; color: rgb(229, 51, 51); font-size: 24px;"></span>&nbsp;</p><p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="font-family: SimSun; font-size: 18px;">&nbsp;&nbsp;&nbsp; 儿科ICU分为PICU及NICU，共设置床位20张，实际开放床位40张。</span><br/><span style="font-family: SimSun; font-size: 18px;">&nbsp;&nbsp;&nbsp;&nbsp;科主任为主任医师职称，护士长为主管护师；现有医师10人，护士37人，主任医师1人，副主任医师1人，主治医师5人，住院医师3人，均为大学本科以上学历，硕士研究生4名。</span><br/><span style="font-family: SimSun; font-size: 18px;">&nbsp;&nbsp;&nbsp; NICU开展了经外周中心静脉置管技术（PICC）、脐静脉置管(UVC)技术，亚低温治疗中重度新生儿缺氧缺血性脑病，高危儿随访门诊，INSURE技术、规范的早产儿管理技术；PICU开展了深静脉置管、纤维支气管镜技术，提高了危重患儿的抢救成功率。</span><br/><span style="font-family: SimSun; font-size: 18px;">&nbsp;&nbsp;&nbsp; 目前我科拥有常频呼吸机、CPAP、高频呼吸机、纤维支气管镜、亚低温治疗仪、床旁超声、新生儿振幅整合脑电图主要仪器设备。&nbsp;</span><br/><span style="font-family: SimSun; font-size: 18px;">&nbsp;&nbsp;&nbsp; 1997年被确定为安阳市首批3-20重点专科。2001年被河南省卫生厅授予“河南省新生儿重症救护网络安阳分中心”。2014年被市总工会评为“十佳班组”及“工人先锋号”等集体荣誉称号。</span></p><p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="font-family: SimSun; font-size: 18px;">&nbsp;</span></p><p><br/></p>', 0, 1, 19, 1551430058),
(49, '生理产科', '', '', '', '', '', '', '<p style="text-align:center;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="color: rgb(229, 51, 51); font-size: 24px;">生理产科简介</span><br/><span style="font-size: 18px;">生理产科共开设2个病区（生理产一科和生理产二科）</span></p><p style="text-align:center;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="color: rgb(229, 51, 51); font-size: 24px;"></span>&nbsp;</p><p style="text-align:center;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="color: rgb(229, 51, 51); font-size: 24px;">&nbsp;&nbsp;</span></p><p style="text-align:center;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="color: rgb(229, 51, 51); font-size: 24px;">生理产一科</span></p><p style="text-align:center;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="color: rgb(229, 51, 51); font-size: 24px;"></span>&nbsp;</p><p style="text-align:left;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="font-size: 18px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 生理产一科是我院最初的产科病区，也是我院及我市的重点专科，技术力量雄厚，医疗技术水平和医疗设备均处于全省领先地位，与生理产二科及产房共同承担着我院普通孕妇的治疗及分娩工作，是我院收治急诊孕产妇的首要科室，出入院孕产妇数量在产科居于首位。我科开放床位37张，年出院孕产妇4000余人次，手术例数2000余例，平均住院天数4天，床位周转率120%。经过这些年的经验及技术积累，生理产一科充分发挥人才优势，努力改善就医环境，狠抓医疗护理质量和医德医风建设，提倡和促进自然分娩，对所有孕妇实施系统规范的产前检查， 开展了自由体位分娩、无保护接生及各种形式的导乐分娩、无痛分娩，尝试开展了剖宫产术后的阴道试产，臀位外倒转，羊水过少的羊膜腔灌注治疗等技术，均有效降低了剖宫产率；开展了不同形式的健康教育，倡导母乳喂养，对母亲患有乙肝的新生儿进行母婴阻断，在全市享有较高的声誉。</span><br/><span style="font-size: 18px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 现有医护人员中，高级职称2名，中级职称6名，初级职称16名，铸造了一个医疗技术过硬、医德医风高尚的专业技术队伍。其中管建英主任从事妇产科临床工作20余年，有丰富的临床经验，特别是在产科领域造诣颇深，熟练掌握各种难产、产后出血、DIC、妊娠合并重度子痫前期、前置胎盘、胎盘早剥、妊娠期糖尿病等危急重症病人。剖宫产手术娴熟，“管式剖宫产”的创始人；卢淑丽，从事妇产科临床工作15年余，产科方面，在孕前及孕期保健，孕期营养、孕期体重管理，妊娠特发疾病、妊娠合并症及并发症方面有丰富的临床经验，在如何降低剖宫产率，头位难产、导乐分娩等方面有自己独特见解及丰富的实践经验。</span></p><p style="text-align:center;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="color: rgb(229, 51, 51); font-size: 24px;"></span>&nbsp;</p><p style="text-align:center;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="color: rgb(229, 51, 51); font-size: 24px;">生理产二科</span></p><p style="text-align:center;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="color: rgb(229, 51, 51); font-size: 24px;"></span>&nbsp;</p><p style="text-align:left;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="font-size: 18px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 生理产二科是妊娠期糖尿病病区，主要收治妊娠期糖尿病病人和糖尿病合并妊娠等产科急危重症病人，是一个医疗技术过硬、设备先进、医德医风高尚的专业技术队伍，现有医护人员中，高级职称2名、中级职称6名、其他人员22名，其中产科专业的研究生两名，2013年成立了糖尿病一日门诊，对妊娠期糖尿病病人规范化管理，在产科门诊给予饮食和运动指导，开创了社区—门诊—病房多元化管理模式，病房&nbsp;内设床位58张。其中温馨病房4个房间，年出院人数2400-3000人，专科门诊量为15000人次。</span><br/><span style="font-size: 18px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 病房设有四轨制服务模式，有产科医生、儿科医生、乳腺科医生、保健科医生共同参与管理。还开展新生儿洗澡、抚触、听力筛查、计划免疫、遗传疾病筛查、经皮测疸等服务项目。还设有心电监护、中心供氧、中心负压吸引、微波治疗仪、产后康复治疗仪、动态消毒机等先进设备。在护理上，出院后，产后一个月内，由专业人员上门服务或电话回访两次。产后42天常规到康复门诊进行盆底机能评估，并给予正确的健康指导和治疗。</span></p><p><br/></p>', 0, 1, 19, 1551430116),
(50, '病理产科', '', '', '', '', '', '', '<p style="text-align:center;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="color: rgb(229, 51, 51); font-size: 24px;">病理产科简介</span>&nbsp;&nbsp;</p><p style="text-align:center;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="font-size: 18px;"><strong>病理产科共开设2个病区（病理产一科和病理产二科）</strong></span></p><p style="text-align:center;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="font-size: 18px;"></span>&nbsp;</p><p style="text-align:center;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="color: rgb(229, 51, 51); font-size: 24px;">病理产一科</span></p><p style="text-align:center;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="color: rgb(229, 51, 51); font-size: 24px;"></span>&nbsp;</p><p style="text-align:left;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><br/></p><p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="font-family: SimSun; font-size: 18px;">&nbsp;&nbsp;&nbsp; 病理产一区为妊娠高血压病区，主要处理产科急危重症。</span></p><p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="font-family: SimSun; font-size: 18px;">&nbsp;&nbsp;&nbsp; 固定床位37张，医护人员24名，医师6名，其中主任医师1名，副主任医师1名，主治医师2名，住院医师2名。护士18名。开展妊娠期高血压病系统规范治疗，年抢救危重病人200余例。对子痫、重度子痫前期、胎盘早剥、HELLP综合症等产科重症母胎监护及处理经验丰富。擅长诊治早产、妊娠合并贫血、心脏病、甲状腺疾病等高危妊娠；开展妊娠高血压病高危预测及孕期干预项目。科室有24小时动态血压监测、心电监护仪、微波治疗仪、胎心监护仪、血气分析仪、注射泵、输液泵等精密仪器。 承担市卫生局1530计划项目《妊娠期高血压规范化治疗及护理》。和华中科技大学同济医学院合作国家基金课题2项，成果显著。</span></p><p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);">&nbsp;</p><p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><br/></p><p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="font-size: 18px;"></span>&nbsp;</p><p style="text-align:center;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="color: rgb(229, 51, 51); font-size: 24px;">病理产二科</span></p><p style="text-align:center;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="color: rgb(229, 51, 51); font-size: 24px;"></span>&nbsp;</p><p style="text-align:left;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="font-family: SimSun; font-size: 18px;">&nbsp;&nbsp;&nbsp; 病理产二成立于2011年2月27日，收治病种为孕28周以上有妊娠合并症或妊娠并发症的孕妇，主要特色为前置胎盘、多胎妊娠、胎膜早破、先兆早产、妊娠期糖尿病以及其他妊娠合并内外科疾病等。</span>&nbsp;<br/><span style="font-family: SimSun; font-size: 18px;">&nbsp;&nbsp;&nbsp; 现有医护人员共23名，其中医生6人：主任医师1名，副主任医师1名、主治医师2名，住院医师2名。护理17人：主管护师5人，护师6人，护士人6人。</span><br/><span style="font-family: SimSun; font-size: 18px;">&nbsp;&nbsp;&nbsp;&nbsp;现有固定床位34张，病区配有CD2000北京麦邦心电监护仪5台、LGT—2200S空气波动循环治疗仪1台、微波治疗仪2台、产后康复仪2台、飞利浦胎心监护仪1台、单通道注射泵2台、等离子移动式消毒柜1台、经皮测胆仪1台、末梢电脑血糖检测仪1台等一系列的先进治疗设备，能为广大住院患者提供产前、产后优质服务和系统的治疗。随着医院的不断发展，产科产前检查的完善以及孕产妇并发症的提前诊断，3年来的工作量逐年递增。</span>&nbsp;<br/><span style="font-family: SimSun; font-size: 18px;">&nbsp;&nbsp;&nbsp;&nbsp;在工作中，全科医护组建成为一支团结和谐、专业技术过硬的团队。我们不断学习，努力钻研，敢于创新，逐渐形成了自己的业务特色，擅长妊娠并发症、合并症的诊治及各种产科疑难杂症的诊断和治疗。尤其是在前置胎盘、中央型前置胎盘剖宫产术中合并产后大出血的抢救和处理方面有着丰富的临床经验，在我市处于领先水平。我们成功地保全了很多孕产妇的子宫，挽救了很多孕产妇的生命。现在我科又针对于凶险型前置胎盘合并胎盘粘连、植入的剖宫产手术思路进行了新的研究与尝试。我科目前收治了本地区半数以上的“前置胎盘”，可以说是本地区“前置胎盘”病种的诊治中心。</span></p><p><br/></p>', 0, 1, 19, 1551430157);
INSERT INTO `tp_article` (`id`, `title`, `keywords`, `description`, `author`, `email`, `link_url`, `thumb`, `content`, `show_top`, `show_status`, `cate_id`, `addtime`) VALUES
(51, '妇科', '', '', '', '', '', '', '<p style="text-align:center;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="font-family: SimSun; color: rgb(229, 51, 51); font-size: 24px;"><strong>妇科介绍</strong></span></p><p style="text-align:center;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="font-family: SimSun; font-size: 18px;"><strong>我院妇科现开设三个病区（妇一科、妇二科、妇三科）</strong></span></p><p style="text-align:center;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="font-family: SimSun; font-size: 18px;"></span>&nbsp;</p><p style="text-align:center;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="font-family: SimSun; color: rgb(229, 51, 51); font-size: 24px;"></span>&nbsp;</p><p style="text-align:center;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="font-family: SimSun; color: rgb(229, 51, 51); font-size: 24px;"><strong>妇一科</strong></span>&nbsp;&nbsp;</p><p><span style="color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; background-color: rgb(255, 255, 255);"></span><span style="color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; background-color: rgb(255, 255, 255);"></span></p><p style="text-align:left;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="font-family: SimSun; font-size: 18px;"></span></p><p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="font-family: SimSun; font-size: 18px;">&nbsp;&nbsp;&nbsp;&nbsp;妇科一病区，原妇科病区，为我市建国后最早设立的专业妇科临床科室，擅长妇科各种急危重症、妇科肿瘤、计划生育及妇科各种复杂、疑难疾病治疗及手术，承担五县市区妇科疾患的转诊、会诊任务。建科近五十年来，不断开展新技术，始终走在本地区同行前列，尤其妇科微创手术、阴式手术、宫颈疾病治疗和手术水平及技术均居我市乃至豫北地区首位。</span><br/><span style="font-family: SimSun; font-size: 18px;">&nbsp;&nbsp;&nbsp;&nbsp;科室现有固定床位40张，加床15张，科室每年均被评为医院优秀文明科室及先进科室。现有副主任医师2名、主治医师4名、住院医师2名。护理主管护师1名，护师2名，护士12名。</span><br/><span style="font-family: SimSun; font-size: 18px;">&nbsp;&nbsp;&nbsp; 近十年余晓玲主任带领下，率先开展了我市妇科领域很多新技术，让我院妇科专业水平始终保持位于我市前列。</span><br/><span style="font-family: SimSun; font-size: 18px;">&nbsp;&nbsp;&nbsp; 2004年以前，我科主要开展早中孕期流产保胎、计划生育、开腹手术等工作。</span><br/><span style="font-family: SimSun; font-size: 18px;">&nbsp;&nbsp;&nbsp; 2004年，开展我市首例腹腔镜下附件肿物、子宫肌瘤剜除、宫外孕、子宫全切、子宫次切等微创手术。</span><br/><span style="font-family: SimSun; font-size: 18px;">&nbsp;&nbsp;&nbsp; 2005年，开展TCT、HPV—DNA、阴道镜联合宫颈癌筛查，宫颈射频、LEEP手术。</span><br/><span style="font-family: SimSun; font-size: 18px;">&nbsp;&nbsp;&nbsp; 2007年，开展宫腔镜腹腔镜联合手术、B超引导下冷循环微波消融术、腹腔镜下腹膜代阴道成形术。</span><br/><span style="font-family: SimSun; font-size: 18px;">&nbsp;&nbsp;&nbsp; 2008年，开展盆底重建手术，包括传统改良术式和网片应用。</span><br/><span style="font-family: SimSun; font-size: 18px;">&nbsp;&nbsp;&nbsp; 2013年，开展宫颈、外阴高频超声聚焦手术治疗宫颈炎、外阴白斑。</span><br/><span style="font-family: SimSun; font-size: 18px;">&nbsp;&nbsp;&nbsp; 2014年，开展阴式子宫全切术加阴道残端骶前悬吊术。&nbsp;</span></p><p style="text-align:center;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="font-family: SimSun; color: rgb(229, 51, 51); font-size: 24px;"></span>&nbsp;</p><p style="text-align:center;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="font-family: SimSun; color: rgb(229, 51, 51); font-size: 24px;"><strong>妇二科</strong></span></p><p style="text-align:center;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><strong><span style="font-size: 16px;">（</span></strong><strong><span style="font-size: 16px;">妇科肿瘤微创重点科室</span></strong><strong><span style="font-size: 16px;">）</span></strong></p><p style="text-align:center;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><strong><span style="font-size: 18px;"></span></strong>&nbsp;</p><p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="font-family: SimSun; font-size: 18px;"></span></p><p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);">&nbsp;&nbsp;&nbsp; 妇二科是我院妇科微创特色重点科室，拥有一支技术娴熟、经验丰富、配合默契的医疗团队 。</p><p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);">&nbsp;&nbsp;&nbsp; 开放床位34张、加床28张，专科门诊、独立诊室及检查室3间，心电监护仪4台、血气分析仪1台、气压治疗仪2台，微波治疗仪4台。 高级职称2人、中级职称4人，医师2人，护士14人。率先开展了妇科微创腹腔镜手术、无气腹悬吊式腹腔镜手术、腹腔镜下子宫颈环扎术、宫腹联合、改良阴式手术和盆地重建术、宫颈病变、外阴白色病变无创治疗、保留子宫动脉上行支改良式子宫切除成形术、阴道成形术等，病种普及子宫肌瘤、子宫腺肌症并子宫腺肌瘤的子宫全切、附件肿瘤、子宫内膜异位症、功血、异位妊娠、剖宫产疤痕部位妊娠、不孕症、子宫脱垂、非子宫脱垂等，成熟开展了妊娠滋养细胞肿瘤的规范化化疗、妇科恶性肿瘤（宫颈癌、卵巢癌、子宫内膜癌、输卵管癌、子宫肉瘤）等根治性手术，且多数医生在国家级、国外医院进修、培训，每年获得医院先进集体，先后荣获河南省优质护理服务示范病房、工人先锋号；先后有20多人次荣获安阳市劳动模范、五一劳动奖章、五一巾帼标兵、医院十佳优质服务明星、十佳护士、优秀共产党员、先进工作者等荣誉称号。</p><p><span style="color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; background-color: rgb(255, 255, 255);">&nbsp;</span></p><p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><br/></p><p style="text-align:center;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="font-family: SimSun; color: rgb(229, 51, 51); font-size: 24px;"><strong>妇三科</strong></span>&nbsp;&nbsp;</p><p style="text-align:center;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);">&nbsp;</p><p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="font-size: 18px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 妇三科成立于2014年5月28日，是集医疗、科研、教学为一体的妇科病区，重点病种是盆底疾病，科室秉承“患者满意是我们的宗旨”。</span><br/><span style="font-size: 18px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 科室人员组成：共有医护人员19人，其中，有医师7名、护师12名，主任医师1名，副主任医师1名，主治医师1名，住院医师4名：主管护师4名，护士8名。</span><br/><span style="font-size: 18px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 科室业务开展及特色：科室开展的盆底疾病的诊治，在豫北地区享有一定声誉省内及国内领先，有压力性尿失禁（SUI）、子宫脱垂、阴道前后壁脱垂、陈旧性会阴裂伤、阴道直肠瘘、先天性处女膜闭锁、先天性无阴道等盆底疾病；开展的手术有TVT-O术，前盆重建术、后盆重建术、全盆重建术、经腹腔镜骶前韧带固定术、经阴道骶棘韧带固定术、阴道封闭术、曼氏术、宫腔镜手术、腹腔镜手术、宫腹腔镜联合手术等。</span><br/><span style="font-size: 18px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 科室分病房和门诊两个区域，病房拥有床位24张，盆底康复门诊有盆底功能筛查仪1台，盆底功能康复治疗仪2台。科室在韩文丽院长、李志卫主任的带领下形成一个技术内涵高的医护和谐团队，并不断的取得新的发展和进步。2015年妇三科备评为市级妇科重点专科和院级重点专科。</span></p><p><br/></p>', 0, 1, 19, 1551430214),
(52, '产房', '', '', '', '', '', '', '<p style="text-align:center;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="font-family: SimSun; color: rgb(229, 51, 51); font-size: 24px;">产房简介</span></p><p style="text-align:center;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);">&nbsp;</p><p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="font-family: SimSun; font-size: 18px;">&nbsp; &nbsp;&nbsp; 产房现有医护人员36人，其中35岁以下72%，是一个充满青春活力的集体，担负着每年过万的分娩量。为了提高服务的满意度，产房在优化服务环境和设施的同时，积极推出多样温馨服务项目：温馨陪伴家庭式分娩，一对一导乐分娩，无痛分娩，回归自然的水中分娩等项目。&nbsp;&nbsp;&nbsp;&nbsp;</span></p><p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="font-family: SimSun; font-size: 18px;">&nbsp;&nbsp;&nbsp;&nbsp;一直以来，我们都秉承“关爱母婴，安全分娩”的服务理念，在工作中不懈学习、积累与探索，塑造良好服务形象，提升职业道德和服务水平，不断开拓发展新技术新项目新服务，全心全意为每一位孕产妇服务，力争“给孕产妇留下一生中最美好的回忆”。&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p><p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="font-family: SimSun; font-size: 18px;">&nbsp;&nbsp;&nbsp; 产房目前设有催产素观察室，待产室，隔离待产室，分娩室，隔离分娩室，产房手术室，水中分娩室，产后观察室，胎心中央监护室。每个待产室，分娩室都配备了多功能产床，新生儿辐射台，中央胎心监护仪，心电监护，中心供氧等设备可随时应对各种突发紧急情况。单间分娩室开展家庭化陪伴分娩。产房手术室针对情况比较紧急的孕妇，能随时改变分娩方式，确保母婴平安。水中分娩室采用现在世界最先进的水处理装置及配套设施，能最大程度的减少待产过程中的疼痛，让产妇享受最自然，最安全的分娩过程，很大程度上提高了自然分娩率。产后观察室，针对产后两小时内出血高发的情况，能做到早发现，早治疗，早处理，并能协助产妇尽早开展母婴皮肤接触，早吸吮。胎儿中央监护室，24小时动态监测胎儿在母体内的变化。&nbsp; &nbsp;&nbsp;</span></p><p><br/></p>', 0, 1, 19, 1551430256),
(53, '妇产重症监护室', '', '', '', '', '', '', '<p style="text-align:center;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="color: rgb(229, 51, 51); font-size: 24px;">妇产重症监护室</span></p><p style="text-align:center;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="color: rgb(229, 51, 51); font-size: 24px;"></span>&nbsp;</p><p style="text-align:left;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="font-family: SimSun; font-size: 18px;">&nbsp;&nbsp;&nbsp; 妇产科监护室是收治妇产科各类危重病人，进行连续动态监测、给予及时诊治和抢救的独立单元，是我院妇产科现代化的标志之一。本科目前主要收治术后危重患者：包括严重妊娠期高血压疾病、前置胎盘、胎盘早剥、妊娠合并内科疾病、产后大出血、妇科恶性肿瘤、宫外孕失血性休克等。&nbsp;&nbsp;&nbsp;&nbsp;</span></p><p style="text-align:left;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="font-family: SimSun; font-size: 18px;">&nbsp;&nbsp;&nbsp; 妇产重症监护室医护人员技术过硬，具有丰富的临床危重症患者诊治和抢救经验，能在第一时间为患者实施及时、有效地治疗和救护，为挽救患者的生命提供了保障。&nbsp;&nbsp;&nbsp;&nbsp;</span></p><p style="text-align:left;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="font-family: SimSun; font-size: 18px;">&nbsp;&nbsp;&nbsp; 妇产监护室为7张正式床位，1间隔离病室。其配有纽邦E200E呼吸机1台，PM—Y1200D浙江佩洁尔等离子空气消毒柜2台，浙江佩洁尔等离子移动式消毒机1台，i—STAT血气分析仪1台，飞利浦MP5心电监护仪3台，CD2000北京麦邦心电监护仪4台，阿童木P—600输液泵4台，G2000型振动式物理治疗仪1台，LGT—2200S空气波动循环治疗仪1台，WZS—50F6双道微量注射泵4台， SK—600Ⅱ输液泵2台， CareSens血糖仪1台，北京吉纳雾化泵4台。&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p><p style="text-align:left;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="font-family: SimSun; font-size: 18px;">&nbsp;&nbsp;&nbsp; 现有医护人员共15名，其中主任医师1名，主治医师2名，住院医师1名，主管护师2名，护师3名，护士5名，护理员1名。&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p><p style="text-align:left;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(34, 34, 34); font-family: &quot;Microsoft YaHei&quot;, Helvitica, Verdana, Tohoma, Arial, san-serif; font-size: 14px; white-space: normal; background-color: rgb(255, 255, 255);"><span style="font-family: SimSun; font-size: 18px;">&nbsp;&nbsp;&nbsp; 建科以来，经过全体医护人员的努力，逐步形成自己的业务特色，目前我科具备对重度子痫前期、急性心力衰竭、急性呼吸衰竭、肺水肿、脑水肿、胎盘早剥、前置胎盘、妊娠期糖尿病、急性失血性休克、DIC、等疾病的抢救能力，在治疗方面积累了较丰富的经验，取得了显著的成绩。</span></p><p><br/></p>', 0, 1, 19, 1551430284);

-- --------------------------------------------------------

--
-- 表的结构 `tp_cate`
--

CREATE TABLE IF NOT EXISTS `tp_cate` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT COMMENT '栏目id',
  `cate_name` varchar(20) NOT NULL COMMENT '栏目名称',
  `cate_type` tinyint(1) NOT NULL DEFAULT '5' COMMENT '栏目类型 cate_type 1:系统分类    2：帮助分类    3：网店帮助    4：网店信息    5：普通分类',
  `keywords` varchar(100) NOT NULL COMMENT '关键词',
  `description` varchar(150) NOT NULL COMMENT '描述',
  `show_nav` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否显示到导航栏 1:显示到导航栏 0：不显示到导航栏',
  `allow_son` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1：是 0：否 是否允许添加子分类',
  `sort` smallint(6) NOT NULL DEFAULT '50' COMMENT '排序',
  `pid` smallint(6) NOT NULL DEFAULT '0' COMMENT '上级栏目id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=46 ;

--
-- 转存表中的数据 `tp_cate`
--

INSERT INTO `tp_cate` (`id`, `cate_name`, `cate_type`, `keywords`, `description`, `show_nav`, `allow_son`, `sort`, `pid`) VALUES
(1, '医院概况', 1, '医院概况', '系统', 1, 0, 1, 0),
(2, '医院简介', 2, '医院简介', '医院简介', 1, 1, 11, 1),
(3, '现任领导', 2, '现任领导', '现任领导', 1, 0, 12, 1),
(35, '院长信箱', 5, '院长信箱', '院长信箱', 0, 1, 50, 0),
(18, '新闻中心', 5, '新闻中心', '新闻中心', 1, 1, 2, 0),
(19, '特色专科', 5, '特色专科', '特色专科', 1, 1, 3, 0),
(21, '就诊指南', 5, '就诊指南', '就诊指南', 1, 1, 5, 0),
(23, '医院文化', 5, '医院文化', '医院文化', 1, 1, 6, 0),
(27, '院务公开', 5, '院务公开', '院务公开', 1, 1, 7, 0),
(34, '联系我们', 5, '联系我们', '联系我们', 0, 1, 50, 0),
(28, '新闻动态', 5, '新闻动态', '新闻动态', 1, 1, 50, 18),
(29, '通知公告', 5, '通知公告', '通知公告', 1, 1, 50, 18),
(30, '视频宣传', 5, '视频宣传', '视频宣传', 1, 1, 50, 18),
(31, '特色门诊', 5, '特色门诊', '特色门诊', 1, 1, 50, 19),
(32, '门诊就诊指南', 5, '门诊就诊指南', '门诊就诊指南', 1, 1, 50, 21),
(33, '住院就诊指南', 5, '住院就诊指南', '住院就诊指南', 1, 1, 50, 21),
(36, '农合医保', 5, '农合医保', '农合医保', 0, 1, 50, 0),
(37, '院区分布', 5, '院区分布', '院区分布', 0, 1, 50, 0),
(38, '资料下载', 5, '资料下载', '资料下载', 0, 1, 50, 0),
(39, '健康教育', 5, '健康教育', '健康教育', 0, 1, 50, 0),
(40, '医护园地', 5, '医护园地', '医护园地', 0, 1, 50, 0),
(41, '学科建设', 5, '学科建设', '学科建设', 0, 1, 50, 0),
(42, '护患心声', 5, '护患心声', '护患心声', 0, 1, 50, 0),
(43, '政策解读', 5, '政策解读', '政策解读', 0, 1, 50, 0),
(44, '党团建设', 5, '党团建设', '党团建设', 1, 1, 8, 0),
(45, '院报', 5, '院报', '院报', 0, 1, 50, 0);

-- --------------------------------------------------------

--
-- 表的结构 `tp_category`
--

CREATE TABLE IF NOT EXISTS `tp_category` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(30) NOT NULL COMMENT '商品分类名称',
  `cate_img` varchar(100) NOT NULL COMMENT '栏目banner',
  `iconfont` varchar(20) NOT NULL COMMENT '栏目图标',
  `keywords` varchar(150) NOT NULL COMMENT '关键词',
  `description` varchar(255) NOT NULL COMMENT '描述',
  `sort` smallint(6) NOT NULL DEFAULT '50' COMMENT '排序',
  `pid` smallint(6) NOT NULL DEFAULT '0' COMMENT '上级栏目id',
  `show_cate` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1:显示 0:隐藏',
  `search_attr_ids` varchar(100) NOT NULL COMMENT '筛选属性',
  `ps_num` tinyint(2) unsigned NOT NULL DEFAULT '5' COMMENT '价格区间数量',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=39 ;

--
-- 转存表中的数据 `tp_category`
--

INSERT INTO `tp_category` (`id`, `cate_name`, `cate_img`, `iconfont`, `keywords`, `description`, `sort`, `pid`, `show_cate`, `search_attr_ids`, `ps_num`) VALUES
(2, '手机 数码 通信', '20171123\\3bb848f18518ecf02b8577c4c3111a3e.png', 'icon-digital', '', '', 2, 0, 0, '', 5),
(6, '数码配件', '20171123\\8a3b4a97cd662021a23d4cff5ebb392c.jpg', '', '裤子11', '裤子裤子裤子111', 50, 2, 0, '', 5),
(5, '智能设备', '', '', '', '', 5, 2, 0, '', 5),
(7, '家用电器', '', 'icon-ele', '', '', 1, 0, 0, '', 5),
(8, '大家电', '', '', '', '', 50, 7, 0, '', 5),
(9, '生活电器', '', '', '', '', 50, 7, 0, '', 5),
(10, '厨房电器', '', '', '', '', 50, 7, 0, '', 5),
(11, '平板电视', '', '', '', '', 50, 8, 0, '', 5),
(12, '空调', '', '', '', '', 50, 8, 0, '', 5),
(13, '冰箱', '', '', '', '', 50, 8, 0, '', 5),
(14, '洗衣机', '', '', '', '', 50, 8, 0, '', 5),
(15, '电风扇', '', '', '', '', 50, 9, 0, '', 5),
(16, '冷风扇', '', '', '', '', 50, 9, 0, '', 5),
(17, '净化器', '', '', '', '', 50, 9, 0, '', 5),
(18, '电饭煲', '', '', '', '', 50, 10, 0, '', 5),
(19, '电压力锅', '', '', '', '', 50, 10, 0, '', 5),
(20, '豆浆机', '', '', '', '', 50, 10, 0, '', 5),
(21, '手机通讯', '', '', '', '', 50, 2, 0, '', 5),
(22, '智能手环', '', '', '', '', 50, 5, 0, '', 5),
(23, '智能手表', '', '', '', '', 50, 5, 0, '', 5),
(24, '智能眼镜', '', '', '', '', 50, 5, 0, '', 5),
(25, '运动跟踪器', '', '', '', '', 50, 5, 0, '', 5),
(26, '存储卡', '', '', '', '', 50, 6, 0, '', 5),
(27, '读卡器', '', '', '', '', 50, 6, 0, '', 5),
(28, '滤镜', '', '', '', '', 50, 6, 0, '', 5),
(29, '手机对讲机', '', '', '', '', 50, 21, 0, '', 5),
(33, '男装、女装、内衣', '', 'icon-clothes', '', '', 50, 0, 0, '6,7', 6),
(34, '女装', '', '', '', '', 50, 33, 0, '', 5),
(35, '衬衫', '', '', '', '', 50, 34, 0, '', 5),
(38, 'mac笔记本111', '', '', '', '', 50, 0, 0, '1,3', 5);

-- --------------------------------------------------------

--
-- 表的结构 `tp_category_ad`
--

CREATE TABLE IF NOT EXISTS `tp_category_ad` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `img_src` varchar(60) NOT NULL COMMENT '图片地址',
  `position` char(1) NOT NULL COMMENT '广告位置：a左, b右上 ,c右下',
  `link_url` varchar(60) NOT NULL COMMENT '链接地址',
  `category_id` mediumint(9) NOT NULL COMMENT '所属大分类',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `tp_category_ad`
--

INSERT INTO `tp_category_ad` (`id`, `img_src`, `position`, `link_url`, `category_id`) VALUES
(2, '20180124\\0d6a0aee6a4725e84f1a468aafb34c83.jpg', 'A', 'http://tongpankt.com', 2),
(3, '20180124\\74f63335c19c2a0b9f3d8dce44b7f4dd.jpg', 'A', 'http://tongpankt.com', 2),
(4, '20180124\\8bfe75ad3627e71aef61a611880b7625.jpg', 'A', 'http://tongpankt.com', 2),
(5, '20180124\\e571a684a340efed6e71496b4292361d.jpg', 'B', '', 2),
(6, '20180124\\d097cd30c4f81acad34ee9ae05ad3a85.jpg', 'C', 'http://tongpankt.com', 2),
(7, '20180124\\1750375ab6e9f98003f1a90b4fae9fae.png', 'A', 'http://google.com', 7),
(8, '20180124\\b6093758c897776c5ebf25c442390a9d.png', 'A', 'http://baidu.com', 7),
(9, '20180124\\2f80e5372bab77140962ffaffe40a6b1.png', 'A', 'http://google.com', 7),
(10, '20180124\\33c38f3561099d19a2a3797576b5b60d.png', 'B', 'http://tongpankt.com', 7),
(11, '20180124\\45ca8607c268fbc0edd07f8b9a23887f.png', 'C', 'http://tongpankt.com', 7);

-- --------------------------------------------------------

--
-- 表的结构 `tp_category_brands`
--

CREATE TABLE IF NOT EXISTS `tp_category_brands` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `brands_id` varchar(100) NOT NULL COMMENT '关联的品牌id列表',
  `pro_img` varchar(60) NOT NULL COMMENT '推广图地址',
  `pro_url` varchar(60) NOT NULL COMMENT '推广图链接',
  `category_id` mediumint(9) NOT NULL COMMENT '对应主栏目id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `tp_category_brands`
--

INSERT INTO `tp_category_brands` (`id`, `brands_id`, `pro_img`, `pro_url`, `category_id`) VALUES
(2, '3,2', '20180121\\49498025d33d8485ce089118a4b3953c.jpg', 'http://tongpankt.com', 7),
(4, '3', '20180121\\e60976a9df6fd2fcaf7b2d2d94a5a97b.jpg', 'http://tongpankt.com', 2);

-- --------------------------------------------------------

--
-- 表的结构 `tp_category_words`
--

CREATE TABLE IF NOT EXISTS `tp_category_words` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `category_id` mediumint(9) NOT NULL COMMENT '关联的顶级栏目id',
  `word` varchar(60) NOT NULL COMMENT '词汇',
  `link_url` varchar(60) NOT NULL COMMENT '链接地址',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `tp_category_words`
--

INSERT INTO `tp_category_words` (`id`, `category_id`, `word`, `link_url`) VALUES
(1, 2, '品牌日', 'http://tongpankt.com'),
(4, 2, '手机社区', 'http://127.0.0.1/shop/index.php/category/4.html'),
(2, 7, '家电城', 'http://tongpankt.com'),
(3, 7, '智能生活馆', 'http://study.163.com/u/tongpankt'),
(5, 7, '冰箱', '');

-- --------------------------------------------------------

--
-- 表的结构 `tp_conf`
--

CREATE TABLE IF NOT EXISTS `tp_conf` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `ename` varchar(30) NOT NULL COMMENT '英文名称',
  `cname` varchar(30) NOT NULL COMMENT '中文名称',
  `form_type` varchar(10) NOT NULL DEFAULT 'input' COMMENT '表单类型',
  `conf_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '配置类型 1：网店配置 2：商品配置',
  `values` varchar(60) NOT NULL COMMENT '可选值',
  `value` varchar(255) NOT NULL COMMENT '默认值',
  `sort` smallint(6) NOT NULL DEFAULT '50',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- 转存表中的数据 `tp_conf`
--

INSERT INTO `tp_conf` (`id`, `ename`, `cname`, `form_type`, `conf_type`, `values`, `value`, `sort`) VALUES
(2, 'site_name', '站点名称', 'input', 1, '', '我的网站', 7),
(3, 'site_keywords', '站点关键词', 'input', 1, '', '网站', 6),
(4, 'site_description', '站点描述', 'textarea', 1, '', '网站网站网站网站网站网站网站网站网站网站网站', 5),
(5, 'close_site', '关闭站点', 'radio', 1, '是,否', '否', 4),
(6, 'logo', '网站logo', 'file', 1, '', '20171122\\2abdd4ed4c290faeb73437387ea9593c.jpg', 3),
(7, 'reg', '会员注册', 'select', 1, '开启,关闭', '开启', 2),
(8, 'checks', '多选测试', 'checkbox', 1, '选项1,选项2,选项3,选项4', '选项1,选项3', 1),
(10, 'ewm', '二维码', 'file', 1, '', '20171122\\556f518e5123d50477e21030771926ac.jpg', 4),
(11, 'ces', '测试复选', 'checkbox', 1, '测试1,测试2,测试3,测试4', '测试2,测试4', 0),
(12, 'cs', '测试', 'input', 2, '', '测试1111', 50),
(13, 'ts', '每页条数', 'checkbox', 2, '5,10,15', '10', 50),
(14, 'search_keywords', '搜索关键词', 'textarea', 1, '', '周大福,内衣,Five,Plus,手机', 50),
(15, 'search_value', '搜索框默认值', 'input', 1, '', 'mackpro', 50),
(16, 'cache', '开启缓存', 'radio', 1, '是,否', '否', 50),
(17, 'cache_time', '缓存有效期', 'input', 1, '', '20', 50);

-- --------------------------------------------------------

--
-- 表的结构 `tp_doctor`
--

CREATE TABLE IF NOT EXISTS `tp_doctor` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL COMMENT '姓名',
  `ranks` varchar(10) NOT NULL COMMENT '职称',
  `department` smallint(6) NOT NULL COMMENT '科室（1儿内科,2妇产科,3乳腺科4生殖遗传,5耳鼻喉科,6保健部,7儿外科,8口腔科,9医技辅助10）',
  `intro` varchar(500) NOT NULL COMMENT '简介',
  `skilled` varchar(500) NOT NULL COMMENT '擅长',
  `schedule` varchar(100) NOT NULL COMMENT '周日上午-周六下午(00a,00b,01a,01b,02a,02b,03a,03b,04a,04b,05a,05b,06a,06b)',
  `pic_url` varchar(100) NOT NULL COMMENT '缩略图地址',
  `addtime` int(11) NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `tp_doctor`
--

INSERT INTO `tp_doctor` (`id`, `name`, `ranks`, `department`, `intro`, `skilled`, `schedule`, `pic_url`, `addtime`) VALUES
(1, '李青', '主任医师', 6, '22', '33', '01a,02a,03b,06a,06b', '20190222/5d52a0beb83cafae8ea9480bdb888f82.jpg', 0),
(2, '李文军', '副主任医师', 6, '小儿脑瘫、智力低下、脑发育迟缓、语言发育障碍的康复治疗，积累了丰富的诊断及康复经验，特别是对小儿孤独症的康复训练有丰富经验及独到见解。', '更多  更多 李文军，儿科副主任医师，1991年毕业于河南医科大学临床系，学士学位。毕业后即从事儿科临床工作，先后在新生儿科、普通病房、ICU、急诊室等科室工作，业务全面，技术熟练。2000年在北京医科大学进修小儿神经科，对小儿神经系统疾病如：癫痫、脑炎、高热惊厥、代谢病的诊治方面积累了丰富的经验，2003年赴佳木斯脑瘫疗育中心学习，2006年在北京学习小儿语言康复。', '01a,02a,03b,04a,05b', '20190222/d2976f2d5496d1f396102cb88f2999d9.jpg', 1550804180),
(4, '李亚娟', '主任医师', 1, '在抢救各种原因引起的多脏器功能衰竭、小儿各型中毒、各型休克、各型中毒、急腹症、心肺复苏等方面经验丰富', '急诊科主任，主任医师，任中华医学会河南省儿科分会急救学组委员，中国医师协会河南儿科分会常委，中西医结合协会河南急诊分会常委，中国医师协会河南急诊分会委员，河南省健康管理协会儿科分会委员，中国羊城儿童急诊急救论坛专家协作组成员。多次主办安阳市儿童急诊医学高峰论坛会。曾在北大妇儿医院重症专业深造，在抢救各种原因引起的多脏器功能衰竭、小儿各型中毒、各型休克、各型中毒、急腹症、心肺复苏等方面经验丰富，带领全科在小儿急救方面形成了一支训练有素的专业队伍，使我院儿童急救技术处于全市领先水平。在国家级、核心期刊发表论文30余篇，论著3部，主持科研4项。', '00b,01a,04a,06b', '20190228/a8305252909ae5bb409555f8f311bd21.jpg', 1551322380),
(5, '李海燕', '副主任医师', 1, '熟悉小儿常见疾病尤其是呼吸道疾病及小儿危重疾病的诊断和治疗。', '副主任医师，小儿呼吸专业硕士研究生毕业，2010年在北京儿童医院进修学习小儿重症医学专业半年，进修小儿纤维支气管镜四个月。目前在重症监护室工作，熟悉小儿常见疾病尤其是呼吸道疾病及小儿危重疾病的诊断和治疗。2013年5月首先在安阳市了开展小儿纤维支气管镜，对小儿呼吸道疑难重症疾病的诊断和治疗起到了很重要的作用。在国家级、省级杂志上发表文章数篇。', '01b,02a', '20190228/a2f0083472849428ccd1df9d346110d6.jpg', 1551324094),
(6, '商怀玉', '主任医师', 1, '对各类小儿内科疾病有丰富的临床经验，尤其擅长于各类小儿惊厥性疾病、小儿脑瘫、缺氧缺血性脑病等小儿神经系统疾病的诊断及治疗', '儿科主任兼神经康复一病区主任，主任医师，儿内科主任医师、中华医学会小儿癫痫学会委员，中华医学会河南省儿科分会委员，河南省残疾人康复委员会常委，安阳市儿科重点专科学科带头人。对各类小儿内科疾病有丰富的临床经验，尤其擅长于各类小儿惊厥性疾病、小儿脑瘫、缺氧缺血性脑病等小儿神经系统疾病的诊断及治疗。2003年带头成立了小儿神经康复科，为我市小儿神经系统疾病的诊治及小儿康复医学填补了空白。曾参加北京大学组织的《婴幼儿身心发育早期干预研究》科研课题，并获北京大学科技进步二等奖。主编《婴幼儿身心发育》一书，并多次在省级、国家级杂志上发表论文。', '01b,02a', '20190228/88175444da5a71b3976922575f56b24c.jpg', 1551325736);

-- --------------------------------------------------------

--
-- 表的结构 `tp_nav`
--

CREATE TABLE IF NOT EXISTS `tp_nav` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nav_name` varchar(30) NOT NULL COMMENT '导航名称',
  `nav_url` varchar(30) NOT NULL COMMENT '导航地址',
  `open` tinyint(1) NOT NULL DEFAULT '1' COMMENT '打开方式 1：新标签 2：当前页',
  `pos` varchar(6) NOT NULL DEFAULT '' COMMENT '顶部：top 中间：mid  底部：bottom',
  `sort` smallint(6) NOT NULL DEFAULT '50' COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `tp_nav`
--

INSERT INTO `tp_nav` (`id`, `nav_name`, `nav_url`, `open`, `pos`, `sort`) VALUES
(2, '我的订单', 'http://tongpankt.com', 2, 'top', 14),
(3, '我的浏览', 'http://sdfs', 1, 'top', 13),
(4, '我的收藏', 'http://tongpankt.com', 1, 'top', 12),
(5, '客户服务', 'http://tongpankt.com', 1, 'top', 11),
(6, '女人街', 'http://tongpankt.com', 1, 'mid', 50),
(7, '男人柜', 'http://tongpankt.com', 1, 'mid', 50),
(8, '品牌专区', 'http://tongpankt.com', 1, 'mid', 50),
(9, '聚划算', 'http://tongpankt.com', 1, 'mid', 50),
(10, '积分商城', 'http://tongpankt.com', 1, 'mid', 50);

-- --------------------------------------------------------

--
-- 表的结构 `tp_user`
--

CREATE TABLE IF NOT EXISTS `tp_user` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL COMMENT '用户名',
  `password` char(32) NOT NULL COMMENT '密码',
  `email` varchar(60) NOT NULL COMMENT '邮箱',
  `mobile_phone` char(11) NOT NULL COMMENT '电话',
  `register_type` tinyint(1) NOT NULL COMMENT '1：手机已验证 0：邮箱已验证 2：手机邮箱均已验证',
  `points` mediumint(8) unsigned NOT NULL DEFAULT '0' COMMENT '会员积分',
  `register_time` int(10) unsigned NOT NULL COMMENT '注册时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `tp_user`
--

INSERT INTO `tp_user` (`id`, `username`, `password`, `email`, `mobile_phone`, `register_type`, `points`, `register_time`) VALUES
(1, 'tongpan', 'e10adc3949ba59abbe56e057f20f883e', '', '18565656564', 1, 2500, 1521463538),
(2, 'tongnian', 'e10adc3949ba59abbe56e057f20f883e', 'sfasffffff@qq.com', '13781565525', 0, 25000, 1535764892),
(3, 'panpan', 'e10adc3949ba59abbe56e057f20f883e', 'sfas@qq.com', '13781565525', 2, 20000, 1535765288);

-- --------------------------------------------------------

--
-- 表的结构 `tp_user_info`
--

CREATE TABLE IF NOT EXISTS `tp_user_info` (
  `user_id` mediumint(9) NOT NULL,
  `nick_name` varchar(30) NOT NULL,
  `avatar_src` varchar(100) NOT NULL COMMENT '头像地址',
  `year` smallint(5) unsigned NOT NULL,
  `month` tinyint(3) unsigned NOT NULL,
  `date` tinyint(3) unsigned NOT NULL,
  `sex` tinyint(1) NOT NULL DEFAULT '3' COMMENT '1:男 2:女 3：保密',
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tp_user_info`
--

INSERT INTO `tp_user_info` (`user_id`, `nick_name`, `avatar_src`, `year`, `month`, `date`, `sex`) VALUES
(1, '童年', '20181202\\712687f4d1cb8a5970e59e3ebb38c283.png', 1990, 4, 28, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
