<?php
// Created by OMD hook MULTISITE_COOKIE_AUTH
//
// Using the multisite cookie based authentication when no
// REMOTE_USER available.
//
$conf['auth_multisite_enabled']    = TRUE;
$conf['auth_multisite_htpasswd']   = '/omd/sites/cmk/etc/htpasswd';
$conf['auth_multisite_secret']     = '/omd/sites/cmk/etc/auth.secret';
$conf['auth_multisite_serials']    = '/omd/sites/cmk/etc/auth.serials';
$conf['auth_multisite_login_url']  = '/cmk/check_mk/login.py';
?>
