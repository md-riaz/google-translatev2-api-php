<?php

namespace GoogleTranslate\Exception;

/**
 * Google Translate API PHP Client
 *
 * @link https://github.com/md-riaz/google-translatev2-api-php
 * @license http://www.gnu.org/copyleft/gpl.html
 * @author Md. Riaz (mdriaz.official@outlook.com)
 */
class DetectErrorException extends \DomainException
{
    /** @inheritdoc */
    public function __construct(
        $message = 'Detect Error',
        $code = 6,
        \Exception $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
