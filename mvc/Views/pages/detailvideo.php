<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết khóa học</title>
    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="./public/style/detail-video.css">
</head>

<body>
<?php include './mvc/Views/masterlayout.php'; ?>
    <section id="section-main">

        <div class="app5">
            <div class="container">
                <div class="video-container">

                    <div class="app6">
                        <h2 class="video-title">Tiêu đề Video 1</h2>
                        <p class="date"><i style="color:#8e44ad;" class="fas fa-calendar"></i><span style="margin-left: 5px;">22-10-2022</span></p>
                    </div>
                    <video id="video-player" controls>
                        <source src="./public/videos/Túy Âm - Xesi x Masew x Nhatnguyen.mp4" type="video/mp4">
                    </video>
                </div>

                <div class="playlist-container">

                    <ul id="playlist">
                        <h3 style="position: relative; bottom: 6px;">Danh sách bài học và bài tập</h3>
                        <li class="playlist-item" data-title="Tiêu đề Video 1" data-video="./public/videos/Túy Âm - Xesi x Masew x Nhatnguyen.mp4">Bài học
                            1</li>
                        <li class="playlist-item" data-title="Tiêu đề Video 2" data-video="./public/videos/password strength checker javascript web app.mp4">Bài học
                            2</li>
                        <li class="playlist-item exercise" data-title="Bài tập 1" data-exercise="./public/videos/exercise.php">
                            Bài
                            tập 1</li>
                        <li class="playlist-item" data-title="Tiêu đề Video 3" data-video="./public/videos/3D popup card.mp4">
                            Bài học
                            3</li>
                        <li class="playlist-item exercise" data-title="Bài tập 2" data-exercise="path_to_exercise_2.html">Bài
                            tập 2</li>

                        <li class="playlist-item" data-title="Tiêu đề Video 1" data-video="./public/videos/Túy Âm - Xesi x Masew x Nhatnguyen.mp4">Bài học
                            1</li>
                        <li class="playlist-item" data-title="Tiêu đề Video 2" data-video="./public/videos/password strength checker javascript web app.mp4">Bài học
                            2</li>
                        <li class="playlist-item exercise" data-title="Bài tập 1" data-exercise="bai-tap-01.html">
                            Bài
                            tập 1</li>
                        <li class="playlist-item" data-title="Tiêu đề Video 3" data-video="./public/videos/3D popup card.mp4">
                            Bài học
                            3</li>
                        <li class="playlist-item exercise" data-title="Bài tập 2" data-exercise="path_to_exercise_2.html">Bài
                            tập 2</li>
                        <li class="playlist-item" data-title="Tiêu đề Video 1" data-video="./public/videos/Túy Âm - Xesi x Masew x Nhatnguyen.mp4">Bài học
                            1</li>
                        <li class="playlist-item" data-title="Tiêu đề Video 2" data-video="./public/videos/password strength checker javascript web app.mp4">Bài học
                            2</li>
                        <li class="playlist-item exercise" data-title="Bài tập 1" data-exercise="bai-tap-01.html">
                            Bài
                            tập 1</li>
                        <li class="playlist-item" data-title="Tiêu đề Video 3" data-video="./public/videos/3D popup card.mp4">
                            Bài học
                            3</li>
                        <li class="playlist-item exercise" data-title="Bài tập 2" data-exercise="path_to_exercise_2.html">Bài
                            tập 2</li>

                        <li class="playlist-item" data-title="Tiêu đề Video 1" data-video="./public/videos/Túy Âm - Xesi x Masew x Nhatnguyen.mp4">Bài học
                            1</li>
                        <li class="playlist-item" data-title="Tiêu đề Video 2" data-video="./public/videos/password strength checker javascript web app.mp4">Bài học
                            2</li>
                        <li class="playlist-item exercise" data-title="Bài tập 1" data-exercise="bai-tap-01.html">
                            Bài
                            tập 1</li>
                        <li class="playlist-item" data-title="Tiêu đề Video 3" data-video="./public/videos/3D popup card.mp4">
                            Bài học
                            3</li>
                        <li class="playlist-item exercise" data-title="Bài tập 2" data-exercise="path_to_exercise_2.html">Bài
                            tập 2</li>
                        <!-- Thêm các mục bài học và bài tập khác -->
                    </ul>
                </div>
            </div>

            <div class="tutor">
                <img src="./public/images/Alex Gonley.jpg" alt="">
                <div>
                    <h3><a href="./details-profile-teach.php">Quang Minh</a></h3>
                    <span>Giảng vien</span>
                </div>
            </div>

            <div class="btn-container">
                <button class="btn" id="prev-btn" disabled>Quay lại</button>
                <button class="comment-main-video">Bình luận</button>
                <button class="btn" id="next-btn">Tiếp theo</button>
            </div>


            <div class="modal hide">
                <div class="modal_inner">
                    <div class="app10">
                        <div class="container center__display">
                            <?php include 'comment.php'; ?>
                        </div>
                    </div>
                    <div class="modal_footer">
                        <button>Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="exercise-container" style="display: block; position: relative; bottom: 558px; margin-left: 28px;">
        </div>



        <script>
            // Bắt đầu nút sự kiện nút chuyển tiếp và nút quay lại
            const videoPlayer = document.getElementById('video-player');
            const playlistItems = document.querySelectorAll('.playlist-item');
            const exerciseContainer = document.getElementById('exercise-container');
            const videoTitle = document.querySelector('.video-title');
            const prevButton = document.getElementById('prev-btn');
            const nextButton = document.getElementById('next-btn');

            let currentPlaylistIndex = 0;

            videoPlayer.style.display = 'block';
            exerciseContainer.style.display = 'none';

            // Xử lý sự kiện khi người dùng nhấn nút Tiếp theo
            nextButton.addEventListener('click', () => {
                currentPlaylistIndex++;
                showContentByIndex(currentPlaylistIndex);
            });

            // Xử lý sự kiện khi người dùng nhấn nút Quay lại
            prevButton.addEventListener('click', () => {
                currentPlaylistIndex--;
                showContentByIndex(currentPlaylistIndex);
            });

            playlistItems.forEach((item, index) => {
                item.addEventListener('click', () => {
                    currentPlaylistIndex = index;
                    showContentByIndex(currentPlaylistIndex);
                });
            });

            function showContentByIndex(index) {
                const currentItem = playlistItems[index];
                const videoPath = currentItem.getAttribute('data-video');
                const exercisePath = currentItem.getAttribute('data-exercise');
                const title = currentItem.getAttribute('data-title');

                // Set the active playlist item
                playlistItems.forEach((item, idx) => {
                    if (idx === index) {
                        item.classList.add('active');
                    } else {
                        item.classList.remove('active');
                    }
                });

                // Adjust the scroll position to show the active playlist item
                const activeItem = document.querySelector('.playlist-item.active');
                if (activeItem) {
                    activeItem.scrollIntoView({
                        behavior: 'smooth',
                        block: 'nearest',
                        inline: 'start'
                    });
                }

                videoTitle.textContent = title;

                if (videoPath) {
                    videoPlayer.style.display = 'block';
                    exerciseContainer.style.display = 'none';
                    videoPlayer.src = videoPath;
                }

                if (exercisePath) {
                    videoPlayer.style.display = 'none';
                    exerciseContainer.style.display = 'block';
                    fetch(exercisePath)
                        .then(response => response.text())
                        .then(data => {
                            exerciseContainer.innerHTML = data;
                            bindQuizHandlers(); // Gọi hàm để xử lý câu hỏi trắc nghiệm
                        })
                        .catch(error => {
                            exerciseContainer.innerHTML = "<p>Không thể tải nội dung bài tập.</p>";
                            console.error(error);
                        });
                }

                // Disable nút Quay lại nếu đang ở mục đầu tiên
                prevButton.disabled = currentPlaylistIndex === 0;

                // Disable nút Tiếp theo nếu đang ở mục cuối cùng
                nextButton.disabled = currentPlaylistIndex === playlistItems.length - 1;
            }
            // Kết thúc sự kiện nút chuyển tiếp và nút quay lại

            function bindQuizHandlers() {
                const quizForm = document.getElementById('quiz-form');
                const quizSubmitButton = document.getElementById('quiz-submit');
                const quizResultsContainer = document.getElementById('quiz-results');

                quizForm.addEventListener('submit', (event) => {
                    event.preventDefault();
                    const inputs = quizForm.querySelectorAll('input[type="radio"]:checked');
                    let score = 0;

                    inputs.forEach(input => {
                        const answer = input.value;
                        const correctAnswer = input.getAttribute('data-correct');

                        if (answer === correctAnswer) {
                            score++;
                        }
                    });

                    const totalQuestions = quizForm.querySelectorAll('input[type="radio"]').length;
                    const scorePercentage = (score / totalQuestions) * 100;
                    quizResultsContainer.innerHTML = `<p>Số câu trả lời đúng: ${score}/${totalQuestions}</p>
                                      <p>Tỉ lệ đúng: ${scorePercentage.toFixed(2)}%</p>`;
                });

                quizSubmitButton.addEventListener('click', () => {
                    quizResultsContainer.style.display = 'block';
                });
            }

            // Bắt đầu Ẩn hiển khung bình luận
            var btnOpen = document.querySelector('.comment-main-video')
            var modal = document.querySelector('.modal')
            var iconClose = document.querySelector('.modal_header i')
            var btnClose = document.querySelector('.modal_footer button')

            function toggleModal(e) {
                modal.classList.toggle('hide')
            }
            btnOpen.addEventListener('click', toggleModal)
            btnClose.addEventListener('click', toggleModal)
            iconClose.addEventListener('click', toggleModal)
            modal.addEventListener('click', function(e) {
                if (e.target == e.currentTarget) {
                    toggleModal()
                }
            })
            // Kết thúc Ẩn hiển khung bình luận
        </script>
    </section>
</body>

</html>