<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\admins;
use  App\Models\sliders;
use  App\Models\capitals;
use  App\Models\eventcategies;
use  App\Models\cities;
use  App\Models\comment_tables;
use  App\Models\countries;
use  App\Models\dates;
use  App\Models\upcomming_events;
use  App\Models\speakers;
use  App\Models\eventinformations;
use  App\Models\roomsandhotels;
use  App\Models\ourservices;
use  App\Models\gallerys;




class admincontroller extends Controller
{
 
    function welcome(Request $res)
    {
        if($res->login)
        {
            $email = $res->email;
            $password = $res->password;
        
            $admin_data = admins::where("email",$email)->where("password",$password)->first();
            
            return redirect('/dashboard');

        }
        else{
        return view("welcome");
        } 
    }
    function dashboard(Request $res)
    {
        return view("dashboard");
    }
    
    function viewslider(Request $res)
    {
        $arr['slider_date']=sliders::get();
        return view("viewslider")->with($arr);
    }

    function delete_slider(Request $res,$id)
    {
        sliders::where('id',$id)->delete();
        return redirect("/viewslider");
    }
    
    function viewcapital(Request $res)
    {
        $arr['capital_data']=capitals::get();
        return view("viewcapital")->with($arr);
    }

    function delete_capital(Request $res,$id)
    {
        capitals::where('id',$id)->delete();
        return redirect("/viewcapital");
    }
   
    function viewcategory(Request $res)
    {
        $arr['category_date']=eventcategies::get();
        return view("viewcategory")->with($arr);
    }

    function delete_category(Request $res,$id)
    {
        eventcategies::where('id',$id)->delete();
        return redirect("/viewcategory");
    }
   
    
    function viewcity(Request $res)
    {
        $arr['city_data']=cities::get();
        return view("viewcity")->with($arr);
    }

    function delete_city(Request $res,$id)
    {
        cities::where('id',$id)->delete();
        return redirect("/viewcity");
    }
    
    function viewcomment(Request $res)
    {
        $arr['comment_data']=comment_tables::get();
        return view("viewcomment")->with($arr);
    }
    
    function delete_comment(Request $res,$id)
    {
        comment_tables::where('id',$id)->delete();
        return redirect("/viewcomment");
    }
    function viewcountry(Request $res)
    {
        $arr['country_data']=countries::get();
        return view("viewcountry")->with($arr);
    }
   
    function delete_country(Request $res,$id)
    {
        countries::where('id',$id)->delete();
        return redirect("/viewcountry");
    }
    function viewdate(Request $res)
    {
        $arr['date_data']=dates::get();
        return view("viewdate")->with($arr);
    }

    function delte_date(Request $res,$id)
    {
        dates::where('id',$id)->delete();
        return redirect("/viewdate");
    }
    function viewevent(Request $res)
    {
        $arr['event_data']=eventinformations::get();
        return view("viewevent")->with($arr);
    }

    function delete_event(Request $res,$id)
    {
        eventinformations::where('id',$id)->delete();
        return redirect("/viewevent");
    }

    function addgallery(Request $res)
    {
        if($res->add)
        {
            $image_array=$res->file("image");
            $video_array=$res->file("video");
            
            $id=0;
            $arr=array();

            $image_name=$image_array->getClientOriginalName();
            $image_array->move(public_path('images'),$image_name);

            $video_name=$video_array->getClientOriginalName();
            $video_array->move(public_path('video'),$video_name);

            $arr = array('imahe_name'=>$image_name ,'video_name'=>$video_name);
            $data = gallerys::create($arr);

        }
        return view("addgallery");
    }

    function viewgallery(Request $res)
    {
        $arr['category_date']=eventcategies::get();
        return view("viewcategory")->with($arr);
    }
    
    function viewroomsandhotels(Request $res)
    {
        $arr['roomandhotel_data']=roomsandhotels::get();
        return view("viewroomsandhotels")->with($arr);
    }
    
    function delete_roomsandhetels(Request $res,$id)
    {
        roomsandhotels::where('id',$id)->delete();
        return redirect("/viewroomsandhotels");
    }
    
    function viewservices(Request $res)
    {
        $arr['service_date']=ourservices::get();
        return view("view_services")->with($arr);
      
       
    }
    function delete_service(Request $res,$id)
    {
        ourservices::where('id',$id)->delete();
        return redirect("/viewservices");
    }
    
    function viewspeaker(Request $res)
    {
        $arr['speaker_data']=speakers::get();
        return view("viewspeaker")->with($arr);
    }

    function delete_speaker(Request $res,$id)
    {
        speakers::where('id',$id)->delete();
        return redirect("/viewspeaker");
    }
    
    function viewupcommingevent(Request $res)
    {
        $arr['upcommin_data']=upcomming_events::get();
        return view("viewupcommingevent ")->with($arr);
    }

    function delete_events(Request $res,$id)
    {
        upcomming_events::where('id',$id)->delete();
        return redirect("/viewupcommingevent");
    }

    //add code
    function addslider(Request $res)
    {
        if(isset($res->add)){

            $date = $res->date;
            $title = $res->title;
            $subtitle = $res->subtitle;
            $bookticket = $res->bookticket;
            $event_details = $res->event_details;
            
            $image_array=$res->file("image");
            $id=0;
            $arr=array();
            $image_name=$image_array->getClientOriginalName();
            $image_array->move(public_path('images'),$image_name);

            $sliders = array('date'=>$date , 'title'=>$title , 'subtitle'=>$subtitle,'book_ticket'=>$bookticket,'event_details'=>$event_details,'image'=>$image_name);
            $data = sliders::create($sliders);
            
            
              return redirect('/addslider');

        }
        return view("addslider");
    }

    function addcategory(Request $res)
    {
        if(isset($res->add)){

            $name = $res->name;
            $iconcode = $res->iconcode;
        

            $category = array('name'=>$name,'icon_code'=> $iconcode);
            $data = eventcategies::create($category);
            
            
              return redirect('/addcategory');

        }
        return view("addcategory");
    }
    
    

    function addcapital(Request $res)
    {
        if(isset($res->add)){

            $name = $res->name;
        
            $capitals = array('name'=>$name);
            $data = capitals::create($capitals);
            
            return redirect('/addcapital');

        }
        return view("addcapital");
    }

   

    function addcity(Request $res)
    {
        if(isset($res->add)){

            $name = $res->name;
        

            $capitals = array('name'=>$name);
            $data = cities::create($capitals);
            
            
              return redirect('/addcity');

        }
        return view("addcity");
    }

    function addcomment(Request $res)
    {
        if(isset($res->add)){

            $name = $res->name;
            $cmt = $res->comment;
            $eventid = $res->eveid;
            $customerid = $res->cusid;
            $profession = $res->proff;
            $cmtdate = $res->date;
        

            $comments = array('name'=>$name,'cmt'=>$cmt,'event_id'=>$eventid,'customer_id'=>$customerid,'proffession'=>$profession,'cmt_date'=>$cmtdate);
            $data = comment_tables::create($comments);
            
            
              return redirect('/addcomment');

        }
        return view("addcomment");
    }

    function addcountry(Request $res)
    {
        if(isset($res->add)){

        $name = $res->name;
   
    

        $comments = array('name'=>$name);
        $data = countries::create($comments);
        
        
          return redirect('/addcountry');

    }
    
        return view("addcountry");
    }

    function adddate(Request $res)
    {
        if(isset($res->add)){

            $date = $res->Date;
       
        
    
            $dates = array('date'=>$date);
            $data = dates::create($dates);
            
            
              return redirect('/adddate');
    
        }
        
        return view("adddate");
    }
    function addupcommingevent(Request $res)
    {
        if(isset($res->add)){

        
            $maintitle = $res->main_title;
            $subtitle1 = $res->sub_title1;
            $subtitle2 = $res->sub_title2;
            $information = $res->information;
            $time = $res->time;
            $place = $res->place;
            $bookticket = $res->book_tickect;
            $eventdetails = $res->eventdetails;
            $price = $res->price;


            $image_array=$res->file("image");
            $id=0;
            $arr=array();
            $image_name=$image_array->getClientOriginalName();
            $image_array->move(public_path('images'),$image_name);

            $comments = array('main_title'=>$maintitle,'sub_title1'=>$subtitle1,'sub_title2'=>$subtitle2,'information'=>$information,'time'=>$time,'place'=>$place,'event_details'=>$eventdetails,'book_ticket'=>$bookticket,'image'=>$image_name,'price'=>$price);
            $data = upcomming_events::create($comments);
            
            
              return redirect('/addupcommingevent');
    
        }
        return view("addupcommingevent");
       
    }
    function addroomsandhotels(Request $res)
    {
        if(isset($res->add)){

            $ratting = $res->ratting;
            $siting = $res->siting;
            $name = $res->name;
            $details = $res->deatils;
            $price = $res->price;
            $location = $res->localtion;

            $image_array=$res->file("image");
            $id=0;
            $arr=array();
            $image_name=$image_array->getClientOriginalName();
            $image_array->move(public_path('images'),$image_name);
        
    
            $comments = array('ratting'=>$ratting,'setting'=>$siting,'name'=>$name,'details'=>$details,'price'=>$price,'location'=>$location,'image'=>$image_name);
            $data = roomsandhotels::create($comments);
            
            
              return redirect('/addroomsandhotels');
    
        }
        return view("addroomsandhotels");
    }

    function addservices(Request $res)
    {
        if(isset($res->add)){

            $name = $res->name;
            $details = $res->details;
            $description = $res->description;
            $start_price_to_max_price = $res->start_price_to_max_price;
            
            $image_array=$res->file("image");
            $id=0;
            $arr=array();
            $image_name=$image_array->getClientOriginalName();
            $image_array->move(public_path('images'),$image_name);

            $comments = array('service_name'=>$name,'details'=>$details,'description'=>$description,'start_price_to_max_price'=>$start_price_to_max_price,'image'=>$image_name);
            $data = ourservices::create($comments);
        
            return redirect('/addservices');
    
        }
        return view("addservices");
    }

    function addevent(Request $res)
    {
        if(isset($res->add)){

            $name = $res->name;
            $date = $res->date;
            $time = $res->time;
            $details = $res->details;
            $price = $res->price;
            $place = $res->place;
            $city = $res->city;
            $address = $res->address;
            $stsrtbookindate = $res->datebokking;
            $teamname = $res->teamname;
            $speakername = $res->speakername;
            $seats = $res->seats;


            $image_array=$res->file("image");
            $id=0;
            $arr=array();
            $image_name=$image_array->getClientOriginalName();
            $image_array->move(public_path('images'),$image_name);
        
    
            $comments = array('name'=>$name,'event_date'=>$date,'event_time'=>$time,'event_details'=>$details,'event_price'=>$price,'event_place'=>$place,'event_city'=>$city,'event_address'=>$address,'start_date_booking'=>$stsrtbookindate,'event_organization_team_nme'=>$teamname,'event_speaker_nae'=>$speakername,'max_seats'=>$seats,'image'=>$image_name);
            $data = eventinformations::create($comments);
            
            
              return redirect('/addevent');
    
        }
        return view("addevent");
    }

    function addspeaker(Request $res)
    {
        if(isset($res->add)){

            $name = $res->name;
            $cno = $res->cno;
            $details = $res->details;
            $experience = $res->Experience;
           


            $image_array=$res->file("image");
            $id=0;
            $arr=array();
            $image_name=$image_array->getClientOriginalName();
            $image_array->move(public_path('images'),$image_name);
        
    
            $comments = array('speaker_name'=>$name,'contect_number'=>$cno,'details'=>$details,'experience'=>$experience,'image'=>$image_name);
            $data = speakers::create($comments);
            
            
              return redirect('/addspeaker');
    
        }
        return view("addspeaker");
    }

////update

    function updaet_capital(Request $res,$id)
    {
        $arr["update_data"]=capitals::where('id',$id)->get();
        if(isset($res->add)){

            $name = $res->name;
        

            $capitals = array('name'=>$name);
            $data = capitals::where('id',$id)->update($capitals);
            
            
              return redirect('/viewcapital');

        }
        return view("update_capital")->with($arr);
    }

    
    function update_category(Request $res,$id)
    {
        $arr["update_data"] = eventcategies::where('id',$id)->get();
        if(isset($res->add)){

            $name = $res->name;
            $iconcode = $res->iconcode;
        

            $category = array('name'=>$name,'icon_code'=> $iconcode);
            $data = eventcategies::where('id',$id)->update($category);
            
            
              return redirect('/viewcategory');

        }
        return view("update_category")->with($arr);
    }

    function update_city(Request $res,$id)
    {
        $arr["update_data"] = cities::where('id',$id)->get();
        if(isset($res->add)){

            $name = $res->name;
        

            $capitals = array('name'=>$name);
            $data = cities::where('id',$id)->update($capitals);
            
            
              return redirect('/viewcity');

        }
       
        return view("update_city")->with($arr);
    }

    function update_comment(Request $res,$id)
    {
        $arr["update_data"] = comment_tables::where('id',$id)->get();
        if(isset($res->add)){

            $name = $res->name;
            $cmt = $res->comment;
            $eventid = $res->eveid;
            $customerid = $res->cusid;
            $profession = $res->proff;
            $cmtdate = $res->date;
        

            $comments = array('name'=>$name,'cmt'=>$cmt,'event_id'=>$eventid,'customer_id'=>$customerid,'proffession'=>$profession,'cmt_date'=>$cmtdate);
            $data = comment_tables::where('id',$id)->update($comments);
            
            
              return redirect('/viewcomment');

        }
       
        return view("update_comment")->with($arr);
    }

    function update_country(Request $res,$id)
    {
        $arr["update_data"] = countries::where('id',$id)->get();
        if(isset($res->add)){

            $name = $res->name;
            $comments = array('name'=>$name);
            $data = countries::where('id',$id)->update($comments);
              return redirect('/viewcountry');
        }   
        return view("update_country")->with($arr);
    }

    function update_event(Request $res,$id)
    {
        $arr["update_data"] = eventinformations::where('id',$id)->get();
        if(isset($res->add)){

            $name = $res->name;
            $date = $res->date;
            $time = $res->time;
            $details = $res->details;
            $price = $res->price;
            $place = $res->place;
            $city = $res->city;
            $address = $res->address;
            $stsrtbookindate = $res->datebokking;
            $teamname = $res->teamname;
            $speakername = $res->speakername;
            $seats = $res->seats;


            $image_array=$res->file("image");  
            $image_name=$image_array->getClientOriginalName();
            $image_array->move(public_path('images'),$image_name);
        
    
            $comments = array('name'=>$name,'event_date'=>$date,'event_time'=>$time,'event_details'=>$details,'event_price'=>$price,'event_place'=>$place,'event_city'=>$city,'event_address'=>$address,'start_date_booking'=>$stsrtbookindate,'event_organization_team_nme'=>$teamname,'event_speaker_nae'=>$speakername,'max_seats'=>$seats,'image'=>$image_name);
            $data = eventinformations::where('id',$id)->update($comments);
            
            
              return redirect('/viewevent');
    
        }
        return view("update_event")->with($arr);
    }

    function update_date(Request $res,$id)
    {
        $arr["update_data"] = dates::where('id',$id)->get();
        if(isset($res->add)){

            $date = $res->Date;
    
            $dates = array('date'=>$date);
            $data = dates::where('id',$id)->update($dates);

              return redirect('/viewdate');
    
        }
        return view("update_date")->with($arr);
    }

    function update_gallery(Request $res,$id)
    {
        $arr["update_data"] = dates::where('id',$id)->get();
        if(isset($res->add)){

            $date = $res->Date;
    
            $dates = array('date'=>$date);
            $data = dates::where('id',$id)->update($dates);

              return redirect('/viewgallery')->with($arr);
    
        }
        return view("update_gallery");
    }

    function update_slider(Request $res,$id)
    {
        $arr["update_data"] = sliders::where('id',$id)->get();
        if(isset($res->add_slider)){

            $date = $res->date;
            $title = $res->title;
            $subtitle = $res->subtitle;
            $bookticket = $res->book_ticket;
            $event_details = $res->event_details;
            
            $image_array=$res->file("image");
            $image_name=$image_array->getClientOriginalName();
            $image_array->move(public_path('images'),$image_name);

            $sliders = array('date'=>$date, 'title'=>$title, 'subtitle'=>$subtitle,'book_ticket'=>$bookticket,'event_details'=>$event_details,'image'=>$image_name);

            // $sliders = array('date'=>$date , 'title'=>$title , 'subtitle'=>$subtitle,'book_ticket'=>$bookticket,'event_details'=>$event_details,'image'=>$image_name);
            $data = sliders::where('id',$id)->update($sliders);
            
            
              return redirect('/viewslider');

        }
        return view("update_slider")->with($arr);
    }
    
    function update_upevent(Request $res,$id)
    {
        $arr["update_data"] = upcomming_events::where('id',$id)->get();
        if(isset($res->add))
        {
            $maintitle = $res->main_title;
            $subtitle1 = $res->sub_title1;
            $subtitle2 = $res->sub_title2;
            $information = $res->information;
            $time = $res->time;
            $place = $res->place;
            $bookticket = $res->book_tickect;
            $eventdetails = $res->eventdetails;

            $image_array=$res->file("image");
            $image_name=$image_array->getClientOriginalName();
            $image_array->move(public_path('images'),$image_name);

            $comments = array('main_title'=>$maintitle,'sub_title1'=>$subtitle1,'sub_title2'=>$subtitle2,'information'=>$information,'time'=>$time,'place'=>$place,'event_details'=>$eventdetails,'image'=>$image_name,'book_ticket'=>$bookticket);
            $data = upcomming_events::where('id',$id)->update($comments);
            
            
              return redirect('/viewupcommingevent');
    
        }
        return view("update_upevent")->with($arr);
    }
    function update_speaker(Request $res,$id)
    {
        $arr["update_data"]=speakers::where('id',$id)->get();
        if(isset($res->add)){

            $name = $res->name;
            $cno = $res->cno;
            $details = $res->details;
            $experience = $res->Experience;
           


            $image_array=$res->file("image");
            $image_name=$image_array->getClientOriginalName();
            $image_array->move(public_path('images'),$image_name);
        
    
            $comments = array('speaker_name'=>$name,'contect_number'=>$cno,'details'=>$details,'experience'=>$experience,'image'=>$image_name);
            $data =speakers::where('id',$id)->update($comments);
            
            
              return redirect('/viewspeaker');
    
        }
        return view("update_speaker")->with($arr);
    }
    function update_roomsandhotels(Request $res,$id)
    {
        $arr["update_data"]=roomsandhotels::where('id',$id)->get();
        if(isset($res->add)){

            $ratting = $res->ratting;
            $siting = $res->siting;
            $name = $res->name;
            $details = $res->deatils;
            $price = $res->price;
            $location = $res->localtion;

            $image_array=$res->file("image");
            $image_name=$image_array->getClientOriginalName();
            $image_array->move(public_path('images'),$image_name);
        
    
            $comments = array('ratting'=>$ratting,'setting'=>$siting,'name'=>$name,'details'=>$details,'price'=>$price,'location'=>$location,'image'=>$image_name);
            $data = roomsandhotels::where('id',$id)->update($comments);
            
            
              return redirect('/viewroomsandhotels');
    
        }
        return view("update_roomsandhotels")->with($arr);
    }
    function update_service(Request $res,$id)
    {
        $arr["update_data"]=ourservices::where('id',$id)->get();
        if(isset($res->add)){

            $name = $res->name;
            $details = $res->details;
            $description = $res->description;
            $start_price_to_max_price = $res->start_price_to_max_price;
            
            $image_array=$res->file("image");
            $image_name=$image_array->getClientOriginalName();
            $image_array->move(public_path('images'),$image_name);

            $comments = array('service_name'=>$name,'details'=>$details,'description'=>$description,'start_price_to_max_price'=>$start_price_to_max_price,'image'=>$image_name);
            $data = ourservices::where('id',$id)->update($comments);
        
            return redirect('/viewservices');
    
        }
        return view("update_service")->with($arr);
    }
}


