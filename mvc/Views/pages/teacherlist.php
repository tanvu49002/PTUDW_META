<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin giảng viên</title>
    <!--=============== BOXICONS ===============-->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./public/style/introduction-lecturer2.css">
</head>

<body>
<?php include './mvc/Views/masterlayout.php'; ?>
    <section id="section-main">
        <main class="table">
            <section class="table__header">
                <h1>Thông tin giảng viên</h1>
                <div class="input-group">
                    <input type="search" placeholder="Search Data...">
                    <img src="./public/images/search.png" alt="">
                </div>

            </section>
            <section class="table__body">
                <table>
                    <thead>
                        <tr>
                            <th> STT <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Họ và tên <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Chức vụ <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Tổng video <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Tổng số khóa học <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Trang cá nhân <span class="icon-arrow">&UpArrow;</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> 1 </td>
                            <td> <img src="./public/images/Alex Gonley.jpg" alt="">Vũ Đình Quang Minh</td>
                            <td> Giảng viên </td>
                            <td class="test-remove"> 5 </td>
                            <td class="test-remove"> <strong> 2 </strong></td>
                            <td>
                                <p class="status delivered"><a href="viewprofileteacher">Xem thông tin</a></p>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </section>
        </main>
    </section>

</body>

</html>