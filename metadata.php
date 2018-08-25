<?php
//error_reporting( E_ALL );

$sMetadataVersion = '2.0';
$aModule = array(
    'id'           => 'katmodul',
    'title'        => 'Produkt Kategorieliste Hersteller Baujahr ',
        'description'  => array(
        'de' => 'Modul für Kategorie Hersteller Baujahr.',
        'en' => 'Module for Categoies Manufactors.',
    ),
    'thumbnail'    => '',
    'version'      => '2.0',
    'author'       => 'Suedlicht',
    'email'        => 'info@suedlicht.com',
    'extend'       => array(
     \OxidEsales\Eshop\Application\Controller\Admin\ArticleAttribute::class => \OxidEsales\KatmodulModule\Application\Controller\Admin\ArticleAttribute::class,
       //  \OxidEsales\Eshop\Application\Controller\Admin\ArticleAttribute::class => \OxidEsales\KatModul\Application\Controller\Admin\ArticleAttribute::class,
     // \OxidEsales\Eshop\Application\Controller\Admin\AdminDetailsController::class => \OxidEsales\KatModul\Application\Controller\Admin\ArticleAttributeKat::class,
     ),
     'controllers' => array(
     //   'ArticleAttributeKat' => \OxidCommunity\hdiReport\Controller\Admin\ArticleAttributeKat::class,
    ),
    
  );  
 
//error_log( E_ALL );
//echo " mettatag";

