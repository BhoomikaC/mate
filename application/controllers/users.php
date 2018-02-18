<?php 

    class Users extends CI_Controller{
        
        
        public function login(){
            //Auto loading user_model in config/autoload.php
            //$this->load->model('user_model');
            //echo $this->input->post('username');

            $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');

            if($this->form_validation->run() == FALSE){
                $data = array(
                    'errors' => validation_errors() 
                );
                $this->session->set_flashdata($data);
                redirect('home');
            }else{

                $username = $this->input->post('username');
                $password = $this->input->post('password');

                $user_id = $this->user_model->login_user($username, $password);

                if($user_id){
                    $user_data = array(
                        'user_id' => $user_id,
                        'username' => $username,
                        'logged_in' => true
                    );

                    $this->session->set_userdata($user_data);
                    $this->session->set_flashdata('login_success', 'Login Success');

                    //$data['main_view'] = 'users/videos_gallery_view';
                    //$this->load->view('layouts/main_layout', $data);
                    redirect('home/gallery_view');
                    
                }else{
                   
                    $this->session->set_flashdata("login_failed", 'Login Failed');
                    redirect('home');
                }
            }

           
        } // End login()
    

        // Logout Function
        public function logout()
        {
            # code...
            $this->session->sess_destroy();
            redirect('home');

        }

        private function student_registration()
        {
            # code...
            $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
            $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[3]');
            $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|min_length[3]');
            $this->form_validation->set_rules('father_name', "Father's Name", 'trim|required|min_length[3]');

            $this->form_validation->set_rules('dob', 'Date of Birth', 'trim|required');
            $this->form_validation->set_rules('gender', 'Gender', 'trim|required');
            $this->form_validation->set_rules('phone_number', 'Phone Number', 'trim|required|min_length[10]|max_length[10]');
            
            
            $this->form_validation->set_rules('email_id', 'Email Id', 'trim|required|min_length[3]');
            $this->form_validation->set_rules('school_addr', 'School Address', 'trim|required|min_length[3]');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
            $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[3]|matches[password]');


            if($this->form_validation->run() == FALSE){
                $error_data = array(
                    'registration_errors' => validation_errors()
                );
                $this->session->set_flashdata($error_data);
                // $data['main_view'] = 'users/register_view';
                // $this->load->view('layouts/main_layout', $data);
                redirect('home');
                
            }else{
                
                $user_data = array(
                    'registration_form'=> $this->input->post('registration-form'),
                    'username' => $this->input->post('username'),
                    'password'=> $this->input->post('password'),
                    'first_name' => $this->input->post('first_name'),
                    'last_name' => $this->input->post('last_name'),
                    'email_id' => $this->input->post('email_id'),
                    'father_name' => $this->input->post('father_name'),
                    'dob' => $this->input->post('dob'),
                    'gender' => $this->input->post('gender'),
                    'phone_number' => $this->input->post('phone_number'),
                    'school_addr' => $this->input->post('school_addr')
                );
               
                if($this->user_model->create_user($user_data)){
                    $this->session->set_flashdata('registration_success', 'You have been registered successfully! Please Login');
                    redirect('home');
                }else{
                    $this->session->set_flashdata('registration_failed', 'Your registration failed. Please try again!');
                    redirect('home');
                }
                
            }
        }

        private function school_registration()
        {
            # code...
            $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
            $this->form_validation->set_rules('contact_person', 'Contact Person', 'trim|required|min_length[3]');
            $this->form_validation->set_rules('contact_number', 'Contact Number', 'trim|required|min_length[10]|max_length[10]');

            $this->form_validation->set_rules('email_id', 'Email Id', 'trim|required|min_length[3]');
            $this->form_validation->set_rules('school_addr', 'School Address', 'trim|required|min_length[3]');


            $this->form_validation->set_rules('school_strength', 'Strength of School', 'trim|required|min_length[3]');
            $this->form_validation->set_rules('school_website', "School Website", 'trim');
            
            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
            $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[3]|matches[password]');


            if($this->form_validation->run() == FALSE){
                $error_data = array(
                    'registration_errors' => validation_errors()
                );
                $this->session->set_flashdata($error_data);
                // $data['main_view'] = 'users/register_view';
                // $this->load->view('layouts/main_layout', $data);
                redirect('home');
                
            }else{
                
                $user_data = array(
                    'registration_form'=> $this->input->post('registration-form'),
                    'username' => $this->input->post('username'),
                    'password'=> $this->input->post('password'),
                    'contact_person' => $this->input->post('contact_person'),
                    'contact_number' => $this->input->post('contact_number'),
                    'email_id' => $this->input->post('email_id'),
                    'school_addr' => $this->input->post('school_addr'),
                    'school_strength' => $this->input->post('school_strength'),
                    'school_website' => $this->input->post('school_website')
                );
               
                if($this->user_model->create_user($user_data)){
                    $this->session->set_flashdata('registration_success', 'Your school has been registered successfully! Please Login');
                    redirect('home');
                }else{
                    $this->session->set_flashdata('registration_failed', 'Your school couldn\'t be registered. Please try again!');
                    redirect('home');
                }
                
            }
        }


        // Registration Function
        public function register()
        {
            # code...
            $form_type = $this->input->post('registration-form');
            if($form_type == 'student'){
                $this->student_registration();
            } else if($form_type == 'school'){
                $this->school_registration();
            }
            
        }
    }
?>