#!/usr/bin/php
<?php

    // Directories creation
    $project = $argv[1];
    mkdir( strtolower( $project ) . '/src/' . $project, 0744, true );
    mkdir( strtolower( $project ) . '/tests', 0744 );
    
    // git init
    $git_cmd_test = shell_exec( "which git" );
    if( ! empty( $git_cmd_test ) ) {
        exec( 'cd ' . strtolower( $project ) . ' && git init' );
    }

?>
