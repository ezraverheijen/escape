<?php

/**
 * Escape context specific output
 * 
 * @param  string  $string  Untrusted data
 * @param  string  $context Location of output
 * @param  boolean $strict  Whether to escape an extended set of characters (HTML attributes only)
 * @return string           Escaped data
 */
function esc($string, $context = 'html', $strict = false)
{
    if (method_exists('Escape', $context)) {
        return Escape::$context($string, $strict);
    }
}
