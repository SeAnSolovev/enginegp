<?php
/*
 * EngineGP   (https://enginegp.ru or https://enginegp.com)
 *
 * @copyright Copyright (c) 2018-present Solovev Sergei <inbox@seansolovev.ru>
 *
 * @link      https://github.com/EngineGPDev/EngineGP for the canonical source repository
 *
 * @license   https://github.com/EngineGPDev/EngineGP/blob/main/LICENSE MIT License
 */

if (!defined('EGP')) {
    exit(header('Refresh: 0; URL=http://' . $_SERVER['HTTP_HOST'] . '/404'));
}

$text = [
    'signup' => '<br>Здравствуйте, для завершения регистрации '
        . 'на сайте: [site], необходимо подтвердить свои действия, '
        . 'для этого необходимо перейти по ссылке: <u><a href="[url]">подтвердить</a></u>.'
        . '<br>'
        . 'Если вы не регистрировались на данном сайте, то проигнорируйте данное сообщение.'
        . '<br><br>'
        . 'С уважением, администрация [site].',

    'signup_end' => '<br>Здравствуйте, вы успешно зарегистрированы '
        . 'на сайте: [site], ваши персональные данные: '
        . '<br><br>'
        . 'Логин: <u>[login]</u>'
        . '<br>'
        . 'Пароль: <u>[passwd]</u>'
        . '<br><br>'
        . 'С уважением, администрация [site].',

    'recovery' => '<br>Здравствуйте, для восстановления доступа '
        . 'на сайте: [site], необходимо подтвердить свои действия, '
        . 'для этого необходимо перейти по ссылке: <u><a href="[url]">подтвердить</a></u>.'
        . '<br>'
        . 'Если вы не производили данную операцию, то проигнорируйте данное сообщение, не беспокойтесь, пароль не будет изменен.'
        . '<br><br>'
        . 'С уважением, администрация [site].',

    'change' => '<br>Здравствуйте, для смена почты '
        . 'на сайте: [site], необходимо подтвердить свои действия, '
        . 'для этого необходимо перейти по ссылке: <u><a href="[url]">подтвердить</a></u>.'
        . '<br>'
        . 'Если вы не производили данную операцию, то проигнорируйте данное сообщение, не беспокойтесь, почта не будет изменена.'
        . '<br><br>'
        . 'С уважением, администрация [site].',

    'recovery_end' => '<br>Здравствуйте, восстановление доступа '
        . 'на сайте: [site] успешно завершено.'
        . '<br>'
        . 'Ваш новый пароль: <u>[passwd]</u>, теперь вы можете авторизоваться.'
        . '<br><br>'
        . 'С уважением, администрация [site].',

    'security_code' => '<br>Здравствуйте, для авторизации '
        . 'укажите код подверждения: <b>[code]</b>. (код будет доступен 180 секунд.)'
        . '<br>'
        . 'Если авторизацию инициировали не вы, не беспокойтесь, без данного кода авторизация не будет завершена.'
        . '<br><br>'
        . 'Система защиты по коду [site].',

    'notice_help' => '<br>Здравствуйте, на ваш вопрос был дан ответ, <a href="[url]">прочитать</a>.'
        . '<br>'
        . 'С уважением, администрация [site].',

    'notice_help_admin' => '<br>Новый тикет в тех. подвержке: <a href="[url]">прочитать</a>.',
    'notice_help_admin_new' => '<br>Новое сообщение в тех. подвержке: <a href="[url]">прочитать</a>.',

    'notice_server_overdue' => '<br>Здравствуйте, ваш арендованный игровой сервер #[id] ([address]) просрочен,'
        . '<br>'
        . 'через некоторое время он будет удален, во избежание этого, необходимо продлить аренду.'
        . '<br>'
        . 'С уважением, администрация [site].',
];
