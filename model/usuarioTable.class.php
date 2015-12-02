<?php

use FStudio\model\base\usuarioBaseTable;

/**
 * Description of usuarioTable
 *
 * @author luis david sicua
 */
class usuarioTable extends usuarioBaseTable {

  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT usu_id AS id, usu_usuario AS usuario, usu_password AS password, '
            . 'usu_activado AS activado, rol_id AS rol_id, usu_created_at AS created_at, '
            . 'usu_updated_at AS updated_at, usu_deleted_at AS deleted_at '
            . 'FROM bdp_usuario '
            . 'WHERE usu_deleted_at IS NULL '
            . 'ORDER BY usu_created_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT usu_id AS id, usu_usuario AS usuario, usu_password AS password, '
            . 'usu_activo AS activado, rol_id AS rol_id, usu_created_at AS created_at, '
            . 'usu_updated_at AS updated_at, usu_deleted_at AS deleted_at '
            . 'FROM bdp_usuario '
            . 'WHERE usu_deleted_at IS NULL '
            . 'AND usu_id = :id';
    $params = array(
        ':id' => ($id !== null) ? $id : $this->getById()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function comparar($user, $pass) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT usu_usuario FROM bdp_usuario WHERE usu_usuario=:user and usu_password=:pass';
    $params = array(
        ':user' => $user,
        ':pass' => $pass
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? true : false;
  }

  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO bdp_usuario '
            . '(usu_id, usu_usuario, usu_password, usu_activo, rol_id) '
            . 'VALUES (:id, :usuario, :password, :activo, :rol_id)';
    $params = array(
        ':id' => $this->nextId(),
        ':usuario' => $this->getUsuario(),
        ':password' => $this->getPassword(),
        ':activo' => 1,
        ':rol_id' => $this->getRolId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    $this->setId($params[':id']);
    return true;
  }

  public function nextId() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT IFNULL(MAX(usu_id),0)+1 AS id FROM bdp_usuario ORDER BY id DESC LIMIT 1';
    $answer = $conn->prepare($sql);
    $answer->execute();
    $answer = $answer->fetchAll(PDO::FETCH_OBJ);
    return $answer[0]->id;
  }

  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE bdp_usuario SET '
            . 'usu_usuario = :usuario, '
            . 'usu_password = :password, '
            . 'usu_activado = :activado, '
            . 'rol_id = :rol_id '
            . 'WHERE usu_id = :id';
    $params = array(
        ':usuario' => $this->getUsuario(),
        ':password' => $this->getPassword(),
        ':activado' => $this->getActivado(),
        ':rol_id' => $this->getRolId(),
        ':id' => $this->getId()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

  public function delete($deleteLogical = true) {
    $conn = $this->getConnection($this->config);
    $params = array(
        ':id' => $this->getId()
    );
    switch ($deleteLogical) {
      case true:
        $sql = 'UPDATE bdp_usuario SET usu_deleted_at = now() WHERE usu_id = :id';
        break;
      case false:
        $sql = 'DELETE FROM bdp_usuario WHERE usu_id = :id';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

  public function verificarUsuario() {
    $conn = $this->getConnection($this->config);
    $sql = "SELECT usu_id FROM bdp_usuario WHERE usu_deleted_at IS NULL AND usu_activado = '1' AND (usu_usuario = :usuario AND usu_password = :password)";
    $params = array(
        ':usuario' => $this->getUsuario(),
        ':password' => $this->getPassword()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? true : false;
  }

  public function getDataByUserPassword() {
    $conn = $this->getConnection($this->config);
    $sql = "SELECT bdp_usuario.usu_id AS id, usu_usuario AS usuario, dus_nombre AS nombre, dus_apellidos AS apellidos FROM bdp_usuario "
            . "INNER JOIN bdp_dato_usuario ON bdp_usuario.usu_id=bdp_dato_usuario.dus_id WHERE (bdp_usuario.usu_deleted_at "
            . "IS NULL AND bdp_usuario.usu_activado = '1') AND bdp_dato_usuario.dus_deleted_at IS NULL "
            . "AND (usu_usuario = :usuario AND usu_password = :password)";
    $params = array(
        ':usuario' => $this->getUsuario(),
        ':password' => $this->getPassword()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ)[0] : false;
  }

}
