<?php include_once "./db.php";?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Albert's Portfolio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="short icon" href="./personal.jpg">
</head>

<body>

    <!-- nav -->
    <nav class="nav-flex">
        <div>
            <span class="logo"><a href="#">Albert's BlOG</a></span>
            <a class="icon"><i class="fa fa-bars"></i></a>
        </div>
        <ul class="menu">
            <li><a href="#" class="nav-scroll-underline">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#experience">Experience</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <!-- home -->
    <section class="home" id="home">
        <section class="container intro">
            <section class="intro_myself">
                <h1><?=$About -> find(1)['name']?></h1>
                <h4><?=$About -> find(1)['title']?></h4>
                <ul>
                    <li><a href="mailto:mso729049@gmail.com"><i class="far fa-envelope"></i></a></li>
                    <li><a href="https://github.com/albert199577"><i class="fab fa-github"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/albert-kao-2037b9228/"><i
                                class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </section>
            <section class="img">
                <img src="./personal.jpg" alt="">
            </section>
        </section>
    </section>

    <!-- about -->
    <section class="about-page" id="about">
        <section class="about-title container">
            <h1>About</h1>
        </section>
        <section class="about-content container">
            <section class="svg">
                <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" width="878.63037" height="483"
                    viewBox="0 0 878.63037 483" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <path
                        d="M294.7164,621.20348c-19.51084,14.54436-25.04043,40.13465-25.04043,40.13465s26.10369,2.00928,45.61453-12.53511,25.04043-40.13465,25.04043-40.13465S314.22725,606.65916,294.7164,621.20348Z"
                        transform="translate(-160.68481 -208.5)" fill="#f1f1f1" />
                    <path
                        d="M302.84375,628.03207c-9.37708,22.45621-32.86178,34.02822-32.86178,34.02822s-8.28141-24.83665,1.09568-47.29286,32.86172-34.02822,32.86172-34.02822S312.22084,605.57587,302.84375,628.03207Z"
                        transform="translate(-160.68481 -208.5)" fill="#f1f1f1" />
                    <path
                        d="M864.18723,563.11405h0a194.65688,194.65688,0,0,1-1.63336-42.19544l1.63336-23.307h0c-9.00016,17.90831-6.96615,41.47881,0,65.50242Z"
                        transform="translate(-160.68481 -208.5)" fill="#cacaca" />
                    <path
                        d="M871.20535,567.013h0a143.0906,143.0906,0,0,1-.78588-25.11633l.78588-13.87323h0C866.87509,538.68318,867.85373,552.71319,871.20535,567.013Z"
                        transform="translate(-160.68481 -208.5)" fill="#cacaca" />
                    <path
                        d="M902.40062,584.17028v7.79791a2.3515,2.3515,0,0,1-2.33937,2.33937h-3.899a.777.777,0,0,0-.77979.77979v63.94288a2.35149,2.35149,0,0,1-2.33937,2.33937H845.47587a2.34116,2.34116,0,0,1-2.33938-2.33937V595.08735a.78216.78216,0,0,0-.77979-.77979H837.678a2.34117,2.34117,0,0,1-2.33937-2.33937v-7.79791a2.33615,2.33615,0,0,1,2.33937-2.33938h62.3833A2.3464,2.3464,0,0,1,902.40062,584.17028Z"
                        transform="translate(-160.68481 -208.5)" fill="#f2f2f2" />
                    <rect x="682.52174" y="387.4451" width="52.24601" height="2.33937" fill="#e6e6e6" />
                    <path
                        d="M895.3825,630.36884c-17.48271,7.23486-35.15611,7.31459-53.0258,0v-16.481a83.27378,83.27378,0,0,1,53.0258,0Z"
                        transform="translate(-160.68481 -208.5)" fill="#e6e6e6" />
                    <circle id="fff0188c-9915-4c0d-8339-9317a77083e8" data-name="Ellipse 276" cx="441.8526"
                        cy="99.21067" r="70.6659" fill="#feb8b8" />
                    <path id="ac220ed6-7c3f-4d1e-8d82-3295770c496a-1951" data-name="Path 1461"
                        d="M668.54008,246.746a81.61376,81.61376,0,0,0-46.43-35.49166l-8.6754,6.33079v-8.22035a75.12281,75.12281,0,0,0-14.03207-.81741l-7.48468,6.7722V209.11a80.83444,80.83444,0,0,0-55.76328,33.16889c-16.25407,23.43225-18.99783,56.03165-3.01076,79.65191,4.38811-13.48715,9.71486-26.14193,14.1043-39.62775a39.91571,39.91571,0,0,0,10.39873.05039l5.339-12.45857,1.49177,11.93136c16.54971-1.44138,41.0963-4.60742,56.785-7.50784l-1.52581-9.15355,9.12769,7.606c4.80635-1.10624,7.66041-2.11028,7.42476-2.87726,11.66844,18.81119,25.94847,30.82566,37.61558,49.63682C678.33663,293.0056,683.43725,270.95065,668.54008,246.746Z"
                        transform="translate(-160.68481 -208.5)" fill="#2f2e41" />
                    <path
                        d="M754.51974,489.43043c-2.43-14.61929-4.93649-29.51921-11.73089-42.68893-4.46552-8.62629-11.55394-16.84664-21.1096-18.55231a20.4215,20.4215,0,0,1-5.49659-1.27245c-2.79985-1.34871-40.42516-22.82733-46.40535-26.56828-5.13471-3.21152-13.24023-9.158-17.32725-9.158-4.11163-.09038-19.87765,3.579-81.41374-1.23129,0,0-16.90485,6.66319-29.98543,14.74285-.19823-.13063-63.869,34.06031-66.261,33.97034-4.53005-.19075-8.74079,2.70971-11.33775,6.36219-2.5963,3.65239-3.81429,8.174-5.08948,12.54576,13.90677,30.97,26.6308,61.97961,40.5389,92.94963a7.93068,7.93068,0,0,1,1.00579,3.81454,9.30964,9.30964,0,0,1-1.7302,3.81453c-6.82034,10.95592-6.60348,24.736-5.85845,37.61284.74569,12.87686,1.66766,26.47839-4.087,38.02019-1.56523,3.16878-3.60075,6.06924-5.08948,9.238-3.48634,7.17681-4.74624,30.13086-2.71,37.84166l255.12065,7.30869C730.06748,673.1021,754.51974,489.43043,754.51974,489.43043Z"
                        transform="translate(-160.68481 -208.5)" fill="#00b0ff" />
                    <path id="bb46eb08-8e3e-4ac5-913b-26d221d967b9-1952" data-name="Path 1421"
                        d="M436.31023,551.90313a45.04293,45.04293,0,0,0-.15258,11.10851l3.65653,52.51275c.34331,4.94938.68117,9.88653,1.14573,14.82359.87734,9.58136,2.18792,19.08639,3.81455,28.57778a5.08966,5.08966,0,0,0,5.21639,4.94937c16.096,3.40585,32.72612,3.26965,49.15321,2.34185,25.067-1.39909,89.1978-4.0461,93.11589-9.13583s1.63483-13.32231-3.474-17.43793-89.73865-14.14932-89.73865-14.14932c.82693-6.55285,3.32139-12.72429,5.68777-18.946,4.25049-11.03491,8.22035-22.43228,8.29664-34.2533s-4.37719-24.24962-14.0607-31.02182c-7.9656-5.5597-18.22129-6.591-27.928-6.3621-7.06238.203-19.26485-1.48907-25.71553,1.27245C440.22288,538.431,437.26387,546.90479,436.31023,551.90313Z"
                        transform="translate(-160.68481 -208.5)" fill="#fbbebe" />
                    <path id="efe93a1e-ccdd-49fd-af5f-e26394aa0937-1953" data-name="Path 1430"
                        d="M457.62676,458.523a13.16962,13.16962,0,0,0-2.82413,4.51753A213.58786,213.58786,0,0,0,436.862,536.35613a7.32926,7.32926,0,0,1-.82693,3.55028,15.53466,15.53466,0,0,1-1.87049,2.023,7.02422,7.02422,0,0,0,.84,9.89817q.17346.1463.35609.28121c2.09937-3.95082,7.125-5.24231,11.59215-5.58556,21.38872-1.692,42.28155,8.25852,63.73432,7.50784-1.51355-5.23-3.69057-10.25571-4.92486-15.54841-5.4589-23.50169,8.15632-49.08916-.19073-71.72579-1.6675-4.52979-4.45348-8.98325-8.84294-10.96818a23.55527,23.55527,0,0,0-5.66189-1.49858c-5.42075-.97952-16.21183-5.166-21.45275-3.48622-1.93452.624-2.69742,2.44268-4.3009,3.54209C462.87722,455.90186,459.64576,456.474,457.62676,458.523Z"
                        transform="translate(-160.68481 -208.5)" fill="#00b0ff" />
                    <path id="a38c3c09-000b-42b7-8619-0229d8aff5e9-1954" data-name="Path 1421"
                        d="M754.67242,536.1831c-6.45068-2.76152-18.65315-1.06948-25.71553-1.27245-9.70666-.22892-19.96235.8024-27.928,6.3621-9.68351,6.7722-14.137,19.2008-14.0607,31.02182s4.04615,23.21839,8.29664,34.2533c2.36638,6.22174,4.86084,12.39318,5.68777,18.946,0,0-84.62988,10.0337-89.73865,14.14932s-7.39205,12.34819-3.474,17.43793,126.17305,10.19983,142.2691,6.794a5.08966,5.08966,0,0,0,5.21639-4.94937c1.62663-9.49139,2.93721-18.99642,3.81455-28.57778.46456-4.93706.80242-9.87421,1.14573-14.82359l3.65653-52.51275a45.04293,45.04293,0,0,0-.15258-11.10851C762.73613,546.90479,759.77712,538.431,754.67242,536.1831Z"
                        transform="translate(-160.68481 -208.5)" fill="#fbbebe" />
                    <path id="bd3879bf-5d05-49be-b690-c4d97e29a2ab-1955" data-name="Path 1430"
                        d="M734.68691,454.346c-1.60348-1.09941-2.36638-2.91813-4.3009-3.54209-5.24092-1.67976-16.032,2.5067-21.45275,3.48622a23.55527,23.55527,0,0,0-5.66189,1.49858c-4.38946,1.98493-7.17544,6.43839-8.84294,10.96818-8.34705,22.63663,5.26817,48.2241-.19073,71.72579-1.23429,5.2927-3.41131,10.3184-4.92486,15.54841,21.45277.75068,42.3456-9.19987,63.73432-7.50784,4.46712.34325,9.49278,1.63474,11.59215,5.58556q.18253-.13482.35609-.28121a7.02422,7.02422,0,0,0,.84005-9.89817,15.53466,15.53466,0,0,1-1.87049-2.023,7.32926,7.32926,0,0,1-.82693-3.55028,213.58786,213.58786,0,0,0-17.94066-73.31562,13.16962,13.16962,0,0,0-2.82413-4.51753C740.35424,456.474,737.12278,455.90186,734.68691,454.346Z"
                        transform="translate(-160.68481 -208.5)" fill="#00b0ff" />
                    <circle cx="420.92361" cy="438.81028" r="19.07275" fill="#fbbebe" />
                    <circle cx="463.15612" cy="438.81028" r="19.07275" fill="#fbbebe" />
                    <path
                        d="M741.57233,690.28819H479.54154a11.55237,11.55237,0,0,1-11.53931-11.53864V519.78292a11.55237,11.55237,0,0,1,11.53931-11.53864H741.57233a11.55237,11.55237,0,0,1,11.5393,11.53864V678.74955A11.55237,11.55237,0,0,1,741.57233,690.28819Z"
                        transform="translate(-160.68481 -208.5)" fill="#3f3d56" />
                    <circle id="bf1cdf42-3b4f-4239-91c9-f6802a29e918" data-name="Ellipse 263" cx="449.2365"
                        cy="390.76627" r="7.63455" fill="#fff" />
                    <polygon
                        points="878.63 449.724 0 449.724 0 476.724 51.97 476.724 51.97 483 826.68 483 826.68 476.724 878.63 476.724 878.63 449.724"
                        fill="#f1f1f1" />
                    <path
                        d="M537.55552,334.04923h0c-11.3546,0-20.55934-9.95244-20.55934-22.22945h0V300.705c0-12.277,9.20473-22.22945,20.55933-22.22945h0v55.57369Z"
                        transform="translate(-160.68481 -208.5)" fill="#00b0ff" />
                    <path
                        d="M668.77923,278.47558h0c11.35461,0,20.55935,9.95245,20.55935,22.22943v11.11477c0,12.277-9.20472,22.22945-20.55935,22.22945h0V278.47558Z"
                        transform="translate(-160.68481 -208.5)" fill="#00b0ff" />
                    <path
                        d="M679.55259,302.45164h-3.262c0-44.73-33.65638-81.12069-75.026-81.12069-41.36939,0-75.02605,36.3907-75.02605,81.12069h-3.262c0-46.6749,35.11988-84.64766,78.288-84.64766C644.433,217.804,679.55259,255.77677,679.55259,302.45164Z"
                        transform="translate(-160.68481 -208.5)" fill="#00b0ff" />
                </svg>
            </section>
            <section class="about-intro">
                <h4><?=$About -> find(1)['intro']?></h4>
                <ul class="about-skill">
                    <li><i class="fab fa-html5" aria-hidden="true"></i>HTML</li>
                    <li><i class="fab fa-css3-alt" aria-hidden="true"></i>CSS</li>
                    <li><i class="fab fa-js-square" aria-hidden="true"></i>JAVASCRIPT</li>
                    <li><i class="fab fa-bootstrap" aria-hidden="true"></i>BOOSTRAP</li>
                    <li><i class="fab fa-sass" aria-hidden="true"></i>SASS</li>
                    <li><i class="fab fa-php" aria-hidden="true"></i>PHP</li>
                </ul>
            </section>
        </section>

    </section>

    <!-- experience -->
    <section class="experience-page" id="experience">
        <section class="experience-title container">
            <h1>experience</h1>
        </section>
        <section class="experience-content container">
            <section class="education">
                <ul>
                    <li>
                        <h3>education</h3>
                    </li>
                    <?php
                    $edu = $Exp -> all();
                    foreach ($edu as $key => $value) {
                    ?>
                    <li>
                        <p><?=$value['date']?></p>
                        <h5><?=$value['title']?></h5>
                        <h4><?=$value['department']?></h4>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
            </section>
            <section class="work-experience">
                <ul>
                    <li>
                        <h3>work-experience</h3>
                    </li>
                    <?php
                    $workExp = $Work -> all();
                    foreach ($workExp as $key => $value) {
                    ?>
                    <li>
                        <p><?=$value['date']?></p>
                        <h5><?=$value['title']?></h5>
                        <h4><?=$value['department']?></h4>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
            </section>
        </section>

    </section>

    <!-- portfolio -->
    <section class="portfolio-page" id="portfolio">
        <section class="intro container">
            <h1>Portfolio</h1>
            <!-- <p>Freelance Creative & Professional Graphics Designer</p> -->
        </section>
        <section class="container list-menu">
            <ul class="portfolio-list-menu">
                <li class="btn-color">ALL</li>
                <li>WEB</li>
                <li>DESIGN</li>
            </ul>
        </section>
        <?php 
            $portfolio = $Portfolio -> all(['sh' => 1]);
        ?>
        <ul class="container portfolio-list">
            <?php
            foreach ($portfolio as $key => $value) {
            ?>
            <li class="imageContainer <?=$value['class'];?>">
                <img src="./img/<?=$value['img'];?>" alt="">
                <div class="cover">
                    <div class="cover-flex">
                        <span><a href="<?=$value['url'];?>"><i class="fas fa-search"></i></a></span>
                        <span><a href="<?=$value['github_url'];?>"><i class="fab fa-github"></i></a></span>
                    </div>
                    <h5><?=$value['name'];?></h5>
                </div>
            </li>
            <?php
            }
            ?>
        </ul>
    </section>
    <!-- contact -->
    <section class="contact-page" id="contact">
        <main class="container">
            <h1>Contact</h1>
            <div class="border border-info p-4 mx-auto my-5 col-sm-11 col-md-8">
                <div class="row my-3">
                    <div class="col-12 col-md-6">
                        <label for="">Your name</label>
                        <input type="text" class="form-control" name="name" id="name" required>
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="">Your mail</label>
                        <input type="text" class="form-control" name="mail" id="mail" required>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col">
                        <label for="exampleFormControlTextarea1">Subject</label>
                        <input type="text" class="form-control" name="subject" id="subject" required>
                    </div>
                </div>
                <div class="form-group  my-3">
                    <label for="exampleFormControlTextarea1">Message</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" id="message" required></textarea>
                </div>
                <button class="btn btn-info mx-auto" onclick="saveContact()">Submit</button>
            </div>
        </main>
    </section>
    <footer class="footer">
        <p>All right reserved <a href="./backstage.php">Albert Kao</a> @ 2022</p>
        <ul>
            <li><a href="mailto:mso729049@gmail.com"><i class="far fa-envelope"></i></a></li>
            <li><a href="https://github.com/albert199577"><i class="fab fa-github"></i></a></li>
            <li><a href="https://www.linkedin.com/in/albert-kao-2037b9228/"><i class="fab fa-linkedin-in"></i></a></li>
        </ul>
    </footer>
    <section class="mmodal">
            <section class="modal-con">
                <section>
                    <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" width="100%" height="100%" viewBox="0 0 894.24907 448.2822" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M447.36954,674.1411q-40.47485,0-80.82885-1.44922c-38.44043-1.38086-78.18993-2.80762-115.13556-23.29883-25.84506-14.333-48.73487-37.3291-66.19418-66.50391a223.77042,223.77042,0,0,1-25.36927-63.60449,261.47594,261.47594,0,0,1,.95286-123.77929,219.83406,219.83406,0,0,1,14.7411-40.40039c26.94295-55.79346,76.08491-93.2461,134.82585-102.75391a6.80653,6.80653,0,0,1,1.463-.03125c.26419.01416.52753.0293.796.01807l.3456-.10987a16.88152,16.88152,0,0,1,2.72076-.69824c90.59405-13.48682,186.365,13.80176,276.95228,78.91357,70.04208,50.35108,162.86753,77.46436,283.78131,82.88916l1.71659.08985c33.6596,1.93359,66.21835,15.81054,94.16038,40.13281,27.57946,24.00586,48.28706,56.03418,59.88378,92.624,1.42568,4.46094,2.73262,9.1045,3.88437,13.80079a26.0388,26.0388,0,0,1-6.941,24.69042v.00879l-.30109.30957c-.72471.72071-1.48759,1.41211-2.26743,2.05567l-.91682.75586c-7.72718,6.36523-13.83023,11.39355-21.13462,15.29883a64.98321,64.98321,0,0,1-15.41875,5.82128c-29.46525,7.1836-59.38763,13.84375-88.936,19.79688-57.3848,11.57031-116.28137,21.11523-175.05411,28.36816A2269.14089,2269.14089,0,0,1,447.36954,674.1411Zm-136.232-419.84522a3.50685,3.50685,0,0,0-.5394.03662c-58.19178,9.41895-106.86855,46.50391-133.54434,101.74512a217.62434,217.62434,0,0,0-14.59523,40,259.18846,259.18846,0,0,0-.941,122.68067,221.62191,221.62191,0,0,0,25.12332,62.99609c17.28842,28.88867,39.94414,51.6543,65.51823,65.83594,36.614,20.30761,76.17609,21.72851,114.43587,23.10156a2266.31375,2266.31375,0,0,0,358.31544-15.59473c58.73458-7.249,117.593-16.78711,174.94-28.35058,29.52843-5.94825,59.43-12.60352,88.87535-19.78321a63.35819,63.35819,0,0,0,15.04728-5.67871c7.15725-3.82617,13.20219-8.80664,20.85517-15.11133l.91681-.75488c.67044-.55371,1.32858-1.14551,1.9583-1.76074l.18065-.18945c6.2892-6.33887,8.73475-14.70215,6.70987-22.94434v-.001c-1.13944-4.64648-2.4324-9.24023-3.84366-13.65527-23.69-74.74609-84.97359-127.56934-152.49635-131.44727l-1.70726-.08984c-55.23185-2.47851-103.56386-9.34375-147.75156-20.99023-52.74984-13.90235-98.80127-34.83008-136.87574-62.20069-90.24209-64.8623-185.61273-92.04931-275.81114-78.62646a15.47307,15.47307,0,0,0-2.47862.64258l-.62294.17431a9.37442,9.37442,0,0,1-1.06184-.01269C311.53655,254.30663,311.3347,254.29588,311.13751,254.29588Z" transform="translate(-152.87546 -225.8589)" fill="#f0f0f0"/><path d="M432.2022,371.9146c-2.498-2.39659-5.05306-15.76155-8.24216-17.11834,2.38389,5.2686.65305,6.66348.64035,12.44567a39.12306,39.12306,0,0,1-1.14125,9.74477H369.435V334.82486a28.84672,28.84672,0,0,1,28.84757-28.84758,17.21385,17.21385,0,0,1,4.27584.626A27.42847,27.42847,0,0,1,421.909,326.0071C426.02756,341.06071,432.57759,366.11854,432.2022,371.9146Z" transform="translate(-152.87546 -225.8589)" fill="#2f2e41"/><path d="M372.605,423.78163l.02663-32.86268L353.314,392.64521l6.81759,20.7264-3.19073,52.09644a8.17282,8.17282,0,1,0,9.88987,6.88859Z" transform="translate(-152.87546 -225.8589)" fill="#ffb6b6"/><polygon points="257.746 432.76 265.55 432.759 269.263 402.657 257.744 402.657 257.746 432.76" fill="#ffb6b6"/><path d="M407.97822,654.76874l12.33707-.73635v5.28573l11.7292,8.10061a3.30167,3.30167,0,0,1-1.87612,6.01864H415.48062L412.949,668.209l-.98849,5.2284h-5.53786Z" transform="translate(-152.87546 -225.8589)" fill="#2f2e41"/><polygon points="212.62 432.76 220.425 432.759 224.137 402.657 212.619 402.657 212.62 432.76" fill="#ffb6b6"/><path d="M362.85281,654.76874l12.33707-.73635v5.28573l11.72919,8.10061a3.30167,3.30167,0,0,1-1.87612,6.01864H370.35521l-2.53166-5.2284-.98848,5.2284H361.2972Z" transform="translate(-152.87546 -225.8589)" fill="#2f2e41"/><path d="M403.67163,355.43027l-16.16732.317-11.41223,12.04624-9.14932,1.3419a18.2656,18.2656,0,0,0-15.57717,16.89718v0l1.585,8.70644h9.51019l5.50164,32.30284c-2.13925,5.4511-2.28468,9.75391,2.10651,11.444l13.63127,25.67751L423.96,446.09408c2.04173-3.51013,2.696-7.03574.609-10.46423l2.87806-49.45h9.67743v0c0-9.24869-3.12837-17.04569-12.31963-18.07484a108.65383,108.65383,0,0,0-10.98908-.62852Z" transform="translate(-152.87546 -225.8589)" fill="#e6e6e6"/><path d="M423.96,446.09408s-39.30879,6.97414-53.89108-7.60815c0,0-1.48046,2.51333-3.71127,6.68153-.64153,1.19868-1.88058,2.0107-2.62886,3.46267-.68006,1.31961-2.4292,2.94192-3.17006,4.43857-.596,1.204.36014,2.77744-.26,4.07817-7.46789,15.66368-16.19278,37.75861-14.32228,52.34848,1.20624,9.40867,3.69764,31.30177,6.32152,54.81615.205,1.83719-1.45549,4.19725-1.24942,6.04906.19432,1.74621,2.25519,2.98365,2.44951,4.73391.129,1.16211-1.31017,2.34755-1.18148,3.50826.14118,1.27343,1.8502,2.52186,1.99063,3.79039,3.59444,32.46814,6.88554,62.78094,6.88554,62.78094h18.38637l3.46913-69.2317-2.83512-25.23619,6.65714-51.038,9.19318,48.502,1.18261,27.29716,9.71542,70.9748H423.96v-68.708l1.268-3.56944-1.268-4.57787,1.268-4.93232-1.268-5.37164Z" transform="translate(-152.87546 -225.8589)" fill="#2f2e41"/><path d="M408.634,346.05478a18.326,18.326,0,1,1,3.17509-15.31446c.05272.21964.09718.43807.14038.66481A18.301,18.301,0,0,1,408.634,346.05478Z" transform="translate(-152.87546 -225.8589)" fill="#ffb6b6"/><path d="M404.81288,335.59833a9.633,9.633,0,0,0-2.815-5.10383,13.1421,13.1421,0,0,1-.76086,5.50961,25.3951,25.3951,0,0,1-13.95455-2.76428c-3.23345-2.19366-7.34819-2.00351-12.14136,0a17.75012,17.75012,0,0,1,17.75236-17.75236h3.17006a17.75559,17.75559,0,0,1,17.75235,17.75236A52.85225,52.85225,0,0,1,404.81288,335.59833Z" transform="translate(-152.87546 -225.8589)" fill="#2f2e41"/><circle cx="113.24907" cy="285" r="51" fill="#f0f0f0"/><circle cx="438.24907" cy="51" r="51" fill="#f0f0f0"/><circle cx="843.24907" cy="293" r="51" fill="#f0f0f0"/><path d="M683.12454,282.42068V398.06673A9.11863,9.11863,0,0,1,674.101,407.186a.80182.80182,0,0,1-.09986.00416H660.54129a40.6065,40.6065,0,0,1-40.6065-40.6065v-84.163a9.12338,9.12338,0,0,1,9.12338-9.12338l5.454,0c-2.52672,7.37064,31.7654,10.47377,33.648,0l5.841,0A9.12341,9.12341,0,0,1,683.12454,282.42068Z" transform="translate(-152.87546 -225.8589)" fill="#90cce6"/><path d="M643.18162,264.64967a1.19706,1.19706,0,0,1,1.19565-1.19566h8.13043a1.19566,1.19566,0,0,1,0,2.39131h-8.13043A1.19706,1.19706,0,0,1,643.18162,264.64967Z" transform="translate(-152.87546 -225.8589)" fill="#3f3d56"/><path d="M676.79446,421.8589h-51.416a15.06329,15.06329,0,0,1-15.04639-15.0459V325.9717a2.18651,2.18651,0,0,1-.91113-1.77881v-8.13037a2.18557,2.18557,0,0,1,.91113-1.77832v-2.18213a2.1856,2.1856,0,0,1-.91113-1.77832v-8.13086a2.18557,2.18557,0,0,1,.91113-1.77832v-3.94385a2.18353,2.18353,0,0,1-1.15039-1.92969v-8.13037a2.1843,2.1843,0,0,1,1.15039-1.93018V273.67384A15.06329,15.06329,0,0,1,625.37844,258.628h51.416a15.06288,15.06288,0,0,1,15.0459,15.04589V297.23a1.8859,1.8859,0,0,1,.88574,1.59814v15.50293a1.88674,1.88674,0,0,1-.88574,1.59863V406.813A15.06288,15.06288,0,0,1,676.79446,421.8589ZM625.37844,260.628a13.061,13.061,0,0,0-13.04639,13.04589v12.50782l-.96191.03711a.19547.19547,0,0,0-.18848.19189V294.541a.19617.19617,0,0,0,.18848.1919l.96191.03662v7.04931l-.76074.1875a.19651.19651,0,0,0-.15039.18653v8.13086a.19651.19651,0,0,0,.15039.18652l.76074.1875v4.99072l-.76074.1875a.19651.19651,0,0,0-.15039.18653v8.13037a.19664.19664,0,0,0,.15039.187l.76074.1875V406.813a13.061,13.061,0,0,0,13.04639,13.0459h51.416a13.0609,13.0609,0,0,0,13.0459-13.0459V314.2173h.88574V298.9424h-.88574V273.67384a13.06089,13.06089,0,0,0-13.0459-13.04589Z" transform="translate(-152.87546 -225.8589)" fill="#3f3d56"/><circle cx="504.1757" cy="38.79076" r="1.19565" fill="#3f3d56"/><path d="M396.95559,496.26173H263.16848a7.18838,7.18838,0,0,1-7.16992-7.16894v-65.189a7.1884,7.1884,0,0,1,7.16894-7.16992H396.95461a7.18841,7.18841,0,0,1,7.16993,7.16895v65.189A7.1884,7.1884,0,0,1,396.95559,496.26173Z" transform="translate(-152.87546 -225.8589)" fill="#fff"/><path d="M396.95559,496.26173H263.16848a7.18838,7.18838,0,0,1-7.16992-7.16894v-65.189a7.1884,7.1884,0,0,1,7.16894-7.16992H396.95461a7.18841,7.18841,0,0,1,7.16993,7.16895v65.189A7.1884,7.1884,0,0,1,396.95559,496.26173ZM263.16848,418.7339a5.18526,5.18526,0,0,0-5.16992,5.1709v65.187a5.18494,5.18494,0,0,0,5.1709,5.16992H396.95364a5.18515,5.18515,0,0,0,5.1709-5.17089v-65.187a5.18527,5.18527,0,0,0-5.1709-5.16992Z" transform="translate(-152.87546 -225.8589)" fill="#3f3d56"/><path d="M337.23235,486.62784c-26.38574,0-53.89882-.25214-64.16427-.41561a5.17627,5.17627,0,0,1-5.06954-5.15521V427.09538a1.82954,1.82954,0,0,1,1.823-1.82756H390.29728a1.82942,1.82942,0,0,1,1.82726,1.8227v36.612a22.84157,22.84157,0,0,1-22.45691,22.75218C360.10027,486.57927,348.7713,486.62784,337.23235,486.62784Z" transform="translate(-152.87546 -225.8589)" fill="#90cce6"/><path d="M383.146,460.33888H274.28664a4.43849,4.43849,0,0,1-4.16406-2.93554l-12.32129-34.56641a4.4228,4.4228,0,0,1,4.15772-5.90674l136.07226-.18945a4.42312,4.42312,0,0,1,4.35938,5.19775l.105.04444-.39063.91162-.0039.00927-14.895,34.75538A4.40962,4.40962,0,0,1,383.146,460.33888Zm14.8916-41.59814-136.07471.18945a2.42256,2.42256,0,0,0-2.27783,3.23535l12.3208,34.56494a2.43347,2.43347,0,0,0,2.28223,1.6084H383.146a2.4131,2.4131,0,0,0,2.22168-1.46679l14.89551-34.75635.73242.314-.73242-.314a2.42117,2.42117,0,0,0-2.22559-3.375Z" transform="translate(-152.87546 -225.8589)" fill="#3f3d56"/><circle cx="176.98309" cy="233.4802" r="8.52402" fill="#fff"/><circle cx="498.98309" cy="159.4802" r="8.52402" fill="#fff"/><path d="M974.25454,508.9789l-22.77-22.48a11.884,11.884,0,0,0-8.43-3.46h-.08a11.9143,11.9143,0,0,0-8.46,3.56,27.99135,27.99135,0,0,0-.49,38.84c.24.26.49.51.74.76a27.248,27.248,0,0,0,4.56,3.65,27.67639,27.67639,0,0,0,15.11,4.43h.17a27.82649,27.82649,0,0,0,19.75-8.32,12.023,12.023,0,0,0-.1-16.98Zm-1.32,15.57a26.09171,26.09171,0,0,1-32.76,3.48,26.78641,26.78641,0,0,1-4.01-3.25,26.00168,26.00168,0,0,1-.23-36.77,9.91308,9.91308,0,0,1,7.06-2.97h.06a9.911,9.911,0,0,1,7.02,2.88l22.77,22.49a10.00707,10.00707,0,0,1,.09,14.14Z" transform="translate(-152.87546 -225.8589)" fill="#3f3d56"/><path d="M899.54452,435.19887l-22.77-22.49a11.92636,11.92636,0,0,0-8.43-3.46h-.07a11.947,11.947,0,0,0-8.47,3.56994,28.07691,28.07691,0,0,0-4.72,33l.01.01a27.562,27.562,0,0,0,4.33,5.93c.19.22.41.44.63.66a27.83532,27.83532,0,0,0,19.67,8.08h.18a27.854,27.854,0,0,0,19.75-8.33,11.99892,11.99892,0,0,0-.11-16.97Zm-1.32,15.57a25.85541,25.85541,0,0,1-18.33,7.73h-.17a26.00049,26.00049,0,0,1-18.49-44.27,10.00761,10.00761,0,0,1,14.14-.09l22.77,22.48A10.01911,10.01911,0,0,1,898.22451,450.76888Z" transform="translate(-152.87546 -225.8589)" fill="#3f3d56"/><path d="M975.70994,516.04649l-25.1032-24.79357a8.72678,8.72678,0,0,0-12.32743.0765,22,22,0,1,0,31.30516,30.919Z" transform="translate(-152.87546 -225.8589)" fill="#90cce6"/><path d="M901.00443,442.26243l-25.1032-24.79356a8.72676,8.72676,0,0,0-12.32743.0765,22,22,0,1,0,31.30516,30.919Z" transform="translate(-152.87546 -225.8589)" fill="#90cce6"/><path d="M948.12454,531.48891l-.6,1.57995q-4.23-1.60491-8.2-3.22c-46.88-19.13-69.26-41.52-84.23-84.02l-.01-.01q-1.065-3-2.07-6.13995l1.58-.51a25.54187,25.54187,0,0,0,2.3,5.78q1.23,3.495,2.53,6.81c14.07,35.87,34.82,56.37,74.6,73.68q3,1.30507,6.15,2.59A26.08663,26.08663,0,0,0,948.12454,531.48891Z" transform="translate(-152.87546 -225.8589)" fill="#3f3d56"/><rect x="900.62305" y="448.539" width="2.00052" height="73.00017" transform="translate(-229.92517 559.82386) rotate(-45.35527)" fill="#3f3d56"/><path d="M436.64029,416.17348l.02662-32.86269-19.31762,1.72627,6.81759,20.7264-24.74716,37.51415a8.17278,8.17278,0,1,0,9.88987,6.88859Z" transform="translate(-152.87546 -225.8589)" fill="#ffb6b6"/></svg>
                </section>
                <p>Thank you for your contact, someone will reply you</p>
            </section>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
    </script>
    <script src="app.js"></script>
</body>
</html>

<script>
    frontendChangeColor();
</script>