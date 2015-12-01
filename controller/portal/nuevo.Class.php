<?php

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;

/**
 * Description of indexControllerClass
 *
 * @author Luis david sicua <xwhisper_dim@outlook.com>
 */
class nuevo extends controller implements action {

  public function execute() {
    $config = $this->getConfig();
    if (isset($_SESSION['user']) === true) {
      $index = $config->getUrl() . 'index.php';
      header("Location: $index");
      exit();
    }
    $this->titulo = "Registro de usuario";
    $this->registroForm=$config->getUrl() . 'index.php/portal/registrar';
    $this->homeURL =$config->getUrl() . 'index.php';
    $this->defineView('portal', 'nuevo', 'html');
  }

}
