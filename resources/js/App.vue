<template>
    <div>
        <Header />
        <Service1 />
        <Service2 />
        <Service3 />
        <Service4 />
        <Service5 />
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
        Contact,
    },
};
</script>

<style scoped>
/* Add your custom styles here */
</style>
