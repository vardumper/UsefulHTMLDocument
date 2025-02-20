<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * HorizontalRule - The hr element represents a thematic break between paragraph-level elements. It is typically a horizontal rule or line.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Block
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/hr
 */
namespace Html\Element\Block;

use Html\Enum\AlignEnum;
use Html\Model\BlockElement;

class HorizontalRule extends BlockElement
{
    public static string $qualifiedName = 'hr';

    /* Specifies the horizontal alignment of the element. */
    public ?AlignEnum $align;

    /*  */
    public ?string $color;

    /*  */
    public ?bool $noshade;

    /* Specifies the height of a hr element in pixels. */
    public ?int $size;

    /* Specifies the width of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%). */
    public ?string $width;


}
