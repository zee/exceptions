<?php
/**
 * This file is part of {@see https://github.com/zee/ Zee Project}
 */

namespace Zee\Exceptions;

use BadMethodCallException as BaseException;

/**
 * Class BadMethodCallException.
 */
class BadMethodCallException extends BaseException implements Throwable
{
    use ThrowableContextTrait;
}
