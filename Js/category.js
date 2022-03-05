async function makeRequest(url, method, body) {
    try {
        let response = await fetch(url, {
            method,
            body
        })
        let result = await response.json();
        return result
    } catch(err) {
        console.error(err)
    }
}
    


async function getAllCategories() {
    const action = "getById";


    let categoryById = await makeRequest(`/api/receiver/categoryReceiver.php?action=${action}&ID=${ID}`, "GET");
    console.log(categoryById)

    for (let i = 0; i < categoryById.length; i++) {
        let categories = categoryById[i];

        const main = document.getElementsByTagName("span")[0];

        let colContainer = document.createElement("div")
        colContainer.classList.add('col')
        let childContainer = document.createElement("div")
        childContainer.classList.add('card', 'shadow-card')

        let childImgContainer = document.createElement("img")
        childImgContainer.classList.add('bd-placeholder-img', 'card-img-top')
        childImgContainer.src = "/productImages/" + categories.categoryImg

        let childTextContainer = document.createElement("div")
        childTextContainer.classList.add("card-body")

        let childTitle = document.createElement("h2")
        childTitle.classList.add("card-text")
        childTitle.innerHTML = categories.categoryName


        main.append(colContainer, childContainer, childImgContainer, childTextContainer, childTitle)

    }
}

window.addEventListener("load", () => {
    getAllCategories()
})