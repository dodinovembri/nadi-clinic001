<?php

namespace App\Controllers\Extranet;
use App\Models\ConfigModel;
use App\Models\ConfigMenuModel;

class ConfigMenuController extends BaseController
{
    public function index()
    {
        // config
        $config = new ConfigModel();
        $data['config'] = $config->get()->getFirstRow();
        // menu config
        $config_menu = new ConfigMenuModel();
        $data['config_menu'] = $config_menu->get()->getFirstRow();

        return view('extranet/config_menu/index', $data);
    }

    public function update($id)
    {
        $config_menu = new ConfigMenuModel();

        $config_menu->update($id, [
            'home' => $this->request->getPost('home'),
            'blog' => $this->request->getPost('blog'),
            'page' => $this->request->getPost('page'),
            'about' => $this->request->getPost('about'),
            'our_doctor' => $this->request->getPost('our_doctor'),
            'medical_care' => $this->request->getPost('medical_care'),
            'department' => $this->request->getPost('department'),
            'timetable' => $this->request->getPost('timetable'),
            'gallery' => $this->request->getPost('gallery'),
            'contact' => $this->request->getPost('contact'),
            'latest_news' => $this->request->getPost('latest_news'),
            'make_an_appointment' => $this->request->getPost('make_an_appointment'),
            'medicenter_clinic' => $this->request->getPost('medicenter_clinic'),
            'latest_post' => $this->request->getPost('latest_post'),
            'latest_tweet' => $this->request->getPost('latest_tweet'),
            'our_motto' => $this->request->getPost('our_motto'),
            'our_feature' => $this->request->getPost('our_feature'),
            'why_choose_us' => $this->request->getPost('why_choose_us'),
            'meet_the_team' => $this->request->getPost('meet_the_team'),
            'category' => $this->request->getPost('category'),
            'most_commented' => $this->request->getPost('most_commented'),
            'most_viewed' => $this->request->getPost('most_viewed'),
            'leave_a_reply' => $this->request->getPost('leave_a_reply'),
            'search_placeholder' => $this->request->getPost('search_placeholder'),
            'photostream' => $this->request->getPost('photostream'),
            'archive' => $this->request->getPost('archive'),
            'send' => $this->request->getPost('send'),
            'top' => $this->request->getPost('top'),
            'read_more' => $this->request->getPost('read_more'),
            'visit_link' => $this->request->getPost('visit_link'),
            'reply' => $this->request->getPost('reply'),
            'online_appointment_form' => $this->request->getPost('online_appointment_form'),
            'opening_hour' => $this->request->getPost('opening_hour'),
            'opening_hour_monday_to_friday' => $this->request->getPost('opening_hour_monday_to_friday'),
            'opening_hour_saturday' => $this->request->getPost('opening_hour_saturday'),
            'opening_hour_sunday' => $this->request->getPost('opening_hour_sunday'),
            'posted_in' => $this->request->getPost('posted_in'),
            'show_all' => $this->request->getPost('show_all'),
            'detail' => $this->request->getPost('detail'),
            'layout' => $this->request->getPost('layout'),
            'wide' => $this->request->getPost('wide'),
            'boxed' => $this->request->getPost('boxed'),
            'posted_by' => $this->request->getPost('posted_by'),
            'address' => $this->request->getPost('address'),
            'our_clinic' => $this->request->getPost('our_clinic'),
            'testimonial' => $this->request->getPost('testimonial'),
            'laboratory' => $this->request->getPost('laboratory'),
            'monday' => $this->request->getPost('monday'),
            'tuesday' => $this->request->getPost('tuesday'),
            'wednesday' => $this->request->getPost('wednesday'),
            'thursday' => $this->request->getPost('thursday'),
            'friday' => $this->request->getPost('friday'),
            'saturday' => $this->request->getPost('saturday'),
            'sunday' => $this->request->getPost('sunday'),
            'phone' => $this->request->getPost('phone'),
            'email' => $this->request->getPost('email'),
            'did_you_know' => $this->request->getPost('did_you_know'),
            'all_department' => $this->request->getPost('all_department'),
            'select_department' => $this->request->getPost('select_department'),
            'first_name' => $this->request->getPost('first_name'),
            'last_name' => $this->request->getPost('last_name'),
            'date_of_birth' => $this->request->getPost('date_of_birth'),
            'code_number' => $this->request->getPost('code_number'),
            'phone_number' => $this->request->getPost('phone_number'),
            'reason_of_appointment' => $this->request->getPost('reason_of_appointment'),
            'general_info' => $this->request->getPost('general_info'),
            'service' => $this->request->getPost('service'),
            'doctor_list' => $this->request->getPost('doctor_list'),
            'speciality' => $this->request->getPost('speciality'),
            'degree' => $this->request->getPost('degree'),
            'training' => $this->request->getPost('training'),
            'office' => $this->request->getPost('office'),
            'work_day' => $this->request->getPost('work_day'),
            'status' => $this->request->getPost('status')
        ]);

        session()->setFlashdata('success', 'Success update data');
        return redirect()->to(base_url('extranet/config-menu'));
    }
}
