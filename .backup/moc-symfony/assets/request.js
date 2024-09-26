/*
const render = () =>{
    let articleList = document.createElement("ul");
    for(let article of getArticlesArray()){
        let li = document.createElement("li");
        li.innerHTML += `${article.title}`;
        articleList.append(li)
    }
    return articleList;
}

async function getArticlesArray() {
    const response = await fetch("http://localhost:3999/school/articles");
    return await response.json();
}

document.querySelector("body").append(render());

*/