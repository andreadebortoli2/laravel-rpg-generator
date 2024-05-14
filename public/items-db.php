<?php


        $myJsonData = file_get_contents('../database/items-db.json');
        $items = json_decode($myJsonData,true);

        header('Content-Type: application/json');

        var_dump($items);

        //return $myJsonData;
