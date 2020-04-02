<?php

namespace App\Controllers\Admin;

// User Admin Controller

class Users extends \Core\Controller
{
    // Before filter
    protected function before()
    {

    }

    // Show the index page
    public function indexAction()
    {
        echo "User admin index";
    }
}
