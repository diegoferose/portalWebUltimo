<?php

namespace FStudio\model\base;

use FStudio\fsModel as model;
use FStudio\myConfig as config;

/**
 * Description of datoUsuarioBaseTable
 *
 * @author luis david sicua
 */
class datoUsuarioBaseTable extends model {

  const ID = 'dus_id';
  const USU_ID = 'usu_id';
  const NOMBRE = 'dus_nombre';
  const NOMBRE_LENGTH = 80;
  const APELLIDOS = 'dus_apellidos';
  const APELLIDOS_LENGTH = 80;
  const CORREO = 'dus_correo';
  const CORREO_LENGTH = 100;
  const GENERO = 'dus_genero';
  const FECHA_NACIMIENTO = 'dus_fecha_nacimiento';
  const FACEBOOK = 'dus_facebook';
  const FACEBOOK_LENGTH = 80;
  const TWITTER = 'dus_twitter';
  const TWITTER_LENGTH = 80;
  const GOOGLE_PLUS = 'dus_google_plus';
  const GOOGLE_PLUS_LENGTH = 80;
  const AVATAR = 'dus_avatar';
  const CREATED_AT = 'dus_created_at';
  const UPDATED_AT = 'dus_updated_at';
  const DELETED_AT = 'dus_deleted_at';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;
  private $id;
  private $usu_id;
  private $nombre;
  private $apellidos;
  private $correo;
  private $genero;
  private $fecha_nacimiento;
  private $facebook;
  private $twitter;
  private $google_plus;
  private $avatar;
  private $created_at;
  private $updated_at;
  private $deleted_at;

  public function __construct(config $config, $id = null, $usu_id = null, $nombre = null, $apellidos = null, $correo = null, $genero = null, $fecha_nacimiento = null, $facebook = null, $twitter = null, $google_plus = null, $avatar = null, $created_at = null, $updated_at = null, $deleted_at = null) {
    $this->config = $config;
    $this->id = $id;
    $this->usu_id = $usu_id;
    $this->nombre = $nombre;
    $this->apellidos = $apellidos;
    $this->correo = $correo;
    $this->genero = $genero;
    $this->fecha_nacimiento = $fecha_nacimiento;
    $this->facebook = $facebook;
    $this->twitter = $twitter;
    $this->google_plus = $google_plus;
    $this->avatar = $avatar;
    $this->created_at = $created_at;
    $this->updated_at = $updated_at;
    $this->deleted_at = $deleted_at;
  }

  public function getId() {
    return $this->id;
  }

  public function getUsuId() {
    return $this->usu_id;
  }

  public function getNombre() {
    return $this->nombre;
  }

  public function getApellidos() {
    return $this->apellidos;
  }

  public function getCorreo() {
    return $this->correo;
  }

  public function getGenero() {
    return $this->genero;
  }

  public function getFechaNacimiento() {
    return $this->fecha_nacimiento;
  }

  public function getFacebook() {
    return $this->facebook;
  }

  public function getTwitter() {
    return $this->twitter;
  }

  public function getGooglePlus() {
    return $this->google_plus;
  }

  public function getAvatar() {
    return $this->avatar;
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

  public function setUsuId($usu_id) {
    $this->usu_id = $usu_id;
  }

  public function setNombre($nombre) {
    $this->nombre = $nombre;
  }

  public function setApellidos($apellidos) {
    $this->apellidos = $apellidos;
  }

  public function setCorreo($correo) {
    $this->correo = $correo;
  }

  public function setGenero($genero) {
    $this->genero = $genero;
  }

  public function setFechaNacimiento($fecha_nacimiento) {
    $this->fecha_nacimiento = $fecha_nacimiento;
  }

  public function setFacebook($facebook) {
    $this->facebook = $facebook;
  }

  public function setTwitter($twitter) {
    $this->twitter = $twitter;
  }

  public function setGooglePlus($google_plus) {
    $this->google_plus = $google_plus;
  }

  public function setAvatar($avatar) {
    $this->avatar = $avatar;
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
