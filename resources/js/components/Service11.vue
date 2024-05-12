<template>
    <div class="service">
        <h1 id="S11">Erdarbeiten und Baggerarbeiten</h1>

        <div class="service-5">
            <div class="image-container item1">
                <img
                    class="service-image animate__animated animate__animate__backInRight__delay-5s"
                    src="../../../public/images/land11.jpg"
                    alt=""
                />
            </div>

            <div class="item2"></div>

            <div class="item3"></div>

            <div class="info-content item4">
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
    margin-top: 50px;
    margin-bottom: 50px;
    font-size: 30px;
    font-weight: 550;
    color: white;
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

.service-5 {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-template-rows: 1fr 1fr;
    width: 100%;
}

.item1 {
    grid-column: 1 / span 2;
    grid-row: 1 / 2;
}

.item2 {
    grid-column: 3 / 4;
    grid-row: 1 / 2;
}

.item3 {
    grid-column: 1 / 2;
    grid-row: 2 / 3;
}
.item4 {
    grid-column: 2 / 4;
    grid-row: 2 / 3;
}
.service {
    background-color: rgb(8, 34, 28);
    background-image: linear-gradient(rgba(8, 34, 28, 2), rgba(0, 0, 0, 0.8));
    background-size: cover;
    background-position: center;
    color: white;
    text-align: center;
    padding: 1rem;
    padding-bottom: 50px;
}

.service-image {
    width: 550px;
    display: flex;
    border-radius: 15px;
}

.info-content {
    display: flex;
    flex-direction: row-reverse;
}

.info-content p {
    padding: 20px;
    width: 550px;
    background-color: transparent;
    font-size: 25px;
    border-radius: 15px;
    z-index: 2;
    align-content: center;
    color: #5d9c45;
}

@media (min-width: 815px) {
    .info-content p {
        margin-right: 100px;
    }

    .service-image {
        margin-left: 50px;
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
