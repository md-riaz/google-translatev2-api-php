<?php

namespace GoogleTranslate\Exception;

/**
 * Google Translate API PHP Client
 *
 * @link https://github.com/md-riaz/google-translatev2-api-php
 * @license http://www.gnu.org/copyleft/gpl.html
 * @author Md. Riaz (mdriaz.official@outlook.com)
 */
class TranslateErrorException extends \DomainException
{
    /** @inheritdoc */
    public function __construct(
        $message = 'Translate Error',
        $code = 4,
        \Exception $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
