<?php
/**
 * Wrapping-and-braces
 *
 * @package achttienvijftien/building-techniques
 * @noinspection PhpUnused
 * @noinspection PhpUndefinedClassInspection
 * @noinspection PhpUndefinedNamespaceInspection
 * @noinspection PhpUnusedLocalVariableInspection
 * @noinspection PhpUnusedParameterInspection
 * @noinspection PhpUndefinedMethodInspection
 */

namespace {

	$instance = ( new class() {
	} )();

	use N\{ClassName,
		AnotherClassName,
		OneMoreClassName
	};
}

namespace A {

	/**
	 * Foo
	 *
	 * @param string $x X.
	 * @param string $y Y.
	 * @param int    $z Z.
	 *
	 * @return int
	 */
	function foo( string $x, string $y, int $z ): int {
		return 0;
	}

	/**
	 * Bar
	 *
	 * @param int $x X.
	 * @param int $y Y.
	 * @param int $z Z.
	 */
	function bar(
		int $x,
		int $y,
		int $z = 1
	): int {
		$x = 0;
		// $x = 1.
		do {
			++ $y;
		} while ( $y < 10 );
		if ( 0 === $x ) {
			$x = 10;
		} elseif ( $y < 10 ) {
			$x = 5;
		} elseif ( 1 === $x ) {
			$x = 5;
		}
		for ( $i = 0; $i < 10; $i ++ ) {
			$yy = $x > 2 ? 1 : 2;
		}
		while ( $x < 2 ) {
			$x = 0;
		}
		do {
			$x ++;
		} while ( $x < 3 );
		foreach (
			[
				'a' => 0,
				'b' => 1,
				'c' => 2,
			] as $e1
		) {
			sort( $e1 );
		}
		$count = 10;
		$x     = [
			'x',
			'y',
			[
				1 => 'abc',
				2 => 'def',
				3 => 'ghi',
			],
		];
		$zz    = [
			0.1,
			0.2,
			0.3,
			0.4,
		];
		$x     = [
			0   => 'zero',
			123 => 'one two three',
			25  => 'two five',
		];
		bar(
			0,
			bar(
				1,
				'b'
			)
		);

		return 0;
	}

	/**
	 * Class Foo
	 *
	 * @package A
	 */
	abstract class Foo extends FooBaseClass implements Bar1, Bar2, Bar3 {

		/**
		 * Numbers
		 *
		 * @var string[]
		 */
		public $numbers = [
			'one',
			'two',
			'three',
			'four',
			'five',
			'six',
		];
		/**
		 * Y
		 *
		 * @var int
		 */
		public $v = 0; // comment.
		/**
		 * Path
		 *
		 * @var string
		 */
		public $path = 'root'; // comment.

		const FIRST  = 'first';
		const SECOND = 0;
		const Z      = - 1;

		/**
		 * Bar
		 *
		 * @param int    $v V.
		 * @param string $w W.
		 *
		 * @return int
		 */
		public function bar(
			int $v,
			string $w = 'a'
		): int {
			$y      = $w;
			$result = foo(
				'arg1',
				'arg2',
				10
			);
			switch ( $v ) {
				case 0:
					return 1;
				case 1:
					echo '1';
					break;
				case 2:
					break;
				default:
					$result = 10;
			}

			return $result;
		}

		/**
		 * FOne
		 *
		 * @param mixed $arg_a A.
		 * @param mixed $arg_b B.
		 * @param mixed $arg_c C.
		 * @param mixed $arg_d D.
		 * @param mixed $arg_e E.
		 * @param mixed $arg_f F.
		 * @param mixed $arg_g G.
		 * @param mixed $arg_h H.
		 */
		public function fOne( $arg_a, $arg_b, $arg_c, $arg_d, $arg_e, $arg_f, $arg_g, $arg_h ) {
			$x = $arg_a + $arg_b + $arg_c + $arg_d + $arg_e + $arg_f + $arg_g + $arg_h;
			[ $field1, $field2, $field3, $filed4, $field5, $field6 ] = explode( ',', $x );
			$this->fTwo( $arg_a, $arg_b, $arg_c, $this->fThree( $arg_d ) );
			$z      = 'Some string' === $arg_a ? 'yes' : 'no';
			$colors = [
				'red',
				'green',
				'blue',
				'black',
				'white',
				'gray',
			];
			$count  = count( $colors );
			for ( $i = 0; $i < $count; $i ++ ) {
				$color_string = $colors[ $i ];
			}
		}

		/**
		 * FTwo
		 *
		 * @param mixed $str_a A.
		 * @param mixed $str_b B.
		 * @param mixed $str_c C.
		 * @param mixed $str_d D.
		 *
		 * @return string
		 */
		public function fTwo( $str_a, $str_b, $str_c, $str_d ): string {
			if ( 'one' === $str_a || 'two' === $str_b || 'three' === $str_c ) {
				return $str_a . $str_b . $str_c;
			}
			$x = $this->one( 'a', 'b' )->two( 'c', 'd', 'e' )->three( 'fg' )->four();
			$y = a()->b()->c();

			return $str_d;
		}

		/**
		 * FThree
		 *
		 * @param mixed $str_a A.
		 *
		 * @return string
		 */
		public function fThree( $str_a ) {
			try {
				$str_a = 1 / 0;
			} catch ( Exception $e ) {
				return foo( 'x', 'y', 1 );
			} finally {
				$str_a = 'a';
			}

			return $str_a;
		}

		/**
		 * FFour
		 *
		 * @return mixed
		 */
		abstract protected function fFour();

	}
}
