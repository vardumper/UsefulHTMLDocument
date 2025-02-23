<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Link - The link element defines a link between a document and an external resource. It is used to link to external stylesheets.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Void
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/link
 */
namespace Html\Element\Void;

use Html\Element\VoidElement;
use Html\Enum\CrossoriginEnum;
use Html\Enum\ReferrerpolicyEnum;
use Html\Enum\RelEnum;
use Html\Enum\TypeEnum;

class Link extends VoidElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'link';

    /**
     * If an element is self closing
     */
    public const bool SELF_CLOSING = true;

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
    ];

    /**
     * The list of allowed direct children. Any if empty.
     * @category HTML element property
     * @var array<string>
     */
    public static array $parentOf = [
    ];

    /**  */
    public ?CrossoriginEnum $crossorigin;

    /** 
     * Specifies the URL of the linked resource. Special protocols such as mailto: or tel: can be used.
     * @category HTML attribute
     * @required
     */
    public string $href;

    /** 
     * Specifies the language of the linked resource.
     * @category HTML attribute
     * @example en
     */
    public ?string $hreflang;

    /** Specifies the integrity value of a resource. */
    public ?string $integrity;

    /** Specifies the media type for which the linked resource or style sheet is intended. */
    public ?string $media;

    /** Specifies the referrer policy for fetches initiated by the element. */
    public ?ReferrerpolicyEnum $referrerpolicy;

    /** Specifies the relationship between the current document and the linked document. */
    public ?RelEnum $rel;

    /** Specifies the sizes of the images or icons for different display/window sizes. */
    public ?string $sizes;

    /** Specifies the media type of the linked resource. */
    public ?TypeEnum $type;

}
