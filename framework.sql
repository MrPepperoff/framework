-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июл 08 2023 г., 18:07
-- Версия сервера: 10.4.28-MariaDB
-- Версия PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `framework`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(4) NOT NULL,
  `name` varchar(100) NOT NULL,
  `short_content` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `parrent_id` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`, `short_content`, `img`, `parrent_id`) VALUES
(1, 'Компьютеры', 'Краткое описание', 'resources/image/catalog/menu/icons/icon-6.png', NULL),
(2, 'Смартфоны', NULL, 'resources/image/catalog/menu/icons/icon-2.png', NULL),
(3, 'Apple', NULL, NULL, NULL),
(4, 'Android', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name_menu` varchar(100) NOT NULL,
  `alias` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `name_menu`, `alias`) VALUES
(1, 'главное меню в шапке', 'main_menu'),
(2, 'меню категории товаров', 'departament_menu'),
(3, 'footer', 'footer_menu');

-- --------------------------------------------------------

--
-- Структура таблицы `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(11) NOT NULL,
  `href` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `parrent_id` int(11) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `menu_items`
--

INSERT INTO `menu_items` (`id`, `href`, `name`, `menu_id`, `parrent_id`, `img`, `icon`) VALUES
(1, '/?route=index/page&id=2', 'Контакты', 3, NULL, NULL, NULL),
(2, '/?route=index/page&id=1', 'О нас', 3, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `alias` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `alias`, `title`, `name`, `content`) VALUES
(1, 'about', 'О нас', NULL, '<div class=\"content-about-us\">\r\n                <div class=\"image-about-us\">\r\n                    <img src=\"resources/image/catalog/about/about-us.jpg\" alt=\"Image Client\">\r\n                </div>\r\n                <div class=\"des-about-us\">Nulla auctor mauris ut dui luctus semper. In hac habitasse platea dictumst. Duis pellentesque ligula a risus suscipit dignissim. Nunc non nisl lacus. Integer pharetra lacinia dapibus. Donec eu dolor dui, vel posuere mauris.\r\n                    <br>\r\n                    <br>Pellentesque semper congue sodales. In consequat, metus eget con sequat ornare, augue dolor blandit purus, vitae lacinia nisi tellus in erat. Nulla ac justo eget massa aliquet sodales. Maecenas mattis male suada sem, in fringilla massa dapibus quis. Suspendisse aliquam leo id neque auctor molestie. Etiam at nulla tellus.\r\n                    <br>\r\n                    <br>Nulla auctor mauris ut dui luctus semper. In hac habitasse platea dictumst. Duis pellentesque ligula a risus suscipit dignissim.</div>\r\n            </div>\r\n        </div>\r\n        <div class=\"col-md-3 why-choose-us\">\r\n            <div class=\"title-about-us\">\r\n                <h2>Why Choose Us</h2>\r\n            </div>\r\n            <div class=\"content-why\">\r\n                <ul class=\"why-list\">\r\n                    <li><a title=\"Shipping &amp; Returns\" href=\"#\">Shipping &amp; Returns</a>\r\n                    </li>\r\n                    <li><a title=\"Secure Shopping\" href=\"#\">Secure Shopping</a>\r\n                    </li>\r\n                    <li><a title=\"International Shipping\" href=\"#\">International Shipping</a>\r\n                    </li>\r\n                    <li><a title=\"Affiliates\" href=\"#\">Affiliates</a>\r\n                    </li>\r\n                    <li><a title=\"Group Sales\" href=\"#\">Group Sales</a>\r\n                    </li>\r\n                </ul>\r\n            </div>\r\n        </div>\r\n        <div class=\"col-md-12 our-member\">\r\n            <div class=\"title-about-us\">\r\n                <h2>Our Member</h2>\r\n            </div>\r\n            <div class=\"short-des\">Consectetur adipiscing elit. Donec pellentesque venenatis elit, quis aliquet mauris malesuada vel. Donec vitae libero dolor, eget dapibus justo.\r\n                <br>Aenean facilisis aliquet feugiat. Suspendisse lacinia congue est ac semper. Nulla ut elit magna, vitae volutpat magna.</div>\r\n            <div class=\"overflow-owl-slider1\">\r\n                <div class=\"wrapper-owl-slider1\">\r\n                    <div class=\"row slider-ourmember\">\r\n                        <div class=\"item-about col-lg-6 col-md-6 col-sm-6\">\r\n                            <div class=\"item respl-item\">\r\n                                <div class=\"item-inner\">\r\n                                    <div class=\"w-image-box\">\r\n                                        <div class=\"item-image\">\r\n                                            <a title=\"Jennifer lawrence\" href=\"#\">\r\n                                                <img src=\"resources/image/catalog/about/cl-image-1.jpg\" alt=\"Image Client\">\r\n                                            </a>\r\n                                        </div>\r\n                                    </div>\r\n                                    <div class=\"info-member\">\r\n                                        <h2 class=\"cl-name\"><a title=\"Jennifer lawrence\" href=\"#\">Jennifer lawrence</a></h2>\r\n                                        <p class=\"cl-job\">Art Director</p>\r\n                                        <p class=\"cl-des\">Donec dignissim, enim ac semper tempus, ligula neque pulvinar mi, sed facilisis arcu placerat consequat</p>\r\n                                        <ul>\r\n                                            <li>\r\n                                                <a class=\"fa fa-f\" title=\"Facebook\" href=\"#\"></a>\r\n                                            </li>\r\n                                            <li>\r\n                                                <a class=\"fa fa-t\" title=\"Twitter\" href=\"#\"></a>\r\n                                            </li>\r\n                                            <li>\r\n                                                <a class=\"fa fa-g\" title=\"google\" href=\"#\"></a>\r\n                                            </li>\r\n                                            <li>\r\n                                                <a class=\"fa fa-s\" title=\"skyper\" href=\"#\"></a>\r\n                                            </li>\r\n                                        </ul>\r\n                                    </div>\r\n                                </div>\r\n                            </div>\r\n                        </div>\r\n                        <div class=\"item-about col-lg-6 col-md-6 col-sm-6\">\r\n                            <div class=\"item respl-item\">\r\n                                <div class=\"item-inner\">\r\n                                    <div class=\"w-image-box\">\r\n                                        <div class=\"item-image\">\r\n                                            <a title=\"Jennifer lawrence\" href=\"#\">\r\n                                                <img src=\"resources/image/catalog/about/cl-image-2.jpg\" alt=\"Image Client\">\r\n                                            </a>\r\n                                        </div>\r\n                                    </div>\r\n                                    <div class=\"info-member\">\r\n                                        <h2 class=\"cl-name\"><a title=\"Jennifer lawrence\" href=\"#\">Jennifer lawrence</a></h2>\r\n                                        <p class=\"cl-job\">Design Leader</p>\r\n                                        <p class=\"cl-des\">Donec dignissim, enim ac semper tempus, ligula neque pulvinar mi, sed facilisis arcu placerat consequat</p>\r\n                                        <ul>\r\n                                            <li>\r\n                                                <a class=\"fa fa-f\" title=\"Facebook\" href=\"#\"></a>\r\n                                            </li>\r\n                                            <li>\r\n                                                <a class=\"fa fa-t\" title=\"Twitter\" href=\"#\"></a>\r\n                                            </li>\r\n                                            <li>\r\n                                                <a class=\"fa fa-g\" title=\"google\" href=\"#\"></a>\r\n                                            </li>\r\n                                            <li>\r\n                                                <a class=\"fa fa-s\" title=\"skyper\" href=\"#\"></a>\r\n                                            </li>\r\n                                        </ul>\r\n                                    </div>\r\n                                </div>\r\n                            </div>\r\n                        </div>\r\n                        <div class=\"item-about col-lg-6 col-md-6 col-sm-6\">\r\n                            <div class=\"item respl-item\">\r\n                                <div class=\"item-inner\">\r\n                                    <div class=\"w-image-box\">\r\n                                        <div class=\"item-image\">\r\n                                            <a title=\"Jennifer lawrence\" href=\"#\">\r\n                                                <img src=\"resources/image/catalog/about/cl-image-3.jpg\" alt=\"Image Client\">\r\n                                            </a>\r\n                                        </div>\r\n                                    </div>\r\n                                    <div class=\"info-member\">\r\n                                        <h2 class=\"cl-name\"><a title=\"Jennifer lawrence\" href=\"#\">Jennifer lawrence</a></h2>\r\n                                        <p class=\"cl-job\">Tech Leader</p>\r\n                                        <p class=\"cl-des\">Donec dignissim, enim ac semper tempus, ligula neque pulvinar mi, sed facilisis arcu placerat consequat</p>\r\n                                        <ul>\r\n                                            <li>\r\n                                                <a class=\"fa fa-f\" title=\"Facebook\" href=\"#\"></a>\r\n                                            </li>\r\n                                            <li>\r\n                                                <a class=\"fa fa-t\" title=\"Twitter\" href=\"#\"></a>\r\n                                            </li>\r\n                                            <li>\r\n                                                <a class=\"fa fa-g\" title=\"google\" href=\"#\"></a>\r\n                                            </li>\r\n                                            <li>\r\n                                                <a class=\"fa fa-s\" title=\"skyper\" href=\"#\"></a>\r\n                                            </li>\r\n                                        </ul>\r\n                                    </div>\r\n                                </div>\r\n                            </div>\r\n                        </div>\r\n                        <div class=\"item-about col-lg-6 col-md-6 col-sm-6\">\r\n                            <div class=\"item respl-item\">\r\n                                <div class=\"item-inner\">\r\n                                    <div class=\"w-image-box\">\r\n                                        <div class=\"item-image\">\r\n                                            <a title=\"Jennifer lawrence\" href=\"#\">\r\n                                                <img src=\"resources/image/catalog/about/cl-image-4.jpg\" alt=\"Image Client\">\r\n                                            </a>\r\n                                        </div>\r\n                                    </div>\r\n                                    <div class=\"info-member\">\r\n                                        <h2 class=\"cl-name\"><a title=\"Jennifer lawrence\" href=\"#\">Jennifer lawrence</a></h2>\r\n                                        <p class=\"cl-job\">Manager</p>\r\n                                        <p class=\"cl-des\">Donec dignissim, enim ac semper tempus, ligula neque pulvinar mi, sed facilisis arcu placerat consequat</p>\r\n                                        <ul>\r\n                                            <li>\r\n                                                <a class=\"fa fa-f\" title=\"Facebook\" href=\"#\"></a>\r\n                                            </li>\r\n                                            <li>\r\n                                                <a class=\"fa fa-t\" title=\"Twitter\" href=\"#\"></a>\r\n                                            </li>\r\n                                            <li>\r\n                                                <a class=\"fa fa-g\" title=\"google\" href=\"#\"></a>\r\n                                            </li>\r\n                                            <li>\r\n                                                <a class=\"fa fa-s\" title=\"skyper\" href=\"#\"></a>\r\n                                            </li>\r\n                                        </ul>\r\n                                    </div>\r\n                                </div>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </div>\r\n        <div class=\"col-md-12 happy-about-us\">\r\n            <div id=\"slider-happy-about-us\" class=\"happy-ab\">\r\n                <div class=\"title-happy-about\">\r\n                    <h2>Happy customer says</h2>\r\n                </div>\r\n          \r\n                <div class=\"yt-content-slider sm_imageslider slider-happy-client\" data-rtl=\"yes\" data-autoplay=\"no\" data-autoheight=\"no\" data-delay=\"4\" data-speed=\"0.6\" data-margin=\"0\" data-items_column0=\"1\" data-items_column1=\"1\" data-items_column2=\"1\"  data-items_column3=\"1\" data-items_column4=\"1\" data-arrows=\"yes\" data-pagination=\"no\" data-lazyload=\"yes\" data-loop=\"no\" data-hoverpause=\"yes\">\r\n                    <div class=\"item\">\r\n                        <div class=\"ct-why\">\r\n                            <div class=\"client-say\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In congue, justo non cursus adipiscing, dui nibh scelerisque justo, quis pretium turpis neque eget nulla. Curabitur dictum consectetur metus nec dignissim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In congue, justo non cursus adipiscing, dui nibh scelerisque justo non cursus adipiscing, dui nibh scelerisque justo, quis pretium turpis.</div>\r\n                            <p class=\"client-info-about\"><span class=\"name\">- Mama Duo - </span>Social Media Strategist</p>\r\n                        </div>\r\n                    </div>\r\n                    <div class=\"item\">\r\n                        <div class=\"ct-why\">\r\n                            <div class=\"client-say\">In congue, justo non cursus adipiscing, dui nibh scelerisque justo, quis pretium turpis neque eget nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dictum consectetur metus nec dignissim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In congue, justo non cursus adipiscing, dui nibh scelerisque justo non cursus adipiscing, dui nibh scelerisque justo, quis pretium turpis.</div>\r\n                            <p class=\"client-info-about\"><span class=\"name\">- Join Doe - </span>Social Media Strategist</p>\r\n                        </div>\r\n                    </div>\r\n                    <div class=\"item\">\r\n                        <div class=\"ct-why\">\r\n                            <div class=\"client-say\">Dui nibh scelerisque justo, in congue, justo non cursus adipiscing, quis pretium turpis neque eget nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dictum consectetur metus nec dignissim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In congue, justo non cursus adipiscing, dui nibh scelerisque justo non cursus adipiscing, dui nibh scelerisque justo, quis pretium turpis.</div>\r\n                            <p class=\"client-info-about\"><span class=\"name\">- Join Doe - </span>Social Media Strategist</p>\r\n                        </div>\r\n                    </div>\r\n                    <div class=\"item\">\r\n                        <div class=\"ct-why\">\r\n                            <div class=\"client-say\">In congue, justo non cursus adipiscing, dui nibh scelerisque justo, quis pretium turpis neque eget nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dictum consectetur metus nec dignissim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In congue, justo non cursus adipiscing, dui nibh scelerisque justo non cursus adipiscing, dui nibh scelerisque justo, quis pretium turpis.</div>\r\n                            <p class=\"client-info-about\"><span class=\"name\">- Join Doe - </span>Social Media Strategist</p>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n            </div>\r\n        </div>\r\n    </div>\r\n</div>'),
(2, 'contact', 'Контакты', 'Как с нами связаться', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2948.8442639328655!2d-71.10008329902021!3d42.34584359264178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e379f63dc43ccb%3A0xa15d5aa87d0f0c12!2s4+Yawkey+Way%2C+Boston%2C+MA+02215!5e0!3m2!1sen!2s!4v1475081210943\" width=\"100%\" height=\"350\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>\r\n	<div class=\"info-contact clearfix\">\r\n		<div class=\"col-lg-4 col-sm-4 col-xs-12 info-store\">\r\n			<div class=\"row\">\r\n				<div class=\"name-store\">\r\n					<h3>Your Store</h3>\r\n\r\n				</div>\r\n				<address>\r\n					<div class=\"address clearfix form-group\">\r\n						<div class=\"icon\">\r\n							<i class=\"fa fa-home\"></i>\r\n						</div>\r\n						<div class=\"text\">My Company, 42 avenue des Champs Elysées 75000 Paris France</div>\r\n					</div>\r\n					<div class=\"phone form-group\">\r\n						<div class=\"icon\">\r\n							<i class=\"fa fa-phone\"></i>\r\n						</div>\r\n						<div class=\"text\">Phone : 0123456789</div>\r\n					</div>\r\n					<div class=\"comment\">             \r\n					Maecenas euismod felis et purus consectetur, quis fermentum velition. Aenean egestas quis turpis vehicula. Maecenas euismod felis et purus consectetur, quis fermentum velition. Aenean egestas quis turpis vehicula. Это давно установленный факт, что читатель будет отвлекаться на удобочитаемое содержание страницы при взгляде на ее макет. Смысл использования Lorem Ipsum в том, что он имеет более или менее нормальное распределение букв, в отличие от использования «Контент здесь, контент здесь», что делает его похожим на читабельный английский.\r\n					</div>\r\n				</address>\r\n			</div>\r\n		</div>\r\n		<div class=\"col-lg-8 col-sm-8 col-xs-12 contact-form\">\r\n			<form action=\"\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">\r\n				<fieldset>\r\n					<legend>Contact Form</legend>\r\n					<div class=\"form-group required\">\r\n				<label class=\"col-sm-2 control-label\" for=\"input-name\">Your Name</label>\r\n				<div class=\"col-sm-10\">\r\n					<input type=\"text\" name=\"name\" value=\"\" id=\"input-name\" class=\"form-control\">\r\n					</div>\r\n				</div>\r\n				<div class=\"form-group required\">\r\n					<label class=\"col-sm-2 control-label\" for=\"input-email\">E-Mail Address</label>\r\n					<div class=\"col-sm-10\">\r\n						<input type=\"text\" name=\"email\" value=\"\" id=\"input-email\" class=\"form-control\">\r\n						</div>\r\n					</div>\r\n					<div class=\"form-group required\">\r\n						<label class=\"col-sm-2 control-label\" for=\"input-enquiry\">Enquiry</label>\r\n						<div class=\"col-sm-10\">\r\n							<textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\"></textarea>\r\n						</div>\r\n					</div>\r\n				</fieldset>\r\n				<div class=\"buttons\">\r\n					<div class=\"pull-right\">\r\n						<button class=\"btn btn-default buttonGray\" type=\"submit\">\r\n							<span>Submit</span>\r\n						</button>\r\n					</div>\r\n				</div>\r\n			</form>\r\n		</div>\r\n	</div>\r\n</div>'),
(3, '404', '404', NULL, 'страница не найдена'),
(4, '', 'Главная', NULL, 'контент главной страницы');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `category_id` int(4) NOT NULL,
  `price` int(8) NOT NULL,
  `old_price` int(8) DEFAULT NULL,
  `img_little_1` varchar(255) DEFAULT NULL,
  `img_little_2` varchar(255) DEFAULT NULL,
  `img_little_3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `img`, `description`, `category_id`, `price`, `old_price`, `img_little_1`, `img_little_2`, `img_little_3`) VALUES
(1, 'ПК DEXP Atlas H342', 'PC1_1.jpg', 'Intel Celeron N4120, 4 x x1.1 ГГц, 4 ГБ DDR4, SSD 128 ГБ, без ОС', 1, 7799, NULL, 'PC1_1.jpg', 'PC1_2.jpg', 'PC1_3.jpg'),
(2, 'Сотовый телефон teXet TM-130 красный', 'Ph1_1.png', '2SIM, 1.77\", TN (TFT), 128x160, FM, micro SD, 600 мА*ч', 2, 1099, NULL, 'Ph1_1.png', 'Ph1_2.png', 'Ph1_3.png'),
(3, 'ПК HP OMEN GT22-0005ur [5D449EA]', 'PC2_1.png', 'Intel Core i9-12900K, 8 x x3.2 ГГц, 64 ГБ DDR4, GeForce RTX 3080 Ti, SSD 2000 ГБ, Windows 11 Home Single Language', 1, 541999, NULL, 'PC2_1.png', 'PC2_2.png', 'PC2_3.png'),
(4, '5.5\" Смартфон Black Fox B2 Fox 8 ГБ голубой', 'Ph2_2.png', 'ядер - 4x(1.4 ГГц), 1 Гб, 2 SIM, IPS, 1440x720, камера 8 Мп, 4G, GPS, 2200 мА*ч', 2, 2999, 3499, 'Ph2_1.png', 'Ph2_3.png', 'Ph2_4.png'),
(5, '6.7\" Смартфон Apple iPhone 14 Pro Max 1024 ГБ золотистый', 'Ph3_1.png', 'ядер - 6, 6 Гб, OLED, 2796x1290, камера 48+12+12 Мп, NFC, 5G, GPS', 2, 174799, 189999, 'Ph3_1.png', 'Ph3_2.png', 'Ph3_3.png'),
(6, 'Мини ПК Apple Mac mini', 'PC3_1.png', 'Apple M2, 4 x x3.5 ГГц, 8 ГБ, SSD 256 ГБ, macOS', 1, 70799, 76999, 'PC3_1.png', 'PC3_2.png', 'PC3_3.png');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
