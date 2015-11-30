<?php
use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;
/**
 * Description of indexControllerClass
 *
 * @author Luis david sicua <xwhisper_dim@outlook.com>
 */

class balnearios extends controller implements action {

  public function execute() {

    $this->defineView('portal/categoria', 'balnearios', 'html');
  }

}
