<?php
session_start();
date_default_timezone_set('Asia/Tokyo');
header('content-type: text/plain');

print_r( gd_info() );
