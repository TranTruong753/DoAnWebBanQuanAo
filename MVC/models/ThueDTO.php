<?php
class ThueDTO {
    public $MaThue; 
    public $MucThue; 
    public $TenThue;
    public $TrangThai;

    public function ThueDTO($MaThue, $MucThue, $TenThue, $TrangThai) {
        $this->MaThue = $MaThue;
        $this->MucThue = $MucThue;
        $this->TenThue = $TenThue;
        $this->TrangThai = $TrangThai;
    }

    // Getter for MaThue
    public function getMaThue() {
        return $this->MaThue;
    }

    // Setter for MaThue
    public function setMaThue($MaThue) {
        $this->MaThue = $MaThue;
    }

    // Getter for MucThue
    public function getMucThue() {
        return $this->MucThue;
    }

    // Setter for MucThue
    public function setMucThue($MucThue) {
        $this->MucThue = $MucThue;
    }

    // Getter for TenThue
    public function getTenThue() {
        return $this->TenThue;
    }

    // Setter for TenThue
    public function setTenThue($TenThue) {
        $this->TenThue = $TenThue;
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