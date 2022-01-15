const btn = document.querySelectorAll(".btnAdding")
    //console.log(btn)
btn.forEach(function(button, index) {
    button.addEventListener("click", function(event) {
        {
            var btnItem = event.target
            var product = btnItem.parentElement.parentElement
            var productName = product.querySelector(".item-name").innerText
            var productPrice = product.querySelector(".price").innerText
            var productNumbers = product.querySelector(".number-order").innerText
            addcart(productName, productPrice, productNumbers)
        }
    })

})

function cartNumber() {
    let productNumbers = localStorage.getItem('cartNumbers');
    productNumbers = parseInt(productNumbers);
    if (productNumbers) {
        localStorage.setItem('cartNumbers', productNumbers + 1);
        document.querySelector('.bill-restaurant .number-order').textContent = productNumbers + 1;
    } else {
        localStorage.setItem('cartNumbers', 1);
        document.querySelector('.bill-restaurant .number-order').textContent = 1;
    }
    if (productNumbers) {
        localStorage.setItem('cartNumbers', productNumbers + 1);
        document.querySelector('.order-card-user .number-order').textContent = productNumbers + 1;
    } else {
        localStorage.setItem('cartNumbers', 1);
        document.querySelector('.order-card-user .number-order').textContent = 1;
    }
    if (productNumbers) {
        localStorage.setItem('cartNumbers', productNumbers + 1);
        document.querySelector('.clearfix .number-order').textContent = productNumbers + 1;
    } else {
        localStorage.setItem('cartNumbers', 1);
        document.querySelector('.clearfix .number-order').textContent = 1;
    }
    if (productNumbers) {
        localStorage.setItem('cartNumbers', productNumbers + 1);
        document.querySelector('.info-order .total').textContent = productNumbers + 1;
    } else {
        localStorage.setItem('cartNumbers', 1);
        document.querySelector('.info-order .total').textContent = 1;
    }
    setItems(product);
}

function setItems(product) {
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);
    if (cartItems != null) {
        if (cartItems[productName] == undefined) {
            cartItems = {
                ...cartItems,
                [productName]: product
            }
        }
        cartItems[productName].inCart += 1;
    } else {
        product.inCart = 1;
        cartItems = {
            [productName]: product
        }
    }
    localStorage.setItem("productsInCart", JSON.stringify(cartItems));

}

// ------------------------ Total price ---------------------------
// function carttotal() {
//     var cardItem = document.querySelectorAll("order-card-groups card-item")
//     var totalC = 0
//     for (var i = 0; i < cardItem.length; i++) {
//         var inputValue = cardItem[i].querySelector("number-order").innerHTML
//         var productPrice = cardItem[i].querySelector(".price").innerHTML
//         console.log(productPrice)
//     }
//     var cardTotalA = document.querySelector(".price-total span")
// }

function addcart(productName, productPrice, productnumbers) {
    var addtr = document.createElement("cart-item")
    var trcontent = '<div class="card-item"><div class="clearfix"><button class="bi bi-plus"></button><span class="number-order">' + productnumbers + ' < /span><button class="bi bi-dash"></button > < span class = "name-order" > < span class = "title" > ' + productName + ' < /span></div > < div class = "note-order" > < input type = "text" id = "textNote" placeholder = "Thêm ghi chú..." style = "border: none;" > < span class = "price-order" > < span class = "price" > ' + productPrice + ' < /span><sup>đ</sup > < /span></div > < /div>'
    addtr.innerHTML = trcontent
    var cartTable = document.querySelector(".order-card-groups")
    cartTable.append(addtr)
        // carttotal()
    deleteCard()
}
// ------------------------- DELETE CARD --------------------------
function deleteCard() {
    var cardItem = document.querySelectorAll("order-card-groups card-item")
    for (var i = 0; i < cardItem.length; i++) {
        var productT = document.querySelectorAll(".bi-dash")
        productT[i].addEventListener("click", function(event) {
            var cartDelete = event.target
            var cartitemR = cartDelete.parentElement
            cartitemR.remove()
            carttotal()
                // console.log(cartitemR)
        })
    }
}

function inputchange() {
    var cardItem = document.querySelectorAll("order-card-groups card-item")
    for (var i = 0; i < cardItem.length; i++) {
        var productT = document.querySelectorAll(".bi-dash")
        productT[i].addEventListener("click", function(event) {
            var cartDelete = event.target
            var cartitemR = cartDelete.parentElement
            cartitemR.remove()
            carttotal()
                // console.log(cartitemR)
        })
    }
}