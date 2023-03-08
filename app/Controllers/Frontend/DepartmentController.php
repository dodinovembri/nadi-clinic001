<?php

namespace App\Controllers\Frontend;

class DepartmentController extends BaseController
{
    public function index()
    {
        // connect db
        $db = \Config\Database::connect();
        // client config
        $client_config = $db->table('clinic001_default_client_config');
        $client_config_data = $client_config->where("domain_live_url", base_url())->get()->getFirstRow();
        if ($client_config_data->is_production == 1) {
            $trial_access_name = $client_config_data->trial_access_name;
        }else{
            $uri = new \CodeIgniter\HTTP\URI(current_url());
            $trial_access_name = $uri->getSegment(2);
        }
        // config
        $config = $db->table("clinic001_" . $trial_access_name . "_config");
        $data['config']   = $config->get()->getFirstRow();
        // configuration menu
        $config_menu = $db->table("clinic001_" . $trial_access_name . "_config_menus");
        $data['config_menu'] = $config_menu->get()->getFirstRow();
        // department
        $department = $db->table("clinic001_" . $trial_access_name . "_departments");
        $data['departments'] = $department->get()->getResult();
        // footer feature
        $footer_feature = $db->table("clinic001_" . $trial_access_name . "_footer_features");
        $data['footer_features'] = $footer_feature->get()->getResult();
        // blog & blog categories
        $clinic001_blogs = "clinic001_" . $trial_access_name . "_blogs";
        $clinic001_blog_categories = "clinic001_" . $trial_access_name . "_blog_categories";        
        $data['blogs'] = $db->query("
            SELECT 
                $clinic001_blogs.*,
                $clinic001_blog_categories.name as category_name
            FROM $clinic001_blogs JOIN $clinic001_blog_categories
            ON $clinic001_blogs.blog_category_id = $clinic001_blog_categories.id
            WHERE $clinic001_blogs.status != 0
        ")->getResult();
        // tweets
        $tweet = $db->table("clinic001_" . $trial_access_name . "_tweets");
        $data['tweets'] = $tweet->get()->getResult();
        // first department
        $first_department = $department->get()->getFirstRow();                          
        $data['department'] = $first_department;    
        // department service
        $department_service = $db->table("clinic001_" . $trial_access_name . "_department_services");
        $data['department_services'] = $department_service->where('department_id', $first_department->id)->get()->getResult();
        // department doctor
        $department_doctor = $db->table("clinic001_" . $trial_access_name . "_teams");
        $data['department_doctors'] = $department_doctor->where('department_id', $first_department->id)->get()->getResult();
        // apppointment type
        $appointment = $db->table("clinic001_" . $trial_access_name . "_appointment_types");
        $data['appointment_types'] = $appointment->get()->getResult();                                                  

        return view('frontend/department/index', $data);
    }

    public function show($id)
    {
        // connect db
        $db = \Config\Database::connect();
        // client config
        $client_config = $db->table('clinic001_default_client_config');
        $client_config_data = $client_config->where("domain_live_url", base_url())->get()->getFirstRow();
        if ($client_config_data->is_production == 1) {
            $trial_access_name = $client_config_data->trial_access_name;
        }else{
            $uri = new \CodeIgniter\HTTP\URI(current_url());
            $trial_access_name = $uri->getSegment(2);
        }
        // config
        $config = $db->table("clinic001_" . $trial_access_name . "_config");
        $data['config']   = $config->get()->getFirstRow();
        // configuration menu
        $config_menu = $db->table("clinic001_" . $trial_access_name . "_config_menus");
        $data['config_menu'] = $config_menu->get()->getFirstRow();
        // department
        $department = $db->table("clinic001_" . $trial_access_name . "_departments");
        $data['departments'] = $department->get()->getResult();
        // footer feature
        $footer_feature = $db->table("clinic001_" . $trial_access_name . "_footer_features");
        $data['footer_features'] = $footer_feature->get()->getResult();
        // blog & blog categories
        $clinic001_blogs = "clinic001_" . $trial_access_name . "_blogs";
        $clinic001_blog_categories = "clinic001_" . $trial_access_name . "_blog_categories";        
        $data['blogs'] = $db->query("
            SELECT 
                $clinic001_blogs.*,
                $clinic001_blog_categories.name as category_name
            FROM $clinic001_blogs JOIN $clinic001_blog_categories
            ON $clinic001_blogs.blog_category_id = $clinic001_blog_categories.id
            WHERE $clinic001_blogs.status != 0
        ")->getResult();
        // tweets
        $tweet = $db->table("clinic001_" . $trial_access_name . "_tweets");
        $data['tweets'] = $tweet->get()->getResult();
        // current department
        $current_department = $department->where('id', $id)->get()->getFirstRow();                          
        $data['department'] = $current_department;   
        // department service
        $department_service = $db->table("clinic001_" . $trial_access_name . "_department_services");
        $data['department_services'] = $department_service->where('department_id', $current_department->id)->get()->getResult();
        // department doctor
        $department_doctor = $db->table("clinic001_" . $trial_access_name . "_teams");
        $data['department_doctors'] = $department_doctor->where('department_id', $current_department->id)->get()->getResult();
        // apppointment type
        $appointment = $db->table("clinic001_" . $trial_access_name . "_appointment_types");
        $data['appointment_types'] = $appointment->get()->getResult();                                               

        return view('frontend/department/index', $data);
    }
}
