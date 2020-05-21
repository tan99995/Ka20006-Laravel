<?php

namespace League\Flysystem;

use LogicException;

/**
 * Thrown when the MountManager cannot find a filesystem.
 */
<<<<<<< HEAD
class FilesystemNotFoundException extends LogicException
=======
class FilesystemNotFoundException extends LogicException implements FilesystemException
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
{
}
