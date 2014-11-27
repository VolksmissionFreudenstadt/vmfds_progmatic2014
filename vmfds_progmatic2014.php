<?php

/**
 * Action handler for the vmfds_progmatic2014_home action
 */
function my_action_handler_vmfds_progmatic2014_home()
{
    $_SESSION['show'] = 'vmfds_progmatic2014_home';
}

/**
 * View function for vmfds_progmatic2014_home view
 */
function my_show_case_vmfds_progmatic2014_home()
{
    global $ko_path, $access, $BASE_URL, $BASE_PATH;
    echo '<h1>'.getLL('my_vmfds_progmatic2014_home_title').'</h1>';

    apply_res_filter($z_where, $z_limit);
    ko_get_reservationen($es, $z_where, $z_limit, 'res');
    echo '<pre>'.print_r($es, 1);
}
