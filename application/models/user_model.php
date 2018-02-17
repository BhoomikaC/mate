<?php 


    class User_model extends CI_Model{
        
        private function get_users()
        {
            $user_results = $this->db->get('students');
            //return $user_results->result();
            return $user_results;
        }
        
        public function login_user($username, $password)
        {
           $this->db->where('username', $username);

           $results = $this->user_model->get_users();
           $row = $results->row();
           if(isset($row)){
                $db_pwd = $results->row(10)->password;
           }else{
               $db_pwd = '';
           }

           if(password_verify($password, $db_pwd)){
                return $results->row(0)->student_id;
           }else{
               return false;
           }
        }

        public function create_user($user_data)
        {
            # code...
            //Password Encryption
            $options = ['cost'=>12];
            $encrypted_pwd = password_hash($user_data['password'], PASSWORD_BCRYPT, $options);
            $user_data['password'] = $encrypted_pwd;

            $inserted_data = $this->db->insert('students', $user_data);
            return $inserted_data;

        }

    }

?>