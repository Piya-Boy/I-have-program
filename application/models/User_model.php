<?php

class User_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function login($user, $pass)
    {
        $query = $this->db->get_where('user', array('username' => $user, 'password' => md5($pass)));
        $data = $query->result();
        if ($data) {
            $var = array(
                'id' => $data[0]->id,
                'username' => $data[0]->username,
                'fname' => $data[0]->fname,
                'lname' => $data[0]->lname,
                'img' => $data[0]->img,
                'levers' => $data[0]->levers
            );
            $this->session->set_userdata($var);
            $this->session->set_flashdata('status', 'status');
            $this->session->set_flashdata('message', 'Welome' . ' ' . $_SESSION['fname'] . ' ' . $_SESSION['lname']);
            $this->session->set_flashdata('icon', 'success');
            redirect('admin');
        } else {
            $this->session->set_flashdata('status', 'status');
            $this->session->set_flashdata('message', 'Login is incomplete');
            $this->session->set_flashdata('icon', 'error');
            redirect('index');
        }
    }

    function fetch_work()
    {
        $work = 'ใช้งาน';
        $this->db->order_by('id', 'desc');
        $query = $this->db->get_where('download', array('id_type' => $work));
        return $query->result();
    }

    function fetch_game()
    {
        $game = 'เกมส์';
        $this->db->order_by('id', 'desc');
        $query = $this->db->get_where('download', array('id_type' => $game));
        return $query->result();
    }
    function download_details($id)
    {
        $query = $this->db->select('*')->from('download')->where('id', $id)->get();
        return $query->result();
    }

    function insert_ip($ip)
    {
        $address = array(
            'address' => $ip
        );
        $this->db->insert('counter', $address);
    }

    function count_ip()
    {
        $counting_ip = $this->db->count_all('counter');
        return $counting_ip;
    }

    function count_user()
    {
        $this->db->select('user');
        $this->db->from('user');
        $this->db->like('levers', 'user');
        return $this->db->count_all_results();
    }

    function sum_download()
    {
        $query = $this->db->select_sum('quantity')->from('download')->get();
        return  $query->result();
    }

    function quantity($id)
    {
        $query = $this->db->get_where('download', array('id' => $id));
        $result = $query->result_array();
        $row = $result[0]['quantity'];
        $count = 1;
        $sum = $row + $count;
        $var = array(
            'quantity' => $sum
        );

        $this->db->where('id', $id);
        $this->db->update('download', $var);
    }

    function fetch_all()
    {
        $query = $this->db->order_by('id', 'DESC')->get('download');
        return $query->result_array();
    }

    function fetch_type_name()
    {
        $query = $this->db->get('type_name');
        return $query->result_array();
    }

    function fetch_file_sizes()
    {
        $query = $this->db->get('file_size');
        return $query->result_array();
    }

    function fetch_file_types()
    {
        $query = $this->db->get('file_types');
        return $query->result_array();
    }

    function count_data()
    {
        $counting = $this->db->count_all('contacts');
        return $counting;
    }

    function contact_data($id)
    {
        $query = $this->db->get_where('contacts', array('id' => $id));
        return $query->row_array();
    }

    function admin_data($id)
    {
        $query = $this->db->get_where('user', array('id' => $id));
        return $query->row_array();
    }

    function count_download()
    {
        $list_download = $this->db->count_all('download');
        return $list_download;
    }

    function contact($data)
    {
        $name = $data['name'];
        $email = $data['email'];
        $message = $data['message'];
        $link = $data['link'];
        $var = array(
            'name' => $name,
            'e-mails' => $email,
            'messages' => $message,
            'link' => $link
        );

        $this->db->insert('contacts', $var);
        redirect('index');
    }

    function fetch_contact()
    {
        $query = $this->db->get('contacts');
        return $query->result_array();
    }

    function insert_download($data)
    {

        $file_name = $data['file_name'];
        $version = $data['version'];
        $url = $data['urls'];
        $password = $data['password'];
        $file_size = $data['file_size'] . ' ' . $data['sizes'];
        $type_name = $data['type_name'];
        $file_type = $data['file_type'];

        $config['upload_path'] = './asset/img/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['encrypt_name']  = TRUE;
        $this->upload->initialize($config);
        $this->upload->do_upload('img');
        $fullname = $this->upload->data();
        $file_img = $fullname['file_name'];
        $config2['image_library'] = 'gd2';
        $config2['source_image'] = './asset/img/' . $file_img;
        $config2['create_thumb'] = FALSE;
        $config2['maintain_ratio'] = FALSE;
        $config2['width']         = 800;
        $config2['height']       = 800;

        $this->image_lib->initialize($config2);

        if (!$this->image_lib->resize()) {
            echo $this->image_lib->display_errors();
        }

        $var = array(
            'file_name' => $file_name,
            'version' => $version,
            'url' => $url,
            'password' => $password,
            'file_size' => $file_size,
            'id_type' => $type_name,
            'file_type' => $file_type,
            'img' => $file_img
        );

        $query = $this->db->insert('download', $var);

        if ($query) {
            $this->session->set_flashdata('status', 'status');
            $this->session->set_flashdata('message', 'Insert is Successfully');
            $this->session->set_flashdata('icon', 'success');
            redirect('admin_dow_list');
        } else {
            $this->session->set_flashdata('status', 'status');
            $this->session->set_flashdata('message', 'Insert is not Success');
            $this->session->set_flashdata('icon', 'error');
            redirect('admin_dow_list');
        }
    }

    function update_download($data)
    {
        $id = $data['id'];
        $file_name = $data['file_name'];
        $version = $data['version'];
        $url = $data['urls'];
        $password = $data['password'];
        $file_size = $data['file_size'];
        $type_name = $data['type_name'];
        $file_type = $data['file_type'];
        $old_img = $data['old_img'];

        $config['upload_path'] = './asset/img/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['encrypt_name']  = TRUE;

        $this->upload->initialize($config);
        $this->upload->do_upload('new_img');
        $fullname = $this->upload->data();
        $file_img = $fullname['file_name'];
        $config2['image_library'] = 'gd2';
        $config2['source_image'] = './asset/img/' . $file_img;
        $config2['create_thumb'] = FALSE;
        $config2['maintain_ratio'] = FALSE;
        $config2['width']         = 800;
        $config2['height']       = 800;

        $this->image_lib->initialize($config2);

        if (!$this->image_lib->resize()) {
            echo $this->image_lib->display_errors();
        }

        if (!empty($file_img)) {
            $full_name = $file_img;
            unlink('./asset/img/' . $old_img);
        } else {
            $full_name = $old_img;
        }

        $var = array(
            'file_name' => $file_name,
            'version' => $version,
            'url' => $url,
            'password' => $password,
            'file_size' => $file_size,
            'id_type' => $type_name,
            'file_type' => $file_type,
            'img' => $full_name
        );

        $query = $this->db->where('id', $id)->update('download', $var);

        if ($query) {
            $this->session->set_flashdata('status', 'status');
            $this->session->set_flashdata('message', 'Update is Successfully');
            $this->session->set_flashdata('icon', 'success');
            redirect('admin_dow_list');
        } else {
            $this->session->set_flashdata('status', 'status');
            $this->session->set_flashdata('message', 'Update is not Success');
            $this->session->set_flashdata('icon', 'error');
            redirect('admin_dow_list');
        }
    }

    function up_profile($data)
    {
        $id = $data['id'];
        $fname = $data['fname'];
        $lname = $data['lname'];
        $username = $data['username'];
        $new_pass = $data['new_pass'];
        $old_pass  = $data['old_pass'];
        $old_profile = $data['old_profile'];

        $config['upload_path'] = './asset/img/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['encrypt_name']  = TRUE;
        $this->upload->initialize($config);
        $this->upload->do_upload('new_profile');
        $new_img = $this->upload->data('file_name');

        if (!empty($new_img)) {
            $full_name = $new_img;
            unlink('./asset/img/' . $old_profile);
        } else {
            $full_name = $old_profile;
        }

        if (!empty($new_pass)) {
            $password = md5($new_pass);
        } else {
            $password = $old_pass;
        }

        $var = array(
            'fname' => $fname,
            'lname' => $lname,
            'username' => $username,
            'password' => $password,
            'img' => $full_name
        );

        $query = $this->db->where('id', $id)->update('user', $var);

        if ($query) {
            $this->session->set_flashdata('status', 'status');
            $this->session->set_flashdata('message', 'Update is Successfully');
            $this->session->set_flashdata('icon', 'success');
            redirect('admin_profile?id='.$id);
        } else {
            $this->session->set_flashdata('status', 'status');
            $this->session->set_flashdata('message', 'Update is not Success');
            $this->session->set_flashdata('icon', 'error');
            redirect('admin_profile?id='.$id);
        }
    }

    function delete_download($id)
    {
        $row = $this->db->get_where('download', ['id' => $id])->row_array();
        $img = $row['img'];
        unlink('./asset/img/' . $img);
        $query = $this->db->where('id', $id)->delete('download');
        if ($query) {
            $this->session->set_flashdata('status', 'status');
            $this->session->set_flashdata('message', 'Delete is Successfully');
            $this->session->set_flashdata('icon', 'success');
            redirect('admin_dow_list');
        } else {
            $this->session->set_flashdata('status', 'status');
            $this->session->set_flashdata('message', 'Delete is not Success');
            $this->session->set_flashdata('icon', 'error');
            redirect('admin_dow_list');
        }
    }

    function add_file_sizes($data)
    {

        $result = $this->db->select('*')->where('file_sizes', $data['file_sizes'])->get('file_size');
        $num = $result->num_rows();
        if ($num == 1) {
            $this->session->set_flashdata('status', 'status');
            $this->session->set_flashdata('message', $data['file_sizes'] . ' ' . 'have information');
            $this->session->set_flashdata('icon', 'error');
            redirect('admin_types');
        } else {

            $file_sizes = $data['file_sizes'];

            $var = array(
                'file_sizes' => strtoupper($file_sizes)
            );

            $query = $this->db->insert('file_size', $var);

            if ($query) {
                $this->session->set_flashdata('status', 'status');
                $this->session->set_flashdata('message', 'Insert is Successfully');
                $this->session->set_flashdata('icon', 'success');
                redirect('admin_types');
            } else {
                $this->session->set_flashdata('status', 'status');
                $this->session->set_flashdata('message', 'Insert is not Success');
                $this->session->set_flashdata('icon', 'error');
                redirect('admin_types');
            }
        }
    }

    function add_file_types($data)
    {

        $result = $this->db->select('*')->where('file_type', '.' . $data['file_types'])->get('file_types');
        $num = $result->num_rows();
        if ($num == 1) {
            $this->session->set_flashdata('status', 'status');
            $this->session->set_flashdata('message', $data['file_sizes'] . ' ' . 'have information');
            $this->session->set_flashdata('icon', 'error');
            redirect('admin_types');
        } else {
            $file_types = '.' . $data['file_types'];

            $var = array(
                'file_type' => $file_types
            );

            $query = $this->db->insert('file_types', $var);

            if ($query) {
                $this->session->set_flashdata('status', 'status');
                $this->session->set_flashdata('message', 'Insert is Successfully');
                $this->session->set_flashdata('icon', 'success');
                redirect('admin_types');
            } else {
                $this->session->set_flashdata('status', 'status');
                $this->session->set_flashdata('message', 'Insert is not Success');
                $this->session->set_flashdata('icon', 'error');
                redirect('admin_types');
            }
        }
    }

    function add_types($data)
    {
        $result = $this->db->select('*')->where('types', $data['types'])->get('type_name');
        $num = $result->num_rows();
        if ($num == 1) {
            $this->session->set_flashdata('status', 'status');
            $this->session->set_flashdata('message', $data['file_sizes'] . ' ' . 'have information');
            $this->session->set_flashdata('icon', 'error');
            redirect('admin_types');
        } else {
            $types = $data['types'];

            $var = array(
                'types' => $types
            );

            $query = $this->db->insert('type_name', $var);

            if ($query) {
                $this->session->set_flashdata('status', 'status');
                $this->session->set_flashdata('message', 'Insert is Successfully');
                $this->session->set_flashdata('icon', 'success');
                redirect('admin_types');
            } else {
                $this->session->set_flashdata('status', 'status');
                $this->session->set_flashdata('message', 'Insert is not Success');
                $this->session->set_flashdata('icon', 'error');
                redirect('admin_types');
            }
        }
    }

    function up_file_sizes($data)
    {

        $id = $data['id'];
        $file_sizes = $data['file_sizes'];

        $var = array(
            'file_sizes' => $file_sizes
        );

        $query = $this->db->where('id', $id)->update('file_size', $var);

        if ($query) {
            $this->session->set_flashdata('status', 'status');
            $this->session->set_flashdata('message', 'Update is Successfully');
            $this->session->set_flashdata('icon', 'success');
            redirect('admin_types');
        } else {
            $this->session->set_flashdata('status', 'status');
            $this->session->set_flashdata('message', 'Update is not Success');
            $this->session->set_flashdata('icon', 'error');
            redirect('admin_types');
        }
    }

    function up_file_types($data)
    {

        $id = $data['id'];
        $file_types = $data['file_types'];

        $var = array(
            'file_type' => $file_types
        );

        $query = $this->db->where('id', $id)->update('file_types', $var);

        if ($query) {
            $this->session->set_flashdata('status', 'status');
            $this->session->set_flashdata('message', 'Update is Successfully');
            $this->session->set_flashdata('icon', 'success');
            redirect('admin_types');
        } else {
            $this->session->set_flashdata('status', 'status');
            $this->session->set_flashdata('message', 'Update is not Success');
            $this->session->set_flashdata('icon', 'error');
            redirect('admin_types');
        }
    }

    function up_types($data)
    {

        $id = $data['id'];
        $types = $data['types'];

        $var = array(
            'types' => $types
        );

        $query = $this->db->where('id', $id)->update('type_name', $var);

        if ($query) {
            $this->session->set_flashdata('status', 'status');
            $this->session->set_flashdata('message', 'Update is Successfully');
            $this->session->set_flashdata('icon', 'success');
            redirect('admin_types');
        } else {
            $this->session->set_flashdata('status', 'status');
            $this->session->set_flashdata('message', 'Update is not Success');
            $this->session->set_flashdata('icon', 'error');
            redirect('admin_types');
        }
    }

    function delete_file_sizes($id)
    {

        $query = $this->db->where('id', $id)->delete('file_size');
        if ($query) {
            $this->session->set_flashdata('status', 'status');
            $this->session->set_flashdata('message', 'Delete is Successfully');
            $this->session->set_flashdata('icon', 'success');
            redirect('admin_types');
        } else {
            $this->session->set_flashdata('status', 'status');
            $this->session->set_flashdata('message', 'Delete is not Success');
            $this->session->set_flashdata('icon', 'error');
            redirect('admin_types');
        }
    }

    function delete_file_types($id)
    {

        $query = $this->db->where('id', $id)->delete('file_types');
        if ($query) {
            $this->session->set_flashdata('status', 'status');
            $this->session->set_flashdata('message', 'Delete is Successfully');
            $this->session->set_flashdata('icon', 'success');
            redirect('admin_types');
        } else {
            $this->session->set_flashdata('status', 'status');
            $this->session->set_flashdata('message', 'Delete is not Success');
            $this->session->set_flashdata('icon', 'error');
            redirect('admin_types');
        }
    }

    function delete_types($id)
    {

        $query = $this->db->where('id', $id)->delete('type_name');
        if ($query) {
            $this->session->set_flashdata('status', 'status');
            $this->session->set_flashdata('message', 'Delete is Successfully');
            $this->session->set_flashdata('icon', 'success');
            redirect('admin_types');
        } else {
            $this->session->set_flashdata('status', 'status');
            $this->session->set_flashdata('message', 'Delete is not Success');
            $this->session->set_flashdata('icon', 'error');
            redirect('admin_types');
        }
    }

    function search_data($query) {
        $this->db->like('file_name', $query);
        $query = $this->db->get('download');
        if ($query->num_rows() > 0) {
            foreach($query->result_array() as $row){
                $output[] =  $row['file_name'];
            }
            echo json_encode($output);
        }
    }
    
    function searching($search) {
       $query = $this->db->like('file_name', $search)->get('download');
       return $query->result();
    }
    
}
