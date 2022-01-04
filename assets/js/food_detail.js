const btn = document.querySelector(".menu_category .category-right .btn-primary")
    //console.log(btn)
btn.forEach(function(button, index) {
    button.addEventListerner("click", function(event) {
        {
            var btnItem = event.target
            var product = btnItem.parentElement
            var productName = product.querySelector("H1").innerText
            var productPrice = product.querySelector("H2").innerText
            addcart(productName, productPrice)
        }
    })

})

function addcart(productName, productPrice) {
    var addtr = document.createElement(".order-card-groups")
    var cardItem = document.querySelectorAll(".order-card-groups .card-item")
    for (var i = 0; i < cardItem.length; i++) {
        var productT = document.querySelectorAll(".title")
        if (productT[i].innerHTML == productName) {
            alert("Sản phẩm cuart bạn đã ở trong giỏ hàng")
            return
        }
    }
    var trcontent = '<div class="card-item"><div class="clearfix"><button class="bi bi-plus"></button><span class="number-order">1</span><button class="bi bi-dash"></button><span class="name-order"><span class="title">' + productName + '</span></div><div class="note-order"><input type="text" id="textNote" placeholder="Thêm ghi chú..." style="border: none;"><span class="price-order"><span class="price">' + productPrice + '</span><sup>đ</sup></span></div></div>'
    addtr.innerHTML = trcontent
    var cartTable = document.querySelector(".card-item")
    cartTable.append(addtr)
    carttotal()
    deleteCard()
}
// ------------------------ Total price ---------------------------
function carttotal() {
    var cardItem = document.querySelectorAll(".order-card-groups .card-item")
    var totalC = 0
    for (var i = 0; i < cardItem.length; i++) {
        var inputValue = cardItem[i].querySelector("input").value
        var productPrice = cardItem[i].querySelector(".price").innerHTML
        console.log(productPrice)
        totalA = inputValue * productPrice * 1000
            // totalB = totalA.toLocalString('de-DE')
        totalC = totalC + totalA
            //totalD = totalC.toLocaleString('de-De')
    }
    var cardTotalA = document.querySelector(".price-total span")
    cardTotalA.innerHTML = totalC.toLocaleString('de-De')
}
// ------------------------- DELETE CARD --------------------------
function deleteCard() {
    var cardItem = document.querySelectorAll(".order-card-groups .card-item")
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
    var cardItem = document.querySelectorAll(".order-card-groups .card-item")
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