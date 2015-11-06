function nav_select() {
    var nav_elem = document.querySelectorAll('li.nav_elem');
    for(i = 0;i < nav_elem.length; i++ ) {
        if(window.location.pathname === "/virtueel_assistent/home.php"){
            nav_elem[i].className = "";
            nav_elem[0].className = 'sel';
        }
        else if(window.location.pathname === "/virtueel_assistent/profiel.php"){
            nav_elem[i].className = "";
            nav_elem[1].className = 'sel';
        }
        else if(window.location.pathname === "/virtueel_assistent/informatie.php"){
            nav_elem[i].className = "";
            nav_elem[2].className = 'sel';
        }
        else if(window.location.pathname === "/virtueel_assistent/dienst.php"){
            nav_elem[i].className = "";
            nav_elem[3].className = 'sel';
        }
        else {
            nav_elem[i].className = "";
            nav_elem[4].className = 'sel';
        }
    }
}
