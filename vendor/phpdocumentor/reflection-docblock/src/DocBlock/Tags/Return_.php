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
use phpDocumentor\Reflection\Type;
use phpDocumentor\Reflection\TypeResolver;
use phpDocumentor\Reflection\Types\Context as TypeContext;
use Webmozart\Assert\Assert;

/**
 * Reflection class for a {@}return tag in a Docblock.
 */
final class Return_ extends TagWithType implements Factory\StaticMethod
{
<<<<<<< HEAD
    public function __construct(Type $type, ?Description $description = null)
    {
        $this->name        = 'return';
        $this->type        = $type;
        $this->description = $description;
    }

    public static function create(
        string $body,
        ?TypeResolver $typeResolver = null,
        ?DescriptionFactory $descriptionFactory = null,
        ?TypeContext $context = null
    ) : self {
        Assert::notNull($typeResolver);
        Assert::notNull($descriptionFactory);

        [$type, $description] = self::extractTypeFromBody($body);

        $type        = $typeResolver->resolve($type, $context);
=======
    public function __construct(Type $type, Description $description = null)
    {
        $this->name = 'return';
        $this->type = $type;
        $this->description = $description;
    }

    /**
     * {@inheritdoc}
     */
    public static function create(
        $body,
        TypeResolver $typeResolver = null,
        DescriptionFactory $descriptionFactory = null,
        TypeContext $context = null
    ) {
        Assert::string($body);
        Assert::allNotNull([$typeResolver, $descriptionFactory]);

        list($type, $description) = self::extractTypeFromBody($body);

        $type = $typeResolver->resolve($type, $context);
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
        $description = $descriptionFactory->create($description, $context);

        return new static($type, $description);
    }

<<<<<<< HEAD
    public function __toString() : string
    {
        return ($this->type ?: 'mixed') . ' ' . (string) $this->description;
=======
    public function __toString()
    {
        return $this->type . ' ' . $this->description;
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
    }
}
