<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ControllerHasil extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('HasilModel');
        $this->load->library('form_validation');
        $this->load->library('Datatables');
        $this->load->helper(array('form', 'url', 'download', 'file'));
        if (empty($this->session->session_login['username'])) {
            $this->session->set_flashdata("pesan", "Anda harus login terlebih dahulu.");
            redirect(site_url("controllerLogin"));
        }
    }

    public function index()
    {
        // print_r($this->session->userdata());die;
        $nisn = NULL;
        $data = [
            'allSiswa'  => $this->HasilModel->allSiswa(),
            'nilaiS'    => $this->HasilModel->get_proses_hitung($nisn)

        ];
        $this->load->view('header');
        $this->load->view('hasil/listHasil', $data);
        $this->load->view('footer');
    }

    public function prosesHitung()
    {
        $nisn = $this->input->post("nisn");
        $bhs_indo = $this->input->post("bhs_indo");
        $ipa = $this->input->post("ipa");
        $ips = $this->input->post("ips");
        $penghasilan = $this->input->post("penghasilan");
        $c5_value = $this->input->post("c5");
        $bobot_c5 = $this->input->post("c5_bobot");

        // Mendapatkan alternatif berdasarkan nilai dropdown c5
        $alternatif = [];

        if ($c5_value === "Agribisnis Perikanan Air Tawar") {
            $alternatif = ['BIMB', 'EKON', 'PGSD', 'PGM', 'HUKUM', 'PBIO'];
            $bobot_c5 = 3;
        } elseif ($c5_value === "Agribisnis Tanaman Pangan dan Hortikultura") {
            $alternatif = ['AGTK', 'BIMB', 'EKON', 'PGSD', 'PGM', 'HUKUM', 'PBIO'];
            // Menggunakan bobot Agroteknologi jika ada di dalam daftar alternatif_bobot
            $bobot_c5 = 5;
        } elseif ($c5_value === "Agribisnis Tanaman Perkebunan") {
            $alternatif = ['AGTK', 'BIMB', 'EKON', 'PGSD', 'PGM', 'HUKUM'];
            $bobot_c5 = 5; // Atau sesuai dengan kebutuhan Anda
        } elseif ($c5_value === "Akuntansi") {
            $alternatif = ['ADNA', 'AP', 'BIMB', 'EKON', 'PGSD', 'PGM', 'HUKUM'];
            $bobot_c5 = 3; // Atau sesuai dengan kebutuhan Anda
        } elseif ($c5_value === "Bahasa") {
            $alternatif = ['PBING', 'BIMB', 'EKON', 'PGSD', 'PGM', 'HUKUM', 'PAI', 'COMM'];
            $bobot_c5 = 4; // Atau sesuai dengan kebutuhan Anda
        } elseif ($c5_value === "Bisnis Digital") {
            $alternatif = ['BISDIG', 'ADNA', 'BIMB', 'EKON', 'PGSD', 'PGM', 'HUKUM'];
            $bobot_c5 = 5; // Atau sesuai dengan kebutuhan Anda
        } elseif ($c5_value === "Desain Komunikasi Visual") {
            $alternatif = ['SISFO', 'BISDIG', 'BIMB', 'EKON', 'PGSD', 'PGM', 'HUKUM', 'PBING'];
            $bobot_c5 = 3; // Atau sesuai dengan kebutuhan Anda
        } elseif ($c5_value === "Geologi Pertambangan") {
            $alternatif = ['PBING', 'BIMB', 'EKON', 'PGSD', 'KEHUT', 'PGM', 'HUKUM', 'TL', 'PBIO'];
            $bobot_c5 = 3; // Atau sesuai dengan kebutuhan Anda
        } elseif ($c5_value === "IPA") {
            $alternatif = ['ILKOM', 'BIMB', 'EKON', 'PGSD', 'PGM', 'HUKUM', 'PBIO', 'FAR', 'AK'];
            $bobot_c5 = 5; // Atau sesuai dengan kebutuhan Anda
        } elseif ($c5_value === "IPS") {
            $alternatif = ['AGTK', 'BIMB', 'EKON', 'PGSD', 'PGM', 'HUKUM'];
            $bobot_c5 = 5; // Atau sesuai dengan kebutuhan Anda
        } elseif ($c5_value === "Keperawatan Hewan") {
            $alternatif = ['BIMB', 'EKON', 'PGSD', 'PGM', 'HUKUM', 'PAI'];
            $bobot_c5 = 3; // Atau sesuai dengan kebutuhan Anda
        } elseif ($c5_value === "Manajemen Perkantoran") {
            $alternatif = ['BISDIG', 'ADNA', 'BIMB', 'EKON', 'PGSD', 'PGM', 'HUKUM', 'PBING'];
            $bobot_c5 = 3; // Atau sesuai dengan kebutuhan Anda
        } elseif ($c5_value === "Multimedia") {
            $alternatif = ['ILKOM', 'BISDIG', 'BIMB', 'EKON', 'PGSD', 'PGM', 'HUKUM', 'PTI'];
            $bobot_c5 = 4; // Atau sesuai dengan kebutuhan Anda
        } elseif ($c5_value === "Pengembangan Perangkat Lunak dan GIM") {
            $alternatif = ['ILKOM', 'SISFO', 'BIMB', 'EKON', 'PGSD', 'PGM', 'HUKUM', 'PTI'];
            $bobot_c5 = 5; // Atau sesuai dengan kebutuhan Anda
        } elseif ($c5_value === "Perhotelan") {
            $alternatif = ['ADNA', 'AP', 'BIMB', 'EKON', 'PGSD', 'PGM', 'HUKUM'];
            $bobot_c5 = 2; // Atau sesuai dengan kebutuhan Anda
        } elseif ($c5_value === "Teknik Elektronika") {
            $alternatif = ['ILKOM', 'BIMB', 'EKON', 'PGSD', 'KEHUT', 'PGM', 'HUKUM', 'TS', 'TL'];
            $bobot_c5 = 4; // Atau sesuai dengan kebutuhan Anda
        } elseif ($c5_value === "Teknik Ketenagalistrikan") {
            $alternatif = ['AGTK', 'PBIO', 'BIMB', 'EKON', 'PGSD', 'KEHUT', 'PGM', 'HUKUM', 'TS', 'TL'];
            $bobot_c5 = 3; // Atau sesuai dengan kebutuhan Anda
        } elseif ($c5_value === "Teknik Komputer dan Jaringan") {
            $alternatif = ['ILKOM', 'BISDIG', 'BIMB', 'EKON', 'PGSD', 'PGM', 'HUKUM', 'PTI'];
            $bobot_c5 = 5; // Atau sesuai dengan kebutuhan Anda
        } elseif ($c5_value === "Teknik Konstruksi dan Perumahan") {
            $alternatif = ['BIMB', 'EKON', 'PGSD', 'KEHUT', 'PGM', 'HUKUM', 'TS', 'TL'];
            $bobot_c5 = 3; // Atau sesuai dengan kebutuhan Anda
        } elseif ($c5_value === "Teknik Mesin") {
            $alternatif = ['BIMB', 'EKON', 'PGSD', 'KEHUT', 'PGM', 'HUKUM', 'TS'];
            $bobot_c5 = 3; // Atau sesuai dengan kebutuhan Anda
        } elseif ($c5_value === "Teknologi Farmasi") {
            $alternatif = ['PBING', 'BIMB', 'EKON', 'PGSD', 'AGTK', 'PGM', 'HUKUM', 'FAR', 'AK'];
            $bobot_c5 = 5; // Atau sesuai dengan kebutuhan Anda
        } elseif ($c5_value === "Teknologi Laboratorium Medik") {
            $alternatif = ['AGTK', 'PBIO', 'BIMB', 'EKON', 'PGSD', 'PGM', 'HUKUM', 'PAI', 'FAR', 'AK'];
            $bobot_c5 = 5; // Atau sesuai dengan kebutuhan Anda
        } elseif ($c5_value === "Lain-lain") {
            $alternatif = ['PBING', 'PBIO', 'BISDIG', 'AP', 'SISFO', 'TS', 'TL', 'ILKOM', 'HUKUM', 'PGM', 'PAI', 'KEHUT', 'AGTK', 'PTI', 'PGSD', 'EKON', 'BIMB', 'COMM', 'ADNA'];
            $bobot_c5 = 2; // Atau sesuai dengan kebutuhan Anda
        }

        // normalisasi Nilai kriteria
        $nilai_normalisasi_bhs_indo = $bhs_indo / 100;
        $nilai_normalisasi_ipa = $ipa / 100;
        $nilai_normalisasi_ips = $ips / 100;
        $nilai_normalisasi_penghasilan = $penghasilan / 6000000;
        $nilai_normalisasi_bobot_c5 = $bobot_c5 / 5;

        $allSubKriteria = $this->db->get("sub_kriteria")->result();
        $rekomendasi_jurusan = [];

        foreach ($allSubKriteria as $value) {
            $this->db->select('sub_kriteria.*, jurusan.jurusan');
            $this->db->from('sub_kriteria');
            $this->db->join('jurusan', 'sub_kriteria.kode_jurusan = jurusan.kode_jurusan');
            $this->db->where('sub_kriteria.kode_jurusan', $value->kode_jurusan);

            // Jalankan kueri dan ambil hasilnya
            $result = $this->db->get()->row();
            // Cek apakah jurusan tersebut termasuk dalam alternatif yang dihitung
            if (in_array($value->kode_jurusan, $alternatif)) {
                $w1 = round($value->c1 / ($value->c1 + $value->c2 + $value->c3 + $value->c4 + $value->c5 + $value->c5), 2);
                $w2 = round($value->c2 / ($value->c1 + $value->c2 + $value->c3 + $value->c4 + $value->c5 + $value->c5), 2);
                $w3 = round($value->c3 / ($value->c1 + $value->c2 + $value->c3 + $value->c4 + $value->c5 + $value->c5), 2);
                $w4 = round($value->c4 / ($value->c1 + $value->c2 + $value->c3 + $value->c4 + $value->c5 + $value->c5), 2);
                $w5 = round($value->c5 / ($value->c1 + $value->c2 + $value->c3 + $value->c4 + $value->c5 + $value->c5), 2);

                $nilai_s = round((pow($nilai_normalisasi_bhs_indo, $w1) * pow($nilai_normalisasi_ipa, $w2) * pow($nilai_normalisasi_ips, $w3) * pow($nilai_normalisasi_penghasilan, $w4) * pow($nilai_normalisasi_bobot_c5, $w5)), 3);

                $rekomendasi_jurusan[] = [
                    'nisn' => $nisn,
                    'kode_jurusan' => $value->kode_jurusan,
                    'jurusan' => $result->jurusan,
                    's' => $nilai_s,
                    'alternatif' => $alternatif
                ];
            }
        }

        // Sorting array berdasarkan nilai S (dari tertinggi ke terendah)
        usort($rekomendasi_jurusan, function ($a, $b) {
            return $b['s'] <=> $a['s'];
        });

        $data = [
            'rekomendasi_jurusan' => $rekomendasi_jurusan,
            'allSiswa'  => $this->HasilModel->allSiswa(),
            'nilaiS'    => $this->HasilModel->get_proses_hitung($nisn),
            'nisn'      => $nisn,
        ];

        // Tampilkan rekomendasi
        $this->load->view('header');
        $this->load->view('hasil/listHasil', $data);
        $this->load->view('footer');
    }



    public function sesi_hitung_v()
    {
        $data_session = [
            'nilai_v'          => 'ada',
        ];
        $this->session->set_userdata("nilaiV", $data_session);
        redirect(site_url('ControllerHasil'));
    }

    public function hitung_nilai_v()
    {
        $nisn       = $this->input->post("nisn");

        $data_hitung = $this->HasilModel->get_proses_hitung($nisn);
        // print_r($data_hitung);die;
        foreach ($data_hitung as $value) {
            $get_total_s = $this->db->query("SELECT SUM(s) AS total_s, kode_jurusan FROM proses_hitung GROUP BY kode_jurusan")->result();

            foreach ($get_total_s as $nilai) {
                $data_v = [
                    'v' => round(($value->s / $nilai->total_s), 9)
                ];

                $this->db->where("nisn", $value->nisn);
                $this->db->where("kode_jurusan", $value->kode_jurusan);
                $this->db->update("proses_hitung", $data_v);
            }
        }

        $data_session = [
            'nisn'          => $nisn,
        ];
        $this->session->set_userdata("data_siswa", $data_session);
        redirect(site_url('ControllerHasil'));
    }

    public function simpanHitung()
    {
        $nisn = $this->input->post("nisn_hasil");
        $rekomendasi_jurusan = $this->input->post("jurusan");

        $data = [
            'nisn'                => $nisn,
            'rekomendasi_jurusan' => $rekomendasi_jurusan,
            'tanggal'             => date('Y-m-d H:i:s')
        ];

        $cek_nisn = $this->db->get_where("hasil", ["nisn" => $nisn])->row();
        if ($cek_nisn) {
            $this->db->where("nisn", $nisn);
            $this->db->update("hasil", $data);
        } else {
            $this->db->insert("hasil", $data);
        }

        if ($cek_nisn) {
            // Penyimpanan berhasil
            $this->session->set_flashdata('success', 'Data berhasil disimpan.');
        } else {
            // Penyimpanan gagal
            $this->session->set_flashdata('error', 'Gagal menyimpan data. Silakan coba lagi.');
        }

        redirect(site_url('ControllerHasil'));
    }

    public function clearCache()
    {
        $this->load->driver('cache');
        $this->cache->clean();

        echo 'Cache cleared successfully!';
    }
}
