<?php
if (!DEFINED('EGP'))
    exit(header('Refresh: 0; URL=http://' . $_SERVER['HTTP_HOST'] . '/404'));

$aScfg = array(
    'hostname' => 'Название игрового сервера.',
    'rcon_password' => 'Пароль для управления сервером через RCON команды.',
    'sv_password' => 'Пароль доступа на сервер.',
    'mp_allowspectators' => 'Присутствие в игре спектаторов.',
    'mp_autoteambalance' => 'Выравнивание количества играющих в командах.',
    'mp_chattime' => 'Время перед сменой карты после победы одной из команд. Измеряется в секундах.',
    'mp_decals' => 'Определяет количество декалов на сервере (например кол-во дырок от пуль на стенах сохраняемых сервером)',
    'mp_fadetoblack' => 'Мертвые игроки не могут наблюдать за игрой (черный экран)',
    'mp_falldamage' => 'Режим реалистичных повреждений при падениях с крыш и т.п.',
    'mp_flashlight' => 'Разрешить использовать фонарик.',
    'mp_footsteps' => 'Разрешить игрокам слышать звук шагов.',
    'mp_forcecamera' => 'Отключает режим свободного обзора для мертвых игроков.',
    'mp_forcerespawn' => 'Режим автоматического подключения игроков за команду.',
    'mp_fraglimit' => 'Лимит убийств игрока до смены карты. 0 - Отключено.',
    'mp_freezetime' => 'Время закупки перед началом раунда. (Заморозка игроков на одном месте).',
    'mp_friendlyfire' => 'Нанесение повреждений игрокам своей команды.',
    'mp_hostagepenalty' => 'Устанавливает количество заложников, которых можно убить, прежде чем вас выкинет с сервера. 0 - Отключено.',
    'mp_limitteams' => 'Число игроков, на которое одна команда может превышать другую. Лишних игроков не будет пускать в команду. 0 - Отключено.',
    'mp_maxrounds' => 'Максимальное количество раундов, которые могут быть сыграны на карте до ее смены.',
    'mp_playerid' => 'Всплывающие подсказки при наведении прицела на игрока.',
    'mp_roundtime' => 'Время раунда. Измеряется в минутах.',
    'mp_spawnprotectiontime' => 'Время защиты игрока после респавна. Измеряется в секундах.',
    'mp_startmoney' => 'Количество денег у игрока в первом раунде.',
    'mp_timelimit' => 'Время, отведенное на одну карту. Измеряется в минутах. Значение 0 - отключение лимита времени. 0 = Отключено.',
    'mp_tkpunish' => 'В начале нового раунда убивает игрока, который в предыдущем убил игрока своей команды.',
    'mp_weaponstay' => 'Упавшее с игроков оружие остается лежать на земле.',
    'mp_winlimit' => 'Ограничение по победам на карту.',
    'sv_airaccelerate' => 'Ускорение игрока в полете. Опцию имеет смысл изменять только для Surf сервера.',
    'sv_allowdownload' => 'Возможность скачивать с сервера файлы.',
    'sv_allowupload' => 'Возможность закачивать на сервер файлы. Например эмблемы.',
    'sv_alltalk' => 'Режим работы общего голосового чата. При включении все игроки будут слышать друг друга независимо от команды, в которой они играют.',
    'sv_gravity' => 'Гравитация на сервере. По умолчанию 800.',
    'sv_pausable' => 'Возможность использования паузы во время игры.',
    'sv_voiceenable' => 'Режим работы голосового чата в игре.',
    'sv_downloadurl' => 'Место, из которого клиенты могут загрузить недостающие файлы.',
    'mp_c4timer' => 'Время таймера до взрыва бомбы с момента ее установки. Измеряется в секундах.',
    'sv_timeout' => 'Таймаут подключения при потери связи.',
    'sv_pure' => 'Проверка соответствия файлов сервера и клиента.',
    'sv_pushaway_force' => 'Сила отталкивания предметов.',
    'sv_turbophysics' => 'Позволяет толкать предметы при нажатии на кнопку "E"',
    'mp_buytime' => 'Время для закупки оружия в начале раунда. Значение выставляется в минутах.',
    'net_maxfilesize' => 'Максимальный размер загружаемого файла в MB.',
    'sv_contact' => 'Контакты админа игрового сервера.',
    'sm_deadtalk' => 'Голосовое общение мертвых игроков.',
    'sv_nostats' => 'Статистика и получение достижений (achievements) на сервере.',
    'sv_nomvp' => 'MVP (самый результативный игрок).',
    'sv_nonemesis' => 'Cистема доминирования и реванша на сервере.',
    'sv_disablefreezecam' => 'Заморозка камеры при убийстве.',
    'sv_rcon_banpenalty' => 'Колличество минут на которое банится игрок пытавшийся подобрать rcon-пароль к серверу.',
    'sv_rcon_maxfailures' => 'Максимальное колличество попыток при наборе rcon-пароля, после истечения которых игрок будет забанен.',
    'sv_rcon_minfailures' => 'Колличество попыток при наборе rcon-пароля во время заданное sv_rcon_minfailuretime, после истечения которых игрок будет забанен.',
    'sv_rcon_minfailuretime' => 'Колличество секунд для определения неверной rcon-аутенфикации.',
    'sv_maxrate' => 'Максимально-допустимый предел передачи/приёма байт в секунду между клиентом и сервером.',
    'sv_mincmdrate' => 'Минимальное количество пакетов в секунду к серверу.',
    'sv_minrate' => 'Минимально допустимый предел передачи/приёма байт в секунду между клиентом и сервером.',
    'sv_maxcmdrate' => 'Максимальное количество пакетов в секунду к серверу.',
    'sv_minupdaterate' => 'Минимальное количество переданных пакетов в секунду.',
    'sv_client_cmdrate_difference' => '-',
    'sv_maxupdaterate' => 'Максимальное количество переданных пакетов в секунду.',
    'sv_steamgroup' => 'Номер группы Steam для отображения Вашего сервера в списке серверов у игроков Группы в главном меню игры.',
    'sv_tags' => 'Отображается справа в браузере поиска серверов.',
    'sv_enablebunnyhopping' => 'Распрыжка (Bhop)',
    'mp_ignore_round_win_conditions' => 'Бесконечный раунд на сервере.',
    'sv_maxspeed' => 'Максимальная скорость передвижения игроков на сервере. По умолчанию 320',
    'mp_disable_respawn_times' => 'Время респауна обоих команда, в секундах.',
    'sv_ignoregrenaderadio' => 'Радио-уведомление "Fire In Hole!" При броске гранаты.',
    'sv_hudhint_sound' => 'Озвучивать окошко подсказок.',
    'phys_timescale' => 'Коэффициент шкалы времени для вычисления "физики" в игре. Если по тарифу тикрейт 100, то нужно выставить значение 1.5.',
    'sv_use_steam_voice' => 'Использовать голосовой кодек Steam.',
    'sv_allow_voice_from_file' => 'Разрешить игрокам использовать voice_inputfromfile на сервере.'
);

$aScfg_form = array(
    'hostname' => '<input value="[hostname]" name="config[\'hostname\']">',
    'rcon_password' => '<input value="[rcon_password]" name="config[\'rcon_password\']">',
    'sv_password' => '<input value="[sv_password]" name="config[\'sv_password\']">',
    'mp_allowspectators' => '<select name="config[\'mp_allowspectators\']"><option value="0">Запрещено</option><option value="1">Разрешено</option></select>',
    'sv_allow_voice_from_file' => '<select name="config[\'sv_allow_voice_from_file\']"> <option value="1" selected="">Только Тиммейты</option><option value="0">Включено</option><option value="2">Отключено</option></select>',
    'mp_playerid' => '<select name="config[\'mp_playerid\']"> <option value="1" selected="">Только Тиммейты</option><option value="0">Включено</option><option value="2">Отключено</option></select>',
    'mp_autokick' => '<select name="config[\'mp_autokick\']"><option value="0">Выключено</option><option value="1">Включено</option></select>',
    'sv_pure' => '<select name="config[\'sv_pure\']"><option value="0"> 0 (Правила из pure_server_minimal.txt)</option><option value="-1">-1 (чистый сервер)</option><option value="1"> 1 (Правила из  pure_server_full.txt и pure_server_whitelist.txt)</option><option value="2"> 2 (Правила из  pure_server_full.txt)</option></select>',
    'sm_deadtalk' => '<select name="config[\'sm_deadtalk\']"><option value="0">Выключено</option><option value="1">Мертвые игроки разговаривают игнорируя команды</option><option value="2">Мертвые игроки могут разговаривать с живыми игроками только их команды</option></select>',
    'mp_autoteambalance' => '<select name="config[\'mp_autoteambalance\']"><option value="0">Выключено</option><option value="1">Включено</option></select>',
    'mp_fadetoblack' => '<select name="config[\'mp_fadetoblack\']"><option value="0">Выключено</option><option value="1">Включено</option></select>',
    'mp_falldamage' => '<select name="config[\'mp_falldamage\']"><option value="0">Выключено</option><option value="1">Включено</option></select>',
    'mp_flashlight' => '<select name="config[\'mp_flashlight\']"><option value="0">Выключено</option><option value="1">Включено</option></select>',
    'mp_footsteps' => '<select name="config[\'mp_footsteps\']"><option value="0">Выключено</option><option value="1">Включено</option></select>',
    'mp_forcecamera' => '<select name="config[\'mp_forcecamera\']"><option value="0">Выключено</option><option value="1">Включено</option></select>',
    'mp_forcerespawn' => '<select name="config[\'mp_forcerespawn\']"><option value="0">Выключено</option><option value="1">Включено</option></select>',
    'mp_friendlyfire' => '<select name="config[\'mp_friendlyfire\']"><option value="0">Выключено</option><option value="1">Включено</option></select>',
    'mp_tkpunish' => '<select name="config[\'mp_tkpunish\']"><option value="0">Выключено</option><option value="1">Включено</option></select>',
    'mp_weaponstay' => '<select name="config[\'mp_weaponstay\']"><option value="0">Выключено</option><option value="1">Включено</option></select>',
    'sv_allowdownload' => '<select name="config[\'sv_allowdownload\']"><option value="0">Выключено</option><option value="1">Включено</option></select>',
    'sv_allowupload' => '<select name="config[\'sv_allowupload\']"><option value="0">Выключено</option><option value="1">Включено</option></select>',
    'sv_alltalk' => '<select name="config[\'sv_alltalk\']"><option value="0">Выключено</option><option value="1">Включено</option></select>',
    'sv_pausable' => '<select name="config[\'sv_pausable\']"><option value="0">Выключено</option><option value="1">Включено</option></select>',
    'sv_voiceenable' => '<select name="config[\'sv_voiceenable\']"><option value="0">Выключено</option><option value="1">Включено</option></select>',
    'sv_turbophysics' => '<select name="config[\'sv_turbophysics\']"><option value="0">Выключено</option><option value="1">Включено</option></select>',
    'sv_nostats' => '<select name="config[\'sv_nostats\']"><option value="0">Выключено</option><option value="1">Включено</option></select>',
    'sv_nomvp' => '<select name="config[\'sv_nomvp\']"><option value="0">Выключено</option><option value="1">Включено</option></select>',
    'sv_nonemesis' => '<select name="config[\'sv_nonemesis\']"><option value="0">Выключено</option><option value="1">Включено</option></select>',
    'sv_enablebunnyhopping' => '<select name="config[\'sv_enablebunnyhopping\']"><option value="0">Выключено</option><option value="1">Включено</option></select>',
    'mp_ignore_round_win_conditions' => '<select name="config[\'mp_ignore_round_win_conditions\']"><option value="0">Выключено</option><option value="1">Включено</option></select>',
    'sv_use_steam_voice' => '<select name="config[\'sv_use_steam_voice\']"><option value="0">Выключено</option><option value="1">Включено</option></select>',
    'sv_disablefreezecam' => '<select name="config[\'sv_disablefreezecam\']"><option value="0">Выключено</option><option value="1">Включено</option></select>',
    'sv_ignoregrenaderadio' => '<select name="config[\'sv_ignoregrenaderadio\']"><option value="0">Выключено</option><option value="1">Включено</option></select>',
    'sv_hudhint_sound' => '<select name="config[\'sv_hudhint_sound\']"><option value="0">Выключено</option><option value="1">Включено</option></select>',
    'mp_chattime' => '<input value="[mp_chattime]" name="config[\'mp_chattime\']">',
    'mp_decals' => '<input value="[mp_decals]" name="config[\'mp_decals\']">',
    'mp_fraglimit' => '<input value="[mp_fraglimit]" name="config[\'mp_fraglimit\']">',
    'mp_freezetime' => '<input value="[mp_freezetime]" name="config[\'mp_freezetime\']">',
    'mp_hostagepenalty' => '<input value="[mp_hostagepenalty]" name="config[\'mp_hostagepenalty\']">',
    'mp_limitteams' => '<input value="[mp_limitteams]" name="config[\'mp_limitteams\']">',
    'mp_maxrounds' => '<input value="[mp_maxrounds]" name="config[\'mp_maxrounds\']">',
    'mp_roundtime' => '<input value="[mp_roundtime]" name="config[\'mp_roundtime\']">',
    'mp_spawnprotectiontime' => '<input value="[mp_spawnprotectiontime]" name="config[\'mp_spawnprotectiontime\']">',
    'mp_startmoney' => '<input value="[mp_startmoney]" name="config[\'mp_startmoney\']">',
    'mp_timelimit' => '<input value="[mp_timelimit]" name="config[\'mp_timelimit\']">',
    'mp_winlimit' => '<input value="[mp_winlimit]" name="config[\'mp_winlimit\']">',
    'sv_airaccelerate' => '<input value="[sv_airaccelerate]" name="config[\'sv_airaccelerate\']">',
    'sv_gravity' => '<input value="[sv_gravity]" name="config[\'sv_gravity\']">',
    'sv_downloadurl' => '<input value="[sv_downloadurl]" name="config[\'sv_downloadurl\']">',
    'mp_c4timer' => '<input value="[mp_c4timer]" name="config[\'mp_c4timer\']">',
    'sv_timeout' => '<input value="[sv_timeout]" name="config[\'sv_timeout\']">',
    'sv_pushaway_force' => '<input value="[sv_pushaway_force]" name="config[\'sv_pushaway_force\']">',
    'mp_buytime' => '<input value="[mp_buytime]" name="config[\'mp_buytime\']">',
    'net_maxfilesize' => '<input value="[net_maxfilesize]" name="config[\'net_maxfilesize\']">',
    'sv_contact' => '<input value="[sv_contact]" name="config[\'sv_contact\']">',
    'sv_rcon_banpenalty' => '<input value="[sv_rcon_banpenalty]" name="config[\'sv_rcon_banpenalty\']">',
    'sv_rcon_maxfailures' => '<input value="[sv_rcon_maxfailures]" name="config[\'sv_rcon_maxfailures\']">',
    'sv_rcon_minfailures' => '<input value="[sv_rcon_minfailures]" name="config[\'sv_rcon_minfailures\']">',
    'sv_rcon_minfailuretime' => '<input value="[sv_rcon_minfailuretime]" name="config[\'sv_rcon_minfailuretime\']">',
    'sv_maxrate' => '<input value="[sv_maxrate]" name="config[\'sv_maxrate\']">',
    'sv_mincmdrate' => '<input value="[sv_mincmdrate]" name="config[\'sv_mincmdrate\']">',
    'sv_minrate' => '<input value="[sv_minrate]" name="config[\'sv_minrate\']">',
    'sv_minupdaterate' => '<input value="[sv_minupdaterate]" name="config[\'sv_minupdaterate\']">',
    'sv_client_cmdrate_difference' => '<input value="[sv_client_cmdrate_difference]" name="config[\'sv_client_cmdrate_difference\']">',
    'sv_maxupdaterate' => '<input value="[sv_maxupdaterate]" name="config[\'sv_maxupdaterate\']">',
    'sv_steamgroup' => '<input value="[sv_steamgroup]" name="config[\'sv_steamgroup\']">',
    'sv_tags' => '<input value="[sv_tags]" name="config[\'sv_tags\']">',
    'sv_maxspeed' => '<input value="[sv_maxspeed]" name="config[\'sv_maxspeed\']">',
    'mp_disable_respawn_times' => '<input value="[mp_disable_respawn_times]" name="config[\'mp_disable_respawn_times\']">',
    'phys_timescale' => '<input value="[phys_timescale]" name="config[\'phys_timescale\']">',
    'sv_maxcmdrate' => '<input value="[sv_maxcmdrate]" name="config[\'sv_maxcmdrate\']">'

);
