<?php

$app = [];

$app['config'] = require 'config.php';

require 'core/router.php';
require 'core/request.php';
require 'core/db/Connection.php';
require 'core/db/QueryBuilder.php';

$app['database'] = new QueryBuilder(
  Connection::make($app['config']['database'])
);
