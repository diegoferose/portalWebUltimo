<?php
use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;
/**
 * Description of indexControllerClass
 *
 * @author Luis david sicua <xwhisper_dim@outlook.com>
 */

class historico extends controller implements action {

  public function execute() {

    $this->defineView('portal/categoria', 'historico', 'html');
  }

}

