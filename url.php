<?php

class Url {
    
    public $loc;
    public $lastmod;
    public $changefreq;
    public $priority;

    public function __construct($loc, $lastmod, $changefreq, $priority) {
        $this->loc = $loc;
        $this->lastmod = $lastmod;
        $this->changefreq = $changefreq;
        $this->priority = $priority;
    }

}