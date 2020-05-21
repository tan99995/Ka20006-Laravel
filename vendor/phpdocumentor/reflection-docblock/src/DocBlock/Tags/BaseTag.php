<?php

declare(strict_types=1);

/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
<<<<<<< HEAD
 * @link http://phpdoc.org
=======
 * @copyright 2010-2015 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
 */

namespace phpDocumentor\Reflection\DocBlock\Tags;

use phpDocumentor\Reflection\DocBlock;
use phpDocumentor\Reflection\DocBlock\Description;

/**
 * Parses a tag definition for a DocBlock.
 */
abstract class BaseTag implements DocBlock\Tag
{
    /** @var string Name of the tag */
    protected $name = '';

    /** @var Description|null Description of the tag. */
    protected $description;

    /**
     * Gets the name of this tag.
     *
     * @return string The name of this tag.
     */
<<<<<<< HEAD
    public function getName() : string
=======
    public function getName()
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
    {
        return $this->name;
    }

<<<<<<< HEAD
    public function getDescription() : ?Description
=======
    public function getDescription()
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
    {
        return $this->description;
    }

<<<<<<< HEAD
    public function render(?Formatter $formatter = null) : string
=======
    public function render(Formatter $formatter = null)
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
    {
        if ($formatter === null) {
            $formatter = new Formatter\PassthroughFormatter();
        }

        return $formatter->format($this);
    }
}
