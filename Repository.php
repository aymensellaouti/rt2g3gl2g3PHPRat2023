<?php

class Repository
{
    protected PDO $dbCnx ;

    public function __construct(protected $dbName)
    {
        $this->dbCnx = ConnexionBD::getInstance();
    }
    // ['role' => 'admin']
    public function findAll($criterias = []) {
        $query = "select * from $this->dbName";
        if (count($criterias)) {
            $query .= " where ";
            // Todo complete this method
        }
        $response = $this->dbCnx->prepare($query);
        $response->execute([]);
        return $response->fetchAll(PDO::FETCH_OBJ);
    }

    public function findById($id) {
        $query = "select * from $this->dbName where id = ?";
        $response = $this->dbCnx->prepare($query);
        $response->execute([$id]);
        return $response->fetch(PDO::FETCH_OBJ);
    }
    public function delete($id) {
        $query = "delete from $this->dbName where id = ?";
        $response = $this->dbCnx->prepare($query);
        $response->execute([$id]);
    }
    public function create($params) {
        // ['username' => "farah", "password" => 'farah', "role" => "admin"]
        $keys = array_keys($params);
        // [`username`, `password`, `role` ]
        $keysString = implode(",", $keys);
//        $paramsQuery = array_map(function($element) {
//            return '?';
//        }, $keys);
        $paramsQuery = implode(",",array_fill(0,count($keys), '?'));
        $query = "INSERT INTO $this->dbName (`id`, $keysString ) VALUES (NULL,$paramsQuery);";
        $response = $this->dbCnx->prepare($query);
        $response->execute(array_values($params));
    }
}