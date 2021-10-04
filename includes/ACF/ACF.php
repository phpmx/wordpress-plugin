<?php

namespace phpmx\ACF;

class ACF {
	public static function init() {
		add_action( 'init', fn() => self::register_fields(), 10 );
	}

	public static function register_fields() {
		$field_groups = json_decode( file_get_contents( __DIR__ . '/field-groups.json' ), true );
		foreach ( $field_groups as $field_group ) {
			acf_add_local_field_group( $field_group );
		}
	}
}
