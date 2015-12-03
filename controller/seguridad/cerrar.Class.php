<?php
use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;
/**
 * Description of indexControllerClass
 *
 * @author Luis david sicua <xwhisper_dim@outlook.com>
 */

class cerrar extends controller implements action {

  public function execute() {
       if (isset($_SESSION['user']) === true) {
      unset($_SESSION['user']);     
    } 

    $config = $this->getConfig();
    $index = $config->getUrl() . 'index.php';
    header("Location: $index");
    exit();
  }

}