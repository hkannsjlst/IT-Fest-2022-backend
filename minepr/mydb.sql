-- phpMyAdmin SQL Dump

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mydb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `infa`
--

CREATE TABLE `infa` (
  `id` int(11) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `infa`
--

INSERT INTO `infa` (`id`, `lastname`, `firstname`, `gender`, `email`) VALUES
(1, 'Над сервером  уже идёт и будет идти активная работа. Релиз состоится в следующем году. Это будет самый уникальный Minecraft сервер', 'Разработка', 'Юзер ', 'feature-support.jpg'),
(2, 'Игровые модификации значительно изменят ваше представление об игре. Они позволят добывать новые типы ресурсов для развития важных отраслей жизни', 'Модификации', 'Админ', 'feature-gamepad.jpg'),
(3, 'Каждый регион обладает уникальными ресурсами. Участники будут выстраивать торговые отношения для взаимной выгоды', 'Кооператив', 'Админ', 'feature-community.jpg'),
(4, 'Вы можете не бояться, что сервер упадёт в один момент. Потому что сервер открывается в рамках Всероссийского Фестиваля киберспорта', 'Защита от Ddos', 'Админ', 'feature-protect.jpg'),
(5, 'Скучать не придётся! Команда организаторов проводит развлекательные события - командные головоломки, королевские битвы, jumping-пазлы', 'Мини игры', 'Админ', 'feature-ranking.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `mods`
--

CREATE TABLE `mods` (
  `id` int(11) NOT NULL,
  `firstname` varchar(500) NOT NULL,
  `lastname` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `age` varchar(100) NOT NULL,
  `ker` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `mods`
--

INSERT INTO `mods` (`id`, `firstname`, `lastname`, `email`, `age`, `ker`, `gender`) VALUES
(5, 'Plus the End', 'Мод изменит энд мир, сделав его значительно более разнообразным да и просто красивым. В таком биоме хочется жить теперь, ибо выглядит он очень уютно', 'Если в обычный версии это просто измерение для босса, нежели для игры и эксплоринга, то тут это уже интересный, а самое главное - красивый биом со своими мобами. В него теперь стоит сходить только лишь ради его внешнего вида, ибо выглядеть он стал сказочно.', 'https://ru-minecraft.ru/mody-minecraft/72257-plus-the-end.html', 'end.jpg', 'Админ'),
(6, 'Druidcraft', 'Мод сделан на тему друидов, на данный момент он не добавляет кучу всего, но уже есть кое-что интересное. К примеру, из костей можно будет сделать себе сет брони', 'Из новой травы можно сделать верёвки. Помимо вещей, мод добавит в игру один новый биом - тёмные лес с высокими деревьями. В подземельях можно будет найти новые руды, но из них пока что ничего нельзя будет скрафтить, но за них дают много опыта, что уже плюс. Ну и, наконец, новые декоративные блоки из дерева.', 'https://ru-minecraft.ru/mody-minecraft/page/2/', 'mod3.jpg', 'Админ');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `firstname` varchar(100) CHARACTER SET utf8 NOT NULL,
  `lastname` varchar(255) CHARACTER SET utf32 NOT NULL,
  `gender` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `gender`) VALUES
(47, 'end.jpg', 'XYZ 1465.297 /6.000 /-123.50', 'Админ'),
(48, 'donate-banner.jpg', 'XYZ', 'Админ');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `infa`
--
ALTER TABLE `infa`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `mods`
--
ALTER TABLE `mods`
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
-- AUTO_INCREMENT для таблицы `infa`
--
ALTER TABLE `infa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `mods`
--
ALTER TABLE `mods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
