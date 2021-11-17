<?php

namespace App\Controllers;

use \App\Models\BupatiModel;
use \App\Models\AgendaModel;
use \App\Models\DokumenModel;
use \App\Models\WakilModel;
use \App\Models\KategoriModel;
use \App\Models\BannerModel;
use \App\Models\UserModel;
use \App\Models\GeneralSetting;

class Administrator extends BaseController
{
    protected $BupatiModel;
    protected $WakilModel;
    protected $AgendaModel;
    protected $KategoriModel;
    protected $DokumenModel;
    protected $bannerModel;
    protected $UserModel;
    protected $GeneralSettings;
    public function __construct()
    {
        $this->BupatiModel = new BupatiModel();
        $this->WakilModel = new WakilModel();
        $this->AgendaModel = new AgendaModel();
        $this->KategoriModel = new KategoriModel();
        $this->DokumenModel = new DokumenModel();
        $this->bannerModel = new BannerModel();
        $this->UserModel = new UserModel();
        $this->GeneralSettings = new GeneralSetting();
    }
    public function index()
    {
        $data = [
            'title'             => 'Mahakam | Administrator',
            'profile'              => $this->UserModel->getUser(),
            'agenda'            => $this->AgendaModel->getAgendaRcent(),
            'dokumen'           => $this->DokumenModel->getDocumenLimit(),
            'count_document'    => $this->DokumenModel->counAllDocument(),
            'count_agenda'      => $this->AgendaModel->countAgenda()
        ];
        return view('administrator/index', $data);
    }

    public function general_settings()
    {
        $data = [
            'title'         => 'Mahakam | Pengaturan umum',
            'profile'       => $this->UserModel->getUser(),
            'validation'    => \Config\Services::validation(),
            'banner'        => $this->bannerModel->getBanner(),
            'settings'      => $this->GeneralSettings->getSettings()
        ];
        return view('administrator/general', $data);
    }

    public function edit_genralSettings($id)
    {
        $data = [
            'title'         => 'Mahakam | Edit pengaturan',
            'profile'       => $this->UserModel->getUser(),
            'validation'    => \Config\Services::validation(),
            'banner'        => $this->bannerModel->getBanner(),
            'settings'      => $this->GeneralSettings->getSettings($id)
        ];
        return view('administrator/edit_pengaturan', $data);
    }

    public function update_generalSettings($id)
    {
        $this->GeneralSettings->save([
            'id'                => $id,
            'website_name'      => $this->request->getVar('website_name'),
            'slogan'            => $this->request->getVar('slogan'),
            'welcome_msg'       => $this->request->getVar('welcome_msg'),
            'addres'            => $this->request->getVar('addres'),
            'contact'           => $this->request->getVar('contact'),
            'email'             => $this->request->getVar('email')
        ]);
        session()->setFlashdata('pesan', "<script>
        swal({
        text: 'Pengaturan umum berhasil diubah',
        icon: 'success'
        });
        </script>");
        return redirect()->to('/administrator/general_settings');
    }

    public function edit_banner($id)
    {
        $data = [
            'title'             => 'Mahakam | Edit banner',
            'profile'              => $this->UserModel->getUser(),
            'validation'    => \Config\Services::validation(),
            'banner'        => $this->bannerModel->getBanner($id)
        ];
        return view('administrator/edit_banner', $data);
    }

    public function update_banner($id)
    {
        if (!$this->validate([
            'img_banner'    => [
                'rules'     => 'uploaded[img_banner]|mime_in[img_banner,image/jpg,image/jpeg,image/png]|max_size[img_banner,1024]|max_dims[img_banner,1920,1079]',
                'errors'    => [
                    'uploaded'  => 'Banner wajib dipilih',
                    'max_size'  => 'Ukuran gambar lebih dari 2MB',
                    'mime_in'   => 'Yang Anda upload bukan gambar',
                    'max_dims'  => 'Pastikan ukuran gambar 1920 x 1079'
                ]
            ],
            'bupati'    => [
                'rules'     => 'uploaded[bupati]|mime_in[bupati,image/png]|max_size[bupati,1024]',
                'errors'    => [
                    'uploaded'  => 'Banner wajib dipilih',
                    'max_size'  => 'Ukuran gambar lebih dari 2MB',
                    'mime_in'   => 'Format gambar harus png',
                ]
            ],
            'wakil'    => [
                'rules'     => 'uploaded[wakil]|mime_in[wakil,image/png]|max_size[wakil,1024]',
                'errors'    => [
                    'uploaded'  => 'Banner wajib dipilih',
                    'max_size'  => 'Ukuran gambar lebih dari 2MB',
                    'mime_in'   => 'Format gambar harus png',
                ]
            ],
        ]))
            return redirect()->to('/administrator/edit_banner/' . $this->request->getVar('id'))->withInput();

        $img_bupati = $this->request->getFile('bupati');
        $img_wakil = $this->request->getFile('wakil');
        $img_utama = $this->request->getFile('img_banner');

        if ($img_bupati->getError() == 4) {
            $img_name_bupati = $this->request->getVar('imgLama1');
        } else {
            $img_name_bupati = $img_bupati->getRandomName();
            $img_bupati->move('assets/img/banner', $img_name_bupati);
            // unlink('assets/img/banner/' . $this->request->getVar('imgLama'));
        }
        if ($img_wakil->getError() == 4) {
            $img_name_wakil = $this->request->getVar('imgLama2');
        } else {
            $img_name_wakil = $img_wakil->getRandomName();
            $img_wakil->move('assets/img/banner', $img_name_wakil);
            // unlink('assets/img/banner/' . $this->request->getVar('imgLama'));
        }
        if ($img_utama->getError() == 4) {
            $img_banner = $this->request->getVar('imgLama3');
        } else {
            $img_banner = $img_utama->getRandomName();
            $img_utama->move('assets/img/banner', $img_banner);
            // unlink('assets/img/banner/' . $this->request->getVar('imgLama'));
        }


        $this->bannerModel->save([
            'id'            => $id,
            'url'           => $this->request->getVar('url_banner'),
            'url_bupati'    => $this->request->getVar('url_bupati'),
            'url_wakil'     => $this->request->getVar('url_wakil'),
            'bupati'        => $img_name_bupati,
            'wakil'         => $img_name_wakil,
            'img_banner'    => $img_banner
        ]);
        session()->setFlashdata('pesan', "<script>
        swal({
        text: 'Banner berhasil diubah',
        icon: 'success'
        });
        </script>");
        return redirect()->to('/administrator/general_settings');
    }

    public function bupati()
    {
        $data = [
            'title'             => 'Mahakam | Administrator',
            'profile'              => $this->UserModel->getUser(),
            'bupati' => $this->BupatiModel->get_bupati()
        ];
        return view('administrator/bupati', $data);
    }

    public function edit_bupati($id)
    {
        $data = [
            'title'             => 'Mahakam | Administrator',
            'profile'       => $this->UserModel->getUser(),
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
        $data = [
            'title'             => 'Mahakam | Administrator',
            'profile'              => $this->UserModel->getUser(),
            'wakil' => $this->WakilModel->getWakil()
        ];
        return view('administrator/wakil_bupati', $data);
    }

    public function edit_wakil($id)
    {
        $data = [
            'title'             => 'Mahakam | Administrator',
            'profile'              => $this->UserModel->getUser(),
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
        $data = [
            'title'             => 'Mahakam | Administrator',
            'profile'              => $this->UserModel->getUser(),
            'agenda' => $this->AgendaModel->getAgenda()
        ];
        return view('administrator/agenda', $data);
    }

    public function buat_agenda()
    {
        $data = [
            'title'             => 'Mahakam | Administrator',
            'user'              => $this->UserModel->getUser(),
            'profile'              => $this->UserModel->getUser(),
            'validation' => \Config\Services::validation(),
            'kategori'   => $this->KategoriModel->getKategori()
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
            'tag'   => [
                'rules'     => 'required',
                'errors'    => [
                    'required' => 'Tag wajib disi',
                ],
            ],
            'lokasi'   => [
                'rules'     => 'required',
                'errors'    => [
                    'required' => 'Lokasi wajib ditentukan',
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
            return redirect()->to('/administrator/buat_agenda')->withInput();
        }
        $file = $this->request->getFile('img');
        $namaFile = $file->getRandomName();
        $file->move('assets/img/blogpost', $namaFile);

        $slug = url_title($this->request->getVar('nama_agenda'), '-', true);
        $this->AgendaModel->save([
            'nama_agenda'       => $this->request->getVar('nama_agenda'),
            'slug'              => $slug,
            'tag'               => $this->request->getVar('tag'),
            'kategori'          => $this->request->getVar('kategori'),
            'img'               => $namaFile,
            'lokasi'            => $this->request->getVar('lokasi'),
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
            'title'             => 'Mahakam | Administrator',
            'profile'              => $this->UserModel->getUser(),
            'validation'    => \Config\Services::validation(),
            'edit_agenda'   => $this->AgendaModel->getAgenda($id),
            'kategori'      => $this->KategoriModel->getKategori()
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

        $img = $this->request->getFile('img');
        if ($img->getError() == 4) {
            $imgName = $this->request->getVar('imgLama');
        } else {
            $imgName = $img->getRandomName();
            $img->move('assets/img/blogpost', $imgName);
            unlink('assets/img/blogpost/' . $this->request->getVar('imgLama'));
        }

        $slug = url_title($this->request->getVar('nama_agenda'), '-', true);
        $this->AgendaModel->save([
            'id'            => $id,
            'nama_agenda'   => $this->request->getVar('nama_agenda'),
            'slug'          => $slug,
            'tanggal'       => $this->request->getVar('tanggal'),
            'img'           => $imgName,
            'lokasi'        => $this->request->getVar('lokasi'),
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

    public function kategori()
    {
        $data = [
            'title'             => 'Mahakam | Administrator',
            'profile'              => $this->UserModel->getUser(),
            'validation' => \Config\Services::validation(),
            'kategori'   => $this->KategoriModel->getKategori(),
        ];
        return view('administrator/kategori', $data);
    }

    public function tambah_kategori()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required'  => 'Nama kategori wajib diisi'
                ],
            ],
        ])) {
            return redirect()->to('/administrator/kategori')->withInput();
        }
        $this->KategoriModel->save([
            'nama' => $this->request->getVar('nama'),
        ]);
        session()->setFlashdata('pesan', "<script>
        swal({
        text: 'Kategori berhasil ditambahkan',
        icon: 'success'
        });
        </script>");
        return redirect()->to('/administrator/kategori');
    }

    public function update_kategori($id)
    {
        $this->KategoriModel->save([
            'id'    => $this->request->getVar('id'),
            'nama'  => $this->request->getVar('nama')
        ]);
        session()->setFlashdata('pesan', "<script>
        swal({
        text: 'Kategori berhasil diubah',
        icon: 'success'
        });
        </script>");
        return redirect()->to('/administrator/kategori');
    }

    public function hapus_kategori($id)
    {
        $this->KategoriModel->delete($id);
        session()->setFlashdata('pesan', "<script>
        swal({
        text: 'Kategori berhasil dihapus',
        icon: 'success'
        });
        </script>");
        return redirect()->to('/administrator/kategori');
    }

    public function dokumen()
    {
        $data = [
            'title'             => 'Mahakam | Administrator',
            'profile'              => $this->UserModel->getUser(),
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
            'tanggal'  => [
                'rules' => 'required',
                'errors'    => [
                    'required'  => 'Tanggal wajib ditentukan'
                ]
            ],
            'file_dokumen'  => [
                'rules' => 'max_size[file_dokumen,1024]',
                'errors' => [
                    'max_size' => 'Ukuran gambar lebih dari 2MB',
                ]
            ]
        ])) {
            return redirect()->to('/administrator/dokumen')->withInput();
        }
        $file = $this->request->getFile('file_dokumen');
        $namaFile = $file->getRandomName();
        $file->move('assets/dokumen', $namaFile);


        $slug = url_title($this->request->getVar('nama_file'), '-', true);
        $this->DokumenModel->save([
            'nama_file'     => $this->request->getVar('nama_file'),
            'slug'          => $slug,
            'tanggal'       => $this->request->getVar('tanggal'),
            'file'          => $namaFile
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
            'tanggal'   => [
                'rules'     => 'required',
                'errors'    => [
                    'required' => 'Tanggal wajib ditentukan',
                ],
            ],
            'file_dokumen'  => [
                'rules' => 'max_size[file_dokumen,1024]',
                'errors' => [
                    'max_size' => 'Ukuran gambar lebih dari 2MB',
                ]
            ]
        ])) {
            return redirect()->to('/administrator/dokumen/' . $this->request->getVar('id'))->withInput();
        }

        $file = $this->request->getFile('file_dokumen');
        if ($file->getError() == 4) {
            $namaFile = $this->request->getVar('fileLama');
        } else {
            $namaFile = $file->getRandomName();
            $file->move('assets/dokumen', $namaFile);
            unlink('assets/dokumen/' . $this->request->getVar('fileLama'));
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

    public function profile()
    {
        $data = [
            'title'             => 'Mahakam | Administrator',
            'profile'              => $this->UserModel->getUser(),
            'validation'    => \Config\Services::validation(),
            'banner'        => $this->bannerModel->findAll(),
            'user'          => $this->UserModel->getUser()
        ];
        return view('administrator/profile', $data);
    }

    public function edit_profile($id)
    {
        $data = [
            'title'             => 'Mahakam | Administrator',
            'profile'              => $this->UserModel->getUser(),
            'validation'        => \Config\Services::validation(),
            'user'              => $this->UserModel->getUser($id)
        ];
        return view('administrator/edit_profile', $data);
    }

    public function update_profile($id)
    {
        if (!$this->validate([
            'user_name'     => [
                'rules'     => 'required',
                'errors'    => [
                    'required'  => 'Nama pengguna wajib diisi'
                ]
            ],
            'user_image'     => [
                'rules'         => 'max_size[user_image,2048]|mime_in[user_image,image/jpg,image/jpeg,image/png]',
                'errors'        => [
                    'mime_in'   => 'Yang anda upload bukan gambar',
                    'max_size'  => 'Ukuran gambar lebih dari 2 MB'
                ]
            ],
        ])) {
            return redirect()->to('/administrator/edit_profile/' . $this->request->getVar('id'))->withInput();
        }
        $img = $this->request->getFile('user_image');
        if ($img->getError() == 4) {
            $imgName = $this->request->getVar('imgLama');
        } else {
            $imgName = $img->getRandomName();
            $img->move('assets/img/profile', $imgName);
            unlink('assets/img/profile/' . $this->request->getVar('imgLama'));
        }

        $this->UserModel->save([
            'id'            => $id,
            'username'      => $this->request->getVar('user_name'),
            'user_image'    => $imgName
        ]);
        session()->setFlashdata('pesan', "<script>
        swal({
        text: 'Profil berhasil dihapus',
        icon: 'success'
        });
        </script>");
        return redirect()->to('/administrator/profile');
    }
}
