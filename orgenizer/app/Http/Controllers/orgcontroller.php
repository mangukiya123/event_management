<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\org;
use  App\Models\register;
use  App\Models\add_event;
use  App\Models\staff_register;
use  App\Models\o_speakers;
use  App\Models\org_team;
use  App\Models\payment;
use  App\Models\expence;


class orgcontroller extends Controller
{
    //login and register org
    function index(Request $res)
    {
        if(isset($res->login)){

            $password = $res->password;

            $data = register::where('user_password',$password)->get();
            
            if($data->count()==1)
            {
                session(['image' => $data[0]['image']]);
                session(['login_name' => $data[0]['user_name']]);

                return redirect('/org_dashbord');
            }

        }
        return view("welcome");
    }
    function register(Request $res)
    {
        if($res->submit)
        {
            $user_name = $res->user_name;
            $user_email = $res->user_email;
            $user_password = $res->user_password;
            $image = $res->image;

            $image_array = $res->file('image');
            $id = 0;
            $arr = array();

            $image_name = $image_array->getClientOriginalName();
            $image_array->move('images',$image_name);
            // image_name

            $insert_query = array('user_name'=>$user_name , 'image'=>$image_name , 'user_email'=>$user_email , 'user_password'=>$user_password );

            $data = register::create($insert_query);

            return redirect('/welcome');
        }
        return view("register");
    }





    //org home page
    function org(Request $res)
    {
        return view("org");
    }





    //org profile
    function org_profile(Request $res)
    {
        return view("org_profile");
    }




    // add event
    function add_event(Request $res)
    {
        if($res->insert)
        {
            $event_date = $res->event_date;
            $event_time = $res->event_time;
            $event_start_date_booking = $res->event_start_date_booking;
            $event_detail = $res->event_detail;
            $event_organize_team_name = $res->event_organize_team_name;
            $event_price = $res->event_price;
            $event_place = $res->event_place;
            $event_city = $res->event_city;
            $event_address = $res->event_address;
            $speacker_name = $res->speacker_name;
            

            $image_array = $res->file('event_image');
            $id = 0;
            $arr = array();
            $image_name = $image_array->getClientOriginalName();
            $image_array->move(public_path('event_images'),$image_name);
            // image_name

            $insert_event_query = array('event_date'=>$event_date , 'event_time'=>$event_time ,  'event_image'=>$image_name , 'event_start_date_booking'=>$event_start_date_booking , 'event_detail'=>$event_detail 
            ,'event_organize_team_name'=>$event_organize_team_name ,  'event_price'=>$event_price , 'event_place'=>$event_place , 
            'event_city'=>$event_city ,  'event_address'=>$event_address , 'speacker_name'=>$speacker_name);

        

            $data = add_event::create($insert_event_query);

            return redirect('/view_event');
        }
        return view("add_event");
    }
    function view_event(Request $res)
    {
        $arr['event_details'] = add_event::get();

        return view("view_event")->with($arr);
    }
    function delete_event(Request $res,$id)
    {
        add_event::where('id',$id)->delete();
        return redirect("/view_event");
    }
    function update_event(Request $res,$id)
    {
        $arr["update_data"] = add_event::where('id',$id)->get();
        if($res->insert)
        {
            $event_date = $res->event_date;
            $event_time = $res->event_time;
            $event_start_date_booking = $res->event_start_date_booking;
            $event_detail = $res->event_detail;
            $event_organize_team_name = $res->event_organize_team_name;
            $event_price = $res->event_price;
            $event_place = $res->event_place;
            $event_city = $res->event_city;
            $event_address = $res->event_address;
            $speacker_name = $res->speacker_name;
            

            $image_array = $res->file('event_image'); 
            $image_name = $image_array->getClientOriginalName();
            $image_array->move(public_path('event_images'),$image_name);
            // image_name

            $insert_event_query = array('event_date'=>$event_date , 'event_time'=>$event_time ,  'event_image'=>$image_name , 'event_start_date_booking'=>$event_start_date_booking , 'event_detail'=>$event_detail 
            ,'event_organize_team_name'=>$event_organize_team_name ,  'event_price'=>$event_price , 'event_place'=>$event_place , 
            'event_city'=>$event_city ,  'event_address'=>$event_address , 'speacker_name'=>$speacker_name);

        

            $data = add_event::where('id',$id)->update($insert_event_query);

            return redirect('/view_event');
        }
        return view("update_event")->with($arr);
    }





    // payment
    function payment(Request $res)
    {
        if($res->payment)
        {
            $payment_amount = $res->payment_amount;
            $payment_details = $res->payment_details;
            $id = 0;
            $arr = array();

            $insert_amount_query = array('payment_amount'=>$payment_amount , 'payment_details'=>$payment_details);

        

            $data = payment::create($insert_amount_query);

            return redirect("/payment_details");
        }
        return view("payment");
    }
    function payment_details(Request $res)
    {
        $arr['payment_details'] = payment::get();

        return view("payment_details")->with($arr);
    }
    function delete_payment(Request $res,$id)
    {
        payment::where('id',$id)->delete();
        return redirect("/payment_details");
    }

    function update_payment(Request $res,$id)
    {
        $arr["update_data"] = payment::where('id',$id)->get();
        if($res->payment)
        {
            $payment_amount = $res->payment_amount;
            $payment_details = $res->payment_details;
            
            
            $insert_amount_query = array('payment_amount'=>$payment_amount , 'payment_details'=>$payment_details);

            $data = payment::where('id',$id)->update($insert_amount_query);

            return redirect('/payment_details');
        }
        return view("update_payment")->with($arr);
    }
    





    // expence
    function expence(Request $res)
    {
        if($res->expence)
        {
            $expence_date = $res->expence_date;
            $expence_price = $res->expence_price;
            $expence_details = $res->expence_details;
           
            $insert_expence_query = array('expence_date'=>$expence_date , 'expence_price'=>$expence_price , 'expence_details'=>$expence_details);

            $data = expence::create($insert_expence_query);

            return redirect("/expence_details");
        }
        return view("expence");
    }
    function expence_details(Request $res)
    {
        $arr['expence_details'] = expence::get();

        return view("expence_details")->with($arr);
    }
    function delete_expence(Request $res,$id)
    {
        expence::where('id',$id)->delete();
        return redirect("/expence_details");
    }
    function update_expence(Request $res,$id)
    {
        $arr["update_data"] =  expence::where('id',$id)->get();
        if($res->expence)
        {
            $expence_date = $res->expence_date;
            $expence_price = $res->expence_price;
            $expence_details = $res->expence_details;
           
            $insert_expence_query = array('expence_date'=>$expence_date , 'expence_price'=>$expence_price , 'expence_details'=>$expence_details);

            $data = expence::where('id',$id)->update($insert_expence_query);

            return redirect("/expence_details");
        }
        return view("update_expence")->with($arr);
    }
    




    // review
    function review(Request $res)
    {
        return view("review");
    }

    


    // staff manage
    function staff_manage(Request $res)
    {
        return view("staff_manage");
    }

    function org_dashbord(Request $res)
    {
        return view("org_dashbord");
    }
    
    function staff_register(Request $res)
    {
        if($res->staff_register)
        {
            $staff_name = $res->staff_name;
            $staff_birthdate = $res->staff_birthdate;
            $staff_address = $res->staff_address;
            $staff_email = $res->staff_email;
            $password = $res->password;
            $phone_no = $res->phone_no;

            $image_array = $res->file('image');
            $image_name = $image_array->getClientOriginalName();
            $image_array->move(public_path('staff_images'),$image_name);
            // image_name

            $staff_insert_query = array('staff_name'=>$staff_name , 'staff_birthdate'=>$staff_birthdate , 'staff_address'=>$staff_address , 'staff_email'=>$staff_email , 'password'=>$password , 'image'=>$image_name , 'phone_no'=>$phone_no);

            $data = staff_register::create($staff_insert_query);

            return redirect('/staff_login');
        }
        return view("/staff_register");
    }
    function staff_login(Request $res)
    {
        if(isset($res->staff_login)){

            $staff_email = $res->staff_email;
            $password = $res->password;

            $data = staff_register::where('staff_email',$staff_email)->where('password',$password)->get();
            
            
              return redirect('/staff_org');

        }
        return view("staff_login");
    }
    function staff_org(Request $res)
    {
        return view("staff_org");
    }

    function staff_profile(Request $res)
    {
        $arr['data']  = staff_register::get();

        return view("staff_profile")->with($arr);
    }

    function staff_header(Request $res)
    {
        return view("staff_header");
    }




    // speakers
    function speaker_about(Request $res)
    {
        $arr['speaker_details'] = o_speakers::get();
        return view("speaker_about")->with($arr);
    }
    function Add_Speacker(Request $res)
    {
        if($res->add_speaker)
        {
            $speaker_name = $res->speaker_name;
            $speaker_email = $res->speaker_email;
            $speaker_contact = $res->speaker_contact;
            $speaker_date = $res->speaker_date;
            $speaker_time = $res->speaker_time;
            $speaker_city = $res->speaker_city;
            $speaker_info = $res->speaker_info;
            $experience = $res->experience;
            
            $image_array = $res->file('speaker_image');
            $id = 0;
            $arr = array();
            $image_name = $image_array->getClientOriginalName();
            $image_array->move(public_path('speaker_images'),$image_name);
            // image_name

            $add_speaker_query = array('speaker_name'=>$speaker_name , 'speaker_email'=>$speaker_email ,  'speaker_image'=>$image_name , 'speaker_contact'=>$speaker_contact , 'speaker_date'=>$speaker_date ,
            'speaker_time'=>$speaker_time ,  'speaker_city'=>$speaker_city , 'speaker_info'=>$speaker_info ,'experience'=>$experience );

        

            $data = o_speakers::create($add_speaker_query);

            return redirect('/speaker_about');
        }
        return view("Add_Speacker");
    }
    function delete_speaker(Request $res,$id)
    {
        o_speakers::where('id',$id)->delete();
        return redirect("/speaker_about");
    }
    function update_speaker(Request $res,$id)
    {
        $arr["update_data"] = o_speakers::where('id',$id)->get();
        if($res->add_speaker)
        {
            $speaker_name = $res->speaker_name;
            $speaker_email = $res->speaker_email;
            $speaker_contact = $res->speaker_contact;
            $speaker_date = $res->speaker_date;
            $speaker_time = $res->speaker_time;
            $speaker_city = $res->speaker_city;
            $speaker_info = $res->speaker_info;
            $experience = $res->experience;
            
            $image_array = $res->file('speaker_image');
            $image_name = $image_array->getClientOriginalName();
            $image_array->move(public_path('speaker_images'),$image_name);
            // image_name

            $add_speaker_query = array('speaker_name'=>$speaker_name , 'speaker_email'=>$speaker_email ,  'speaker_image'=>$image_name , 'speaker_contact'=>$speaker_contact , 'speaker_date'=>$speaker_date ,
            'speaker_time'=>$speaker_time ,  'speaker_city'=>$speaker_city , 'speaker_info'=>$speaker_info ,'experience'=>$experience);

            $data = o_speakers::where('id',$id)->update($add_speaker_query);

            // $data = speaker::create($add_speaker_query);

            return redirect('/speaker_about');
        }
        return view("update_speaker")->with($arr);
    }





    // ORG TEAM 
    function add_team_org(Request $res)
    {
        if($res->org_team)
        {
            $org_team_name = $res->org_team_name;
            $org_team_email = $res->org_team_email;
            $org_team_about = $res->org_team_about;
            $org_team_contact = $res->org_team_contact;
            $org_team_city = $res->org_team_city;
            
            $image_array = $res->file('org_team_images');
            $id = 0;
            $arr = array();
            $image_name = $image_array->getClientOriginalName();
            $image_array->move(public_path('org_images'),$image_name);
            // image_name

            $add_org_team__query = array('org_team_name'=>$org_team_name , 'org_team_email'=>$org_team_email , 'org_team_about'=>$org_team_about ,  'org_team_images'=>$image_name ,   'org_team_contact'=>$org_team_contact ,
            'org_team_city'=>$org_team_city);

        

            $data = org_team::create($add_org_team__query);

            return redirect('/org_team_about');
        }
        return view("add_team_org");
    }
    function org_team_about(Request $res)
    {
        $arr['org_team_details'] = org_team::get();
        return view("org_team_about")->with($arr);
    }
    function delete_org_team(Request $res,$id)
    {
        org_team::where('id',$id)->delete();
        return redirect("/org_team_about");
    }
    function update_org_team(Request $res,$id)
    {
        $arr["update_org_team_data"] = org_team::where('id',$id)->get();
        if($res->org_team)
        {
            $org_team_name = $res->org_team_name;
            $org_team_email = $res->org_team_email;
            $org_team_about = $res->org_team_about;
            $org_team_contact = $res->org_team_contact;
            $org_team_city = $res->org_team_city;
            
            $image_array = $res->file('org_team_images');
            $image_name = $image_array->getClientOriginalName();
            $image_array->move(public_path('org_images'),$image_name);
            // image_name

            $add_org_team__query = array('org_team_name'=>$org_team_name , 'org_team_email'=>$org_team_email , 'org_team_about'=>$org_team_about ,  'org_team_images'=>$image_name ,   'org_team_contact'=>$org_team_contact ,
            'org_team_city'=>$org_team_city);

        

            $data = org_team::where('id',$id)->update($add_org_team__query);

            return redirect('/org_team_about');
        }
        return view("update_org_team")->with($arr);
    }


    

    function logout(Request $res)
    {
        $res->session()->flush();
        return redirect('/');
    }
}
?> 