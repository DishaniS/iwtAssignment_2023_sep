<?php
    include 'header.php';
    include"config.php";
    session_start();
    if(!isset($_SESSION['name']))
    {
        header("Location: dhanushiLogin.php");
        exit();
    }
?>

<style>
    .video-library{ 
        padding: 5px;   
    }
    .video-library-catogories{
        background-color: rgb(255, 255, 255, 0.2);
        border: 1px solid black;
        border-radius: 10px;
        padding: 5px;   
    }
    .video-library-catogories ul{
        list-style-type: none;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
    }
    .video-library-catogories ul li{
        padding: 5px;
    }
    .video-library-catogories ul li:hover{
        background-color: rgb(176, 186, 181);
        color: black;
        border-radius: 20px;
        transition:0.3s;
    }
    .video-library-catogories ul li a{
        text-decoration: none;
        color: black;
        padding: 8px;
    }
    .recomended-video{
        padding: 5px;
    }
    .recomended-text{
        padding: 5px;
    }
    .recomended-video-tiles{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
    }
    .video-tile{
        background-color: rgb(255, 255, 255, 0.2);
        border: 1px solid black;
        border-radius: 10px;
        padding: 5px;
        margin: 5px;
    }
    .video-tile img{
        width: 100%;
        height: 200px;
        border-radius: 10px;
    }
    .video-tile h3{
        text-align: center;
        padding: 5px;
    }
    .video-tile a{
        text-decoration: none;
        color: black;
        padding: 5px;
        border-radius: 20px;
        transition:0.3s;
    }
    .video-tile a:hover{
        background-color: rgb(176, 186, 181);
        color: black;
        padding: 5px;
        border-radius: 20px;
        transition:0.3s;
    }
    .video-tile p{
        text-align: center;
        padding: 5px;
    }
    .new-videos{
        padding: 5px;
    }
    .new-videos-text{
        padding: 5px;
    }
    .new-videos-tiles{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
    }
    .video-tile{
        background-color: rgb(255, 255, 255, 0.2);
        border: 1px solid black;
        border-radius: 10px;
        padding: 5px;
        margin: 5px;
    }
    .video-tile img{
        width: 100%;
        height: 200px;
        border-radius: 10px;
    }
    .video-tile h3{
        text-align: center;
        padding: 5px;
    }
    .video-tile a{
        text-decoration: none;
        color: black;
        padding: 5px;
        border-radius: 20px;
        transition:0.3s;
    }
    .video-tile a:hover{
        background-color: rgb(116, 186, 161);
        color: black;
        padding: 5px;
        border-radius: 20px;
        transition:0.3s;
    }
    .video-tile p{
        text-align: center;
        padding: 5px;
    }
    .video-tile:hover{
        background-color: rgb(176, 176, 181);
        color: black;
        padding: 5px;
        border-radius: 20px;
        transition:0.3s;
        transform: scale(1.1);
    }

</style>

<div class="video-library">
    <div class="vidoe-library-catogories">
        <div class="video-library-catogories">
            <ul>
                <li><a href="#">All</a></li>
                <li><a href="#">Abs</a></li>
                <li><a href="#">Arms</a></li>
                <li><a href="#">Back</a></li>
                <li><a href="#">Chest</a></li>
                <li><a href="#">Legs</a></li>
                <li><a href="#">Shoulders</a></li>
            </ul>
        </div>
    </div>
    <div class="recomended-video">
        <div class="recomended-text">
            <h2>Recomended</h2>
        </div>
        <div class="recomended-video-tiles">
            <div class="video-tile">
                <img src="images/abs.jpeg" alt="">
                <h3>Abdominal Crunches</h3>
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Watch Video</a>
                <p>Abdominal Crunches</p>
            </div>
            <div class="video-tile">
                <img src="images/abs.jpeg" alt="">
                <h3>Abdominal Crunches</h3>
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Watch Video</a>
                <p>Abdominal Crunches</p>
            </div>
            <div class="video-tile">
                <img src="images/abs.jpeg" alt="">
                <h3>Abdominal Crunches</h3>
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Watch Video</a>
                <p>Abdominal Crunches</p>
            </div>
        </div>
    </div>
    <div class="new-videos">
        <div class="new-videos-text">
            <h2>New Videos</h2>
        </div>
        <div class="new-videos-tiles">
            <div class="video-tile">
                <img src="images/abs.jpeg" alt="">
                <h3>Abdominal Crunches</h3>
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Watch Video</a>
                <p>Abdominal Crunches</p>
            </div>
            <div class="video-tile">
                <img src="images/abs.jpeg" alt="">
                <h3>Abdominal Crunches</h3>
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Watch Video</a>
                <p>Abdominal Crunches</p>
            </div>
            <div class="video-tile">
                <img src="images/abs.jpeg" alt="">
                <h3>Abdominal Crunches</h3>
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Watch Video</a>
                <p>Abdominal Crunches</p>
            </div>
        </div>
    </div>
</div>

<?php
    include 'footer.php';
?>
