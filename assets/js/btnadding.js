let btn = document.querySelectorAll('.btnAdding');
let products = [{
        name: 'Bạc xỉu',
        tag: 'Bạc xỉu',
        price: 35,
        inCart: 0
    },
    {
        name: 'Cà phê đen',
        tag: 'Cà phê đen',
        price: 28,
        inCart: 0
    },
    {
        name: 'Cà phê nâu',
        tag: 'Cà phê nâu',
        price: 30,
        inCart: 0
    },
    {
        name: 'Cà phê đen',
        tag: 'Cà phê đen',
        price: 35,
        inCart: 0
    },
    {
        name: 'Capuchino',
        tag: 'Capuchino',
        price: 40,
        inCart: 0
    },
    {
        name: 'Trà đào cam sả',
        tag: 'Trà đào cam sả',
        price: 35,
        inCart: 0
    },
    {
        name: 'Trà chanh',
        tag: 'Trà chanh',
        price: 28,
        inCart: 0
    },
    {
        name: 'Hồng trà sữa',
        tag: 'Hồng trà sữa',
        price: 40,
        inCart: 0
    },
    {
        name: 'Sữa chua đánh đá',
        tag: 'Sữa chua đánh đá',
        price: 28,
        inCart: 0
    },
    {
        name: 'Sữa chua cacao',
        tag: 'Sữa chua cacao',
        price: 30,
        inCart: 0
    },
    {
        name: 'Sữa chua cafe',
        tag: 'Sữa chua cafe',
        price: 35,
        inCart: 0
    },
    {
        name: 'Bánh quy bơ',
        tag: 'Bánh quy bơ',
        price: 28,
        inCart: 0
    },
    {
        name: 'Trà chanh',
        tag: 'Trà chanh',
        price: 20,
        inCart: 0
    },
    {
        name: 'Bánh quy socola',
        tag: 'Bánh quy socola',
        price: 30,
        inCart: 0
    },
    {
        name: 'Hướng dương',
        tag: 'Hướng dương',
        price: 20,
        inCart: 0
    },
]
for (let i = 0; i < btn.length; i++) {
    btn[i].addEventListener('click', () => {
        cartNumbers(products[i]);
        totalCost(products[i])
    })
}

function onLoadCartNumbers() {
    let productNumbers = localStorage.getItem('cartNumbers');
    if (productNumbers) {
        document.querySelector('.bill-restaurant .number-order').textContent = productNumbers;
    }
    if (productNumbers) {
        document.querySelector('.order-card-user .number-order').textContent = productNumbers;
    }
}

function cartNumbers(product) {
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
    setItems(product);
}

function setItems(product) {
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);
    if (cartItems != null) {
        if (cartItems[product.tag] == undefined) {
            cartItems = {
                ...cartItems,
                [product.tag]: product
            }
        }
        cartItems[product.tag].inCart += 1;
    } else {
        product.inCart = 1;
        cartItems = {
            [product.tag]: product
        }
    }
    localStorage.setItem("productsInCart", JSON.stringify(cartItems));
}

function totalCost(product) {
    //console.log("the product price is", product.price);
    let cartCost = localStorage.getItem('totalCost');
    console.log("My cartCost is", cartCost);
    console.log(typeof cartCost);

    if (cartCost != null) {
        cartCost = parseInt(cartCost);
        localStorage.setItem("totalCost", cartCost + products.price);
    } else {
        localStorage.setItem("totalCost", product.price);
    }
}

function displayCart() {
    let cartItems = localStorage.getItem("productsInCart");
    cartItems = JSON.parse(cartItem);
    let productContainer = document.querySelector('.bill-restaurant .order-card-groups');
    console.log(cartItems);
    if (cartItems && productContainer) {
        productContainer.innerHTML = '';
        Object.values(cartItems).map(item => {
            productContainer.innerHTML += `
            <div class="card-item"> 
                <div class="clearfix">
                    <button class="bi bi-plus"></button>
                    <span class="number-order">${item.inCart}</span>
                    <button class="bi bi-dash"></button>
                    <span class="name-order">${item.name}</span>
                </div>
                <div class="note-order">
                    <div class="row">
                        <div class="col"><input type="text" id="textNote" placeholder="Thêm ghi chú..." style="border: none;"></div>
                        <div class="col-auto"><span class="price-order">${item.price}<sup>đ</sup></span></div>
                    </div>
                </div>
            </div>
            `
        });

    }

}

onLoadCartNumbers();