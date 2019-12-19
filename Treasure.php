<?php

/**
 * Class Treasure
 */
class Treasure
{
    /**
     * @var string string
     */
    private $title;

    /**
     * @var string string
     */
    private $content;

    /**
     * @var string int
     */
    private $cost;

    /**
     * @return string
     * @var string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @var string
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     * @var string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @var string
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return int
     * @var int
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @var int
     */
    public function setCost($cost)
    {
        $this->cost = $cost;
    }
}
