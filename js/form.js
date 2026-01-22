// const searchBar = document.querySelector(".users .search input");
// searchBtn = document.querySelector(".users .search button");

// searchBtn.onclick = () => {
//     searchBar.classList.toggle("active");
//     searchBar.focus();
//     searchBtn.classList.toggle("active");

// }

const faqs = document.querySelectorAll('.faqu')

faqs.forEach(faq => {
    faq.addEventListener("click", () => {
        faq.classList.toggle("active");
    })
})

// NAV BAR HAMBURGER

const primaryNav = document.querySelector('.primary-navigation');
const navToggle  = document.querySelector('.mobile-nav-toggle');

navToggle.addEventListener('click', (e) => {
    const visibility = primaryNav.getAttribute("data-visible")
    if(visibility === "false")    {
        primaryNav.setAttribute('data-visible', true);
        navToggle.setAttribute('aria-expanded', true)
    } else if (visibility === "true") {
        primaryNav.setAttribute('data-visible', false);
        navToggle.setAttribute('aria-expanded', false)

    }
});


// DROP

var btn = document.getElementById('btn');


function leftClick() {
    btn.style.left = '0'
}

function rightClick() {
    btn.style.left = '50%'
}

const tabs = document.querySelectorAll('.toggle-btn');
const contents = document.querySelectorAll('.tab_panel');

tabs.forEach((tab, index) => {
    tab.addEventListener('click', function() {
        contents.forEach((content) => {
            content.classList.remove('is-active');
        })

        tabs.forEach((tab) => {
            tab.classList.remove('is-active');
        })

        contents[index].classList.add('is-active');
        tabs[index].classList.add('is-active');
    })
})