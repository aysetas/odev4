<?php
abstract class SQL {
    use PDOConnector;
    public $connectionStatus = false;
    
    public abstract function create(SQLQuery $query);
    public abstract function update(SQLQuery $query);
    public abstract function delete(SQLQuery $query);
    public abstract function get(SQLQuery $query);

    public function isConnected() {

    }
}

