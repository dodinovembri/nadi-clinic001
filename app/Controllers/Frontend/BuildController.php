<?php

namespace App\Controllers\Frontend;

use App\Models\AboutModel;
use App\Models\AppointmentModel;
use App\Models\AppointmentTypeModel;
use App\Models\BenefitModel;
use App\Models\BlogCategoryModel;
use App\Models\BlogCommentModel;
use App\Models\BlogModel;
use App\Models\ClientModel;
use App\Models\ClinicModel;
use App\Models\ConfigMenuModel;
use App\Models\ConfigModel;
use App\Models\DepartmentGalleryModel;
use App\Models\DepartmentModel;
use App\Models\DepartmentServiceModel;
use App\Models\DepartmentTimetableModel;
use App\Models\FaqModel;
use App\Models\FooterFeatureModel;
use App\Models\LaboratoryFeatureModel;
use App\Models\MedicalCareModel;
use App\Models\SliderFeatureModel;
use App\Models\SliderModel;
use App\Models\TeamModel;
use App\Models\TestimonialModel;
use App\Models\TweetModel;
use App\Models\UserModel;

class BuildController extends BaseController
{
    public function index($app_id, $nadi_app_client_id, $trial_access_name, $email)
    {
        $config = new ConfigModel();
        // get app
        $app = $config->where('app_id', $app_id)->get()->getFirstRow();
        if ($app) {
            $client = new ClientModel();
            $client_data = $client->where('app_id', $app_id)->where('nadi_app_client_id', $nadi_app_client_id)->where('trial_access_name', $trial_access_name)->where('email', $email)->where('status', 1)->get()->getFirstRow();
            if ($client_data) {
                session()->setFlashdata('info', 'You already have an account, please login to continue.');
                return redirect()->to(base_url($trial_access_name . '/ext-login'));
            } else {
                // insert to client config
                $client = new ClientModel();
                $client->insert([
                    'created_at' => date('Y-m-d H:i:s'),
                    'status' => 1,
                    'nadi_app_client_id' => $nadi_app_client_id,
                    'app_id' => $app_id,
                    'domain_live_url' => base_url(),
                    'trial_access_name' => $trial_access_name,
                    'email' => $email,
                    'is_production' => 0
                ]);

                // get inserted client
                $new_client = $client->where('app_id', $app_id)->where('nadi_app_client_id', $nadi_app_client_id)->where('trial_access_name', $trial_access_name)->where('email', $email)->where('status', 1)->get()->getFirstRow();
                // get default data
                $default_data = $client->where('trial_access_name', null)->where('status', 1)->get()->getFirstRow();

                // about
                $about = new AboutModel();
                $about_data = $about->where('client_id', $default_data->id)->get()->getResult();
                foreach ($about_data as $key => $value) {
                    $about->insert([
                        'created_at' => date('Y-m-d H:i:s'),
                        'status' => 1,
                        'client_id' => $new_client->id,
                        'title' => $value->title,
                        'description' => $value->description,
                        'motto' => $value->motto,
                        'motto_by' => $value->motto_by,
                        'our_feature' => $value->our_feature,
                        'our_feature_by' => $value->our_feature_by,
                        'image1' => $value->image1,
                        'image2' => $value->image2,
                        'image3' => $value->image3,
                        'image4' => $value->image4,
                        'image5' => $value->image5,
                        'image6' => $value->image6,
                    ]);
                }

                // appointment
                $appointment = new AppointmentModel();
                $appointment_data = $appointment->where('client_id', $default_data->id)->get()->getResult();
                foreach ($appointment_data as $key => $value) {
                    $appointment->insert([
                        'created_at' => date('Y-m-d H:i:s'),
                        'status' => 1,
                        'client_id' => $new_client->id,
                        'department_id' => $value->department_id,
                        'name' => $value->name,
                        'date_of_birth' => $value->date_of_birth,
                        'phone_number' => $value->phone_number,
                        'email' => $value->email,
                        'appointment_reason' => $value->appointment_reason
                    ]);
                }

                // appointment type
                $appointment_type = new AppointmentTypeModel();
                $appointment_type_data = $appointment_type->where('client_id', $default_data->id)->get()->getResult();
                foreach ($appointment_type_data as $key => $value) {
                    $appointment_type->insert([
                        'created_at' => date('Y-m-d H:i:s'),
                        'status' => 1,
                        'client_id' => $new_client->id,
                        'icon' => $value->icon,
                        'name' => $value->name,
                        'description' => $value->description,
                        'link' => $value->link
                    ]);
                }

                // benefit
                $benefit = new BenefitModel();
                $benefit_data = $benefit->where('client_id', $default_data->id)->get()->getResult();
                foreach ($benefit_data as $key => $value) {
                    $benefit->insert([
                        'created_at' => date('Y-m-d H:i:s'),
                        'status' => 1,
                        'client_id' => $new_client->id,
                        'image' => $value->image,
                        'description' => $value->description
                    ]);
                }

                // blog category
                $blog_category = new BlogCategoryModel();
                $blog_category_data = $blog_category->where('client_id', $default_data->id)->get()->getResult();
                foreach ($blog_category_data as $key => $value) {
                    $blog_category->insert([
                        'created_at' => date('Y-m-d H:i:s'),
                        'status' => 1,
                        'client_id' => $new_client->id,
                        'name' => $value->name
                    ]);
                }

                // blog
                $blog = new BlogModel();
                $blog_data = $blog->where('client_id', $default_data->id)->get()->getResult();
                foreach ($blog_data as $key => $value) {
                    $blog->insert([
                        'created_at' => date('Y-m-d H:i:s'),
                        'status' => 1,
                        'client_id' => $new_client->id,
                        'blog_category_id' => $value->blog_category_id,
                        'date' => $value->date,
                        'title' => $value->title,
                        'description' => $value->description,
                        'image' => $value->image,
                        'creator_name' => $value->creator_name
                    ]);
                }

                // blog comment
                $blog_comment = new BlogCommentModel();
                $blog_comment_data = $blog_comment->where('client_id', $default_data->id)->get()->getResult();
                foreach ($blog_comment_data as $key => $value) {
                    $blog_comment->insert([
                        'created_at' => date('Y-m-d H:i:s'),
                        'status' => 1,
                        'client_id' => $new_client->id,
                        'blog_id' => $value->blog_id,
                        'comment_by' => $value->comment_by,
                        'date' => $value->date,
                        'comment' => $value->comment
                    ]);
                }

                // clinic
                $clinic = new ClinicModel();
                $clinic_data = $clinic->where('client_id', $default_data->id)->get()->getResult();
                foreach ($clinic_data as $key => $value) {
                    $clinic->insert([
                        'created_at' => date('Y-m-d H:i:s'),
                        'status' => 1,
                        'client_id' => $new_client->id,
                        'image' => $value->image,
                        'name' => $value->name,
                        'title' => $value->title,
                        'subtitle' => $value->subtitle
                    ]);
                }

                // config
                $config = new ConfigModel();
                $config_data = $config->where('client_id', $default_data->id)->get()->getResult();
                foreach ($config_data as $key => $value) {
                    $config->insert([
                        'created_at' => date('Y-m-d H:i:s'),
                        'status' => 1,
                        'client_id' => $new_client->id,
                        'app_id' => $value->app_id,
                        'logo' => $value->logo,
                        'logo_text' => $value->logo_text,
                        'monday_friday_opening_hours' => $value->monday_friday_opening_hours,
                        'saturday_opening_hours' => $value->saturday_opening_hours,
                        'sunday_opening_hours' => $value->sunday_opening_hours,
                        'name' => $value->name,
                        'short_description' => $value->short_description,
                        'address' => $value->address,
                        'copyright' => $value->copyright,
                        'url_map' => $value->url_map,
                        'latitude' => $value->latitude,
                        'longitude' => $value->longitude,
                        'make_appointment_description' => $value->make_appointment_description,
                        'favicon' => $value->favicon,
                        'keyword' => $value->keyword,
                        'description' => $value->description,
                        'facebook_url' => $value->facebook_url,
                        'googleplus_url' => $value->googleplus_url,
                        'mail_url' => $value->mail_url,
                        'forrst_url' => $value->forrst_url,
                        'twitter_url' => $value->twitter_url,
                        'phone' => $value->phone,
                        'email' => $value->email
                    ]);
                }

                // config menu
                $config_menu = new ConfigMenuModel();
                $config_menu_data = $config_menu->where('client_id', $default_data->id)->get()->getResult();
                foreach ($config_menu_data as $key => $value) {
                    $config_menu->insert([
                        'created_at' => date('Y-m-d H:i:s'),
                        'status' => 1,
                        'client_id' => $new_client->id,
                        'home' => $value->home,
                        'blog' => $value->blog,
                        'page' => $value->page,
                        'about' => $value->about,
                        'our_doctor' => $value->our_doctor,
                        'medical_care' => $value->medical_care,
                        'department' => $value->department,
                        'timetable' => $value->timetable,
                        'gallery' => $value->gallery,
                        'contact' => $value->contact,
                        'latest_news' => $value->latest_news,
                        'make_an_appointment' => $value->make_an_appointment,
                        'medicenter_clinic' => $value->medicenter_clinic,
                        'latest_post' => $value->latest_post,
                        'latest_tweet' => $value->latest_tweet,
                        'our_motto' => $value->our_motto,
                        'our_feature' => $value->our_feature,
                        'why_choose_us' => $value->why_choose_us,
                        'meet_the_team' => $value->meet_the_team,
                        'category' => $value->category,
                        'most_commented' => $value->most_commented,
                        'most_viewed' => $value->most_viewed,
                        'leave_a_reply' => $value->leave_a_reply,
                        'search_placeholder' => $value->search_placeholder,
                        'photostream' => $value->photostream,
                        'archive' => $value->archive,
                        'send' => $value->send,
                        'top' => $value->top,
                        'read_more' => $value->read_more,
                        'visit_link' => $value->visit_link,
                        'reply' => $value->reply,
                        'online_appointment_form' => $value->online_appointment_form,
                        'opening_hour' => $value->opening_hour,
                        'opening_hour_monday_to_friday' => $value->opening_hour_monday_to_friday,
                        'opening_hour_saturday' => $value->opening_hour_saturday,
                        'opening_hour_sunday' => $value->opening_hour_sunday,
                        'posted_in' => $value->posted_in,
                        'show_all' => $value->show_all,
                        'detail' => $value->detail,
                        'layout' => $value->layout,
                        'wide' => $value->wide,
                        'boxed' => $value->boxed,
                        'posted_by' => $value->posted_by,
                        'address' => $value->address,
                        'our_clinic' => $value->our_clinic,
                        'testimonial' => $value->testimonial,
                        'laboratory' => $value->laboratory,
                        'monday' => $value->monday,
                        'tuesday' => $value->tuesday,
                        'wednesday' => $value->wednesday,
                        'thursday' => $value->thursday,
                        'friday' => $value->friday,
                        'saturday' => $value->saturday,
                        'sunday' => $value->sunday,
                        'phone' => $value->phone,
                        'email' => $value->email,
                        'did_you_know' => $value->did_you_know,
                        'all_department' => $value->all_department,
                        'select_department' => $value->select_department,
                        'first_name' => $value->first_name,
                        'last_name' => $value->last_name,
                        'date_of_birth' => $value->date_of_birth,
                        'code_number' => $value->code_number,
                        'phone_number' => $value->phone_number,
                        'reason_of_appointment' => $value->reason_of_appointment,
                        'general_info' => $value->general_info,
                        'service' => $value->service,
                        'doctor_list' => $value->doctor_list,
                        'speciality' => $value->speciality,
                        'degree' => $value->degree,
                        'training' => $value->training,
                        'office' => $value->office,
                        'work_day' => $value->work_day,
                        'signin' => $value->signin
                    ]);
                }

                // department
                $department = new DepartmentModel();
                $department_data = $department->where('client_id', $default_data->id)->get()->getResult();
                foreach ($department_data as $key => $value) {
                    $department->insert([
                        'created_at' => date('Y-m-d H:i:s'),
                        'status' => 1,
                        'client_id' => $new_client->id,
                        'name' => $value->name,
                        'image' => $value->image,
                        'description' => $value->description
                    ]);
                }

                // department gallery
                $department_gallery = new DepartmentGalleryModel();
                $department_gallery_data = $department_gallery->where('client_id', $default_data->id)->get()->getResult();
                foreach ($department_gallery_data as $key => $value) {
                    $department_gallery->insert([
                        'created_at' => date('Y-m-d H:i:s'),
                        'status' => 1,
                        'client_id' => $new_client->id,
                        'department_id' => $value->department_id,
                        'title' => $value->title,
                        'subtitle' => $value->subtitle,
                        'description' => $value->description,
                        'short_description' => $value->short_description,
                        'image' => $value->image,
                        'video_url' => $value->video_url
                    ]);
                }

                // department service
                $department_service = new DepartmentServiceModel();
                $department_service_data = $department_service->where('client_id', $default_data->id)->get()->getResult();
                foreach ($department_service_data as $key => $value) {
                    $department_service->insert([
                        'created_at' => date('Y-m-d H:i:s'),
                        'status' => 1,
                        'client_id' => $new_client->id,
                        'department_id' => $value->department_id,
                        'description' => $value->description,
                        'price' => $value->price
                    ]);
                }

                // department timetable
                $department_timetable = new DepartmentTimetableModel();
                $department_timetable_data = $department_timetable->where('client_id', $default_data->id)->get()->getResult();
                foreach ($department_timetable_data as $key => $value) {
                    $department_timetable->insert([
                        'created_at' => date('Y-m-d H:i:s'),
                        'status' => 1,
                        'client_id' => $new_client->id,
                        'department_id' => $value->department_id,
                        'department_id' => $value->department_id,
                        'time' => $value->time,
                        'monday_title' => $value->monday_title,
                        'monday_description' => $value->monday_description,
                        'tuesday_title' => $value->tuesday_title,
                        'tuesday_description' => $value->tuesday_description,
                        'wednesday_title' => $value->wednesday_title,
                        'wednesday_description' => $value->wednesday_description,
                        'thursday_title' => $value->thursday_title,
                        'thursday_description' => $value->thursday_description,
                        'friday_title' => $value->friday_title,
                        'friday_description' => $value->friday_description,
                        'saturday_title' => $value->saturday_title,
                        'saturday_description' => $value->saturday_description,
                        'sunday_title' => $value->sunday_title,
                        'sunday_description' => $value->sunday_description
                    ]);
                }

                // faq
                $faq = new FaqModel();
                $faq_data = $faq->where('client_id', $default_data->id)->get()->getResult();
                foreach ($faq_data as $key => $value) {
                    $faq->insert([
                        'created_at' => date('Y-m-d H:i:s'),
                        'status' => 1,
                        'client_id' => $new_client->id,
                        'question' => $value->question,
                        'image' => $value->image,
                        'image' => $value->image,
                        'answer' => $value->answer
                    ]);
                }

                // footer feauture
                $footer_feature = new FooterFeatureModel();
                $footer_feature_data = $footer_feature->where('client_id', $default_data->id)->get()->getResult();
                foreach ($footer_feature_data as $key => $value) {
                    $footer_feature->insert([
                        'created_at' => date('Y-m-d H:i:s'),
                        'status' => 1,
                        'client_id' => $new_client->id,
                        'title' => $value->title,
                        'subtitle' => $value->subtitle
                    ]);
                } 
                
                // laboratory feature
                $laboratory_feature = new LaboratoryFeatureModel();
                $laboratory_feature_data = $laboratory_feature->where('client_id', $default_data->id)->get()->getResult();
                foreach ($laboratory_feature_data as $key => $value) {
                    $laboratory_feature->insert([
                        'created_at' => date('Y-m-d H:i:s'),
                        'status' => 1,
                        'client_id' => $new_client->id,
                        'icon' => $value->icon,
                        'description' => $value->description
                    ]);
                } 
                
                // medical care
                $medical_care = new MedicalCareModel();
                $medical_care_data = $medical_care->where('client_id', $default_data->id)->get()->getResult();
                foreach ($medical_care_data as $key => $value) {
                    $medical_care->insert([
                        'created_at' => date('Y-m-d H:i:s'),
                        'status' => 1,
                        'client_id' => $new_client->id,
                        'icon' => $value->icon,
                        'description' => $value->description
                    ]);
                }  
                
                // slider
                $slider = new SliderModel();
                $slider_data = $slider->where('client_id', $default_data->id)->get()->getResult();
                foreach ($slider_data as $key => $value) {
                    $slider->insert([
                        'created_at' => date('Y-m-d H:i:s'),
                        'status' => 1,
                        'client_id' => $new_client->id,
                        'image' => $value->image,
                        'title' => $value->title,
                        'subtitle' => $value->subtitle
                    ]);
                } 
                
                // slider feature
                $slider_feautre = new SliderFeatureModel();
                $slider_feautre_data = $slider_feautre->where('client_id', $default_data->id)->get()->getResult();
                foreach ($slider_feautre_data as $key => $value) {
                    $slider_feautre->insert([
                        'created_at' => date('Y-m-d H:i:s'),
                        'status' => 1,
                        'client_id' => $new_client->id,
                        'title' => $value->title,
                        'description' => $value->description
                    ]);
                }   
                
                // team
                $team = new TeamModel();
                $team_data = $team->where('client_id', $default_data->id)->get()->getResult();
                foreach ($team_data as $key => $value) {
                    $team->insert([
                        'created_at' => date('Y-m-d H:i:s'),
                        'status' => 1,
                        'client_id' => $new_client->id,
                        'department_id' => $value->department_id,
                        'name' => $value->name,
                        'short_description' => $value->short_description,
                        'speciality' => $value->speciality,
                        'degres' => $value->degres,
                        'training' => $value->training,
                        'office' => $value->office,
                        'work_days' => $value->work_days,
                        'image1' => $value->image1,
                        'image2' => $value->image2,
                        'image3' => $value->image3,
                        'facebook_url' => $value->facebook_url,
                        'googleplus_url' => $value->googleplus_url,
                        'mail_url' => $value->mail_url,
                        'forrst_url' => $value->forrst_url,
                    ]);
                }     
                
                // testimonial
                $testimonial = new TestimonialModel();
                $testimonial_data = $testimonial->where('client_id', $default_data->id)->get()->getResult();
                foreach ($testimonial_data as $key => $value) {
                    $testimonial->insert([
                        'created_at' => date('Y-m-d H:i:s'),
                        'status' => 1,
                        'client_id' => $new_client->id,
                        'description' => $value->description,
                        'tester' => $value->tester
                    ]);
                } 
                
                // tweet
                $tweet = new TweetModel();
                $tweet_data = $tweet->where('client_id', $default_data->id)->get()->getResult();
                foreach ($tweet_data as $key => $value) {
                    $tweet->insert([
                        'created_at' => date('Y-m-d H:i:s'),
                        'status' => 1,
                        'client_id' => $new_client->id,
                        'date' => $value->date,
                        'description' => $value->description,
                        'link' => $value->link
                    ]);
                } 
                
                // user
                $user = new UserModel();
                $user->insert([
                    'created_at' => date('Y-m-d H:i:s'),
                    'status' => 1,
                    'client_id' => $new_client->id,
                    'name' => $trial_access_name,
                    'email' => $email,
                    'password' => password_hash($email, PASSWORD_DEFAULT),
                    'role_code' => 0
                ]);

                return redirect()->to(base_url($trial_access_name . '/extranet'));
            }
        } else {
            return redirect()->to(base_url('/'));
        }
    }
}
