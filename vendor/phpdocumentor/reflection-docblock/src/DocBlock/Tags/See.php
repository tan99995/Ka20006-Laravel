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
 * @link http://phpdoc.org
=======
 * @copyright 2010-2015 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
 */

namespace phpDocumentor\Reflection\DocBlock\Tags;

use phpDocumentor\Reflection\DocBlock\Description;
use phpDocumentor\Reflection\DocBlock\DescriptionFactory;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Fqsen as FqsenRef;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Reference;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Url;
use phpDocumentor\Reflection\FqsenResolver;
use phpDocumentor\Reflection\Types\Context as TypeContext;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
use function preg_match;
use function preg_split;
=======
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292

/**
 * Reflection class for an {@}see tag in a Docblock.
 */
<<<<<<< HEAD
final class See extends BaseTag implements Factory\StaticMethod
{
    /** @var string */
    protected $name = 'see';

    /** @var Reference */
    protected $refers;

    /**
     * Initializes this tag.
     */
    public function __construct(Reference $refers, ?Description $description = null)
    {
        $this->refers      = $refers;
        $this->description = $description;
    }

    public static function create(
        string $body,
        ?FqsenResolver $typeResolver = null,
        ?DescriptionFactory $descriptionFactory = null,
        ?TypeContext $context = null
    ) : self {
        Assert::notNull($typeResolver);
        Assert::notNull($descriptionFactory);

        $parts = preg_split('/\s+/Su', $body, 2);
        Assert::isArray($parts);
=======
class See extends BaseTag implements Factory\StaticMethod
{
    protected $name = 'see';

    /** @var Reference */
    protected $refers = null;

    /**
     * Initializes this tag.
     *
     * @param Reference $refers
     * @param Description $description
     */
    public function __construct(Reference $refers, Description $description = null)
    {
        $this->refers = $refers;
        $this->description = $description;
    }

    /**
     * {@inheritdoc}
     */
    public static function create(
        $body,
        FqsenResolver $resolver = null,
        DescriptionFactory $descriptionFactory = null,
        TypeContext $context = null
    ) {
        Assert::string($body);
        Assert::allNotNull([$resolver, $descriptionFactory]);

        $parts       = preg_split('/\s+/Su', $body, 2);
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
        $description = isset($parts[1]) ? $descriptionFactory->create($parts[1], $context) : null;

        // https://tools.ietf.org/html/rfc2396#section-3
        if (preg_match('/\w:\/\/\w/i', $parts[0])) {
            return new static(new Url($parts[0]), $description);
        }

<<<<<<< HEAD
        return new static(new FqsenRef($typeResolver->resolve($parts[0], $context)), $description);
=======
        return new static(new FqsenRef($resolver->resolve($parts[0], $context)), $description);
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
    }

    /**
     * Returns the ref of this tag.
<<<<<<< HEAD
     */
    public function getReference() : Reference
=======
     *
     * @return Reference
     */
    public function getReference()
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
    {
        return $this->refers;
    }

    /**
     * Returns a string representation of this tag.
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
        return $this->refers . ($this->description ? ' ' . $this->description->render() : '');
    }
}
