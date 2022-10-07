<?php

namespace App\Controllers;


class Pengajuan extends BaseController
{

    protected $PengajuanModel;
    protected $GhaibModel;
    protected $OrangSamaModel;
    protected $PindahPergiModel;
    protected $TidakMampuModel;
    protected $UsahaModel;


    public function approval()
    {
        $data = [
            'title' => 'pengajuan | KELURAHAN BUARAN INDAH',
            'SidebarMenuOpen' => 'pengajuan',
            'SidebarMenuActive' => 'approval',
            'pengajuan' => $this->PengajuanModel->getProsesPengajuan('Pending')

        ];
        return view('pages/pengajuanApproval', $data);
    }
    public function print()
    {
        $data = [
            'title' => 'Pengajuan | KELURAHAN BUARAN INDAH',
            'SidebarMenuOpen' => 'pengajuan',
            'SidebarMenuActive' => 'print',
            'pengajuan' => $this->PengajuanModel->getProsesPengajuan('Selesai')

        ];
        return view('pages/pengajuanPrint', $data);
    }

    public function approve($id)
    {
        $pengajuan = $this->PengajuanModel->save([
            'id_master_pengajuan' => $id,
            'status_pengajuan' => 'Selesai',
            'keterangan' => 'Selesai'
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Dikirim');

        return redirect()->to('/Pengajuan/approval');
    }

    public function rejectform($id)
    {

        $data = [
            'title' => 'Pengajuan | KELURAHAN BUARAN INDAH',
            'SidebarMenuOpen' => 'pengajuan',
            'SidebarMenuActive' => 'pengajuan',
            'pengajuan' => $this->PengajuanModel->find($id)
        ];


        return view('pages/rejectKeterangan', $data);
    }


    public function reject($id)
    {
        $pengajuan = $this->PengajuanModel->save([
            'id_master_pengajuan' => $id,
            'status_pengajuan' => 'Reject',
            'keterangan' => $this->request->getVar('keterangan')
        ]);

        session()->setFlashdata('pesan', 'Data Berhasil Dikirim');

        return redirect()->to('/Pengajuan/approval');
    }

    public function cetak($id)
    {

        $pengajuan = $this->PengajuanModel->find($id);

        $pengajuanDetail = [];
        $view = '';

        // dd($pengajuan);
        switch ($pengajuan['pengajuan']) {
            case 'Surat Keterangan Usaha':
                $pengajuanDetail = $this->UsahaModel->find($pengajuan['id_SKUsaha']);
                $detailSurat = $this->PengajuanModel->getSuratUsaha($pengajuan['id_SKUsaha']);
                $view = 'suratUsaha';
                break;
            case 'Surat Keterangan Tidak Mampu':
                $pengajuanDetail = $this->TidakMampuModel->find($pengajuan['id_SKTidakMampu']);
                $detailSurat = $this->PengajuanModel->getSuratTidakMampu($pengajuan['id_SKTidakMampu']);
                $view = 'suratTidakMampu';
                break;
            case 'Surat Keterangan Pindah Pergi':
                $pengajuanDetail = $this->PindahPergiModel->find($pengajuan['id_SKPindahPergi']);
                $detailSurat = $this->PengajuanModel->getSuratPindahPergi($pengajuan['id_SKPindahPergi']);
                $view = 'suratPindahPergi';
                break;
            case 'Surat Keterangan Orang yang Sama':
                $pengajuanDetail = $this->OrangSamaModel->find($pengajuan['id_SKOrangSama']);
                $detailSurat = $this->PengajuanModel->getSuratOrangSama($pengajuan['id_SKOrangSama']);
                $view = 'suratOrangSama';
                break;
            case 'Surat Keterangan Ghaib':
                $pengajuanDetail = $this->GhaibModel->find($pengajuan['id_SKGhaib']);
                $detailSurat = $this->PengajuanModel->getSuratGhaib($pengajuan['id_SKGhaib']);
                $view = 'suratGhaib';
                break;
        }
        $data = [
            'title' => 'Pengajuan | KELURAHAN BUARAN INDAH',
            'SidebarMenuOpen' => 'pengajuan',
            'SidebarMenuActive' => 'print',
            'pengajuan' => $pengajuan,
            'pengajuanDetail' => $pengajuanDetail,
            'detailSurat' => $detailSurat
        ];
        return view('pages/' . $view, $data);
    }

    public function cetakSurat($id)
    {

        $pengajuan = $this->PengajuanModel->find($id);

        $pengajuanDetail = [];
        $view = '';

        // dd($pengajuan);
        switch ($pengajuan['pengajuan']) {
            case 'Surat Keterangan Usaha':
                $pengajuanDetail = $this->UsahaModel->find($pengajuan['id_SKUsaha']);
                $detailSurat = $this->PengajuanModel->getSuratUsaha($pengajuan['id_SKUsaha']);
                $view = 'suratUsahaCetak';
                break;
            case 'Surat Keterangan Tidak Mampu':
                $pengajuanDetail = $this->TidakMampuModel->find($pengajuan['id_SKTidakMampu']);
                $detailSurat = $this->PengajuanModel->getSuratTidakMampu($pengajuan['id_SKTidakMampu']);
                $view = 'suratTidakMampuCetak';
                break;
            case 'Surat Keterangan Pindah Pergi':
                $pengajuanDetail = $this->PindahPergiModel->find($pengajuan['id_SKPindahPergi']);
                $detailSurat = $this->PengajuanModel->getSuratPindahPergi($pengajuan['id_SKPindahPergi']);
                $view = 'suratPindahPergiCetak';
                break;
            case 'Surat Keterangan Orang yang Sama':
                $pengajuanDetail = $this->OrangSamaModel->find($pengajuan['id_SKOrangSama']);
                $detailSurat = $this->PengajuanModel->getSuratOrangSama($pengajuan['id_SKOrangSama']);
                $view = 'suratOrangSamaCetak';
                break;
            case 'Surat Keterangan Ghaib':
                $pengajuanDetail = $this->GhaibModel->find($pengajuan['id_SKGhaib']);
                $detailSurat = $this->PengajuanModel->getSuratGhaib($pengajuan['id_SKGhaib']);
                $view = 'suratGhaibCetak';
                break;
        }
        $data = [
            'title' => 'Pengajuan | KELURAHAN BUARAN INDAH',
            'SidebarMenuOpen' => 'pengajuan',
            'SidebarMenuActive' => 'print',
            'pengajuan' => $pengajuan,
            'pengajuanDetail' => $pengajuanDetail,
            'detailSurat' => $detailSurat
        ];
        return view('pages/' . $view, $data);
    }

    public function detail($id)
    {

        $pengajuan = $this->PengajuanModel->find($id);

        $pengajuanDetail = [];
        $view = '';

        switch ($pengajuan['pengajuan']) {
            case 'Surat Keterangan Usaha':
                $pengajuanDetail = $this->UsahaModel->find($pengajuan['id_SKUsaha']);
                $detailSurat = $this->PengajuanModel->getSuratUsaha($pengajuan['id_SKUsaha']);
                $view = 'SKUsahaDetail';
                break;
            case 'Surat Keterangan Tidak Mampu':
                $pengajuanDetail = $this->TidakMampuModel->find($pengajuan['id_SKTidakMampu']);
                $detailSurat = $this->PengajuanModel->getSuratTidakMampu($pengajuan['id_SKTidakMampu']);
                $view = 'SKTidakMampuDetail';
                break;
            case 'Surat Keterangan Pindah Pergi':
                $pengajuanDetail = $this->PindahPergiModel->find($pengajuan['id_SKPindahPergi']);
                $detailSurat = $this->PengajuanModel->getSuratPindahPergi($pengajuan['id_SKPindahPergi']);
                $view = 'SKPindahPergiDetail';
                break;
            case 'Surat Keterangan Orang yang Sama':
                $pengajuanDetail = $this->OrangSamaModel->find($pengajuan['id_SKOrangSama']);
                $detailSurat = $this->PengajuanModel->getSuratOrangSama($pengajuan['id_SKOrangSama']);
                $view = 'SKOrangSamaDetail';
                break;
            case 'Surat Keterangan Ghaib':
                $pengajuanDetail = $this->GhaibModel->find($pengajuan['id_SKGhaib']);
                $detailSurat = $this->PengajuanModel->getSuratGhaib($pengajuan['id_SKGhaib']);
                $view = 'SKGhaibDetail';
                break;
        }
        $data = [
            'title' => 'Pengajuan | KELURAHAN BUARAN INDAH',
            'SidebarMenuOpen' => 'pengajuan',
            'SidebarMenuActive' => 'approval',
            'pengajuan' => $pengajuan,
            'pengajuanDetail' => $pengajuanDetail,
            'detailSurat' => $detailSurat
        ];
        return view('pages/' . $view, $data);
    }
}
