<?php
class MauSacDTO {
    public $MaMauSac; 
    public $TenMauSac; 
    public $TrangThai;

    public function MauSacDTO($MaMauSac, $TenMauSac, $TrangThai) {
        $this->MaMauSac = $MaMauSac;
        $this->TenMauSac = $TenMauSac;
        $this->TrangThai = $TrangThai;
    }

    // Getter for MaMauSac
    public function getMaMauSac() {
        return $this->MaMauSac;
    }

    // Setter for MaMauSac
    public function setMaMauSac($MaMauSac) {
        $this->MaMauSac = $MaMauSac;
    }

    // Getter for TenMauSac
    public function getTenMauSac() {
        return $this->TenMauSac;
    }

    // Setter for TenMauSac
    public function setTenMauSac($TenMauSac) {
        $this->TenMauSac = $TenMauSac;
    }

    // Getter for TrangThai
    public function getTrangThai() {
        return $this->TrangThai;
    }

    // Setter for TrangThai
    public function setTrangThai($TrangThai) {
        $this->TrangThai = $TrangThai;
    }
}
?>