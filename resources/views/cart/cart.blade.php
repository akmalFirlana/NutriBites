<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .cart-container {
            max-width: 800px;
            margin: 50px auto;
            padding: 15px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 10px rgba(0,0,0,0.15);
        }
        .cart-header {
            padding: 10px 0;
            border-bottom: 2px solid #e9ecef;
        }
        .cart-header h2 {
            margin: 0;
            font-weight: 700;
        }
        .cart-item {
            display: flex;
            align-items: center;
            padding: 15px 0;
            border-bottom: 1px solid #e9ecef;
        }
        .cart-item img {
            width: 80px;
            margin-right: 15px;
        }
        .cart-item .item-info {
            flex-grow: 1;
        }
        .cart-item .item-info h5 {
            margin: 0;
            font-weight: 600;
        }
        .cart-item .item-info p {
            margin: 0;
            color: #6c757d;
        }
        .cart-item .item-quantity {
            display: flex;
            align-items: center;
        }
        .cart-item .item-quantity input {
            width: 50px;
            text-align: center;
            margin: 0 10px;
        }
        .cart-item .item-total {
            font-weight: 600;
        }
        .cart-footer {
            padding: 15px 0;
            text-align: right;
        }
        .cart-footer .btn {
            padding: 10px 20px;
        }
        .cart-footer .btn-checkout {
            background-color: #28a745;
            color: #fff;
        }
        .cart-footer .btn-checkout:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

<div class="container cart-container">
    <div class="cart-header">
        <h2>Shopping Cart</h2>
    </div>

    <div class="cart-item">
        <img src="https://via.placeholder.com/80" alt="Product Image">
        <div class="item-info">
            <h5>Product Name</h5>
            <p>$50.00</p>
        </div>
        <div class="item-quantity">
            <button class="btn btn-outline-secondary btn-sm" onclick="decreaseQuantity(this)">-</button>
            <input type="text" class="form-control form-control-sm" value="1">
            <button class="btn btn-outline-secondary btn-sm" onclick="increaseQuantity(this)">+</button>
        </div>
        <div class="item-total">$50.00</div>
    </div>

    <div class="cart-item">
        <img src="https://via.placeholder.com/80" alt="Product Image">
        <div class="item-info">
            <h5>Another Product</h5>
            <p>$30.00</p>
        </div>
        <div class="item-quantity">
            <button class="btn btn-outline-secondary btn-sm" onclick="decreaseQuantity(this)">-</button>
            <input type="text" class="form-control form-control-sm" value="1">
            <button class="btn btn-outline-secondary btn-sm" onclick="increaseQuantity(this)">+</button>
        </div>
        <div class="item-total">$30.00</div>
    </div>

    <div class="cart-footer">
        <h4>Total: $80.00</h4>
        <button class="btn btn-danger">Clear Cart</button>
        <button class="btn btn-checkout">Checkout</button>
    </div>
</div>

<!-- Bootstrap JS and Dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function increaseQuantity(element) {
        let input = element.parentNode.querySelector('input');
        let value = parseInt(input.value, 10);
        input.value = value + 1;
        updateTotal(element, value + 1);
    }

    function decreaseQuantity(element) {
        let input = element.parentNode.querySelector('input');
        let value = parseInt(input.value, 10);
        if (value > 1) {
            input.value = value - 1;
            updateTotal(element, value - 1);
        }
    }

    function updateTotal(element, quantity) {
        let itemTotal = element.parentNode.nextElementSibling;
        let price = parseFloat(element.parentNode.previousElementSibling.querySelector('p').innerText.replace('$', ''));
        itemTotal.innerText = '$' + (price * quantity).toFixed(2);

        updateCartTotal();
    }

    function updateCartTotal() {
        let cartItems = document.querySelectorAll('.cart-item');
        let total = 0;

        cartItems.forEach(item => {
            let itemTotal = parseFloat(item.querySelector('.item-total').innerText.replace('$', ''));
            total += itemTotal;
        });

        document.querySelector('.cart-footer h4').innerText = 'Total: $' + total.toFixed(2);
    }
</script>
</body>
</html>
