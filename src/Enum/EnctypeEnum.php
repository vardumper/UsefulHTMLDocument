<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * EnctypeEnum - 
 * 
 * @category HTML Attribute
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/enctype/
 */

namespace Html\Enum;

enum EnctypeEnum: string {
    case APPLICATION_X_WWW_FORM_URLENCODED = 'application/x-www-form-urlencoded';
    case MULTIPART_FORM_DATA = 'multipart/form-data';
    case TEXT_PLAIN = 'text/plain';

    public static function getQualifiedName(): string
    {
        return 'enctype';
    }
}
