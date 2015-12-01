<?php
namespace portalWebUltimo\model\base;

use portalWebUltimo\fsModel as model;
use portalWebUltimo\myConfig as config;

/**
 * Description of respuestaBaseTable
 *
 * @author JuanGabo
 */
class respuestaBaseTable extends model {

  const RES_ID = 'res_id';
  const PQRSF_ID = 'pqrsf_id';
  const USU_ID = 'usu_id';
  const RES_RESPUESTA = 'res_respuesta';
  const RES_CREATED_AT = 'res_created_at';
  const RES_UPDATED_AT = 'res_updated_at';
  const RES_DELETED_AT = 'res_deleted_at';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;
  private $res_id;
  private $pqrsf_id;
  private $usu_id;
  private $res_respuesta;
  private $res_created_at;
  private $res_updated_at;
  private $res_deleted_at;

  function __construct(config $config, $res_id = null, $pqrsf_id = null, $usu_id = null, $res_respuesta = null, $res_created_at = null, $res_updated_at = null, $res_deleted_at = null) {
      $this->config = $config;
      $this->res_id = $res_id;
      $this->pqrsf_id = $pqrsf_id;
      $this->usu_id = $usu_id;
      $this->res_respuesta = $res_respuesta;
      $this->res_created_at = $res_created_at;
      $this->res_updated_at = $res_updated_at;
      $this->res_deleted_at = $res_deleted_at;
  }
  public function getConfig() {
      return $this->config;
  }

  public function getRes_id() {
      return $this->res_id;
  }

  public function getPqrsf_id() {
      return $this->pqrsf_id;
  }

  public function getUsu_id() {
      return $this->usu_id;
  }

  public function getRes_respuesta() {
      return $this->res_respuesta;
  }

  public function getRes_created_at() {
      return $this->res_created_at;
  }

  public function getRes_updated_at() {
      return $this->res_updated_at;
  }

  public function getRes_deleted_at() {
      return $this->res_deleted_at;
  }

  public function setConfig(config $config) {
      $this->config = $config;
  }

  public function setRes_id($res_id) {
      $this->res_id = $res_id;
  }

  public function setPqrsf_id($pqrsf_id) {
      $this->pqrsf_id = $pqrsf_id;
  }

  public function setUsu_id($usu_id) {
      $this->usu_id = $usu_id;
  }

  public function setRes_respuesta($res_respuesta) {
      $this->res_respuesta = $res_respuesta;
  }

  public function setRes_created_at($res_created_at) {
      $this->res_created_at = $res_created_at;
  }

  public function setRes_updated_at($res_updated_at) {
      $this->res_updated_at = $res_updated_at;
  }

  public function setRes_deleted_at($res_deleted_at) {
      $this->res_deleted_at = $res_deleted_at;
  }


}
