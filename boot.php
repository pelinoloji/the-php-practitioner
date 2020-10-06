<?php

require 'db/Connector.php';
require 'db/QueryBuilder.php';

// $pdo = Connector::make();
// $db = new QueryBuilder($pdo);

return new QueryBuilder(Connector::make());
