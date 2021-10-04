<?php

namespace phpmx;

use phpmx\ACF\ACF;
use phpmx\CustomPostTypes\BlocksPage;

class Bootstrap {
	public static function init() {
		add_action( 'admin_menu', fn() => self::modify_admin_menu(), 10, 0 );

		ACF::init();
		BlocksPage::init();
	}

	public static function modify_admin_menu() {
		remove_submenu_page( 'index.php', 'update-core.php' );
	}
}
