-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июл 03 2017 г., 23:02
-- Версия сервера: 5.7.18-log
-- Версия PHP: 7.0.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `biglib`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles_it`
--

CREATE TABLE `articles_it` (
  `id` int(10) NOT NULL,
  `article` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `section` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(150) NOT NULL,
  `author` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `material` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img_one` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img_two` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img_three` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img_four` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img_five` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img_six` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img_seven` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img_eight` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img_nine` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img_ten` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_one` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_two` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_three` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_four` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_five` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_six` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_seven` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_eight` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_nine` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_ten` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `comment` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `articles_it`
--

INSERT INTO `articles_it` (`id`, `article`, `date`, `section`, `name`, `author`, `material`, `link`, `img_one`, `img_two`, `img_three`, `img_four`, `img_five`, `img_six`, `img_seven`, `img_eight`, `img_nine`, `img_ten`, `file_one`, `file_two`, `file_three`, `file_four`, `file_five`, `file_six`, `file_seven`, `file_eight`, `file_nine`, `file_ten`, `comment`) VALUES
(90, 'articles_it', '2017-07-03 22:08:00', 'htmlAndCss', 'Name', 'Author', 'Другое', 'Link', '1.png', '2.png', '3.png', '4.png', '5.png', '6.png', '7.png', '8.png', '9.png', '10.png', '', '', '', '', '', '', '', '', '', '', 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\r\nSed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.');

-- --------------------------------------------------------

--
-- Структура таблицы `articles_lists`
--

CREATE TABLE `articles_lists` (
  `id` int(10) NOT NULL,
  `article` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `section` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(150) NOT NULL,
  `author` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `material` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img_one` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img_two` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img_three` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img_four` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img_five` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img_six` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img_seven` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img_eight` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img_nine` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img_ten` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_one` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_two` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_three` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_four` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_five` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_six` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_seven` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_eight` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_nine` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_ten` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `comment` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `articles_lists`
--

INSERT INTO `articles_lists` (`id`, `article`, `date`, `section`, `name`, `author`, `material`, `link`, `img_one`, `img_two`, `img_three`, `img_four`, `img_five`, `img_six`, `img_seven`, `img_eight`, `img_nine`, `img_ten`, `file_one`, `file_two`, `file_three`, `file_four`, `file_five`, `file_six`, `file_seven`, `file_eight`, `file_nine`, `file_ten`, `comment`) VALUES
(136, 'articles_lists', '2017-07-03 22:25:00', 'Films', 'Name', 'Author', 'Книга', 'Link', '111.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\r\nSed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.');

-- --------------------------------------------------------

--
-- Структура таблицы `articles_marketing`
--

CREATE TABLE `articles_marketing` (
  `id` int(10) NOT NULL,
  `article` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `section` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(160) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `material` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img_one` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img_two` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img_three` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img_four` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img_five` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img_six` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img_seven` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img_eight` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img_nine` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img_ten` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_one` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_two` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_three` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_four` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_five` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_six` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_seven` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_eight` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_nine` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_ten` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `comment` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `articles_marketing`
--

INSERT INTO `articles_marketing` (`id`, `article`, `date`, `section`, `name`, `author`, `material`, `link`, `img_one`, `img_two`, `img_three`, `img_four`, `img_five`, `img_six`, `img_seven`, `img_eight`, `img_nine`, `img_ten`, `file_one`, `file_two`, `file_three`, `file_four`, `file_five`, `file_six`, `file_seven`, `file_eight`, `file_nine`, `file_ten`, `comment`) VALUES
(23, 'articles_marketing', '2017-07-03 22:18:00', 'Marketing', 'Name', 'Author', 'Книга', 'Link', '1.png', '2.png', '3.png', '4.png', '5.png', '6.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\r\nSed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `articles_space`
--

CREATE TABLE `articles_space` (
  `id` int(10) NOT NULL,
  `article` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `section` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `material` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img_one` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img_two` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img_three` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img_four` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img_five` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img_six` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img_seven` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img_eight` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img_nine` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `img_ten` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_one` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_two` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_three` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_four` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_five` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_six` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_seven` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_eight` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_nine` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_ten` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `comment` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `articles_space`
--

INSERT INTO `articles_space` (`id`, `article`, `date`, `section`, `name`, `author`, `material`, `link`, `img_one`, `img_two`, `img_three`, `img_four`, `img_five`, `img_six`, `img_seven`, `img_eight`, `img_nine`, `img_ten`, `file_one`, `file_two`, `file_three`, `file_four`, `file_five`, `file_six`, `file_seven`, `file_eight`, `file_nine`, `file_ten`, `comment`) VALUES
(90, 'articles_space', '2017-07-03 22:24:00', 'Films_space', 'Name', 'Author', 'Книга', 'Link', '11.png', '22.png', '33.png', '44.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\r\nSed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit, amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.');

-- --------------------------------------------------------

--
-- Структура таблицы `lib_users`
--

CREATE TABLE `lib_users` (
  `id` int(11) NOT NULL,
  `login` varchar(25) NOT NULL,
  `pass` varchar(103) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles_it`
--
ALTER TABLE `articles_it`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `articles_lists`
--
ALTER TABLE `articles_lists`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `articles_marketing`
--
ALTER TABLE `articles_marketing`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `articles_space`
--
ALTER TABLE `articles_space`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `lib_users`
--
ALTER TABLE `lib_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles_it`
--
ALTER TABLE `articles_it`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
--
-- AUTO_INCREMENT для таблицы `articles_lists`
--
ALTER TABLE `articles_lists`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;
--
-- AUTO_INCREMENT для таблицы `articles_marketing`
--
ALTER TABLE `articles_marketing`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT для таблицы `articles_space`
--
ALTER TABLE `articles_space`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT для таблицы `lib_users`
--
ALTER TABLE `lib_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
