<?php

namespace App\Controllers;

class Biografi extends BaseController
{
    public function bupati()
    {
        $data = [
            'img'       => '/assets/img/walikota/bupati.jpg',
            'profil'    => 'PROFIL BUPATI',
            'nama'      => 'BONIFASIUS BELAWAN GEH, SH',
            'jabatan'   => 'Bupati Mahakam Ulu',
            'motto'     => '“Orang Lain Bisa, Saya Harus Bisa”(dalam segi Positif)"',
            'agama'     => 'Katolik',
            'ttl'       => 'Mamahak Besar, 17 September 1966',
            'istri'     => 'Ny. Yovita Bulan Bonifasius',
            'anak'      => [
                '1. Angelina Idang Belawan',
                '2. Marcellus Hajang Belawan',
                '3. Owena Mayang Shari Belawan',
                '4. Marisa Mellisa Dau Belawan',
                '5. Ivana Lun Belawan'
            ],
            'sd'        => '1974 – 1980 SDN 017 Mamahak Besar',
            'smp'       => '1980 – 1983 SMP WR. Supratman Tering',
            'sma'       => '1983 – 1986 SMK Cendana Samarinda',
            'kuliah'    => '2006 – 2010 Fakultas Hukum Universitas 17 Agustus Samarinda',
            'karir1'    => [
                '1998 – 2003',
                ' Ketua KSU Mayang Putri Prima'
            ],
            'karir2'    => [
                '2008 – 2013',
                'Direktur PT. Cahaya Belawan Sejahtera'
            ],
            'karir3'    => [
                '2005 – 2013',
                'Direktur CV. Sinto Makmur'
            ],
            'karir4'    => [
                '2014',
                'Wakil Ketua DPRD Kabupaten Kutai Barat'
            ],
            'karir5'    => [
                '2014 – 2015',
                'Ketua DPRD Kabupaten Mahakam Ulu'
            ],
            'karir6'    => [
                '2016 – 2021',
                'Bupati Mahakam Ulu'
            ],
            'karir7'    => [
                '2021 – 2024',
                'Bupati Mahakam Ulu'
            ],

        ];
        return view('biografi/bupati', $data);
    }

    public function wakil()
    {
        $data = [
            'img'       => '/assets/img/walikota/wakil.jpg',
            'profil'    => 'PROFIL BUPATI',
            'nama'      => 'Drs. Yohanes Avun, M.Si',
            'jabatan'   => 'Wakil Bupati Mahakam Ulu',
            'agama'     => 'Katolik',
            'ttl'       => 'Sirau, 31 Desember 1964',
            'istri'     => 'Ny. Anastasia Dang Avun',
            'anak'      => [
                '1.	Helena Hubung',
                '2.	Hendrikus Hirang',
            ],
            'sd'        => '1971 -1977 SD Katolik Wr. Soepratman Tering',
            'smp'       => '1979 – 1981  SMP Katolik Wr. Soepratman Tering',
            'sma'       => '1982 – 1984  SMA Katolik Wr. Soepratman Samarinda',
            'kuliah'    => '1984 – 1988  Universitas Mulawarman',
            'pasca'     => '2005 – 2007  Universitas Mulawarman',
            'karir1'    => [
                '2001 – 2003',
                'Kepala Bidang Perencanaan Pemberdayaan Perkampungan Bappeda Kutai Barat'
            ],
            'karir2'    => [
                '2003 – 2005',
                'Kepala Bidang Perencanaan Ekonomi Kerakyataan Bappeda Kutai Barat'
            ],
            'karir3'    => [
                '2005',
                'Kabag Perekonomian Setkab Kutai Barat'
            ],
            'karir4'    => [
                '2009 – 2013',
                'Kepala Badan Pelayanan Perijinan Terpadu Kutai Barat'
            ],
            'karir5'    => [
                '2013',
                'Asisten Kesejahteraan Rakyat dan Administrasi Sekretariat Daerah Kabupaten Mahakam Ulu'
            ],
            'karir6'    => [
                '2013 – 2020',
                'Sekretaris Daerah Kabupaten Mahakam Ulu'
            ],
            'karir7'    => [
                '2021 – 2024',
                'Wakil Bupati Kabupaten Mahakam Ulu'
            ],

        ];
        return view('biografi/wakil', $data);
    }
    //--------------------------------------------------------------------

}
