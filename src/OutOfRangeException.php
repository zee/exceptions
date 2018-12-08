<?php
/**
 * This file is part of {@see https://github.com/zee/ Zee Project}
 */

namespace Zee\Exceptions;

use OutOfRangeException as BaseException;

/**
 * Class OutOfRangeException.
 */
class OutOfRangeException extends BaseException implements Throwable
{
    use ThrowableContextTrait;
}
