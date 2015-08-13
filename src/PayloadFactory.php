<?php
/**
 * Created by PhpStorm.
 * User: Glenn
 * Date: 2015-08-13
 * Time: 10:29 AM
 */

namespace Payload;


class PayloadFactory
{
    /**
     * @param array $data
     * @return \Payload\Payload
     */
    public static function createSuccessPayload(array $data = array()) {
        return new Payload(Payload::SUCCESS, $data);
    }

    /**
     * @param array $data
     * @return \Payload\Payload
     */
    public static function createErrorPayload(array $data = array()) {
        return new Payload(Payload::ERROR, $data);
    }

    /**
     * @param array $data
     * @return \Payload\Payload
     */
    public static function createWarningPayload(array $data = array()) {
        return new Payload(Payload::WARNING, $data);
    }
}