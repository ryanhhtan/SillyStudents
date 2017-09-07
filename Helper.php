<?php 
/**
 * A class that helps to handle general stuff in all othe pages. 
 *
 */
class Helper {
    /**
     * Get a avartar image from www.gravatar.com for a given email address.
     * @param $email: the required email address
     * 
     */
    function get_gravatar( $email, $s = 80, $d = 'mm', $r = 'g', $img = false, $atts = array() ) {
        $url = 'https://www.gravatar.com/avatar/';
        $url .= md5( strtolower( trim( $email ) ) );
        $url .= "?s=$s&d=$d&r=$r";
        if ( $img ) {
            $url = '<img src="' . $url . '"';
            foreach ( $atts as $key => $val )
                $url .= ' ' . $key . '="' . $val . '"';
            $url .= ' />';
        }
        return $url;
    }

    /**
     * Generate a random string with specified length
     * @param length: length of the string required.
     */
    function rand_str($length = 10) {
        return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
    }

    /**
     * Generate a random name-like string with specified length
     * @param length: length of the name required.
     */
    function rand_name($length = 10) {
        $capital_char='ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        return substr($capital_char, mt_rand(0,25), 1)
               . substr(str_shuffle(str_repeat($x='bcdefghijklmnopqrstuvwxyz', ceil($length/strlen($x)) )),1,$length - 1);
    }
}

?>
