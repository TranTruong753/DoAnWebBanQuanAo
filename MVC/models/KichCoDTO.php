<?php
class KichCoDTO {
    public $MaKichCo; 
    public $TenKichCo; 
    public $TrangThai;

    function KichCoDTO($MaKichCo,$MaKichCo,$TrangThai){
        $this->MaKichCo = $MaKichCo;
        $this->TenKichCo = $TenKichCo;
        $this->TrangThai = $TrangThai;
    }

    // Phương thức thiết lập tên
    function set_MaKichCo($MaKichCo) {
        $this->MaKichCo = $MaKichCo;
    }

    // Phương thức lấy tên
    function get_MaKichCo() {
        return $this->MaKichCo;
    }

    // Phương thức thiết lập màu sắc
    function set_TenKichCo($TenKichCo) {
        $this->TenKichCo = $TenKichCo;
    }

    // Phương thức lấy màu sắc
    function get_TenKichCo() {
        return $this->TenKichCo;
    }

    function set_TrangThai($TrangThai) {
        $this->TrangThai = $TrangThai;
    }

    // Phương thức lấy tên
    function get_TrangThai() {
        return $this->TrangThai;
    }
}
?>