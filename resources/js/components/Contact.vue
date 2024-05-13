<template>
    <div class="contact">
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col">
                        <h4>contact</h4>
                        <form @submit.prevent="submitForm">
                            <label for="email">Email</label>
                            <input
                                type="email"
                                id="email"
                                v-model="fields.email"
                            />
                            <br />
                            <label for="message">Message</label>
                            <textarea
                                id="message"
                                v-model="fields.message"
                            ></textarea>
                            <input type="submit" value="Submit" />
                        </form>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</template>

<script>
import { defineComponent } from "vue";
import axios from "axios";

export default defineComponent({
    data() {
        return {
            fields: {
                email: "",
                message: "",
            },
            errors: {},
        };
    },

    methods: {
        submitForm() {
            axios
                .post("/api/contacts", this.fields)
                .then(() => {
                    console.log("Message sent");
                    // this.clearForm();
                })
                .catch((error) => {
                    console.log(error.response); // Log the entire response object for debugging
                    this.errors = error.response.data.errors;
                    console.log(error);
                });
        },

        clearForm() {
            this.fields.email = "";
            this.fields.message = "";
            this.errors = {};
        },
    },
});
</script>

<style scoped>
.contact {
    background-color: rgb(8, 34, 28);
}

.container {
    max-width: 1170px;
    margin: auto;
}
.row {
    display: flex;
    flex-wrap: wrap;
}
ul {
    list-style: none;
}
.footer {
    background-color: #446c3c;
    padding: 70px 0;
}
.footer-col {
    width: 25%;
    padding: 0 15px;
}
.footer-col h4 {
    font-size: 18px;
    color: #ffffff;
    text-transform: capitalize;
    margin-bottom: 35px;
    font-weight: 500;
    position: relative;
}
.footer-col h4::before {
    content: "";
    position: absolute;
    left: 0;
    bottom: -10px;
    background-color: #873e23;
    height: 2px;
    box-sizing: border-box;
    width: 50px;
}

form {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

input {
    padding: 10px;
    width: 100%;
    border-radius: 5px;
    border: none;
}

textarea {
    padding: 10px;
    width: 100%;
    border-radius: 5px;
    border: none;
    height: 100px;
}

button {
    padding: 10px;
    width: 100%;
    border-radius: 5px;
    border: none;
    background-color: #873e23;
    color: #ffffff;
    font-weight: bold;
    cursor: pointer;
}
/*responsive*/
@media (max-width: 767px) {
    .footer-col {
        width: 50%;
        margin-bottom: 30px;
    }
}
@media (max-width: 574px) {
    .footer-col {
        width: 100%;
    }
}
</style>
