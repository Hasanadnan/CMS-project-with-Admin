<?php

$db = new Database('localhost', 'cms', 'root', '');
return $db->getConn();