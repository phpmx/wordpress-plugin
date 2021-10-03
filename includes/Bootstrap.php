<?php

namespace phpmx;

use phpmx\CustomPostTypes\BlocksPage;

class Bootstrap
{
    public static function init()
    {
        BlocksPage::init();
    }
}
