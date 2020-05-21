<?php

namespace League\Flysystem;

use RuntimeException;
use SplFileInfo;

<<<<<<< HEAD
class NotSupportedException extends RuntimeException
=======
class NotSupportedException extends RuntimeException implements FilesystemException
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
{
    /**
     * Create a new exception for a link.
     *
     * @param SplFileInfo $file
     *
     * @return static
     */
    public static function forLink(SplFileInfo $file)
    {
        $message = 'Links are not supported, encountered link at ';

        return new static($message . $file->getPathname());
    }

    /**
     * Create a new exception for a link.
     *
     * @param string $systemType
     *
     * @return static
     */
    public static function forFtpSystemType($systemType)
    {
        $message = "The FTP system type '$systemType' is currently not supported.";

        return new static($message);
    }
}
