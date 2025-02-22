<?php

/**
 * This file is auto-generated. Do not edit manually.
 *
 * Output - The output element represents the result of a calculation or user action.
 *
 * @subpackage Html\Element\Inline
 * @link https://github.com/vardumper/ExtendedHTMLDocument
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/output
 */

namespace Html\Element\Inline;

use Html\Model\InlineElement;

class Output extends InlineElement
{
    /**
     * The HTML element name
     */
    public static string $qualifiedName = 'output';

    /**
     * If an element is unique per HTML document
     */
    public static bool $unique = false;

    /**
     * If an element is allowed once its allowed parents
     */
    public static bool $uniquePerParent = false;

    /**
     * The allowed parent classes. Any if empty.
     * @var array<string>
     */
    public static array $childOf = [];

    /**
     * Refers to the <datalist> element that contains the options for an input element.
     */
    public ?string $for;
}
