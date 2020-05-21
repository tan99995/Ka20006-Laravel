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
use phpDocumentor\Reflection\Fqsen;
use phpDocumentor\Reflection\FqsenResolver;
use phpDocumentor\Reflection\Types\Context as TypeContext;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
use function preg_split;
=======
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292

/**
 * Reflection class for a @covers tag in a Docblock.
 */
final class Covers extends BaseTag implements Factory\StaticMethod
{
<<<<<<< HEAD
    /** @var string */
    protected $name = 'covers';

    /** @var Fqsen */
    private $refers;

    /**
     * Initializes this tag.
     */
    public function __construct(Fqsen $refers, ?Description $description = null)
    {
        $this->refers      = $refers;
        $this->description = $description;
    }

    public static function create(
        string $body,
        ?DescriptionFactory $descriptionFactory = null,
        ?FqsenResolver $resolver = null,
        ?TypeContext $context = null
    ) : self {
        Assert::notEmpty($body);
        Assert::notNull($descriptionFactory);
        Assert::notNull($resolver);

        $parts = preg_split('/\s+/Su', $body, 2);
        Assert::isArray($parts);

        return new static(
            $resolver->resolve($parts[0], $context),
            $descriptionFactory->create($parts[1] ?? '', $context)
=======
    protected $name = 'covers';

    /** @var Fqsen */
    private $refers = null;

    /**
     * Initializes this tag.
     *
     * @param Fqsen $refers
     * @param Description $description
     */
    public function __construct(Fqsen $refers, Description $description = null)
    {
        $this->refers = $refers;
        $this->description = $description;
    }

    /**
     * {@inheritdoc}
     */
    public static function create(
        $body,
        DescriptionFactory $descriptionFactory = null,
        FqsenResolver $resolver = null,
        TypeContext $context = null
    ) {
        Assert::string($body);
        Assert::notEmpty($body);

        $parts = preg_split('/\s+/Su', $body, 2);

        return new static(
            $resolver->resolve($parts[0], $context),
            $descriptionFactory->create(isset($parts[1]) ? $parts[1] : '', $context)
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
        );
    }

    /**
     * Returns the structural element this tag refers to.
<<<<<<< HEAD
     */
    public function getReference() : Fqsen
=======
     *
     * @return Fqsen
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
