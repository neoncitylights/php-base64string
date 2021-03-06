<?php

namespace Neoncitylights\DataUrl;

use InvalidArgumentException;

/**
 * @license MIT
 */
class InvalidDataUrlSyntaxException extends InvalidArgumentException {
	/**
	 * @param string $errorMessage
	 * @param string $invalidDataUrl
	 */
	public function __construct( string $errorMessage, string $invalidDataUrl ) {
		parent::__construct(
			"{$errorMessage} " .
			"The invalid data URL that was passed is: {$invalidDataUrl}"
		);
	}
}
