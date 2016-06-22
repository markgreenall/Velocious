<?php declare(strict_types=1);

namespace Velocious\core;


class Exception {
    /**
     * Sets the status code required, then dies with the error.
     * @param string $message
     * @param int $response_code
     */
    public static function cast ($message, $response_code) {
        http_response_code($response_code);
        header("Content-type: text/plain");
        echo "Error $response_code.\n\n";
        echo "$message";
        die();
    }
}
