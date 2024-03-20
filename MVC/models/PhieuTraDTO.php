<?php
class PhieuTraDTO {
    public $MaPhieuTra; 
    public $MaNhanVien; 
    public $MaHoaDon;
    public $Ngaytra;
    public $TongSoLuong;
    public $TongTienTra;

    public function PhieuTraDTO($MaPhieuTra, $MaNhanVien, $MaHoaDon, $Ngaytra, $TongSoLuong, $TongTienTra) {
        $this->MaPhieuTra = $MaPhieuTra;
        $this->MaNhanVien = $MaNhanVien;
        $this->MaHoaDon = $MaHoaDon;
        $this->Ngaytra = $Ngaytra;
        $this->TongSoLuong = $TongSoLuong;
        $this->TongTienTra = $TongTienTra;
    }

    public function getMaPhieuTra() {
        return $this->MaPhieuTra;
    }

    public function setMaPhieuTra($MaPhieuTra) {
        $this->MaPhieuTra = $MaPhieuTra;
    }

    public function getMaNhanVien() {
        return $this->MaNhanVien;
    }

    public function setMaNhanVien($MaNhanVien) {
        $this->MaNhanVien = $MaNhanVien;
    }

    public function getMaHoaDon() {
        return $this->MaHoaDon;
    }

    public function setMaHoaDon($MaHoaDon) {
        $this->MaHoaDon = $MaHoaDon;
    }

    public function getNgaytra() {
        return $this->Ngaytra;
    }

    public function setNgaytra($Ngaytra) {
        $this->Ngaytra = $Ngaytra;
    }

    public function getTongSoLuong() {
        return $this->TongSoLuong;
    }

    public function setTongSoLuong($TongSoLuong) {
        $this->TongSoLuong = $TongSoLuong;
    }

    public function getTongTienTra() {
        return $this->TongTienTra;
    }

    public function setTongTienTra($TongTienTra) {
        $this->TongTienTra = $TongTienTra;
    }
}
?>