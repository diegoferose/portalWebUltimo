<?php
namespace portalWebUltimo\model\base;

use portalWebUltimo\fsModel as model;
use portalWebUltimo\myConfig as config;

/**
 * Description of itinerarioBaseTable
 *
 * @author JuanGabo
 */
class itinerarioBaseTable extends model {

  const ITI_ID = 'iti_id';
  const USU_ID = 'usu_id';
  const SIT_ID = 'sit_id';
  const ITI_POSICION = 'iti_posicion';
  const ITI_CREATED_AT = 'iti_created_at';
  const ITI_UPDATED_AT = 'iti_updated_at';
  const ITI_DELETED_AT = 'iti_deleted_at';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;
  private $iti_id;
  private $usu_id;
  private $sit_id;
  private $iti_posicion;
  private $iti_created_at;
  private $iti_updated_at;
  private $iti_deleted_at;

  
  function __construct(config $config, $iti_id = null, $usu_id = null, $sit_id = null, $iti_posicion = null, $iti_created_at = null, $iti_updated_at = null, $iti_deleted_at = null) {
      $this->config = $config;
      $this->iti_id = $iti_id;
      $this->usu_id = $usu_id;
      $this->sit_id = $sit_id;
      $this->iti_posicion = $iti_posicion;
      $this->iti_created_at = $iti_created_at;
      $this->iti_updated_at = $iti_updated_at;
      $this->iti_deleted_at = $iti_deleted_at;
  }
  public function getConfig() {
      return $this->config;
  }

  public function getIti_id() {
      return $this->iti_id;
  }

  public function getUsu_id() {
      return $this->usu_id;
  }

  public function getSit_id() {
      return $this->sit_id;
  }

  public function getIti_posicion() {
      return $this->iti_posicion;
  }

  public function getIti_created_at() {
      return $this->iti_created_at;
  }

  public function getIti_updated_at() {
      return $this->iti_updated_at;
  }

  public function getIti_deleted_at() {
      return $this->iti_deleted_at;
  }

  public function setConfig(config $config) {
      $this->config = $config;
  }

  public function setIti_id($iti_id) {
      $this->iti_id = $iti_id;
  }

  public function setUsu_id($usu_id) {
      $this->usu_id = $usu_id;
  }

  public function setSit_id($sit_id) {
      $this->sit_id = $sit_id;
  }

  public function setIti_posicion($iti_posicion) {
      $this->iti_posicion = $iti_posicion;
  }

  public function setIti_created_at($iti_created_at) {
      $this->iti_created_at = $iti_created_at;
  }

  public function setIti_updated_at($iti_updated_at) {
      $this->iti_updated_at = $iti_updated_at;
  }

  public function setIti_deleted_at($iti_deleted_at) {
      $this->iti_deleted_at = $iti_deleted_at;
  }


}
