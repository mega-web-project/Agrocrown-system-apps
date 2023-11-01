<?php

class Contact extends Controller
{
    public function index()
    {
       echo"contact Controller";
       $this->view('contact');
    }

}
