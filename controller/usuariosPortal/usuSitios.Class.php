<?php
use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;
/**
 * Description of indexControllerClass
 *
 * @author felipe gonzalez
 */

class usuSitios extends controller implements action {

  public function execute() {

    $this->defineView('usuariosPortal', 'usuSitios', 'html');
  }

}
