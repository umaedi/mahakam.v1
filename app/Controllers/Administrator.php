<?php

namespace App\Controllers;

use \App\Models\BupatiModel;
use \App\Models\AgendaModel;
use \App\Models\DokumenModel;
use \App\Models\WakilModel;

class Administrator extends BaseController
{
    protected $BupatiModel;
    protected $WakilModel;
    protected $AgendaModel;
    protected $DokumenModel;
    public function __construct()
    {
        $this->BupatiModel = new BupatiModel();
        $this->WakilModel = new WakilModel();
        $this->AgendaModel = new AgendaModel();
        $this->DokumenModel = new DokumenModel();
    }
    public function index()
    {
        return view('administrator/index');
    }

    public function bupati()
    {
        $data['bupati'] = $this->BupatiModel->get_bupati();
        return view('administrator/bupati', $data);
    }

    public function edit_bupati($id)
    {
        $data = [
            'validation'    => \Config\Services::validation(),
            'bupati'        => $this->BupatiModel->get_bupati($id)
        ];
        return view('administrator/edit_bupati', $data);
    }

    public function update_bupati($id)
    {
        if (!$this->validate([
            'nama' => [
                'rules'     => 'required',
                'errors'    => [
                    'required'  => 'Nama wajib diisi'
                ],
            ],
            'jabatan' => [
                'rules'     => 'required',
                'errors'    => [
                    'required'  => 'Jabatan wajib diisi'
                ],
            ],
            'periode' => [
                'rules'     => 'required',
                'errors'    => [
                    'required'  => 'Periode wajib diisi'
                ],
            ],
            'agama' => [
                'rules'     => 'required',
                'errors'    => [
                    'required'  => 'Agama wajib diisi'
                ],
            ],
            'ttl' => [
                'rules'     => 'required',
                'errors'    => [
                    'required'  => 'Tempat tanggal lahir wajib diisi'
                ],
            ],
            'istri' => [
                'rules'     => 'required',
                'errors'    => [
                    'required'  => 'Istri wajib diisi'
                ],
            ],
            'sd' => [
                'rules'     => 'required',
                'errors'    => [
                    'required'  => 'Pendidikan wajib diisi'
                ],
            ],
            'smp' => [
                'rules'     => 'required',
                'errors'    => [
                    'required'  => 'Pendidikan wajib diisi'
                ],
            ],
            'sma' => [
                'rules'     => 'required',
                'errors'    => [
                    'required'  => 'Pendidikan wajib diisi'
                ],
            ],
            'kuliah' => [
                'rules'     => 'required',
                'errors'    => [
                    'required'  => 'Pendidikan wajib diisi'
                ],
            ],
            'img' => [
                'rules' => 'max_size[img,1024]|mime_in[img,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar lebih dari 2MB',
                    'mime_in' => 'Yang Anda upload bukan gambar'
                ]
            ]
        ])) {
            return redirect()->to('/administrator/edit_bupati/' . $this->request->getVar('id'))->withInput();
        }
        $img = $this->request->getFile('img');
        if ($img->getError() == 4) {
            $imgName = $this->request->getVar('imgLama');
        } else {
            $imgName = $img->getRandomName();
            $img->move('assets/img/walikota', $imgName);
            unlink('assets/img/walikota/' . $this->request->getVar('imgLama'));
        }

        $this->BupatiModel->save([
            'id'        => $id,
            'nama'      => $this->request->getVar('nama'),
            'jabatan'   => $this->request->getVar('jabatan'),
            'motto'     => $this->request->getVar('motto'),
            'periode'   => $this->request->getVar('periode'),
            'img'       => $imgName,
            'agama'     => $this->request->getVar('agama'),
            'ttl'       => $this->request->getVar('ttl'),
            'istri'     => $this->request->getVar('istri'),
            'anak1'     => $this->request->getVar('anak1'),
            'anak2'     => $this->request->getVar('anak2'),
            'anak3'     => $this->request->getVar('anak3'),
            'anak4'     => $this->request->getVar('anak4'),
            'anak5'     => $this->request->getVar('anak5'),
            'sd'        => $this->request->getVar('sd'),
            'smp'       => $this->request->getVar('smp'),
            'sma'       => $this->request->getVar('sma'),
            'kuliah'    => $this->request->getVar('kuliah'),
            'tahun1'    => $this->request->getVar('tahun1'),
            'karir1'    => $this->request->getVar('karir1'),
            'tahun2'    => $this->request->getVar('tahun2'),
            'karir2'    => $this->request->getVar('karir2'),
            'tahun3'    => $this->request->getVar('tahun3'),
            'karir3'    => $this->request->getVar('karir3'),
            'tahun4'    => $this->request->getVar('tahun4'),
            'karir4'    => $this->request->getVar('karir4'),
            'tahun5'    => $this->request->getVar('tahun5'),
            'karir5'    => $this->request->getVar('karir5'),
            'tahun6'    => $this->request->getVar('tahun6'),
            'karir6'    => $this->request->getVar('karir6'),
            'tahun7'    => $this->request->getVar('tahun7'),
            'karir7'    => $this->request->getVar('karir7'),
        ]);
        session()->setFlashdata('pesan', "<script>
        swal({
        text: 'Biografi bupati berhasil diubah',
        icon: 'success'
        });
        </script>");
        return redirect()->to('/administrator/bupati');
    }

    public function wakil_bupati()
    {
        $data['wakil'] = $this->WakilModel->getWakil();
        return view('administrator/wakil_bupati', $data);
    }

    public function edit_wakil($id)
    {
        $data = [
            'validation' => \Config\Services::validation(),
            'wakil'      => $this->WakilModel->getWakil($id)
        ];
        return view('administrator/edit_wakil', $data);
    }

    public function update_wakil($id)
    {
        if (!$this->validate([
            'nama' => [
                'rules'     => 'required',
                'errors'    => [
                    'required'  => 'Nama wajib diisi'
                ],
            ],
            'jabatan' => [
                'rules'     => 'required',
                'errors'    => [
                    'required'  => 'Jabatan wajib diisi'
                ],
            ],
            'periode' => [
                'rules'     => 'required',
                'errors'    => [
                    'required'  => 'Periode wajib diisi'
                ],
            ],
            'agama' => [
                'rules'     => 'required',
                'errors'    => [
                    'required'  => 'Agama wajib diisi'
                ],
            ],
            'ttl' => [
                'rules'     => 'required',
                'errors'    => [
                    'required'  => 'Tempat tanggal lahir wajib diisi'
                ],
            ],
            'istri' => [
                'rules'     => 'required',
                'errors'    => [
                    'required'  => 'Istri wajib diisi'
                ],
            ],
            'sd' => [
                'rules'     => 'required',
                'errors'    => [
                    'required'  => 'Pendidikan wajib diisi'
                ],
            ],
            'smp' => [
                'rules'     => 'required',
                'errors'    => [
                    'required'  => 'Pendidikan wajib diisi'
                ],
            ],
            'sma' => [
                'rules'     => 'required',
                'errors'    => [
                    'required'  => 'Pendidikan wajib diisi'
                ],
            ],
            's1' => [
                'rules'     => 'required',
                'errors'    => [
                    'required'  => 'Pendidikan wajib diisi'
                ],
            ],
            's2' => [
                'rules'     => 'required',
                'errors'    => [
                    'required'  => 'Pendidikan wajib diisi'
                ],
            ],
            'img' => [
                'rules' => 'max_size[img,1024]|mime_in[img,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar lebih dari 2MB',
                    'mime_in' => 'Yang Anda upload bukan gambar'
                ]
            ]
        ])) {
            return redirect()->to('/administrator/edit_wakil/' . $this->request->getVar('id'))->withInput();
        }

        $img = $this->request->getFile('img');
        if ($img->getError() == 4) {
            $imgName = $this->request->getVar('imgLama');
        } else {
            $imgName = $img->getRandomName();
            $img->move('assets/img/walikota/', $imgName);
            unlink('assets/img/walikota/' . $this->request->getVar('imgLama'));
        }

        $this->WakilModel->save([
            'id'        => $id,
            'nama'      => $this->request->getVar('nama'),
            'img'       => $imgName,
            'jabatan'   => $this->request->getVar('jabatan'),
            'periode'   => $this->request->getVar('periode'),
            'agama'     => $this->request->getVar('agama'),
            'ttl'       => $this->request->getVar('ttl'),
            'istri'     => $this->request->getVar('istri'),
            'anak1'     => $this->request->getVar('anak1'),
            'anak2'     => $this->request->getVar('anak2'),
            'sd'        => $this->request->getVar('sd'),
            'smp'       => $this->request->getVar('smp'),
            'sma'       => $this->request->getVar('sma'),
            's1'        => $this->request->getVar('s1'),
            's2'        => $this->request->getVar('s2'),
            'tahun1'    => $this->request->getVar('tahun1'),
            'karir1'    => $this->request->getVar('karir1'),
            'tahun2'    => $this->request->getVar('tahun2'),
            'karir2'    => $this->request->getVar('karir2'),
            'tahun3'    => $this->request->getVar('tahun3'),
            'karir3'    => $this->request->getVar('karir3'),
            'tahun4'    => $this->request->getVar('tahun4'),
            'karir4'    => $this->request->getVar('karir4'),
            'tahun5'    => $this->request->getVar('tahun5'),
            'karir5'    => $this->request->getVar('karir5'),
            'tahun6'    => $this->request->getVar('tahun6'),
            'karir6'    => $this->request->getVar('karir6'),
            'tahun7'    => $this->request->getVar('tahun7'),
            'karir7'    => $this->request->getVar('karir7')
        ]);
        session()->setFlashdata('pesan', "<script>
        swal({
        text: 'Biografi wakil bupati berhasil diubah',
        icon: 'success'
        });
        </script>");
        return redirect()->to('/administrator/wakil_bupati');
    }

    public function agenda()
    {
        $data['agenda'] = $this->AgendaModel->getAgenda();
        return view('administrator/agenda', $data);
    }

    public function buat_agenda()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('administrator/buat_agenda', $data);
    }

    public function tambah_agenda()
    {
        if (!$this->validate([
            'nama_agenda'   => [
                'rules'     => 'required',
                'errors'    => [
                    'required' => 'Nama agenda wajib diisi',
                ],
            ],
            'tanggal'   => [
                'rules'     => 'required',
                'errors'    => [
                    'required' => 'Tanggal wajib ditentukan',
                ],
            ],
        ])) {
            return redirect()->to('/administrator/buat_agenda')->withInput();
        }

        $slug = url_title($this->request->getVar('nama_agenda'), '-', true);
        $this->AgendaModel->save([
            'nama_agenda'       => $this->request->getVar('nama_agenda'),
            'slug'              => $slug,
            'tanggal'           => $this->request->getVar('tanggal'),
            'deskripsi'         => $this->request->getVar('deskripsi')
        ]);
        session()->setFlashdata('pesan', "<script>
        swal({
        text: 'Agenda baru berhasil dibuat',
        icon: 'success'
        });
        </script>");
        return redirect()->to('/administrator/agenda');
    }

    public function edit_agenda($id)
    {
        $data = [
            'validation'    => \Config\Services::validation(),
            'edit_agenda'   => $this->AgendaModel->getAgenda($id)
        ];
        return view('administrator/edit_agenda', $data);
    }

    public function update_agenda($id)
    {
        if (!$this->validate([
            'nama_agenda'   => [
                'rules'     => 'required',
                'errors'    => [
                    'required' => 'Nama agenda wajib diisi',
                ],
            ],
            'tanggal'   => [
                'rules'     => 'required',
                'errors'    => [
                    'required' => 'Tanggal wajib ditentukan',
                ],
            ],
        ])) {
            return redirect()->to('/administrator/edit_agenda/' . $this->request->getVar('id'))->withInput();
        }

        $slug = url_title($this->request->getVar('nama_agenda'), '-', true);
        $this->AgendaModel->save([
            'id'            => $id,
            'nama_agenda'   => $this->request->getVar('nama_agenda'),
            'slug'          => $slug,
            'tanggal'       => $this->request->getVar('tanggal'),
            'deskripsi'     => $this->request->getVar('deskripsi')
        ]);
        session()->setFlashdata('pesan', "<script>
        swal({
        text: 'Agenda berhasil diubah',
        icon: 'success'
        });
        </script>");
        return redirect()->to('/administrator/agenda');
    }

    public function delete_agenda($id)
    {
        $this->AgendaModel->delete($id);
        session()->setFlashdata('pesan', "<script>
        swal({
        text: 'Agenda berhasil dihapus',
        icon: 'success'
        });
        </script>");
        return redirect()->to('/administrator/agenda');
    }

    public function dokumen()
    {
        $data = [
            'validation'    => \Config\Services::validation(),
            'dokumen' => $this->DokumenModel->get_dokumen(),
        ];
        return view('administrator/dokumen', $data);
    }

    public function tambah_dokumen()
    {
        if (!$this->validate([
            'nama_file' => [
                'rules' => 'required',
                'errors'    => [
                    'required'  => 'Nama file wajib diisi'
                ],
            ],
            'file'  => [
                'rules' => 'required',
                'errors'    => [
                    'required'  => 'File wajib di pilih'
                ],
            ],
            'tanggal'  => [
                'rules' => 'required',
                'errors'    => [
                    'required'  => 'Tanggal wajib ditentukan'
                ]
            ]
        ])) {
            return redirect()->to('/administrator/dokumen')->withInput();
        }
        $slug = url_title($this->request->getVar('nama_file'), '-', true);
        $this->DokumenModel->save([
            'nama_file'     => $this->request->getVar('nama_file'),
            'slug'          => $slug,
            'tanggal'       => $this->request->getVar('tanggal'),
            'file'          => $this->request->getVar('file')
        ]);
        session()->setFlashdata('pesan', "<script>
        swal({
        text: 'Dokumen berhasil di upload',
        icon: 'success'
        });
        </script>");
        return redirect()->to('/administrator/dokumen');
    }

    public function update_dokumen($id)
    {
        if (!$this->validate([
            'nama_file'   => [
                'rules'     => 'required',
                'errors'    => [
                    'required' => 'Nama file wajib diisi',
                ],
            ],
            'file'   => [
                'rules'     => 'required',
                'errors'    => [
                    'required' => 'File wajib diupload',
                ],
            ],
            'tanggal'   => [
                'rules'     => 'required',
                'errors'    => [
                    'required' => 'Tanggal wajib ditentukan',
                ],
            ],
        ])) {
            return redirect()->to('/administrator/dokumen/' . $this->request->getVar('id'))->withInput();
        }

        $slug = url_title($this->request->getVar('nama_file'), '-', true);
        $this->DokumenModel->save([
            'id'            => $id,
            'nama_file'     => $this->request->getVar('nama_file'),
            'slug'          => $slug,
            'tanggal'       => $this->request->getVar('tanggal'),
            'file'          => $this->request->getVar('file')
        ]);
        session()->setFlashdata('pesan', "<script>
        swal({
        text: 'Dokumen berhasil diubah',
        icon: 'success'
        });
        </script>");
        return redirect()->to('/administrator/dokumen');
    }

    public function delete_dokumen($id)
    {
        $this->DokumenModel->delete($id);
        session()->setFlashdata('pesan', "<script>
        swal({
        text: 'Dokumen berhasil dihapus',
        icon: 'success'
        });
        </script>");
        return redirect()->to('/administrator/dokumen');
    }
}
