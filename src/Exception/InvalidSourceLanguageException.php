<?php

namespace GoogleTranslate\Exception;

/**
 * Google Translate API PHP Client
 *
 * @link https://github.com/md-riaz/google-translatev2-api-php
 * @license http://www.gnu.org/copyleft/gpl.html
 * @author Md. Riaz (mdriaz.official@outlook.com)
 */
class InvalidSourceLanguageException extends InvalidLanguageException
{
    /** @inheritdoc */
    public function __construct(
        $message = 'Invalid source language',
        $code = 3,
        \Exception $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
