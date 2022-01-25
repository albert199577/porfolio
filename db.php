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
    public function save($array) {
        if (isset($array['id'])) {
            //update 
            foreach ($array as $key => $value) {
                $tmp[] = "`$key` = '$value'";
                $set = implode(" ,", $tmp);
            }
            $sql = "UPDATE $this -> table SET " . implode(" ,", $tmp) . "WHERE `id` = '{$array['id']}'";
        } else {
            //insert
            $a = array_keys($array);
            $b = array_values($array);
            foreach ($a as $key => $value) {
                $k[] = "`$value`";
            }
            foreach ($b as $key => $value) {
                $v[] = "'$value'";
            }
            $sql = "INSERT INTO $this -> table (" . implode(" ,", $k) .") VALUES(" . implode(" ,", $v) . ")";
            echo $sql;
        }
        return $this->pdo->exec($sql);
    }

    public function del($id) {
        $sql = "DELETE FROM $this -> table WHERE ";
        if (is_array($id)) {
            foreach ($id as $key => $value) {
                $tmp[] = "`$key` = '$value'";
                $sql .= implode(" AND ", $tmp);
            }
        } else {
            $sql .= "`id` = '$id'"; 
        }
        return $this->pdo->exec($sql);
    }

    public function q($sql) {
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
}

function dd($arr) {
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}

function to($a) {
    header("location:" . $a);
}




?>