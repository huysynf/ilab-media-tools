<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace ILAB\MediaCloud\Utilities\Misc\Symfony\Component\Translation\Loader;

use ILAB\MediaCloud\Utilities\Misc\Symfony\Component\Translation\Exception\InvalidResourceException;
/**
 * JsonFileLoader loads translations from an json file.
 *
 * @author singles
 */
class JsonFileLoader extends \ILAB\MediaCloud\Utilities\Misc\Symfony\Component\Translation\Loader\FileLoader
{
    /**
     * {@inheritdoc}
     */
    protected function loadResource($resource)
    {
        $messages = [];
        if ($data = \file_get_contents($resource)) {
            $messages = \json_decode($data, \true);
            if (0 < ($errorCode = \json_last_error())) {
                throw new \ILAB\MediaCloud\Utilities\Misc\Symfony\Component\Translation\Exception\InvalidResourceException(\sprintf('Error parsing JSON - %s', $this->getJSONErrorMessage($errorCode)));
            }
        }
        return $messages;
    }
    /**
     * Translates JSON_ERROR_* constant into meaningful message.
     *
     * @param int $errorCode Error code returned by json_last_error() call
     *
     * @return string Message string
     */
    private function getJSONErrorMessage($errorCode)
    {
        switch ($errorCode) {
            case \JSON_ERROR_DEPTH:
                return 'Maximum stack depth exceeded';
            case \JSON_ERROR_STATE_MISMATCH:
                return 'Underflow or the modes mismatch';
            case \JSON_ERROR_CTRL_CHAR:
                return 'Unexpected control character found';
            case \JSON_ERROR_SYNTAX:
                return 'Syntax error, malformed JSON';
            case \JSON_ERROR_UTF8:
                return 'Malformed UTF-8 characters, possibly incorrectly encoded';
            default:
                return 'Unknown error';
        }
    }
}