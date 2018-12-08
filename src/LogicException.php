<?php
/**
 * This file is part of {@see https://github.com/zee/ Zee Project}
 */

namespace Zee\Exceptions;

use LogicException as BaseException;

/**
 * Class LogicException.
 */
class LogicException extends BaseException implements Throwable
{
    use ThrowableContextTrait;
}
