<?php
<<<<<<< HEAD

declare(strict_types=1);

=======
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
<<<<<<< HEAD
=======
 * @copyright 2010-2015 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\DocBlock;

use phpDocumentor\Reflection\DocBlock\Tags\Formatter;

interface Tag
{
<<<<<<< HEAD
    public function getName() : string;

    /**
     * @return Tag|mixed Class that implements Tag
     *
     * @phpstan-return ?Tag
     */
    public static function create(string $body);

    public function render(?Formatter $formatter = null) : string;

    public function __toString() : string;
=======
    public function getName();

    public static function create($body);

    public function render(Formatter $formatter = null);

    public function __toString();
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
}
