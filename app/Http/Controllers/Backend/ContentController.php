<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContentController extends Controller
{
  public function index()
  {
      return view('backend_theme.content.home');
  }

  public function intakeInsert(request $request)
  {

          $validator = $request->validate(
              [
                  'phone_number' => 'required',

              ],
              [
                  'phone_number.required'=>'رقم الهاتف مطلوب'
              ]
             );

          $data = [
              'formValidationUsername' => $request->formValidationUsername,
              'formValidationUserFamilyName' => $request->formValidationUserFamilyName,
              'formValidationEmail' => $request->formValidationEmail,
              'phone_number' => $request->phone_number,
              'country_code' => '+'.$request->country_code,
              'customRadioTemp' => $request->customRadioTemp,
              'customRadioTemp_work_status' => $request->customRadioTemp_work_status,
              'customRadioTemp_budget' => $request->customRadioTemp_budget,
              'customRadioTemp_contact_time' => $request->customRadioTemp_contact_time,
          ];

//          return $data;

          Mail::to('ubtklant@gmail.com')->send(new ContactMail($data));

          return redirect()->route('thank.you');


  }
}
