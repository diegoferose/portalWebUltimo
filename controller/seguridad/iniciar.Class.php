<?php
use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;
/**
 * Description of indexControllerClass
 *
 * @author Luis david sicua <xwhisper_dim@outlook.com>
 */

class iniciar extends controller implements action {

  public function execute() {
      $config = $this->getConfig();
       if (isset($_SESSION['user']) === true) {
      header("Location: $index");
      exit();
    } else {
        
    }

    $this->defineView('seguridad', 'iniciar', 'html');
  }

}