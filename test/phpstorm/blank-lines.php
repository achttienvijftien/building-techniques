<?php
/**
 * Blank-lines
 *
 * @package achttienvijftien/building-techniques
 * @noinspection PhpUnused
 * @noinspection PhpUnusedAliasInspection
 * @noinspection PhpUnusedLocalVariableInspection
 */

namespace Acme\Package;

use stdClass;
use SplFileInfo;

/**
 * Class Quux
 *
 * @package Acme\Package
 */
class Quux {
	const X = 1;
	const Y = 2;
	/**
	 * X.
	 *
	 * @var string
	 */
	public $x;
	/**
	 * Y.
	 *
	 * @var string
	 */
	public $y;

	/**
	 * A.
	 *
	 * @var string
	 */
	public static $a;
	/**
	 * B.
	 *
	 * @var string
	 */
	public static $b;

	/**
	 * Foo
	 */
	public function foo() {

	}

	/**
	 * Bar
	 */
	public function bar() {
		$a = 'a';

		$b = 'b';

	}

	/**
	 * Bar 2
	 *
	 * @return string
	 */
	public function bar_2(): string {
		return self::$a . self::$b;
	}

	/**
	 * Bar 3.
	 *
	 * @return null
	 */
	public function bar_3() {
		echo 'null';

		return null;
	}
}

/**
 * Function
 */
function function_declaration() {

}

call_user_func( 'function_declaration' );
