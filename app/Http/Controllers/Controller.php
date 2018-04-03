<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Repositories\SkillRepositoryInterface;
use App\Repositories\SkillRepository;
use App\Mail\Contact;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function homepage(SkillRepositoryInterface $skillRepo)
    {
        return view('homepage');
    }

    public function sendEmail(Request $request)
    {
        try {
          Mail::to('salvatore.seidita@yahoo.com')->send(new Contact($request));
        } catch (\Exception $e) {
          dd($e);
        }

        return view('email-sent');
    }
}
