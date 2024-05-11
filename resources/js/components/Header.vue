<template>
    <header>
        <!-- Sidebar -->
        <div class="navbar">
            <img class="logo" src="../../../public/images/logo.png" alt="" />
            <input
                type="checkbox"
                id="check"
                v-model="overlayVisibility"
                class="hidden"
            />
            <label for="check" class="checkbtn">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </label>
            <ul v-show="overlayVisibility" @click="closeOverlay">
                <li><a href="#S1">Service 1</a></li>
                <li><a href="#S2">Service 2</a></li>
                <li><a href="#S3">Service 3</a></li>
                <li><a href="#S4">Service 4</a></li>
                <li><a href="#S5">Service 5</a></li>
                <li><a href="#C">Contact</a></li>
            </ul>
        </div>
        <!-- End Sidebar -->

        <!-- Main Content -->
        <div class="content">
            <div class="inner-content">
                <h2>Willkommen in der</h2>
                <h1>GRÜNE OASE</h1>
            </div>
        </div>
        <!-- End Main Content -->
    </header>
</template>

<script>
export default {
    data() {
        return {
            overlayVisibility: false,
        };
    },
    methods: {
        closeOverlay() {
            this.overlayVisibility = false;
        },
    },
};
</script>

<style scoped>
header {
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(8, 34, 28, 2)),
        url("../../../public/images/image3.webp");
    height: 100vh;
    width: 100%;
    background-size: cover;
    background-position: center;
    padding: 1rem;
}
.logo {
    width: 100px;
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
    transition: 0.5s;
}

.navbar ul li a:hover {
    color: #af8585;
}

.content {
    margin-top: 10%;
    color: white;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    height: 100%;
}

.inner-content {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-content: center;
}

.content h1 {
    font-size: 70px;
    margin-bottom: 20px;
    font-weight: 700;
    line-height: 85px;
    color: #1da34b;
}

.content h2 {
    font-size: 40px;
    margin-bottom: 10px;
    font-weight: 200;
    line-height: 85px;
}

.content p {
    font-size: 1.5rem;
}

.checkbtn {
    font-size: 30px;
    color: white;
    float: right;
    line-height: 80px;
    margin-right: 40px;
    cursor: pointer;
    display: none;
}
#check {
    display: none;
}

@media (max-width: 858px) {
    .checkbtn {
        display: flex;
    }
    ul {
        position: absolute;
        height: 100vh;
        width: 100%;
        background-color: rgba(8, 34, 28, 0.5);
        top: 80px;
        right: -100%;
        text-align: center;
        transition: all 0.5s;
        display: flex;
        flex-direction: column;
        text-align: center;
        align-items: center;
        gap: 20px;
        padding-top: 60px;
        backdrop-filter: blur(8px); /* Add this line */
    }
    navbar ul li {
        margin: 50px 0;
        line-height: 30px;
    }
    navbar ul li a {
        font-size: 20px;
    }
    a:hover,
    a.active {
        background: none;
        color: #0082e6;
    }
    #check:checked ~ ul {
        right: 0;
    }
}
</style>
