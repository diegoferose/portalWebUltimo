<?php

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;
/**
 * Description of indexControllerClass
 *
 * @author Luis david sicua <xwhisper_dim@outlook.com>
 */

class panel extends controller implements action {

  public function execute() {

    $this->defineView('usuariosPortal/panel', 'panel', 'html');
  }

}