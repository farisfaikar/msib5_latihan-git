let tabLinks = document.getElementsByClassName("tab-links");
let tabContents = document.getElementsByClassName("tab-contents");

function openTab(tabName) {
    let tabLink;
    let tabContent;

    for (tabLink of tabLinks) {
        tabLink.classList.remove("active-link");
    }
    for (tabContent of tabContents) {
        tabContent.classList.remove("active-content");
    }

    event.currentTarget.classList.add("active-link");
    document.getElementById(tabName).classList.add("active-content");
}
