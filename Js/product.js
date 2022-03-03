// --------------------------------------------fungerande kod-------------------------------

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
    

async function getAllProducts() {
    const action = "getAll";

    let allProducts = await makeRequest(`/api/receiver/productReceiver.php?action=${action}`, "GET");
    console.log(allProducts)

    for (let i = 0; i < allProducts.length; i++) {
        let product = allProducts[i];

        const main = document.getElementsByTagName("span")[0];
        
        let colContainer = document.createElement("div")
        colContainer.classList.add('col')

        let childContainer = document.createElement("div")
        childContainer.classList.add('card', 'shadow-card')

        let childImgContainer = document.createElement("img")
        childImgContainer.classList.add('bd-placeholder-img', 'card-img-top')
        childImgContainer.src = "/productImages/" + product.image

        let childTextContainer = document.createElement("div")
        childTextContainer.classList.add("card-body")

        let childTitle = document.createElement("p")
        childTitle.classList.add("card-text")
        childTitle.innerText = product.productName

        let childPriceContainer = document.createElement("div")
        childPriceContainer.classList.add('d-flex', 'justify-content-between', 'align-items-center')

        let childPrice = document.createElement("p")
        childPrice.innerText = product.unitPrice + "kr"

        let childButtonContainer = document.createElement("div")
        childButtonContainer.classList.add("btn-group")

        let childButtonContainerAdd = document.createElement("button")
        childButtonContainerAdd.classList.add('btn', 'btn-sm', 'btn-outline-secondary')
        childButtonContainerAdd.innerText = "Add"

        let childButtonContainerRemove = document.createElement("button")
        childButtonContainerRemove.classList.add('btn', 'btn-sm', 'btn-outline-secondary')
        childButtonContainerRemove.innerText = "Remove"
        
        main.append(colContainer, childContainer, childImgContainer, childTextContainer, childTitle, childPriceContainer, childPrice, childButtonContainer, childButtonContainerAdd, childButtonContainerRemove)
          
    }
}

window.addEventListener("load", () => {
    getAllProducts()
})
// --------------------------------------------fungerande kod--------------------------------