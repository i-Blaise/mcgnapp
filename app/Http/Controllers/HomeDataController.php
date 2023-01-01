<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Blog;
use App\Models\Causes;
use App\Models\ContactPage;
use App\Models\DonateNow;
use App\Models\Donations;
use App\Models\Event;
use App\Models\Home;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\VolunteerPage;
use App\Models\Volunteers;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class HomeDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $homeData = DB::table('home')->get();

        $homeData = Home::orderBy('id', 'desc')->get();
        $aboutData = AboutUs::where('id', 1)->get();
        $causesData = Causes::orderBy('money_raised', 'desc')->take(4)->get();
        $donateNowData = DonateNow::where('id', 1)->get();
        $eventData = Event::orderBy('date', 'desc')->take(2)->get();
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


    public function home()
    {
        // $homeData = DB::table('home')->get();

        $homeData = Home::orderBy('id', 'desc')->get();
        $aboutData = AboutUs::where('id', 1)->get();
        $causesData = Causes::orderBy('money_raised', 'desc')->take(4)->get();
        $donateNowData = DonateNow::where('id', 1)->get();
        $eventData = Event::orderBy('date', 'desc')->take(2)->get();
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


    public function becomeVolunteerMail(Request $request)
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

        if(!empty($request->event_name))
        {
            return redirect()->route('eventsPage')->with('success', 'We have recieved your request');
        }else{
            return redirect()->route('home')->with('success', 'Your Request Was Sent Successfully');
        }

        
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


    function eventsPage ($id = null)
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
            $event = Event::orderBy('created_at', 'desc')->paginate(4);

            return view('events.index', [
                'eventData' => $event
            ]);
        }


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


    function donateNow(Request $request){


        $request->validate([
            'name' => 'required',
            'momo_number' => 'required|string|max:10|starts_with:024,027,020,026,054,055,059,050,029,057',
            'email' => 'email:rfc,dns|nullable',
            'amount' => 'required|in:50,100,200'
        ]);

        Donations::create([
            'name' => $request->name,
            'phone_num' => $request->momo_number,
            'email' => $request->email,
            'amount' => $request->amount
        ]);

        $mailData = $request->all();

        Mail::send('mails.donations-mail', $mailData, function($message) {
            $message->to('menniablaise@yahoo.com', 'Mr. Blaise')->subject('New Donation');
            $message->from('volunteer@mcgn.org', 'Cheerful Giver');
        });


        if($request->request_page == 'donate'){
            return redirect()->route('donatePage')->with('success', 'Your Request Was Sent Successfully');
        }elseif($request->request_page == 'home'){
            return redirect()->route('home')->with('success', 'Your Request Was Sent Successfully');
        }

    }


    function contactUsForm(Request $request){

        $request->validate([
            'name' => 'required',
            'phone_number' => 'nullable|max:10|starts_with:024,027,020,026,054,055,059,050,029,057',
            'email' => 'email:rfc,dns|nullable',
            'subject' => 'required',
            'user_message' => 'required'
        ]);

        // Donations::create([
        //     'name' => $request->name,
        //     'phone_number' => $request->momo_number,
        //     'email' => $request->email,
        //     'subject' => $request->amount,
        //     'message' => $request->message
        // ]);

        $mailData = $request->all();

        Mail::send('mails.contactus-mail', $mailData, function($message) {
            $message->to('menniablaise@yahoo.com', 'Mr. Blaise')->subject('New Donation');
            $message->from('volunteer@mcgn.org', 'Cheerful Giver');
        });

        return redirect()->route('home')->with('success', 'Your Request Was Sent Successfully');
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

    public function blogPage()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(6);

        return view('blog.index', [
            'blogs' => $blogs
        ]);
    }



    // ABOUT PAGE 

    public function aboutPage()
    {
        $about = AboutUs::where('id', 1)->get();

        return view('about.index', [
            'aboutus' => $about
        ]);
    }



    // CAUSES PAGE 

    public function causesPage()
    {
        $causes = Causes::orderBy('created_at', 'desc')->paginate(6);

        foreach($causes as $key => $value){
            $percentage = $value->money_raised/$value->goal * 100;
            $value->percentage = round($percentage, 0);
        }

        return view('causes.index', [
            'causes' => $causes
        ]);
    }

    public function causesSingle($id)
    {
        $causesSingle = Causes::find($id);

            $percentage = $causesSingle->money_raised/$causesSingle->goal * 100;
            $causesSingle->percentage = round($percentage, 0);

        return view('causes.single', [
            'causes' => $causesSingle
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
