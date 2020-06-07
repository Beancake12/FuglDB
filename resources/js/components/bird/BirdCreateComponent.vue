<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <h1>Opret fugl</h1>
                        <form @submit.prevent="submit">
                            <label>Navn</label>
                            <input type="text" v-model="formData.name">
                            <div v-if="errors.name">
                                {{errors.name[0]}}
                            </div>
                            <br>

                            <label>Ring nr.</label>
                            <input type="text" v-model="formData.ring">
                            <div v-if="errors.ring">
                                {{errors.ring[0]}}
                            </div>
                            <br>

                            <label>Død</label>
                            <input type="checkbox" v-model="formData.dead">
                            <br>

                            <div class="form-group">
                                <label>Vælg område</label>
                                <select class="form-control" v-model="formData.location_id">
                                    <option value="">Intet område</option>
                                    <option v-for="location in locations"
                                        :key="location.id"
                                        :value="location.id">
                                        {{location.city}}, {{location.adress}}
                                    </option>
                                </select>
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
                name: '',
                ring: '',
                dead: false,
                location_id: '',
            }
        }
    },

    methods: {
        submit() {
            console.log(this.formData);
            axios.post('/bird/create', this.formData)
            .then(response => {
                window.location.href = `/bird/get/${response.data.id}`;
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