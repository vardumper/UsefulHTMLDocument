<?php
/**
 * This file is auto-generated. Do not edit manually.
 *
 * PreloadEnum - 
 * 
 * @category HTML Attribute
 * @package vardumper/extended-htmldocument
 * @subpackage Html\Enum
 * @link https://vardumper.github.io/extended-htmldocument/index
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes/preload/
 */

namespace Html\Enum;

enum PreloadEnum: string {
    case AUTO = 'auto';
    case METADATA = 'metadata';
    case NONE = 'none';

    public static function getQualifiedName(): string
    {
        return 'preload';
    }
}
