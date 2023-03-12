<?php

namespace App\Models;

use CodeIgniter\Model;

class ConfigMenuModel extends Model
{
    protected $table = 'clinic001_config_menu';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'created_at', 'modified_at', 'creator_id', 'modifier_id', 'client_id', 'home', 'blog', 'page', 'about', 'our_doctor', 'medical_care', 'department', 'timetable', 'gallery', 'contact', 'latest_news', 'make_an_appointment',  'latest_post', 'latest_tweet', 'our_motto', 'our_feature', 'why_choose_us', 'meet_the_team', 'category', 'most_commented', 'most_viewed', 'leave_a_reply', 'search_placeholder', 'photostream', 'archive', 'send', 'top', 'read_more', 'visit_link', 'reply', 'online_appointment_form', 'opening_hour', 'opening_hour_monday_to_friday', 'opening_hour_saturday', 'opening_hour_sunday', 'posted_in', 'show_all', 'detail', 'layout', 'wide', 'boxed', 'posted_by', 'address', 'our_clinic', 'testimonial', 'laboratory', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday', 'phone', 'email', 'did_you_know', 'all_department', 'select_department', 'first_name', 'last_name', 'date_of_birth', 'code_number', 'phone_number', 'reason_of_appointment', 'general_info', 'service', 'doctor_list', 'speciality', 'degree', 'training', 'office', 'work_day', 'signin'];
}
