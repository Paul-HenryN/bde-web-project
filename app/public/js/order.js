/**
 * Cookies
 * AJAX Http Request to validate order
 */

// Functions
function setCookie(name, value, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
    let expires = "expires=" + d.toUTCString();
    document.cookie = name + "=" + value + ";" + expires + ";path=/";
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

// DOM
const cartBtns = document.getElementsByClassName("btn-cart");

for (const cartBtn of cartBtns) {
    toggleIcon(cartBtn, cartBtn.id);

    cartBtn.addEventListener("click", () => {
        toggleCart(cartBtn.id);
        toggleIcon(cartBtn, cartBtn.id);
    });
}
