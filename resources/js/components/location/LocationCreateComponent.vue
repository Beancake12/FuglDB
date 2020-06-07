<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        <form @submit.prevent="submit">
                            <h1>Område</h1>
                            <label>Addresse</label>
                            <input type="text" v-model="formData.adress">
                            <div v-if="errors.adress">
                                {{errors.adress[0]}}
                            </div>
                            <br>

                            <label>By</label>
                            <input type="text" v-model="formData.city">
                            <div v-if="errors.city">
                                {{errors.city[0]}}
                            </div>
                            <br>

                            <label>Post nr.</label>
                            <input type="text" v-model="formData.zip">
                            <div v-if="errors.zip">
                                {{errors.zip[0]}}
                            </div>
                            <br>

                            <label>Længdegrad</label>
                            <input type="text" v-model="formData.longitude">
                            <div v-if="errors.longitude">
                                {{errors.longitude[0]}}
                            </div>
                            <br>

                            <label>Breddegrad</label>
                            <input type="text" v-model="formData.latitude">
                            <div v-if="errors.latitude">
                                {{errors.latitude[0]}}
                            </div>
                            <br>

                            <input type="submit" value="Gem">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        locations: Array 
    },
    
    data: function() {
        return {
            errors: {},
            formData: {
                adress: '',
                city: '',
                zip: '',
                longitude: '',
                latitude: '',
            }
        }
    },

    methods: {
        submit() {
            axios.post('/location/create', this.formData)
            .then(response => {
                window.location.href = `/location/get/${response.data.id}`
                console.log(response)
            })
            .catch(error => {
                if (error.response.status == 422) {
                    console.log(error.response.data.errors)
                    this.errors = error.response.data.errors;
                } else {
                    console.log(error);
                }
            })
        }
    }
}
</script>

<style>

</style>