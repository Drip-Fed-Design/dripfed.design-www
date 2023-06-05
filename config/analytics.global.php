<?php
//
// ------------------------------------------------------------
// ------------------------------------------------------------
// ------------------------------------------------------------
// ---------- ANALYTICS ----------
// ----------
// ----------
//
// if (getenv('ENVIRONMENT_STATE') === 'production') {
if ($htmlExporting === true) {
    echo '<script async defer src="https://scripts.withcabin.com/hello.js"></script>';
} else {
    echo '<!-- [withcabin-disabled] -->';
}
