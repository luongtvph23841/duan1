<?php

// Hàm kết nối dữ liệu
function db_connect()
{
    try {
        global $conn;
        $db = func_get_arg(0);
        $conn = new PDO("mysql:host={$db['hostname']};dbname={$db['database']};charset=utf8", $db['username'], $db['password'], [
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}

// Thực thi câu truy vấn
function db_query($query_string)
{
    global $conn;
    $stmt = $conn->prepare($query_string);
    $stmt->execute();
    $result = $conn->query($query_string);
    return $stmt;
}

// Lấy một dòng trong CSDL
function db_fetch_row($query_string)
{
    global $conn;
    $result = array();
    $pdo_result = db_query($query_string);
    $pdo_result->setFetchMode(PDO::FETCH_ASSOC);
    return $pdo_result->fetch();
}

//Lấy một mảng trong CSDL
function db_fetch_array($query_string)
{
    global $conn;
    $result = array();
    $pdo_result = db_query($query_string);
    foreach ($pdo_result->fetchAll() as $k => $v) {
        $result[] = $v;
    }
    return $result;
}

//Lấy số bản ghi
function db_num_rows($query_string)
{
    global $conn;
    $pdo_result = db_query($query_string);
    return $pdo_result->fetchColumn();
}

function db_insert($table, $data)
{
    global $conn;
    $fields = "(" . implode(", ", array_keys($data)) . ")";
    $values = "";
    foreach ($data as $field => $value) {
        if ($value === NULL)
            $values .= "NULL, ";
        else
            $values .= "'" . escape_string($value) . "', ";
    }
    $values = substr($values, 0, -2);
    db_query("
            INSERT INTO $table $fields
            VALUES($values)
        ");
    return $conn->lastInsertId();
}

function db_update($table, $data, $where)
{
    global $conn;
    $sql = "";
    foreach ($data as $field => $value) {
        if ($value === NULL)
            $sql .= "$field=NULL, ";
        else
            $sql .= "$field='" . escape_string($value) . "', ";
    }
    $sql = substr($sql, 0, -2);
    db_query("
            UPDATE $table
            SET $sql
            WHERE $where
   ");
    return db_fetch_array("SELECT * FROM `$table` WHERE $where");
}

function db_delete($table, $where)
{
    global $conn;
    $query_string = "DELETE FROM " . $table . " WHERE $where";
    return db_query($query_string);
}

function escape_string($str)
{
    return $str;
}

// Hiển thị lỗi SQL
function db_sql_error($message, $query_string = "")
{
    global $conn;

    $sqlerror = "<table width='100%' border='1' cellpadding='0' cellspacing='0'>";
    $sqlerror .= "<tr><th colspan='2'>{$message}</th></tr>";
    $sqlerror .= ($query_string != "") ? "<tr><td nowrap> Query SQL</td><td nowrap>: " . $query_string . "</td></tr>\n" : "";
    $sqlerror .= "<tr><td nowrap> Error Number</td><td nowrap>: " . mysqli_errno($conn) . " " . mysqli_error($conn) . "</td></tr>\n";
    $sqlerror .= "<tr><td nowrap> Date</td><td nowrap>: " . date("D, F j, Y H:i:s") . "</td></tr>\n";
    $sqlerror .= "<tr><td nowrap> IP</td><td>: " . getenv("REMOTE_ADDR") . "</td></tr>\n";
    $sqlerror .= "<tr><td nowrap> Browser</td><td nowrap>: " . getenv("HTTP_USER_AGENT") . "</td></tr>\n";
    $sqlerror .= "<tr><td nowrap> Script</td><td nowrap>: " . getenv("REQUEST_URI") . "</td></tr>\n";
    $sqlerror .= "<tr><td nowrap> Referer</td><td nowrap>: " . getenv("HTTP_REFERER") . "</td></tr>\n";
    $sqlerror .= "<tr><td nowrap> PHP Version </td><td>: " . PHP_VERSION . "</td></tr>\n";
    $sqlerror .= "<tr><td nowrap> OS</td><td>: " . PHP_OS . "</td></tr>\n";
    $sqlerror .= "<tr><td nowrap> Server</td><td>: " . getenv("SERVER_SOFTWARE") . "</td></tr>\n";
    $sqlerror .= "<tr><td nowrap> Server Name</td><td>: " . getenv("SERVER_NAME") . "</td></tr>\n";
    $sqlerror .= "</table>";
    $msgbox_messages = "<meta http-equiv=\"refresh\" content=\"9999\">\n<table class='smallgrey' cellspacing=1 cellpadding=0>" . $sqlerror . "</table>";
    echo $msgbox_messages;
    exit;
}
