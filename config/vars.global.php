<?php
//
// ------------------------------------------------------------
// ------------------------------------------------------------
// ------------------------------------------------------------
// ---------- GENERIC ----------
// ----------
// ----------
//
$globalPrefix = 'dfd';
$globalVersion = '1.0';

//
// ------------------------------------------------------------
// ------------------------------------------------------------
// ------------------------------------------------------------
// ---------- DOMAINS ----------
// ----------
// ----------
//
// if (getenv('ENVIRONMENT_STATE') === 'production') {
if ($htmlExporting === true) {
    $globalDomainRoot = 'https://dripfed.design/';
} else {
    $globalDomainRoot = 'http://dripfed.design-www.dev-local/';
}

//
// ------------------------------------------------------------
// ------------------------------------------------------------
// ------------------------------------------------------------
// ---------- META ----------
// ----------
// ----------
//
$globalCompanyName = 'Drip Fed Ltd';
$globalCompanyNumber = '14871237';

$globalTitle = 'Drip Fed Design Subscription';
$globalTitleLong = 'Design Subscription micro-agency in England, we\'re Drip Fed';
$globalDescription = 'Digital design micro-agency with a design subscription model. Providing valuable digital design, with commitment and personality, lower costs and less bureaucracy.';
$globalRobots = 'index,follow';

//
// ------------------------------------------------------------
// ------------------------------------------------------------
// ------------------------------------------------------------
// ---------- MAIL ----------
// ----------
// ----------
//
$globalEmailAddress = 'hello@dripfed.design';

//
// ------------------------------------------------------------
// ------------------------------------------------------------
// ------------------------------------------------------------
// ---------- DATES & DAYS ----------
// ----------
// ----------
//
$globalDateToday = date('Y-m-d', strtotime('today'));
