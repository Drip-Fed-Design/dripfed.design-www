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
// ---------- AVAILABILITY ----------
// ----------
// ----------
//
$remainingSpotsDesign = 2;
$remainingSpotsPlus = 1;

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

$globalTitle = 'Design & dev subscription for startups & teams launching products';
$globalTitleLong = 'Product design & development subscription for startups and teams launching products';
$globalDescription = 'Best-in-Class unlimited product design and development subscription for startups and teams launching products. Design as a Service agency';
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
