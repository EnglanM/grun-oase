<template>
    <div class="service">
        <h1 id="S2">Service 2</h1>

        <div class="service-1">
            <div class="image-container">
                <img
                    class="service-image"
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
    margin-bottom: 50px;
}

.service {
    background-color: rgb(8, 34, 28);
    color: white;
    text-align: center;
    padding: 1rem;
    height: 100vh;
}

.image-container {
    display: flex;
    flex-direction: row-reverse;
}

.service-image {
    width: 550px;
    display: flex;
    border-radius: 15px;
}

.info-content p {
    padding: 20px;
    width: 550px;
    background-color: #728c5c;
    border-radius: 15px;
    border: 1px solid black;
}

@media (min-width: 815px) {
    .info-content p {
        margin-left: 50px;
    }

    .service-image {
        margin-right: 100px;
    }
}

@media (max-width: 810px) {
    .service-image {
        width: 450px;
    }

    .info-content p {
        width: 450px;
    }
}

@media (max-width: 640px) {
    .service-image {
        width: 350px;
    }

    .info-content p {
        width: 350px;
    }
}
@media (max-width: 484px) {
    .service-image {
        width: 250px;
    }

    .info-content p {
        width: 250px;
    }
}
</style>
