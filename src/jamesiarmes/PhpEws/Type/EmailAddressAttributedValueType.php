<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\EmailAddressAttributedValueType.
 */

namespace jamesiarmes\PhpEws\Type;

use jamesiarmes\PhpEws\Type;

/**
 * {insert doc block}
 *
 * @package php-ews\Type
 */
class EmailAddressAttributedValueType extends Type
{
    /**
     * Specifies an array of attributions for its associated Value element.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfValueAttributionsType
     */
    public $Attributions;

    /**
     * Specifies the value of an EmailAddress associated with an attributions array.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\EmailAddressType
     */
    public $Value;
}
