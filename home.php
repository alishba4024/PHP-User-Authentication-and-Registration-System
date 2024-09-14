<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube</title>
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;1,100&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    scroll-behavior: smooth;
   
}
h1{
    font-size: 1.5rem;
}
#country-code{
    color: var(--yt-spec-text-secondary);
    margin: 1px 0 20px -1px;
    font-size: x-small;
}
i{
    font-size: 1.5rem;
    color: #524e4e;
    cursor: pointer;
}
hr{
    border: 1px solid gainsboro;
    margin: 12px 0;
}
/* HEADER STYLING */
.header{
    position: fixed;
    top: 0;
    left: 0;
    background-color: white;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 5px 25px;
    padding-right: 40px;
    width: 100%;
}
.logo-image{
    position: relative;
    height: 50px;
    width: 50px;
}
img{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
#logo-text{
    letter-spacing: -.7px;
}
.logo{
    display: flex;
    align-items: center;
}
.logo-container{
    display: flex;
    align-items: center;
    gap: 18px;
}
.search-container{
    display: flex;
    align-items: center;
    flex: 0 1 685px;
    margin-left: 50px ;
    /* width: 525px; */
}
.search-container form{
    position: relative;
    width: 100%;
}
.search-container input{
    height: 40px;
    display: flex;
    align-items: center;
    width: 100%;
    border: 1px solid rgba(196, 188, 188, 0.76);
    padding: 12px;
    font-size: 1rem;
    border-radius: 20px;
}
.search{
    min-width: 60px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 20 ;
    background-color: white;
    outline: none;
    border: none;
    cursor: pointer;
}

.mic{
    min-width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    /* background-color: white; */
    background-color:  rgba(197, 194, 194, 0.76);
    outline: none;
    border: none;
    margin-left: 10px ;
    border-radius: 50%;
    cursor: pointer;
}
.profile-container{
    display: flex;
    align-items: center;
}
.profile-div{
    position: relative;
    width: 30px;
    height: 30px;
    border-radius: 50%;
    overflow: hidden;
    margin-left: 25px;
    cursor: pointer;
}
.profile-container i{
    margin-left: 25px;
}

/* Scrollbar styling */
::-webkit-scrollbar{
    width: 8px;
}
::-webkit-scrollbar-track{
    background-color: white;
}
::-webkit-scrollbar-thumb{
    background: transparent;
    border-radius: 5px;
}
.sidemenu:hover ::-webkit-scrollbar-thumb{
    background: #8d8b8b;
}
::-webkit-scrollbar-thumb:hover{
    background: #b3b2b2;
}

/* BODY STYLING */
.body-container{
    display: flex;
    position: fixed;
    top: 60px;
    height: calc(100vh - 60px);
}
.sidemenu{
    background-color: white;
    padding-top: 10px;
    width: 230px;
    overflow-y: scroll;
}
.sidemenu-items{
    display: flex;
    flex-direction: column;
}
.sidemenu a{
    text-decoration: none;
    color: black;
}
.sidemenu-item{
    display: flex;
    align-items: center;
    padding: 0 24px;
    cursor: pointer;
    height: 40px;
}
.sidemenu-item :hover{
    background-color: #d5d0d078;
}
.sidemenu-item i{
    margin-right: 24px;
}

/* CONTENT STYLING */
.content{
    width: calc(100vw - 240px);
}
.btn-wrapper{
    overflow-x: scroll;
    background-color: white;
    display: flex;
    padding-left: 14px;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}
.btn-wrapper ::-webkit-scrollbar{
    height: 4px;
}
.btn{
    margin: 12px 6px;
    background-color: rgba(124, 121, 121, 0.118);
    padding: 6px 12px;
    border-radius: 16px;
    white-space: nowrap;
    cursor: pointer;
    color: black;
    border: 1px solid rgba(255, 255, 255, 0.1);
}

/* Video Container Styling */
.video-container{
   

    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 18px;
    padding: 20px 25px;
    background-color: white;
    overflow-y: scroll;
    height: calc(100vh - 116px);
    /* display: inline; */
    /* width: 300%;
    height: 200%; */
}
.video-container-cover{
    position: relative;
    transition: .5s;
    transition-delay: 0.5s;

}
.video-content{
    margin-bottom: 25px;
    position: relative;
    transition: .5s;
    width: 100%;
  
}
.video-content:hover{
/* transform: scale(1.2); */
z-index: 5;
position: absolute;
/* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3); */
background-color: white;
}
.video-content:hover .video-details{
    background-color: white;
    padding: 10px;
}
.video-content:hover .channel-logo{
    min-width: 25px;
    height: 25px;
}
.video-container-cover:hover{
    transform: translateY(50px, 60px);
    z-index: 999;
}
.video-container-cover:nth-child(4n+1) :hover{
    transform: translateY(50px, 60px);
    z-index: 999;
}
.video-container-cover:nth-child(4n+4) :hover{
    transform: translateY(-30px, 60px);
    z-index: 999;
}
.video-box{
    position: relative;
    width: 100px;
    height: 145px;
    display: block;
}
.channel-logo{
    position: relative;
min-width: 35px;
height: 35px;
border-radius: 50%;
overflow: hidden;
}
.video-details{
    display: flex;
    color: black;
    padding-top: 12px;
}
.details{
    margin-left: 12px;
}
.title{
    font-size: .9rem;
    padding-left: 5px;
}
.video-content:hover .title{
    font-size: .7rem;
}
.channel-name{
    font-size: .8rem;
    margin-top: 10px;
    color: black;
    padding-left: 5px;
    margin-bottom: 4px;
    
}
.views-upload{
    display: flex;
    font-size: .8rem;
    color: black;
    padding-left: 5px;
}
.video-content:hover .views-upload{
    font-size: .6rem;
}
.upload{
    margin-left: 5px;
}
.hidden-content{
    display: none;
    padding: 5px 10px;
}
.video-content:hover .hidden-content{
    display: block;
}
.button{
    padding: 5px 0;
    color: black;
    text-transform: uppercase;
    width: 100%;
    background-color: rgb(241, 236, 236);
    text-align: center;
    margin: 5px 0;
    font-size: .6rem;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
}
.button i{
    font-size: .7rem;
    margin-right: 5px;
    color: black;
}
    </style>
</head>

<link rel="shortcut icon" href="hd-youtube-logo-png-transparent-background-20.png" type="image/x-icon">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.0.1/fonts/remixicon.min.css">
<body>
    <!-- HEADER -->
    <div class="header">
<!-- Logo-container -->
<div class="logo-container">
<i class="ri-menu-line"></i>
<div class="logo">
<div class="logo-image">
    <img src="hd-youtube-logo-png-transparent-background-20.png" alt="">
</div>
<h1 id="logo-text">YouTube</h1>
<div id="country-code">PK</div>
</div>
</div>
<!--Search-container  -->
<div class="search-container">
    <form action="">
        <input type="text" placeholder="search">
    </form>
    <button class="search" id="search-icon"> <i class="ri-search-line"></i></button>
    <button class="mic"><i class="ri-mic-fill"></i></button>
</div>
<!-- profile-container -->
<div class="profile-container">
    <i class="ri-video-add-line"></i>
    <i class="ri-grid-fill"></i>
    <i class="ri-notification-4-line"></i>
    <div class="profile-div">
        <img src="images 1.jpg" alt="">
    </div>
</div>
    </div>
<!-- SIDE MENU -->
<div class="body-container">
    <div class="sidemenu">
        <div class="sidemenu-items">
            <a href="#" class="sidemenu-item"><i class="ri-home-5-line"></i>Home</a>
            <a href="#" class="sidemenu-item"><i class="ri-play-circle-line"></i>Shorts</a>
            <a href="#" class="sidemenu-item"><i class="ri-rss-line"></i>Subscription</a>
            <a href="#" class="sidemenu-item"><i class="ri-book-3-line"></i>Library</a>
            <a href="#" class="sidemenu-item"><i class="ri-history-line"></i>History</a>
            <a href="#" class="sidemenu-item"><i class="ri-video-line"></i>Your Videos</a>
            <a href="#" class="sidemenu-item"><i class="ri-time-line"></i>Watch Leter</a>
            <a href="#" class="sidemenu-item"><i class="ri-thumb-up-line"></i>Liked Videos</a>
            <a href="#" class="sidemenu-item"><i class="ri-arrow-down-s-line"></i>Show more</a>
            <hr>
            <h4 class="exp">Explore</h4>
            <a href="#" class="sidemenu-item"><i class="ri-fire-line"></i>Trending</a>
            <a href="#" class="sidemenu-item"><i class="ri-music-line"></i>Music</a>
            <a href="#" class="sidemenu-item"><i class="ri-newspaper-line"></i>News</a>
            <a href="#" class="sidemenu-item"><i class="ri-gamepad-line"></i>Gaming</a>
            <a href="#" class="sidemenu-item"><i class="ri-trophy-line"></i>Sports</a>
            <a href="#" class="sidemenu-item"><i class="ri-settings-5-line"></i>Settings</a>
            <a href="#" class="sidemenu-item"><i class="ri-flag-line"></i>Report history</a>
            <a href="#" class="sidemenu-item"><i class="ri-question-line"></i>Help</a>
            <a href="#" class="sidemenu-item"><i class="ri-feedback-line"></i>Send feedback</a>
</div>
</div>
      <div class="content">
        <div class="btn-wrapper">
            <div class="btn">
                <p>All</p>
            </div>
            <div class="btn">
              <p>Taarak Mehta Ka ulta Chashma</p>
            </div>
            <div class="btn">
                <p>Css</p>
            </div>
            <div class="btn">
                <p>Mixes</p>
            </div>
            <div class="btn">
                <p>Music</p>
            </div>
            <div class="btn">
                <p>Computer progamming</p>
            </div>
            <div class="btn">
                <p>Live</p>
            </div>
            <div class="btn">
                <p>pakistani dramas</p>
            </div>
            <div class="btn">
                <p>Makeovers</p>
            </div>
            <div class="btn">
                <p>Cream</p>
            </div>
            <div class="btn">
                <p>Bollywood music</p>
            </div>
            <div class="btn">
                <p>sales</p>
            </div>
            <div class="btn">
                <p>Animated films</p>
            </div>
        </div>

        <div class="video-container">
            <div class="video-container-cover">
                <div class="video-content">
                    <a href="#" class="video-box">
                        <iframe width="280" height="145" src="https://www.youtube.com/embed/QKdJyaecCBo?si=vWo1SMvH54NtgKnx" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </a>
                    <div class="video-details">
                        <div class="channel-logo">
                            <img src="images 1.jpg" alt="">
                        </div>
                        <div class="detail">
                            <h3 class="title">Chocolate Cake Recipe</h3>
                            <div class="channel-name">Cook with aimy</div>
                            <div class="views-upload">
                                <div class="views">30k views</div>
                                <div class="upload">2 months ago</div>
                            </div>
                        </div>
                    </div>
                    <div class="hidden-content">
                        <div class="button"><i class="ri-time-line"></i>Watch later</div>
                        <div class="button"><i class="ri-play-list-2-line"></i>Add to queue</div>
                    </div>
                </div>
            </div>

            <div class="video-container-cover">
                <div class="video-content">
                    <a href="#" class="video-box">
                        <iframe width="280" height="145" src="https://www.youtube.com/embed/mlHQBGlTlfY?si=dTTHioYsTuV62Tig" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </a>
                    <div class="video-details">
                        <div class="channel-logo">
                            <img src="images 1.jpg" alt="">
                        </div>
                        <div class="detail">
                            <h3 class="title">Copying My 12 years Old Sister Night Routine</h3>
                            <div class="channel-name">JUSTKASS</div>
                            <div class="views-upload">
                                <div class="views">430k views</div>
                                <div class="upload">5 days ago</div>
                            </div>
                        </div>
                    </div>
                    <div class="hidden-content">
                        <div class="button"><i class="ri-time-line"></i>Watch later</div>
                        <div class="button"><i class="ri-play-list-2-line"></i>Add to queue</div>
                    </div>
                </div>
            </div>

            <div class="video-container-cover">
                <div class="video-content">
                   <iframe width="280" height="145" src="https://www.youtube.com/embed/uYCLy--fV54?si=qnSS22MKIqA2E7iZ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <div class="video-details">
                        <div class="channel-logo">
                            <img src="images 1.jpg" alt="">
                        </div>
                        <div class="detail">
                            <h3 class="title">2024 PREPARATION</h3>
                            <div class="channel-name">Mark Allow</div>
                            <div class="views-upload">
                                <div class="views">706k views</div>
                                <div class="upload">1 day ago</div>
                            </div>
                        </div>
                    </div>
                    <div class="hidden-content">
                        <div class="button"><i class="ri-time-line"></i>Watch later</div>
                        <div class="button"><i class="ri-play-list-2-line"></i>Add to queue</div>
                    </div>
                </div>
            </div>

            <div class="video-container-cover">
                <div class="video-content">
                    <iframe width="280" height="145" src="https://www.youtube.com/embed/1PnVor36_40?si=T3Yp-PqD1Mqi_ZkN" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <div class="video-details">
                        <div class="channel-logo">
                            <img src="images 1.jpg" alt="">
                        </div>
                        <div class="detail">
                            <h3 class="title">Learn CSS in 20 Minutes</h3>  
                            <div class="channel-name">Fireship</div>
                            <div class="views-upload">
                                <div class="views">462k views</div>
                                <div class="upload">2 years ago</div>
                            </div>
                        </div>
                    </div>
                    <div class="hidden-content">
                        <div class="button"><i class="ri-time-line"></i>Watch later</div>
                        <div class="button"><i class="ri-play-list-2-line"></i>Add to queue</div>
                    </div>
                </div>
            </div>

            <div class="video-container-cover">
                <div class="video-content">
                    <iframe width="280" height="145" src="https://www.youtube.com/embed/LX8_z1nvqk4?si=EMQOCHhPM_fTr_BF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <div class="video-details">
                        <div class="channel-logo">
                            <img src="images 1.jpg" alt="">
                        </div>
                        <div class="detail">
                            <h3 class="title">How to make a Calculater Using HTML CSS JavaScript</h3>
                            <div class="channel-name">Code Traversal</div>
                            <div class="views-upload">
                                <div class="views">497k views</div>
                                <div class="upload">10 months ago</div>
                            </div>
                        </div>
                    </div>
                    <div class="hidden-content">
                        <div class="button"><i class="ri-time-line"></i>Watch later</div>
                        <div class="button"><i class="ri-play-list-2-line"></i>Add to queue</div>
                    </div>
                </div>
            </div>

            <div class="video-container-cover">
                <div class="video-content">
                    <iframe width="280" height="145" src="https://www.youtube.com/embed/sqJ6xZ9mUwE?si=K7Pidw_WJ117VdPg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <div class="video-details">
                        <div class="channel-logo">
                            <img src="images 1.jpg" alt="">
                        </div>
                        <div class="detail">
                            <h3 class="title">CSS-What is Selectors?</h3>
                            <div class="channel-name">Solutions</div>
                            <div class="views-upload">
                                <div class="views">490k views</div>
                                <div class="upload">5 months ago</div>
                            </div>
                        </div>
                    </div>
                    <div class="hidden-content">
                        <div class="button"><i class="ri-time-line"></i>Watch later</div>
                        <div class="button"><i class="ri-play-list-2-line"></i>Add to queue</div>
                    </div>
                </div>
            </div>

            <div class="video-container-cover">
                <div class="video-content">
                    <iframe width="280" height="145" src="https://www.youtube.com/embed/6VbETTS67rM?si=BG71ZsAq571EYD9T" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <div class="video-details">
                        <div class="channel-logo">
                            <img src="images 1.jpg" alt="">
                        </div>
                        <div class="detail">
                            <h3 class="title">Animated Websites with HTML CSS</h3>
                            <div class="channel-name">Coding school</div>
                            <div class="views-upload">
                                <div class="views">32k views</div>
                                <div class="upload">23 hours ago</div>
                            </div>
                        </div>
                    </div>
                    <div class="hidden-content">
                        <div class="button"><i class="ri-time-line"></i>Watch later</div>
                        <div class="button"><i class="ri-play-list-2-line"></i>Add to queue</div>
                    </div>
                </div>
            </div>

            <div class="video-container-cover">
                <div class="video-content">
                    <iframe width="280" height="145" src="https://www.youtube.com/embed/bbUc6f7sJ-Q?si=SVlql_NWuxuduMyv" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <div class="video-details">
                        <div class="channel-logo">
                            <img src="images 1.jpg" alt="">
                        </div>
                        <div class="detail">
                            <h3 class="title">Perfect Chocolate Cake</h3>
                            <div class="channel-name">TeenDO</div>
                            <div class="views-upload">
                                <div class="views">53M views</div>
                                <div class="upload">3 years ago</div>
                            </div>
                        </div>
                    </div>
                    <div class="hidden-content">
                        <div class="button"><i class="ri-time-line"></i>Watch later</div>
                        <div class="button"><i class="ri-play-list-2-line"></i>Add to queue</div>
                    </div>
                </div>
            </div>

            <div class="video-container-cover">
                <div class="video-content">
                    <iframe width="280" height="145" src="https://www.youtube.com/embed/miqNZlLyweM?si=n6MUHKk_c-Rw5G0a" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <div class="video-details">
                        <div class="channel-logo">
                            <img src="images 1.jpg" alt="">
                        </div>
                        <div class="detail">
                            <h3 class="title">UPDATED Skincare</h3>
                            <div class="channel-name">kiana Davis</div>
                            <div class="views-upload">
                                <div class="views">51M views</div>
                                <div class="upload">4 years ago</div>
                            </div>
                        </div>
                    </div>
                    <div class="hidden-content">
                        <div class="button"><i class="ri-time-line"></i>Watch later</div>
                        <div class="button"><i class="ri-play-list-2-line"></i>Add to queue</div>
                    </div>
                </div>
            </div>

            <div class="video-container-cover">
                <div class="video-content">
                    <iframe width="280" height="145" src="https://www.youtube.com/embed/mMklJgcPHqA?si=KH2Ae8D2x0eplZo9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <div class="video-details">
                        <div class="channel-logo">
                            <img src="images 1.jpg" alt="">
                        </div>
                        <div class="detail">
                            <h3 class="title">Room Makeover + Room Tour</h3>
                            <div class="channel-name">Glow up wih Mahnoor</div>
                            <div class="views-upload">
                                <div class="views">243k views</div>
                                <div class="upload">4 months ago</div>
                            </div>
                        </div>
                    </div>
                    <div class="hidden-content">
                        <div class="button"><i class="ri-time-line"></i>Watch later</div>
                        <div class="button"><i class="ri-play-list-2-line"></i>Add to queue</div>
                    </div>
                </div>
            </div>

            <div class="video-container-cover">
                <div class="video-content">
                    <iframe width="280" height="145" src="https://www.youtube.com/embed/deztUdPApiM?si=NM1ko5mHg2Zc7q1J" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <div class="video-details">
                        <div class="channel-logo">
                            <img src="images 1.jpg" alt="">
                        </div>
                        <div class="detail">
                            <h3 class="title">Which Code language should you start with in 2024?</h3>
                            <div class="channel-name">Code Traversal</div>
                            <div class="views-upload">
                                <div class="views">23k views</div>
                                <div class="upload"> 7 months ago</div>
                            </div>
                        </div>
                    </div>
                    <div class="hidden-content">
                        <div class="button"><i class="ri-time-line"></i>Watch later</div>
                        <div class="button"><i class="ri-play-list-2-line"></i>Add to queue</div>
                    </div>
                </div>
            </div>

            <div class="video-container-cover">
                <div class="video-content">
                    <iframe width="280" height="145" src="https://www.youtube.com/embed/XmA0huo5rqw?si=YOCyrw2zx7T4cWNq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <div class="video-details">
                        <div class="channel-logo">
                            <img src="images 1.jpg" alt="">
                        </div>
                        <div class="detail">
                            <h3 class="title">Mi Amor</h3>
                            <div class="channel-name">Vibess</div>
                            <div class="views-upload">
                                <div class="views">11M views</div>
                                <div class="upload"> 7 months ago</div>
                            </div>
                        </div>
                    </div>
                    <div class="hidden-content">
                        <div class="button"><i class="ri-time-line"></i>Watch later</div>
                        <div class="button"><i class="ri-play-list-2-line"></i>Add to queue</div>
                    </div>
                </div>
            </div>

            
            <div class="video-container-cover">
                <div class="video-content">
                    <iframe width="280" height="145" src="https://www.youtube.com/embed/GQS7wPujL2k?si=qMvF3QIPXtk4QSmv" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <div class="video-details">
                        <div class="channel-logo">
                            <img src="images 1.jpg" alt="">
                        </div>
                        <div class="detail">
                            <h3 class="title">Graphic Design Basics</h3>
                            <div class="channel-name">Envato Tuts</div>
                            <div class="views-upload">
                                <div class="views">23k views</div>
                                <div class="upload"> 7 months ago</div>
                            </div>
                        </div>
                    </div>
                    <div class="hidden-content">
                        <div class="button"><i class="ri-time-line"></i>Watch later</div>
                        <div class="button"><i class="ri-play-list-2-line"></i>Add to queue</div>
                    </div>
                </div>
            </div>

            <div class="video-container-cover">
                <div class="video-content">
                    <iframe width="280" height="145" src="https://www.youtube.com/embed/NUFnQZDHFz4?si=8rl0MXe14_enzghQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <div class="video-details">
                        <div class="channel-logo">
                            <img src="images 1.jpg" alt="">
                        </div>
                        <div class="detail">
                            <h3 class="title">LIFE CHANGING SKINCARE</h3>
                            <div class="channel-name">Liya Skincare</div>
                            <div class="views-upload">
                                <div class="views">263k views</div>
                                <div class="upload"> 10 months ago</div>
                            </div>
                        </div>
                    </div>
                    <div class="hidden-content">
                        <div class="button"><i class="ri-time-line"></i>Watch later</div>
                        <div class="button"><i class="ri-play-list-2-line"></i>Add to queue</div>
                    </div>
                </div>
            </div>

            <div class="video-container-cover">
                <div class="video-content">
                    <iframe width="280" height="145" src="https://www.youtube.com/embed/vpAJ0s5S2t0?si=qRo-49pnQ4EwICx9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <div class="video-details">
                        <div class="channel-logo">
                            <img src="images 1.jpg" alt="">
                        </div>
                        <div class="detail">
                            <h3 class="title">Bootstrap Tutorial</h3>
                            <div class="channel-name">Coding</div>
                            <div class="views-upload">
                                <div class="views">1.8M views</div>
                                <div class="upload"> 11 months ago</div>
                            </div>
                        </div>
                    </div>
                    <div class="hidden-content">
                        <div class="button"><i class="ri-time-line"></i>Watch later</div>
                        <div class="button"><i class="ri-play-list-2-line"></i>Add to queue</div>
                    </div>
                </div>
            </div>

            <div class="video-container-cover">
                <div class="video-content">
                    <iframe width="280" height="145" src="https://www.youtube.com/embed/t0Q2otsqC4I?si=8kR1zkPBD941zCp4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <div class="video-details">
                        <div class="channel-logo">
                            <img src="images 1.jpg" alt="">
                        </div>
                        <div class="detail">
                            <h3 class="title">Tom & Jerry</h3>
                            <div class="channel-name">Cartoons for kids</div>
                            <div class="views-upload">
                                <div class="views">280k views</div>
                                <div class="upload"> 6 months ago</div>
                            </div>
                        </div>
                    </div>
                    <div class="hidden-content">
                        <div class="button"><i class="ri-time-line"></i>Watch later</div>
                        <div class="button"><i class="ri-play-list-2-line"></i>Add to queue</div>
                    </div>
                </div>
            </div>

        </div>
            
</div>
</body>
</html>