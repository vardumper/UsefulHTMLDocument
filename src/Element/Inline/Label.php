<?php
/**
 * Label - The label element represents a caption in a user interface. The caption can be associated with a specific form control, known as the label element's labeled control, either using the for attribute, or by putting the form control inside the label element itself.
 * 
 * @package Html\Element\Inline
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/label
 */
namespace Html\Element\Inline;

use Html\Model\InlineElement;

class Label extends InlineElement
{
    public static string $qualifiedName = 'label';

    /* Refers to the <datalist> element that contains the options for an input element. */
    public ?string $for;


    public function __construct()
    {

    }


}