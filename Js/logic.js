document.getElementById("getAll").addEventListener("click", getAllProducts)

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

    let allProducts = await makeRequest(`./receivers/productReceiver.php?action=${action}`, "GET");
    console.log(allProducts)
}
