$id = $_GET['id'];
            $_SESSION['id'] = $id;
            // echo $id;
            $sql = "SELECT * FROM `product` where `id` = '$id'";
            $result = mysqli_query($con, $sql);
            $data = mysqli_fetch_assoc($result);
            $_SESSION['id'] = $data['id'];
            echo  $_SESSION['id'];

           $mem_id = $_SESSION['member_id'];