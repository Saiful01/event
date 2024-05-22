<?php

namespace App\Http\Controllers;

use App\Models\AboutManagement;
use App\Models\CoHostMalaysium;
use App\Models\OrganizationCommittee;
use App\Models\Speaker;
use App\Models\Stall;
use App\Models\StrategicPartner;
use App\Models\Submission;
use App\Models\Venu;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {

        return view('frontend.home');

    }
    public function about($id)
    {
        $id= $id;

        $data= AboutManagement::first();

        return view('frontend.about',compact('id','data'));

    }
    public function committee()
    {


        $commitee= OrganizationCommittee::get();

        return view('frontend.committee',compact('commitee'));

    }
    public function coHost()
    {


        $data= CoHostMalaysium::get();

        return view('frontend.co_host',compact('data'));

    }
    public function stall()
    {


        $data= Stall::get();

        return view('frontend.stall',compact('data'));

    }
    public function announcement()
    {


        $data= Stall::get();

        return view('frontend.announcement',compact('data'));

    }
    public function strategicPartner()
    {


        $data= StrategicPartner::get();

        return view('frontend.strategic_partner',compact('data'));

    }
    public function abstract()
    {


        $data= Submission::first();

        return view('frontend.abstract',compact('data'));

    }
    public function fullPaper()
    {


        $data= Submission::first();

        return view('frontend.full_paper',compact('data'));

    }
    public function venue()
    {


        $data= Venu::first();

        return view('frontend.venue',compact('data'));

    }
    public function contact()
    {


        $data= Venu::first();

        return view('frontend.contact',compact('data'));

    }
    public function registration()
    {


        return view('frontend.registration');

    }
    public function speaker()
    {


        $data1= Speaker::where('category','Invited guest')->get();
          $data2= Speaker::where('category','keynote speaker')->get();
         $data3= Speaker::where('category','Plenary speaker')->get();
        $data4= Speaker::where('category','Invited speaker')->get();

        return view('frontend.speaker',compact('data1','data2','data3','data4'));

    }
}
