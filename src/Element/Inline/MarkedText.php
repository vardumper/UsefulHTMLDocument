<?php
/**
 * MarkedText - The mark element represents a run of text in one document marked or highlighted for reference or notation purposes, due to the marked passage's relevance or importance in the enclosing context.
 * 
 * @package Html\Element\Inline
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/mark
 */
namespace Html\Element\Inline;

use Html\Model\InlineElement;

class MarkedText extends InlineElement
{
    public static string $qualifiedName = 'mark';


    public function __construct()
    {

    }


}