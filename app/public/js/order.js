/**
 * Cookies
 * AJAX Http Request to validate order
 */

// DOM
const cartBtns = document.getElementsByClassName("btn-cart");
const cartArticles = document.getElementById("cart-articles");
const cartToggler = document.getElementById("cart-toggler");
const overlay = document.getElementById("overlay");
const cartSection = document.getElementById("cart-section");
const btnOrder = document.getElementById("btn-order");

// Functions
function setCookie(name, value, exdays) {
    if (getCookie("accept_cookies") == "yes") {
        const d = new Date();
        d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
        let expires = "expires=" + d.toUTCString();
        document.cookie = name + "=" + value + ";" + expires + ";path=/";
    }
}

function getCookie(name) {
    let cname = name + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(";");
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == " ") {
            c = c.substring(1);
        }
        if (c.indexOf(cname) == 0) {
            return c.substring(cname.length, c.length);
        }
    }
    return "";
}

function toggleCart(id) {
    let cartCookie = getCookie("cart");

    if (cartCookie) {
        let cartArticles = cartCookie.split(",");

        if (cartArticles.includes(id))
            cartArticles.splice(cartArticles.indexOf(id), 1);
        else cartArticles.push(id);

        if (cartArticles.length > 0) {
            let newCookie = cartArticles[0];

            for (let i = 1; i < cartArticles.length; i++)
                newCookie += "," + cartArticles[i];

            setCookie("cart", newCookie, 30);
        } else {
            document.cookie =
                "cart=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        }
    } else {
        setCookie("cart", id, 30);
    }
}

function toggleIcon(cartBtn, id) {
    let cartCookie = getCookie("cart");

    if (cartCookie) {
        let cartArticles = cartCookie.split(",");

        if (cartArticles.includes(id)) {
            cartBtn.firstElementChild.classList.remove("fa-cart-plus");
            cartBtn.firstElementChild.classList.add("fa-check");
        } else {
            cartBtn.firstElementChild.classList.remove("fa-check");
            cartBtn.firstElementChild.classList.add("fa-cart-plus");
        }

        return;
    }

    cartBtn.firstElementChild.classList.remove("fa-check");
    cartBtn.firstElementChild.classList.add("fa-cart-plus");
}

function findArticle(id, callback) {
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            callback(JSON.parse(xhttp.response));
        }
    };

    xhttp.open("GET", "api/articles/" + id, true);
    xhttp.send();
}

function updateCartView() {
    cartCookie = getCookie("cart");
    cartArticles.innerHTML = "";

    if (cartCookie) {
        let articleIds = cartCookie.split(",");

        for (let articleId of articleIds) {
            findArticle(articleId, (article) => {
                cartArticles.innerHTML += `
                <div class="row mb-4 d-flex justify-content-between align-items-center">
                <div class="col-md-2 col-lg-2 col-xl-2">
                    <img src="storage/${article.image_url}"
                        class="img-fluid rounded-3" alt="Cotton T-shirt">
                </div>
                <div class="col-md-3 col-lg-3 col-xl-3">
                    <h6 class="text-black mb-0">${article.name}</h6>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                    <h6 class="mb-0">${article.price} FCFA</h6>
                </div>
                <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                    <a href="#!" class="text-muted"><i
                            class="fas fa-times"></i></a>
                </div>
                </div>
            
                <hr class="my-4">
            `;
            });
        }
    }
}

function updateBtnState() {
    cartCookie = getCookie("cart");

    if (cartCookie) {
        btnOrder.style.pointerEvents = "auto";
        btnOrder.style.opacity = 1;
    }
    else {
        btnOrder.style.pointerEvents = "none";
        btnOrder.style.opacity = 0.5;
    }
}

updateCartView();
updateBtnState();

for (const cartBtn of cartBtns) {
    toggleIcon(cartBtn, cartBtn.id);

    cartBtn.addEventListener("click", () => {
        toggleCart(cartBtn.id);
        toggleIcon(cartBtn, cartBtn.id);
        updateCartView();
        updateBtnState();
    });
}

cartToggler.addEventListener("click", () => {
    cartSection.classList.toggle("d-none");
});

overlay.addEventListener("click", () => {
    cartSection.classList.add("d-none");
});
