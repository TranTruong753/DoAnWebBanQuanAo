<?php
class ChiTietPhieuTraDTO {
    public $MaPhieuTra; 
    public $MaChiTietSanPham; 
    public $LyDoTra;
    public $SoLuong;
    public $ThanhTien;

    public function __construct($MaPhieuTra, $MaChiTietSanPham, $LyDoTra, $SoLuong, $ThanhTien) {
        $this->MaPhieuTra = $MaPhieuTra;
        $this->MaChiTietSanPham = $MaChiTietSanPham;
        $this->LyDoTra = $LyDoTra;
        $this->SoLuong = $SoLuong;
        $this->ThanhTien = $ThanhTien;
    }

    public function getMaPhieuTra() {
        return $this->MaPhieuTra;
    }

    public function setMaPhieuTra($MaPhieuTra) {
        $this->MaPhieuTra = $MaPhieuTra;
    }

    public function getMaChiTietSanPham() {
        return $this->MaChiTietSanPham;
    }

    public function setMaChiTietSanPham($MaChiTietSanPham) {
        $this->MaChiTietSanPham = $MaChiTietSanPham;
    }

    public function getLyDoTra() {
        return $this->LyDoTra;
    }

    public function setLyDoTra($LyDoTra) {
        $this->LyDoTra = $LyDoTra;
    }

    public function getSoLuong() {
        return $this->SoLuong;
    }

    public function setSoLuong($SoLuong) {
        $this->SoLuong = $SoLuong;
    }

    public function getThanhTien() {
        return $this->ThanhTien;
    }

    public function setThanhTien($ThanhTien) {
        $this->ThanhTien = $ThanhTien;
    }
    
}
?>