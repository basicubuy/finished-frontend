const tabs = document.querySelectorAll(".tabs");
const tab = document.querySelectorAll(".tab");
const panel = document.querySelectorAll(".tab-content");

const tab_s = document.querySelectorAll(".tab-s");
const panel_s = document.querySelectorAll(".tab-content-s");

function onTabClick(event) {

    // deactivate existing active tabs and panel

    for (let i = 0; i < tab.length; i++) {
        tab[i].classList.remove("active");
    }

    for (let i = 0; i < panel.length; i++) {
        panel[i].classList.remove("active");
    }
    // activate new tabs and panel
    event.target.classList.add('active');
    let classString = event.target.getAttribute('data-target');
    console.log(classString);
    document.getElementById('panels').getElementsByClassName(classString)[0].classList.add("active");
}

function onTab_s_Click(event) {

    // deactivate existing active tabs and panel

    for (let i = 0; i < tab_s.length; i++) {
        tab_s[i].classList.remove("active");
    }

    for (let i = 0; i < panel_s.length; i++) {
        panel_s[i].classList.remove("active");
    }

    // activate new tabs and panel
    event.target.classList.add('active');
    let classString = event.target.getAttribute('data-target');
    console.log(classString);
    document.getElementById('content-panels').getElementsByClassName(classString)[0].classList.add("active");
}

for (let i = 0; i < tab.length; i++) {
    tab[i].addEventListener('click', onTabClick, false);
}
for (let i = 0; i < tab_s.length; i++) {
    tab_s[i].addEventListener('click', onTab_s_Click, false);
}