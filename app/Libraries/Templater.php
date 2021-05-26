<?php

namespace App\Libraries;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;

class Templater extends BaseController
{
    public $request = null;

    public function __construct(RequestInterface $request)
    {
        $this->request = $request;
    }

    function login()
    {
        echo view('login');
    }

    // public function login()
    // {
    //     $data['pie'] = $this->CI->load->view('pie', NULL, TRUE);
    //     $login = $this->CI->load->view('login', $data, TRUE);
    //     $this->CI->output->set_output($login);
    // }

    function view($content, $data = array(), $base = "layout/layout_base")
    {

        if ($this->request->isAJAX()) {
            $ajax = view($content, $data);
            return css_tag($content) . $ajax . script_tag($content);
        } else {

            $data['footer'] = view('layout/component/footer', $data);
            $data['menu'] = view('layout/component/menu', $data);
            $data['header'] = view('layout/component/header', $data);

            $data['content'] = view($content, $data);
            return view($base, $data);
        }
    }

    function view_admin($content, $data = array(), $base = "layout_admin/layout_admin_base")
    {

        if ($this->request->isAJAX()) {
            $ajax = view($content, $data);
            return css_tag($content) . $ajax . script_tag($content);
        } else {

            $data['menu'] = view('layout_admin/component/menu', $data);
            $data['header'] = view('layout_admin/component/header', $data);
            $data['footer'] = view('layout_admin/component/footer', $data);




            $data['content'] = view($content, $data);
            return view($base, $data);
        }
    }

    
    function view_form($content, $data = array(), $base = "layout_admin/layout_admin_form")
    {

        if ($this->request->isAJAX()) {
            $ajax = view($content, $data);
            return css_tag($content) . $ajax . script_tag($content);
        } else {

         




            $data['content'] = view($content, $data);
            return view($base, $data);
        }
    }

    
  
}
