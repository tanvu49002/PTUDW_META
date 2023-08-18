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
    <?php $base_url = 'http://localhost/PTUDW_META/'; ?>
    <link rel="stylesheet" href="<?php echo $base_url; ?>./public/style/detailvideo1.css">
    <script>
        window.onload = function() {
            var liToSelect = document.getElementById('li-to-select'); // Thay 'li-to-select' bằng id thực sự của phần tử <li>
            liToSelect.classList.add('selected'); // Thêm class 'selected' vào phần tử <li>
        };
    </script>
    <style>
        .disabled {
            background-color: gray;
            pointer-events: none;
        }
    </style>
</head>

<body>
    <?php include './mvc/Views/masterlayout.php'; ?>


    <section id="section-main">

        <div class="app5">
            <div class="container">
                <div class="video-container" id="p1">
                <div class="app6">
                        <h2 class="video-title"><?php 
                            require_once "./mvc/Models/coursecontent.php";
                            $coursecontent = new coursecontent();
                            $Coursecontents = $coursecontent->showFirstCourseContentByCourseId($id_course);
                            echo $Coursecontents['title'];
                        ?></h2>
                        <p class="date"><i style="color:#8e44ad;" class="fas fa-calendar"></i><span class="video-create-date" style="margin-left: 5px;"><?php 
                            require_once "./mvc/Models/coursecontent.php";
                            $coursecontent = new coursecontent();
                            $Coursecontents = $coursecontent->showFirstCourseContentByCourseId($id_course);
                            echo $Coursecontents['create_date'];
                        ?></span></p>
                    </div>
                    <video id="video-player" controls>
                        <source src="<?php echo $base_url; ?>./public/uploads/<?php
                            require_once "./mvc/Models/coursecontent.php";
                            $coursecontent = new coursecontent();
                            require_once "./mvc/Models/image.php";
                            $image = new image();
                            $Coursecontents = $coursecontent->showFirstCourseContentByCourseId($id_course);
                            $video_path = $image->getImageNameById($Coursecontents['id_video']);
                            echo $video_path;
                        ?>">
                    </video>
                </div>
                
                <div class="playlist-container">

                    <ul id="playlist">
                        <h3 style="position: relative; bottom: 6px;">Danh sách bài học và bài tập</h3>
                        <?php
                            require_once "./mvc/Models/coursecontent.php";
                            $coursecontent = new coursecontent();
                            require_once "./mvc/Models/exercise.php";
                            $exercise = new exercise();
                            $tests = $coursecontent->showCourseContentByCourseId($id_course);
                            $_SESSION['video-title'] = $tests[0]['title'];



                            foreach ($tests as $test) {
                                echo $this->showContentList($test['title'], $test['id'], $test['id_video'], $test['create_date']) ;
                                $check = $exercise->checkExerciseByIdContent($test['id']);
                                if ($check ){
                                    echo $this->showExList($check['id'], $check['ex_content'], $check['solution1'], $check['solution2'], $check['solution3'], $check['result']);
                                }
                            }

                            require_once "./mvc/Models/learningprocess.php";
                            $learningprocess = new learningprocess();
                            
                            $status = $learningprocess->getStatusByIdCourseAndIdUser($id_course, $_SESSION['user']['id']);
                            $_SESSION['status_process'] = $status;


                        ?>
                        
                        <!-- Thêm các mục bài học và bài tập khác -->
                    </ul>
                </div>
                
            </div>
            <div id="exercise-container" style="top: -160px;width:500px; height: 400px; display: block; position: relative">
            <label for="question" id="question" >
            </label>
            <br>
            <label>
                <input type='radio' name='Options'>
                <label id="quest1" >A. </label>
            </label>
            <br>
            <label>
                <input type='radio' name='Options'>
                <label id="quest2" >B. </label>
            </label>
            <br>
            <label>
                <input type='radio' name='Options'>
                <label id="quest3" >C. </label>
            </label>
            <br>
                <button class="btn" id="checkAnswer">Xác nhận</button>
                <span id="right_answer" class="alert" style="display: none; color:green">Chính xác !</span>
                <span id="wrong_answer" class="alert" style="display: none; color:red">Sai! Câu trả lời chính xác là: </span>
            </div>

            <script>
                function createVideoWindow(){

                    const playlistItems = document.querySelectorAll('.playlist-item');


                    var VideoContainer = document.getElementById('p1');
                
                    var Div_App6 = document.createElement('div');
                    Div_App6.setAttribute('class', 'app6');

                    var newH2= document.createElement('h2');
                    newH2.setAttribute('class', 'video-title');


                        
                    
                    var p_date = document.createElement('p');
                    p_date.setAttribute('class', 'date');
                    

                    var p_i = document.createElement('i'); 
                    p_i.style = "color: rgb(142, 68, 173)"; 
                    p_i.setAttribute('class', 'fas fa-calendar');
                    
                    
                    var p_span = document.createElement('span');
                    p_span.setAttribute('class', 'video-create-date');
                    p_span.style = "margin-left: 5px;";
                    p_span.textContent = ``;

                    p_date.appendChild(p_i);
                    p_date.appendChild(p_span);
                    Div_App6.appendChild(newH2);
                    Div_App6.append(p_date);
                

                    VideoContainer.appendChild(Div_App6);


                    var videoDiv = document.createElement('video');
                    videoDiv.setAttribute('id', 'video-player');
                    videoDiv.setAttribute('controls', '');
                    videoDiv.style.display = 'block';

                    var videoSource = document.createElement('source');
                    videoSource.setAttribute('src', `\<?php echo $base_url; ?>./public/uploads/\<?php
                            require_once "./mvc/Models/coursecontent.php";
                            $coursecontent = new coursecontent();
                            require_once "./mvc/Models/image.php";
                            $image = new image();
                            $Coursecontents = $coursecontent->showFirstCourseContentByCourseId($id_course);
                            $video_path = $image->getImageNameById($Coursecontents['id_video']);
                            echo $video_path;
                        ?>`);

                    videoDiv.appendChild(videoSource);

                    VideoContainer.appendChild(videoDiv);

                }

             // window.onload = createVideoWindow;
            </script>

            

            <div class="tutor">
                
                <div>
                    <?php
                        require_once "./mvc/Models/user.php";
                        $user = new user();
                        require_once "./mvc/Models/course.php";
                        $course = new course();
                        $get_course = $course->getCourseById($id_course);
                        $tests = $user->getUserByID($get_course['id_user']);
                       
                        foreach ($tests as $test) {
                            echo $this->showTeacherByContent($test['displayname'], $test['id'], $test['id_avatar'] ) ;
                        }
                        
                    ?>
                    
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


        <script>
            
            // Bắt đầu nút sự kiện nút chuyển tiếp và nút quay lại
            const jSon = <?php echo json_encode($_SESSION['status_process']); ?>;
            const cnt = jSon['status'];
            console.log(cnt);
    
            const videoPlayer = document.getElementById('video-player');
            const playlistItems = document.querySelectorAll('.playlist-item');
            const exerciseContainer = document.getElementById('exercise-container');
            const videoTitle = document.querySelector('.video-title');
            const prevButton = document.getElementById('prev-btn');
            const nextButton = document.getElementById('next-btn');
            const CreateDate = document.querySelector('.video-create-date');

          


            videoPlayer.addEventListener("ended", function() {
                if(currentPlaylistIndex == cnt){
                    ++cnt;
                    ++currentPlaylistIndex;
                    nextButton.disabled = false; 
                }       
            });


            

            // const title = currentItem.getAttribute('data-title');
            // const date = currentItem.getAttribute('data-date');
            // videoTitle.textContent = title;
            // CreateDate.textContent = date;

            let currentPlaylistIndex = 0;
            showContentByIndex(currentPlaylistIndex);

            videoPlayer.style.display = 'block';
            exerciseContainer.style.display = 'none';


            // disable li haven't finished



            // Xử lý sự kiện khi người dùng nhấn nút Tiếp theo
            if(currentPlaylistIndex < cnt){
                nextButton.disabled = false;
                nextButton.addEventListener('click', () => {
                    if(currentPlaylistIndex != cnt - 1){
                        currentPlaylistIndex++;
                    }
                    showContentByIndex(currentPlaylistIndex);
                });
            }else{
                nextButton.disabled = true;
            }

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

            
            var Result;

            function checkExercise(){
                var radioButtons = document.getElementsByName('Options');
                var alphabet = Array('A', 'B', 'C');
                if(radioButtons[Result].checked){
                    document.getElementById('wrong_answer').style.display = 'none';
                    document.getElementById('right_answer').style.display = 'block';
                }
                else{
                    document.getElementById('right_answer').style.display = 'none';
                    var Wrong_answer = document.getElementById('wrong_answer');
                    Wrong_answer.style.display = 'block';
                    var Txt = Wrong_answer.textContent;
                    console.log(Txt.length);
                    if(Txt.length < 32){
                        Wrong_answer.textContent = Txt + ' ' + alphabet[Result];
                    }
                }
            }

            for(var i = cnt; i < playlistItems.length ; ++i){
                    // this.classList.remove('active');
                    playlistItems[i].classList.add('disabled');
                    console.log(i);
                }

            document.getElementById("checkAnswer").addEventListener('click', checkExercise);

            function showContentByIndex(index) {
                const currentItem = playlistItems[index];
                const videoPath = currentItem.getAttribute('data-video');
                const exercisePath = currentItem.getAttribute('data-exercise');
                const title = currentItem.getAttribute('data-title');
                const date = currentItem.getAttribute('data-date');
                const id = currentItem.getAttribute('data-id');
                // Set the active playlist item
                playlistItems.forEach((item, idx) => {
                    if (idx === index && idx < cnt) {
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
                }else{
                    activeItem = playlistItems[0];
                }


                videoTitle.textContent = title;
                CreateDate.textContent = date;
                if (videoPath) {
                    videoPlayer.style.display = 'block';
                    exerciseContainer.style.display = 'none';
                    
                    videoPlayer.src = videoPath;
                }

                else {
                    videoPlayer.style.display = 'none';
                    exerciseContainer.style.display = 'block';

                    document.getElementById('question').innerHTML = currentItem.getAttribute('data-question');
                    document.getElementById('quest1').textContent += currentItem.getAttribute('data-sol1');;
                    document.getElementById('quest2').textContent += currentItem.getAttribute('data-sol2');
                    document.getElementById('quest3').textContent += currentItem.getAttribute('data-sol3');
                    Result = currentItem.getAttribute('data-result');
                    // fetch(exercisePath)
                    //     .then(response => response.text())
                    //     .then(data => {
                    //         exerciseContainer.innerHTML = data;
                    //         bindQuizHandlers(); // Gọi hàm để xử lý câu hỏi trắc nghiệm
                    //     })
                    //     .catch(error => {
                    //         exerciseContainer.innerHTML = "<p>Không thể tải nội dung bài tập.</p>";
                    //         console.error(error);
                    //     });
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