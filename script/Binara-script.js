let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}

//cart
let cart = [];

function addToCart(productName, productPrice, productImage) {
  cart.push({
      name: productName,
      price: productPrice,
      quantity: 1,
      image: productImage
  });

  displayCart();
}


function displayCart() {
    let cartTable = document.getElementById('cart-table');
    cartTable.innerHTML = `
        <tr>
            <th>Product Image</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Action</th>
        </tr>
    `;
    let total = 0;
    cart.forEach((item, index) => {
        let itemTotal = item.price * item.quantity;
        total += itemTotal;
        cartTable.innerHTML += `
            <tr>
                <td><img src="${item.image}" alt="Product Image" class="cart-img"></td>
                <td>${item.name}</td>
                <td>$${item.price.toFixed(2)}</td>
                <td><input type="number" value="${item.quantity}" onchange="updateQuantity(${index}, this.value)"></td>
                <td>$${itemTotal.toFixed(2)}</td>
                <td><button onclick="deleteItem(${index})">Delete</button></td>
            </tr>
        `;
    });

    cartTable.innerHTML += `
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Total: $${total.toFixed(2)}</td>
            <td><button onclick="checkout(${total})">Checkout</button></td>
        </tr>
    `;
}

function updateQuantity(index, quantity) {
    cart[index].quantity = quantity;
    displayCart();
}

function deleteItem(index) {
    cart.splice(index, 1);
    displayCart();
}

function checkout(total) {
    alert(`Total amount to be paid: $${total.toFixed(2)}`);
}
function checkout(total) {
    alert(`Total amount to be paid: $${total.toFixed(2)}`);
    // Prevent the default action of the event
    event.preventDefault();
    // You can include the logic for handling the checkout process here
}
