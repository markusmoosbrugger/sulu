<?php

/*
 * This file is part of Sulu.
 *
 * (c) MASSIVE ART WebServices GmbH
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Sulu\Bundle\AdminBundle\Metadata\FormMetadata;

class FieldMetadata extends ItemMetadata
{
    /**
     * @var OptionMetadata[]
     */
    protected $options = [];

    /**
     * @var FormMetadata[]
     */
    protected $types = [];

    /**
     * @var string
     */
    protected $defaultType;

    /**
     * @var bool
     */
    protected $required;

    /**
     * @var null|int
     */
    protected $spaceAfter;

    /**
     * @var TagMetadata[]
     */
    protected $tags;

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getOptions(): array
    {
        return $this->options;
    }

    public function addOption(OptionMetadata $option): void
    {
        $this->options[$option->getName()] = $option;
    }

    public function getDefaultType(): string
    {
        return $this->defaultType;
    }

    public function setDefaultType(string $defaultType): void
    {
        $this->defaultType = $defaultType;
    }

    /**
     * @return FormMetadata[]
     */
    public function getTypes(): array
    {
        return $this->types;
    }

    public function addType(FormMetadata $type): void
    {
        $this->types[$type->getName()] = $type;
    }

    public function isRequired(): bool
    {
        return $this->required;
    }

    public function setRequired(bool $required): void
    {
        $this->required = $required;
    }

    public function getSpaceAfter(): ?int
    {
        return $this->spaceAfter;
    }

    public function setSpaceAfter(int $spaceAfter = null): void
    {
        $this->spaceAfter = $spaceAfter;
    }

    /**
     * @return TagMetadata[]
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    public function addTag(TagMetadata $tag): void
    {
        $this->tags[] = $tag;
    }
}
