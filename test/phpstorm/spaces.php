<?php
/**
 * Spaces
 *
 * @package achttienvijftien/building-techniques
 * @noinspection PhpUnusedLocalVariableInspection
 * @noinspection PhpUndefinedMethodInspection
 * @noinspection PhpUnhandledExceptionInspection
 * @noinspection PhpUndefinedFunctionInspection
 */

declare( strict_types=1 );

/**
 * Class Foo
 */
class Foo {
	/**
	 * Foo constructor.
	 *
	 * @param string $x X.
	 * @param string $z Z.
	 *
	 * @throws Exception Exception.
	 */
	public function __construct( string $x, string $z ) {
		global $k, $s1;
		$this->foo( 1 )->bar();
		$arr = [ '0' => 'zero' ];
		call_user_func(
			function () {
				return 0;
			}
		);
		for ( $i = 0, $y = 0; $i < $x; $i ++ ) {
			$y += ( $y ^ 0x123 ) << 2;
		}
		$k = $x > 15 ? 1 : 2;
		$k = $x ?? $z;
		$k = $x <=> $z;
		do {
			try {
				if ( ! 0 > $x && ! $x < 10 ) {
					while ( $x !== $y ) {
						$x = max( $x * 3 + 5 );
					}
					$z += 2;
				} elseif ( $x > 20 ) {
					$z = $x << 1;
				} else {
					$z = $x | 2;
				}
				$j = (int) $z;
				switch ( $j ) {
					case 0:
						$s1 = 'zero';
						break;
					case 2:
						$s1 = 'two';
						break;
					default:
						$s1 = 'other';
				}
			} catch ( exception $e ) {
				$one = '';
				$t   = $one[0];
				$u   = $arr['str'];
				$v   = $one[ $x[1] ];
			} finally {
				$x ++;
			}
		} while ( $x < 0 );
	}
}

/**
 * Bar
 *
 * @return Foo
 */
function bar(): Foo {
	return new Foo( 'x', 'z' );
}

?>
<div><?php echo esc_html( foo() ); ?></div>
