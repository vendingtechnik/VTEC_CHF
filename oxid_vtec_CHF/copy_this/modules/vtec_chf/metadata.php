<?php

/**
 *
 * Version:    1.0
 * Author:     Pasquale Pari | Vendingtechnik
 * Author URL: http://www.vendingtechnik.com
 * 
 * License:    GNU GPL 3.0
 * !! it is forbidden to resell this Software !!
 */

/**
 * Metadata version
 */
$sMetadataVersion = '1.1';


$aModule = array (
    'id'           => 'vtec_chf',
    'title'        => 'CHF 5 Rappen Rundung für den Oxid Shop, ab CE 4.8.6',
    'description'  => 'rundet in der Währung Schweizer Franken (CHF) auf die nächsten 5 Rappen.',
    'thumbnail'    => 'vtec_chf.jpg',
    'version'      => '1.0',
    'author'       => 'Pasquale Pari',
    'url'          => 'http://www.vendingtechnik.com <br \> http://www.getraenkekiste.ch',
    'email'        => 'pasquale.pari@vendingtechnik.com',
    'extend'       => array (
        'oxprice'     => 'vtec_chf/vtec_chf',
        ),

);
