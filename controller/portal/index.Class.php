<?php
/**
 * Description of indexControllerClass
 *
 * @author Luis david sicua <xwhisper_dim@outlook.com>
 */
class index extends controllerClass {
  
  static public function main() {
    
    viewClass::definirVista('portal', 'index', null, 'html');
  }
}
