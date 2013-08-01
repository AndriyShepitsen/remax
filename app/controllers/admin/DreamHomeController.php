<?php

class DreamHomeController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function request()
    {
    return View::make('admin.vw_dream_home')
        ->with('agents', parent::getRandomAgents());    
    }
 	 
    public function manage()
    {
    return View::make('admin.vw_dream_home_manage')
        ->with('agents', parent::getRandomAgents());  
    }
}