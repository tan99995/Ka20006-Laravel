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
use phpDocumentor\Reflection\DocBlock\Tags\Formatter\PassthroughFormatter;
<<<<<<< HEAD
use function vsprintf;
=======
use Webmozart\Assert\Assert;
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292

/**
 * Object representing to description for a DocBlock.
 *
 * A Description object can consist of plain text but can also include tags. A Description Formatter can then combine
 * a body template with sprintf-style placeholders together with formatted tags in order to reconstitute a complete
 * description text using the format that you would prefer.
 *
 * Because parsing a Description text can be a verbose process this is handled by the {@see DescriptionFactory}. It is
 * thus recommended to use that to create a Description object, like this:
 *
 *     $description = $descriptionFactory->create('This is a {@see Description}', $context);
 *
 * The description factory will interpret the given body and create a body template and list of tags from them, and pass
 * that onto the constructor if this class.
 *
 * > The $context variable is a class of type {@see \phpDocumentor\Reflection\Types\Context} and contains the namespace
 * > and the namespace aliases that apply to this DocBlock. These are used by the Factory to resolve and expand partial
 * > type names and FQSENs.
 *
 * If you do not want to use the DescriptionFactory you can pass a body template and tag listing like this:
 *
 *     $description = new Description(
 *         'This is a %1$s',
 *         [ new See(new Fqsen('\phpDocumentor\Reflection\DocBlock\Description')) ]
 *     );
 *
 * It is generally recommended to use the Factory as that will also apply escaping rules, while the Description object
 * is mainly responsible for rendering.
 *
 * @see DescriptionFactory to create a new Description.
 * @see Description\Formatter for the formatting of the body and tags.
 */
class Description
{
    /** @var string */
    private $bodyTemplate;

    /** @var Tag[] */
    private $tags;

    /**
     * Initializes a Description with its body (template) and a listing of the tags used in the body template.
     *
<<<<<<< HEAD
     * @param Tag[] $tags
     */
    public function __construct(string $bodyTemplate, array $tags = [])
    {
        $this->bodyTemplate = $bodyTemplate;
        $this->tags         = $tags;
    }

    /**
     * Returns the body template.
     */
    public function getBodyTemplate() : string
    {
        return $this->bodyTemplate;
=======
     * @param string $bodyTemplate
     * @param Tag[] $tags
     */
    public function __construct($bodyTemplate, array $tags = [])
    {
        Assert::string($bodyTemplate);

        $this->bodyTemplate = $bodyTemplate;
        $this->tags = $tags;
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
    }

    /**
     * Returns the tags for this DocBlock.
     *
     * @return Tag[]
     */
<<<<<<< HEAD
    public function getTags() : array
=======
    public function getTags()
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
    {
        return $this->tags;
    }

    /**
     * Renders this description as a string where the provided formatter will format the tags in the expected string
     * format.
<<<<<<< HEAD
     */
    public function render(?Formatter $formatter = null) : string
=======
     *
     * @param Formatter|null $formatter
     *
     * @return string
     */
    public function render(Formatter $formatter = null)
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
    {
        if ($formatter === null) {
            $formatter = new PassthroughFormatter();
        }

        $tags = [];
        foreach ($this->tags as $tag) {
            $tags[] = '{' . $formatter->format($tag) . '}';
        }

        return vsprintf($this->bodyTemplate, $tags);
    }

    /**
     * Returns a plain string representation of this description.
<<<<<<< HEAD
     */
    public function __toString() : string
=======
     *
     * @return string
     */
    public function __toString()
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
    {
        return $this->render();
    }
}
