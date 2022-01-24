<?php
class DB {
    protected $dsn = "mysql:host=localhost;charset=utf8;dbname=portfolio";
    protected $user = "root";
    protected $pw = "";
    protected $pdo;
    protected $table;

    public function __construct($table) {
        $this -> table = $table;
        $this -> pdo = new PDO($this -> dsn, $this -> $user, $this -> $pw);
    }

    public function find($id) {
        $sql = "SELECT * FROM $this -> table WHERE ";

        if (is_array($id)) {
            foreach ($id as $key => $value) {
                $tmp[] = "`$key` = '$value'";
                $sql .= implode(" AND ", $tmp);
            }
        } else {
            $sql .= "`id` = '$id'";
        }
        return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }
    public function all(...$arg) {
        $sql = "SELECT * FROM $this -> table";

        switch (count($arg)) {
            case 2:
                foreach ($arg[0] as $key => $value) {
                    $tmp[] = "`$key` = '$value'";
                }
                $sql .= " WHERE " . implode(" AND ", $tmp) . " " . $arg[1];
            break;
            case 1:
                if (is_array($$arg[0])) {
                    foreach ($arg[0] as $key => $value) {
                        $tmp[] = "`$key` = '$value'";
                    }
                    $sql .= " WHERE " . implode(" AND ", $tmp);
                } else {
                    $sql .= $arg[0];
                }
            break;
        }
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
    public function math($method, $col, ...$arg) {
        $sql = "SELECT $method($col) FROM $this -> table ";
        switch (count($arg)) {
            case 2:
                foreach ($arg[0] as $key => $value) {
                    $tmp[] = "`$key` = '$value'";
                }
                $sql .= " WHERE " . implode(" AND ", $tmp) . " " . $arg[1];
            break;
            case 1:
                if (is_array($$arg[0])) {
                    foreach ($arg[0] as $key => $value) {
                        $tmp[] = "`$key` = '$value'";
                    }
                    $sql .= " WHERE " . implode(" AND ", $tmp);
                } else {
                    $sql .= $arg[0];
                }
            break;
        }
        return $this->pdo->query($sql)->fetchColumn();
    }
    

}


?>