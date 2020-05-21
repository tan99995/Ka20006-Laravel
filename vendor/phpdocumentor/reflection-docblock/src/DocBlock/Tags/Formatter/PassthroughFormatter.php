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

namespace phpDocumentor\Reflection\DocBlock\Tags\Formatter;

use phpDocumentor\Reflection\DocBlock\Tag;
use phpDocumentor\Reflection\DocBlock\Tags\Formatter;
<<<<<<< HEAD
use function trim;
=======
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292

class PassthroughFormatter implements Formatter
{
    /**
     * Formats the given tag to return a simple plain text version.
<<<<<<< HEAD
     */
    public function format(Tag $tag) : string
    {
        return trim('@' . $tag->getName() . ' ' . $tag);
=======
     *
     * @param Tag $tag
     *
     * @return string
     */
    public function format(Tag $tag)
    {
        return trim('@' . $tag->getName() . ' ' . (string)$tag);
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
    }
}
