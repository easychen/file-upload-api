<?php
/**
 * This is project's console commands configuration for Robo task runner.
 *
 * @see http://robo.li/
 */
class RoboFile extends \Robo\Tasks
{
    // define public methods as commands
    public function dev( $port = 8888 , $file = 'route.php' )
    {
        $this->_exec( "php -S localhost:$port $file" );
    }
}