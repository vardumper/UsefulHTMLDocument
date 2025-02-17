<?php
/**
 * Base - The base element specifies the base URL to use for all relative URLs in a document. There can be at maximum one <base> element in a document, and it must be inside the <head> element.
 * 
 * @package Html\Element\Void
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/base
 */
namespace Html\Element\Void;

use Html\Enum\TargetEnum;
use Html\Model\VoidElement;

class Base extends VoidElement
{
    public static string $qualifiedName = 'base';

    /* 
     * Specifies the URL of the linked resource. Special protocols such as mailto: or tel: can be used.
     * @required
     */
    public string $href;

    /* 
     * Specifies where to open the linked document.
     * @example _self
     */
    public ?TargetEnum $target;


    public function __construct()
    {

    }


}