<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('pdf');
		$this->load->model("M_surat_n1_n6");
		$this->load->helper('date');
	}
	public function add_sk_usaha()
	{
		$nama = $this->input->post('nama');
		$no_nik = $this->input->post('no_nik');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$agama = $this->input->post('agama');
		$pekerjaan = $this->input->post('pekerjaan');
		$rt = $this->input->post('rt');
		$rw = $this->input->post('rw');
		$kelurahan = $this->input->post('kelurahan');
		$kecamatan = $this->input->post('kecamatan');
		$kab_kota = $this->input->post('kab_kota');
		$alamat = $this->input->post('alamat');
		$nama_surat = "Surat Keterangan Usaha";
		$status_surat = "Pending";
		$today = mdate('%Y-%m-%d', now());


		$data = array(
			'nama' => $nama,
			'no_nik' => $no_nik,
			'jenis_kelamin' => $jenis_kelamin,
			'tempat_lahir' => $tempat_lahir,
			'tanggal_lahir' => $tanggal_lahir,
			'agama' => $agama,
			'pekerjaan' => $pekerjaan,
			'rt' => $rt,
			'rw' => $rw,
			'kelurahan' => $kelurahan,
			'kecamatan' => $kecamatan,
			'kab_kota' => $kab_kota,
			'alamat' => $alamat,
			'jenis_surat' => $nama_surat,
			'tgl_ajukan_surat' => $today,
			'status_surat' => $status_surat
		);

		$this->M_surat_n1_n6->save($data, 'sku');
		$this->session->set_flashdata('success', 'Berhasil disimpan');
		redirect('user/#riwayat');
	}
	function hapus($id_surat_n1)
	{
		$where = array('id_surat_n1' => $id_surat_n1);
		$this->M_surat_n1_n6->hapus_data($where, 'surat_n1');
		redirect('user/index');
	}

	function edit_form($id_surat_n1)
	{
		$where = array('id_surat_n1' => $id_surat_n1);
		$data['surat_n1'] = $this->surat_model->edit_data($where, 'surat_n1')->result();
		$this->load->view('admin/edit_form_suratKP', $data);
	}
	public function add_sk_kelakuanbaik()
	{
		$no_nik = $this->input->post('no_nik');
		$nama = $this->input->post('nama');
		$agama = $this->input->post('agama');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$pekerjaan = $this->input->post('pekerjaan');
		$kab_kota = $this->input->post('kab_kota');
		$kecamatan = $this->input->post('kecamatan');
		$desa = $this->input->post('kelurahan');
		$RT = $this->input->post('rt');
		$RW = $this->input->post('rw');
		$alamat = $this->input->post('alamat');
		$nama_surat = 'Surat Keterangan Kelakuan Baik';
		$today = mdate('%Y-%m-%d', now());
		$status_surat = 'Pending';
		$data = [
			'no_nik' => $no_nik,
			'nama' => $nama,
			'jenis_kelamin' => $jenis_kelamin,
			'tempat_lahir' => $tempat_lahir,
			'tanggal_lahir' => $tanggal_lahir,
			'agama' => $agama,
			'pekerjaan' => $pekerjaan,
			'kab_kota' => $kab_kota,
			'kecamatan' => $kecamatan,
			'desa' => $desa,
			'RT' => $RT,
			'RW' => $RW,
			'alamat' => $alamat,
			'jenis_surat' => $nama_surat,
			'tgl_ajukan_surat' => $today,
			'status_surat' => $status_surat
		];
		$this->M_surat_n1_n6->save($data, 'sk_kelakuanbaik');
		$this->session->set_flashdata('success', 'Berhasil disimpan');
		redirect('user/#riwayat');
	}
	public function add_sk_bedanama()
	{
		$nama = $this->input->post('nama');
		$no_nik = $this->input->post('no_nik');
		$nama_kk = $this->input->post('nama_kk');
		$tempat_lahir_kk = $this->input->post('tempat_lahir_kk');
		$tanggal_lahir_kk = $this->input->post('tanggal_lahir_kk');
		$jenis_kelamin_kk = $this->input->post('jenis_kelamin_kk');
		$tempat_lahir_ktp = $this->input->post('tempat_lahir_ktp');
		$tanggal_lahir_ktp = $this->input->post('tanggal_lahir_ktp');
		$jenis_kelamin_ktp = $this->input->post('jenis_kelamin_ktp');
		$keperluan = $this->input->post('keperluan');
		$nama_surat = 'Surat Keterangan Beda Nama';
		$today = mdate('%Y-%m-%d', now());
		$status_surat = 'Pending';
		$data = [
			'no_nik' => $no_nik,
			'nama' => $nama,
			'nama_kk' => $nama_kk,
			'tempat_lahir_kk' => $tempat_lahir_kk,
			'tanggal_lahir_kk' => $tanggal_lahir_kk,
			'jenis_kelamin_kk' => $jenis_kelamin_kk,
			'tempat_lahir_ktp' => $tempat_lahir_ktp,
			'tanggal_lahir_ktp' => $tanggal_lahir_ktp,
			'jenis_kelamin_ktp' => $jenis_kelamin_ktp,
			'keperluan' => $keperluan,
			'jenis_surat' => $nama_surat,
			'tgl_ajukan_surat' => $today,
			'status_surat' => $status_surat
		];
		$this->M_surat_n1_n6->save($data, 'sk_bedanama');
		$this->session->set_flashdata('success', 'Berhasil disimpan');
		redirect('user/#riwayat');
	}
	public function add_sk_belumkerja()
	{
		$no_nik = $this->input->post('no_nik');
		$nama = $this->input->post('nama');
		$agama = $this->input->post('agama');
		$status_nikah = $this->input->post('status_nikah');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$pekerjaan = $this->input->post('pekerjaan');
		$kab_kota = $this->input->post('kab_kota');
		$kecamatan = $this->input->post('kecamatan');
		$desa = $this->input->post('kelurahan');
		$RT = $this->input->post('rt');
		$RW = $this->input->post('rw');
		$alamat = $this->input->post('alamat');
		$keperluan = $this->input->post('keperluan');
		$nama_surat = 'Surat Keterangan Belum Bekerja';
		$today = mdate('%Y-%m-%d', now());
		$status_surat = 'Pending';
		$data = [
			'no_nik' => $no_nik,
			'nama' => $nama,
			'tempat_lahir' => $tempat_lahir,
			'tanggal_lahir' => $tanggal_lahir,
			'jenis_kelamin' => $jenis_kelamin,
			'agama' => $agama,
			'status_nikah' => $status_nikah,
			'pekerjaan' => $pekerjaan,
			'kab_kota' => $kab_kota,
			'kecamatan' => $kecamatan,
			'desa' => $desa,
			'rt' => $RT,
			'rw' => $RW,
			'alamat' => $alamat,
			'keperluan' => $keperluan,
			'jenis_surat' => $nama_surat,
			'tgl_ajukan_surat' => $today,
			'status_surat' => $status_surat
		];
		$this->M_surat_n1_n6->save($data, 'sk_belumkerja');
		$this->session->set_flashdata('success', 'Berhasil disimpan');
		redirect('user/#riwayat');
	}
	public function add_sk_bmr()
	{
		$no_nik = $this->input->post('no_nik');
		$nama = $this->input->post('nama');
		$agama = $this->input->post('agama');
		$status_nikah = $this->input->post('status_nikah');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$pekerjaan = $this->input->post('pekerjaan');
		$kab_kota = $this->input->post('kab_kota');
		$kecamatan = $this->input->post('kecamatan');
		$desa = $this->input->post('kelurahan');
		$RT = $this->input->post('rt');
		$RW = $this->input->post('rw');
		$alamat = $this->input->post('alamat');
		$keperluan = $this->input->post('keperluan');
		$nama_surat = 'Surat Keterangan Belum Memiliki Rumah';
		$today = mdate('%Y-%m-%d', now());
		$status_surat = 'Pending';
		$data = [
			'no_nik' => $no_nik,
			'nama' => $nama,
			'tempat_lahir' => $tempat_lahir,
			'tanggal_lahir' => $tanggal_lahir,
			'jenis_kelamin' => $jenis_kelamin,
			'agama' => $agama,
			'status_nikah' => $status_nikah,
			'pekerjaan' => $pekerjaan,
			'kab_kota' => $kab_kota,
			'kecamatan' => $kecamatan,
			'desa' => $desa,
			'rt' => $RT,
			'rw' => $RW,
			'alamat' => $alamat,
			'keperluan' => $keperluan,
			'jenis_surat' => $nama_surat,
			'tgl_ajukan_surat' => $today,
			'status_surat' => $status_surat
		];
		$this->M_surat_n1_n6->save($data, 'sk_bmr');
		$this->session->set_flashdata('success', 'Berhasil disimpan');
		redirect('user/#riwayat');
	}
	public function add_sk_belummenikah()
	{
		$no_nik = $this->input->post('no_nik');
		$nama = $this->input->post('nama');
		$agama = $this->input->post('agama');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$pekerjaan = $this->input->post('pekerjaan');
		$kab_kota = $this->input->post('kab_kota');
		$kecamatan = $this->input->post('kecamatan');
		$desa = $this->input->post('kelurahan');
		$RT = $this->input->post('rt');
		$RW = $this->input->post('rw');
		$alamat = $this->input->post('alamat');
		$keperluan = $this->input->post('keperluan');
		$nama_surat = 'Surat Keterangan Belum Menikah';
		$today = mdate('%Y-%m-%d', now());
		$status_surat = 'Pending';
		$data = [
			'no_nik' => $no_nik,
			'nama' => $nama,
			'tempat_lahir' => $tempat_lahir,
			'tanggal_lahir' => $tanggal_lahir,
			'jenis_kelamin' => $jenis_kelamin,
			'agama' => $agama,
			'pekerjaan' => $pekerjaan,
			'kab_kota' => $kab_kota,
			'kecamatan' => $kecamatan,
			'desa' => $desa,
			'rt' => $RT,
			'rw' => $RW,
			'alamat' => $alamat,
			'keperluan' => $keperluan,
			'jenis_surat' => $nama_surat,
			'tgl_ajukan_surat' => $today,
			'status_surat' => $status_surat
		];
		$this->M_surat_n1_n6->save($data, 'sk_belummenikah');
		$this->session->set_flashdata('success', 'Berhasil disimpan');
		redirect('user/#riwayat');
	}
	public function add_sk_bp()
	{
		$no_nik = $this->input->post('no_nik');
		$nama = $this->input->post('nama');
		$agama = $this->input->post('agama');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$pekerjaan = $this->input->post('pekerjaan');
		$kab_kota = $this->input->post('kab_kota');
		$kecamatan = $this->input->post('kecamatan');
		$desa = $this->input->post('kelurahan');
		$RT = $this->input->post('rt');
		$RW = $this->input->post('rw');
		$alamat = $this->input->post('alamat');
		$keperluan = $this->input->post('keperluan');
		$nama_surat = 'Surat Keterangan Biaya Penguburan';
		$today = mdate('%Y-%m-%d', now());
		$status_surat = 'Pending';
		$data = [
			'no_nik' => $no_nik,
			'nama' => $nama,
			'tempat_lahir' => $tempat_lahir,
			'tanggal_lahir' => $tanggal_lahir,
			'jenis_kelamin' => $jenis_kelamin,
			'agama' => $agama,
			'pekerjaan' => $pekerjaan,
			'kab_kota' => $kab_kota,
			'kecamatan' => $kecamatan,
			'desa' => $desa,
			'rt' => $RT,
			'rw' => $RW,
			'alamat' => $alamat,
			'keperluan' => $keperluan,
			'jenis_surat' => $nama_surat,
			'tgl_ajukan_surat' => $today,
			'status_surat' => $status_surat
		];
		$this->M_surat_n1_n6->save($data, 'sk_bp');
		$this->session->set_flashdata('success', 'Berhasil disimpan');
		redirect('user/#riwayat');
	}
	public function add_sk_janda()
	{
		$no_nik = $this->input->post('no_nik');
		$nama = $this->input->post('nama');
		$agama = $this->input->post('agama');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$pekerjaan = $this->input->post('pekerjaan');
		$kab_kota = $this->input->post('kab_kota');
		$kecamatan = $this->input->post('kecamatan');
		$desa = $this->input->post('kelurahan');
		$RT = $this->input->post('rt');
		$RW = $this->input->post('rw');
		$alamat = $this->input->post('alamat');
		$nama_suami = $this->input->post('nama_suami');
		$status_cerai = ($this->input->post('status_cerai') == 'Cerai Mati') ? 'Alm' : 'Cerai Hidup';
		$keperluan = $this->input->post('keperluan');
		$nama_surat = 'Surat Keterangan Biaya Penguburan';
		$today = mdate('%Y-%m-%d', now());
		$status_surat = 'Pending';
		$data = [
			'no_nik' => $no_nik,
			'nama' => $nama,
			'tempat_lahir' => $tempat_lahir,
			'tanggal_lahir' => $tanggal_lahir,
			'jenis_kelamin' => $jenis_kelamin,
			'agama' => $agama,
			'pekerjaan' => $pekerjaan,
			'kab_kota' => $kab_kota,
			'kecamatan' => $kecamatan,
			'desa' => $desa,
			'rt' => $RT,
			'rw' => $RW,
			'alamat' => $alamat,
			'nama_suami' => $nama_suami,
			'status_cerai' => $status_cerai,
			'keperluan' => $keperluan,
			'jenis_surat' => $nama_surat,
			'tgl_ajukan_surat' => $today,
			'status_surat' => $status_surat
		];
		$this->M_surat_n1_n6->save($data, 'sk_janda');
		$this->session->set_flashdata('success', 'Berhasil disimpan');
		redirect('user/#riwayat');
	}
	public function add_sk_kehilangan()
	{
		$no_nik = $this->input->post('no_nik');
		$nama = $this->input->post('nama');
		$agama = $this->input->post('agama');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$pekerjaan = $this->input->post('pekerjaan');
		$kab_kota = $this->input->post('kab_kota');
		$kecamatan = $this->input->post('kecamatan');
		$desa = $this->input->post('kelurahan');
		$RT = $this->input->post('rt');
		$RW = $this->input->post('rw');
		$alamat = $this->input->post('alamat');
		$barang_hilang = $this->input->post('barang_hilang');
		$no_seri = $this->input->post('no_seri');
		$nama_surat = 'Surat Keterangan Kehilangan';
		$today = mdate('%Y-%m-%d', now());
		$status_surat = 'Pending';
		$data = [
			'no_nik' => $no_nik,
			'nama' => $nama,
			'tempat_lahir' => $tempat_lahir,
			'tanggal_lahir' => $tanggal_lahir,
			'jenis_kelamin' => $jenis_kelamin,
			'agama' => $agama,
			'pekerjaan' => $pekerjaan,
			'kab_kota' => $kab_kota,
			'kecamatan' => $kecamatan,
			'desa' => $desa,
			'rt' => $RT,
			'rw' => $RW,
			'alamat' => $alamat,
			'barang_hilang' => $barang_hilang,
			'no_seri' => $no_seri,
			'jenis_surat' => $nama_surat,
			'tgl_ajukan_surat' => $today,
			'status_surat' => $status_surat
		];
		$this->M_surat_n1_n6->save($data, 'sk_kehilangan');
		$this->session->set_flashdata('success', 'Berhasil disimpan');
		redirect('user/#riwayat');
	}
	public function add_sk_penghasilan()
	{
		$no_nik = $this->input->post('no_nik');
		$nama = $this->input->post('nama');
		$agama = $this->input->post('agama');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$pekerjaan = $this->input->post('pekerjaan');
		$kab_kota = $this->input->post('kab_kota');
		$kecamatan = $this->input->post('kecamatan');
		$desa = $this->input->post('kelurahan');
		$RT = $this->input->post('rt');
		$RW = $this->input->post('rw');
		$alamat = $this->input->post('alamat');
		$penghasilan = $this->input->post('penghasilan');
		$terbilang = $this->input->post('terbilang');
		$nama_surat = 'Surat Keterangan Penghasilan';
		$today = mdate('%Y-%m-%d', now());
		$status_surat = 'Pending';
		$data = [
			'no_nik' => $no_nik,
			'nama' => $nama,
			'tempat_lahir' => $tempat_lahir,
			'tanggal_lahir' => $tanggal_lahir,
			'jenis_kelamin' => $jenis_kelamin,
			'agama' => $agama,
			'pekerjaan' => $pekerjaan,
			'kab_kota' => $kab_kota,
			'kecamatan' => $kecamatan,
			'desa' => $desa,
			'rt' => $RT,
			'rw' => $RW,
			'alamat' => $alamat,
			'penghasilan' => $penghasilan,
			'terbilang' => $terbilang,
			'jenis_surat' => $nama_surat,
			'tgl_ajukan_surat' => $today,
			'status_surat' => $status_surat
		];
		$this->M_surat_n1_n6->save($data, 'sk_penghasilan');
		$this->session->set_flashdata('success', 'Berhasil disimpan');
		redirect('user/#riwayat');
	}
	public function add_sk_ptt()
	{
		$no_nik = $this->input->post('no_nik');
		$nama = $this->input->post('nama');
		$agama = $this->input->post('agama');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$pekerjaan = $this->input->post('pekerjaan');
		$kab_kota = $this->input->post('kab_kota');
		$kecamatan = $this->input->post('kecamatan');
		$desa = $this->input->post('kelurahan');
		$RT = $this->input->post('rt');
		$RW = $this->input->post('rw');
		$alamat = $this->input->post('alamat');
		$nama_surat = 'Surat Keterangan Pernikahan Tidak Tercatat';
		$today = mdate('%Y-%m-%d', now());
		$status_surat = 'Pending';
		$data = [
			'no_nik' => $no_nik,
			'nama' => $nama,
			'tempat_lahir' => $tempat_lahir,
			'tanggal_lahir' => $tanggal_lahir,
			'jenis_kelamin' => $jenis_kelamin,
			'agama' => $agama,
			'pekerjaan' => $pekerjaan,
			'kab_kota' => $kab_kota,
			'kecamatan' => $kecamatan,
			'desa' => $desa,
			'rt' => $RT,
			'rw' => $RW,
			'alamat' => $alamat,
			'jenis_surat' => $nama_surat,
			'tgl_ajukan_surat' => $today,
			'status_surat' => $status_surat
		];
		$this->M_surat_n1_n6->save($data, 'sk_ptt');
		$this->session->set_flashdata('success', 'Berhasil disimpan');
		redirect('user/#riwayat');
	}
	public function add_sk_rumahrubuh()
	{
		$no_nik = $this->input->post('no_nik');
		$nama = $this->input->post('nama');
		$agama = $this->input->post('agama');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$pekerjaan = $this->input->post('pekerjaan');
		$kab_kota = $this->input->post('kab_kota');
		$kecamatan = $this->input->post('kecamatan');
		$desa = $this->input->post('kelurahan');
		$RT = $this->input->post('rt');
		$RW = $this->input->post('rw');
		$alamat = $this->input->post('alamat');
		$tgl_kejadian = $this->input->post('tanggal_kejadian');
		$waktu_kejadian = $this->input->post('waktu_kekadian');
		$kerugian = $this->input->post('kerugian');
		$nama_surat = 'Surat Keterangan Rumah Rubuh';
		$today = mdate('%Y-%m-%d', now());
		$status_surat = 'Pending';
		$data = [
			'no_nik' => $no_nik,
			'nama' => $nama,
			'tempat_lahir' => $tempat_lahir,
			'tanggal_lahir' => $tanggal_lahir,
			'jenis_kelamin' => $jenis_kelamin,
			'agama' => $agama,
			'pekerjaan' => $pekerjaan,
			'kab_kota' => $kab_kota,
			'kecamatan' => $kecamatan,
			'desa' => $desa,
			'rt' => $RT,
			'rw' => $RW,
			'alamat' => $alamat,
			'tgl_kejadian' => $tgl_kejadian,
			'waktu_kejadian' => $waktu_kejadian,
			'kerugian' => $kerugian,
			'jenis_surat' => $nama_surat,
			'tgl_ajukan_surat' => $today,
			'status_surat' => $status_surat
		];
		$this->M_surat_n1_n6->save($data, 'sk_rumahrubuh');
		$this->session->set_flashdata('success', 'Berhasil disimpan');
		redirect('user/#riwayat');
	}
}
