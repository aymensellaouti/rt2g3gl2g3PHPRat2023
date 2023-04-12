<?php

class UserRepository extends Repository
{
    public function __construct()
    {
        parent::__construct('user');
    }

    public function findByRole($role) {
        $query = 'select * from user where role = admin';
        $response =$this->dbCnx->prepare($query);
        $response->execute([$role]);
        return $response->fetchAll(PDO::FETCH_OBJ);
    }
}