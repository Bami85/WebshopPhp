// document.getElementById("getAll").addEventListener("click", getAllProducts)
// document.getElementById("getById").addEventListener("click", getProductFromId)
// document.getElementById("getAllProducts").addEventListener("click", getAllProducts)

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

        let allProducts = await makeRequest(`./api/receiver/productReceiver.php?action=${action}`, "GET");
        console.log(allProducts)

        for (var i = 0; i < allProducts.length; i++) {
            let product = allProducts[i];

            const main = document.getElementsByTagName("main")[0];

            let asd = document.createElement("div")
            asd.innerHTML = product.productname

            let phoneImg = document.createElement("img")
            phoneImg.src =  "./productImages/AppleWatch/" + product.image

            main.appendChild(phoneImg)
            
        }
        

    }



// -------------------------------------------techstore-------------------------------------

// function addProductsToWebpage() {

//     let main = document.getElementsByTagName("main")[0];
 
    
//     for (var i = 0; i <listOfProducts.length; i++) {
//         let productContainer = createProductContainer(listOfProducts[i]);

//         main.appendChild(productContainer)

//     };

// }


// function createProductContainer(product) {
//     let productContainer = document.createElement("div")
//     productContainer.classList.add("productContainer")
//     if(isGrey){
//         productContainer.style.backgroundColor = ("#f5f5f5")
//     }
//     // Text container

//     let textContainer = document.createElement("div")
//     textContainer.classList.add("textContainer")

//     let titleText = document.createElement("h1")
//     titleText.classList.add("titleText")
//     titleText.innerText = product.title

//     let descriptionText = document.createElement("h3")
//     descriptionText.classList.add("descriptionText")
//     descriptionText.innerText = product.description

//     textContainer.append(titleText, descriptionText)

//     // image container
//     let imageContainer = document.createElement("div")
//     imageContainer.classList.add("imageContainer")

//     let phoneImg = document.createElement("img")
//     phoneImg.classList.add("phoneImg")
//     phoneImg.src =  "./assets/" + product.image
    
//     imageContainer.append(phoneImg)

//     //Price container
//     let priceContainer = document.createElement("div")
//     priceContainer.classList.add("priceContainer")

//     let priceText = document.createElement("h2")
//     priceText.classList.add("priceText")
//     priceText.innerText = product.price + " kr"

//     priceContainer.append(priceText)

//     // Button container
//     let buttonContainer = document.createElement("div")
//     buttonContainer.classList.add("buttonContainer")
//     buttonContainer.addEventListener("click", () =>  {
//         addToCart(product)
//     });
    
//     let icon = document.createElement("i")
//     icon.className = "fas fa-cart-arrow-down"
//     icon.classList.add("cartIcon")

//     let buttonTextContainer = document.createElement("div")
//     buttonTextContainer.innerText = "Lägg till i kundvagnen"

//     buttonContainer.append(icon, buttonTextContainer)
    
//     productContainer.append(textContainer, imageContainer, priceText, buttonContainer)
//     return productContainer

// }



//----------------------------------------------------------------------------------------------------------------------------------------


async function getProductFromId() {
    const action = "getById";
    const idToGet = 6;

    let specificProduct = await makeRequest(`./api/receiver/productReceiver.php?action=${action}&ID=${idToGet}`, "GET");
    console.log(specificProduct)
}