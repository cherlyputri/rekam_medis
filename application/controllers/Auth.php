<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library("form_validation");
    }
    public function index()
    {
        $this->form_validation->set_rules(
            "username",
            "Username",
            "trim|required"
        );
        $this->form_validation->set_rules(
            "password",
            "Password",
            "trim|required"
        );
        if ($this->form_validation->run() == false) {
            // jika validasi gagal, redirect ke form login untuk melengkapi syarat input
            $data["title"] = "Halaman Login Dokter";
            $this->load->view("templates/auth_header", $data);
            $this->load->view("auth/login");
            $this->load->view("templates/auth_footer");
        } else {
            //validasi lolos
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post("username");
        $password = $this->input->post("password");

        //row array 1 baris
        //cari username yang sama
        $dokter = $this->db->get_where("dokter", ["username" => $username])
            ->row_array(); //ambil satu baris
        if ($dokter) {
            //user ada

            if ($dokter["aktif"] == 1) {
                //cek password
                if (password_verify($password, $dokter["password"])) {
                    $data_session = [
                        "username" => $username,
                        "status" => "dokter",
                    ];
                    $this->session->set_userdata($data_session);
                    redirect(base_url("dokter"));
                } else {
                    $this->session->set_flashdata(
                        "message",
                        '<div class="alert alert-danger" role="alert">Password anda salah!</div>'
                    );
                    redirect("auth");
                }
            } else {
                $this->session->set_flashdata(
                    "message",
                    '<div class="alert alert-danger" role="alert">
					Username tidak aktif !
				</div>'
                );
                redirect("auth");
            }
        } else {
            $this->session->set_flashdata(
                "message",
                '<div class="alert alert-danger" role="alert">Username anda tidak terdaftar!</div>'
            );
            redirect("auth");
        }
    }

    public function logout()
    {
        $this->session->unset_userdata("username");
        $this->session->unset_userdata("status");
        $this->session->set_flashdata(
            "message",
            '<div class="alert alert-success" role="alert">Anda telah keluar</div>'
        );
        redirect("auth");
    }

    //login admin biasa

    public function login_admin()
    {
        $this->form_validation->set_rules(
            "username",
            "Username",
            "trim|required"
        );
        $this->form_validation->set_rules(
            "password",
            "Password",
            "trim|required"
        );
        if ($this->form_validation->run() == false) {
            $data["title"] = "Halaman Login Admin";
            $this->load->view("templates/auth_header", $data);
            $this->load->view("auth/login_admin");
            $this->load->view("templates/auth_footer");
        } else {
            $this->_loginadmin();
        }
    }

    private function _loginadmin()
    {
        $username = $this->input->post("username");
        $password = $this->input->post("password");

        $admin = $this->db
            ->get_where("admin", ["username" => $username])
            ->row_array();
        //user ada
        if ($admin) {
            if ($admin["aktif"] == 1) {
                //cek password
                if (password_verify($password, $admin["password"])) {
                    $data_session = [
                        "username" => $username,
                        "status" => "admin",
                    ];
                    $this->session->set_userdata($data_session);
                    redirect(base_url("mimin"));
                } else {
                    $this->session->set_flashdata(
                        "message",
                        '<div class="alert alert-danger" role="alert">Password anda salah!</div>'
                    );
                    redirect("auth/login_admin");
                }
            } else {
                $this->session->set_flashdata(
                    "message",
                    '<div class="alert alert-danger" role="alert">
                Username tidak aktif !
              </div>'
                );
                redirect("auth/login_admin");
            }
        } else {
            $this->session->set_flashdata(
                "message",
                '<div class="alert alert-danger" role="alert">Username anda tidak terdaftar!</div>'
            );
            redirect("auth/login_admin");
        }
    }

    public function logout_admin()
    {
        $this->session->unset_userdata("username");
        $this->session->unset_userdata("status");
        $this->session->set_flashdata(
            "message",
            '<div class="alert alert-success" role="alert">Anda telah keluar</div>'
        );
        redirect("auth");
    }

    //login apoteker

    public function login_apoteker()
    {
        $this->form_validation->set_rules(
            "username",
            "Username",
            "trim|required"
        );
        $this->form_validation->set_rules(
            "password",
            "Password",
            "trim|required"
        );
        if ($this->form_validation->run() == false) {
            $data["title"] = "Halaman Login Apoteker";
            $this->load->view("templates/auth_header", $data);
            $this->load->view("auth/login_apoteker");
            $this->load->view("templates/auth_footer");
        } else {
            $this->_loginapoteker();
        }
    }

    private function _loginapoteker()
    {
        $username = $this->input->post("username");
        $password = $this->input->post("password");

        $petugas_obat = $this->db
            ->get_where("petugas_obat", ["username" => $username])
            ->row_array();
        //user ada
        if ($petugas_obat) {
            if ($petugas_obat["aktif"] == 1) {
                //cek password
                if (password_verify($password, $petugas_obat["password"])) {
                    $data_session = [
                        "username" => $username,
                        "status" => "apoteker",
                    ];
                    $this->session->set_userdata($data_session);
                    redirect(base_url("apoteker"));
                } else {
                    $this->session->set_flashdata(
                        "message",
                        '<div class="alert alert-danger" role="alert">Password anda salah!</div>'
                    );
                    redirect("auth/login_apoteker");
                }
            } else {
                $this->session->set_flashdata(
                    "message",
                    '<div class="alert alert-danger" role="alert">
                Username tidak aktif !
              </div>'
                );
                redirect("auth/login_apoteker");
            }
        } else {
            $this->session->set_flashdata(
                "message",
                '<div class="alert alert-danger" role="alert">Username anda tidak terdaftar!</div>'
            );
            redirect("auth/login_apoteker");
        }
    }

    public function logout_apoteker()
    {
        $this->session->unset_userdata("username");
        $this->session->unset_userdata("status");
        $this->session->set_flashdata(
            "message",
            '<div class="alert alert-success" role="alert">Anda telah keluar</div>'
        );
        redirect("auth");
    }

    public function login_perawat()
    {
        $this->form_validation->set_rules(
            "username",
            "Username",
            "trim|required"
        );
        $this->form_validation->set_rules(
            "password",
            "Password",
            "trim|required"
        );
        if ($this->form_validation->run() == false) {
            $data["title"] = "Halaman Login Perawat";
            $this->load->view("templates/auth_header", $data);
            $this->load->view("auth/login_perawat");
            $this->load->view("templates/auth_footer");
        } else {
            $this->_loginperawat();
        }
    }

    private function _loginperawat()
    {
        $username = $this->input->post("username");
        $password = $this->input->post("password");

        $perawat = $this->db
            ->get_where("perawat", ["username" => $username])
            ->row_array();
        //user ada
        if ($perawat) {
            if ($perawat["aktif"] == 1) {
                //cek password
                if (password_verify($password, $perawat["password"])) {
                    $data_session = [
                        "username" => $username,
                        "status" => "perawat",
                    ];
                    $this->session->set_userdata($data_session);
                    redirect(base_url("perawat"));
                } else {
                    $this->session->set_flashdata(
                        "message",
                        '<div class="alert alert-danger" role="alert">Password anda salah!</div>'
                    );
                    redirect("auth/login_perawat");
                }
            } else {
                $this->session->set_flashdata(
                    "message",
                    '<div class="alert alert-danger" role="alert">
                Username tidak aktif !
              </div>'
                );
                redirect("auth/login_perawat");
            }
        } else {
            $this->session->set_flashdata(
                "message",
                '<div class="alert alert-danger" role="alert">Username anda tidak terdaftar!</div>'
            );
            redirect("auth/login_perawat");
        }
    }

    public function logout_perawat()
    {
        $this->session->unset_userdata("username");
        $this->session->unset_userdata("status");
        $this->session->set_flashdata(
            "message",
            '<div class="alert alert-success" role="alert">Anda telah keluar</div>'
        );
        redirect("auth");
    }
}
