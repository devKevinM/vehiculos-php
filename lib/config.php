<?php
require_once 'php-activerecord/activerecord.php';
// $con = 'mysql://username:password@localhost/database_name'

activerecord\config::initialize(function ($cfg) {
    $cfg->set_model_directory('models');
    $cfg->set_connections(array(
            'development' => 'mysql://root:@localhost/vehiculos',
            'production' => 'mysql://ugtgxqnzt1vjbtcj:bEC4ctMWxIOrX6PH13gC@bdmpfeip0mjkrnjyzgqo-mysql.services.clever-cloud.com:3306/bdmpfeip0mjkrnjyzgqo'
        )
    );
});
