//Function to allow access to the mobile nav menu
function headerMobileMenu() 
{
    //Using variables only for elements that will never move
    let header = document.querySelector("header");
    let mobileNavIcon = document.querySelector("header i");

    function DesktopNavToMobile()
    {
        //Moving the desktop nav menu where he will be considered as mobile nav menu
        header.appendChild(document.querySelector("header > div > nav"));
        header.style.backgroundColor = "#2c2d31";

        //Modifying the mobile nav menu icon
        mobileNavIcon.classList.remove("icon-list5");
        mobileNavIcon.classList.add("icon-cross");
    }

    function MobileNavToDesktop() 
    {
        //Moving back the mobile nav menu
        if (window.scrollY == 0) 
        {
            header.style.backgroundColor = "transparent";
        }
        document.querySelector("header > div").appendChild(document.querySelector("header > nav"));

        //Modifying the mobile nav menu icon
        mobileNavIcon.classList.remove("icon-cross");
        mobileNavIcon.classList.add("icon-list5");
    }
    
    //When header mobile nav menu icon is clicked
    document.querySelector("header > div > a").addEventListener("click", function(event) {
        event.preventDefault();

        //Depending on where the nav menu is, moving it to the other place
        if (document.querySelector("header > div > nav") != null)
        {
            DesktopNavToMobile();
        }
        else 
        {
            MobileNavToDesktop();
        }
    });

    //When screen size changes and is above 1012px (desktop size), moving back the mobile nav menu as a desktop nav menu
    window.addEventListener("resize", function() {
        if (window.innerWidth > 1012 && document.querySelector("header > nav") != null) 
        {
            MobileNavToDesktop();
        }
    });

    //When any link of the mobile nav menu is clicked, moving back the mobile nav menu as a desktop nav menu (for it to disappear)
    document.querySelectorAll("header nav a").forEach(function(link) {
        //Every time a mobile nav link is clicked this event listener will check if the mobile nav menu is displayed
        link.addEventListener("click", function() {
            if (document.querySelector("header > nav") != null)
            {
                MobileNavToDesktop();
            }
        });
    });
}

//Hiding the loader when the page is fully loaded
window.onload = function() {
    let loader = document.getElementById("loader-overlay");
    loader.style.opacity = 0;

    //When transition ends, putting the loader to the back of the page for developper tools inspect to be clean
    loader.addEventListener("transitionend", function() {
        loader.style.zIndex = -1;
    });

    headerMobileMenu();
}

//When header is at the top of the page and when mobile nav doesn't appear, putting the header transparent
window.onscroll = function() {
    if (window.scrollY == 0 && document.querySelector("header > nav") == null) 
    {
        document.querySelector("header").style.backgroundColor = "transparent";
    } 
    else 
    {
        document.querySelector("header").style.backgroundColor = "#2c2d31";
    }
}

//When clicking on anchor links, scrolling smoothly to the target element
const anchorLinks = document.querySelectorAll('a[href^="#"]');
anchorLinks.forEach(link => {
    link.addEventListener('click', e => {
        e.preventDefault();
        const hash = link.getAttribute('href');
        const targetElement = document.querySelector(hash);
        targetElement.scrollIntoView({
            behavior: 'smooth'
        });
    });
});