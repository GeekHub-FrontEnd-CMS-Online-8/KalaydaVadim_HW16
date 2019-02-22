var openMenuClick = 0;

function openMenuClickFunc() {
    if (openMenuClick == 0) {
        document.getElementById("header__left-toggle-btn-open").className = "fa fa-times fa-2x header-toggle-btn-exit";
        document.getElementById("header__left-toggle-btn").className = "active-btn";
        openMenuClick = 1;
    } else if (openMenuClick == 1) {
        document.getElementById("header__left-toggle-btn-open").className = "fa fa-bars fa-2x header-toggle-btn-open";
        document.getElementById("header__left-toggle-btn").className = "header__left-toggle-btn";
        openMenuClick = 0;
    }
}

function openMenu() {
    document.getElementById('nav').classList.toggle('active');
}