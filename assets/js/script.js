const btn = document.querySelectorAll("category-right")
// console.log(btn)
btn.forEach(funtion(button,index){
    button.addEventListerner("click", function(event){{
    var btnItem = even.target
    var product = btnItem.parentElement
    var productName = product.querySelector("H1").innerText
    var productPrice = product.querySelector("H2").innerText
    addcart(productName,productPrice)
}})
})
function addcart(productName,productPrice){
    var addtr = document.createElement("tr")
    var trcontent = productPrirce
    var cartTable = document.querySelector("order-card-groups")
    
}