<template>
    <div class="card-body">
        Navn: {{bird.name}}
        <br>
        Ring nr.: {{bird.ring}}
        <br>
        Områder:
        <br>
        Død: {{bird.dead ? 'Ja' : 'Nej'}}
        <br>
        <div v-for="location in bird.locations" :key="location.id">
            <location-component :location="location"></location-component>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        bird: Object,
    }
}
</script>

<style>

</style>