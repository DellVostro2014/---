-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 04 2018 г., 01:22
-- Версия сервера: 5.6.37
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `restart`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categorys`
--

CREATE TABLE `categorys` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `main_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categorys`
--

INSERT INTO `categorys` (`id`, `category`, `main_category`) VALUES
(1, 'Видеокарта', 1),
(2, 'Колонки ', 2),
(3, 'Материнская плата ', 1),
(6, 'Блок питания', 1),
(7, 'Оперативная память ', 1),
(8, 'Наушники', 2),
(9, 'Мышь', 2),
(10, 'Процессоры', 1),
(26, 'Игровые ПК', 4),
(27, 'Для дома ', 4),
(28, 'Для офиса ', 4),
(29, 'Кулера', 1),
(31, 'Клавиатуры', 2),
(32, 'Клавиатуры', 6),
(33, 'Материнские платы ', 6),
(34, 'Блоки питания ', 6),
(35, 'Для дома ', 5),
(37, 'Бизнес ноутбуки', 5),
(38, 'Игровые ноутбуки', 5),
(39, 'Детали корпуса', 6),
(40, 'Оперативная память ', 6),
(41, 'Система охлаждения', 6);

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `e-mail` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `read_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `main_category` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `key_words` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `actual` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `subject`, `description`, `price`, `stock`, `main_category`, `category`, `key_words`, `img`, `actual`) VALUES
(2, 'Материнская плата Asus H110M-K (s1151, Intel H110, PCI-Ex16)', 'Тип разъема: Socket 1151\r\nФормфактор: MicroATX\r\nПоддержка памяти: 2 x DDR4 DIMM; Количество каналов 2\r\nПоддержка процессоров: Intel Core i7 / Core i5 / Core i3 / Pentium / Celeron 6-го и 7-го поколений под сокет LGA1151', 3999, 1, '1', '3', 'Тип разъема: Socket 1151 Формфактор: MicroATX Поддержка памяти: 2 x DDR4 DIMM; Количество каналов 2 Поддержка процессоров: Intel Core i7 / Core i5 / Core i3 / Pentium', '../images/goods_foto/img1521442115.jpg', 0),
(3, 'Видеокарта MSI GeForce GTX 1050 TI GAMING X 4G', 'Игровая видеокарта MSI GeForce GTX 1050 TI GAMING X 4G - это современное решение для игры в любые проекты на высоких настройках качества графики. Данная модель с легкостью позволяют получать стабильные 60 кадров в секунду при разрешении Full HD. ', 30000, 0, '1', '1', 'Видеокарта MSI GeForce GTX 1050 TI GAMING X 4G', '../images/goods_foto/img1521448446.jpg', 0),
(4, 'Видеокарта ASUS DUAL-GTX1060-O6G', 'ASUS DUAL-GTX1060-O6G - это производительный графический адаптер среднего класса, возможностей которого достаточно для любой современной игры в разрешении 1080р. В основе данной модели лежит быстрый и энергоэффективный графический процессор GTX 1060 с так', 56000, 0, '1', '1', 'Видеокарта ASUS DUAL-GTX1060-O6G', '../images/goods_foto/img1521451606.jpg', 0),
(5, 'AMD Ryzen 3 2200G AM4, 3.5GHz, 65W, Box (YD2200C5FBBOX', 'Плюсы: Производительность на уровне i3 8100, видеоядро на уровне 80-90% от GT1030 (при достаточном объеме оперативки в двухканале) + возможнось разгона на B350, малое тепловыделение, тихий кулер. Минусы: Необходимость обновлять биос на прежних ревизиях плат. Пока цена в Украине (номинал 99$). Общее впечатление: Если', 9000, 0, '1', '10', 'Процессор AMD Ryzen 3 2200G AM4, 3.5GHz, 65W, Box (YD2200C5FBBOX', '../images/goods_foto/img1521900519.jpg', 0),
(7, 'Оперативная память Kingston DDR4-2400 8192MB PC4-19200 HyperX Fury Black (HX424C15FB2/8)', 'Модули памяти серии HyperX Fury разработанны и протестированные по высшему классу быстродействия линейка и предназначены как для обычных домашних персональных ПК, так и для мощных игровых систем.\r\nПредставленный здесь модуль памяти HyperX Fury DDR4 автоматически выполняет разгон до максимальной заявленной частоты 2400 МГц, мгновенно обеспечивая максимальную производительность для системных плат с чипсетами Intel серии 100 и X99. Это недорогое решение для использования с 2-ух, 4-ех, 6-ти и 8-ядерным процессорам Intel повышает скорость редактирования видео, 3D-рендеринга, компьютерных игр и AI-процессинга.\r\n\r\nОдиночный модуль объемом памяти в 8 ГБ и латентностью CL15, обеспечит пропускную способность 19200 МБ/с, а его стильный низкопрофильный теплоотвод с характерным дизайном Fury, выгодно подчеркнет внешний вид вашей системы.', 6000, 0, '1', '7', 'Оперативная память Kingston DDR4-2400 8192MB PC4-19200 HyperX Fury Black (HX424C15FB2/8)', '../images/goods_foto/img1522791375.jpg', 0),
(8, 'Ноутбук Xiaomi Mi Notebook Pro 15.6 Intel Core i5 8/256 GB', 'Xiaomi Mi Notebook Pro 15.6 — универсальный рабочий инструмент, ноутбук, соединивший в себе высокое качество, элегантный внешний вид и выдающиеся характеристики. Устройство знакомо в первую очередь всем, кто интересуется деятельностью китайской компании Xiaomi. Xiaomi Mi Notebook Pro 15.6 — вторая версия известного ноутбука, которая получила хорошее обновление. Алюминиевый корпус, малая толщина, строгие углы и ничего лишнего, даже логотипов. 15,6-дюймовый экран выполнен по технологии IPS и имеет разрешение 1920х1080 точек, чего достаточно для качественной, насыщенной картинки и широких углов обзора. За производительность отвечает 8 поколение процессоров Intel Core. Доступны конфигурации как с Core i5, так и Core i7. Их мощности достаточно для того, чтобы легко справляться с любыми ежедневными задачами, даже требовательными. Приятным бонусом будет наличие дискретной видеокарты NVIDIA GeForce MX150. Xiaomi Mi Notebook Pro 15.6 также имеет в своем распоряжении подсветку клавиатуры и сканер отпечатков пальцев', 80000, 0, '5', '', 'Ноутбук Xiaomi Mi Notebook Pro 15.6 Intel Core i5 8/256 GB', '../images/goods_foto/img1522791578.jpg', 0),
(9, 'Ноутбук Dell Alienware A17 R4 A17-8791', 'Dell Alienware A17 R4 A17-8791 это мощный ноутбук, в нем установлен процессор Intel Core i7 - 7700HQ и графическая карта GeForce GTX 1070 8192 Mb, которые позволят запускать игровые новинки без торможения. 17,3&quot; дисплей имеющий разрешение Full HD 1920x1080 сделает любой фильм невероятно реалистичным позволяя тем самым полностью погрузится в его атмосферу. Для сохранения на жесткий диск различного контента предоставляются 1000 Гб 256 Гб, которые смогут разместить целую коллекцию из фильмов музыки и фотографий. Мощный ноутбук Dell Alienware A17 R4 A17-8791 станет хорошим спутником, а так же прекрасно впишится в любой интерьер, скрашивая досуг всей семьи.', 134000, 0, '5', '', 'Ноутбук Dell Alienware A17 R4 A17-8791 игровой ноутбук', '../images/goods_foto/img1522792203.jpg', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `main_categorys`
--

CREATE TABLE `main_categorys` (
  `id` int(11) NOT NULL,
  `categorys` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `main_categorys`
--

INSERT INTO `main_categorys` (`id`, `categorys`) VALUES
(1, 'Комплектующие для ПК'),
(2, 'Аксессуары'),
(3, 'Мониторы '),
(4, 'Персональные компьютеры '),
(5, 'Ноутбуки'),
(6, 'Комплектующие для ноутбуков');

-- --------------------------------------------------------

--
-- Структура таблицы `orders_goods`
--

CREATE TABLE `orders_goods` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `e-mail` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `pickup` int(11) NOT NULL DEFAULT '0',
  `goods` varchar(255) NOT NULL,
  `count_p` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `read_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders_goods`
--

INSERT INTO `orders_goods` (`id`, `name`, `phone`, `e-mail`, `adress`, `pickup`, `goods`, `count_p`, `price`, `date`, `read_status`) VALUES
(8, 'Иван Петрович', '+3801111111', 'dimasik_play@p33.org', 'Петр12/312', 1, '3,4', '1,2', '142000', '2018-05-29 13:06:40', 1),
(9, 'Иван Петрович', '+3801111111', 'dimasik_play@p33.org', 'Петр12/312', 1, '3,4', '1,2', '142000', '2018-05-29 13:25:13', 1),
(10, 'Иван Петрович', '+3801111111', 'dimasik_play@p33.org', 'Петр12/312', 1, '3,4', '1,2', '142000', '2018-05-29 13:25:56', 1),
(11, 'Дмитрий Караваев', '0660901845', 'great.2mas@yandex.com', 'Петр12/35', 0, '3,4,2,5', '2,3,1,1', '240999', '2018-05-29 16:32:18', 1),
(15, 'Дмитрий', '+3801111111', '+380721192602', '', 1, '3,4', '2,1', '116000', '2018-05-30 19:46:28', 1),
(19, 'Дмитрий Караваев', '+3801111111', 'great.2mas@yandex.com', 'Петровского д55 кв35', 0, '9,8,2,3,4,7,5', '1,1,1,1,1,1,1', '318999', '2018-05-31 00:23:31', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `orders_repair`
--

CREATE TABLE `orders_repair` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `e-mail` varchar(255) NOT NULL,
  `device` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `read_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders_repair`
--

INSERT INTO `orders_repair` (`id`, `name`, `phone`, `e-mail`, `device`, `model`, `message`, `date`, `read_status`) VALUES
(5, 'Иван Петрович ', '+3801111111', 'Noutbook', '', 'Dell vostro 3560', 'dfa re qer re e e ery er ger   y hy ery ge', '2018-06-03 21:42:20', 1),
(6, 'Иван Петрович ', '+3801111111', 'great.2mas@yandex.com', 'Ноутбук', 'Dell vostro 3560', 'dfa re qer re e e ery er ger   y hy ery ge', '2018-06-03 21:43:30', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `e-mail` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'user',
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `e-mail`, `adress`, `phone`, `status`, `reg_date`) VALUES
(1, 'Diablo Dimas', '0000', 'Mail-loc@big.loc', '', '', 'admin', '2018-03-17 16:27:08'),
(2, 'Admin', 'admin', 'Mail-loc@big.loc', '', '', 'admin', '2018-03-17 16:27:08'),
(4, 'New man', '', 'dimas@gmail.com', '', '', 'user', '2018-03-22 19:10:40'),
(5, 'Diablo Dimas', '', 'Mail-loc@big.loc', '', '', 'user', '2018-03-22 19:12:56'),
(6, 'Екатерина Караваева', '2005', 'katya@gmail.com', '', '', 'user', '2018-03-26 05:21:59'),
(7, 'Dimix', 'доступ', 'Mail-loc@big.loc', '', '', 'user', '2018-05-03 16:15:51');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `main_categorys`
--
ALTER TABLE `main_categorys`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders_goods`
--
ALTER TABLE `orders_goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders_repair`
--
ALTER TABLE `orders_repair`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `main_categorys`
--
ALTER TABLE `main_categorys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `orders_goods`
--
ALTER TABLE `orders_goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT для таблицы `orders_repair`
--
ALTER TABLE `orders_repair`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
