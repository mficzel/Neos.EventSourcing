<?php
namespace Neos\Cqrs\EventStore;

/*
 * This file is part of the Neos.EventStore package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use TYPO3\Flow\Annotations as Flow;

interface EventStreamFilterInterface
{
    public function getStreamName(): string;

    public function hasStreamName(): bool;

    public function getStreamNamePrefix(): string;

    public function hasStreamNamePrefix(): bool;

    /**
     * @return string[] in the format ['Bounded.Context:SomeEvent', 'Bounded.Context:SomeOtherEvent', ...]
     */
    public function getEventTypes(): array;

    public function hasEventTypes(): bool;
}