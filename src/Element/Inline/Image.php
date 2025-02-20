<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Image - The img element represents an image.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Inline
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/img
 */
namespace Html\Element\Inline;

use Html\Enum\CrossoriginEnum;
use Html\Enum\DecodingEnum;
use Html\Enum\ReferrerpolicyEnum;
use Html\Model\InlineElement;

class Image extends InlineElement
{
    public static string $qualifiedName = 'img';

    /* 
     * Specifies alternative text to be displayed when the image cannot be rendered.
     * @required
     */
    public string $alt;

    /*  */
    public ?CrossoriginEnum $crossorigin;

    /* Specifies the decoding process applied to the image. */
    public ?DecodingEnum $decoding;

    /* Specifies the height of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%). */
    public ?string $height;

    /* Specifies that an area should be part of an image map. */
    public ?bool $ismap;

    /* Specifies the referrer policy for fetches initiated by the element. */
    public ?ReferrerpolicyEnum $referrerpolicy;

    /* Specifies the sizes of the images or icons for different display/window sizes. */
    public ?string $sizes;

    /* 
     * Specifies the URL of the external resource to be embedded or referenced.
     * @required
     */
    public string $src;

    /* Specifies a set of image candidate URLs and descriptors for responsive images. */
    public ?string $srcset;

    /* Specifies a client-side image map to be used with the element. */
    public ?string $usemap;

    /* Specifies the width of the element. The meaning may vary depending on the element type. Accepts integers, pixels (px), and percentages (%). */
    public ?string $width;


}
