<?php

require_once '../model/base/usuarioBaseTable.class.php';
require_once '../model/usuarioTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of indexControllerClass
 *
 * @author Luis david sicua <xwhisper_dim@outlook.com>
 */
class login extends controller implements action {
    public function execute(){
         $config = $this->getConfig();
         if(filter_has_var(INPUT_POST,'email') and filter_has_var(INPUT_POST,'password')){
             $user = filter_input(INPUT_POST, 'email');
             $pass = filter_input(INPUT_POST, 'password');
             $usuario = new usuarioTable($config);
             
             if($usuario->comparar($user, $pass)){
                 echo 'si existe';
             }
             
         }
}
}
