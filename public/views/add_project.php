<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="/public/css/friends.css">
    <link rel="stylesheet" href="/public/css/add_trip.css">
    <link rel="stylesheet" href="/public/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b6de4b91fe.js" crossorigin="anonymous"></script>
    <title>New Trip</title>
</head>

<body>
<div class="base-container">
    <nav>
        <a href="trip"><img src="/public/img/logo2.png"></a>
        <ul>
            <li>
                <a href="trip"><i class="fas fa-hiking"></i></a>
                <a href="trip" class="button">Trips</a>
            </li>
            <li>
                <a href="friend">
                    <i class="fas fa-user-friends"></i></a>
                <a href="friend" class="button">Friend</a>
            </li>
            <li>
                <a href="messages"><i class="fas fa-envelope-open "></i></a>
                <a href="messages" class="button">Messages</a>
            </li>
            <li>
                <a href="notifications"><i class="fas fa-bell"></i></a>
                <a href="notifications" class="button">Notifications</a>
            </li>
            <li>
                <i class="fas fa-cog"></i>
                <a href="profile" class="button">Profile</a>
            </li>
        </ul>
    </nav>
    <main>
        <form onsubmit=noReload() action="addTrip" method="POST" ENCTYPE="multipart/form-data">
            <div class="messages">
                <?php
                if (isset($messages)) {
                    foreach ($messages as $message) {
                        echo $message;
                    }
                }
                ?>
            </div>
            <div class="first-line-container">
                <div class="first-line-left-container">
                    <input class="title" name="title" type="text" placeholder="title">
                    <input onkeypress="newPoint(event)" class="point-input" name="point"
                           type="text" placeholder="next point">
                </div>

                <div class="file-upload">
                    <input type="file" name="file" onchange="onFileSelected(event)" class="custom-file-input"/>
                </div>
            </div>
            <div class="create-trip-container">
                <input type="hidden"  class="places" name="places" value="whatever" />
            </div>
            <textarea name="description" placeholder="description"></textarea>


            <div class="date-container">
                <div class="date-input-container">
                    Start:
                    <input type="date" class="date-input" name="date_start"  placeholder="start">
                    <input type="time" class="date-input" name="time_start" >
                </div>
                <div class="date-input-container">
                    Finish:
                    <input type="date" class="date-input" name="date_finish"  placeholder="finish">
                    <input type="time" class="date-input" name="time_finish" ">

                </div>
            </div>
            <button type="submit">new trip</button>
        </form>


    </main>
</div>


</div>

</body>
<script src="/public/js/main.js" defer></script>
<script src="/public/js/add_trip.js" defer></script>
</html>