<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		if (!empty($_GET['q'])) {
			$q_semua_buku = $this->db->query("SELECT * FROM pp_buku WHERE judul_buku LIKE '%$_GET[q]%'")->result();
		} else {
			$q_semua_buku = $this->db->get('pp_buku')->result();
		}
		$data = [
			'title' => 'Perpustakaan',
			'buku_favorit' => $this->db->query("SELECT pp_buku.*, COUNT(pp_buku.id_buku) as jumlah FROM `pp_peminjaman_detail` LEFT JOIN pp_buku_stok ON pp_buku_stok.id_buku_stok=pp_peminjaman_detail.id_buku_stok LEFT JOIN pp_buku ON pp_buku.id_buku=pp_buku_stok.id_buku ORDER BY jumlah DESC")->result(),
			'buku_terbaru' => $this->db->query("SELECT * FROM pp_buku ORDER BY id_buku DESC LIMIT 5")->result(),
			'semua_buku' => $q_semua_buku,
			'data_anggota' => $this->db->get('pp_anggota')->result(),
		];
		$this->load->view('layout/header', $data);
		$this->load->view('layout/navbar', $data);
		$this->load->view('index', $data);
		$this->load->view('layout/footer');
	}

	public function absen($param = null)
	{
		if ($param == 'anggota') {
			$anggota = $this->db->get_where('pp_anggota', ['id_anggota' => $_POST['id_anggota']])->row();
			$data = [
				'nama' => $anggota->nama_anggota,
				'no_hp' => $anggota->telepon_anggota,
				'id_anggota' => $anggota->id_anggota,
			];
		} else if ($param == 'umum') {
			$data = [
				'nama' => $_POST['nama'],
				'no_hp' => $_POST['no_hp'],
			];
		}

		$this->db->insert('pp_buku_tamu', $data);
		$this->session->set_flashdata('message', ' <div class="alert alert-warning alert-dismissible fade show" role="alert">
			<strong>Berhasil!</strong> Anda sudah berhasil mengisi data buku tamu.
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>');
		redirect('welcome/index');
	}
}
