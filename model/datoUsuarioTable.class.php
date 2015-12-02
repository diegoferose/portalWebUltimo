<?php

use FStudio\model\base\datoUsuarioBaseTable;

/**
 * Description of datoUsuarioTable
 *
 * @author luis david sicua 
 */
class datoUsuarioTable extends datoUsuarioBaseTable {

  public function getAll() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT dus_id AS id, usu_id AS usu_id, dus_nombre AS nombre, '
            . 'dus_apellido AS apellido, dus_correo AS correo, dus_genero AS genero, '
            . 'dus_fecha_nacimiento AS fecha_nacimiento, dus_facebook AS facebook, '
            . 'dus_twitter AS twitter, dus_google_plus AS google_plus, '
            . 'dus_avatar AS avatar, dus_create_at AS create_at, '
            . 'dus_updated_at AS updated, dus_deleted_at AS deleted_at '
            . 'FROM bdp_dato_usuario '
            . 'where dus_deleted_at is NULL '
            . 'order by dus_create_at ASC';
    $answer = $conn->prepare($sql);
    $answer->execute();
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function getById($id = null) {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT dus_id AS id, usu_id AS usu_id, dus_nombre AS nombre, '
            . 'dus_apellido AS apellido, dus_correo AS correo, dus_genero AS genero, '
            . 'dus_fecha_nacimiento AS fecha_nacimiento, dus_facebook AS facebook, '
            . 'dus_twitter AS twitter, dus_google_plus AS google_plus, '
            . 'dus_avatar AS avatar, dus_create_at AS create_at, '
            . 'dus_updated_at AS updated, dus_deleted_at AS deleted_at '
            . 'FROM bdp_dato_usuario '
            . 'where dus_deleted_at is NULL '
            . 'and dus_id = :id';
    $params = array(
        ':id' => ($id !== null) ? $id : $this->getById()
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return ($answer->rowCount() > 0) ? $answer->fetchAll(PDO::FETCH_OBJ) : false;
  }

  public function save() {
    $conn = $this->getConnection($this->config);
    $sql = 'INSERT INTO bdp_dato_usuario '
            . '(dus_id, usu_id, dus_nombre, dus_apellidos, dus_correo) '
            . 'VALUES (:id, :usu_id, :nombre, :apellidos, :correo)';
    $params = array(
        ':id' => $this->getUsuId(),
        ':usu_id' => $this->getUsuId(),
        ':nombre' => $this->getNombre(),
        ':apellidos' => $this->getApellidos(),
        ':correo' => $this->getCorreo(),
    );
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    $this->setId($params[':id']);
    return true;
  }

  public function nextId() {
    $conn = $this->getConnection($this->config);
    $sql = 'SELECT IFNULL(MAX(dus_id),0)+1 AS id FROM bdp_dato_usuario ORDER BY id DESC LIMIT 1';
    $answer = $conn->prepare($sql);
    $answer->execute();
    $answer = $answer->fetchAll(PDO::FETCH_OBJ);
    return $answer[0]->id;
  }

  public function update() {
    $conn = $this->getConnection($this->config);
    $sql = 'UPDATE bdp_dato_usuario SET '
            . 'dus_nombre = :nombre, dus_apellidos = :apellidos, '
            . 'dus_correo = :correo, '
            . 'WHERE usu_id = :id';
    $params = array(
        ':nombre' => $this->getNombre(),
        ':apellidos' => $this->getApellidos(),
        ':correo' => $this->getCorreo(),
        ':id' => $this->getUsuId()
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
        $sql = 'UPDATE usuario SET deleted_at = now() WHERE id = :id';
        break;
      case false:
        $sql = 'DELETE FROM usuario WHERE id = :id';
        break;
      default:
        throw new PDOException('Por favor indique un dato coherente para el borrado lógico (true) o físico (false)');
    }
    $answer = $conn->prepare($sql);
    $answer->execute($params);
    return true;
  }

}
