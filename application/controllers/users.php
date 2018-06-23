<?php 

    class Users extends CI_Controller{
        
        
        public function login(){
            
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

                    redirect('home/gallery_view');
                    
                }else{
                   
                    $this->session->set_flashdata("login_failed", 'Login Failed');
                    redirect('home');
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
                $user_data = array(
                    'registration_form'=> $this->input->post('registration-form'),
                    'username' => $this->input->post('username'),
                    'password'=> $this->input->post('pass_confirmation'),
                    'first_name' => $this->input->post('first_name'),
                    'last_name' => $this->input->post('last_name'),
                    'email_id' => $this->input->post('email_id'),
                    'father_name' => $this->input->post('father_name'),
                    'dob' => $this->input->post('dob'),
                    'gender' => $this->input->post('gender'),
                    'phone_number' => $this->input->post('phone_number'),
                    'school_addr' => $this->input->post('school_addr')
                );
                
                $login_data = array(
                    'username' => $this->input->post('username'),
                    'contact_number' => $this->input->post('phone_number'),
                    'password' => $this->input->post('pass_confirmation'),
                    'user_type' => $this->input->post('registration-form')
                );
                
                if($this->user_model->create_user($user_data, $login_data)){
                    $this->session->set_flashdata('registration_success', 'You have been registered successfully! Please Login');
                    redirect('home');
                }else{
                    $this->session->set_flashdata('registration_failed', 'Your registration failed. Please try again!');
                    redirect('home');
                }
        }

        private function school_registration()
        {      
                $user_data = array(
                    'registration_form'=> $this->input->post('registration-form'),
                    'username' => $this->input->post('username'),
                    'password'=> $this->input->post('pass_confirmation'),
                    'contact_person' => $this->input->post('contact_person'),
                    'contact_number' => $this->input->post('contact_number'),
                    'email_id' => $this->input->post('email_id'),
                    'school_addr' => $this->input->post('school_addr'),
                    'school_strength' => $this->input->post('school_strength'),
                    'school_website' => $this->input->post('school_website')
                );
                
                $login_data = array(
                    'username' => $this->input->post('username'),
                    'contact_number' => $this->input->post('contact_number'),
                    'password' => $this->input->post('pass_confirmation'),
                    'user_type' => $this->input->post('registration-form')
                );
               
                if($this->user_model->create_user($user_data, $login_data)){
                    $this->session->set_flashdata('registration_success', 'Your school has been registered successfully! Please Login');
                    redirect('home');
                }else{
                    $this->session->set_flashdata('registration_failed', 'Your school couldn\'t be registered. Please try again!');
                    redirect('home');
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