<?php

declare(strict_types=1);

namespace App\PathResolver;

use ApiPlatform\Core\Operation\PathSegmentNameGeneratorInterface;


/**
 * Generate a path name in which the plural form has a _list appended as a suffix.
 *
 * @author Michel Dumontier <michel.dumontier@gmail.com>
 */
final class LowercasePathSegmentNameGenerator implements PathSegmentNameGeneratorInterface
{
    /**
     * {@inheritdoc}
     */
    public function getSegmentName(string $name, bool $collection = true): string
    {
        return strtolower($name);
    }

}
