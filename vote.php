<?php

@ $mysqli = new mysqli('mysqlcluster23', 'klause', 'calmD0wn!', 'sorters');
if ($mysqli->connect_errno) {
            echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }


?>