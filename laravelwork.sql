/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50640
Source Host           : localhost:3306
Source Database       : laravelwork

Target Server Type    : MYSQL
Target Server Version : 50640
File Encoding         : 65001

Date: 2023-06-12 23:39:57
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `adminname` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'admin', '123', 'sdag132456');
INSERT INTO `admin` VALUES ('7', '谢胜伟', '123', '4568');

-- ----------------------------
-- Table structure for cart
-- ----------------------------
DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `img` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `miaoshu` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of cart
-- ----------------------------
INSERT INTO `cart` VALUES ('13', '圣罗兰明彩粉光轻垫粉底液', 'img/16690995192295361_1000X1000.webp', '源于恋爱浪漫之都巴黎，让你感受疯狂');
INSERT INTO `cart` VALUES ('14', '圣罗兰细管丝绒纯口红', 'img/7e76545b7f9e42e68a55b067954beda1_1000X1000.webp', '冷暖碰撞 双感馥奇花香调');
INSERT INTO `cart` VALUES ('16', 'YSL圣罗兰夜皇后水盾面霜滋润版', 'img/16818698826403183_1000X1000.webp', '全新自由之水清新版');

-- ----------------------------
-- Table structure for info
-- ----------------------------
DROP TABLE IF EXISTS `info`;
CREATE TABLE `info` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `price` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `content` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `count` int(255) DEFAULT NULL,
  `img` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `typeid` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tb_info_ibfk_1` (`typeid`),
  CONSTRAINT `tb_info_ibfk_1` FOREIGN KEY (`typeid`) REFERENCES `type` (`typeid`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of info
-- ----------------------------
INSERT INTO `info` VALUES ('1', null, null, '产品分类', null, null, '1');
INSERT INTO `info` VALUES ('2', null, null, '男士香水', null, null, '1');
INSERT INTO `info` VALUES ('3', null, null, '女士香水', null, null, '1');
INSERT INTO `info` VALUES ('4', '', null, '系列', null, null, '2');
INSERT INTO `info` VALUES ('5', null, null, '反转巴黎', null, null, '2');
INSERT INTO `info` VALUES ('6', null, null, '黑色奥飘茗', null, null, '2');
INSERT INTO `info` VALUES ('7', null, null, '衣典系列', null, null, '2');
INSERT INTO `info` VALUES ('8', null, null, '自由之水', null, null, '2');
INSERT INTO `info` VALUES ('9', null, null, '先锋男士', null, null, '2');
INSERT INTO `info` VALUES ('10', null, null, '价格范围', null, null, '3');
INSERT INTO `info` VALUES ('11', null, null, '￥480-￥2200', null, null, '3');
INSERT INTO `info` VALUES ('12', null, null, '定制服务', null, null, '4');
INSERT INTO `info` VALUES ('13', null, null, '支持刻字', null, null, '4');
INSERT INTO `info` VALUES ('14', null, null, '规格', null, null, '5');
INSERT INTO `info` VALUES ('15', null, null, '30mL', null, null, '5');
INSERT INTO `info` VALUES ('16', null, null, '50mL', null, null, '5');
INSERT INTO `info` VALUES ('17', null, null, '淡香型90mL', null, null, '5');
INSERT INTO `info` VALUES ('18', null, null, '618星品', null, null, '6');
INSERT INTO `info` VALUES ('19', null, null, '仅看有货', null, null, '6');
INSERT INTO `info` VALUES ('22', null, '650', 'YSL圣罗兰夜皇后精华水滋润型', null, 'img/16818698214439443_1000X1000.webp', '7');
INSERT INTO `info` VALUES ('23', null, '560', '圣罗兰高能小滴管防晒乳', null, 'img/1679306981627550_1000X1000.webp', '7');
INSERT INTO `info` VALUES ('24', null, '860', 'YSL圣罗兰胜肽精华 24骨全自动黑色', null, 'img/16818703311746722_1000X1000.webp', '7');
INSERT INTO `info` VALUES ('25', null, '860', 'YSL夜皇后精华', null, 'img/16850251783294507_1000X1000.webp', '7');
INSERT INTO `info` VALUES ('26', null, '590', '香奈儿山茶花润泽精华水', null, 'img/8818159058974.webp', '7');
INSERT INTO `info` VALUES ('27', null, '665', '香奈儿男士控油保湿液', null, 'img/8836910776350.webp', '7');
INSERT INTO `info` VALUES ('28', null, '600', '香奈儿一号红山茶花爽肤水', null, 'img/8857199935518.webp', '7');
INSERT INTO `info` VALUES ('29', null, '655', '香奈儿光采透白精华水', null, 'img/8824199807006.webp', '7');
INSERT INTO `info` VALUES ('30', '圣罗兰无畏釉光纯口红', '370', '唇膏', null, 'img/16594250506651239_1000X1000.webp', '8');
INSERT INTO `info` VALUES ('31', '圣罗兰亮颜亮肌乳', '560', '妆前隔离', null, 'img/16070502794888349_1000X1000.webp', '8');
INSERT INTO `info` VALUES ('32', '圣罗兰亮颜喷雾 ', '390', '定妆喷雾', null, 'img/16070504972679620_238X265.webp', '8');
INSERT INTO `info` VALUES ('33', '圣罗兰明彩笔', '150', '眼部', null, 'img/16111291181461977_238X265.webp', '8');
INSERT INTO `info` VALUES ('34', '圣罗兰细管纯口红', '690', '唇部', null, 'img/1600846789372956_1000X1000.webp', '8');
INSERT INTO `info` VALUES ('35', '全新 YSL「恒久」粉底液', '630', '面部', null, 'img/16793041323572200_1000X1000.webp', '8');
INSERT INTO `info` VALUES ('37', null, null, '圣罗兰无畏釉光纯口红', null, 'img/8857199935518.webp', '9');
INSERT INTO `info` VALUES ('38', null, null, '圣罗兰亮颜亮肌乳', null, 'img/8857199935518.webp', '10');
INSERT INTO `info` VALUES ('39', null, null, '圣罗兰亮颜喷雾 ', null, 'img/8857199935518.webp', '11');
INSERT INTO `info` VALUES ('40', null, null, '圣罗兰明彩笔', null, 'img/8857199935518.webp', '12');
INSERT INTO `info` VALUES ('41', null, null, '圣罗兰全新绒密防水睫毛膏', null, 'img/8857199935518.webp', '12');
INSERT INTO `info` VALUES ('42', null, null, '圣罗兰眉笔', null, 'img/8857199935518.webp', '12');
INSERT INTO `info` VALUES ('43', null, null, '圣罗兰蒙德里安五色眼影', null, 'img/8857199935518.webp', '12');
INSERT INTO `info` VALUES ('44', null, null, '圣罗兰细管纯口红', null, null, '13');
INSERT INTO `info` VALUES ('45', null, null, '圣罗兰黑管唇釉', null, 'img/8857199935518.webp', '13');
INSERT INTO `info` VALUES ('46', null, null, '圣罗兰莹亮纯魅唇膏', null, null, '13');
INSERT INTO `info` VALUES ('47', null, null, '圣罗兰天鹅绒唇釉', null, null, '13');
INSERT INTO `info` VALUES ('48', '圣罗兰星钻妆前饰底乳', '460', '妆前隔离', null, 'img/1607584270168100_1000X1000.webp', '8');
INSERT INTO `info` VALUES ('49', '圣罗兰亮颜唇部精华霜', '300', '妆前隔离', null, 'img/15422798547392777_1000X1000.webp', '8');
INSERT INTO `info` VALUES ('50', '圣罗兰亮颜喷雾', '390', '妆前隔离', null, 'img/16070504972679620_1000X1000.webp', '8');
INSERT INTO `info` VALUES ('51', 'YSL首款彩妆私调概念机', '5618', '唇膏', null, 'img/16355187986528104_1000X1000.webp', '8');
INSERT INTO `info` VALUES ('52', '圣罗兰纯口红', '360', '唇膏', null, 'img/16076785660904925_1000X1000.webp', '8');
INSERT INTO `info` VALUES ('53', '圣罗兰全新绒密防水睫毛膏', '170', '眼部', null, 'img/16111291181461977_238X265.webp', '8');
INSERT INTO `info` VALUES ('54', '圣罗兰眉笔', '150', '眼部', null, 'img/16111291181461977_238X265.webp', '8');
INSERT INTO `info` VALUES ('55', '圣罗兰蒙德里安五色眼影', '130', '眼部', null, 'img/16111291181461977_238X265.webp', '8');
INSERT INTO `info` VALUES ('56', '圣罗兰黑管唇釉', '370', '唇部', null, 'img/16794899683099737_1000X1000.webp', '8');
INSERT INTO `info` VALUES ('57', '圣罗兰莹亮纯魅唇膏', '370', '唇部', null, 'img/15887668347535806_1000X1000.webp', '8');
INSERT INTO `info` VALUES ('58', '圣罗兰天鹅绒唇釉', '450', '唇部', null, 'img/16793123633042622_1000X1000.webp', '8');
INSERT INTO `info` VALUES ('59', '圣罗兰细管柔光纯口红 ', '650', '唇部', null, 'img/16188257689877374_1000X1000.webp', '8');
INSERT INTO `info` VALUES ('60', '圣罗兰恒颜无瑕轻垫粉底液', '600', '面部', null, 'img/c694d64438d74f7b9c996b9967f839dc_1000X1000.webp', '8');
INSERT INTO `info` VALUES ('61', '圣罗兰超模精华粉霜', '650', '面部', null, 'img/16044858345081793_1000X1000.webp', '8');
INSERT INTO `info` VALUES ('62', '圣罗兰妍活青春粉底液', '650', '面部', null, 'img/6d1c06905d0949d99fb8d9ee288b82c5_1000X1000.webp', '8');
INSERT INTO `info` VALUES ('63', '吻我，我戴着镜子茶果冻', '镜面茶果冻淡唇釉', '具有保湿，0腐蚀配方和水性荧光笔，其清爽的质地和特殊的刷头创造了茶冻唇妆效果。', null, 'img/Blog1_800x_crop_center.webp', '15');
INSERT INTO `info` VALUES ('64', '橘子海保湿妆前乳', null, '薄涂白桃杏仁 厚涂冰透乌龙 百搭日常不挑皮 清透伪素颜', null, 'img/3_2867835f-5edc-4dca-adf8-121e0bdfe366_360x.webp', '15');
INSERT INTO `info` VALUES ('65', 'YSL「银管」口红', null, '人气新品 全新上市 欲感绝色 以水光质地诠释春夏美感', null, 'img/16845704053545578.webp', '15');
INSERT INTO `info` VALUES ('66', '3 件手指遮瑕粉扑', null, '微柔日光的浓郁赤茶 温柔日常 随性高级感 水光质地 通透饱满', null, 'img/2-800_800.jpg', '15');
INSERT INTO `info` VALUES ('67', '无痕云触霜粉底', null, '玻尿酸搭配维E 持续高保湿 石榴精华糅合芒果油 修护抗氧化', null, 'img/02-min_a840efb2-2710-473f-b84b-e12ab45f08d5.webp', '15');
INSERT INTO `info` VALUES ('68', '漂亮腮红粉', null, '漂亮腮红粉 荔枝冻饮 浸透碎冰的清甜荔枝 夏日氧气感 衬肤提气色', null, 'img/11_24308402-2db5-4b5d-93b3-2f3d69b1a2cd.jpg', '15');
INSERT INTO `info` VALUES ('69', '三色调遮瑕膏调色板', null, '长效滋润 水漾呵护 随性高级感 融于唇间的浓郁可可 由赤入棕 冷欲飒爽', null, 'img/02.webp', '15');

-- ----------------------------
-- Table structure for lunbo
-- ----------------------------
DROP TABLE IF EXISTS `lunbo`;
CREATE TABLE `lunbo` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `text` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `img` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of lunbo
-- ----------------------------
INSERT INTO `lunbo` VALUES ('1', 'YSL小金条', 'YSL1996无法复刻的红棕', 'img/16845693629327796.webp');
INSERT INTO `lunbo` VALUES ('2', 'YSL全新粉底液', '超薄薄面HIGH到凌晨', 'img/16845692358781626.webp');
INSERT INTO `lunbo` VALUES ('3', '炽热无畏 高能迸发', '爆品至高 买一赠一', 'img/16850267866634295.webp');

-- ----------------------------
-- Table structure for pinglun
-- ----------------------------
DROP TABLE IF EXISTS `pinglun`;
CREATE TABLE `pinglun` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `neirong` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of pinglun
-- ----------------------------

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES ('2', 'img/9525975482398.webp', '香奈儿奢华精萃乳霜（轻盈）', '100.00');
INSERT INTO `product` VALUES ('3', 'img/1679306981627550_1000X1000.webp', '	ysl圣罗兰自由之水 全新自由之水清新版活在当下 肆意如我 冷暖碰撞 双感馥奇花香调', '158.00');
INSERT INTO `product` VALUES ('4', 'img/1601177303784952_1000X1000.webp', 'ysl圣罗兰超模精华粉霜 全新圣罗兰「超模精华粉霜」外遮内养 无瑕瓷光干皮定制 以妆养肤 光感升级', '150.00');
INSERT INTO `product` VALUES ('5', 'img/16194173032848132_1000X1000.webp', 'ysl圣罗兰高定皮气垫 YSL「皮气垫」全新摇滚复刻版 高定复刻时「妆」 尽显不羁前卫姿态 细腻服帖 高定随行', '650.00');
INSERT INTO `product` VALUES ('7', 'img/321a19bc54040a9e.jpg.webp', '梦庭 创意垃圾桶压圈式家用办公室大号卡通款 客厅纸篓大容量绿色9972', '179.00');
INSERT INTO `product` VALUES ('8', 'img/eca18fc3c0543a46.jpg.webp', '美的（Midea）电水壶热水壶304不锈钢水壶防烫暖水壶净甜大容量家用开水壶烧水壶智能断电MK-SH17M301A', '79.00');
INSERT INTO `product` VALUES ('9', 'img/78adb63c823c51eb.jpg.webp', '李宁篮球背包男新款CBA全赞助球员款大容量运动双肩包ABSR176 【2020CBA全背包】305x200x500mm 36-55升', '768.00');
INSERT INTO `product` VALUES ('10', 'img/2916a1be7b851406.jpg.webp', '李宁布料游泳帽加大号大头围不勒头长发男女士成人款儿童防水帽子', '38.00');
INSERT INTO `product` VALUES ('11', 'img/eca18fc3c0543a46.jpg.webp', 'SH17M301A', '79.00');
INSERT INTO `product` VALUES ('12', 'img/321a19bc54040a9e.jpg.webp', '梦庭 创意垃圾桶压圈式家用办公室大号卡通款 客厅纸篓大容量绿色9972', '179.00');
INSERT INTO `product` VALUES ('13', 'img/fe179a9ca1f1cd0b.jpg.webp', 'LOLA ROSE罗拉玫瑰汤唯同款经典小绿表礼盒女士手表女表520礼物送女友', '159.00');
INSERT INTO `product` VALUES ('15', 'img/02.webp', '我是新添加的商品', '599.00');

-- ----------------------------
-- Table structure for type
-- ----------------------------
DROP TABLE IF EXISTS `type`;
CREATE TABLE `type` (
  `typeid` int(10) NOT NULL,
  `classify` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`typeid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of type
-- ----------------------------
INSERT INTO `type` VALUES ('1', '产品分类', '');
INSERT INTO `type` VALUES ('2', '系列', null);
INSERT INTO `type` VALUES ('3', '价格范围', null);
INSERT INTO `type` VALUES ('4', '定制服务', null);
INSERT INTO `type` VALUES ('5', '规格', null);
INSERT INTO `type` VALUES ('6', '618星品', null);
INSERT INTO `type` VALUES ('7', '为你推荐', null);
INSERT INTO `type` VALUES ('8', '类似产品', null);
INSERT INTO `type` VALUES ('9', '唇膏', null);
INSERT INTO `type` VALUES ('10', '妆前隔离', null);
INSERT INTO `type` VALUES ('11', '定妆喷雾', null);
INSERT INTO `type` VALUES ('12', '眼部', null);
INSERT INTO `type` VALUES ('13', '唇部', null);
INSERT INTO `type` VALUES ('14', '面部', null);
INSERT INTO `type` VALUES ('15', '美妆', null);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `userid` int(25) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `phone` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'aa', '123', '123458');
INSERT INTO `user` VALUES ('2', 'bb', '123', null);
INSERT INTO `user` VALUES ('20', 'yyy', '123', '1325555');
INSERT INTO `user` VALUES ('22', 'yyyy', '1234565', '12331666');
INSERT INTO `user` VALUES ('23', 'yuio', '12345dfgg', '');
INSERT INTO `user` VALUES ('26', 'fdsfds', 'fdfddfsd', '123456798');

-- ----------------------------
-- Table structure for xiangqing
-- ----------------------------
DROP TABLE IF EXISTS `xiangqing`;
CREATE TABLE `xiangqing` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `price` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `count` int(50) DEFAULT NULL,
  `img` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `miaoshu` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of xiangqing
-- ----------------------------
INSERT INTO `xiangqing` VALUES ('1', 'YSL圣罗兰夜皇后水盾面霜滋润版', '930.0', '1', 'img/16818698826403183_1000X1000.webp', '全新自由之水清新版');
INSERT INTO `xiangqing` VALUES ('2', '圣罗兰细管丝绒纯口红', '390.0', '1', 'img/7e76545b7f9e42e68a55b067954beda1_1000X1000.webp', '冷暖碰撞 双感馥奇花香调');
INSERT INTO `xiangqing` VALUES ('3', '圣罗兰亮颜喷雾 ', '490.0', '1', 'img/16582010312125053_1000X1000.webp', '活在当下 肆意如我');
INSERT INTO `xiangqing` VALUES ('4', '圣罗兰明彩粉光轻垫粉底液', '650.0', '1', 'img/16690995192295361_1000X1000.webp', '源于恋爱浪漫之都巴黎，让你感受疯狂');
INSERT INTO `xiangqing` VALUES ('5', '圣罗兰反转巴黎女士香水', '1150', null, 'img/16069813046228783_1000X1000.webp', '源于恋爱浪漫之都巴黎，让你感受疯狂');
INSERT INTO `xiangqing` VALUES ('6', '圣罗兰反转巴黎光耀淡香水', '1070', null, 'img/16499373124887608_1000X1000.webp', '神秘明亮的曼陀罗与深邃强烈的广藿香... ');
INSERT INTO `xiangqing` VALUES ('7', '圣罗兰反转巴黎花耀香水', '860', null, 'img/16190947503513480_1000X1000.webp', 'YSL首款木质西普玫瑰调香水');
INSERT INTO `xiangqing` VALUES ('8', '圣罗兰衣典香水', '1550', null, 'img/16793199380255305_1000X1000.webp', '圣罗兰高定衣典香水·衬衣');
INSERT INTO `xiangqing` VALUES ('9', '圣罗兰反转巴黎女士香水', '1150', null, null, '源于恋爱浪漫之都巴黎，让你感受疯狂');
INSERT INTO `xiangqing` VALUES ('10', '圣罗兰反转巴黎女士香水', '1150', null, null, '源于恋爱浪漫之都巴黎，让你感受疯狂');
INSERT INTO `xiangqing` VALUES ('11', '圣罗兰反转巴黎女士香水', '1150', null, null, '源于恋爱浪漫之都巴黎，让你感受疯狂');
INSERT INTO `xiangqing` VALUES ('12', '圣罗兰反转巴黎女士香水', '1150', null, null, '源于恋爱浪漫之都巴黎，让你感受疯狂');
INSERT INTO `xiangqing` VALUES ('13', '圣罗兰反转巴黎女士香水', '1150', null, null, '源于恋爱浪漫之都巴黎，让你感受疯狂');
INSERT INTO `xiangqing` VALUES ('14', '圣罗兰反转巴黎女士香水', '1150', null, null, '源于恋爱浪漫之都巴黎，让你感受疯狂');
INSERT INTO `xiangqing` VALUES ('15', 'YSL圣罗兰夜皇后水盾面霜滋润版', '930.0', null, null, null);
INSERT INTO `xiangqing` VALUES ('16', 'YSL圣罗兰夜皇后水盾面霜滋润版', '930.0', null, null, null);
INSERT INTO `xiangqing` VALUES ('17', '圣罗兰细管丝绒纯口红', '390.0', null, null, null);
INSERT INTO `xiangqing` VALUES ('18', '圣罗兰明彩粉光轻垫粉底液', '650.0', null, null, '都发大水发');
INSERT INTO `xiangqing` VALUES ('19', 'YSL圣罗兰夜皇后水盾面霜滋润版', '930.0', null, null, '发发打发');
