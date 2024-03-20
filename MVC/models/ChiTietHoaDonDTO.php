<?php
class ChiTietHoaDonDTO {
    public $MaHoaDon; 
    public $MaChiTietSanPham; 
    public $GiaSanPham;
    public $SoLuong;
    public $ThanhTien;

    public function ChiTietHoaDonDTO($MaHoaDon, $MaChiTietSanPham, $GiaSanPham, $SoLuong, $ThanhTien) {
        $this->MaHoaDon = $MaHoaDon;
        $this->MaChiTietSanPham = $MaChiTietSanPham;
        $this->GiaSanPham = $GiaSanPham;
        $this->SoLuong = $SoLuong;
        $this->ThanhTien = $ThanhTien;
    }

    public function getMaHoaDon() {
        return $this->MaHoaDon;
    }

    public function setMaHoaDon($MaHoaDon) {
        $this->MaHoaDon = $MaHoaDon;
    }

    public function getMaChiTietSanPham() {
        return $this->MaChiTietSanPham;
    }

    public function setMaChiTietSanPham($MaChiTietSanPham) {
        $this->MaChiTietSanPham = $MaChiTietSanPham;
    }

    public function getGiaSanPham() {
        return $this->GiaSanPham;
    }

    public function setGiaSanPham($GiaSanPham) {
        $this->GiaSanPham = $GiaSanPham;
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