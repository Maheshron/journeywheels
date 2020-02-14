<?php
$db=new PDO('mysql:host=localhost;dbname=journey_wheels;charset = utf8mb4','journey_wheels','journey_wheels',
    array(PDO::ATTR_EMULATE_PREPARES =>false,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));

