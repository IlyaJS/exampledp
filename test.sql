-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Дек 14 2021 г., 03:24
-- Версия сервера: 5.5.25
-- Версия PHP: 5.2.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `feedback_forspecialist`
--

CREATE TABLE IF NOT EXISTS `feedback_forspecialist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from` varchar(500) DEFAULT NULL,
  `to` varchar(500) DEFAULT NULL,
  `user_full_name` varchar(500) DEFAULT NULL,
  `topic` varchar(500) DEFAULT NULL,
  `message_question` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Дамп данных таблицы `feedback_forspecialist`
--

INSERT INTO `feedback_forspecialist` (`id`, `from`, `to`, `user_full_name`, `topic`, `message_question`) VALUES
(1, 'user1@mail.ru', 'specialist1@mail.ru', 'Кондратьев Илья Дмитриевич', 'Очень важная инфа', 'Мой вопрос'),
(2, 'user2@mail.ru', 'specialist2@mail.ru', 'его имя', 'тема', 'сообщение'),
(3, 'asdasd@mail.ru', 'localt1@mail.ru', 'asdasd', 'Занести данные в бд', 'информация о пх файле'),
(4, 'asdasd@mail.ru', 'localt1@mail.ru', 'asdasd', 'Занести данные в бд', 'информация о пх файле'),
(5, 'asdasd@mail.ru', 'localt1@mail.ru', 'asdasd', 'привет', 'фыврпарпарарапра'),
(6, 'asdasd@mail.ru', 'localt1@mail.ru', 'asdasd', 'Занести данные в бд', 'сообщения отправлено наверно'),
(7, 'asdasd@mail.ru', 'localt1@mail.ru', 'asdasd', 'Занести данные в бд', 'сообщения отправлено наверно'),
(8, 'asdasd@mail.ru', 'localt1@mail.ru', 'asdasd', 'Занести данные в бд', 'сообщения отправлено наверно'),
(9, 'asdasd@mail.ru', 'localt1@mail.ru', 'asdasd', 'Занести данные в бд сейчас же', 'Тут пример работы дп'),
(10, 'asdasd@mail.ru', 'localt1@mail.ru', 'asdasd', 'Занести данные в бд', 'ыфвыфвфывфывфвывфы'),
(11, 'asdasd@mail.ru', 'localt1@mail.ru', 'asdasd', 'Занести данные в бд', 'Чтобы удалить аккаунт введите пароль '),
(12, 'asdasd@mail.ru', 'localt1@mail.ru', 'asdasd', 'Занести данные в бд сейчас же', '6453234566543245654345нпавваправап'),
(13, 'asdas@test.by', 'localt1@mail.ru', 'Кондратьев Илья Дмитриевич', 'Занести данные в бд сейчас же', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(14, 'asdas@test.by', 'localt1@mail.ru', 'Кондратьев Илья Дмитриевич', 'вопрос 1', 'мой вопрос');

-- --------------------------------------------------------

--
-- Структура таблицы `specialist1`
--

CREATE TABLE IF NOT EXISTS `specialist1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(355) DEFAULT NULL,
  `category` varchar(500) DEFAULT NULL,
  `experience` varchar(500) DEFAULT NULL,
  `mini_discription` text,
  `avatar` varchar(500) DEFAULT NULL,
  `speciality` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `deagre` varchar(500) DEFAULT NULL,
  `ranks` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `specialist1`
--

INSERT INTO `specialist1` (`id`, `full_name`, `category`, `experience`, `mini_discription`, `avatar`, `speciality`, `email`, `deagre`, `ranks`) VALUES
(1, 'Кондратьев Илья Дмитриевич', 'Высшая', '15 лет', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'imgspecialist/16386137731240x1240.jfif', 'Психолог', 'localt1@mail.ru', '  Высшая', 'Доцент'),
(2, 'Специалист 2', 'здесь категория', 'тут стаж', 'немного о специалисте', 'imgspecialist/1638613804it-specialist-xto-ce-de-vchitisja-zarobitok-default.jpg', 'тут специальность', 'asdas@mail.ru', ' тут степень', 'тут звания'),
(3, 'Специалист 3', 'здесь категория', 'тут стаж', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, ', 'imgspecialist/1638615351images.jfif', 'тут специальность', 'asdas@mail.ru', 'тут степень', 'тут звания'),
(4, 'Специалист 4', 'здесь категория', 'тут стаж', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the l', 'imgspecialist/16386153721240x1240.jfif', 'тут специальность', 'asdas@mail.ru', 'тут степень', 'тут звания'),
(5, 'Специалист 5', 'Тут категория', 'Тут опыт работы', 'фывввввввввввввввввввввввввввввввввввввввыфвфывфывф фывфыввввв\r\nввввввввввввввввввввввввввввввввввввввввввввввввввввв\r\nввв\r\nвввввввввввв\r\nввввввввввввв\r\nввввввввввввввввввввввввввввввввввввввввввввввв', 'imgspecialist/16386137731240x1240.jfif', 'тут специальность', 'тут почта', 'тут степень', 'тут звание'),
(6, 'Специалист 6', 'Тут категория', 'Тут опыт работы', 'фывввввввввввввввв ввввввв\r\nввввввввввввввв\r\nвввввввввввввввввввввввввв\r\nвввввввввв\r\nввввввввввввввввввв\r\nвввввввввввввввввввввв\r\nввввввввввввввввв\r\nввввввввввввввввввввввв\r\nвввввввввввввввввв\r\nввввввввввввввввввввввв\r\nвввввввввввввввввв\r\nввввввввввввввв\r\nввввввввввввввввввввввввв', 'imgspecialist/16386137731240x1240.jfif', 'тут специальность', 'тут почта', 'тут степень', 'тут звание'),
(7, 'Специалист 7', 'Тут категория', 'Тут опыт работы', 'asdasdasd adasd asdasdasd adczczc deaesefdgdfgdg gdgdsdfedsfsdf sdfsdfsdfsdffsdfsdf erwfdsvcfghsdfsdf asdadasdasdasdasd', 'imgspecialist/16386153721240x1240.jfif', 'тут специальность', 'тут почта', 'тут степень', 'тут звание');

-- --------------------------------------------------------

--
-- Структура таблицы `testall`
--

CREATE TABLE IF NOT EXISTS `testall` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(500) DEFAULT NULL,
  `test_name` varchar(500) DEFAULT NULL,
  `question1` varchar(500) DEFAULT NULL,
  `question2` varchar(500) DEFAULT NULL,
  `question3` varchar(500) DEFAULT NULL,
  `question4` varchar(500) DEFAULT NULL,
  `question5` varchar(500) DEFAULT NULL,
  `question6` varchar(500) DEFAULT NULL,
  `question7` varchar(500) DEFAULT NULL,
  `question8` varchar(500) DEFAULT NULL,
  `question9` varchar(500) DEFAULT NULL,
  `question10` varchar(500) DEFAULT NULL,
  `question11` varchar(500) DEFAULT NULL,
  `question12` varchar(500) DEFAULT NULL,
  `question13` varchar(500) DEFAULT NULL,
  `question14` varchar(500) DEFAULT NULL,
  `question15` varchar(500) DEFAULT NULL,
  `question16` varchar(500) DEFAULT NULL,
  `question17` varchar(500) DEFAULT NULL,
  `question18` varchar(500) DEFAULT NULL,
  `question19` varchar(500) DEFAULT NULL,
  `question20` varchar(500) DEFAULT NULL,
  `question21` varchar(500) DEFAULT NULL,
  `question22` varchar(500) DEFAULT NULL,
  `question23` varchar(500) DEFAULT NULL,
  `question24` varchar(500) DEFAULT NULL,
  `question25` varchar(500) DEFAULT NULL,
  `question26` varchar(500) DEFAULT NULL,
  `question27` varchar(500) DEFAULT NULL,
  `question28` varchar(500) DEFAULT NULL,
  `question29` varchar(500) DEFAULT NULL,
  `question30` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `testall`
--

INSERT INTO `testall` (`id`, `category`, `test_name`, `question1`, `question2`, `question3`, `question4`, `question5`, `question6`, `question7`, `question8`, `question9`, `question10`, `question11`, `question12`, `question13`, `question14`, `question15`, `question16`, `question17`, `question18`, `question19`, `question20`, `question21`, `question22`, `question23`, `question24`, `question25`, `question26`, `question27`, `question28`, `question29`, `question30`) VALUES
(1, 'Стресс', 'Тест на стрессоустойчивость', '1. Смятая страница газеты, которую вы хотите прочитать.', '2. Женщина в летах, одетая как молоденькая девушка.', '3. Чрезмерная близость собеседника при разговоре.', '4. Женщина, курящая на улице или в общественном месте.', '5. Человек, кашляющий в вашу сторону.', '6. Когда кто-то грызет ногти на ваших глазах.', '7. Когда кто-то смеется невпопад.', '8. Когда кто-то пытается учить вас, что и как делать.', '9. Когда любимая девушка (юноша) постоянно опаздывает.', '10. Когда в кинотеатре тот, кто сидит перед вами, все время вертится и обсуждает фильм.', '11. Когда вам пересказывают сюжет интересного романа, который вы только собираетесь прочесть.', '12. Когда вам дарят ненужные вещи.', '13. Громкий разговор в общественном транспорте.', '14. Слишком сильный запах духов.', '15. Человек, жестикулирующий во время разговора.', '16. Коллега, часто употребляющий иностранные слова.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, 'Тест айзенка', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, NULL, 'Метод люшера', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, 'Биографический опросник', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `test_download`
--

CREATE TABLE IF NOT EXISTS `test_download` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `test_name` varchar(500) DEFAULT NULL,
  `category` varchar(500) DEFAULT NULL,
  `type` varchar(500) DEFAULT NULL,
  `directory_file` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `test_download`
--

INSERT INTO `test_download` (`id`, `test_name`, `category`, `type`, `directory_file`) VALUES
(1, 'Тест Айзенка на IQ ', 'Интеллект', 'Программа', 'test_app/1639330523test aizenka.rar'),
(2, 'Психологические портрет ', 'Личностные', 'Программа', 'test_app/1639330560Vash psihologicheskiy portret.rar'),
(3, 'Тест Кеттелла ', 'Личностные', 'Программа', 'test_app/1639330576Test Kettela.rar'),
(4, 'Личностные ценности ', 'Личностные', 'Программа', 'test_app/1639330610Test lichnostnyh cennostey.rar'),
(5, 'Тест Люшера ', 'Личностные', 'Программа', 'test_app/1639330623Test Lyushera.rar');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(355) DEFAULT NULL,
  `login` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `avatar` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES
(1, 'Кондратьев Илья Дмитриевич', 'admin', 'test@local.ru', '202cb962ac59075b964b07152d234b70', 'uploads/1637008999438463.png'),
(2, 'Кондратьев Илья Дмитриевич', 'test1', 'asdas@test.by', '202cb962ac59075b964b07152d234b70', 'uploads/1637008999438463.png'),
(6, 'Иван Иванов Иванович', 'pool1', 'asdas@mail.ru', '202cb962ac59075b964b07152d234b70', 'uploads/1637442848hoang-phuc-1.jpg'),
(20, 'asdasd', 'tttt', 'asdasd@mail.ru', '202cb962ac59075b964b07152d234b70', 'uploads/1638444993maxresdefault.jpg'),
(21, 'opiup', 'gtgt1', 'asd@kail.ru', '202cb962ac59075b964b07152d234b70', 'uploads/1638602813hoang-phuc-1.jpg'),
(22, 'Иванов Иван Иванович', 'uuu1', 'asdad@gmail.com', '202cb962ac59075b964b07152d234b70', 'uploads/16394032901240x1240.jfif'),
(23, 'Иванов Иван Иванович', 'uuu2', 'asdad@gmail.com', '202cb962ac59075b964b07152d234b70', 'uploads/1639403870images.jfif');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
