<?php namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller {

//    const MODEL = "App\ContactController";
//    use RESTActions;

    /**
     * @param Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Validation\ValidationException
     */
    public function send(Request $request){

        $validator = validator($request->all(), [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'subject' => 'required|min:10',
//            'g-recaptcha-response' => 'required|captcha',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }else{

            $settings = Settings::find(1);
//            $emailAdmin = $settings->email;
            $emailSite = 'info@yaroshaa.com';
            $emailTo = 'yaroshaa@gmail.com';

            $data = array(
                'author' => (string)  $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'text'=> $request->text,
                'site' => 'http://yaroshaa.com'
            );

//            $this->validate($request, [
//                'name' => 'min:3',
//                'email' => 'required|email',
//                'text' => 'required',
//            ]);

            $success = Mail::send('mail.contact_mail_template',  ['data' => $data] ,  function($message) use ($data,$emailTo, $emailSite ){
                $message->from($emailSite, $data['site']);
                $message->to($emailTo);
//                $message->cc($emailAdmin);
                $message->subject($data['subject']);
            }

            );
        }

        if (count(Mail::failures()) > 0 ){

            return redirect()->route('home')->with('error','Your message has not been sent!');

        }else{

            return redirect()->route('home')->with('message','Your message has been sent!');
        }


    }
}
