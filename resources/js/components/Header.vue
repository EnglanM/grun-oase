<template>
    <!-- <header>
        Sidebar
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
                <a href="#S1">Landschaftsplanung / Landschaftsbau</a></li>
                <li><a href="#S2">Gartenbau und Gartenplanung</a></li>
                <li>
                    <a href="#S3"
                        >Häckselarbeiten mit Kran / Hackguterzeugung /
                        Biomasse</a
                    >
                </li>
                <li><a href="#S4">Pflasterarbeiten</a></li>
                <li><a href="#S5">Zaunbau</a></li>
                <li><a href="#S6">Terrassenbau</a></li>
                <li><a href="#S7">Bewässerungsanlagen</a></li>
                <li><a href="#S8">Neupflanzungen und Ersatzpflanzungen</a></li>
                <li><a href="#S9">Baumfällungen und Grundstücksrodungen</a></li>
                <li><a href="#S10">Mauern</a></li>
                <li><a href="#S11">Erdarbeiten und Baggerarbeiten</a></li>
                <li><a href="#S12">Rollrasen</a></li>
                <li><a href="#S13">Natursteinarbeiten</a></li>
                <li>
                    <a href="#S14">Mulchen von Großflächen / Forstmulchen</a>
                </li>
                <li><a href="#S15"> Treppenbau</a></li>
                <li><a href="#C">Kontakt</a></li>
            </ul>
        </div>

        <div class="content">
            <div class="inner-content">
                <h2>Willkommen in der</h2>
                <h1>GRÜNE OASE</h1>
            </div>
        </div>
    </header> -->

    <header>
        <nav>
            <input type="checkbox" id="sidebar-active" />
            <label for="sidebar-active" class="open-sidebar-button">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    height="32"
                    viewBox="0 -960 960 960"
                    width="32"
                >
                    <path
                        d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"
                    />
                </svg>
            </label>
            <label id="overlay" for="sidebar-active"></label>
            <div class="links-container">
                <label for="sidebar-active" class="close-sidebar-button">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        height="32"
                        viewBox="0 -960 960 960"
                        width="32"
                    >
                        <path
                            d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"
                        />
                    </svg>
                </label>

                <a class="home-link" href="index.html">
                    <img
                        class="logo"
                        src="../../../public/images/logo.png"
                        alt=""
                /></a>

                <div class="dropdown" @click="toggleDropdown">
                    <span class="dropbtn">Services</span>
                    <div class="dropdown-content" v-if="dropdownVisible">
                        <a href="#S1">Landschaftsplanung / Landschaftsbau</a>
                        <a href="#S2">Gartenbau und Gartenplanung</a>

                        <a href="#S3"
                            >Häckselarbeiten mit Kran / Hackguterzeugung /
                            Biomasse</a
                        >

                        <a href="#S4">Pflasterarbeiten</a>
                        <a href="#S5">Zaunbau</a>
                        <a href="#S6">Terrassenbau</a>
                        <a href="#S7">Bewässerungsanlagen</a>

                        <a href="#S8">Neupflanzungen und Ersatzpflanzungen</a>

                        <a href="#S9">Baumfällungen und Grundstücksrodungen</a>

                        <a href="#S10">Mauern</a>

                        <a href="#S11">Erdarbeiten und Baggerarbeiten</a>

                        <a href="#S12">Rollrasen</a>
                        <a href="#S13">Natursteinarbeiten</a>

                        <a href="#S14"
                            >Mulchen von Großflächen / Forstmulchen</a
                        >

                        <a href="#S15"> Treppenbau</a>
                    </div>
                </div>
                <a href="about.html">Testimonials</a>
                <a href="#C">Kontakt</a>
            </div>
        </nav>

        <div class="content">
            <div class="inner-content">
                <h2>Willkommen in der</h2>
                <h1>GRÜNE OASE</h1>
            </div>
        </div>
    </header>
</template>

<script>
export default {
    data() {
        return {
            overlayVisibility: false,
            dropdownVisible: false,
        };
    },
    methods: {
        closeOverlay() {
            this.overlayVisibility = false;
        },
        toggleDropdown() {
            this.dropdownVisible = !this.dropdownVisible;
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

.dropdown {
    position: relative;
}

.dropdown-content {
    display: none;
    position: absolute;
    top: 100%; /* Position below the dropdown button */
    left: 0;
    background-color: #fff;
    min-width: 160px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    z-index: 1;
}

.dropbtn:hover + .dropdown-content,
.dropdown-content:hover {
    display: block;
}

.dropdown-content a {
    display: block;
    padding: 10px;
    text-decoration: none;
    color: #333;
}

.dropdown-content a:hover {
    background-color: #f2f2f2;
}

nav {
    height: 60px;
    background-color: var(--color-1);
    display: flex;
    justify-content: flex-end;
    align-items: center;
    color: white;
}
.links-container {
    height: 100%;
    width: 100%;
    display: flex;
    flex-direction: row;
    align-items: center;
}
nav a {
    height: 100%;
    padding: 0 20px;
    display: flex;
    align-items: center;
    text-decoration: none;
    color: var(--text-color);
}
nav a:hover {
    background-color: var(--accent-color);
}
nav .home-link {
    margin-right: auto;
}
nav svg {
    fill: var(--text-color);
}
#sidebar-active {
    display: none;
}
.open-sidebar-button,
.close-sidebar-button {
    display: none;
}
@media (max-width: 450px) {
    .links-container {
        flex-direction: column;
        align-items: flex-start;

        position: fixed;
        top: 0;
        right: -100%;
        z-index: 10;
        width: 300px;

        background-color: black;
        box-shadow: -5px 0 5px rgba(0, 0, 0, 0.25);
        transition: 0.75s ease-out;
    }
    nav a {
        box-sizing: border-box;
        height: auto;
        width: 100%;
        padding: 20px 30px;
        justify-content: flex-start;
    }
    .open-sidebar-button,
    .close-sidebar-button {
        padding: 20px;
        display: block;
    }
    #sidebar-active:checked ~ .links-container {
        right: 0;
    }
    #sidebar-active:checked ~ #overlay {
        height: 100%;
        width: 100%;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 9;
    }
}
</style>
