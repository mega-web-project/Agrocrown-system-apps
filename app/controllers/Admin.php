<?php

class Admin extends Controller
{
    public function index()
    {
       echo"Admin Controller";
       $this->view('admin/admin');
    }

}
