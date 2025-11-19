let nav = document.getElementById( "nav" );

function menutouch () {
    if ( nav.style.display == "none" )
    {
        nav.style.display = "flex";
        nav.style.transition = "1s all ease-in-out";
    } else
    {
        nav.style.display = "none";
        nav.style.transition = "1s all ease-in-out";
    }
}
