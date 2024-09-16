<?php
//
// ------------------------------------------------------------
// ------------------------------------------------------------
// ------------------------------------------------------------
// ---------- ENVIRONMENT ----------
// ----------
// ----------
//
require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__ . '/..');
$dotenv->load();

//
// ------------------------------------------------------------
// ------------------------------------------------------------
// ------------------------------------------------------------
// ---------- GENERIC ----------
// ----------
// ----------
//
$globalPrefix = getenv('CSS_PREFIX');

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
$globalDomainRoot = getenv('DOMAIN_URL');
$globalDomainContentful = 'https://cdn.contentful.com/';
$globalDomainContentfulImg = 'https://images.ctfassets.net/';

//
// ------------------------------------------------------------
// ------------------------------------------------------------
// ------------------------------------------------------------
// ---------- CONTENTFUL ----------
// ----------
// ----------
//
$spaceId = getenv('CONTENTFUL_ID');
$accessToken = getenv('CONTENTFUL_TOKEN');
$environmentId = 'master';

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

$globalTitle = 'Launch products FAST with unlimited design subscription for startups'; // Max 75 characters
$globalTitleLong = 'Launch products FAST with unlimited design subscription for startups'; // Max 75 characters
$globalDescription = 'Trusted partner for startups, agencies, and teams that need extra design and development resource. Launch products FAST with an unlimited design subscription'; // Max 160 characters
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
