<!DOCTYPE html>
<html lang="en">

<head>
    @include("layouts/head")
    <title>Document</title>
    <style>
        /* Global styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

/* Navigation bar */
.navbar {
    background-color: #333;
    color: #fff;
    display: flex;
    justify-content: space-between;
    padding: 10px;
}

/* Logo */
.logo {
    font-size: 24px;
    font-weight: bold;
}

/* Container */
.container {
    max-width: 960px;
    margin: 0 auto;
    padding: 20px;
}

/* Slogan */
.slogan h1, .welcome {
    font-size: 36px;
    font-weight: bold;
    margin-top: 50px;
}

.slogan p {
    font-size: 18px;
    font-weight: bold;
    margin-top: 10px;
}

/* Values */
.values {
    margin-top: 50px;
    padding: 20px;
}

.values h3 {
    font-size: 24px;
    font-weight: bold;
    margin-top: 30px;
}

.values p {
    font-size: 18px;
    line-height: 1.5;
    margin-top: 20px;
}

/* Grad image */
.grad img {
    max-width: 100%;
    height: auto;
}

    </style>
</head>

<body>
@include("layouts/navbar-user")
<h1 class="welcome text-center">Welcome</h1>
<div class="container">
    <div class="grad col-lg-12 img-fluid">
        <img src="../img/grad.jpg" alt="graduates">
    </div>
    <div class="row">
        <div class="slogan col-lg-12 mt-2 text-center">
            <h1>Empowering Minds, Enriching Futures</h1>
            <p>Join Us today</p>
        </div>
    
    </div>
    <div class="values row text-black" style="background-color: #fff">
        <div class="col-lg-6">
            <h3 class="mt-2">Mission</h3>
            <p>At [School/University Name], we are committed to empowering minds and enriching futures through transformative education. Our mission is to provide a dynamic and supportive learning environment that fosters intellectual curiosity, creativity, and critical thinking skills in our students. We strive to develop leaders who are prepared to make a positive impact on their communities and the world.</p>
        </div>
        <div class="col-lg-6">
            <h3 class="mt-2">Vision</h3>
            <p>Our vision is to be a leading institution of higher education that prepares students to be ethical and innovative global citizens. We aim to provide a world-class education that cultivates academic excellence, professional skills, and personal growth. Through our commitment to academic and research excellence, we seek to make a positive impact on society and create a better future for all.

                These statements reflect the core values and goals of your institution and can serve as a guiding framework for decision-making, strategic planning, and communication with stakeholders. Make sure to communicate these statements throughout your website and other marketing materials to demonstrate your institution's commitment to its mission and vision.</p>
        </div>
    </div>
</div>
</body>

</html>