<?php
/**
 * Code-conversion
 *
 * @package achttienvijftien/building-techniques
 * @noinspection PhpUnused
 * @noinspection PhpUnusedParameterInspection
 * @noinspection PhpUnusedLocalVariableInspection
 */

/**
 * Class Baz
 */
class Baz {
	/**
	 * Prop
	 *
	 * @var string
	 */
	public $prop;

	/**
	 * Foo
	 *
	 * @param bool|null $one One.
	 * @param int       $two Two.
	 * @param string    $three Three.
	 *
	 * @return int
	 */
	public function foo( bool $one = null, int $two = 0, string $three = 'String' ): int {
		if ( true === $one ) {
			$x = [
				0   => 'zero',
				123 => 'one two three',
				25  => 'two five',
			];
		} elseif ( null === $one ) {
			echo null;
		} elseif ( false === $one ) {
			return 0;
		}

		return 1;
	}
}
