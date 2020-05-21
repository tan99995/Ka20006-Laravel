<?php
<<<<<<< HEAD

declare(strict_types=1);

=======
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
/**
 * This file is part of phpDocumentor.
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 *
<<<<<<< HEAD
 * @link http://phpdoc.org
=======
 *  @copyright 2010-2017 Mike van Riel<mike@phpdoc.org>
 *  @license   http://www.opensource.org/licenses/mit-license.php MIT
 *  @link      http://phpdoc.org
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
 */

namespace phpDocumentor\Reflection\DocBlock\Tags\Reference;

use phpDocumentor\Reflection\Fqsen as RealFqsen;

/**
<<<<<<< HEAD
 * Fqsen reference used by {@see \phpDocumentor\Reflection\DocBlock\Tags\See}
 */
final class Fqsen implements Reference
{
    /** @var RealFqsen */
    private $fqsen;

=======
 * Fqsen reference used by {@see phpDocumentor\Reflection\DocBlock\Tags\See}
 */
final class Fqsen implements Reference
{
    /**
     * @var RealFqsen
     */
    private $fqsen;

    /**
     * Fqsen constructor.
     */
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
    public function __construct(RealFqsen $fqsen)
    {
        $this->fqsen = $fqsen;
    }

    /**
     * @return string string representation of the referenced fqsen
     */
<<<<<<< HEAD
    public function __toString() : string
    {
        return (string) $this->fqsen;
=======
    public function __toString()
    {
        return (string)$this->fqsen;
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
    }
}
