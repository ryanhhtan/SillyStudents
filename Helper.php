<?php 
class Helper {
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

    function rand_str($length = 10) {
        return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
    }

    function rand_name($length = 10) {
        $capital_char='ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        return substr($capital_char, mt_rand(0,25), 1)
               . substr(str_shuffle(str_repeat($x='bcdefghijklmnopqrstuvwxyz', ceil($length/strlen($x)) )),1,$length - 1);
    }
}

?>
