<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\AboutUs;
use App\Models\AboutUsPage;
use App\Models\Blog;
use App\Models\BlogPage;
use App\Models\Causes;
use App\Models\CausesPage;
use App\Models\ContactPage;
use App\Models\ContactUs;
use App\Models\DonateNow;
use App\Models\Donations;
use App\Models\Enquiries;
use App\Models\Event;
use App\Models\EventsPage;
use App\Models\GalleryPage;
use App\Models\Gallery;
use App\Models\GalleryCategory;
use App\Models\Home;
use App\Models\NewsletterSubs;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\VolunteerPage;
use App\Models\Volunteers;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

use function PHPUnit\Framework\isNull;

class HomeDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
    {

        $homeData = Home::orderBy('id', 'desc')->get();
        $aboutData = AboutUs::where('id', 1)->get();
        $causesData = Causes::orderBy('money_raised', 'desc')->take(4)->get();
        $donateNowData = DonateNow::where('id', 1)->get();
        $eventData = Event::whereDate('date', '>=', Carbon::now())->orderBy('date', 'desc')->take(2)->get();
        $teamData = Team::take(4)->get();
        $testimonialData = Testimonial::get();
        $blogData = Blog::take(3)->get();
        $volunteerData = VolunteerPage::where('id', 1)->get();
        $contactData = ContactPage::where('id', 1)->get();

        foreach($eventData as $key => $value){
            $month = $this->changeMonthToWord(substr($value->date, 5, -3));
            $year = substr($value->date, 0, -6);
            $day = substr($value->date, 8);

            $value->begin_time = substr($value->begin_time, 0, -3);
            $value->end_time = substr($value->end_time, 0, -3);

            $processedDate = $day.'-'.$month.'-'.$year;
            $value->processedDate = $processedDate;
        }


        foreach($causesData as $key => $value){
            $percentage = $value->money_raised/$value->goal * 100;
            $value->percentage = round($percentage, 0);
        }

        // foreach($eventData as $key => $value){
        //     $value->begin_time = substr($value->begin_time, 0, -3);
        //     $value->end_time = substr($value->end_time, 0, -3);
        // }
        
        // dd($eventData);
        return view('home.index', [
            'aboutus' => $aboutData,
            'data' => $homeData,
            'causes' => $causesData,
            'donatenow' =>$donateNowData,
            'event' => $eventData,
            'team' => $teamData,
            'testimonial' => $testimonialData,
            'blog' => $blogData,
            'volunteerform' => $volunteerData,
            'contactform' => $contactData
        ]);
    }

    // public function donateSection(){
    //     return url('https://www.mcgnapp.test/#donate-form');
    // }


    public function changeMonthToWord($month)
    {
        switch ($month){
            case '01':
                return 'Jan';
                break;
            case '02':
                return 'Feb';
                break;
            case '03':
                return 'Mar';
                break;
            case '04':
                return 'Apr';
                break;
            case '05':
                return 'May';
                break;
            case '06':
                return 'Jun';
                break;
            case '07':
                return 'Jul';
                break;
            case '08':
                return 'Aug';
                break;
            case '09':
                return 'Sep';
                break;
            case '10':
                return 'Oct';
                break;
            case '11':
                return 'Nov';
                break;
            case '12':
                return 'Dec';
                break;
            default:
            return 'error';

        }
    }


    public function home()
    {
        // $homeData = DB::table('home')->get();

        $homeData = Home::orderBy('id', 'desc')->get();
        $aboutData = AboutUs::where('id', 1)->get();
        $causesData = Causes::orderBy('money_raised', 'desc')->take(4)->get();
        $donateNowData = DonateNow::where('id', 1)->get();
        // $eventData = Event::orderBy('date', 'desc')->take(2)->get();
        $eventData = Event::whereDate('date', '>=', Carbon::now())->orderBy('date', 'desc')->take(2)->get();
        $teamData = Team::take(4)->get();
        $testimonialData = Testimonial::get();
        $blogData = Blog::take(3)->get();
        $volunteerData = VolunteerPage::where('id', 1)->get();
        $contactData = ContactPage::where('id', 1)->get();

        foreach($causesData as $key => $value){
            $percentage = $value->money_raised/$value->goal * 100;
            $value->percentage = round($percentage, 0);
        }

        foreach($eventData as $key => $value){
            $value->begin_time = substr($value->begin_time, 0, -3);
            $value->end_time = substr($value->end_time, 0, -3);
        }
        
        return view('home.index', [
            'aboutus' => $aboutData,
            'data' => $homeData,
            'causes' => $causesData,
            'donatenow' =>$donateNowData,
            'event' => $eventData,
            'team' => $teamData,
            'testimonial' => $testimonialData,
            'blog' => $blogData,
            'volunteerform' => $volunteerData,
            'contactform' => $contactData
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }


    public function becomeVolunteer(Request $request)
    {

        $request->validate([
            'full_name' => 'required',
            'phone_number' => 'digits:10|starts_with:024,027,020,026,054,055,059,050,029,057',
            'email' => 'email:rfc,dns|nullable',
            'reason' => 'string|max:1000',
            'event_name' => 'string'
        ]);

        Volunteers::create([
            'full_name' => $request->full_name,
            'phone_num' => $request->phone_number,
            'email' => $request->email,
            'reason' => $request->reason,
            'event_name' => $request->event_name
        ]);

        $mailData = $request->all();

        Mail::send('mails.volunteers-mail', $mailData, function($message) {
            $message->to('menniablaise@yahoo.com', 'Mr. Blaise')->subject('Volunteer Applicants');
            $message->from('volunteer@mcgn.org', 'Cheerful Giver');
        });

        return back()->with('success', 'Your Request Was Sent Successfully');

        
    }

    function volunteerEvent ($id = null)
    {

        if(!empty($id))
        {
            $event = Event::where('id', $id)->get();
            $donateNowData = DonateNow::where('id', 1)->get();

            foreach($event as $key => $value){
                $value->begin_time = substr($value->begin_time, 0, -3);
                $value->end_time = substr($value->end_time, 0, -3);
            }

            return view('events.volunteer-event', [
                'donatenow' => $donateNowData,
                'eventData' => $event,
                'causeID' => true
            ]);
        }else{
            $event = Event::where('id', 68)->get();

            return view('events.volunteer-event', [
                'eventData' => $event,
                'causeID' => false
            ]);
        }


    }


    function eventsPage ($is_over = null)
    {

            if(!$is_over)
            {
                $event = Event::orderBy('date', 'desc')->paginate(4);
                $eventHeader = EventsPage::find(1);
            }else{
                $event = Event::whereDate('date', '>=', Carbon::now())->orderBy('date', 'desc')->paginate(4);
                $eventHeader = EventsPage::find(1);
            }

            foreach($event as $key => $value){
                $month = $this->changeMonthToWord(substr($value->date, 5, -3));
                $year = substr($value->date, 0, -6);
                $day = substr($value->date, 8);
    
                $processedDate = $day.'-'.$month.'-'.$year;
                $value->processedDate = $processedDate;
                
                $value->begin_time = substr($value->begin_time, 0, -3);
                $value->end_time = substr($value->end_time, 0, -3);

                if($value->date <= Carbon::now())
                {
                    $value->is_over = true;
                }else{
                    $value->is_over = false;
                }
            }

            return view('events.index', [
                'eventData' => $event,
                'header' => $eventHeader
            ]);
    }





    function donatePage ($id = null)
    {

        if(!empty($id))
        {
            $causesData = Causes::where('id', $id)->get();
            $donateNowData = DonateNow::where('id', 1)->get();

            return view('donate.index', [
                'donatenow' => $donateNowData,
                'causes' => $causesData,
                'causeID' => true
            ]);
        }else{
            $donateNowData = DonateNow::where('id', 1)->get();

            return view('donate.index', [
                'donatenow' =>$donateNowData,
                'causeID' => false
            ]);
        }


    }

    function donateLatestCause()
    {
        $data = Causes::orderBy('updated_at', 'desc')->first();
        return $this->donatePage($data->id);
    }


    function donateNow(Request $request){


        $request->validate([
            'name' => 'required',
            'momo_number' => 'required|string|max:10|starts_with:024,027,020,026,054,055,059,050,029,057',
            'email' => 'email:rfc,dns|nullable',
            'amount' => 'required|in:50,100,200',
            'cause_name' => 'string'
        ]);

        $payment_status = $this->paymentProcess($request);

            switch ($payment_status->code) {
                case 201:
                   return redirect($payment_status->data->paylinkUrl);
                break;
                default:
                    dd($payment_status->message);
            }
 
        Donations::create([
            'name' => $request->name,
            'phone_num' => $request->momo_number,
            'email' => $request->email,
            'amount' => $request->amount,
            'cause_name' => $request->cause_name,
            'api_message' => $payment_status->message,
            'code' => $payment_status->code,
            'paylinkId' => $payment_status->data->paylinkId,
            'clientReference' => $payment_status->data->clientReference,
            'paylinkUrl' => $payment_status->data->paylinkUrl,
            // 'expiresAt' => $payment_status->data->expiresAt
        ]);

        $mailData = $request->all();

        Mail::send('mails.donations-mail', $mailData, function($message) {
            $message->to('menniablaise@yahoo.com', 'Mr. Blaise')->subject('New Donation');
            $message->from('volunteer@mcgn.org', 'Cheerful Giver');
        });

        return back()->with('success', 'Your Request Was Sent Successfully');

    }

    function paymentProcess($data)
    {
        // dd($data->amount);
        $mobileNumber = $data->momo_number;
        $curl = curl_init();
        // intval($data->amount)
        $payload = array(
        "amount" => 1,
        "title" => "Charity Giving",
        "description" => "Charity Giving",
        "clientReference" => "Charity Giving",
        "callbackUrl" => "https://massivecheerfulgivingnetwork.org/#donate-form",
        "cancellationUrl" => "https://massivecheerfulgivingnetwork.org/#cancelled-error",
        "returnUrl" => "https://massivecheerfulgivingnetwork.org/#donate-form",
        "logo" => "https://massivecheerfulgivingnetwork.org/img/logo.jpeg"
        );

        curl_setopt_array($curl, [
        CURLOPT_HTTPHEADER => [
            "Content-Type: application/json",
            "Authorization: Basic " . base64_encode("zcstylza:mjsijkru")
        ],
        CURLOPT_POSTFIELDS => json_encode($payload),
        CURLOPT_URL => "https://devp-reqsendmoney-230622-api.hubtel.com/request-money/" . $mobileNumber,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => "POST",
        ]);

        $response = curl_exec($curl);
        $error = curl_error($curl);

        $response = json_decode($response);

        curl_close($curl);

        if ($error) {
        echo "cURL Error #:" . $error;
        } else {
        return $response;
        }
    }


    function contactUsForm(Request $request){

        // dd($request->input('name', 'sal'));
 
        $request->validate([
            'name' => 'required',
            'phone_number' => 'nullable|max:10|starts_with:024,027,020,026,054,055,059,050,029,057',
            'email' => 'email:rfc,dns|nullable',
            'subject' => 'required',
            'user_message' => 'required'
        ]);

        // dd('hi');
        

        

        Enquiries::create([
            'name' => $request->name,
            'phone_num' => $request->phone_number,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->user_message
        ]);

        $mailData = $request->all();

        Mail::send('mails.contactus-mail', $mailData, function($message) {
            $message->to('menniablaise@yahoo.com', 'Mr. Blaise')->subject('New Donation');
            $message->from('volunteer@mcgn.org', 'Cheerful Giver');
        });

        return back()->with('success', 'Your Request Was Sent Successfully');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    //  Blog Pages 

    public function blogSingle($id)
    {
        $singleBlog = Blog::find($id);

        return view('blog.single', [
            'blog' => $singleBlog
        ]);
    }

    function latestBlog()
    {
        $data = Blog::orderBy('updated_at', 'desc')->first();
        return $this->blogSingle($data->id);
    }

    public function blogPage()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(6);
        $blogHeader = BlogPage::find(1); 

        return view('blog.index', [
            'blogs' => $blogs,
            'header' => $blogHeader
        ]);
    }



    function newsLetterSubscription(Request $request){

 
        $request->validate([
            'email' => 'email:rfc,dns',
        ]);

        NewsletterSubs::create([
            'email' => $request->email
        ]);

        return back()->with('success', 'Your Request Was Sent Successfully');
        
    }

    // ABOUT PAGE 

    public function aboutPage()
    {
        $about = AboutUs::where('id', 1)->get();
        $team = Team::orderBy('created_at', 'desc')->paginate(8);
        $volunteers = Volunteers::orderBy('created_at', 'desc')->paginate(4);
        $testimonialData = Testimonial::get();
        $aboutData = AboutUs::where('id', 1)->get();
        $aboutHeader = AboutUsPage::find(1);

        return view('about.index', [
            'aboutus' => $about,
            'team' => $team,
            'volunteer' => $volunteers,
            'testimonial' => $testimonialData,
            'aboutus' => $aboutData,
            'header' => $aboutHeader
        ]); 
    }



    // GALLERY PAGE 
    function splitMyArray(array $input_array, int $size, $preserve_keys = null): array
{
    $nr = (int)ceil(count($input_array) / $size);

    if ($nr > 0) {
        return array_chunk($input_array, $nr, $preserve_keys);
    }

    return $input_array;
}


    public function galleryPage($category_id = null)
    { 
        $validCategories = Gallery::select('category_id', 'category')->distinct()->get();
        $galleryHeader = GalleryPage::find(1);
        if(isset($category_id))
        {
            $images = Gallery::where('category_id', '=', $category_id)->get();
            $allImages = [];
            foreach($images as $image){
                $tempData['id'] = $image->id;
                $tempData['image'] = $image->image;
                $tempData['category'] = $image->category;
                array_push($allImages, $tempData);
            }
            array_unshift($allImages, "phoney");
            unset($allImages[0]);
            $split = $this->splitMyArray($allImages, 3);
            // dd($split);
        }else
        {
        $images = Gallery::all();
        $allImages = [];
        foreach($images as $image){
            $tempData['id'] = $image->id;
            $tempData['image'] = $image->image;
            $tempData['category'] = $image->category;
            array_push($allImages, $tempData);
        }
        array_unshift($allImages, "phoney");
        unset($allImages[0]);
        $split = $this->splitMyArray($allImages, 3);
        }
        

        return view('gallery.index', [
            'header' => $galleryHeader,
            'images' => $split,
            'categories' => $validCategories,
        ]);
    }


    // CAUSES PAGE 

    public function causesPage()
    {
        $causes = Causes::orderBy('created_at', 'desc')->paginate(6);
        $causesHeader = CausesPage::find(1);

        foreach($causes as $key => $value){
            $percentage = $value->money_raised/$value->goal * 100;
            $value->percentage = round($percentage, 0);
        }

        return view('causes.index', [
            'causes' => $causes,
            'header' => $causesHeader
        ]);
    }

    public function causesSingle($id)
    {
        $causesSingle = Causes::find($id);
        $causesHeader = CausesPage::find(1);
        $recentCauses = Causes::where('id', '!=', $id)->orderBy('created_at', 'desc')->take(5)->get();
        $authorDetails = User::select('image', 'name', 'about')->find($causesSingle->author_id);
        $relatedPosts = Causes::where('author_id', $causesSingle->author_id)->take(3)->get();


            $percentage = $causesSingle->money_raised/$causesSingle->goal * 100;
            $causesSingle->percentage = round($percentage, 0);

        return view('causes.single', [
            'causes' => $causesSingle,
            'header' => $causesHeader,
            'recents' => $recentCauses,
            'author' => $authorDetails,
            'relatedPosts' => $relatedPosts
        ]);
    }





    // Contact 

    public function contactPage()
    {

        $contactData = ContactPage::where('id', 1)->get();
        $contactHeader = ContactPage::find(1);
        // dd($contactData);

        return view('contact.index', [
            'contactform' => $contactData,
            'header' => $contactHeader
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}

