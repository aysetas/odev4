<?php

class SQLQuery implements IQuery {

    private $table;
    private $bindings;
    private $offset;
    private $limit;
    private $wheres;
    private $action;

    public function setTable(string $table) {

          return $this;
    }
    public function addBinding(string $key, string $value) {
          return $this;
    }
    public function removeBinding(string $key) {
          return $this;
    }
    public function setPaginate(int $limit, int $offset) {
          return $this;
    }
    public function addWhere(string $column, string $operator, string $value) {
          return $this;
    }
    public function select() {
          return $this;
    }
    public function update() {
        return $this;
  }
  public function delete() {
    return $this;
}
    public function compile() {
          
    }
    
}