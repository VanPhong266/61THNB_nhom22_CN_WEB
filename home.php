<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Edmodo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="shortcut icon" type="image/png" href="assets/img/icon.png" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top">
        <div class="container">
            <img src="assets/img/edmodo.png" alt="">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" style="margin-left:10px;" aria-current="page" href="home.php">Home</a>
                    </li>
                    
                </ul>
                <form class="d-flex">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="search" aria-label="search" aria-describedby="basic-addon1">
                        <span class="input-group-text" id="basic-addon1">
                            <button style="border:0px;"><svg xmlns="" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
                                    </path>
                                </svg></button>
                        </span>
                    </div>
                    <div class="btn-group">
                        <button class=" boxx" style="border-radius: 10px; border: 0px; background-color: rgb(206, 206, 206); padding: 10px; margin-left: 5px;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-alarm-fill" style="color: rgb(153, 153, 153);"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" style="width: 300px;height: 300px;">
                            <a style="text-decoration: none;font-size: 11px; color: rgb(179, 179, 179); margin-left: 5px;">NOTIFICATIONS</a>
                            <button type="button" class="btn btn-link" style="font-size: 12px; font-weight: 500; color: rgb(0, 85, 255);margin-left: 145px;"><span>See
                                    All</span></button>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <p style="text-align: center;font-size: 20px;">You have no notifications</p>
                            <p style="text-align: center;font-size: 15px; padding: 10px;">Important updates like class posts, assignments, and quizzes will appear here.</p>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button class=" " type="button" style="border-radius: 10px; border: 0px; margin-left: 5px;padding: 0px;" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://u.ph.edim.co/default-avatars/44_42.jpg" style="border-radius: 10px;" alt="">
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item samm" href="#">
                                    <i class="bi bi-person-fill" style="color: rgb(117, 117, 117);"></i> Profile
                                </a></li>
                            <hr class="dropdown-divider">
                            <li><a class="dropdown-item samm" href="#">
                                    <i class="bi bi-star-fill" style="color: rgb(117, 117, 117);"></i>What's New</a></li>
                            <li><a class="dropdown-item samm" href="#">
                                    <i class="bi bi-gear-fill" style="color: rgb(117, 117, 117);"></i>
                                    Setting </a></li>
                            <li><a class="dropdown-item samm" href="#">
                                    <i class="bi bi-question-circle-fill" style="color: rgb(117, 117, 117);"></i>Help Center</a></li>
                            <li><a class="dropdown-item samm" href="index.php">
                                    <i class="bi bi-box-arrow-in-right" style="color: rgb(117, 117, 117);"></i>Logout</a></li>
                        </ul>
                    </div>
                </form>
            </div>
        </div>
    </nav>
    <div class="main mt-5">
        <main class="main-about container">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3">
                        <div class="text-comde">
                            <div class="comde-12 d-flex" style=" border-radius: 5px;
                            padding: 20px; background-color: rgb(240, 240, 240);">
                                <img src="https://u.ph.edim.co/default-avatars/44_42.jpg" alt="">
                                <span>
                                    <p style="margin: 0px 10px;">phongdovan</p>
                                    <p style="margin: 0px 10px; font-size: 12px;"> View Profile</p>
                                </span>
                            </div>
                            <div class="comdo-13" style=" border-radius: 5px 5px 0 0; margin-top: 70px;
                                  padding: 20px 20px 5px 20px; background-color: rgb(240, 240, 240);">
                                <div class="d-flex">
                                    <p>MY CLASSES </p>
                                    <button style="border: 0px;margin-left: 100px;">
                                        <i class="bi bi-three-dots"></i>
                                    </button>
                                </div>
                                <p style="font-size: 14px; text-align: center; padding: 10px;">Get a Class Code from
                                    your teacher to join a class!</p>
                                <div class="icon_C" style="text-align: center;">
                                    <button style="border: 0px;">
                                        <svg width="24" height="24" viewBox="0 0 24 24">
                                            <path fill="#5c6178" fill-rule="evenodd" stroke="none" stroke-width="1" id="Icon/small/plus" d="M13 11h4a1 1 0 010 2h-4v4a1 1 0 01-2 0v-4H7a1 1 0 010-2h4V7a1 1 0 012 0v4z">
                                            </path>
                                        </svg>
                                    </button>
                                    <span>
                                        Join a Class
                                    </span>
                                    <hr style="height: 1px; margin: 0.5rem 1rem; color: rgb(0, 0, 0);">
                                </div>
                            </div>
                            <div class="comdo-13" style="
                                  padding: 20px 20px 5px 20px; background-color: rgb(240, 240, 240);">
                                <div class="d-flex">
                                    <p>MY GROUPS</p>
                                    <button style="border: 0px;margin-left: 100px;">
                                        <i class="bi bi-three-dots"></i>
                                    </button>
                                </div>
                                <p style="font-size: 14px; text-align: center; padding: 10px;">Get a Group Code from
                                    your teacher to join a group!</p>
                                <div class="icon_C " style="text-align: center; margin-bottom: 10px;">
                                    <button style="border: 0px;">
                                        <svg width="24" height="24" viewBox="0 0 24 24">
                                            <path fill="#5c6178" fill-rule="evenodd" stroke="none" stroke-width="1" id="Icon/small/plus" d="M13 11h4a1 1 0 010 2h-4v4a1 1 0 01-2 0v-4H7a1 1 0 010-2h4V7a1 1 0 012 0v4z">
                                            </path>
                                        </svg>
                                    </button>
                                    <span>
                                        Join a Group
                                    </span>
                                </div>
                                <hr style="height: 1px; margin: 0.5rem 1rem; color: rgb(0, 0, 0);">
                            </div>
                            <div class="comdo-13" style=" border-radius:0 0 5px 5px ;
                                  padding: 20px; background-color: rgb(240, 240, 240);">
                                <div class="d-flex">
                                    <p>MY CLASSES </p>
                                    <p style="margin-left: 110px; color: blue;">0</p>
                                </div>
                                <div class="icon_C" style="text-align: center;">
                                    <button style="border: 0px;">
                                        <svg width="24" height="24" viewBox="0 0 24 24">
                                            <path fill="#5c6178" fill-rule="evenodd" stroke="none" stroke-width="1" id="Icon/small/plus" d="M13 11h4a1 1 0 010 2h-4v4a1 1 0 01-2 0v-4H7a1 1 0 010-2h4V7a1 1 0 012 0v4z">
                                            </path>
                                        </svg>
                                    </button>
                                    <span>
                                        Invite a parent
                                    </span>
                                    <hr style="height: 1px; margin: 0.5rem 1rem; color: rgb(0, 0, 0);">
                                    <P style="font-size: 12px;">Give this code to your parents so they can create an
                                        Edmodo account:</P>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="commit-text mt-5">
                            <form action="process-add.php" method="POST" enctype="multipart/form-data">
                                <div class="textcomit" style=" border-radius: 5px;
                            padding: 20px; background-color: rgb(240, 240, 240);">
                                    <input type="text" name="content" style="height: 66px;" class="form-control" placeholder="Type your note here..." aria-label="" aria-describedby="basic-addon1">
                                    <input type="text" style="margin-top: 15px;" class="form-control" placeholder="select a group..." aria-label="" aria-describedby="basic-addon1">
                                    <div class="icon-img" style="padding: 1rem ;color: rgb(124, 124, 124);">
                                        <div class="text-cancel">
                                            <div class="cancel">
                                                <span style="display: inline-block; ">
                                                    <input type="file" name="image">
                                                </span>
                                                <div class=" center-s" style="float: right;">
                                                    <button data-action="postbox-reset" class="btn btn-link"><span>Cancel</span></button>
                                                    <span class="action"><span>or</span></span>
                                                    <button type="submit" name="Post" data-action="postbox-submit" role="button" class="post-btn qa-test-post-btn btn btn-primary ">Post</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="dropdown" style="float:right; border:0px;">
                                <button class=" dropdown-toggle" style="border: 0px; background-color: white;font-size: 13px; color: rgb(129, 129, 129);" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                    Filter posts by
                                </button>
                                <ul class="dropdown-menu" style="width: 200px;height: 150px;" aria-labelledby="dropdownMenu2">
                                    <div class="button-2"> <span style="font-size: 14px; color: rgb(165, 165, 165);">AUTHOR</span>
                                        <button class="dropdown-item" style="font-size: 14px;" type="button">By
                                            Me</button>
                                        <button class="dropdown-item" style="font-size: 14px;" type="button">By
                                            Others</button>
                                    </div>
                                    <div class="button-2"> <span style="font-size: 14px; color: rgb(165, 165, 165);">TYPE</span>
                                        <button class="dropdown-item" style="font-size: 14px;" type="button">Latest
                                            Post</button>
                                        <button class="dropdown-item" style="font-size: 14px;" type="button">LatestActiviy</button>
                                        <button class="dropdown-item" style="font-size: 14px;" type="button">Assignments</button>
                                        <button class="dropdown-item" style="font-size: 14px;" type="button">Polls</button>
                                        <button class="dropdown-item" style="font-size: 14px;" type="button">Quizzes</button>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mt-5">
                        <div class="upcom">
                            <div class="upcom01">
                                <div class="tilige " style="background-color: rgb(240, 240, 240);  border-radius: 5px">
                                    <div class="add-button d-flex" style="border-bottom: 1px solid rgb(190, 190, 190);padding: 10px;">
                                        <p style="margin: 0px;">Upcoming</p>
                                        <button style="border: 0px; background-color: rgb(240, 240, 240); margin-left: 140px;">
                                            <svg width="24" height="24" viewBox="0 0 24 24">
                                                <path fill="#5c6178" fill-rule="evenodd" stroke="none" stroke-width="1" id="Icon/small/plus" d="M13 11h4a1 1 0 010 2h-4v4a1 1 0 01-2 0v-4H7a1 1 0 010-2h4V7a1 1 0 012 0v4z">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                    <ul class="list-group">
                                        <div class="empty" style="padding: 10px;">
                                            <div class="icon-wrapper d-flex">
                                                <div class="icon">
                                                    <i class="bi bi-emoji-laughing" style="color: rgb(129, 129, 129);"></i>
                                                </div>
                                                <div class="tip" style="font-size: 15px; color: rgb(177, 177, 177); padding-left: 5px;">
                                                    That's all for now</div>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                                <div class="logoa">
                                    <p style="font-size: 10px;">Edmodo © 2022</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
<<<<<<< Updated upstream
=======

>>>>>>> Stashed changes
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>