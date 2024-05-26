<?php

namespace App\Http\Controllers;

use App\Models\AboutManagement;
use App\Models\AbstructSubmission;
use App\Models\Announcement;
use App\Models\CoHostMalaysium;
use App\Models\CommitteeCategory;
use App\Models\OrganizationCommittee;
use App\Models\Registration;
use App\Models\Speaker;
use App\Models\Stall;
use App\Models\StrategicPartner;
use App\Models\Submission;
use App\Models\Venu;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function registrationSave(Request $request)
    {

        $registration = Registration::create($request->all());

        if ($request->input('payment_slip', false)) {
            $registration->addMedia(storage_path('tmp/uploads/' . basename($request->input('payment_slip'))))->toMediaCollection('payment_slip');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $registration->id]);
        }

        Alert::success('Success ', 'Your Registration Form is Successfully Done');


        return back();

    }
    public function abstractSave(Request $request)
    {

        $abstructSubmission = AbstructSubmission::create($request->all());

        if ($request->input('file', false)) {
            $abstructSubmission->addMedia(storage_path('tmp/uploads/' . basename($request->input('file'))))->toMediaCollection('file');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $abstructSubmission->id]);
        }

        Alert::success('Success ', 'Your Submission Form is Successfully Done');


        return back();

    }
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


        $commitee= CommitteeCategory::with('categoryOrganizationCommittees')->get();

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
        $sponsor = StrategicPartner::get();

        return view('frontend.stall',compact('data','sponsor'));

    }
    public function announcement()
    {


        $data= Announcement::get();

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
