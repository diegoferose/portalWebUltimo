<?php

namespace portalWebUltimo\model\base;

use portalWebUltimo\fsmodel as model;
use portalWebUltimo\myConfig as config;


/**
 * Description of bdpcategoria
 *
 * @author JuanGabo
 */
class categoriaBaseTable {

    const ID = 'cant_id';
    const NOMBRE = 'cat_nombre';
    const NOMBRE_LENGTH = '30';
    const ACTIVO = 'cat_activo';
    const CAT = 'cat_cat';
    const CREATED_AT = 'cat_created_at';
    const UPDATE_AT = ' cat_upstade_at';
    const DELETED_AT = 'cat_delete_at';

    /** 
     * Configuracion del sistema
     * @var config
     */

    protected $config;
    private $id;
    private $nombre;
    private $activo;
    private $cat;
    private $created_at;
    private $update_at;
    private $delete_at;
    
    public function _construct(config $config, $id = null, $credencial_id =null, $usuario = null, $password = null, $activado = 't', $last_login_at = null, $created_at = null, $updated_at = null, $deleted_at = null) {
        $this->config = $config;
        $this->id = $id;
        $this->nombre = $nombre;
        $this->activo = $activo;
        $this->cat = $cat;
        $this->created_at = $created_at;
        $this->update_at = $update_at;
        $this->delete_at = $delete_at;
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function getNombre(){
        return $this->nombre;
    }
    
    public function getActivo(){
        return $this->activo;
    }
    
    public function getCat(){
        return $this->cat;
    }
    
    public function getCreated_at(){
        return $this->created_at;
    }
    
    public function getUpdate_at(){
        return $this->update_at;
    }
    
    public function getDelete_at(){
        return $this->delete_at;
    }
    
      public function setId($id){
       $this->id;
    }
    
      public function setNombre($nombre){
       $this->id;
    }
      public function setActivo($activo){
       $this->id;
    }
      public function setCat($cat){
       $this->id;
    }
      public function setCreated_at($created_at){
       $this->id;
    }
      public function setUpdate_at($update_at){
       $this->id;
    }
      public function setDelete_at($delete_At){
       $this->id;
    }
}

