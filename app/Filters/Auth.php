<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (session()->get('is_production') == 1) {
            if (session()->get('logged_in') != TRUE) {
                return redirect()->to(base_url('ext-login'));
            } else {
                if (session()->get('role_code') != "0") {
                    return redirect()->to(base_url('ext-login'));
                }
            }
        } else {
            $trial_name = session()->get('trial_access_name');
            if (session()->get('logged_in') != TRUE) {
                return redirect()->to(base_url($trial_name . '/ext-login'));
            } else {
                if (session()->get('role_code') != "0") {
                    return redirect()->to(base_url($trial_name . '/ext-login'));
                } else {
                    // segment
                    $uri = new \CodeIgniter\HTTP\URI(current_url());
                    $segment = $uri->getSegment(2);
                    if ($trial_name != $segment) {
                        return redirect()->to(base_url($trial_name . '/ext-login'));
                    }
                }
            }
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // code
    }
}
