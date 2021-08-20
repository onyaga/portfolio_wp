<?php
/*
  functionファイル読み込み
-------------------------------*/
foreach ( glob( TEMPLATEPATH . '/functions/*.php' ) as $file ) {
    require_once $file;
}