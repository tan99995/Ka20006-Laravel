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

namespace phpDocumentor\Reflection\DocBlock\Tags\Factory;

<<<<<<< HEAD
/**
 * @deprecated This contract is totally covered by Tag contract. Every class using StaticMethod also use Tag
 */
interface StaticMethod
{
    /**
     * @return mixed
     */
    public static function create(string $body);
=======
interface StaticMethod
{
    public static function create($body);
>>>>>>> 2e34f1a134e394fe17250c183157072a64206292
}
