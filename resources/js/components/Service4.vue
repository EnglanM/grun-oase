<template>
    <div class="service">
        <h1 id="S4">Service 4</h1>

        <div class="service-1">
            <div class="image-container">
                <img
                    class="service-image"
                    src="../../../public/images/service1.jpg"
                    alt=""
                />
            </div>

            <div class="info-content">
                <p>Lorem ipsum dolor sit amet</p>
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

.item2 {
    background-image: url("../../../public/images/icon1.png");
    background-size: cover;
    background-position: center;
}

.item3 {
    background-image: url("../../../public/images/icon2.png");
    background-size: cover;
    background-position: center;
}

.service-2 {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-template-rows: 1fr 1fr;
    width: 100%;
}

.item1 {
    grid-column: 2 / span 2;
    grid-row: 1 / 2;
}

.item2 {
    grid-column: 1 / 2;
    grid-row: 1 / 2;
}

.item3 {
    grid-column: 3 / 4;
    grid-row: 2 / 3;
}
.item4 {
    grid-column: 1 / 3;
    grid-row: 2 / 3;
}
.service {
    background-color: rgb(8, 34, 28);
    background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(8, 34, 28, 2));

    color: white;
    text-align: center;
    padding: 1rem;
    height: 75vh;
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
    background-color: transparent;
    font-size: 25px;
    border-radius: 15px;
    z-index: 2;
    align-content: center;
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
