<?php

if ($site->hasMethod('settings')) {
    echo $site->settings()->tracking_codes_body_start();
} else {
    echo $site->tracking_codes_body_start();
}
