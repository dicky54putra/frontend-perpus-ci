<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		if (!empty($_GET['q'])) {
			$q_semua_buku = $this->db->query("SELECT * FROM pp_buku WHERE judul_buku LIKE '%$_GET[q]%'")->result();
			// redirect(base_url("?q=$_GET[q]#semua-buku"));
		} else {
			$q_semua_buku = $this->db->get('pp_buku')->result();
		}
		$data = [
			'buku_favorit' => $this->db->get('pp_buku')->result(),
			'semua_buku' => $q_semua_buku,
			'data_anggota' => $this->db->get('pp_anggota')->result(),
		];
		$this->load->view('index', $data);
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
