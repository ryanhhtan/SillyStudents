<?php
// put your code here
// echo "I am out there ... I live";

include('StudentDataFactory.php');
include('Helper.php');
/**
 * A class to render a view with the students data.
 *
 * This is only for practicing php. Templates would be a better solution.
 */

class Content {
    public function render(){
        // Use the data factory class to genenrate students data.
        $students = StudentDataFactory::getStudents();

        // Sort the result.
        ksort($students);

        echo '<h1 class="text-center"> Silly Students App</h1>', PHP_EOL;

        // Display the result.
        echo '<div class="row justify-content-md-center">';
        foreach($students as $student) {
            echo '<div class="col-sm-8 col-xs-10 col-md-4 mx-auto align-items-center">', PHP_EOL;
            echo '<div class="alert alert-success name-card">', PHP_EOL;
            // Get first email address and retrieve the avatar image with that email;
            $email = array_values($student->emails)[0];
            $gravatar = Helper::get_gravatar($email, null, 'wavatar');
            
            echo '<img src="'. $gravatar .'" alt="Avatar icon"/>', PHP_EOL;
            echo $student->toString();
            echo '</div>', PHP_EOL;
            echo '</div>', PHP_EOL;
        }

        echo '</div>';
    }

}
?>
