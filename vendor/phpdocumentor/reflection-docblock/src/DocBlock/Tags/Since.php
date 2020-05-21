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

namespace phpDocumentor\Reflection\DocBlock\Tags;

use phpDocumentor\Reflection\DocBlock\Description;
use phpDocumentor\Reflection\DocBlock\DescriptionFactory;
use phpDocumentor\Reflection\Types\Context as TypeContext;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
use function preg_match;
=======
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292

/**
 * Reflection class for a {@}since tag in a Docblock.
 */
final class Since extends BaseTag implements Factory\StaticMethod
{
<<<<<<< HEAD
    /** @var string */
=======
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
    protected $name = 'since';

    /**
     * PCRE regular expression matching a version vector.
     * Assumes the "x" modifier.
     */
<<<<<<< HEAD
    public const REGEX_VECTOR = '(?:
=======
    const REGEX_VECTOR = '(?:
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
        # Normal release vectors.
        \d\S*
        |
        # VCS version vectors. Per PHPCS, they are expected to
        # follow the form of the VCS name, followed by ":", followed
        # by the version vector itself.
        # By convention, popular VCSes like CVS, SVN and GIT use "$"
        # around the actual version vector.
        [^\s\:]+\:\s*\$[^\$]+\$
    )';

<<<<<<< HEAD
    /** @var string|null The version vector. */
    private $version;

    public function __construct(?string $version = null, ?Description $description = null)
=======
    /** @var string The version vector. */
    private $version = '';

    public function __construct($version = null, Description $description = null)
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
    {
        Assert::nullOrStringNotEmpty($version);

        $this->version     = $version;
        $this->description = $description;
    }

<<<<<<< HEAD
    public static function create(
        ?string $body,
        ?DescriptionFactory $descriptionFactory = null,
        ?TypeContext $context = null
    ) : ?self {
=======
    /**
     * @return static
     */
    public static function create($body, DescriptionFactory $descriptionFactory = null, TypeContext $context = null)
    {
        Assert::nullOrString($body);
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
        if (empty($body)) {
            return new static();
        }

        $matches = [];
<<<<<<< HEAD
        if (!preg_match('/^(' . self::REGEX_VECTOR . ')\s*(.+)?$/sux', $body, $matches)) {
            return null;
        }

        Assert::notNull($descriptionFactory);

        return new static(
            $matches[1],
            $descriptionFactory->create($matches[2] ?? '', $context)
=======
        if (! preg_match('/^(' . self::REGEX_VECTOR . ')\s*(.+)?$/sux', $body, $matches)) {
            return null;
        }

        return new static(
            $matches[1],
            $descriptionFactory->create(isset($matches[2]) ? $matches[2] : '', $context)
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
        );
    }

    /**
     * Gets the version section of the tag.
<<<<<<< HEAD
     */
    public function getVersion() : ?string
=======
     *
     * @return string
     */
    public function getVersion()
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
    {
        return $this->version;
    }

    /**
     * Returns a string representation for this tag.
<<<<<<< HEAD
     */
    public function __toString() : string
    {
        return (string) $this->version . ($this->description ? ' ' . (string) $this->description : '');
=======
     *
     * @return string
     */
    public function __toString()
    {
        return $this->version . ($this->description ? ' ' . $this->description->render() : '');
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
    }
}
