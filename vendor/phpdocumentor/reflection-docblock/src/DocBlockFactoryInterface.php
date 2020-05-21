<?php
<<<<<<< HEAD

declare(strict_types=1);

namespace phpDocumentor\Reflection;

use phpDocumentor\Reflection\DocBlock\Tag;

// phpcs:ignore SlevomatCodingStandard.Classes.SuperfluousInterfaceNaming.SuperfluousSuffix
=======
namespace phpDocumentor\Reflection;

>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
interface DocBlockFactoryInterface
{
    /**
     * Factory method for easy instantiation.
     *
<<<<<<< HEAD
     * @param array<string, class-string<Tag>> $additionalTags
     */
    public static function createInstance(array $additionalTags = []) : DocBlockFactory;

    /**
     * @param string|object $docblock
     */
    public function create($docblock, ?Types\Context $context = null, ?Location $location = null) : DocBlock;
=======
     * @param string[] $additionalTags
     *
     * @return DocBlockFactory
     */
    public static function createInstance(array $additionalTags = []);

    /**
     * @param string $docblock
     * @param Types\Context $context
     * @param Location $location
     *
     * @return DocBlock
     */
    public function create($docblock, Types\Context $context = null, Location $location = null);
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
}
