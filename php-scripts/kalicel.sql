/*
 Navicat Premium Data Transfer

 Source Server         : Servidor
 Source Server Type    : MySQL
 Source Server Version : 100612 (10.6.12-MariaDB-0ubuntu0.22.04.1)
 Source Host           : 162.222.203.222:3306
 Source Schema         : kalicel

 Target Server Type    : MySQL
 Target Server Version : 100612 (10.6.12-MariaDB-0ubuntu0.22.04.1)
 File Encoding         : 65001

 Date: 15/08/2023 21:06:09
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for displays
-- ----------------------------
DROP TABLE IF EXISTS `displays`;
CREATE TABLE `displays`  (
  `id_display` int NOT NULL AUTO_INCREMENT,
  `modelo_display` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `marca_display` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `color_display` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `cantidad_display` int NOT NULL,
  `calidad_display` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NULL DEFAULT NULL,
  `versión_display` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NULL DEFAULT NULL,
  `caja_display` int NOT NULL,
  PRIMARY KEY (`id_display`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 329 CHARACTER SET = utf8mb3 COLLATE = utf8mb3_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of displays
-- ----------------------------
INSERT INTO `displays` VALUES (1, 'P Smart 2019', 'Huawei', 'NA', 9, 'Original', 'Nota', 0);
INSERT INTO `displays` VALUES (2, 'Y3', 'Huawei', 'Negro', 1, '', '', 1);
INSERT INTO `displays` VALUES (3, 'Y5 2', 'Huawei', 'Negro', 5, '', '', 1);
INSERT INTO `displays` VALUES (4, 'Y5 2', 'Huawei', 'Blanco', 2, '', '', 1);
INSERT INTO `displays` VALUES (5, 'Y5 2', 'Huawei', 'Dorado', 3, '', '', 1);
INSERT INTO `displays` VALUES (6, 'Y5 2018', 'Huawei', 'Negro', 2, '', '', 1);
INSERT INTO `displays` VALUES (7, 'Y5 2018', 'Huawei', 'Blanco', 1, '', '', 1);
INSERT INTO `displays` VALUES (8, 'Y5 2018', 'Huawei', 'Dorado', 1, '', '', 1);
INSERT INTO `displays` VALUES (9, 'Y6 2', 'Huawei', 'Blanco', 1, '', '', 2);
INSERT INTO `displays` VALUES (10, 'Y6 2', 'Huawei', 'Negro', 3, '', '', 2);
INSERT INTO `displays` VALUES (11, 'Y6 2017', 'Huawei', 'Dorado', 1, '', '', 2);
INSERT INTO `displays` VALUES (12, 'Y6 2018', 'Huawei', 'Negro', 6, '', '', 2);
INSERT INTO `displays` VALUES (13, 'Y6 2018', 'Huawei', 'Blanco', 1, '', '', 2);
INSERT INTO `displays` VALUES (14, 'Y6 2018', 'Huawei', 'Dorado', 2, '', '', 2);
INSERT INTO `displays` VALUES (15, 'Y6 2019', 'Huawei', 'Negro', 0, '', '', 2);
INSERT INTO `displays` VALUES (16, 'Y7 2018', 'Huawei', 'Negro', 5, '', '', 3);
INSERT INTO `displays` VALUES (17, 'Y7 2019', 'Huawei', 'Negro', 2, '', '', 3);
INSERT INTO `displays` VALUES (18, 'Y9 2018', 'Huawei', 'Negro', 4, '', '', 3);
INSERT INTO `displays` VALUES (19, 'Y9 2018', 'Huawei', 'Dorado', 2, '', '', 3);
INSERT INTO `displays` VALUES (20, 'Y9 2018', 'Huawei', 'Blanco', 1, '', '', 3);
INSERT INTO `displays` VALUES (21, 'Y9 2019', 'Huawei', 'Negro', 14, '', '', 3);
INSERT INTO `displays` VALUES (22, 'Honor 8X', 'Huawei', 'Negro', 1, '', '', 3);
INSERT INTO `displays` VALUES (23, 'P8 Lite', 'Huawei', 'Negro', 5, '', '', 4);
INSERT INTO `displays` VALUES (24, 'P8 Lite', 'Huawei', 'Dorado', 7, '', '', 4);
INSERT INTO `displays` VALUES (25, 'P9 Lite 2017', 'Huawei', 'Negro', 4, '', '', 4);
INSERT INTO `displays` VALUES (26, 'P9 Lite 2016', 'Huawei', 'Blanco', 1, '', '', 4);
INSERT INTO `displays` VALUES (27, 'P9 Lite 2016', 'Huawei', 'Negro', 1, '', '', 4);
INSERT INTO `displays` VALUES (28, 'P9 Lite 2019', 'Huawei', 'Dorado', 1, '', '', 4);
INSERT INTO `displays` VALUES (29, 'P10 Lite', 'Huawei', 'Negro', 5, '', '', 5);
INSERT INTO `displays` VALUES (30, 'P10 Lite Selfie', 'Huawei', 'Negro', 3, '', '', 5);
INSERT INTO `displays` VALUES (31, 'P20 Lite', 'Huawei', 'Negro', 14, '', '', 5);
INSERT INTO `displays` VALUES (32, 'P30 Lite', 'Huawei', 'Negro', 12, '', '', 5);
INSERT INTO `displays` VALUES (33, 'Mate 9 Lite', 'Huawei', 'Negro', 1, '', '', 6);
INSERT INTO `displays` VALUES (34, 'Mate 10 Lite', 'Huawei', 'Negro', 11, '', '', 6);
INSERT INTO `displays` VALUES (35, 'Mate 10 Lite', 'Huawei', 'Dorado', 2, '', '', 6);
INSERT INTO `displays` VALUES (36, 'Mate 10 Lite', 'Huawei', 'Blanco', 1, '', '', 6);
INSERT INTO `displays` VALUES (37, 'Mate 20 Lite', 'Huawei', 'Negro', 13, '', '', 7);
INSERT INTO `displays` VALUES (38, 'P Smart 2019', 'Huawei', 'Negro', 5, '', '', 7);
INSERT INTO `displays` VALUES (39, 'P Smart 2018', 'Huawei', 'Negro', 2, '', '', 7);
INSERT INTO `displays` VALUES (40, 'Y5 Pro', 'Huawei', 'Negro', 3, '', '', 8);
INSERT INTO `displays` VALUES (41, 'GR 3', 'Huawei', 'Blanco', 2, '', '', 8);
INSERT INTO `displays` VALUES (42, 'G Elite Plus', 'Huawei', 'Dorado', 2, '', '', 8);
INSERT INTO `displays` VALUES (43, 'G Elite Plus', 'Huawei', 'Negro', 1, '', '', 8);
INSERT INTO `displays` VALUES (44, 'G X8', 'Huawei', 'Negro', 1, '', '', 8);
INSERT INTO `displays` VALUES (45, 'G5', 'Motorola', 'Negro', 7, '', '', 9);
INSERT INTO `displays` VALUES (46, 'G5', 'Motorola', 'Dorado', 2, '', '', 9);
INSERT INTO `displays` VALUES (47, 'G7', 'Huawei', 'Negro', 1, '', '', 9);
INSERT INTO `displays` VALUES (48, 'G7', 'Huawei', 'Blanco', 1, '', '', 9);
INSERT INTO `displays` VALUES (49, 'E6 Plus', 'Motorola', 'Negro', 2, '', '', 9);
INSERT INTO `displays` VALUES (50, 'Nova 5T', 'Huawei', 'Negro', 1, '', '', 9);
INSERT INTO `displays` VALUES (51, 'Honor 8A', 'Huawei', 'Negro', 1, '', '', 9);
INSERT INTO `displays` VALUES (52, 'GX 8', 'Huawei', 'Blanco', 1, '', '', 9);
INSERT INTO `displays` VALUES (53, 'GX 8', 'Huawei', 'Negro', 3, '', '', 9);
INSERT INTO `displays` VALUES (54, 'X Play', 'Motorola', 'Negro', 10, '', '', 10);
INSERT INTO `displays` VALUES (55, 'E4 Plus', 'Motorola', 'Negro', 5, '', '', 10);
INSERT INTO `displays` VALUES (56, 'E5 Play Go', 'Motorola', 'Negro', 1, '', '', 11);
INSERT INTO `displays` VALUES (57, 'E5 Play Go', 'Motorola', 'Dorado', 1, '', '', 11);
INSERT INTO `displays` VALUES (58, 'X4', 'Motorola', 'Azul', 1, '', '', 11);
INSERT INTO `displays` VALUES (59, 'X4', 'Motorola', 'Negro', 4, '', '', 11);
INSERT INTO `displays` VALUES (60, 'X Play', 'Motorola', 'Blanco', 8, '', '', 11);
INSERT INTO `displays` VALUES (61, 'G6 Play', 'Motorola', 'Dorado', 9, '', '', 12);
INSERT INTO `displays` VALUES (62, 'G6 Play', 'Motorola', 'Negro', 12, '', '', 12);
INSERT INTO `displays` VALUES (63, 'G6 Play', 'Motorola', 'Negro', 1, '', '', 12);
INSERT INTO `displays` VALUES (64, 'G4 Plus', 'Motorola', 'Negro', 2, '', '', 12);
INSERT INTO `displays` VALUES (65, 'E4 Plus', 'Motorola', 'Negro', 2, '', '', 12);
INSERT INTO `displays` VALUES (66, 'E4 Plus', 'Motorola', 'Dorado', 1, '', '', 12);
INSERT INTO `displays` VALUES (67, 'X Style', 'Motorola', 'Blanco', 1, '', '', 12);
INSERT INTO `displays` VALUES (68, 'G1', 'Motorola', 'Negro', 15, '', '', 13);
INSERT INTO `displays` VALUES (69, 'G4 Play', 'Motorola', 'Negro', 7, '', '', 14);
INSERT INTO `displays` VALUES (70, 'G4', 'Motorola', 'Negro', 2, '', '', 14);
INSERT INTO `displays` VALUES (71, 'G5 Plus', 'Motorola', 'Negro', 9, '', '', 15);
INSERT INTO `displays` VALUES (72, 'G5 Plus', 'Motorola', 'Dorado', 7, '', '', 15);
INSERT INTO `displays` VALUES (73, 'G3', 'Motorola', 'Negro', 13, '', '', 15);
INSERT INTO `displays` VALUES (74, 'G3', 'Motorola', 'Blanco', 1, '', '', 15);
INSERT INTO `displays` VALUES (75, 'C Plus', 'Motorola', 'Negro', 2, '', '', 16);
INSERT INTO `displays` VALUES (76, 'C Plus', 'Motorola', 'Dorado', 3, '', '', 16);
INSERT INTO `displays` VALUES (77, 'Z2 Play', 'Motorola', 'Negro', 1, '', '', 16);
INSERT INTO `displays` VALUES (78, 'E2', 'Motorola', 'Negro', 12, '', '', 16);
INSERT INTO `displays` VALUES (79, 'G2', 'Motorola', 'Negro', 4, '', '', 16);
INSERT INTO `displays` VALUES (80, 'G6 Plus', 'Motorola', 'Negro', 10, '', '', 17);
INSERT INTO `displays` VALUES (81, 'G6 Plus', 'Motorola', 'Azul', 1, '', '', 17);
INSERT INTO `displays` VALUES (82, 'G6 Plus', 'Motorola', 'Dorado', 4, '', '', 17);
INSERT INTO `displays` VALUES (83, 'G7 Play', 'Motorola', 'Negro', 3, '', '', 17);
INSERT INTO `displays` VALUES (84, 'G7 Plus', 'Motorola', 'Negro', 2, '', '', 17);
INSERT INTO `displays` VALUES (85, 'G7 Power', 'Motorola', 'Negro', 3, '', '', 17);
INSERT INTO `displays` VALUES (86, 'E5 Plus', 'Motorola', 'Dorado', 0, '', '', 17);
INSERT INTO `displays` VALUES (87, 'G8', 'Motorola', 'Negro', 1, '', '', 17);
INSERT INTO `displays` VALUES (88, 'E6s E6i', 'Motorola', 'Negro', 1, '', '', 17);
INSERT INTO `displays` VALUES (89, 'One Zoom', 'Motorola', 'Negro', 2, '', '', 17);
INSERT INTO `displays` VALUES (90, 'One', 'Motorola', 'Negro', 13, '', '', 18);
INSERT INTO `displays` VALUES (91, 'G8 Play', 'Motorola', 'Negro', 3, '', '', 18);
INSERT INTO `displays` VALUES (92, 'G8 Power Lite', 'Motorola', 'Negro', 2, '', '', 18);
INSERT INTO `displays` VALUES (93, 'G8 Plus', 'Motorola', 'Negro', 2, '', '', 18);
INSERT INTO `displays` VALUES (94, 'G9 Power', 'Motorola', 'Negro', 2, '', '', 18);
INSERT INTO `displays` VALUES (95, 'G9 Play', 'Motorola', 'Negro', 1, '', '', 18);
INSERT INTO `displays` VALUES (96, 'G9 Plus', 'Motorola', 'Negro', 5, '', '', 18);
INSERT INTO `displays` VALUES (97, 'iPhone 6s', 'Apple', 'Blanco', 1, '', '', 19);
INSERT INTO `displays` VALUES (98, 'iPhone 6s', 'Apple', 'Negro', 7, '', '', 19);
INSERT INTO `displays` VALUES (99, 'iPhone 6', 'Apple', 'Negro', 1, '', '', 19);
INSERT INTO `displays` VALUES (100, 'iPhone 6', 'Apple', 'Blanco', 4, '', '', 19);
INSERT INTO `displays` VALUES (101, 'iPhone 4', 'Apple', 'Blanco', 1, '', '', 19);
INSERT INTO `displays` VALUES (102, 'iPhone 6 Plus', 'Apple', 'Negro', 2, '', '', 19);
INSERT INTO `displays` VALUES (103, 'iPhone 6 Plus', 'Apple', 'Blanco', 1, '', '', 19);
INSERT INTO `displays` VALUES (104, 'iPhone 8', 'Apple', 'Blanco', 0, '', '', 19);
INSERT INTO `displays` VALUES (105, 'iPhone 7', 'Apple', 'Negro', 2, '', '', 19);
INSERT INTO `displays` VALUES (106, 'iPhone 7', 'Apple', 'Blanco', 1, '', '', 19);
INSERT INTO `displays` VALUES (107, 'iPhone 7 Plus', 'Apple', 'Negro', 1, '', '', 19);
INSERT INTO `displays` VALUES (108, 'iPhone 7 Plus', 'Apple', 'Blanco', 1, '', '', 19);
INSERT INTO `displays` VALUES (109, 'iPhone 7 Plus', 'Apple', 'Blanco', 2, '', '', 20);
INSERT INTO `displays` VALUES (110, 'iPhone 8', 'Apple', 'Blanco', 1, '', '', 20);
INSERT INTO `displays` VALUES (111, 'iPhone 5s', 'Apple', 'Blanco', 4, '', '', 20);
INSERT INTO `displays` VALUES (112, 'iPhone 5', 'Apple', 'Negro', 2, '', '', 20);
INSERT INTO `displays` VALUES (113, 'iPhone 8', 'Apple', 'Negro', 0, '', '', 20);
INSERT INTO `displays` VALUES (114, 'iPhone 6', 'Apple', 'Negro', 2, '', '', 20);
INSERT INTO `displays` VALUES (115, 'iPhone 5c', 'Apple', 'Negro', 1, '', '', 20);
INSERT INTO `displays` VALUES (116, 'iPhone 7', 'Apple', 'Negro', 1, '', '', 20);
INSERT INTO `displays` VALUES (117, 'iPhone 8 Plus', 'Apple', 'Negro', 1, '', '', 20);
INSERT INTO `displays` VALUES (118, 'iPhone 5', 'Apple', 'Negro', 1, '', '', 20);
INSERT INTO `displays` VALUES (119, 'K8', 'LG', 'Negro', 9, '', '', 21);
INSERT INTO `displays` VALUES (120, 'K7', 'LG', 'Negro', 6, '', '', 21);
INSERT INTO `displays` VALUES (121, '5012', 'LG', 'Negro', 2, '', '', 21);
INSERT INTO `displays` VALUES (122, 'X Power', 'LG', 'Negro', 6, '', '', 21);
INSERT INTO `displays` VALUES (123, 'X Power 2', 'LG', 'Negro', 3, '', '', 21);
INSERT INTO `displays` VALUES (124, 'X Cam', 'LG', 'Blanco', 1, '', '', 22);
INSERT INTO `displays` VALUES (125, 'X Cam', 'LG', 'Azul', 2, '', '', 22);
INSERT INTO `displays` VALUES (126, 'X Cam', 'LG', 'Plateado', 3, '', '', 22);
INSERT INTO `displays` VALUES (127, 'Style 2', 'LG', 'Negro', 1, '', '', 22);
INSERT INTO `displays` VALUES (128, 'Q7', 'LG', 'Negro', 3, '', '', 22);
INSERT INTO `displays` VALUES (129, 'Q7', 'LG', 'Blanco', 1, '', '', 22);
INSERT INTO `displays` VALUES (130, 'Zone', 'LG', 'Dorado', 4, '', '', 22);
INSERT INTO `displays` VALUES (131, 'Zone', 'LG', 'Blanco', 6, '', '', 22);
INSERT INTO `displays` VALUES (132, 'Zone', 'LG', 'Gris', 1, '', '', 22);
INSERT INTO `displays` VALUES (133, 'G5', 'Motorola', 'Negro', 3, '', '', 23);
INSERT INTO `displays` VALUES (134, 'Z3', 'Motorola', 'Negro', 1, '', '', 23);
INSERT INTO `displays` VALUES (135, 'G8 Power', 'Motorola', 'Negro', 17, '', '', 23);
INSERT INTO `displays` VALUES (136, 'E4 Plus', 'Motorola', 'Negro', 1, '', '', 23);
INSERT INTO `displays` VALUES (137, 'E4 Plus', 'Motorola', 'Dorado', 1, '', '', 23);
INSERT INTO `displays` VALUES (138, 'E4', 'Motorola', 'Dorado', 1, '', '', 23);
INSERT INTO `displays` VALUES (139, 'E4', 'Motorola', 'Negro', 1, '', '', 23);
INSERT INTO `displays` VALUES (140, 'X Play', 'Motorola', 'Negro', 2, '', '', 23);
INSERT INTO `displays` VALUES (141, 'C Plus', 'Motorola', 'Negro', 2, '', '', 24);
INSERT INTO `displays` VALUES (142, 'C Plus', 'Motorola', 'Dorado', 1, '', '', 24);
INSERT INTO `displays` VALUES (143, 'G1', 'Motorola', 'Negro', 1, '', '', 24);
INSERT INTO `displays` VALUES (144, 'G4', 'Motorola', 'Negro', 1, '', '', 24);
INSERT INTO `displays` VALUES (145, 'X 240', 'LG', 'Negro', 1, '', '', 24);
INSERT INTO `displays` VALUES (146, '55', 'LG', 'Negro', 2, '', '', 24);
INSERT INTO `displays` VALUES (147, 'K3 2016', 'LG', 'Negro', 4, '', '', 24);
INSERT INTO `displays` VALUES (148, 'León', 'LG', 'Negro', 1, '', '', 24);
INSERT INTO `displays` VALUES (149, 'Q6 Alfa', 'LG', 'Negro', 1, '', '', 24);
INSERT INTO `displays` VALUES (150, 'G4 Stylus', 'LG', 'Negro', 1, '', '', 24);
INSERT INTO `displays` VALUES (151, 'G5', 'LG', 'Negro', 1, '', '', 24);
INSERT INTO `displays` VALUES (152, 'K9', 'LG', 'Negro', 1, '', '', 24);
INSERT INTO `displays` VALUES (153, 'K20 Plus', 'LG', 'Negro', 1, '', '', 24);
INSERT INTO `displays` VALUES (154, 'X Max', 'lg', 'Negro', 1, '', '', 24);
INSERT INTO `displays` VALUES (155, 'X Style', 'LG', 'Negro', 2, '', '', 24);
INSERT INTO `displays` VALUES (156, 'X Screen K200', 'LG', 'Negro', 2, '', '', 24);
INSERT INTO `displays` VALUES (157, 'G4 Stylus', 'LG', 'Negro', 3, '', '', 24);
INSERT INTO `displays` VALUES (158, '4040', 'M4', 'Negro', 2, '', '', 25);
INSERT INTO `displays` VALUES (159, '4045', 'M4', 'Negro', 3, '', '', 25);
INSERT INTO `displays` VALUES (160, '4450', 'M4', 'Negro', 2, '', '', 25);
INSERT INTO `displays` VALUES (161, '4452', 'M4', 'Negro', 1, '', '', 25);
INSERT INTO `displays` VALUES (162, '4453', 'M4', 'Negro', 3, '', '', 25);
INSERT INTO `displays` VALUES (163, '4453R', 'M4', 'Negro', 1, '', '', 25);
INSERT INTO `displays` VALUES (164, '4453R 2', 'M4', 'Negro', 1, '', '', 25);
INSERT INTO `displays` VALUES (165, '4455', 'M4', 'Negro', 7, '', '', 25);
INSERT INTO `displays` VALUES (166, '4456', 'M4', 'Negro', 4, '', '', 25);
INSERT INTO `displays` VALUES (167, '4458', 'M4', 'Negro', 1, '', '', 25);
INSERT INTO `displays` VALUES (168, '4488', 'M4', 'Negro', 3, '', '', 25);
INSERT INTO `displays` VALUES (169, '5011', 'M4', 'Negro', 3, '', '', 25);
INSERT INTO `displays` VALUES (170, 'Q10', 'LG', 'Negro', 4, '', '', 26);
INSERT INTO `displays` VALUES (171, 'Q10', 'LG', 'Blanco', 6, '', '', 26);
INSERT INTO `displays` VALUES (172, 'Q10', 'LG', 'Dorado', 1, '', '', 26);
INSERT INTO `displays` VALUES (173, 'Stylus 2', 'LG', 'Negro', 5, '', '', 26);
INSERT INTO `displays` VALUES (174, 'K10', 'LG', 'Negro', 1, '', '', 26);
INSERT INTO `displays` VALUES (175, 'K10 2017', 'LG', 'Negro', 4, '', '', 26);
INSERT INTO `displays` VALUES (176, 'K4 2016', 'LG', 'Negro', 2, '', '', 26);
INSERT INTO `displays` VALUES (177, 'K4 2017', 'LG', 'Negro', 2, '', '', 26);
INSERT INTO `displays` VALUES (178, 'K6', 'LG', 'Negro', 1, '', '', 26);
INSERT INTO `displays` VALUES (179, 'J7 Neo', 'Samung', 'Gris', 6, '', '', 27);
INSERT INTO `displays` VALUES (180, 'J7 Neo', 'Samung', 'Negro', 5, '', '', 27);
INSERT INTO `displays` VALUES (181, 'J7 Neo', 'Samsung', 'Dorado', 7, '', '', 27);
INSERT INTO `displays` VALUES (182, 'J7', 'Samsung', 'Blanco', 9, '', '', 27);
INSERT INTO `displays` VALUES (183, 'J7', 'Samsung', 'Negro', 2, '', '', 27);
INSERT INTO `displays` VALUES (184, 'J7', 'Samsung', 'Dorado', 10, '', '', 28);
INSERT INTO `displays` VALUES (185, 'J7', 'Samsung', 'Gris', 14, '', '', 28);
INSERT INTO `displays` VALUES (186, 'A10s', 'Samsung', 'Negro', 2, '', '', 29);
INSERT INTO `displays` VALUES (187, 'A10', 'Samsung', 'Negro', 2, '', '', 29);
INSERT INTO `displays` VALUES (188, 'A11', 'Samsung', 'Negro', 3, '', '', 29);
INSERT INTO `displays` VALUES (189, 'A20s', 'Samsung', 'Negro', 1, '', '', 29);
INSERT INTO `displays` VALUES (190, 'A21s', 'Samsung', 'Negro', 3, '', '', 29);
INSERT INTO `displays` VALUES (191, 'A30s', 'Samsung', 'Negro', 8, '', '', 29);
INSERT INTO `displays` VALUES (192, 'A30', 'Samsung', 'Negro', 5, '', '', 29);
INSERT INTO `displays` VALUES (193, 'A32', 'Samsung', 'Negro', 1, '', '', 29);
INSERT INTO `displays` VALUES (194, 'A51', 'Samsung', 'Negro', 3, '', '', 29);
INSERT INTO `displays` VALUES (195, 'A70', 'Samsung', 'Negro', 1, '', '', 29);
INSERT INTO `displays` VALUES (196, 'A3 2015', 'Samsung', 'Negro', 2, '', '', 30);
INSERT INTO `displays` VALUES (197, 'A3 2015', 'Samsung', 'Blanco', 1, '', '', 30);
INSERT INTO `displays` VALUES (198, 'A3 2015', 'Samsung', 'Gris', 1, '', '', 30);
INSERT INTO `displays` VALUES (199, 'A3 2016', 'Samsung', 'Negro', 1, '', '', 30);
INSERT INTO `displays` VALUES (200, 'A3', 'Samsung', 'Blanco', 1, '', '', 30);
INSERT INTO `displays` VALUES (201, 'J8', 'Samsung', 'Negro', 9, '', '', 30);
INSERT INTO `displays` VALUES (202, 'J320', 'Samsung', 'Dorado', 5, '', '', 30);
INSERT INTO `displays` VALUES (203, 'J320', 'Samsung', 'Gris', 4, '', '', 30);
INSERT INTO `displays` VALUES (204, 'J320', 'Samsung', 'Azul', 1, '', '', 30);
INSERT INTO `displays` VALUES (205, 'J320', 'Samsung', 'Blanco', 3, '', '', 30);
INSERT INTO `displays` VALUES (206, 'A01 Core', 'Samsung', 'Negro', 1, '', '', 30);
INSERT INTO `displays` VALUES (207, 'A5 2015', 'Samsung', 'Gris', 1, '', '', 30);
INSERT INTO `displays` VALUES (208, 'A5 2015', 'Samsung', 'Blanco', 1, '', '', 30);
INSERT INTO `displays` VALUES (209, 'A5 2015', 'Samsung', 'Dorado', 2, '', '', 30);
INSERT INTO `displays` VALUES (210, 'A6 2018', 'Samsung', 'Negro', 2, '', '', 30);
INSERT INTO `displays` VALUES (211, 'A6 2018', 'Samsung', 'Dorado', 1, '', '', 30);
INSERT INTO `displays` VALUES (212, 'A5', 'Samsung', 'Blanco', 3, '', '', 31);
INSERT INTO `displays` VALUES (213, 'J7 Metal', 'Samsung', 'Blanco', 1, '', '', 31);
INSERT INTO `displays` VALUES (214, 'J7 Perx Americano', 'Samsung', 'Negro', 1, '', '', 31);
INSERT INTO `displays` VALUES (215, 'J7 Prime', 'Samsung', 'Negro', 5, '', '', 31);
INSERT INTO `displays` VALUES (216, 'J7 Prime', 'Samsung', 'Dorado', 2, '', '', 31);
INSERT INTO `displays` VALUES (217, 'J7 Prime', 'Samsung', 'Blanco', 2, '', '', 31);
INSERT INTO `displays` VALUES (218, 'A7 2017', 'Samsung', 'Negro', 1, '', '', 31);
INSERT INTO `displays` VALUES (219, 'A7 2018', 'Samsung', 'Gris', 1, '', '', 31);
INSERT INTO `displays` VALUES (220, 'J710 J7 2016', 'Samsung', 'Negro', 1, '', '', 31);
INSERT INTO `displays` VALUES (221, 'J710 J7 2016', 'Samsung', 'Dorado', 1, '', '', 31);
INSERT INTO `displays` VALUES (222, 'J7 Pro', 'Samsung', 'Dorado', 9, '', '', 31);
INSERT INTO `displays` VALUES (223, 'J7 Pro', 'Samsung', 'Negro', 8, '', '', 31);
INSERT INTO `displays` VALUES (224, 'J4', 'Samsung', 'Negro', 8, '', '', 32);
INSERT INTO `displays` VALUES (225, 'J4', 'Samsung', 'Azul', 7, '', '', 32);
INSERT INTO `displays` VALUES (226, 'J120', 'Samsung', 'Azul', 2, '', '', 32);
INSERT INTO `displays` VALUES (227, 'J120', 'Samsung', 'Dorado', 1, '', '', 32);
INSERT INTO `displays` VALUES (228, 'J120', 'Samsung', 'Gris', 2, '', '', 32);
INSERT INTO `displays` VALUES (229, 'J2 Pro', 'Samsung', 'Gris', 1, '', '', 32);
INSERT INTO `displays` VALUES (230, 'J2 Pro', 'Samsung', 'Azul', 1, '', '', 32);
INSERT INTO `displays` VALUES (231, 'J2 Pro', 'Samsung', 'Dorado', 1, '', '', 32);
INSERT INTO `displays` VALUES (232, 'J2 Pro', 'Samsung', 'Dorado', 1, '', '', 32);
INSERT INTO `displays` VALUES (233, 'Idol 2 Mini 6036', 'Alcatel', 'Negro', 1, '', '', 32);
INSERT INTO `displays` VALUES (234, 'Idol 2 Mini 6036', 'Alcatel', 'Blanco', 1, '', '', 32);
INSERT INTO `displays` VALUES (235, 'Pop 3.5.5', 'Alcatel', 'Negro', 1, '', '', 32);
INSERT INTO `displays` VALUES (236, 'J8', 'Samsung', 'Negro', 1, '', '', 32);
INSERT INTO `displays` VALUES (237, 'Aqua', 'M4', 'Negro', 2, '', '', 32);
INSERT INTO `displays` VALUES (238, 'Aqua', 'M4', 'Blanco', 1, '', '', 33);
INSERT INTO `displays` VALUES (239, '4047', 'Alcatel', 'Negro', 1, '', '', 33);
INSERT INTO `displays` VALUES (240, '6037', 'Alcatel', 'Blanco', 1, '', '', 33);
INSERT INTO `displays` VALUES (241, '6037', 'Alcatel', 'Negro', 1, '', '', 33);
INSERT INTO `displays` VALUES (242, '6039', 'Alcatel', 'Negro', 2, '', '', 33);
INSERT INTO `displays` VALUES (243, '5026', 'Alcatel', 'Negro', 1, '', '', 33);
INSERT INTO `displays` VALUES (244, '4027', 'Alcatel', 'Negro', 1, '', '', 33);
INSERT INTO `displays` VALUES (245, '5012', 'Alcatel', 'Negro', 1, '', '', 33);
INSERT INTO `displays` VALUES (246, '5080', 'Alcatel', 'Negro', 2, '', '', 33);
INSERT INTO `displays` VALUES (247, '5086', 'Alcatel', 'Negro', 1, '', '', 33);
INSERT INTO `displays` VALUES (248, '5095', 'Alcatel', 'Negro', 2, '', '', 33);
INSERT INTO `displays` VALUES (249, '6045', 'Alcatel', 'Negro', 4, '', '', 33);
INSERT INTO `displays` VALUES (250, '7048', 'Alcatel', 'Negro', 1, '', '', 33);
INSERT INTO `displays` VALUES (251, '8050', 'Alcatel', 'Negro', 4, '', '', 33);
INSERT INTO `displays` VALUES (252, '5025', 'Alcatel', 'Negro', 1, '', '', 33);
INSERT INTO `displays` VALUES (253, '5056', 'Alcatel', 'Negro', 3, '', '', 33);
INSERT INTO `displays` VALUES (254, '1s', 'Alcatel', 'Negro', 1, '', '', 33);
INSERT INTO `displays` VALUES (255, 'Idol Alpha', 'Alcatel', 'Negro', 1, '', '', 33);
INSERT INTO `displays` VALUES (256, 'X A1 Ultra', 'Sony', 'Negro', 2, '', '', 34);
INSERT INTO `displays` VALUES (257, 'X A1 Ultra', 'Sony', 'Gris', 1, '', '', 34);
INSERT INTO `displays` VALUES (258, 'X A1 Ultra', 'Sony', 'Blanco', 2, '', '', 34);
INSERT INTO `displays` VALUES (259, 'X A Ultra', 'Sony', 'Negro', 3, '', '', 34);
INSERT INTO `displays` VALUES (260, 'X A', 'Sony', 'Negro', 1, '', '', 34);
INSERT INTO `displays` VALUES (261, 'X A', 'Sony', 'Blanco', 3, '', '', 34);
INSERT INTO `displays` VALUES (262, 'X A', 'Sony', 'Rosa', 1, '', '', 34);
INSERT INTO `displays` VALUES (263, 'X A', 'Sony', 'Dorado', 3, '', '', 34);
INSERT INTO `displays` VALUES (264, 'T2 Ultra', 'Sony', 'Negro', 1, '', '', 34);
INSERT INTO `displays` VALUES (265, 'T2 Ultra', 'Sony', 'Blanco', 3, '', '', 34);
INSERT INTO `displays` VALUES (266, 'L1', 'Sony', 'Blanco', 1, '', '', 34);
INSERT INTO `displays` VALUES (267, 'L1', 'Sony', 'Negro', 1, '', '', 34);
INSERT INTO `displays` VALUES (268, 'X A Ultra 2', 'Sony', 'Gris', 1, '', '', 34);
INSERT INTO `displays` VALUES (269, 'Xperia E5', 'Sony', 'Blanco', 1, '', '', 35);
INSERT INTO `displays` VALUES (270, 'Xperia Z1', 'Sony', 'Negro', 1, '', '', 35);
INSERT INTO `displays` VALUES (271, 'Z1', 'Sony', 'Negro', 1, '', '', 35);
INSERT INTO `displays` VALUES (272, 'Z1', 'Sony', 'Blanco', 1, '', '', 35);
INSERT INTO `displays` VALUES (273, 'A12', 'Oppo / Realme', 'Negro', 1, '', '', 35);
INSERT INTO `displays` VALUES (274, 'A53 A54 C15 C3', 'Oppo / Realme', 'Negro', 1, '', '', 35);
INSERT INTO `displays` VALUES (275, 'A02', 'Samsung', 'Negro', 1, '', '', 35);
INSERT INTO `displays` VALUES (276, 'K5', 'Lenovo', 'Negro', 7, '', '', 35);
INSERT INTO `displays` VALUES (277, 'K6', 'Lenovo', 'Negro', 5, '', '', 35);
INSERT INTO `displays` VALUES (278, 'K4', 'Lenovo', 'Negro', 1, '', '', 35);
INSERT INTO `displays` VALUES (279, 'F24', 'Hisense', 'Negro', 3, '', '', 35);
INSERT INTO `displays` VALUES (280, 'F24', 'Hisense', 'Blanco', 2, '', '', 35);
INSERT INTO `displays` VALUES (281, 'F23', 'Hisense', 'Blanco', 1, '', '', 35);
INSERT INTO `displays` VALUES (282, 'F23', 'Hisense', 'Negro', 1, '', '', 35);
INSERT INTO `displays` VALUES (283, 'Desire 10 825', 'Lanix', 'Negro', 2, '', '', 36);
INSERT INTO `displays` VALUES (284, 'L1126', 'Lanix', 'Negro', 1, '', '', 36);
INSERT INTO `displays` VALUES (285, 'X710', 'Lanix', 'Negro', 1, '', '', 36);
INSERT INTO `displays` VALUES (286, '5', 'Nokia', 'Negro', 2, '', '', 36);
INSERT INTO `displays` VALUES (287, '6', 'Nokia', 'Negro', 2, '', '', 36);
INSERT INTO `displays` VALUES (288, 'V8 Mini', 'ZTE', 'Negro', 2, '', '', 36);
INSERT INTO `displays` VALUES (289, 'A602', 'ZTE', 'Negro', 2, '', '', 36);
INSERT INTO `displays` VALUES (290, 'V6', 'ZTE', 'Negro', 2, '', '', 36);
INSERT INTO `displays` VALUES (291, 'V8', 'ZTE', 'Negro', 1, '', '', 36);
INSERT INTO `displays` VALUES (292, 'V6 Max', 'ZTE', 'Negro', 1, '', '', 36);
INSERT INTO `displays` VALUES (293, 'V6 Plus', 'ZTE', 'Negro', 4, '', '', 36);
INSERT INTO `displays` VALUES (294, 'V6 Plus', 'ZTE', 'Blanco', 3, '', '', 36);
INSERT INTO `displays` VALUES (295, 'V7', 'ZTE', 'Negro', 2, '', '', 36);
INSERT INTO `displays` VALUES (296, 'Blade A510', 'ZTE', 'Negro', 4, '', '', 36);
INSERT INTO `displays` VALUES (297, 'A5 2020 A7 2020', 'ZTE', 'Negro', 1, '', '', 36);
INSERT INTO `displays` VALUES (298, 'A6 Max Blade', 'ZTE', 'Blanco', 1, '', '', 36);
INSERT INTO `displays` VALUES (299, 'E Smart Ultra Z', 'ZTE', 'Negro', 1, '', '', 36);
INSERT INTO `displays` VALUES (300, 'A520', 'ZTE', 'Negro', 1, '', '', 36);
INSERT INTO `displays` VALUES (301, 'Blade A530', 'ZTE', 'Negro', 1, '', '', 36);
INSERT INTO `displays` VALUES (302, '610c', 'ZTE', 'Negro', 1, '', '', 36);
INSERT INTO `displays` VALUES (303, 'L3 Plus', 'ZTE', 'Negro', 1, '', '', 36);
INSERT INTO `displays` VALUES (304, 'V Smart', 'ZTE', 'Negro', 1, '', '', 36);
INSERT INTO `displays` VALUES (305, 'A5 2015', 'ZTE', 'Negro', 1, '', '', 37);
INSERT INTO `displays` VALUES (306, 'J2', 'Samsung', 'Dorado', 1, '', '', 37);
INSERT INTO `displays` VALUES (307, 'A6 Plus', 'Samsung', 'Negro', 1, '', '', 37);
INSERT INTO `displays` VALUES (308, 'J5', 'Samsung', 'Azul', 1, '', '', 37);
INSERT INTO `displays` VALUES (309, 'J5', 'Samsung', 'Dorado', 1, '', '', 37);
INSERT INTO `displays` VALUES (310, 'J5 2016', 'Samsung', 'Negro', 1, '', '', 37);
INSERT INTO `displays` VALUES (311, 'J6 2018', 'Samsung', 'Negro', 1, '', '', 37);
INSERT INTO `displays` VALUES (312, 'J5 Prime', 'Samsung', 'Blanco', 0, '', '', 37);
INSERT INTO `displays` VALUES (313, 'J5 Pro', 'Samsung', 'Negro', 2, '', '', 37);
INSERT INTO `displays` VALUES (314, 'J701', 'Samsung', 'Blanco', 1, '', '', 37);
INSERT INTO `displays` VALUES (315, 'J7 2016', 'Samsung', 'Negro', 1, '', '', 37);
INSERT INTO `displays` VALUES (316, 'J4', 'Samsung', 'Negro', 1, '', '', 37);
INSERT INTO `displays` VALUES (317, 'J6 2018', 'Samsung', 'Dorado', 1, '', '', 37);
INSERT INTO `displays` VALUES (318, 'A12', 'Samsung', 'Negro', 2, '', '', 37);
INSERT INTO `displays` VALUES (319, 'A52', 'Samsung', 'Negro', 1, '', '', 29);
INSERT INTO `displays` VALUES (320, 'A50', 'Samsung', 'Negro', 1, '', '', 29);
INSERT INTO `displays` VALUES (321, 'Y9s', 'Huawei', 'Negro', 2, '', '', 3);
INSERT INTO `displays` VALUES (322, 'A03s', 'Samsung', 'Negro', 1, '', '', 37);
INSERT INTO `displays` VALUES (323, 'Y5 2019', 'Huawei', 'Negro', 1, '', '', 1);
INSERT INTO `displays` VALUES (324, 'Super Azon', '12', 'Negro', 33, 'AAA', '2', 70);
INSERT INTO `displays` VALUES (325, 'modelito', 'Lenovo', 'Negro', 56, 'AAA', '', 70);
INSERT INTO `displays` VALUES (326, 'A04', 'Samsung', 'Negro', 1, '', '', 37);
INSERT INTO `displays` VALUES (327, 'iPhone XR', 'Apple', 'Negro', 1, '', '', 20);
INSERT INTO `displays` VALUES (328, 'G20', 'Motorola', 'Negro', 1, '', '', 18);

-- ----------------------------
-- Table structure for operaciones
-- ----------------------------
DROP TABLE IF EXISTS `operaciones`;
CREATE TABLE `operaciones`  (
  `id_operación` int NOT NULL AUTO_INCREMENT,
  `acción_operación` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `descripción_operación` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NULL DEFAULT NULL,
  `autor_operación` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `fecha_operación` timestamp NOT NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_operación`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 116 CHARACTER SET = utf8mb3 COLLATE = utf8mb3_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of operaciones
-- ----------------------------
INSERT INTO `operaciones` VALUES (1, 'Recepción de equipo', 'G7 Play para cambiar display', 'Dante', '0000-00-00 00:00:00');
INSERT INTO `operaciones` VALUES (2, 'SALUDO', 'HOLA', 'DANTE', '2022-12-29 23:43:29');
INSERT INTO `operaciones` VALUES (3, 'Prueba de script', 'Estoy insertando operaciones de prueba', '', '2022-12-30 14:12:43');
INSERT INTO `operaciones` VALUES (4, 'Prueba de script', 'Estoy insertando operaciones de prueba', '', '2022-12-30 14:13:11');
INSERT INTO `operaciones` VALUES (5, 'Prueba de script', 'Estoy insertando operaciones de prueba', '', '2022-12-30 14:13:22');
INSERT INTO `operaciones` VALUES (6, 'Alta', 'Baja de Huawei - P Smart 2019 (display); color nA.', '', '2022-12-30 16:17:41');
INSERT INTO `operaciones` VALUES (7, 'Alta', 'Baja de Huawei - P Smart 2019 (display); color nA.', '', '2022-12-30 16:17:42');
INSERT INTO `operaciones` VALUES (8, 'Alta', 'Baja de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2022-12-30 16:30:15');
INSERT INTO `operaciones` VALUES (9, 'Alta', 'Baja de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2022-12-30 16:30:28');
INSERT INTO `operaciones` VALUES (10, 'Alta', 'Baja de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2022-12-30 16:30:28');
INSERT INTO `operaciones` VALUES (11, 'Baja', 'Baja de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2022-12-30 16:36:16');
INSERT INTO `operaciones` VALUES (12, 'Baja', 'Baja de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2022-12-30 16:36:16');
INSERT INTO `operaciones` VALUES (13, 'Baja', 'Baja de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2022-12-30 16:36:17');
INSERT INTO `operaciones` VALUES (14, 'Baja', 'Baja de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2022-12-30 16:36:17');
INSERT INTO `operaciones` VALUES (15, 'Alta', 'Alta de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2022-12-30 16:36:18');
INSERT INTO `operaciones` VALUES (16, 'Alta', 'Alta de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2022-12-30 18:30:24');
INSERT INTO `operaciones` VALUES (17, 'Alta', 'Alta de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2022-12-30 18:30:25');
INSERT INTO `operaciones` VALUES (18, 'Alta', 'Alta de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2022-12-30 18:30:26');
INSERT INTO `operaciones` VALUES (19, 'Alta', 'Alta de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2022-12-30 18:30:26');
INSERT INTO `operaciones` VALUES (20, 'Alta', 'Alta de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2022-12-30 18:30:26');
INSERT INTO `operaciones` VALUES (21, 'Alta', 'Alta de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2022-12-30 18:30:26');
INSERT INTO `operaciones` VALUES (22, 'Baja', 'Baja de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2022-12-30 18:30:26');
INSERT INTO `operaciones` VALUES (23, 'Baja', 'Baja de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2022-12-30 18:30:26');
INSERT INTO `operaciones` VALUES (24, 'Baja', 'Baja de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2022-12-30 18:30:27');
INSERT INTO `operaciones` VALUES (25, 'Baja', 'Baja de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2022-12-30 18:30:27');
INSERT INTO `operaciones` VALUES (26, 'Alta', 'Alta de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2022-12-30 18:30:27');
INSERT INTO `operaciones` VALUES (27, 'Alta', 'Alta de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2022-12-30 18:30:27');
INSERT INTO `operaciones` VALUES (28, 'Baja', 'Baja de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2022-12-30 18:30:28');
INSERT INTO `operaciones` VALUES (29, 'Alta', 'Alta de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2022-12-30 18:30:29');
INSERT INTO `operaciones` VALUES (30, 'Baja', 'Baja de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2022-12-30 18:30:29');
INSERT INTO `operaciones` VALUES (31, 'Alta', 'Alta de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2022-12-30 18:30:30');
INSERT INTO `operaciones` VALUES (32, 'Baja', 'Baja de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2022-12-30 18:30:30');
INSERT INTO `operaciones` VALUES (33, 'Alta', 'Alta de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2022-12-30 18:30:30');
INSERT INTO `operaciones` VALUES (34, 'Baja', 'Baja de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2022-12-30 18:30:40');
INSERT INTO `operaciones` VALUES (35, 'Alta', 'Alta de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2022-12-30 18:30:40');
INSERT INTO `operaciones` VALUES (36, 'Baja', 'Baja de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2022-12-30 18:30:41');
INSERT INTO `operaciones` VALUES (37, 'Baja', 'Baja de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2022-12-30 18:30:44');
INSERT INTO `operaciones` VALUES (38, 'Baja', 'Baja de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2022-12-30 18:30:44');
INSERT INTO `operaciones` VALUES (39, 'Baja', 'Baja de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2022-12-30 18:30:44');
INSERT INTO `operaciones` VALUES (40, 'Alta', 'Alta de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2022-12-30 20:13:03');
INSERT INTO `operaciones` VALUES (41, 'Alta', 'Alta de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2022-12-30 20:13:03');
INSERT INTO `operaciones` VALUES (42, 'Alta', 'Alta de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2022-12-30 20:13:04');
INSERT INTO `operaciones` VALUES (43, 'Baja', 'Baja de Motorola - E5 Play Go (display); color dorado.', 'Luis Enrique', '2023-01-01 23:02:10');
INSERT INTO `operaciones` VALUES (44, 'Desarrollando', 'Función de búsqueda dinámica y filtrado instantáneos.', 'Dante', '2023-01-02 18:45:46');
INSERT INTO `operaciones` VALUES (45, '¡Listo!', 'La búsqueda dinámica funciona... ahora es posible hacer búsquedas en el inventario en tiempo real', 'Dante', '2023-01-03 00:00:34');
INSERT INTO `operaciones` VALUES (46, 'Desarrollando', 'Registro de reparaciones.', 'Dante', '2023-01-03 14:19:46');
INSERT INTO `operaciones` VALUES (47, 'Alta', 'Alta de Huawei - Y7 2018 (display); color negro.', 'Luis Enrique', '2023-01-03 18:33:51');
INSERT INTO `operaciones` VALUES (48, 'Alta', 'Alta de Huawei - Y7 2018 (display); color negro.', 'Luis Enrique', '2023-01-03 18:34:16');
INSERT INTO `operaciones` VALUES (49, 'Alta', 'Alta de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2023-01-03 23:53:36');
INSERT INTO `operaciones` VALUES (50, 'Baja', 'Baja de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2023-01-03 23:54:04');
INSERT INTO `operaciones` VALUES (51, 'Alta', 'Alta de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2023-01-07 10:02:55');
INSERT INTO `operaciones` VALUES (52, 'Baja', 'Baja de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2023-01-09 08:15:27');
INSERT INTO `operaciones` VALUES (53, 'Baja', 'Baja de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2023-01-09 08:15:28');
INSERT INTO `operaciones` VALUES (54, 'Alta', 'Alta de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2023-01-09 08:15:50');
INSERT INTO `operaciones` VALUES (55, 'Alta', 'Alta de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2023-01-09 08:15:51');
INSERT INTO `operaciones` VALUES (56, 'Alta', 'Alta de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2023-01-09 08:15:51');
INSERT INTO `operaciones` VALUES (57, 'Baja', 'Baja de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2023-01-10 07:48:18');
INSERT INTO `operaciones` VALUES (58, 'Baja', 'Baja de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2023-01-10 07:48:20');
INSERT INTO `operaciones` VALUES (59, 'Alta', 'Alta de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2023-01-13 10:54:05');
INSERT INTO `operaciones` VALUES (60, 'Baja', 'Baja de Apple - iPhone 7 (display); color blanco.', 'Luis Enrique', '2023-01-14 11:54:55');
INSERT INTO `operaciones` VALUES (61, 'Baja', 'Baja de Apple - iPhone 8 Plus (display); color negro.', 'Luis Enrique', '2023-01-16 14:09:23');
INSERT INTO `operaciones` VALUES (62, 'Baja', 'Baja de Motorola - G8 Power Lite (display); color negro.', 'Luis Enrique', '2023-02-08 16:18:18');
INSERT INTO `operaciones` VALUES (63, 'Baja', 'Baja de Huawei - Y7 2019 (display); color negro.', 'Luis Enrique', '2023-02-12 20:24:14');
INSERT INTO `operaciones` VALUES (64, 'Baja', 'Baja de Motorola - E5 Plus (display); color dorado.', 'Luis Enrique', '2023-02-12 20:24:26');
INSERT INTO `operaciones` VALUES (65, 'Baja', 'Baja de Motorola - E5 Plus (display); color dorado.', 'Luis Enrique', '2023-02-12 20:24:26');
INSERT INTO `operaciones` VALUES (66, 'Alta', 'Alta de Samsung - A30s (display); color negro.', 'Luis Enrique', '2023-03-08 14:21:56');
INSERT INTO `operaciones` VALUES (67, 'Alta', 'Alta de Samsung - A30s (display); color negro.', 'Luis Enrique', '2023-03-08 14:22:17');
INSERT INTO `operaciones` VALUES (68, 'Alta', 'Alta de Samsung - A51 (display); color negro.', 'Luis Enrique', '2023-03-08 14:23:05');
INSERT INTO `operaciones` VALUES (69, 'Baja', 'Baja de Motorola - G7 Power (display); color negro.', 'Luis Enrique', '2023-03-08 14:28:01');
INSERT INTO `operaciones` VALUES (70, 'Alta', 'Alta de Motorola - G7 Play (display); color negro.', 'Luis Enrique', '2023-03-08 14:28:53');
INSERT INTO `operaciones` VALUES (71, 'Alta', 'Alta de Motorola - One (display); color negro.', 'Luis Enrique', '2023-03-08 14:31:13');
INSERT INTO `operaciones` VALUES (72, 'Alta', 'Alta de Motorola - G9 Plus (display); color negro.', 'Luis Enrique', '2023-03-08 14:32:03');
INSERT INTO `operaciones` VALUES (73, 'Alta', 'Alta de Motorola - G9 Plus (display); color negro.', 'Luis Enrique', '2023-03-08 14:32:51');
INSERT INTO `operaciones` VALUES (74, 'Alta', 'Alta de Motorola - G9 Plus (display); color negro.', 'Luis Enrique', '2023-03-08 14:32:52');
INSERT INTO `operaciones` VALUES (75, 'Alta', 'Alta de Huawei - Y5 2018 (display); color negro.', 'Luis Enrique', '2023-03-09 10:27:23');
INSERT INTO `operaciones` VALUES (76, 'Alta', 'Alta de Huawei - P20 Lite (display); color negro.', 'Luis Enrique', '2023-03-09 10:30:33');
INSERT INTO `operaciones` VALUES (77, 'Alta', 'Alta de Huawei - P20 Lite (display); color negro.', 'Luis Enrique', '2023-03-09 10:30:33');
INSERT INTO `operaciones` VALUES (78, 'Alta', 'Alta de Huawei - P20 Lite (display); color negro.', 'Luis Enrique', '2023-03-09 10:30:33');
INSERT INTO `operaciones` VALUES (79, 'Alta', 'Alta de Huawei - P20 Lite (display); color negro.', 'Luis Enrique', '2023-03-09 10:30:38');
INSERT INTO `operaciones` VALUES (80, 'Alta', 'Alta de Huawei - P20 Lite (display); color negro.', 'Luis Enrique', '2023-03-09 10:30:38');
INSERT INTO `operaciones` VALUES (81, 'Baja', 'Baja de ZTE - A5 2020 A7 2020 (display); color negro.', 'Luis Enrique', '2023-03-09 11:04:37');
INSERT INTO `operaciones` VALUES (82, 'Alta', 'Alta de Huawei - Y6 2019 (display); color negro.', 'Luis Enrique', '2023-03-09 11:06:22');
INSERT INTO `operaciones` VALUES (83, 'Alta', 'Alta de Huawei - Y6 2019 (display); color negro.', 'Luis Enrique', '2023-03-09 11:06:38');
INSERT INTO `operaciones` VALUES (84, 'Baja', 'Baja de Apple - iPhone 8 Plus (display); color negro.', 'Luis Enrique', '2023-03-12 12:14:39');
INSERT INTO `operaciones` VALUES (85, 'Baja', 'Baja de Apple - iPhone 8 Plus (display); color negro.', 'Luis Enrique', '2023-03-12 12:14:41');
INSERT INTO `operaciones` VALUES (86, 'Baja', 'Baja de Apple - iPhone 8 Plus (display); color negro.', 'Luis Enrique', '2023-03-12 12:14:44');
INSERT INTO `operaciones` VALUES (87, 'Baja', 'Baja de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2023-03-29 00:46:52');
INSERT INTO `operaciones` VALUES (88, 'Alta', 'Alta de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2023-03-29 00:46:53');
INSERT INTO `operaciones` VALUES (89, 'Alta', 'Alta de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2023-03-29 00:47:07');
INSERT INTO `operaciones` VALUES (90, 'Baja', 'Baja de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2023-03-29 00:47:15');
INSERT INTO `operaciones` VALUES (91, 'Alta', 'Alta de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2023-03-30 21:48:22');
INSERT INTO `operaciones` VALUES (92, 'Alta', 'Alta de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2023-03-30 21:48:28');
INSERT INTO `operaciones` VALUES (93, 'Baja', 'Baja de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2023-03-30 21:48:29');
INSERT INTO `operaciones` VALUES (94, 'Baja', 'Baja de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2023-03-30 21:48:30');
INSERT INTO `operaciones` VALUES (95, 'Baja', 'Baja de Apple - iPhone 8 (display); color negro.', 'Luis Enrique', '2023-04-13 19:32:04');
INSERT INTO `operaciones` VALUES (96, 'Baja', 'Baja de Motorola - E5 Play Go (display); color dorado.', 'Luis Enrique', '2023-04-30 15:15:31');
INSERT INTO `operaciones` VALUES (97, 'Alta', 'Alta de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2023-05-11 12:41:49');
INSERT INTO `operaciones` VALUES (98, 'Alta', 'Alta de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2023-05-11 12:41:51');
INSERT INTO `operaciones` VALUES (99, 'Baja', 'Baja de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2023-05-11 12:41:53');
INSERT INTO `operaciones` VALUES (100, 'Baja', 'Baja de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2023-05-11 12:41:54');
INSERT INTO `operaciones` VALUES (101, 'Alta', 'Alta de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2023-05-11 12:42:07');
INSERT INTO `operaciones` VALUES (102, 'Baja', 'Baja de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2023-05-11 12:42:09');
INSERT INTO `operaciones` VALUES (103, 'Alta', 'Alta de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2023-05-11 12:42:12');
INSERT INTO `operaciones` VALUES (104, 'Alta', 'Alta de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2023-05-11 12:42:12');
INSERT INTO `operaciones` VALUES (105, 'Baja', 'Baja de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2023-05-11 12:42:14');
INSERT INTO `operaciones` VALUES (106, 'Baja', 'Baja de Huawei - P Smart 2019 (display); color nA.', 'Dante', '2023-05-11 12:42:14');
INSERT INTO `operaciones` VALUES (107, 'Baja', 'Baja de Huawei - Y6 2019 (display); color negro.', 'Luis Enrique', '2023-06-19 13:58:29');
INSERT INTO `operaciones` VALUES (108, 'Baja', 'Baja de Huawei - Y6 2019 (display); color negro.', 'Luis Enrique', '2023-06-19 13:58:29');
INSERT INTO `operaciones` VALUES (109, 'Baja', 'Baja de Huawei - Y6 2019 (display); color negro.', 'Luis Enrique', '2023-06-19 13:58:31');
INSERT INTO `operaciones` VALUES (110, 'Baja', 'Baja de Apple - iPhone 8 (display); color blanco.', 'Luis Enrique', '2023-07-19 11:22:17');
INSERT INTO `operaciones` VALUES (111, 'Alta', 'Alta de Motorola - G8 Power (display); color negro.', 'Luis Enrique', '2023-07-30 14:13:08');
INSERT INTO `operaciones` VALUES (112, 'Alta', 'Alta de Samsung - A12 (display); color negro.', 'Luis Enrique', '2023-07-30 14:15:22');
INSERT INTO `operaciones` VALUES (113, 'Baja', 'Baja de Motorola - G4 Play (display); color negro.', 'Luis Enrique', '2023-08-04 14:19:43');
INSERT INTO `operaciones` VALUES (114, 'Baja', 'Baja de Samsung - J5 Prime (display); color blanco.', 'Luis Enrique', '2023-08-05 12:43:44');
INSERT INTO `operaciones` VALUES (115, 'Baja', 'Baja de 12 - Super Azon (display); color negro.', 'Dante', '2023-08-09 09:45:06');

-- ----------------------------
-- Table structure for reparaciones
-- ----------------------------
DROP TABLE IF EXISTS `reparaciones`;
CREATE TABLE `reparaciones`  (
  `id_reparación` int NOT NULL AUTO_INCREMENT,
  `nombre_reparación` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `teléfono_reparación` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `marca_reparación` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `modelo_reparación` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `falla_reparación` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `trabajo_reparación` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `status_reparación` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `cotización_reparación` double(65, 2) NOT NULL,
  `abono_reparación` double(65, 2) NOT NULL,
  `estadoPrevio_reparación` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `email_reparación` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NULL DEFAULT NULL,
  `fecha_recibida_reparación` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `recibió_reparación` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `comentarios_reparación` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NULL,
  PRIMARY KEY (`id_reparación`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb3 COLLATE = utf8mb3_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of reparaciones
-- ----------------------------
INSERT INTO `reparaciones` VALUES (1, 'Dante Castelán Carpinteyro', '7979773095', 'Motorola', 'G7 Play', 'Reporte', 'Liberación', 'Listo', 400.00, 400.00, 'Sin señal', 'dante@castelancarpinteyro.com', '2023-05-15 21:09:07', 'Luis Enrique Reyes Fernández', 'Completado, sin fallos');
INSERT INTO `reparaciones` VALUES (2, 'Emiliano', '7971196751', 'Xiaomi', 'Redmi Note 10C', 'Desgaste', 'Mantenimiento', 'Pendiente', 200.00, 180.00, 'Encendido', 'emiliano@castelancarpinteyro.com', '2023-08-11 14:34:12', 'Dante Castelán Carpinteyro', 'Falta limpiar con alcohol');
INSERT INTO `reparaciones` VALUES (3, 'Andrea Castelán Carpinteyro', '7971477209', 'Motorola', 'E5 Play Go', 'Sonido', 'Cambio de bocina', 'Entregado', 150.00, 140.00, 'Encendido, sin sonido', 'castelancarpinteyroandrea@gmail.com', '2023-08-11 14:34:21', 'Rosalba Nazareth Zárate Morales', 'Todo bien');

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios`  (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `nombre_usuario` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `apellidos_usuario` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `email_usuario` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `contraseña_usuario` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `teléfono_usuario` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  PRIMARY KEY (`id_usuario`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb3 COLLATE = utf8mb3_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES (1, 'Luis Enrique', 'Reyes Fernández', 'lerf435@gmail.com', 'JOVALINA1105', '2411352236');
INSERT INTO `usuarios` VALUES (2, 'Rosalba Nazareth', 'Zárate Morales', 'rosalba.171098@gmail.com', 'Kalevi22!!', '2225209776');
INSERT INTO `usuarios` VALUES (3, 'Dante', 'Castelán Carpinteyro', 'dante@castelancarpinteyro.club', 'Kalifornio', '7979773095');

SET FOREIGN_KEY_CHECKS = 1;
