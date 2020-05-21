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

namespace phpDocumentor\Reflection;

<<<<<<< HEAD
use InvalidArgumentException;
use LogicException;
=======
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
use phpDocumentor\Reflection\DocBlock\DescriptionFactory;
use phpDocumentor\Reflection\DocBlock\StandardTagFactory;
use phpDocumentor\Reflection\DocBlock\Tag;
use phpDocumentor\Reflection\DocBlock\TagFactory;
use Webmozart\Assert\Assert;
<<<<<<< HEAD
use function array_shift;
use function count;
use function explode;
use function is_object;
use function method_exists;
use function preg_match;
use function preg_replace;
use function str_replace;
use function strpos;
use function substr;
use function trim;
=======
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292

final class DocBlockFactory implements DocBlockFactoryInterface
{
    /** @var DocBlock\DescriptionFactory */
    private $descriptionFactory;

    /** @var DocBlock\TagFactory */
    private $tagFactory;

    /**
     * Initializes this factory with the required subcontractors.
<<<<<<< HEAD
=======
     *
     * @param DescriptionFactory $descriptionFactory
     * @param TagFactory         $tagFactory
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
     */
    public function __construct(DescriptionFactory $descriptionFactory, TagFactory $tagFactory)
    {
        $this->descriptionFactory = $descriptionFactory;
<<<<<<< HEAD
        $this->tagFactory         = $tagFactory;
=======
        $this->tagFactory = $tagFactory;
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
    }

    /**
     * Factory method for easy instantiation.
     *
<<<<<<< HEAD
     * @param array<string, class-string<Tag>> $additionalTags
     */
    public static function createInstance(array $additionalTags = []) : self
    {
        $fqsenResolver      = new FqsenResolver();
        $tagFactory         = new StandardTagFactory($fqsenResolver);
=======
     * @param string[] $additionalTags
     *
     * @return DocBlockFactory
     */
    public static function createInstance(array $additionalTags = [])
    {
        $fqsenResolver = new FqsenResolver();
        $tagFactory = new StandardTagFactory($fqsenResolver);
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
        $descriptionFactory = new DescriptionFactory($tagFactory);

        $tagFactory->addService($descriptionFactory);
        $tagFactory->addService(new TypeResolver($fqsenResolver));

        $docBlockFactory = new self($descriptionFactory, $tagFactory);
        foreach ($additionalTags as $tagName => $tagHandler) {
            $docBlockFactory->registerTagHandler($tagName, $tagHandler);
        }

        return $docBlockFactory;
    }

    /**
     * @param object|string $docblock A string containing the DocBlock to parse or an object supporting the
     *                                getDocComment method (such as a ReflectionClass object).
<<<<<<< HEAD
     */
    public function create($docblock, ?Types\Context $context = null, ?Location $location = null) : DocBlock
=======
     * @param Types\Context $context
     * @param Location      $location
     *
     * @return DocBlock
     */
    public function create($docblock, Types\Context $context = null, Location $location = null)
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
    {
        if (is_object($docblock)) {
            if (!method_exists($docblock, 'getDocComment')) {
                $exceptionMessage = 'Invalid object passed; the given object must support the getDocComment method';
<<<<<<< HEAD

                throw new InvalidArgumentException($exceptionMessage);
            }

            $docblock = $docblock->getDocComment();
            Assert::string($docblock);
=======
                throw new \InvalidArgumentException($exceptionMessage);
            }

            $docblock = $docblock->getDocComment();
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
        }

        Assert::stringNotEmpty($docblock);

        if ($context === null) {
            $context = new Types\Context('');
        }

        $parts = $this->splitDocBlock($this->stripDocComment($docblock));
<<<<<<< HEAD

        [$templateMarker, $summary, $description, $tags] = $parts;
=======
        list($templateMarker, $summary, $description, $tags) = $parts;
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292

        return new DocBlock(
            $summary,
            $description ? $this->descriptionFactory->create($description, $context) : null,
<<<<<<< HEAD
            $this->parseTagBlock($tags, $context),
=======
            array_filter($this->parseTagBlock($tags, $context), function ($tag) {
                return $tag instanceof Tag;
            }),
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
            $context,
            $location,
            $templateMarker === '#@+',
            $templateMarker === '#@-'
        );
    }

<<<<<<< HEAD
    /**
     * @param class-string<Tag> $handler
     */
    public function registerTagHandler(string $tagName, string $handler) : void
=======
    public function registerTagHandler($tagName, $handler)
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
    {
        $this->tagFactory->registerTagHandler($tagName, $handler);
    }

    /**
     * Strips the asterisks from the DocBlock comment.
     *
     * @param string $comment String containing the comment text.
<<<<<<< HEAD
     */
    private function stripDocComment(string $comment) : string
    {
        $comment = preg_replace('#[ \t]*(?:\/\*\*|\*\/|\*)?[ \t]?(.*)?#u', '$1', $comment);
        Assert::string($comment);
        $comment = trim($comment);
=======
     *
     * @return string
     */
    private function stripDocComment($comment)
    {
        $comment = trim(preg_replace('#[ \t]*(?:\/\*\*|\*\/|\*)?[ \t]{0,1}(.*)?#u', '$1', $comment));
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292

        // reg ex above is not able to remove */ from a single line docblock
        if (substr($comment, -2) === '*/') {
            $comment = trim(substr($comment, 0, -2));
        }

        return str_replace(["\r\n", "\r"], "\n", $comment);
    }

<<<<<<< HEAD
    // phpcs:disable
=======
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
    /**
     * Splits the DocBlock into a template marker, summary, description and block of tags.
     *
     * @param string $comment Comment to split into the sub-parts.
     *
<<<<<<< HEAD
     * @return string[] containing the template marker (if any), summary, description and a string containing the tags.
     *
     * @author Mike van Riel <me@mikevanriel.com> for extending the regex with template marker support.
     *
     * @author Richard van Velzen (@_richardJ) Special thanks to Richard for the regex responsible for the split.
     */
    private function splitDocBlock(string $comment) : array
    {
        // phpcs:enable
=======
     * @author Richard van Velzen (@_richardJ) Special thanks to Richard for the regex responsible for the split.
     * @author Mike van Riel <me@mikevanriel.com> for extending the regex with template marker support.
     *
     * @return string[] containing the template marker (if any), summary, description and a string containing the tags.
     */
    private function splitDocBlock($comment)
    {
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
        // Performance improvement cheat: if the first character is an @ then only tags are in this DocBlock. This
        // method does not split tags so we return this verbatim as the fourth result (tags). This saves us the
        // performance impact of running a regular expression
        if (strpos($comment, '@') === 0) {
            return ['', '', '', $comment];
        }

        // clears all extra horizontal whitespace from the line endings to prevent parsing issues
        $comment = preg_replace('/\h*$/Sum', '', $comment);
<<<<<<< HEAD
        Assert::string($comment);
=======

>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
        /*
         * Splits the docblock into a template marker, summary, description and tags section.
         *
         * - The template marker is empty, #@+ or #@- if the DocBlock starts with either of those (a newline may
         *   occur after it and will be stripped).
         * - The short description is started from the first character until a dot is encountered followed by a
         *   newline OR two consecutive newlines (horizontal whitespace is taken into account to consider spacing
         *   errors). This is optional.
         * - The long description, any character until a new line is encountered followed by an @ and word
         *   characters (a tag). This is optional.
         * - Tags; the remaining characters
         *
         * Big thanks to RichardJ for contributing this Regular Expression
         */
        preg_match(
            '/
            \A
            # 1. Extract the template marker
            (?:(\#\@\+|\#\@\-)\n?)?

            # 2. Extract the summary
            (?:
              (?! @\pL ) # The summary may not start with an @
              (
                [^\n.]+
                (?:
                  (?! \. \n | \n{2} )     # End summary upon a dot followed by newline or two newlines
<<<<<<< HEAD
                  [\n.]* (?! [ \t]* @\pL ) # End summary when an @ is found as first character on a new line
=======
                  [\n.] (?! [ \t]* @\pL ) # End summary when an @ is found as first character on a new line
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
                  [^\n.]+                 # Include anything else
                )*
                \.?
              )?
            )

            # 3. Extract the description
            (?:
              \s*        # Some form of whitespace _must_ precede a description because a summary must be there
              (?! @\pL ) # The description may not start with an @
              (
                [^\n]+
                (?: \n+
                  (?! [ \t]* @\pL ) # End description when an @ is found as first character on a new line
                  [^\n]+            # Include anything else
                )*
              )
            )?

            # 4. Extract the tags (anything that follows)
            (\s+ [\s\S]*)? # everything that follows
            /ux',
            $comment,
            $matches
        );
        array_shift($matches);

        while (count($matches) < 4) {
            $matches[] = '';
        }

        return $matches;
    }

    /**
     * Creates the tag objects.
     *
<<<<<<< HEAD
     * @param string        $tags    Tag block to parse.
=======
     * @param string $tags Tag block to parse.
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
     * @param Types\Context $context Context of the parsed Tag
     *
     * @return DocBlock\Tag[]
     */
<<<<<<< HEAD
    private function parseTagBlock(string $tags, Types\Context $context) : array
    {
        $tags = $this->filterTagBlock($tags);
        if ($tags === null) {
            return [];
        }

        $result = [];
        $lines  = $this->splitTagBlockIntoTagLines($tags);
        foreach ($lines as $key => $tagLine) {
=======
    private function parseTagBlock($tags, Types\Context $context)
    {
        $tags = $this->filterTagBlock($tags);
        if (!$tags) {
            return [];
        }

        $result = $this->splitTagBlockIntoTagLines($tags);
        foreach ($result as $key => $tagLine) {
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
            $result[$key] = $this->tagFactory->create(trim($tagLine), $context);
        }

        return $result;
    }

    /**
<<<<<<< HEAD
     * @return string[]
     */
    private function splitTagBlockIntoTagLines(string $tags) : array
    {
        $result = [];
        foreach (explode("\n", $tags) as $tagLine) {
            if ($tagLine !== '' && strpos($tagLine, '@') === 0) {
                $result[] = $tagLine;
            } else {
                $result[count($result) - 1] .= "\n" . $tagLine;
=======
     * @param string $tags
     *
     * @return string[]
     */
    private function splitTagBlockIntoTagLines($tags)
    {
        $result = [];
        foreach (explode("\n", $tags) as $tag_line) {
            if (isset($tag_line[0]) && ($tag_line[0] === '@')) {
                $result[] = $tag_line;
            } else {
                $result[count($result) - 1] .= "\n" . $tag_line;
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
            }
        }

        return $result;
    }

<<<<<<< HEAD
    private function filterTagBlock(string $tags) : ?string
=======
    /**
     * @param $tags
     * @return string
     */
    private function filterTagBlock($tags)
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
    {
        $tags = trim($tags);
        if (!$tags) {
            return null;
        }

<<<<<<< HEAD
        if ($tags[0] !== '@') {
            // @codeCoverageIgnoreStart
            // Can't simulate this; this only happens if there is an error with the parsing of the DocBlock that
            // we didn't foresee.

            throw new LogicException('A tag block started with text instead of an at-sign(@): ' . $tags);

=======
        if ('@' !== $tags[0]) {
            // @codeCoverageIgnoreStart
            // Can't simulate this; this only happens if there is an error with the parsing of the DocBlock that
            // we didn't foresee.
            throw new \LogicException('A tag block started with text instead of an at-sign(@): ' . $tags);
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
            // @codeCoverageIgnoreEnd
        }

        return $tags;
    }
}
