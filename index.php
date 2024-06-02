<?php $conn = new mysqli("localhost", "admin", "Centos12.", "linuxconfig"); if ($conn->connect_error) { die("ERROR: Unable to connect: " . $conn->connect_error); } echo 'Connected to the database.
'; $conn->close(); 

