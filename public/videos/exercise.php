<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 1 - Trắc nghiệm</title>
</head>

<body>
    <form id="quiz-form">
        <p>Câu 1: 2 + 2 = ?</p>
        <label>
            <input type="radio" name="q1" value="1" data-correct="false"> 3
        </label>
        <label>
            <input type="radio" name="q1" value="2" data-correct="true"> 4
        </label>
        <label>
            <input type="radio" name="q1" value="3" data-correct="flase"> 5
        </label>

        <p>Câu 2: 6 x 7 = ?</p>
        <label>
            <input type="radio" name="q2" value="1" data-correct="false"> 41
        </label>
        <label>
            <input type="radio" name="q2" value="2" data-correct="true"> 42
        </label>
        <label>
            <input type="radio" name="q2" value="3" data-correct="false"> 43
        </label>

        <button id="quiz-submit">Nộp bài</button>
    </form>
    <div id="quiz-results" style="display: none;"></div>


</body>

</html>