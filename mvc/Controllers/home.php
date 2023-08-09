<?php
    class home {
        public function show() {  
            if (!(isset($_SESSION['user']))) {
                header("Location:login");
            } 
            require_once "./mvc/Views/pages/home.php";
        }

        public function showCourse($name, $id_image) {
            require_once "./mvc/Models/image.php";
            $image = new image();
            $thumbnail_path = $image->getImageNameById($id_image);
            // $name = "vu";
            $view =  '
            <div class="product-card">
                <div class="logo-cart">
                    <img src="./public/images/logo1.jpg" alt="logo">
                    <i class=\'bx bx-bookmark\'></i>
                </div>
                <div class="main-images">
                    <img id="blue" class="blue active" src="./public/uploads/'. $thumbnail_path .'" alt="thumbnail">
                    
                </div>
                <div class="shoe-details">
                    <span class="shoe_name">' . $name . '</span>
                    <div class="stars">
                        <i class=\'bx bxs-star\'></i>
                        <i class=\'bx bxs-star\'></i>
                        <i class=\'bx bxs-star\'></i>
                        <i class=\'bx bxs-star\'></i>
                        <i class=\'bx bx-star\'></i>
                    </div>
                </div>
                <div class="button">
                    <div class="button-layer"></div>
                    <button><a class="btn-color-index" href="detailvideo">Học ngay</a></button>

                </div>
            </div>
                ';
                return $view;
        }
    }
?>