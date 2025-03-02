<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Canvas - The canvas element is used to draw graphics, on the fly, via scripting (usually JavaScript).
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/canvas
 */
namespace Html\Element\Block;

use Html\Element\BlockElement;
use Html\Element\Block\Body;
use Html\Element\Block\Form;

class Canvas extends BlockElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'canvas';

    /**
     * If an element is unique per HTML document
     */
    public static bool $unique = false;

    /**
     * If an element is allowed once its allowed parents
     */
    public static bool $uniquePerParent = false;

    /**
     * The list of allowed direct parents. Any if empty.
     * @var array<string>
     */
    public static array $childOf = [
        Body::class,
        Form::class,
    ];

    /**
     * The list of allowed direct children. Any if empty.s
     * @var array<string>
     */
    public static array $parentOf = [
    ];


    /** Specifies the height of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%). */
    public ?string $height = null;

    /** Specifies the width of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%). */
    public ?string $width = null;


    public function setHeight(string $height): self
    {
        $this->height = $height;
        return $this;
    }

    public function getHeight(): ?string
    {
        return $this->height;
    }

    public function setWidth(string $width): self
    {
        $this->width = $width;
        return $this;
    }

    public function getWidth(): ?string
    {
        return $this->width;
    }


}
