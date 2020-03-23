<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Donation;

use Carbon\Carbon;
use DB;
use Hash;
use Auth;
use Image;
use File;
use Session;
use Artisan;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->only('getLogin');
        $this->middleware('auth')->only('getProfile');
    }

    public function index()
    {
        return view('index.index');
    }

    public function getDonate()
    {
        return view('index.donatepage');
    }

    public function storeDonateNext(Request $request)
    {
        $this->validate($request,array(
            'name'                          => 'required|max:255',
            'amount'                        => 'required|numeric',
            'institute'                      => 'sometimes|max:255',
            'phone'                         => 'required|numeric',
            'contact_sum_result'            => 'required|numeric',
            'contact_sum_result_hidden'     => 'required|numeric',
        ));

        if($request->contact_sum_result_hidden == $request->contact_sum_result)
        {
            $donation = new Donation;
            $donation->donation_id = random_string(10);
            $donation->name = htmlspecialchars(preg_replace("/\s+/", " ", ucwords($request->name)));
            $donation->amount = $request->amount;
            $donation->institute = htmlspecialchars(preg_replace("/\s+/", " ", $request->institute));
            $donation->phone = $request->phone;
            $donation->payment_status = 0;

            $donation->trxid = 'CRN' . strtotime('now') . random_string(5);

            $donation->save();

            Session::flash('success', 'Complete your donation now!');
            return redirect()->route('index.donatenext', $donation->donation_id);
            
            // $url = 'http://secure.aamarpay.com/request.php';
            // $fields = array(
            //             'store_id' => 'sererl',
            //             'amount' => $donation->amount,
            //             'payment_type' => 'VISA',
            //             'currency' => 'BDT',
            //             'tran_id' => $donation->trxid,
            //             'cus_name' => $donation->name,
            //             'cus_email' => $donation->phone . '@iitdualumni.com',
            //             'cus_add1' => 'Housing Society',
            //             'cus_add2' => 'Mohammadpur',
            //             'cus_city' => 'Dhaka',
            //             'cus_state' => 'Dhaka',
            //             'cus_postcode' => '1207',
            //             'cus_country' => 'Bangladesh',
            //             'cus_phone' => $donation->phone,
            //             'cus_fax' => 'Not-Applicable',
            //             'ship_name' => 'Fight For Life',
            //             'ship_add1' => 'IIT',
            //             'ship_add2' => 'University of Dhaka',
            //             'ship_city' => 'Dhaka',
            //             'ship_state' => 'Dhaka',
            //             'ship_postcode' => '1205',
            //             'ship_country' => 'Bangladesh',
            //             'desc' => 'Ticket',
            //             'success_url' => 'https://donate.iitdualumni.com/donate/success/'.$donation->donation_id,
            //             'fail_url' => 'https://donate.iitdualumni.com/donate/failed',
            //             'cancel_url' => 'donate.iitdualumni.com/donate/cancel',
            //             'opt_a' => 'Optional Value A',
            //             'opt_b' => 'Optional Value B',
            //             'opt_c' => 'Optional Value C',
            //             'opt_d' => 'Optional Value D',
            //             'signature_key' => '3c831409a577666bd9c49b6a46473acc'
            //         );

            // //$domain = $_SERVER["SERVER_NAME"]; // or Manually put your domain name
            // $domain = "donate.iitdualumni.com";
            // $ip = request()->ip();

            // //url-ify the data for the POST
            // $fields_string = '';
            // foreach($fields as $key => $value) 
            // { 
            //     $fields_string .= $key.'='.$value.'&'; 
            // }

            // rtrim($fields_string, '&');

            // //open connection
            // $ch = curl_init();

            // //set the url, number of POST vars, POST data
            // curl_setopt($ch, CURLOPT_HTTPHEADER, array("REMOTE_ADDR: $ip", "HTTP_X_FORWARDED_FOR: $ip"));
            // curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
            // curl_setopt($ch, CURLOPT_URL, $url);
            // curl_setopt($ch, CURLOPT_REFERER, $domain);
            // curl_setopt($ch, CURLOPT_INTERFACE, $ip);
            // curl_setopt($ch, CURLOPT_POST, count($fields));
            // curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
            // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            // //execute post
            // $result = curl_exec($ch);

            // //print_r($result);
            // $url_forward = json_decode($result, true);

            // //close connection
            // curl_close($ch);

            // $redirect_url_final = "http://secure.aamarpay.com" . $url_forward;

            // $this->redirect_to_merchant($redirect_url_final);
        } else {
            return redirect()->route('index.donate')->with('warning', 'যোগফল ভুল হয়েছে! আবার চেষ্টা করুন।')->withInput();
        }
    }

    public function redirect_to_merchant($url)
    {
        ?>
        <!-- <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <script type="text/javascript">
                function closethisasap() 
                {
                document.forms["redirectpost"].submit();
                }
            </script>
        </head>
        <body onLoad="closethisasap();">
            <form name="redirectpost" method="post" action="<?php echo $url; ?>"></form>
        </body>
        </html> -->
        <?php
        
        exit;
    }

    public function getDonateNext($donation_id)
    {
        $donation = Donation::where('donation_id', $donation_id)->first();
        return view('index.donatenext')->withDonation($donation);
    }

    public function donateSuccess($donation_id)
    {
        return view('index.faq');
    }

    public function donateSuccessOrFailed(Request $request)
    {
        $donation_id = $request->get('opt_a');
        if($request->get('pay_status') == 'Failed') {
            Session::flash('info',$donation_id.': You need to make the payment!');
            return redirect(Route('index.donatenext', $donation_id));
        }
        
        $amount_request = $request->get('opt_b');
        $amount_paid = $request->get('amount');
        
        if($amount_paid == $amount_request)
        {
          $donation = Donation::where('donation_id', $donation_id)->first();
          // $donation->trxid = $request->get('pg_txnid');
          $donation->payment_status = 1;
          $donation->card_type = $request->get('card_type');
          $donation->save();

          Session::flash('success','Donation is complete!');
        } else {
           // Something went wrong.
          Session::flash('info', $donation_id.': Something went wrong, please reload this page!');
          return redirect(Route('index.donatenext', $donation_id));
        }
        
        //return $request->all();
        return redirect()->route('index.donatenext', $donation->donation_id);
    }

    public function getFaq()
    {
        return view('index.faq');
    }

    public function getMembers()
    {
        $members = User::where('role', 'alumni')
                       ->where('payment_status', 1)
                       ->orderBy('degree', 'asc')
                       ->orderBy('batch', 'asc')
                       ->orderBy('roll', 'asc')
                       ->get();
        return view('index.members')->withMembers($members);
    }

    public function getContact()
    {
        return view('index.contact');
    }

    public function storeFormMessage(Request $request)
    {
        // $this->validate($request,array(
        //     'name'                      => 'required|max:255',
        //     'email'                     => 'required|max:255',
        //     'message'                   => 'required',
        //     'contact_sum_result_hidden'   => 'required',
        //     'contact_sum_result'   => 'required'
        // ));

        // if($request->contact_sum_result_hidden == $request->contact_sum_result) {
        //     $message = new Formmessage;
        //     $message->name = htmlspecialchars(preg_replace("/\s+/", " ", ucwords($request->name)));
        //     $message->email = htmlspecialchars(preg_replace("/\s+/", " ", $request->email));
        //     $message->message = htmlspecialchars(preg_replace("/\s+/", " ", $request->message));
        //     $message->save();
            
        //     Session::flash('success', 'আপনার বার্তা আমাদের কাছে পৌঁছেছে। ধন্যবাদ!');
        //     return redirect()->route('index.contact');
        // } else {
        //     return redirect()->route('index.contact')->with('warning', 'যোগফল ভুল হয়েছে! আবার চেষ্টা করুন।')->withInput();
        // }
    }

    public function getApplication()
    {
        return view('index.application');
    }

    public function getLogin()
    {
        return view('index.login');
    }

    public function getProfile($unique_key)
    {
        // $blogs = Blog::where('user_id', Auth::user()->id)->get();
        // $categories = Category::all();
        // $user = User::where('unique_key', $unique_key)->first();
        // if(Auth::user()->unique_key == $unique_key) {
        //     return view('index.profile')
        //             ->withUser($user)
        //             ->withCategories($categories)
        //             ->withBlogs($blogs);
        // } else {
        //     Session::flash('info', 'Redirected to your profile!');
        //     return redirect()->route('index.profile', Auth::user()->unique_key); 
        // }
        
    }

    public function storeApplication(Request $request)
    {
        $this->validate($request,array(
            'name'                      => 'required|max:255',
            'email'                     => 'required|email|unique:users,email',
            'phone'                     => 'required|numeric',
            'dob'                       => 'required|max:255',
            'degree'                    => 'required|max:255',
            'batch'                     => 'required|max:255',
            'roll'                      => 'required|max:255',
            'passing_year'              => 'required|numeric',
            'current_job'               => 'sometimes|max:255',
            'designation'               => 'sometimes|max:255',
            'address'                   => 'required|max:255',
            'fb'                        => 'sometimes|max:255',
            'twitter'                   => 'sometimes|max:255',
            'gplus'                     => 'sometimes|max:255',
            'linkedin'                  => 'sometimes|max:255',
            'image'                     => 'required|image|max:300',
            'password'                  => 'required|min:8|same:password_confirmation'
        ));

        $application = new User();
        $application->name = htmlspecialchars(preg_replace("/\s+/", " ", ucwords($request->name)));
        $application->email = htmlspecialchars(preg_replace("/\s+/", " ", $request->email));
        $application->phone = htmlspecialchars(preg_replace("/\s+/", " ", $request->phone));
        $dob = htmlspecialchars(preg_replace("/\s+/", " ", $request->dob));
        $application->dob = new Carbon($dob);
        $application->degree = htmlspecialchars(preg_replace("/\s+/", " ", $request->degree));
        $application->batch = htmlspecialchars(preg_replace("/\s+/", " ", $request->batch));
        $application->roll = htmlspecialchars(preg_replace("/\s+/", " ", $request->roll));
        $application->passing_year = htmlspecialchars(preg_replace("/\s+/", " ", $request->passing_year));
        $application->current_job = htmlspecialchars(preg_replace("/\s+/", " ", $request->current_job));
        $application->designation = htmlspecialchars(preg_replace("/\s+/", " ", $request->designation));
        $application->address = htmlspecialchars(preg_replace("/\s+/", " ", $request->address));
        $application->fb = htmlspecialchars(preg_replace("/\s+/", " ", $request->fb));
        $application->twitter = htmlspecialchars(preg_replace("/\s+/", " ", $request->twitter));
        $application->gplus = htmlspecialchars(preg_replace("/\s+/", " ", $request->gplus));
        $application->linkedin = htmlspecialchars(preg_replace("/\s+/", " ", $request->linkedin));

        // image upload
        if($request->hasFile('image')) {
            $image      = $request->file('image');
            $filename   = str_replace(' ','',$request->name).time() .'.' . $image->getClientOriginalExtension();
            $location   = public_path('/images/users/'. $filename);
            Image::make($image)->resize(250, 250)->save($location);
            $application->image = $filename;
        }
        $application->password = Hash::make($request->password);

        $application->role = 'alumni';
        $application->payment_status = 0;

        // amount will be set dynamically
        // $application->amount = null;
        // $application->trxid = null;

        // generate unique_key
        $unique_key_length = 100;
        $pool = '0123456789abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $unique_key = substr(str_shuffle(str_repeat($pool, 100)), 0, $unique_key_length);
        // generate unique_key
        $application->unique_key = $unique_key;
        $application->save();
        
        Session::flash('success', 'You have registered Successfully!');
        Auth::login($application);
        return redirect()->route('index.profile', $unique_key);
    }

    public function coronaAwareness()
    {
        return view('index.coronaawareness');
    }

    // clear configs, routes and serve
    public function clear()
    {
        Artisan::call('config:cache');
        // Artisan::call('route:cache');
        Artisan::call('cache:clear');
        Artisan::call('view:clear');
        echo 'Config and Route Cached. All Cache Cleared';
    }
}
