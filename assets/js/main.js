/* ケンミル */ /* 神様最高 */ "use strict"; console.log(new Date);

/* DOM */
const elems = document.querySelectorAll(".sidenav");
const newsArticlesCont = document.querySelector(".news-articles-cont");

getNews();

/* Event Handlers */
// The side navs.
document.addEventListener('DOMContentLoaded', initSideNavs());

/* Functions */
// This is to activate the side navs.
function initSideNavs () {
    M.Sidenav.init(elems);
}

function renderArticle (article) {
    newsArticlesCont.insertAdjacentHTML("beforeend", 
    `
        <!-- News Article -->
        <div class="col s12 m4 l3">
            <div class="card medium">
                <div class="card-image">
                    <img src="${article.urlToImage}">
                    <span class="card-title">${article.title}</span>
                </div>
                <div class="card-content">
                    <p>${article.description}</p>
                </div>
                <div class="card-action">
                    <a href="${article.url}" target="_blank" class="green-text text-darken-2">Read More</a>
                </div>
            </div>
        </div>
    `);
}

function getNews () {
    fetch("https://newsapi.org/v2/top-headlines?country=us&pageSize=32&apiKey=8fd194918cfc40c1b1da61dec0237fc3")
    .then(response => {
        return response.json();
    })
    .then(data => {
        const dataResults = data;
        
        console.log(JSON.stringify(dataResults));
        dataResults.articles.forEach(article => {
            renderArticle(article);
        });
    })
    .catch((error) => {
        console.log(error);
        placeHolderArticles.articles.forEach(article => {
            renderArticle(article);
        });
    });
}