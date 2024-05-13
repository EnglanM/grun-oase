<template>
    <div>
        <Header />
        <div class="services">
            <Service1 />
            <Service2 />
            <Service3 />
            <Service4 />
            <Service5 />
            <Service6 />
            <Service7 />
            <Service8 />
            <Service9 />
            <Service10 />
            <Service11 />
            <Service12 />
            <Service13 />
            <Service14 />
            <Service15 />
        </div>
        <Contact />
    </div>
</template>

<script>
import Header from "./components/Header.vue";
import Service1 from "./components/Service1.vue";
import Service2 from "./components/Service2.vue";
import Service3 from "./components/Service3.vue";
import Service4 from "./components/Service4.vue";
import Service5 from "./components/Service5.vue";
import Service6 from "./components/Service6.vue";
import Service7 from "./components/Service7.vue";
import Service8 from "./components/Service8.vue";
import Service9 from "./components/Service9.vue";
import Service10 from "./components/Service10.vue";
import Service11 from "./components/Service11.vue";
import Service12 from "./components/Service12.vue";
import Service13 from "./components/Service13.vue";
import Service14 from "./components/Service14.vue";
import Service15 from "./components/Service15.vue";
import Contact from "./components/Contact.vue";
export default {
    name: "App",
    components: {
        Header,
        Service1,
        Service2,
        Service3,
        Service4,
        Service5,
        Service6,
        Service7,
        Service8,
        Service9,
        Service10,
        Service11,
        Service12,
        Service13,
        Service14,
        Service15,
        Contact,
    },
};
</script>

<style scoped>
@media screen and (min-width: 1320px) {
    .services {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        grid-template-rows: 0.5fr 0.5fr 0.5fr 0.5fr 0.5fr;
    }
}

/*
@media screen and (min-width: 900px) {
    .services {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-template-rows: 0.5fr 0.5fr 0.5fr 0.5fr 0.5fr 0.5fr;
    }
}*/
</style>
