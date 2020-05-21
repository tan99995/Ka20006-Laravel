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

<<<<<<< HEAD
use phpDocumentor\Reflection\DocBlock\Tag;
use Webmozart\Assert\Assert;
use function array_key_exists;
use function preg_match;
use function rawurlencode;
use function str_replace;
use function strpos;
use function trim;
=======
use phpDocumentor\Reflection\DocBlock\Description;
use phpDocumentor\Reflection\DocBlock\Tag;
use Webmozart\Assert\Assert;
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292

/**
 * Reflection class for a {@}example tag in a Docblock.
 */
<<<<<<< HEAD
final class Example implements Tag, Factory\StaticMethod
{
    /** @var string Path to a file to use as an example. May also be an absolute URI. */
=======
final class Example extends BaseTag implements Factory\StaticMethod
{
    /**
     * @var string Path to a file to use as an example. May also be an absolute URI.
     */
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
    private $filePath;

    /**
     * @var bool Whether the file path component represents an URI. This determines how the file portion
     *     appears at {@link getContent()}.
     */
<<<<<<< HEAD
    private $isURI;

    /** @var int */
    private $startingLine;

    /** @var int */
    private $lineCount;

    /** @var string|null */
    private $content;

    public function __construct(string $filePath, bool $isURI, int $startingLine, int $lineCount, ?string $content)
    {
        Assert::notEmpty($filePath);
        Assert::greaterThanEq($startingLine, 0);
        Assert::greaterThanEq($lineCount, 0);

        $this->filePath     = $filePath;
        $this->startingLine = $startingLine;
        $this->lineCount    = $lineCount;
        if ($content !== null) {
            $this->content = trim($content);
=======
    private $isURI = false;

    /**
     * @var int
     */
    private $startingLine;

    /**
     * @var int
     */
    private $lineCount;

    public function __construct($filePath, $isURI, $startingLine, $lineCount, $description)
    {
        Assert::notEmpty($filePath);
        Assert::integer($startingLine);
        Assert::greaterThanEq($startingLine, 0);

        $this->filePath = $filePath;
        $this->startingLine = $startingLine;
        $this->lineCount = $lineCount;
        $this->name = 'example';
        if ($description !== null) {
            $this->description = trim($description);
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
        }

        $this->isURI = $isURI;
    }

<<<<<<< HEAD
    public function getContent() : string
    {
        if ($this->content === null) {
=======
    /**
     * {@inheritdoc}
     */
    public function getContent()
    {
        if (null === $this->description) {
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
            $filePath = '"' . $this->filePath . '"';
            if ($this->isURI) {
                $filePath = $this->isUriRelative($this->filePath)
                    ? str_replace('%2F', '/', rawurlencode($this->filePath))
<<<<<<< HEAD
                    : $this->filePath;
            }

            return trim($filePath);
        }

        return $this->content;
    }

    public function getDescription() : ?string
    {
        return $this->content;
    }

    public static function create(string $body) : ?Tag
    {
        // File component: File path in quotes or File URI / Source information
        if (!preg_match('/^(?:\"([^\"]+)\"|(\S+))(?:\s+(.*))?$/sux', $body, $matches)) {
=======
                    :$this->filePath;
            }

            return trim($filePath . ' ' . parent::getDescription());
        }

        return $this->description;
    }

    /**
     * {@inheritdoc}
     */
    public static function create($body)
    {
        // File component: File path in quotes or File URI / Source information
        if (! preg_match('/^(?:\"([^\"]+)\"|(\S+))(?:\s+(.*))?$/sux', $body, $matches)) {
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
            return null;
        }

        $filePath = null;
        $fileUri  = null;
<<<<<<< HEAD
        if ($matches[1] !== '') {
=======
        if ('' !== $matches[1]) {
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
            $filePath = $matches[1];
        } else {
            $fileUri = $matches[2];
        }

        $startingLine = 1;
<<<<<<< HEAD
        $lineCount    = 0;
=======
        $lineCount    = null;
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
        $description  = null;

        if (array_key_exists(3, $matches)) {
            $description = $matches[3];

            // Starting line / Number of lines / Description
            if (preg_match('/^([1-9]\d*)(?:\s+((?1))\s*)?(.*)$/sux', $matches[3], $contentMatches)) {
<<<<<<< HEAD
                $startingLine = (int) $contentMatches[1];
                if (isset($contentMatches[2]) && $contentMatches[2] !== '') {
                    $lineCount = (int) $contentMatches[2];
=======
                $startingLine = (int)$contentMatches[1];
                if (isset($contentMatches[2]) && $contentMatches[2] !== '') {
                    $lineCount = (int)$contentMatches[2];
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
                }

                if (array_key_exists(3, $contentMatches)) {
                    $description = $contentMatches[3];
                }
            }
        }

        return new static(
<<<<<<< HEAD
            $filePath ?? ($fileUri ?? ''),
=======
            $filePath !== null?$filePath:$fileUri,
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
            $fileUri !== null,
            $startingLine,
            $lineCount,
            $description
        );
    }

    /**
     * Returns the file path.
     *
     * @return string Path to a file to use as an example.
     *     May also be an absolute URI.
     */
<<<<<<< HEAD
    public function getFilePath() : string
=======
    public function getFilePath()
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
    {
        return $this->filePath;
    }

    /**
     * Returns a string representation for this tag.
<<<<<<< HEAD
     */
    public function __toString() : string
    {
        return $this->filePath . ($this->content ? ' ' . $this->content : '');
=======
     *
     * @return string
     */
    public function __toString()
    {
        return $this->filePath . ($this->description ? ' ' . $this->description : '');
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
    }

    /**
     * Returns true if the provided URI is relative or contains a complete scheme (and thus is absolute).
<<<<<<< HEAD
     */
    private function isUriRelative(string $uri) : bool
    {
        return strpos($uri, ':') === false;
    }

    public function getStartingLine() : int
=======
     *
     * @param string $uri
     *
     * @return bool
     */
    private function isUriRelative($uri)
    {
        return false === strpos($uri, ':');
    }

    /**
     * @return int
     */
    public function getStartingLine()
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
    {
        return $this->startingLine;
    }

<<<<<<< HEAD
    public function getLineCount() : int
    {
        return $this->lineCount;
    }

    public function getName() : string
    {
        return 'example';
    }

    public function render(?Formatter $formatter = null) : string
    {
        if ($formatter === null) {
            $formatter = new Formatter\PassthroughFormatter();
        }

        return $formatter->format($this);
    }
=======
    /**
     * @return int
     */
    public function getLineCount()
    {
        return $this->lineCount;
    }
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
}
