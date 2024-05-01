<template>
    <header>
        <div class="navbar">
            <img
                class="logo"
                src="../../../public/images/gardening.png"
                alt=""
            />
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Testimony</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="content">
            <h1>Welcome to My Vue App!</h1>
            <p>Enjoy your stay!</p>
        </div>
    </header>
</template>

<script>
export default {};
</script>

<style scoped>
header {
    background-image: linear-gradient(
            rgba(14, 91, 59, 0.5),
            rgba(8, 34, 28, 0.5)
        ),
        url("../../../public/images/image1.jpg");
    height: 100vh;
    width: 100%;
    background-size: cover;
    background-position: center;
    padding: 1rem;
}
.logo {
    width: 90px;
    cursor: pointer;
}
.navbar {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0.5rem;
}

.navbar ul {
    list-style: none;
    width: 100%;
    text-align: right;
    padding-right: 60px;
}

.navbar ul li {
    display: inline;
    margin-left: 20px;
    font-size: 1.2rem;
    color: white;
    cursor: pointer;
}

.navbar ul li a {
    text-decoration: none;
    color: white;
}

.navbar ul li a:hover {
    color: #af8585;
}

.content {
    margin-top: 14%;
    color: white;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    height: 100%;
}

.content h1 {
    font-size: 70px;
    margin-bottom: 20px;
    font-weight: 700;
    line-height: 85px;
}

.content p {
    font-size: 1.5rem;
}

@media (max-width: 768px) {
    .navbar ul {
        display: none;
    }
}
</style>
