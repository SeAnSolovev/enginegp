<?php
/*
 * EngineGP   (https://enginegp.ru or https://enginegp.com)
 *
 * @copyright Copyright (c) 2018-present Solovev Sergei <inbox@seansolovev.ru>
 *
 * @link      https://github.com/EngineGPDev/EngineGP for the canonical source repository
 * @link      https://gitforge.ru/EngineGP/EngineGP for the canonical source repository
 *
 * @license   https://github.com/EngineGPDev/EngineGP/blob/main/LICENSE MIT License
 * @license   https://gitforge.ru/EngineGP/EngineGP/src/branch/main/LICENSE MIT License
 */

if (!DEFINED('EGP'))
    exit(header('Refresh: 0; URL=http://' . $_SERVER['HTTP_HOST'] . '/404'));

$sql->query('SELECT `unit`, `address`, `game`, `status`, `plugins_use`, `ftp_use`, `console_use`, `stats_use`, `copy_use`, `web_use` FROM `servers` WHERE `id`="' . $id . '" LIMIT 1');
$server = $sql->get();

sys::nav($server, $id, 'index');

include(SEC . 'servers/' . $server['game'] . '/index.php');
