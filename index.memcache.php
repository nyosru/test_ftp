<?php

    // $memcache = new Memcache;
    // $memcacheD = new Memcached;
    // $memcache->addServer($host);
    // $memcacheD->addServers($servers);

$memcached = new Memcached();

$memcached->addServer('localhost', 11211);

$memcached->set( 'key', date('Y m d h i s',$_SERVER['REQUEST_TIME']) );

// Если всё ок, то выведет value
echo $memcached->get('key');
    