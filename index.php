<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Coca Cola Brand 3D App</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/x3dom/1.7.2/x3dom.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/x3dom/1.7.2/x3dom.css">
</head>
<body>
    <header>
        <div class="container">
            <img src="images/logo.png" alt="Brand Logo" class="logo">
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#brands">Brands</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="home" class="hero">
        <div class="container">
            <h1>Welcome to Our Brand World</h1>
            <p>Explore our diverse brands and products</p>
        </div>
    </section>

    <section id="brands" class="brands">
        <div class="container">
            <h2>Our Brands</h2>
            <div class="brand-list row">
                <div class="brand-item col-md-4">
                    <div class="card text-center">
                        <img src="images/coke.png" class="card-img-top" alt="Coca Cola">
                        <div class="card-body">
                            <h3 class="card-title">Coca Cola</h3>
                            <p class="card-text">Introduction to Coca Cola...</p>
                            <a href="coke.html" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="brand-item col-md-4">
                    <div class="card text-center">
                        <img src="images/fanta.png" class="card-img-top" alt="Fanta">
                        <div class="card-body">
                            <h3 class="card-title">Fanta</h3>
                            <p class="card-text">Introduction to Fanta...</p>
                            <a href="fanta.html" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="brand-item col-md-4">
                    <div class="card text-center">
                        <img src="images/sprite.png" class="card-img-top" alt="Sprite">
                        <div class="card-body">
                            <h3 class="card-title">Sprite</h3>
                            <p class="card-text">Introduction to Sprite...</p>
                            <a href="sprite.html" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about">
        <div class="container">
            <h2>About Us</h2>
            <p>
                Our company, My Coca Cola, was founded with the vision to refresh the world and inspire moments of optimism and happiness through our brands and actions. We are committed to providing high-quality products and promoting sustainable practices in all aspects of our business. Our journey began with a simple idea: to create a beverage that brings joy and refreshment to people everywhere.
            </p>
            <p>
                Over the years, we have grown into a global brand, recognized and loved by millions. We take pride in our diverse portfolio of beverages, including our flagship product Coca Cola, as well as Fanta, Sprite, and many more. Each brand carries its unique flavor and history, but all share our commitment to quality and customer satisfaction.
            </p>
            <p>
                At My Coca Cola Brand, we believe in giving back to the communities we serve. Through various initiatives and partnerships, we strive to make a positive impact on society and the environment. From reducing our carbon footprint to supporting local communities, we are dedicated to creating a better, more sustainable future.
            </p>
            <p>
                Our success would not be possible without our passionate and dedicated team. We are proud of our inclusive and collaborative work culture, which fosters innovation and continuous improvement. Together, we are committed to maintaining the high standards that our customers expect and deserve.
            </p>
            <p>
                Thank you for being a part of our journey. We look forward to continuing to serve you with the best beverages and making a positive impact on the world.
            </p>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <form>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email">
                <label for="message">Message:</label>
                <textarea id="message" name="message" class="form-control" rows="3" placeholder="Enter your message"></textarea>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 My Coca Cola All rights reserved.</p>
            <p><a href="https://github.com/infeinite/3dapp-assignment" class="text-white">GitHub Repository</a></p>
        </div>
    </footer>
</body>
</html>
