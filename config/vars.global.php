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

$globalTitle = 'Drip Fed unlimited design subscription';
$globalTitleLong = 'Unlimited design subscription agency, Design as a Service - Drip Fed';
$globalDescription = 'We offer valuable unlimited design subscriptions, lowering your costs and bureaucracy. Drip Fed are a Design as a Service agency.';
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
