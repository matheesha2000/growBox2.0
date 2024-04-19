// OPEN & CLOSE CART
const cartIcon = document.querySelector("#cart-icon");
const cart = document.querySelector(".cart");
const closeCart = document.querySelector("#cart-close");

cartIcon.addEventListener("click", () => {
    cart.classList.add("active");
});

closeCart.addEventListener("click", () => {
    cart.classList.remove("active");
});

// Start when the document is ready
if (document.readyState == "loading") {
    document.addEventListener("DOMContentLoaded", start);
} else {
    start();
}

// =============== START ====================
function start() {
    addEvents();
}

// ============= UPDATE & RERENDER ===========
function update() {
    addEvents();
    updateTotal();
}

// =============== ADD EVENTS ===============
function addEvents() {
    // Remove items from cart
    let cartRemove_btns = document.querySelectorAll(".cart-remove");
    console.log(cartRemove_btns);
    cartRemove_btns.forEach((btn) => {
        btn.addEventListener("click", handle_removeCartItem);
    });

    // Change item quantity
    let cartQuantity_inputs = document.querySelectorAll(".cart-quantity");
    cartQuantity_inputs.forEach((input) => {
        input.addEventListener("change", handle_changeItemQuantity);
    });

    // Add item to cart
    let addCart_btns = document.querySelectorAll(".Second-add-cart");
    addCart_btns.forEach((btn) => {
        btn.addEventListener("click", handle_second_addCartItem);
    });

    // Buy Order
    const buy_btn = document.querySelector(".D-ShopButtonBuyNow");
    buy_btn.addEventListener("click", handle_buyOrder);
}

// ============= HANDLE EVENTS FUNCTIONS =============
let itemsAdded = [];

function handle_second_addCartItem() {
    let product = this.parentElement.parentElement;
    let title = product.querySelector(".product-title1").innerHTML;
    let details = product.querySelector(".product-detail1").innerHTML;
    let price = product.querySelector(".product-price1").innerHTML;
    let imgSrc = product.querySelector(".product-img1").src;

    console.log(title, details, price, imgSrc);

    let newToAdd = {
        title,
        details,
        price,
        imgSrc,
    };

    // handle item is already exist
    if (itemsAdded.find((el) => el.title == newToAdd.title)) {
        alert("This Item is Already Exist in Your Cart !");
        return;
    } else {
        itemsAdded.push(newToAdd);
    }

    // Add product to cart
    let cartBoxElement = CartBoxComponent(title, price, imgSrc, details);
    let newNode = document.createElement("div");
    newNode.innerHTML = cartBoxElement;
    const cartContent = cart.querySelector(".cart-content");
    cartContent.appendChild(newNode);

    update();
}


function handle_removeCartItem() {
    this.parentElement.remove();
    itemsAdded = itemsAdded.filter(
        (el) =>
            el.title !=
            this.parentElement.querySelector(".cart-product-title").innerHTML
    );

    update();
}

function handle_changeItemQuantity() {
    if (isNaN(this.value) || this.value < 1) {
        this.value = 1;
    }
    this.value = Math.floor(this.value); // to keep it integer

    update();
}

function handle_buyOrder() {
    if (itemsAdded.length <= 0) {
        alert("Please Make an Order first.");
        return;
    }
    const cartContent = cart.querySelector(".cart-content");
    cartContent.innerHTML = "";
    alert("Your Order is Placed Successfully :)");
    itemsAdded = [];

    update();
}

// =========== UPDATE & RERENDER FUNCTIONS =========
function updateTotal() {
    let cartBoxes = document.querySelectorAll(".cart-box");
    const totalElement = cart.querySelector(".total-price");
    let total = 0;
    cartBoxes.forEach((cartBox) => {
        let priceElement = cartBox.querySelector(".cart-price");
        let price = parseFloat(priceElement.innerHTML.replace("Rs.", ""));
        let quantity = cartBox.querySelector(".cart-quantity").value;
        total += price * quantity + 300;
    });

    // keep 2 digits after the decimal point
    total = total.toFixed(2);
    // or you can use also
    // total = Math.round(total * 100) / 100;

    totalElement.innerHTML = "Rs." + total;
}

// ============= HTML COMPONENTS =============
function CartBoxComponent(title, price, imgSrc, details) {
    return `
    <div class="cart-box">
        <img src=${imgSrc} alt="" class="cart-img">
        <div class="detail-box">
            <div class="cart-product-title">${title +"  -  (Basic Package)"}</div>
            <div class="cart-product-details">${details}</div>
            <div class="cart-price">${price}</div>
            <div class="cart-Shipping-Cost">${"Shipping Cost + Rs.300.00"}</div>
            <input type="number" value="1" class="cart-quantity">
            
           
        </div>
        <!-- REMOVE CART  -->
        <i class='ri-delete-bin-fill cart-remove'></i>
    </div>`;
}