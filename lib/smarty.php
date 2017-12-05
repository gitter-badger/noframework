<?php

// put full path to Smarty.class.php
require(__DIR__.'/smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->template_dir = __DIR__.'/../tpl';
$smarty->compile_dir = __DIR__.'/../tmp/smarty/compiled';
$smarty->cache_dir = __DIR__.'/../tmp/smarty/cache';
$smarty->config_dir = __DIR__.'/../tpl/cfg';
