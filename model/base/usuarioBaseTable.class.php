<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of usuarioBaseTable
 *
 * @author luis david sicua
 */
class usuarioBaseTable extends model {

  const ID = 'usu_id';
  const USUARIO = 'usu_usuario';
  const PASSWORD = 'usu_password';
  const ACTIVO = 'usu_activo';
  const ROL_ID = 'rol_id';
  const CREATED_AT = 'usu_created_at';
  const UPDATED_AT = 'usu_updated_at';
  const DELETED_AT = 'usu_deleted_at';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;
  private $id;
  private $usuario;
  private $password;
  private $activo;
  private $rol_id;
  private $created_at;
  private $updated_at;
  private $deleted_at;

  public function __construct(config $config, $id = null, $usuario = null, $password = null, $activo = '1', $rol_id = null, $created_at = null, $updated_at = null, $deleted_at = null) {
    $this->config = $config;
    $this->id = $id;
    $this->usuario = $usuario;
    $this->password = $password;
    $this->activado = $activo;
    $this->rol_id = $rol_id;
    $this->created_at = $created_at;
    $this->updated_at = $updated_at;
    $this->deleted_at = $deleted_at;
  }

  public function getId() {
    return $this->id;
  }

  public function getUsuario() {
    return $this->usuario;
  }

  public function getPassword() {
    return $this->password;
  }

  public function getActivo() {
    return $this->activo;
  }

  public function getRolId() {
    return $this->rol_id;
  }

  public function getCreatedAt() {
    return $this->created_at;
  }

  public function getUpdatedAt() {
    return $this->updated_at;
  }

  public function getDeletedAt() {
    return $this->deleted_at;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function setUsuario($usuario) {
    $this->usuario = $usuario;
  }

  public function setPassword($password) {
    $this->password = hash('md5', $password);
  }

  public function setActivo($activo) {
    $this->activado = $activo;
  }

  public function setRolId($rol_id) {
    $this->rol_id = $rol_id;
  }

  public function setCreatedAt($created_at) {
    $this->created_at = $created_at;
  }

  public function setUpdatedAt($updated_at) {
    $this->updated_at = $updated_at;
  }

  public function setDeletedAt($deleted_at) {
    $this->deleted_at = $deleted_at;
  }

}
