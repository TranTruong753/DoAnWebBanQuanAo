<?php
class ChiTietPhieuNhapDTO {
    public $MaPhieuNhap; 
    public $DonViNhap; 
    public $SoLuong;
    public $ThanhTien;
    public $TienNhap;

    public function ChiTietPhieuNhapDTO($MaPhieuNhap, $DonViNhap, $SoLuong, $ThanhTien, $TienNhap) {
        $this->MaPhieuNhap = $MaPhieuNhap;
        $this->DonViNhap = $DonViNhap;
        $this->SoLuong = $SoLuong;
        $this->ThanhTien = $ThanhTien;
        $this->TienNhap = $TienNhap;
    }

    // Getter for MaPhieuNhap
    public function getMaPhieuNhap() {
        return $this->MaPhieuNhap;
    }

    // Setter for MaPhieuNhap
    public function setMaPhieuNhap($MaPhieuNhap) {
        $this->MaPhieuNhap = $MaPhieuNhap;
    }

    // Getter for DonViNhap
    public function getDonViNhap() {
        return $this->DonViNhap;
    }

    // Setter for DonViNhap
    public function setDonViNhap($DonViNhap) {
        $this->DonViNhap = $DonViNhap;
    }

    // Getter for SoLuong
    public function getSoLuong() {
        return $this->SoLuong;
    }

    // Setter for SoLuong
    public function setSoLuong($SoLuong) {
        $this->SoLuong = $SoLuong;
    }

    // Getter for ThanhTien
    public function getThanhTien() {
        return $this->ThanhTien;
    }

    // Setter for ThanhTien
    public function setThanhTien($ThanhTien) {
        $this->ThanhTien = $ThanhTien;
    }

    // Getter for TienNhap
    public function getTienNhap() {
        return $this->TienNhap;
    }

    // Setter for TienNhap
    public function setTienNhap($TienNhap) {
        $this->TienNhap = $TienNhap;
    }
}
?>