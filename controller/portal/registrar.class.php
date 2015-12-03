<?php

require_once '../model/base/datoUsuarioBaseTable.class.php';
require_once '../model/datoUsuarioTable.class.php';
require_once '../model/base/usuarioBaseTable.class.php';
require_once '../model/usuarioTable.class.php';

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of indexControllerClass
 *
 * @author Luis david sicua <xwhisper_dim@outlook.com>
 */
class registrar extends controller implements action {

  public function execute() {
    $config = $this->getConfig();
    $index = $config->getUrl() . 'index.php/seguridad/iniciar';

    if (isset($_SESSION['user']) === true) {
      header("Location: $index");
      exit();
    } elseif (filter_has_var(INPUT_POST, 'registro') === true) {
      $registro = filter_input_array(INPUT_POST)['registro'];
//    $this->validateInsert($registro);

      $usuario = new usuarioTable($config);
      $usuario->setId($usuario->nextId());
      $usuario->setUsuario($registro['usu_usuario']);
      $usuario->setPassword($registro['usu_password']);
      $usuario->setActivo(1);
      $usuario->setRolId(2);
      $usuario->save();

      $datoUsuario = new datoUsuarioTable($config);
      $datoUsuario->setId($usuario->nextId());
      $datoUsuario->setUsuId($usuario->getId());
      $datoUsuario->setNombre($registro['dus_nombre']);
      $datoUsuario->setApellidos($registro['dus_apellidos']);
      $datoUsuario->setCorreo($registro['dus_correo']);
      $datoUsuario->save();

      $_SESSION['registroSuccess'] = 'el usuario se registro exitosamente';
    }

    header("Location: $index");
    exit();
  }

  private function validateInsert($registro) {
    
  }

}
