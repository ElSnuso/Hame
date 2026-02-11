
<?php include 'header.php' ?>
<body>
    
    <header>
        <h1>Place your Order</h1>
    </header>

    <div class="container">
        <form>
            <input type="text" placeholder="First Name" required>
            <input type="text" placeholder="Last Name" required>
            <input type="email" placeholder="Email" required>
            <input type="text" placeholder="Shipping Adress" required>
            <input type="text" placeholder="city" required>
            <input type="text" placeholder="Card Number" required>
            <input type="text" placeholder="Card Expiration Date (MM/YY)" required>
            <input type="text" placeholder="CVV" required>
            
            <a href="confirm.html"><button type="submit">Place Order</button> </a>
        </form>
    </div>
    <?php include 'contact.php' ?>
    <?php include 'footer.php' ?>
</body>
</html>