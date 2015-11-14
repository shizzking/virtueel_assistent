function nav_select() {
    var nav_elem = document.querySelectorAll('li.nav_elem');
    for(i = 0;i < nav_elem.length; i++ ) {
        if(window.location.pathname === "/v-assistent/index.php"){
            nav_elem[i].className = "";
            nav_elem[0].className = 'sel';
        }
        else if(window.location.pathname === "/v-assistent/profile.php"){
            nav_elem[i].className = "";
            nav_elem[1].className = 'sel';
        }
        else if(window.location.pathname === "/v-assistent/informatie.php"){
            nav_elem[i].className = "";
            nav_elem[2].className = 'sel';
        }
        else if(window.location.pathname === "/v-assistent/dienst.php"){
            nav_elem[i].className = "";
            nav_elem[3].className = 'sel';
        }
        else if(window.location.pathname === "/v-assistent/contact.php"){
            nav_elem[i].className = "";
            nav_elem[4].className = 'sel';
        }        
        else {
            nav_elem[i].className = "";
            nav_elem[5].className = 'sel';
        }
    }
}




