<?php
/**
 * Created by PhpStorm.
 * User: zhaojinhui
 * Date: 2018/1/12
 * Time: 15:53
 */

class Core{
    public function run(){
        spl_autoload_register(array($this, 'loadClass'));
        $this->setReporting();
        $this->removeMagicQuotes();
        $this->unregisterGlobals();
        $this->Route();
    }

    public function setReporting(){
        if(APP_DEBUG === true){
            error_reporting(E_ALL);
            ini_set("display_errors", "On");
        }else{
            error_reporting(E_ALL);
            ini_set("display_errors", "Off");
            ini_set("log_errors", 'On');
            ini_set("error_log", RUNTIME_PATH . 'logs/error.log');
        }
    }

    public function removeMagicQuotes(){

    }

    public function unregisterGlobals(){

    }

    public function Route(){

    }

    public static function loadClass(){
        
    }
}