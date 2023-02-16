<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

$colleges = $queryBuilder->getAllFiltered('college',["location_id"=>$id], 'App\Model\College');
/* $college->type = $queryBuilder->findById('type',$college->type_id,'App\Model\Type');
$college->location = $queryBuilder->findById('location',$college->location_id,'App\Model\Location'); */

require 'views/locations.show.view.php';