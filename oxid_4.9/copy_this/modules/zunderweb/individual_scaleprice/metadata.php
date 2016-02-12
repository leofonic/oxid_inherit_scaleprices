<?php
$aModule = array(
    'id'          => 'individual_scaleprice',
    'title'       => 'Zunderweb individueller Staffelpreis',
    'description' =>  array(
        'de'=>'Erlaubt eigene Varianten-Staffelpreise auch wenn Vererbung aktiviert ist',
        'en'=>'Allows own variant scale prices even if inheritance is activated',
    ),
    'version'     => '1.0',
    'url'         => 'http://zunderweb.de',
    'email'       => 'info@zunderweb.de',
    'author'      => 'Zunderweb',
    'extend'      => array(
        'oxamountpricelist'  => 'zunderweb/individual_scaleprice/models/inherit_scaleprice_oxamountpricelist',
    )
);