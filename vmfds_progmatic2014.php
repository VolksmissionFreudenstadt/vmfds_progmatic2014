<?php

/**
 * Action handler for the vmfds_progmatic2014_home action
 */
function my_action_handler_vmfds_progmatic2014_home()
{
    $_SESSION['show'] = 'vmfds_agende_list';
}

/**
 * View function for vmfds_progmatic2014_home view
 */
function my_show_case_vmfds_progmatic2014_home()
{
    global $ko_path, $access, $BASE_URL, $BASE_PATH;
    echo '<h1>Hello world</h1>';
}
