<?php

namespace Qwen\Enums\Requests;

enum HTTPState: int
{
    /**
     * HTTP successful response
     * status is ok
     */
    case OK = 200;

    /**
     * HTTP client error response
     * status is bad request
     */
    case BAD_REQUEST = 400;

    /**
     * HTTP client error response
     * status is unauthorized
     */
    case UNAUTHORIZED = 401;

    /**
     * HTTP client error response
     * status is payment required
     */
    case PAYMENT_REQUIRED = 402;

    /**
     * HTTP client error response
     * status is forbidden
     */
    case FORBIDDEN = 403;

}
