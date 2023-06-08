<?php


$connexionPDO = new PDO ('mysql:host=127.0.0.1;dbname=cs_cafe;charset=UTF8',
            "root",
            "",
            array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            )
        );

