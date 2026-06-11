let cart = {
  Tea: { price: 25, qty: 1 },
  Coffee: { price: 30, qty: 2 }
};

function plus(name) {

  cart[name].qty++;

  update();
}

function minus(name) {

  if (cart[name].qty > 0) {
    cart[name].qty--;
  }

  update();
}

function update() {

  let total = 0;

  for (let name in cart) {

    let el = document.getElementById(name + "-qty");

    if (el) {
      el.innerText = cart[name].qty;
    }

    total += cart[name].price * cart[name].qty;
  }

  let totalElement = document.getElementById("total");

  if (totalElement) {
    totalElement.innerText = "EGP " + total;
  }
}

update();