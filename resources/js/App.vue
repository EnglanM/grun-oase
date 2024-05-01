<template>
    <div>
        <Header />
        <Service1 />
        <main>
            <h2>My Vue App</h2>
            <p>Welcome to my Vue app! This is the main content of the app.</p>
        </main>
    </div>
</template>

<script>
import Header from "./components/Header.vue";
import Service1 from "./components/Service1.vue";
export default {
    name: "App",
    components: {
        Header,
        Service1,
    },
};
</script>

<style scoped>
/* Add your custom styles here */
</style>
