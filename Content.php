<?php
// put your code here
// echo "I am out there ... I live";

include('StudentDataFactory.php');
/**
 * A class to render a view with the students data.
 *
 * This is only a practice for php. Templates would be a better solution.
 */

class Content {
    public function render(){
        // Use the data factory class to genenrate students data.
        $students = StudentDataFactory::getStudents();

        // Sort the result.
        ksort($students);

        echo '<h1 class="text-center"> Silly Student App</h1>';

        // Display the result.
        echo '<div class="row justify-content-md-center">';
        foreach($students as $student) {
            echo '<div class="col-sm-8 col-xs-10 col-md-4 mx-auto align-items-center">';
            echo '<div class="alert alert-success name-card">';
            // Get first email address and retrieve the avatar image with that email;
            $email = array_values($student->emails)[0];
            $gravatar = $this->get_gravatar($email, null, 'wavatar');
            
            echo '<img src="'. $gravatar .'" alt="Avatar icon"/>';
            echo $student->toString();
            echo '</div>';
            echo '</div>';
        }

        echo '</div>';
    }

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
}
?>
