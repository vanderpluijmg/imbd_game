<?php

abstract class Model
{
    /**
     * Acces to the database.
     * @param $sql
     * @param null $params
     * @return array|false
     */
    protected function executeRequest($sql, $params = null)
    {
        $db = new PDO('mysql:host=localhost;dbname=gamedb;charset=utf8',
            'root', '');
        return $params == null ? $db->query($sql)->fetchAll() : $db->prepare($sql)->execute($params)->fetchAll();
    }
}