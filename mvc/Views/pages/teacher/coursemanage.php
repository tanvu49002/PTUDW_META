<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý khóa học</title>
    <!--=============== BOXICONS ===============-->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./public/style/coursemanage.css">
</head>

<body>
    <?php include './mvc/Views/masterlayout.php'; ?>
    <section id="section-main">

        <h3 class="title-home">Quản lý khóa học</h3>
        <!-- <div class="card__circle card__circle1"></div> -->
        <div class="card__circle card__circle2"></div>
        <div class="body">

            <div class="list-product">
                <div class="product-card1">
                    <div class="button">
                        <div class="button-layer"></div>
                        <button><a class="btn-color-index" href="createcourse">Thêm khóa
                                học</a></button>
                    </div>
                </div>

                <?php
                require_once "./mvc/Models/course.php";
                $course = new course();
                $id_user = $_SESSION['user']['id'];
                $tests = $course->showCourseByTeacher($id_user);
                foreach ($tests as $test) {
                    echo $this->showTeacherCourse($test['name'], $test['id'], $test['id_image']);
                }
                ?>

            
                <!-- <div id="confirmationModal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <p>Bạn có chắn muốn xoá khoá học này?</p>
                        <div class="app300">
                            <button id="confirmDelete"><a href="coursemanage/deleteCourse/'. $id .'">OK</a></button>
                            <button id="cancelDelete">Cancel</button>
                        </div>
                    </div>
                </div>  -->
                <!-- <style>
                    .app300 {
                        display: flex;
                        justify-content: space-between;
                        margin-top: 20px;
                    }

                    .modal {
                        display: none;
                        position: fixed;
                        /* display: flex; */
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background-color: rgba(0, 0, 0, 0.5);
                        justify-content: center;
                        align-items: center;
                        z-index: 100;
                    }

                    .modal-content {
                        background-color: #fff;
                        width: 300px;
                        padding: 20px;
                        border-radius: 8px;
                        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
                    }

                    .close {
                        float: right;
                        font-size: 20px;
                        font-weight: bold;
                        cursor: pointer;
                        color: #888;
                    }

                    .button-container {
                        display: flex;
                        justify-content: flex-end;
                        margin-top: 20px;
                    }

                    button {
                        padding: 8px 16px;
                        border: none;
                        border-radius: 4px;
                        cursor: pointer;
                        font-weight: bold;
                    }

                    #confirmDelete {
                        background-color: #e74c3c;
                        color: white;
                        width: calc(100%/3);
                    }

                    #cancelDelete {
                        background-color: #3498db;
                        color: white;
                        margin-right: 10px;
                        width: calc(100%/3);
                    }
                </style> -->
            </div>

        </div>
    </section>

</body>
<!-- <script>
    const deleteButton = document.getElementById('deleteButton');
    const confirmationModal = document.getElementById('confirmationModal');
    const confirmDeleteButton = document.getElementById('confirmDelete');
    const cancelDeleteButton = document.getElementById('cancelDelete');
    const closeModalButton = document.querySelector('.close');

    deleteButton.addEventListener('click', () => {
        confirmationModal.style.display = 'flex';
    });

    cancelDeleteButton.addEventListener('click', () => {
        confirmationModal.style.display = 'none';
    });

    confirmDeleteButton.addEventListener('click', () => {
        // Perform the delete action here
        confirmationModal.style.display = 'none';
    });

    closeModalButton.addEventListener('click', () => {
        confirmationModal.style.display = 'none';
    });

    window.addEventListener('click', (event) => {
        if (event.target === confirmationModal) {
            confirmationModal.style.display = 'none';
        }
    });
</script> -->

</html>