<?php

namespace MultilevelMenu;

abstract class AbstractElement
{
    protected string $title;

    /**
     * AbstractElement constructor.
     * @param string $title
     */
    public function __construct(string $title)
    {
        $this->title = $title;
    }

    abstract public function render();
}
