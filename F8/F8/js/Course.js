// Hiên ẩn ALL
function showModuleAll(){
    var x = document.getElementsByClassName("Module-Content");
    var zoom = document.getElementById("zoomout");
    var extend = document.getElementById("extend");
    if (extend.style.display === "none") {
        extend.style.display = "block";
        zoom.style.display = "none";
    } else {
        extend.style.display = "none";
        zoom.style.display = "block";
    }
    for (var i = 0; i < x.length; i++) {
        x[i].style.display = 'block';
    }
}

function hideModuleAll(){
    var x = document.getElementsByClassName("Module-Content");
    var zoom = document.getElementById("zoomout");
    var extend = document.getElementById("extend");
    if (zoom.style.display === "block") {
        zoom.style.display = "none";
        extend.style.display = "block";
    } else {
        zoom.style.display = "block";
        extend.style.display = "none";
    }
    for (var i = 0; i < x.length; i++) {
        x[i].style.display = 'none';
    }
}
// Hiện ẩn Item
function showhideModule(khoahocId){
    var khoahoc = document.getElementById(khoahocId);
    var zoom = document.getElementById("zoomout");//thu nhỏ
    var extend = document.getElementById("extend");//mở rộng
    if (khoahoc.style.display === "block") {
        khoahoc.style.display = "none";
    } else {
        khoahoc.style.display = "block";
    }
    if (khoahoc.style.display === "block") {
        zoom.style.display = "block";
        extend.style.display = "none";
    } else {
        zoom.style.display = "none";
        extend.style.display = "block";
    }
}
// show hide Video
function showVideo(){
    var video = document.getElementById("Video-Youtube");
        video.style.display = "block";
    var play = document.getElementById("Video");
        play.play();
        play.currentTime = 0;
    var bgcontainer = document.getElementById("Bg-Container-Video");
        bgcontainer.style.display = "block";
    var body = document.getElementById("Body-HTML");
        // body.style.background = "black";
}
function hideVideo(){
    var video = document.getElementById("Video-Youtube");
        video.style.display = "none";
    var pause = document.getElementById("Video");
        pause.pause();
    var bgcontainer = document.getElementById("Bg-Container-Video");
        bgcontainer.style.display = "none";
}