<?php
<<<<<<< HEAD

declare(strict_types=1);

namespace Doctrine\Common\Lexer;

use ReflectionClass;
use const PREG_SPLIT_DELIM_CAPTURE;
use const PREG_SPLIT_NO_EMPTY;
use const PREG_SPLIT_OFFSET_CAPTURE;
use function implode;
use function in_array;
use function preg_split;
use function sprintf;
use function substr;

/**
 * Base class for writing simple lexers, i.e. for creating small DSLs.
=======
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For more information, see
 * <http://www.doctrine-project.org>.
 */

namespace Doctrine\Common\Lexer;

/**
 * Base class for writing simple lexers, i.e. for creating small DSLs.
 *
 * @since  2.0
 * @author Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author Jonathan Wage <jonwage@gmail.com>
 * @author Roman Borschel <roman@code-factory.org>
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
 */
abstract class AbstractLexer
{
    /**
     * Lexer original input string.
     *
     * @var string
     */
    private $input;

    /**
     * Array of scanned tokens.
     *
     * Each token is an associative array containing three items:
     *  - 'value'    : the string value of the token in the input string
     *  - 'type'     : the type of the token (identifier, numeric, string, input
     *                 parameter, none)
     *  - 'position' : the position of the token in the input string
     *
     * @var array
     */
<<<<<<< HEAD
    private $tokens = [];
=======
    private $tokens = array();
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292

    /**
     * Current lexer position in input string.
     *
<<<<<<< HEAD
     * @var int
=======
     * @var integer
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
     */
    private $position = 0;

    /**
     * Current peek of current lexer position.
     *
<<<<<<< HEAD
     * @var int
=======
     * @var integer
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
     */
    private $peek = 0;

    /**
     * The next token in the input.
     *
<<<<<<< HEAD
     * @var array|null
=======
     * @var array
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
     */
    public $lookahead;

    /**
     * The last matched/seen token.
     *
<<<<<<< HEAD
     * @var array|null
=======
     * @var array
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
     */
    public $token;

    /**
<<<<<<< HEAD
     * Composed regex for input parsing.
     *
     * @var string
     */
    private $regex;

    /**
=======
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
     * Sets the input data to be tokenized.
     *
     * The Lexer is immediately reset and the new input tokenized.
     * Any unprocessed tokens from any previous input are lost.
     *
     * @param string $input The input to be tokenized.
     *
     * @return void
     */
    public function setInput($input)
    {
        $this->input  = $input;
<<<<<<< HEAD
        $this->tokens = [];
=======
        $this->tokens = array();
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292

        $this->reset();
        $this->scan($input);
    }

    /**
     * Resets the lexer.
     *
     * @return void
     */
    public function reset()
    {
        $this->lookahead = null;
<<<<<<< HEAD
        $this->token     = null;
        $this->peek      = 0;
        $this->position  = 0;
=======
        $this->token = null;
        $this->peek = 0;
        $this->position = 0;
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
    }

    /**
     * Resets the peek pointer to 0.
     *
     * @return void
     */
    public function resetPeek()
    {
        $this->peek = 0;
    }

    /**
     * Resets the lexer position on the input to the given position.
     *
<<<<<<< HEAD
     * @param int $position Position to place the lexical scanner.
=======
     * @param integer $position Position to place the lexical scanner.
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
     *
     * @return void
     */
    public function resetPosition($position = 0)
    {
        $this->position = $position;
    }

    /**
     * Retrieve the original lexer's input until a given position.
     *
<<<<<<< HEAD
     * @param int $position
=======
     * @param integer $position
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
     *
     * @return string
     */
    public function getInputUntilPosition($position)
    {
        return substr($this->input, 0, $position);
    }

    /**
     * Checks whether a given token matches the current lookahead.
     *
<<<<<<< HEAD
     * @param int|string $token
     *
     * @return bool
     */
    public function isNextToken($token)
    {
        return $this->lookahead !== null && $this->lookahead['type'] === $token;
=======
     * @param integer|string $token
     *
     * @return boolean
     */
    public function isNextToken($token)
    {
        return null !== $this->lookahead && $this->lookahead['type'] === $token;
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
    }

    /**
     * Checks whether any of the given tokens matches the current lookahead.
     *
     * @param array $tokens
     *
<<<<<<< HEAD
     * @return bool
     */
    public function isNextTokenAny(array $tokens)
    {
        return $this->lookahead !== null && in_array($this->lookahead['type'], $tokens, true);
=======
     * @return boolean
     */
    public function isNextTokenAny(array $tokens)
    {
        return null !== $this->lookahead && in_array($this->lookahead['type'], $tokens, true);
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
    }

    /**
     * Moves to the next token in the input string.
     *
<<<<<<< HEAD
     * @return bool
     */
    public function moveNext()
    {
        $this->peek      = 0;
        $this->token     = $this->lookahead;
        $this->lookahead = isset($this->tokens[$this->position])
=======
     * @return boolean
     */
    public function moveNext()
    {
        $this->peek = 0;
        $this->token = $this->lookahead;
        $this->lookahead = (isset($this->tokens[$this->position]))
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
            ? $this->tokens[$this->position++] : null;

        return $this->lookahead !== null;
    }

    /**
     * Tells the lexer to skip input tokens until it sees a token with the given value.
     *
     * @param string $type The token type to skip until.
     *
     * @return void
     */
    public function skipUntil($type)
    {
        while ($this->lookahead !== null && $this->lookahead['type'] !== $type) {
            $this->moveNext();
        }
    }

    /**
     * Checks if given value is identical to the given token.
     *
<<<<<<< HEAD
     * @param mixed      $value
     * @param int|string $token
     *
     * @return bool
=======
     * @param mixed   $value
     * @param integer $token
     *
     * @return boolean
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
     */
    public function isA($value, $token)
    {
        return $this->getType($value) === $token;
    }

    /**
     * Moves the lookahead token forward.
     *
     * @return array|null The next token or NULL if there are no more tokens ahead.
     */
    public function peek()
    {
        if (isset($this->tokens[$this->position + $this->peek])) {
            return $this->tokens[$this->position + $this->peek++];
<<<<<<< HEAD
        }

        return null;
=======
        } else {
            return null;
        }
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
    }

    /**
     * Peeks at the next token, returns it and immediately resets the peek.
     *
     * @return array|null The next token or NULL if there are no more tokens ahead.
     */
    public function glimpse()
    {
<<<<<<< HEAD
        $peek       = $this->peek();
        $this->peek = 0;

=======
        $peek = $this->peek();
        $this->peek = 0;
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
        return $peek;
    }

    /**
     * Scans the input string for tokens.
     *
     * @param string $input A query string.
     *
     * @return void
     */
    protected function scan($input)
    {
<<<<<<< HEAD
        if (! isset($this->regex)) {
            $this->regex = sprintf(
=======
        static $regex;

        if ( ! isset($regex)) {
            $regex = sprintf(
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
                '/(%s)|%s/%s',
                implode(')|(', $this->getCatchablePatterns()),
                implode('|', $this->getNonCatchablePatterns()),
                $this->getModifiers()
            );
        }

<<<<<<< HEAD
        $flags   = PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_OFFSET_CAPTURE;
        $matches = preg_split($this->regex, $input, -1, $flags);

        if ($matches === false) {
            // Work around https://bugs.php.net/78122
            $matches = [[$input, 0]];
=======
        $flags = PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_OFFSET_CAPTURE;
        $matches = preg_split($regex, $input, -1, $flags);

        if (false === $matches) {
            // Work around https://bugs.php.net/78122
            $matches = array(array($input, 0));
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
        }

        foreach ($matches as $match) {
            // Must remain before 'value' assignment since it can change content
            $type = $this->getType($match[0]);

<<<<<<< HEAD
            $this->tokens[] = [
                'value' => $match[0],
                'type'  => $type,
                'position' => $match[1],
            ];
=======
            $this->tokens[] = array(
                'value' => $match[0],
                'type'  => $type,
                'position' => $match[1],
            );
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
        }
    }

    /**
     * Gets the literal for a given token.
     *
<<<<<<< HEAD
     * @param int|string $token
     *
     * @return int|string
     */
    public function getLiteral($token)
    {
        $className = static::class;
        $reflClass = new ReflectionClass($className);
=======
     * @param integer $token
     *
     * @return string
     */
    public function getLiteral($token)
    {
        $className = get_class($this);
        $reflClass = new \ReflectionClass($className);
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
        $constants = $reflClass->getConstants();

        foreach ($constants as $name => $value) {
            if ($value === $token) {
                return $className . '::' . $name;
            }
        }

        return $token;
    }

    /**
     * Regex modifiers
     *
     * @return string
     */
    protected function getModifiers()
    {
<<<<<<< HEAD
        return 'iu';
=======
        return 'i';
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
    }

    /**
     * Lexical catchable patterns.
     *
     * @return array
     */
    abstract protected function getCatchablePatterns();

    /**
     * Lexical non-catchable patterns.
     *
     * @return array
     */
    abstract protected function getNonCatchablePatterns();

    /**
     * Retrieve token type. Also processes the token value if necessary.
     *
     * @param string $value
     *
<<<<<<< HEAD
     * @return int|string|null
=======
     * @return integer
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
     */
    abstract protected function getType(&$value);
}
