<?php

namespace GoogleTranslate\Exception;

/**
 * Google Translate API PHP Client
 *
 * @link https://github.com/md-riaz/google-translatev2-api-php
 * @license http://www.gnu.org/copyleft/gpl.html
 * @author Md. Riaz (mdriaz.official@outlook.com)
 */
class InvalidAccessKeyException extends \InvalidArgumentException
{
    /** @inheritdoc */
    public function __construct(
        $message = 'Invalid access key',
        $code = 1,
        \Exception $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
