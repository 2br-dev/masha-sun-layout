<?php
if (!empty($this->config['charset'])) {
    $sql = '';
    $method = 'SET NAMES';
    if (!empty($this->config['connection_method'])) {
        $method = $this->config['connection_method'];
    }
    $sql.= "{$method} '{$this->config['charset']}'";
    if ($method == 'SET NAMES' && !empty($this->config['collation'])) {
        $sql.= " COLLATE '{$this->config['collation']}'";
    }
    $this->pdo->exec("SET SESSION sql_mode = 'STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';");
    $this->pdo->exec($sql);
}