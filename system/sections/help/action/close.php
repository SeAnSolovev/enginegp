<?php
if (!DEFINED('EGP'))
    exit(header('Refresh: 0; URL=http://' . $_SERVER['HTTP_HOST'] . '/404'));

if ($user['group'] == 'support')
    sys::outjs(array('e' => 'У вас нет доступа к данному действию.'));

if ($id) {
    if (in_array($user['group'], array('admin', 'support')))
        $sql->query('UPDATE `help` set `close`="1" WHERE `id`="' . $id . '" LIMIT 1');
    else
        $sql->query('UPDATE `help` set `close`="1" WHERE `id`="' . $id . '" AND `user`="' . $user['id'] . '" LIMIT 1');

    sys::outjs(array('s' => 'ok'));
}

sys::outjs(array('e' => 'Вопрос не найден в базе.'));
