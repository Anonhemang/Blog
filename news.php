<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>news</title>
    <style>
        * {
            margin: auto;
        }

        .butn_a_news {
            text-decoration: none;
            color: white;
        }

        .butn_news {
            border-radius: 30%;
            padding: .5%;
            margin-left: 2%;
            margin-bottom: 1%;
            outline: none;
            background-color: #0d6efd;
            color: aliceblue;
        }

        .butn_news:hover {
            box-shadow: 6px 6px 12px 6px black;
        }

        .sub_box_news {
            height: 25%;
            width: auto;
            box-shadow: 2px 2px 20px 2px black;
        }

        h2 {
            font-style: oblique;
        }
    </style>
</head>

<body>
    <div>
        <div class="container-fluid  bg-primary">
            <center>
                <h1 class="p-2" style="font-weight: bold;">News</h1>
            </center>
            <nav>
                <center><button class="butn_news"><a href="#segment4" class="butn_a_news">All News</a></button>
                    <button class="butn_news"><a href="#segment5" class="butn_a_news">India News</a></button>
                    <button class="butn_news"><a href="#segment6" class="butn_a_news">International News</a></button>
                </center>
            </nav>
        </div>
        <div class="overflow-y-auto">
            <!-- Segment 1: All News -->
            <div class="w-100 h-25 border border-2 ">
                <div class="w-100 h-auto border border-2 overflow-y-auto mt-3">
                    <h2 id="segment4">All News</h2>

                    <div class="overflow-y-auto float-start">
                        <div class="sub_box_news float-start m-3">
                        <img src="./Images/n1.jpg" style="height: 200px; width:100%" alt=""><br>
                        <button>Breaking News Live: Mob storms Union <br>minister's residence in Imphal - The Times of India</button>
                        </div>
                        <div class="sub_box_news float-start m-3">
                        <img src="./Images/n2.jpg" style="height: 200px; width:100%" alt=""><br>
                            <button>COVID News: Latest News Stories, <br> Trackers, Vaccines, Maps, and Videos</button>
                        </div>
                        <div class="sub_box_news float-start m-3">
                        <img src="./Images/n3.jpg" style="height: 200px; width:100%" alt=""><br>
                            <button>Morning brief: TMC leader responds to <br>Calcutta HC order on Bengal panchayat poll</button>
                        </div>
                        <div class="sub_box_news float-start m-3">
                        <img src="./Images/n4.jpg" style="height: 200px; width:100%" alt=""><br>
                            <button>Cyclone Biparjoy LIVE tracking: Landfall, current <br>Location and other details | Mint</button>
                        </div>
                        <div class="sub_box_news float-start m-3">
                        <img src="./Images/n5.jpg" style="height: 200px; width:100%" alt=""><br>
                            <button>Mumbai News, Latest Mumbai News, <br>Mumbai News Today and Headlines</button>
                        </div>
                        
                        </div>
                    </div>
                </div>
            </div>



            <!-- Segment 2: India News -->
            <div class="w-100 h-25 border border-2">
                <div class="w-100 h-auto border border-2 overflow-y-auto mt-3">
                    <h2 id="segment5">India News</h2>

                    <div class="overflow-y-auto d-inline">
                        <div class="sub_box_news float-start m-3">
                        <img src="./Images/ind1.JPG" style="height: 200px; width:100%" alt=""><br>
                            <button>‘Tax terrorism’: Mohandas Pai on why India is losing<br> 6,500 millionaires in 2023</button>
                        </div>
                        <div class="sub_box_news float-start m-3">
                        <img src="./Images/ind2.JPG" style="height: 200px; width:100%" alt=""><br>
                            <button>Cyclone Biparjoy: What is the ‘landfall’ of a cyclone?</button>
                        </div>
                        <div class="sub_box_news float-start m-3">
                        <img src="./Images/ind3.avif" style="height: 200px; width:100%" alt=""><br>
                            <button>How Gujarat protected endangered Asiatic lions of Gir during <br>cyclone Biparjoy</button>
                        </div>
                        
                    </div>
                </div>
            </div>



            <!-- Segment 3: International News -->
            <div class="w-100 h-25 border border-2 mt-3">
                <div class="w-100 h-auto border border-2 overflow-y-auto">
                    <h2 id="segment6">International News</h2>

                    <div class="overflow-y-auto">
                        <div class="sub_box_news float-start m-3">
                        <img src="./Images/int1.JPG" style="height: 190px; width:100%" alt=""><br>
                            <button>India, China bought 80% of Russia's oil in May:<br> International Energy Agency</button>
                        </div>
                        <div class="sub_box_news float-start m-3">
                        <img src="./Images/int2.jpg" style="height: 200px; width:100%" alt=""><br>
                            <button>India Makes Debut at Annecy International Animation <br>Festival, Showcasing AVGC Expertise</button>
                        </div>
                        <div class="sub_box_news float-start m-3">
                        <img src="./Images/int3.jpg" style="height: 200px; width:100%" alt=""><br>
                            <button>India, China Bought 80% Of Russia's Oil In May: <br>International Energy Body</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>