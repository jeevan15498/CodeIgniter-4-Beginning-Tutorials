<?php

/**
 * This is Admin Module Controller
 */

namespace Modules\Admin\Controllers;

class Admin extends \CodeIgniter\Controller
{
    public function index() {
        // echo "Admin Module Index Function";
		return view('Modules\Admin\Views\admin');
    }
}