<?php

// Data for conection to database
define(DB_HOST, 'localhost');
define(DB_USER, 'root');
define(DB_PASS, '');
define(DB_DB, 'pp');

// Private key si secret key for PayPal API
define(P_KEY,'AfggdM1zDTXbtJ4YLvnQy70roxDan8Swqtm4K-CdZO4c3HpBV_MAVfEjjFsFqJTNQCW-WMV-meVdGNg1');
define(P_SEC,'EJ3lvGVMSwrgHcQG_yVL2f7kFoiWB7yMslgX1uPUJtvP6QU_E0M5RibVr7CfWq8bzO4ohZJ07TBH_WvA');
define(P_MODE, 'sandbox');

// Web settings
define(WEB_TITLE, 'User Panel Application');
define(WEB_EMAIL, 'cristea_gabriel@yahoo.com');

// Other settings
define(TIMP, time());
define(JUMBO, true);
// If you have in a folder (domeniu.com/cs) use TRUE and folder name else use only FALSE
define(FOLDER, true);
define(FOL_NAME, 'beta');

// GameQ settings (if JUMBO is true)
define(GQ_MOD, 'cs');
define(GQ_PORT, '27015');
define(GQ_IP, '89.40.233.161');

?>