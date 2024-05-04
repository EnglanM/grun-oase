<template>
    <div class="service">
        <h1 id="S1">Service 1</h1>

        <div class="service-1">
            <div class="image-container">
                <img
                    class="service-image animate__animated animate__animate__backInRight__delay-5s"
                    src="../../../public/images/service1.jpg"
                    alt=""
                />
            </div>

            <div class="info-content">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit
                    esse cillum dolore eu fugiat nulla pariatur.
                </p>
            </div>
        </div>
    </div>
</template>

<script>
export default {};
</script>

<style scoped>
h1 {
    margin-top: 50px;
    margin-bottom: 50px;
}

.service {
    background-color: rgb(8, 34, 28);
    color: white;
    text-align: center;
    padding: 1rem;
    height: 100vh;
}

.service-image {
    width: 250px;
    display: flex;
    border-radius: 15px;
}

.info-content {
    display: flex;
    flex-direction: row-reverse;
}

.info-content p {
    padding: 20px;
    width: 250px;
    background-color: #4d3b3a;
    border-radius: 15px;
    border: 1px solid black;
}
</style>
