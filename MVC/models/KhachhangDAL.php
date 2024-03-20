 <?php 
 class KhachHangDAL {
    public $data = array();

    public function selectAll() {
        $ketQua = array();
        try{ 
            $conn = new connectDatabse();
            $conn->openConnect();
        } catch (PDOException $e){
            echo $e->getMessage();
        }
    }

 }
 
 ?>