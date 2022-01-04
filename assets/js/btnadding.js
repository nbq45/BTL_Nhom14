let btn = document.querySelectorAll('.btnAdding');
let products = [{
        name: 'Bạc xỉu',
        tag: 'Bạc xỉu',
        price: 35.000,
        inCart: 0,
    },
    {
        name: 'Cà phê đen',
        tag: 'Cà phê đen',
        price: 28.000,
        inCart: 0,
    },
    {
        name: 'Cà phê nâu',
        tag: 'Cà phê nâu',
        price: 30.000,
        inCart: 0,
    },
    {
        name: 'Cà phê đen',
        tag: 'Cà phê đen',
        price: 35.000,
        inCart: 0,
    },
    {
        name: 'Capuchino',
        tag: 'Capuchino',
        price: 40.000,
        inCart: 0,
    },
    {
        name: 'Trà đào cam sả',
        tag: 'Trà đào cam sả',
        price: 35.000,
        inCart: 0,
    },
]
for (let i = 0; i < btn.length; i++) {
    btn[i].addEventListener('click', () => {
        cartNumbers(products[i]);
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
    if (productNumbers) {
        document.querySelector('.clearfix .number-order').textContent = productNumbers;
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
    if (productNumbers) {
        localStorage.setItem('cartNumbers', productNumbers + 1);
        document.querySelector('.clearfix .number-order').textContent = productNumbers + 1;
    } else {
        localStorage.setItem('cartNumbers', 1);
        document.querySelector('.clearfix .number-order').textContent = 1;
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
onLoadCartNumbers();