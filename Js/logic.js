document.getElementById("getById").addEventListener("click", getProductFromId)

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


async function getProductFromId() {
    const action = "getById";
    const idToGet = 4;

    let specificProduct = await makeRequest(`./../receivers/productReceiver.php?action=${action}&ID=${idToGet}`, "GET");
    console.log(specificProduct)
};