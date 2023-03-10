<?php

namespace App\Models;

use CodeIgniter\Model;

class ConfigModel extends Model
{
    protected $table = 'clinic001_config';
    protected $primaryKey = 'id';
    protected $allowedFields = ['status', 'sort', 'created_at', 'modified_at', 'creator_id', 'modifier_id', 'logo', 'logo_text', 'title_opening_hours', 'title_monday_friday_opening_hours', 'monday_friday_opening_hours', 'title_saturday_opening_hours', 'saturday_opening_hours', 'title_sunday_opening_hours', 'sunday_opening_hours', 'name', 'short_description', 'address', 'copyright', 'title_motto', 'title_feature', 'title_benefit', 'title_medical_care', 'department_label', 'department_general_info_text', 'department_service_text', 'department_doctor_text', 'department_timetable_text', 'url_map', 'latitude', 'longitude', 'make_appointment_title', 'make_appointment_description', 'online_appointment_title', 'our_clinic_text', 'title_laboratory', 'title_testimonial', 'favicon', 'latest_news_label'];
}
