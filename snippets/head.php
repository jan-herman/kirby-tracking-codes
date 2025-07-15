<?php

if ($site->hasMethod('settings')) {
    echo $site->settings()->tracking_codes_head();
} else {
    echo $site->tracking_codes_head();
}
