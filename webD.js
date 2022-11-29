let carts = document.querySelectorAll('.add-cart');
let products = [
    {
        name: "Cartoon Plant Pot",
        tag: "card1",
        price: 180,
        inCart: 0
    },
    {
        name: "Bottle Cans",
        tag: "card2",
        price: 45,
        inCart: 0
    },
    {
        name: "Water Bottle",
        tag: "card3",
        price: 10,
        inCart: 0
    },
    {
        name: "Stationary Holder",
        tag: "card4",
        price: 39,
        inCart: 0
    },
    {
        name: "Designer Plant Holder",
        tag: "card5",
        price: 78,
        inCart: 0
    }
]

for (let i = 0; i < carts.length; i++) {
    carts[i].addEventListener('click', () => {
        cartNumbers(products[i]);
        totalCost(products[i]);
    })
}
function onLoadCartNumbers() {
    let productNumbers = localStorage.getItem('cartNumbers');
    if (productNumbers) {
        document.querySelector('.navitem span').textContent = productNumbers;
    }
}
function cartNumbers(products) {
    let productNumbers = localStorage.getItem('cartNumbers');
    productNumbers = parseInt(productNumbers);
    if (productNumbers) {
        localStorage.setItem('cartNumbers', productNumbers + 1);
        document.querySelector('.navitem span').textContent = productNumbers + 1;

    }
    else {
        localStorage.setItem('cartNumbers', 1);
        document.querySelector('.navitem span').textContent = 1;
    }
    setItems(products);
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
        cartItems = {
            [product.tag]: product
        }
        cartItems[product.tag].inCart = 1;
    }
    localStorage.setItem("productsInCart", JSON.stringify(cartItems));
}

function totalCost(product) {
    let cartCost = localStorage.getItem('totalCost');
    if (cartCost != null) {
        cartCost = parseInt(cartCost);
        localStorage.setItem("totalCost", cartCost + product.price);
    }
    else {
        localStorage.setItem("totalCost", product.price);
    }
}

function displayCart() {
    let cartItems = localStorage.getItem("productsInCart");
    cartItems = JSON.parse(cartItems);
    let productContainer = document.querySelector
        (".products");
    let cartCost = localStorage.getItem('totalCost');

    console.log(cartItems);
    if (cartItems && productContainer) {
        productContainer.innerHTML = '';
        Object.values(cartItems).map(item => {
            productContainer.innerHTML += `<div class="all">
                <div class = "product-title">
                <ion-icon name="close-circle" class="close"></ion-icon>
                    <img src="${item.tag}.jpg">
                </div>
            <div class="name">${item.name}</div>
            <div class="price">Rs.${item.price}</div>
            <div class="quantity"><ion-icon name="arrow-dropleft-circle"></ion-icon>${item.inCart}<ion-icon name="arrow-dropright-circle"></ion-icon></div>
            <div class="total">Rs.${item.inCart * item.price}.00</div>
            </div>
                `;
        });

        productContainer.innerHTML += `
        <div class="basketTotalContainer">
        <form method="post" action="pgRedirect.php">
        <h5 class="basketTotalTitle">Total:&nbsp&nbsp&nbsp&nbsp</h5>
        <h5 class="basketTotal">Rs.${cartCost}.00</h5>
        <div><button name="basketTotal" type="submit" value="${cartCost}" onclick="">Checkout</button></div>
        </form>
        </div>
        `
    }
}
const forms = document.querySelector(".forms"),
    pwShowHide = document.querySelectorAll(".eye-icon"),
    links = document.querySelectorAll(".link");

pwShowHide.forEach(eyeIcon => {
    eyeIcon.addEventListener("click", () => {
        let pwFields = eyeIcon.parentElement.parentElement.querySelectorAll(".password");

        pwFields.forEach(password => {
            if (password.type === "password") {
                password.type = "text";
                eyeIcon.classList.replace("bx-hide", "bx-show");
                return;
            }
            password.type = "password";
            eyeIcon.classList.replace("bx-show", "bx-hide");
        })

    })
})

links.forEach(link => {
    link.addEventListener("click", e => {
        e.preventDefault(); //preventing form submit
        forms.classList.toggle("show-signup");
    })
})


onLoadCartNumbers();
displayCart();