<?php
/**
 * Dialog - The dialog element represents a part of an application that a user interacts with to perform a task, for example a dialog box, inspector, or window.
 * 
 * @package Html\Element\Block
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dialog
 */
namespace Html\Element\Block;

use Html\Model\BlockElement;

class Dialog extends BlockElement
{
    public static string $qualifiedName = 'dialog';

    /* When present, it specifies that the details should be visible (open) to the user. */
    public ?bool $open;


    public function __construct()
    {

    }


}