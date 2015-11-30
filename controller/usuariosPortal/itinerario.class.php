<?php

use FStudio\fsController as controller;
use FStudio\interfaces\fsAction as action;
/**
 * Description of indexControllerClass
 *
 * @author felipe gonzalez
 */

class itinerario extends controller implements action {

  public function execute() {

    $this->defineView('usuariosPortal', 'itinerario', 'html');
  }

}
