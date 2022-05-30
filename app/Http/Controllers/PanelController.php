<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\User;  
use App\Models\Product; 


class PanelController extends Controller
{
    /* public function index()
    {return view('FrontEnd.panel.home');
    } */
    public function Logout(){
        Auth::logout();
        return view('FrontEnd.panel.home');
     /*  return Redirect()->route('login');*/
}


 /* Frontend Page View */


    public function team()
    {return view('FrontEnd.panel.team');
    }
    public function kits()
    {
        $data['alldata'] = product::all();
        return view('FrontEnd.panel.kits',$data);
    }
    public function events()
    {return view('FrontEnd.panel.events');
    }
    public function blogs()
    {return view('FrontEnd.panel.blogs');
    }
    public function gallery()
    {return view('FrontEnd.panel.gallery');
    }
    public function donation()
    {return view('FrontEnd.panel.donation');
    }
    public function faq()
    {return view('FrontEnd.panel.faq');
    }
    
}
