<?php
//
if (defined('NEWBB_ADMIN_DEFINED')) {
    return;
} else {
    define('NEWBB_ADMIN_DEFINED', true);
}
//%%%%%%    File Name  index.php       %%%%%
define('_AM_NEWBB_FORUMCONF', 'Настройка форума');
define('_AM_NEWBB_ADDAFORUM', 'Добавить форум');
define('_AM_NEWBB_SYNCFORUM', 'Синхронизация форума');
define('_AM_NEWBB_REORDERFORUM', 'Изменение порядка');
define('_AM_NEWBB_FORUM_MANAGER', 'Форумы');
define('_AM_NEWBB_PRUNE_TITLE', 'Очистка');
define('_AM_NEWBB_CATADMIN', 'Категории');
define('_AM_NEWBB_GENERALSET', 'Настройки модуля');
define('_AM_NEWBB_MODULEADMIN', 'Администратор модуля:');
define('_AM_NEWBB_HELP', 'Помощь');
define('_AM_NEWBB_ABOUT', 'О модуле');
define('_AM_NEWBB_BOARDSUMMARY', 'Статистика форума');
define('_AM_NEWBB_PENDING_POSTS_FOR_AUTH', 'Сообщения, ожидающие проверки');
define('_AM_NEWBB_POSTID', 'ID публикации');
define('_AM_NEWBB_POSTDATE', 'Дата публикации');
define('_AM_NEWBB_POSTER', 'Автор');
define('_AM_NEWBB_TOPICS', 'Темы');
define('_AM_NEWBB_SHORTSUMMARY', 'Общий раздел');
define('_AM_NEWBB_TOTALPOSTS', 'Всего сообщений');
define('_AM_NEWBB_TOTALTOPICS', 'Всего тем');
define('_AM_NEWBB_TOTALVIEWS', 'Всего просмотров');
define('_AM_NEWBB_BLOCKS', 'Блоки');
define('_AM_NEWBB_SUBJECT', 'Предмет');
define('_AM_NEWBB_APPROVE', 'Утвердить сообщение');
define('_AM_NEWBB_APPROVETEXT', 'Содержание этой публикации');
define('_AM_NEWBB_POSTAPPROVED', 'Сообщение одобрено');
define('_AM_NEWBB_POSTNOTAPPROVED', 'Сообщение НЕ одобрено');
define('_AM_NEWBB_POSTSAVED', 'Сообщение сохранено');
define('_AM_NEWBB_POSTNOTSAVED', 'Сообщение не было сохранено');
define('_AM_NEWBB_TOPICAPPROVED', 'Тема одобрена');
define('_AM_NEWBB_TOPICNOTAPPROVED', 'Тема не утверждена');
define('_AM_NEWBB_TOPICID', 'ID темы');
define('_AM_NEWBB_ORPHAN_TOPICS_FOR_AUTH', 'Авторизация неподтвержденных тем');
define('_AM_NEWBB_DEL_ONE', 'Удалить только этот пост');
define('_AM_NEWBB_POSTSDELETED', 'Выбранный пост удален.');
define('_AM_NEWBB_NOAPPROVEPOST', 'В настоящее время нет сообщений, ожидающих проверки.');
define('_AM_NEWBB_SUBJECTC', 'Предмет:');
define('_AM_NEWBB_MESSAGEICON', 'Иконка сообщения:');
define('_AM_NEWBB_MESSAGEC', 'Сообщение:');
define('_AM_NEWBB_CANCELPOST', 'Отменить сообщение');
define('_AM_NEWBB_GOTOMOD', 'Перейти к модулю');
define('_AM_NEWBB_PREFERENCES', 'Настройки модуля');
define('_AM_NEWBB_POLLMODULE', 'Модуль голосования Xoops');
define('_AM_NEWBB_POLL_OK', 'Готов к использованию');
define('_AM_NEWBB_GDLIB', 'GD библиотека:');
define('_AM_NEWBB_AUTODETECTED', 'Автоопределение: ');
define('_AM_NEWBB_AVAILABLE', 'Доступен');
define('_AM_NEWBB_NOTAVAILABLE', '<span style="color:red;">недоступен. </span>');
define('_AM_NEWBB_NOTWRITABLE', '<span style="color:red;">Недоступен для записи</span>');
define('_AM_NEWBB_IMAGEMAGICK', 'ImageMagicK:');
define('_AM_NEWBB_IMAGEMAGICK_NOTSET', 'Не задано');
define('_AM_NEWBB_ATTACHPATH', 'Путь для хранения вложений');
define('_AM_NEWBB_THUMBPATH', 'Путь для прикрепленных изображений');
//define('_AM_NEWBB_RSSPATH', "Путь для RSS-канала");
define('_AM_NEWBB_REPORT', 'Отчеты');
define('_AM_NEWBB_REPORT_PENDING', 'Ожидающие отчеты');
define('_AM_NEWBB_REPORT_PROCESSED', 'Обработанные отчеты');
define('_AM_NEWBB_CREATETHEDIR', 'Создать это');
define('_AM_NEWBB_SETMPERM', 'Установить разрешения');
define('_AM_NEWBB_DIRCREATED', 'Каталог был создан');
define('_AM_NEWBB_DIRNOTCREATED', 'Невозможно создать каталог');
define('_AM_NEWBB_PERMSET', 'Разрешение установлено');
define('_AM_NEWBB_PERMNOTSET', 'Разрешение не может быть установлено');
define('_AM_NEWBB_DIGEST', 'Создать новое уведомление');
define('_AM_NEWBB_DIGEST_HELP_1', 'Позволяет создавать и рассылать уведомления о интересных темах.');
define('_AM_NEWBB_DIGEST_HELP_2', 'Создать рассылку возможно только после того, как тема будет отмечена как \'Интересная\'.');
define('_AM_NEWBB_DIGEST_HELP_3', 'Рассылка производится только пользователям подписанным на уведомление о интересных темах.');
define('_AM_NEWBB_DIGEST_HELP_4', 'После создания и рассылки, созданные сообщения не удаляйте. В противном случае они будут сгенерированны повторно.');
define('_AM_NEWBB_DIGEST_HELP_AUTO_DIGEST', 'Для настройки автоматического создания и рассылки Интересных тем Вам необходимо создать задачу cron на Вашем сервере.<br>Напимер для *NIX систем: <strong>0 6 * * * wget --post-data \'foo=bar\' https://example.com/modules/newbb/digest.php</strong><br>В данном примере скрипт будет запускаться каждый день в 6.00 и проверять, есть ли новые Интересные темы. Если таковых не найдено, рассылки производиться не будет.<br>Если по какой либо причине у Вас нет возможности создать задачу, то возможно создавать и делать рассылку на этой странице в ручную, нажав на кнопку выше.<br>Обратите внимание на то, что не рекмендуется удалять созданные рассылки, в противном случае они будут созданы и отправлены повторно.');
//define('_AM_NEWBB_DIGEST_PAST', '<span style="color:red;">Должен быть отправлен %d минут назад</span>');
//define('_AM_NEWBB_DIGEST_NEXT', 'Необходимо отправить в %d минут');
//define('_AM_NEWBB_DIGEST_ARCHIVE', 'Архив интересных');
define('_AM_NEWBB_DIGEST_SENT', 'Отправлено уведомление');
define('_AM_NEWBB_DIGEST_NOT_SENT', 'Уведомление не отправлено');
define('_AM_NEWBB_DIGEST_FAILED', 'Интересных сообщений на данный момент нет');
define('_AM_NEWBB_DIGEST_CONFIRM', 'Создать и отправить новое уведомление?');
// admin_forum_manager.php
define('_AM_NEWBB_NAME', 'Имя форума');
define('_AM_NEWBB_CREATEFORUM', 'Создать форум');
define('_AM_NEWBB_EDIT', 'Редактировать');
define('_AM_NEWBB_CLEAR', 'Очистить');
define('_AM_NEWBB_DELETE', 'Удалить');
define('_AM_NEWBB_ADD', 'Добавить');
define('_AM_NEWBB_MOVE', 'Переехать');
define('_AM_NEWBB_ORDER', 'Порядок');
define('_AM_NEWBB_TWDAFAP', 'Примечание. Это приведет к удалению форума и всех сообщений в нем.<br /><br />ВНИМАНИЕ: Вы действительно хотите удалить этот форум?');
define('_AM_NEWBB_FORUMREMOVED', 'Форум удален.');
define('_AM_NEWBB_CREATENEWFORUM', 'Создать новый форум');
define('_AM_NEWBB_EDITTHISFORUM', 'Редактирование форума:');
define('_AM_NEWBB_SET_FORUMORDER', 'Установить позицию форума:');
define('_AM_NEWBB_ALLOWPOLLS', 'Разрешить опросы:');
define('_AM_NEWBB_ATTACHMENT_SIZE', 'Максимальный размер KB:');
define('_AM_NEWBB_ALLOWED_EXTENSIONS', "Разрешенные расширения:<span style='font-size: xx-small; font-weight: normal; display: block;'>'*' - никаких ограничений.<br /> Расширения, разделены - '|'</span>");
define('_AM_NEWBB_ALLOW_ATTACHMENTS', 'Разрешить вложения:');
define('_AM_NEWBB_ALLOWHTML', 'Разрешить HTML:');
define('_AM_NEWBB_YES', 'Да');
define('_AM_NEWBB_NO', 'Нет');
// irmtfan remove define('_AM_NEWBB_ALLOWSIGNATURES', "Разрешить подписи:");
define('_AM_NEWBB_HOTTOPICTHRESHOLD', 'Горячая тема:');
//define('_AM_NEWBB_POSTPERPAGE', "Сообщений на страницу:<span style='font-size: xx-small; font-weight: normal; display: block;'>(Это количество сообщений<br /> по теме, которая будет<br /> отображается на странице.)</span>");
//define('_AM_NEWBB_TOPICPERFORUM', "Темы для форума:<span style='font-size: xx-small; font-weight: normal; display: block;'>(Это количество тем<br /> на форуме, который будет<br /> отображается на странице.)</span>");
//define('_AM_NEWBB_SHOWNAME', "Заменить имя пользователя на реальное имя:");
//define('_AM_NEWBB_SHOWICONSPANEL', "Показать панель значков:");
//define('_AM_NEWBB_SHOWSMILIESPANEL', "Показать панель смайликов:");
define('_AM_NEWBB_MODERATOR_REMOVE', 'Удалить текущих модераторов');
define('_AM_NEWBB_MODERATOR_ADD', 'Добавить модераторов');
// admin_cat_manager.php
define('_AM_NEWBB_SETCATEGORYORDER', 'Установить положение категории:');
define('_AM_NEWBB_ACTIVE', 'Активный');
define('_AM_NEWBB_INACTIVE', 'Неактивный');
define('_AM_NEWBB_STATE', 'Статус:');
define('_AM_NEWBB_CATEGORYDESC', 'Описание категории:');
define('_AM_NEWBB_SHOWDESC', 'Показать описание?');
define('_AM_NEWBB_IMAGE', 'Изображение:');
//define('_AM_NEWBB_SPONSORIMAGE', 'Спонсорское изображение:');
define('_AM_NEWBB_SPONSORLINK', 'Спонсорская ссылка:');
define('_AM_NEWBB_DELCAT', 'Удалить категорию');
define('_AM_NEWBB_WAYSYWTDTTAL', 'Примечание. Это НЕ удалит форумы под категорией, Вы должны сделать это через раздел «Редактировать форум».<br><br>ПРЕДУПРЕЖДЕНИЕ: Вы действительно хотите удалить эту категорию?');
//%%%%%%        File Name  admin_forums.php           %%%%%
define('_AM_NEWBB_FORUMNAME', 'Имя форума:');
define('_AM_NEWBB_FORUMDESCRIPTION', 'Описание форума:<br><span style="font-size:xx-small;font-weight:normal;display:block;">Описание будет показано на главной странице форума с ограничением в 440 знаков. Полное описание будет показано на странице форума.<br>Обратите внимание на использование ссылок и изображений в описании.<br>Изменить количество символов возможно в конфигурации модуля.</span>');
define('_AM_NEWBB_MODERATOR', 'Модератор(ы):');
define('_AM_NEWBB_REMOVE', 'Удалить');
define('_AM_NEWBB_CATEGORY', 'Категория:');
define('_AM_NEWBB_DATABASEERROR', 'Ошибка базы данных');
define('_AM_NEWBB_CATEGORYUPDATED', 'Категория обновлена.');
define('_AM_NEWBB_EDITCATEGORY', 'Редактирование категории:');
define('_AM_NEWBB_CATEGORYTITLE', 'Название категории:');
define('_AM_NEWBB_CATEGORYCREATED', 'Категория создана.');
define('_AM_NEWBB_CREATENEWCATEGORY', 'Создать новую категорию');
define('_AM_NEWBB_FORUMCREATED', 'Форум создан.');
define('_AM_NEWBB_ACCESSLEVEL', 'Глобальный уровень доступа:');
define('_AM_NEWBB_CATEGORY1', 'Категория');
define('_AM_NEWBB_FORUMUPDATE', 'Настройки форума обновлены');
define('_AM_NEWBB_FORUM_ERROR', 'ОШИБКА: Ошибка настройки форума');
define('_AM_NEWBB_CLICKBELOWSYNC', 'Нажав кнопку ниже, Вы сможете синхронизировать свои форумы и темы с данными из базы данных. Используйте этот раздел, когда Вы замечаете проблемы в списках тем и форумов.');
define('_AM_NEWBB_SYNCHING', 'Синхронизация индекса и тем форума (это может занять некоторое время)');
define('_AM_NEWBB_CATEGORYDELETED', 'Категория удалена.');
define('_AM_NEWBB_MOVE2CAT', 'Перейти к категории:');
define('_AM_NEWBB_MAKE_SUBFORUM_OF', 'Сделать подфорумом:');
define('_AM_NEWBB_MSG_FORUM_MOVED', 'Форум переехал!');
define('_AM_NEWBB_MSG_ERR_FORUM_MOVED', 'Не удалось переместить форум.');
define('_AM_NEWBB_SELECT', '< Select >');
define('_AM_NEWBB_MOVETHISFORUM', 'Переместить этот форум');
define('_AM_NEWBB_MERGE', 'Слияние');
define('_AM_NEWBB_MERGETHISFORUM', 'Объединить этот форум');
define('_AM_NEWBB_MERGETO_FORUM', 'Объединить этот форум с:');
define('_AM_NEWBB_MSG_FORUM_MERGED', 'Форум объединился!');
define('_AM_NEWBB_MSG_ERR_FORUM_MERGED', 'Не удалось объединить форум.');
//%%%%%%        File Name  admin_forum_reorder.php           %%%%%
define('_AM_NEWBB_REORDERID', 'ID');
define('_AM_NEWBB_REORDERTITLE', 'Заголовок');
define('_AM_NEWBB_REORDERWEIGHT', 'Расположение по весу');
define('_AM_NEWBB_SETFORUMORDER', 'Задать расположение');
define('_AM_NEWBB_BOARDREORDER', 'Форум переупорядочен по Вашей спецификации');
// admin_permission.php
define('_AM_NEWBB_PERMISSIONS_TO_THIS_FORUM', 'Права доступа на тему для этого форума');
define('_AM_NEWBB_CAT_ACCESS', 'Доступ к категории');
define('_AM_NEWBB_CAN_ACCESS', 'Может получить доступ к форуму');
define('_AM_NEWBB_CAN_VIEW', 'Может просматривать содержимое темы');
define('_AM_NEWBB_CAN_POST', 'Может начинать новые темы');
define('_AM_NEWBB_CAN_REPLY', 'Может ответить');
define('_AM_NEWBB_CAN_EDIT', 'Может редактировать собственный пост');
define('_AM_NEWBB_CAN_DELETE', 'Может удалить свой пост');
define('_AM_NEWBB_CAN_ADDPOLL', 'Может добавить опрос');
define('_AM_NEWBB_CAN_VOTE', 'Может голосовать');
define('_AM_NEWBB_CAN_ATTACH', 'Может загрузить приложение');
define('_AM_NEWBB_CAN_NOAPPROVE', 'Может отправить напрямую');
define('_AM_NEWBB_CAN_TYPE', 'Может использовать тип темы');
define('_AM_NEWBB_CAN_HTML', 'Может использовать (отключать/включать) HTML в сообщениях');//irmtfan revised
define('_AM_NEWBB_CAN_SIGNATURE', 'Может использовать (отключать/включать) подпись. По умолчанию устанавливается из профиля XOOPS.');//irmtfan revised
define('_AM_NEWBB_ACTION', 'Действие');
define('_AM_NEWBB_PERM_TEMPLATE', 'Установить шаблон прав доступа по умолчанию');
define('_AM_NEWBB_PERM_TEMPLATE_DESC', 'Отредактируйте следующий шаблон прав доступа, чтобы его можно было применить к форуму или к паре форумов');
define('_AM_NEWBB_PERM_FORUMS', 'Выберите форум');
define('_AM_NEWBB_PERM_TEMPLATE_CREATED', 'Был создан шаблон прав доступа');
define('_AM_NEWBB_PERM_TEMPLATE_ERROR', 'Ошибка при создании шаблона прав доступа');
define('_AM_NEWBB_PERM_TEMPLATEAPP', 'Применить права доступа по умолчанию');
define('_AM_NEWBB_PERM_TEMPLATE_APPLIED', 'Права доступа по умолчанию были применены к форумам');
define('_AM_NEWBB_PERM_ACTION', 'Установка прав доступа');
define('_AM_NEWBB_PERM_ACTION_HELP', 'Позволяет установить права доступа для каждой функции и группы');
define('_AM_NEWBB_PERM_ACTION_HELP_TEMPLAT', 'Позволяет создать шаблон прав доступ для автоматической установки при создании форума.');
define('_AM_NEWBB_PERM_ACTION_HELP_APPLY', 'Позволяет применить шаблон прав доступа к уже созданным форумам.');
define('_AM_NEWBB_PERM_SETBYGROUP', 'Установка прав доступа непосредственно по группам');
// admin_forum_prune.php
define('_AM_NEWBB_PRUNE_RESULTS_TITLE', 'Очистить результаты');
define('_AM_NEWBB_PRUNE_RESULTS_TOPICS', 'Очистить темы');
define('_AM_NEWBB_PRUNE_RESULTS_POSTS', 'Очистить сообщения');
define('_AM_NEWBB_PRUNE_RESULTS_FORUMS', 'Очистить форумы');
define('_AM_NEWBB_PRUNE_STORE', 'Сохранить сообщения в выбранном форуме, а не удаляйте их (например: Архив)');
define('_AM_NEWBB_PRUNE_ARCHIVE', 'Сохранить копию сообщений в Архиве');
define('_AM_NEWBB_PRUNE_FORUMSELERROR', 'Вы не выбрали форум(ы)');
define('_AM_NEWBB_PRUNE_DAYS', 'Удалить темы без ответов:');
define('_AM_NEWBB_PRUNE_FORUMS', 'Какие форумы будут очищены');
define('_AM_NEWBB_PRUNE_STICKY', 'Сохранить приклеенные темы');
define('_AM_NEWBB_PRUNE_DIGEST', 'Сохранить интересные темы');
define('_AM_NEWBB_PRUNE_LOCK', 'Сохранить закрытые темы');
define('_AM_NEWBB_PRUNE_HOT', 'Сохранить темы с большим количеством ответов');
define('_AM_NEWBB_PRUNE_SUBMIT', 'Ok');
define('_AM_NEWBB_PRUNE_RESET', 'Сброс');
define('_AM_NEWBB_PRUNE_YES', 'Да');
define('_AM_NEWBB_PRUNE_NO', 'Нет');
define('_AM_NEWBB_PRUNE_WEEK', 'Неделя');
define('_AM_NEWBB_PRUNE_2WEEKS', 'Две недели');
define('_AM_NEWBB_PRUNE_MONTH', 'Месяц');
define('_AM_NEWBB_PRUNE_2MONTH', 'Два месяца');
define('_AM_NEWBB_PRUNE_4MONTH', 'Четыре месяца');
define('_AM_NEWBB_PRUNE_YEAR', 'Год');
define('_AM_NEWBB_PRUNE_2YEARS', '2 года');
// About.php constants
define('_AM_NEWBB_AUTHOR_INFO', 'Информация об авторе');
define('_AM_NEWBB_AUTHOR_NAME', 'Автор');
define('_AM_NEWBB_AUTHOR_WEBSITE', 'Веб-сайт автора');
define('_AM_NEWBB_AUTHOR_EMAIL', 'E-Mail автора');
define('_AM_NEWBB_AUTHOR_CREDITS', 'Кредиты');
define('_AM_NEWBB_MODULE_INFO', 'Информация о развитии модуля');
define('_AM_NEWBB_MODULE_STATUS', 'Статус');
define('_AM_NEWBB_MODULE_DEMO', 'Демо-сайт');
define('_AM_NEWBB_MODULE_SUPPORT', 'Официальный сайт поддержки');
define('_AM_NEWBB_MODULE_BUG', 'Сообщить об ошибке для этого модуля');
define('_AM_NEWBB_MODULE_FEATURE', 'Предложите новую функцию для этого модуля');
define('_AM_NEWBB_MODULE_DISCLAIMER', 'Отказ от ответственности');
define('_AM_NEWBB_AUTHOR_WORD', 'Авторское слово');
define('_AM_NEWBB_BY', 'От');
define('_AM_NEWBB_AUTHOR_WORD_EXTRA', 'Дополнительные слова по модулю');
// admin_report.php
define('_AM_NEWBB_REPORTADMIN', 'Менеджер отчетов');
define('_AM_NEWBB_REPORTADMIN_HELP', 'Позволяет просмотреть и обработать обращение пользователей на сообщения других пользователей, которые показались им не соответствующими правилам форума и т.д.');
define('_AM_NEWBB_PROCESSEDREPORT', 'Просмотр обработанных отчетов');
define('_AM_NEWBB_PROCESSREPORT', 'Просмотр новых отчетов');
define('_AM_NEWBB_REPORTTITLE', 'Заголовок отчета');
define('_AM_NEWBB_REPORTEXTRA', 'Дополнительно');
define('_AM_NEWBB_REPORTPOST', 'Сообщение отчета');
define('_AM_NEWBB_REPORTTEXT', 'Текст отчета');
define('_AM_NEWBB_REPORTMEMO', 'Технологическая записка');
// admin_report.php
define('_AM_NEWBB_DIGESTADMIN', 'Менеджер интересных тем');
define('_AM_NEWBB_DIGESTCONTENT', 'Содержание интересных тем');
// admin_votedata.php
define('_AM_NEWBB_VOTE_RATINGINFOMATION', 'Информация для голосования');
define('_AM_NEWBB_VOTE_TOTALVOTES', 'Всего голосов: ');
define('_AM_NEWBB_VOTE_REGUSERVOTES', 'Зарегистрированные пользователи: %s');
define('_AM_NEWBB_VOTE_ANONUSERVOTES', 'Анонимные пользователи: %s');
define('_AM_NEWBB_VOTE_USER', 'Пользователь');
define('_AM_NEWBB_VOTE_IP', 'Адрес IP');
define('_AM_NEWBB_VOTE_USERAVG', 'Средний рейтинг пользователей');
define('_AM_NEWBB_VOTE_TOTALRATE', 'Общий рейтинг');
define('_AM_NEWBB_VOTE_DATE', 'Отправлено');
define('_AM_NEWBB_VOTE_RATING', 'Рейтинг');
define('_AM_NEWBB_VOTE_NOREGVOTES', 'Нет зарегистрированных пользователей');
define('_AM_NEWBB_VOTE_NOUNREGVOTES', 'Нет незарегистрированных пользователей');
define('_AM_NEWBB_VOTEDELETED', 'Данные голосования удалены.');
define('_AM_NEWBB_VOTE_ID', 'ID');
define('_AM_NEWBB_VOTE_FILETITLE', 'Название темы');
define('_AM_NEWBB_VOTE_DISPLAYVOTES', 'Информация о данных голосования');
define('_AM_NEWBB_VOTE_NOVOTES', 'Информация о данных голосования');
define('_AM_NEWBB_VOTE_DELETE', 'Нет голосов пользователей для удаления');
define('_AM_NEWBB_VOTE_DELETEDSC', '<strong>Удалить</strong> выбранную информацию о голосовании из базы данных.');
// admin_type_manager.php
define('_AM_NEWBB_TYPE_ADD', 'Добавить типы');
define('_AM_NEWBB_TYPE_ADD_ERR', 'Ошибка. Добавьте типы');
define('_AM_NEWBB_TYPE_TEMPLATE', 'Шаблоны типов');
define('_AM_NEWBB_TYPE_TEMPLATE_ERR', 'Ошибка. Установите порядок шаблонов');
define('_AM_NEWBB_TYPE_TEMPLATE_APPLY', 'Применить шаблон');
define('_AM_NEWBB_TYPE_FORUM', 'Выбрать тип для форума');
define('_AM_NEWBB_TYPE_FORUM_ERR', 'Ошибка. Необходимо выбрать форум а не категорию.');
define('_AM_NEWBB_TYPE_NAME', 'Наименование типа');
define('_AM_NEWBB_TYPE_COLOR', 'Цвет');
define('_AM_NEWBB_TYPE_DESCRIPTION', 'Описание');
define('_AM_NEWBB_TYPE_ORDER', 'Порядок');
define('_AM_NEWBB_TYPE_LIST', 'Список типов');
define('_AM_NEWBB_TODEL_TYPE', 'Вы действительно хотите удалить типы: [%s]?');
define('_AM_NEWBB_TYPE_EDITFORUM_DESC', 'Данные еще не сохранены. Вы должны нажать на \'Отправить\', чтобы сохранить.');
define('_AM_NEWBB_TYPE_ORDER_DESC', 'Установите порядок шаблонов. Если установлен 0, то шаблон неактивен и его невозможно будет использовать.');
define('_AM_NEWBB_TYPE_HELP', 'Позволяет создать \'Типы\' форумов, для выделения тем форума. Например: <strong style="color:blue;">[Важное]</strong>, <strong style="color:red;">[ВНИМАНИЕ]</strong> и т.д.');
// admin_synchronization.php
define('_AM_NEWBB_SYNC_TYPE_FORUM', 'Данные форума');
define('_AM_NEWBB_SYNC_TYPE_TOPIC', 'Данные темы');
define('_AM_NEWBB_SYNC_TYPE_POST', 'Данные поста');
define('_AM_NEWBB_SYNC_TYPE_USER', 'Данные пользователя');
define('_AM_NEWBB_SYNC_TYPE_STATS', 'Информация о статистике');
define('_AM_NEWBB_SYNC_TYPE_MISC', 'MISC');
define('_AM_NEWBB_SYNC_ITEMS', 'Элементы для каждого цикла: ');
define('_AM_NEWBB_ALLOW_SUBJECT_PREFIX', 'Разрешить префиксы Thread?');
define('_AM_NEWBB_ALLOW_SUBJECT_PREFIX_DESC', 'Это позволяет добавлять префиксы к имени темы.');
define('_AM_NEWBB_GROUPMOD_TITLE', 'Добавить модераторов в группу');
define('_AM_NEWBB_GROUPMOD_TITLEDESC', 'Позволяет установить пользователей определенных групп в качестве модераторов');
define('_AM_NEWBB_GROUPMOD_ALLFORUMS', 'Все форумы');
define('_AM_NEWBB_GROUPMOD_ADDMOD', 'Модераторы успешно зарегистрированы.');
define('_AM_NEWBB_GROUPMOD_ERRMOD', 'У Вас есть ошибки!');
// added in V 4.3
define('_AM_NEWBB_UPLOAD', 'Максимальный разрешенный размер загружаемого файла :');
define('_AM_NEWBB_MEMLIMITTOLARGE', 'Внимание! В PHP.INI \'memory_limit\' установлен меньше, чем \'post_max_size\'');
define('_AM_NEWBB_MEMLIMITOK', 'Максимальный разрешенный размер загружаемого файла %s.');
// irmtfan add messages
define('_AM_NEWBB_REPORTSAVE', 'Выбранные отчеты успешно обработаны');
define('_AM_NEWBB_REPORTDELETE', 'Выбранные отчеты удалены из базы данных успешно');
define('_AM_NEWBB_REPORTNOTSELECT', 'Отчет не выбран!');
define('_AM_NEWBB_SYNC_TYPE_READ', 'Чтение данных');
define('_AM_NEWBB_DATABASEUPDATED', 'Обновлена ​​база данных!');
define('_AM_NEWBB_CAN_PDF', 'Может создавать PDF-файлы');
define('_AM_NEWBB_CAN_PRINT', 'Может распечатать');
//4.33
define('_AM_NEWBB_INDEX_PAGE', 'Главная страница');
//5.0
define('_AM_NEWBB_UPGRADEFAILED0', "Ошибка обновления - не удалось переименовать поле '%s'");
define('_AM_NEWBB_UPGRADEFAILED1', "Ошибка обновления - не удалось добавить новые поля");
define('_AM_NEWBB_UPGRADEFAILED2', "Ошибка обновления - не удалось переименовать таблицу '%s'");
define('_AM_NEWBB_ERROR_COLUMN', 'Не удалось создать столбец в базе данных : %s');
define('_AM_NEWBB_ERROR_BAD_XOOPS', 'Этот модуль требует XOOPS %s+ (%s установлено)');
define('_AM_NEWBB_ERROR_BAD_PHP', 'Для этого модуля требуется версия PHP %s+ (%s установлено)');
define('_AM_NEWBB_ERROR_TAG_REMOVAL', 'Не удалось удалить теги из модуля тегов');

// Help tab
define('_AM_NEWBB_HELP_CATEGORY_TAB', 'Для создания категории используйте кнопку выше и заполните все поля в форме.<br>По умолчанию изображения категорий находятся: /modules/newbb/assets/images/category/<br>Спонсорская ссылка должна быть записана в следующем формате: https://xoops.org/modules/newbb/ newBB Support. Вначале ссылка, затем название спонсора или другой текст.');
define('_AM_NEWBB_HELP_FORUM_TAB', 'Для создания и управление форумами используйте кнопки с права<br>Для создания форура используйте кнопку \'Создать форум\'. Затем заполните все поля формы. Так же Вы можете создать подфорум.<br>Для перемещения форума между категориями используйте кнопку \'Переехать\'. Следуйте дальнейшим указаниям.<br>Для объединения форумов, используйте кнопку \'Слияние\'. Следуйте дальнейшим указаниям.<br>Если у Вас настроен шаблон прав доступа, то Вы можете применить его для создаваемого форума.');
define('_AM_NEWBB_HELP_PERMISSION_TAB', '<strong>При установке прав доступа будьте внимательны.</strong><br>После установки и применения параметров, автоматически перейдете на следующую вкладку разрешений.<br>Так же здесь возможно создать шаблон прав доступа по умолчанию и применить его либо к одному форуму, либо ко всем форумам.');
define('_AM_NEWBB_HELP_ORDER_TAB', 'Позволяет установить порядок категорий и форумов относительно друг друга.<br>Порядок (Вес) устанавливается значением 0 - верх, 99 (и далее) - низ.');
define('_AM_NEWBB_HELP_PRUNE_TAB', 'Позволяет очистить форумы от пустых тем, устаревших тем и т.д.<br>Так же Вы можете не удалять темы, которые хотите очистить, а перенести их в специально созданную категорию \'Архив\' или любой другой.');
define('_AM_NEWBB_HELP_REPORT_TAB', 'Позволяет обрабатывать отчеты, которые присылают Вам пользователи, если они считают, что сообщение на форуме не соответствует правилам форума или этическим правилам.<br>Вы можете рассмотреть отчет и принять меры по отношению к сообщению, автору и т.д.<br>При отправке сообщения пользователем происходит извещение модераторов и администраторов по электронной почте.');
define('_AM_NEWBB_HELP_VOTE_TAB', 'Если у Вас включена функция голосования, то здесь Вы можете посмотреть результаты голосования.<br>Данное голосование не связано с другими модулями XOOPS.');
define('_AM_NEWBB_HELP_TYPE_TAB', 'Позволяет создать метки для выделения тем. Например:<br><strong style="color:blue;">[Важное]</strong> <strong>Название темы</strong><br><strong style="color:red;">[ВНИМАНИЕ]</strong> <strong>Название темы</strong><br>Установить типы тем возможно при создании темы на пользовательской стороне.');
define('_AM_NEWBB_HELP_GROUPMOD_TAB', 'Позволяет установить пользователей определенных групп в качестве модераторов для всего модуля, так и для отдельных категорий и форумов.<br>Рекомендуется создать отдельные группы модераторов, для более удобного управления модераторами.<br>Так же можно назначить конкретных пользователей модераторами при создании форума.');
define('_AM_NEWBB_HELP_SYNC_TAB', 'Если Вы заметили проблемы с датами сообщений, появлением пустых сообщений и т.д. то здесь Вы можете синхронизировать и исправить данные форума и тем');

//PDF
define('_AM_NEWBB_INDEX_PDF_PAGE', 'Если Вы хотите использовать функцию создания PDF используйте <a href="https://github.com/XoopsModules25x/publisher/issues/30#issuecomment-231551905" target="_blank">инструкцию</a>.');
