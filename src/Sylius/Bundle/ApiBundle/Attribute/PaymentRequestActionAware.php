<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Sylius Sp. z o.o.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\Bundle\ApiBundle\Attribute;

/** @experimental */
#[\Attribute(\Attribute::TARGET_CLASS)]
final class PaymentRequestActionAware
{
    public const DEFAULT_ARGUMENT_NAME = 'action';

    public function __construct(public string $constructorArgumentName = self::DEFAULT_ARGUMENT_NAME)
    {
    }
}
