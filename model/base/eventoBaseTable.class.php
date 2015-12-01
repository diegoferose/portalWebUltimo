<?php
namespace portalWebUltimo\model\base;

use portalWebUltimo\fsModel as model;
use portalWebUltimo\myConfig as config;

/**
 * Description of usuarioBaseTable
 *
 * @author JuanGabo
 */
class eventoBaseTable extends model {

  const EVE_ID = 'eve_id';
  const USU_ID = 'usu_id';
  const CAT_ID = 'cat_id';
  const EVE_NOMBRE = 'eve_nombre';
  const EVE_NOMBRE_LENGTH = 80;
  const EVE_FECHA_HORA = 'eve_fecha_hora';
  const EVE_DIRECCION = 'eve_direccion';
  const EVE_DIRECCION_LENGTH = 100;
  const EVE_NOMBRE_CONTACTO = 'eve_nombre_contacto';
  const EVE_NOMBRE_CONTACTO_LENGTH = 100;
  const EVE_CORREO_CONTACTO = 'eve_correo_contacto';
  const EVE_CORREO_CONTACTO_LENGTH = 100;
  const EVE_TELEFONO_CONTACTO = 'eve_telefono_contacto';
  const EVE_TELEFONO_CONTACTO_LENGTH = 100;
  const EVE_VALOR_BOLETA = 'eve_valor_boleta';
  const EVE_LATITUD = 'eve_latitud';
  const EVE_LATITUD_LENGTH = 100;
  const EVE_LONGITUD = 'eve_longitud';
  const EVE_LONGITUD_LENGTH = 100;
  const FECHA_INICIO_PUBLICACION = 'fecha_inicio_publicacion';
  const FECHA_FIN_PUBLICACION = 'fecha_fin_publicacion';
  const EST_ID = 'est_id';
  const EVE_CREATED_AT = 'eve_created_at';
  const EVE_UPDATED_AT = 'eve_updated_at';
  const EVE_DELETED_AT = 'eve_deleted_at';

  /**
   * Configuración del sistema
   * @var config
   */
  protected $config;
  private $eve_id;
  private $usu_id;
  private $cat_id;
  private $eve_nombre;
  private $eve_fecha_hora;
  private $eve_direccion;
  private $eve_nombre_contacto;
  private $eve_correo_contacto;
  private $eve_telefono_contacto;
  private $eve_valor_boleta;
  private $eve_latitud;
  private $eve_longitud;
  private $fecha_inicio_publicacion;
  private $fecha_fin_publicacion;
  private $est_id;
  private $eve_created_at;
  private $eve_updated_at;
  private $eve_deleted_at;
  
  function __construct(config $config, $eve_id = null, $usu_id = null, $cat_id = null, $eve_nombre = null, $eve_fecha_hora = null, $eve_direccion = null, $eve_nombre_contacto = null, $eve_correo_contacto = null, $eve_telefono_contacto = null, $eve_valor_boleta = null, $eve_latitud = null, $eve_longitud = null, $fecha_inicio_publicacion = null, $fecha_fin_publicacion = null, $est_id = null, $eve_created_at = null, $eve_updated_at = null, $eve_deleted_at = null) {
      $this->config = $config;
      $this->eve_id = $eve_id;
      $this->usu_id = $usu_id;
      $this->cat_id = $cat_id;
      $this->eve_nombre = $eve_nombre;
      $this->eve_fecha_hora = $eve_fecha_hora;
      $this->eve_direccion = $eve_direccion;
      $this->eve_nombre_contacto = $eve_nombre_contacto;
      $this->eve_correo_contacto = $eve_correo_contacto;
      $this->eve_telefono_contacto = $eve_telefono_contacto;
      $this->eve_valor_boleta = $eve_valor_boleta;
      $this->eve_latitud = $eve_latitud;
      $this->eve_longitud = $eve_longitud;
      $this->fecha_inicio_publicacion = $fecha_inicio_publicacion;
      $this->fecha_fin_publicacion = $fecha_fin_publicacion;
      $this->est_id = $est_id;
      $this->eve_created_at = $eve_created_at;
      $this->eve_updated_at = $eve_updated_at;
      $this->eve_deleted_at = $eve_deleted_at;
  }
  public function getConfig() {
      return $this->config;
  }

  public function getEve_id() {
      return $this->eve_id;
  }

  public function getUsu_id() {
      return $this->usu_id;
  }

  public function getCat_id() {
      return $this->cat_id;
  }

  public function getEve_nombre() {
      return $this->eve_nombre;
  }

  public function getEve_fecha_hora() {
      return $this->eve_fecha_hora;
  }

  public function getEve_direccion() {
      return $this->eve_direccion;
  }

  public function getEve_nombre_contacto() {
      return $this->eve_nombre_contacto;
  }

  public function getEve_correo_contacto() {
      return $this->eve_correo_contacto;
  }

  public function getEve_telefono_contacto() {
      return $this->eve_telefono_contacto;
  }

  public function getEve_valor_boleta() {
      return $this->eve_valor_boleta;
  }

  public function getEve_latitud() {
      return $this->eve_latitud;
  }

  public function getEve_longitud() {
      return $this->eve_longitud;
  }

  public function getFecha_inicio_publicacion() {
      return $this->fecha_inicio_publicacion;
  }

  public function getFecha_fin_publicacion() {
      return $this->fecha_fin_publicacion;
  }

  public function getEst_id() {
      return $this->est_id;
  }

  public function getEve_created_at() {
      return $this->eve_created_at;
  }

  public function getEve_updated_at() {
      return $this->eve_updated_at;
  }

  public function getEve_deleted_at() {
      return $this->eve_deleted_at;
  }

  public function setConfig(config $config) {
      $this->config = $config;
  }

  public function setEve_id($eve_id) {
      $this->eve_id = $eve_id;
  }

  public function setUsu_id($usu_id) {
      $this->usu_id = $usu_id;
  }

  public function setCat_id($cat_id) {
      $this->cat_id = $cat_id;
  }

  public function setEve_nombre($eve_nombre) {
      $this->eve_nombre = $eve_nombre;
  }

  public function setEve_fecha_hora($eve_fecha_hora) {
      $this->eve_fecha_hora = $eve_fecha_hora;
  }

  public function setEve_direccion($eve_direccion) {
      $this->eve_direccion = $eve_direccion;
  }

  public function setEve_nombre_contacto($eve_nombre_contacto) {
      $this->eve_nombre_contacto = $eve_nombre_contacto;
  }

  public function setEve_correo_contacto($eve_correo_contacto) {
      $this->eve_correo_contacto = $eve_correo_contacto;
  }

  public function setEve_telefono_contacto($eve_telefono_contacto) {
      $this->eve_telefono_contacto = $eve_telefono_contacto;
  }

  public function setEve_valor_boleta($eve_valor_boleta) {
      $this->eve_valor_boleta = $eve_valor_boleta;
  }

  public function setEve_latitud($eve_latitud) {
      $this->eve_latitud = $eve_latitud;
  }

  public function setEve_longitud($eve_longitud) {
      $this->eve_longitud = $eve_longitud;
  }

  public function setFecha_inicio_publicacion($fecha_inicio_publicacion) {
      $this->fecha_inicio_publicacion = $fecha_inicio_publicacion;
  }

  public function setFecha_fin_publicacion($fecha_fin_publicacion) {
      $this->fecha_fin_publicacion = $fecha_fin_publicacion;
  }

  public function setEst_id($est_id) {
      $this->est_id = $est_id;
  }

  public function setEve_created_at($eve_created_at) {
      $this->eve_created_at = $eve_created_at;
  }

  public function setEve_updated_at($eve_updated_at) {
      $this->eve_updated_at = $eve_updated_at;
  }

  public function setEve_deleted_at($eve_deleted_at) {
      $this->eve_deleted_at = $eve_deleted_at;
  }


}