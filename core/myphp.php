<?php
/**
 * Created by PhpStorm.
 * User: zhaojinhui
 * Date: 2018/1/12
 * Time: 15:59
 */

defined("FRAME_PATH") or define("FRAME_PATH", __DIR__ . "/");
defined("APP_PATH") or define("APP_PATH", dirname($_SERVER["SCRIPT_FILENAME"])."/");
defined("APP_DEBUG") or define("APP_DEBUG", false);
defined("CONFIG_PATH") or define("CONFIG_PATH", APP_PATH . "config/");
defined("RUNTIME_PATH") or define("RUNTIME_PATH", APP_PATH . "runtime/");


//引入配置文件
require_once CONFIG_PATH . "config.php";

//include framework core file
require_once FRAME_PATH . "core.class.php";

$mine = new Core();
$mine->run();