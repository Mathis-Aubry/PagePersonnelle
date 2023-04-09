//Hiding the loader when the page is fully loaded
window.onload = function() {
    document.getElementById("loader-overlay").style.opacity = 0;

    //When transition ends, putting the loader to the back of the page for developper tools inspect to be clean
    document.getElementById("loader-overlay").addEventListener("transitionend", function() {
        document.getElementById("loader-overlay").style.zIndex = -1;
    });
}

//When header is at the top of the page, putting the header transparent
window.onscroll = function() {
    if (window.scrollY == 0) 
    {
        document.getElementsByTagName("header")[0].style.backgroundColor = "transparent";
    } 
    else 
    {
        document.getElementsByTagName("header")[0].style.backgroundColor = "#2c2d31";
    }
}