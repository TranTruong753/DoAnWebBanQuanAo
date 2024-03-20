<?php
class HoaDonDTO {
    public $MaHoaDon; 
    public $TenHoaDon; 
    public $NgayLap;
    public $TongTien;
    public $HinhThucThanhToan;
    public $MaThue;
    public $MaKhachHang;
    public $MaKhuyenMai;
    public $MaNhanVien;
    public $TrangThai;


    function HoaDonDTO($MaHoaDon,$TenHoaDon,$NgayLap,$TongTien,$HinhThucThanhToan,$MaThue,$MaKhachHang,$MaKhuyenMai,$MaNhanVien,$TrangThai){
        $this->MaHoaDon = $MaHoaDon;
        $this->TenHoaDon = $TenHoaDon;
        $this->NgayLap = $NgayLap;
        $this->TongTien = $TongTien;
        $this->HinhThucThanhToan = $HinhThucThanhToan;
        $this->MaThue = $MaThue;
        $this->MaKhachHang = $MaKhachHang;
        $this->MaKhuyenMai = $MaKhuyenMai;
        $this->MaNhanVien = $MaNhanVien;
        $this->TrangThai = $TrangThai;
    }

    // Phương thức thiết lập tên
    function set_MaHoaDon($MaHoaDon) {
        $this->MaHoaDon = $MaHoaDon;
    }

    // Phương thức lấy tên
    function get_MaHoaDon() {
        return $this->MaHoaDon;
    }

    // Phương thức thiết lập màu sắc
    function set_TenHoaDon($TenHoaDon) {
        $this->TenHoaDon = $TenHoaDon;
    }

    // Phương thức lấy màu sắc
    function get_TenHoaDon() {
        return $this->TenHoaDon;
    }
    
    function set_NgayLap($NgayLap) {
        $this->NgayLap = $NgayLap;
    }

    // Phương thức lấy màu sắc
    function get_NgayLap() {
        return $this->NgayLap;
    }

    function set_TongTien($TongTien) {
        $this->TongTien = $TongTien;
    }

    // Phương thức lấy màu sắc
    function get_TongTien() {
        return $this->TongTien;
    }

    function set_HinhThucThanhToan($HinhThucThanhToan) {
        $this->HinhThucThanhToan = $HinhThucThanhToan;
    }

    // Phương thức lấy màu sắc
    function get_HinhThucThanhToan() {
        return $this->HinhThucThanhToan;
    }

    function set_MaThue($MaThue) {
        $this->MaThue = $MaThue;
    }

    
    function get_MaThue() {
        return $this->MaThue;
    }

    function set_MaKhachHang($MaKhachHang) {
        $this->MaKhachHang = $MaKhachHang;
    }
    
    function get_MaKhachHang() {
        return $this->MaKhachHang;
    }

    function set_MaKhuyenMai($MaKhuyenMai) {
        $this->MaKhuyenMai = $MaKhuyenMai;
    }
    
    function get_MaKhuyenMai() {
        return $this->MaKhuyenMai;
    }


    function set_MaNhanVien($MaNhanVien) {
        $this->MaNhanVien = $MaNhanVien;
    }
    
    function get_MaNhanVien() {
        return $this->MaNhanVien;
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