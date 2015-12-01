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
    $index = $config->getUrl() . 'index.php';

    if (isset($_SESSION['user']) === true) {
      header("Location: $index");
      exit();
    } elseif (filter_has_var(INPUT_POST, 'registro') === true) {
      $registro = filter_input_array(INPUT_POST)['registro'];
//    $this->validateInsert($registro);

      $usuario = new usuarioTable($config);
      $usuario->setUsu_usuario($registro['usu_usuario']);
      $usuario->setUsu_password($registro['usu_password']);
//      $usuario->setUsu_activado('t');
      $usuario->save();

      $datoUsuario = new datoUsuarioTable($config);
      $datoUsuario->setUsu_id($usuario->getId());
      $datoUsuario->setDus_nombre($registro['dus_nombre']);
      $datoUsuario->setDus_apellidos($registro['dus_apellidos']);
      $datoUsuario->setDus_correo($registro['dus_correo']);
      $datoUsuario->save();

      $_SESSION['registroSuccess'] = 'el usuario se registro exitosamente';
    }
    header("Location: $index");
    exit();
  }

  private function validateInsert($registro) {
    
  }

}
