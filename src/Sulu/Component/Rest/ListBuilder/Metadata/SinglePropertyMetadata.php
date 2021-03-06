<?php

/*
 * This file is part of Sulu.
 *
 * (c) MASSIVE ART WebServices GmbH
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Sulu\Component\Rest\ListBuilder\Metadata;

/**
 * Describes a normal field.
 */
class SinglePropertyMetadata extends AbstractPropertyMetadata
{
    /**
     * @var ?FieldMetadata
     */
    private $field;

    public function setField(?FieldMetadata $field)
    {
        $this->field = $field;
    }

    public function getField(): ?FieldMetadata
    {
        return $this->field;
    }
}
