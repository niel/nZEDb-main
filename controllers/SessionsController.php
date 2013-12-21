<?php
namespace li3_nzedb\controllers;

use lithium\security\Auth;

class SessionsController extends \lithium\action\Controller
{
    public function add()
	{
        if ($this->request->data && Auth::check('default', $this->request)) {
            return $this->redirect('/');
        }
        // Handle failed authentication attempts
    }

    public function delete()
	{
        Auth::clear('default');
        return $this->redirect('/');
    }
}
?>