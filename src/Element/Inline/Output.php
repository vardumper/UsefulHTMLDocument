<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * Output - The output element represents the result of a calculation or user action.
 * 
 * @category HTML
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Element\Inline
 * @link https://vardumper.github.io/extended-htmldocument/
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/output
 */
namespace Html\Element\Inline;

use Html\Element\InlineElement;

class Output extends InlineElement
{
    /**
     * The HTML element name
     */
    public const string QUALIFIED_NAME = 'output';

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
     * @var array<string>
     */
    public static array $parentOf = [
    ];


    /** Refers to the <datalist> element that contains the options for an input element. */
    public ?string $for = null;


}
