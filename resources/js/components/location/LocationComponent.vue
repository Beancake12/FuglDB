<template>
    <div class="card-body">
        Adresse: {{location.adress}}
        <br>
        By: {{location.city}}
        <br>
        Post nr: {{location.zip}}
        <br>
        Breddegrad: {{location.latitude}}
        <br>
        Længdegrad: {{location.longitude}}
    </div>
</template>

<script>
export default {
    props: {
        location: Object,
    }
}
</script>

<style>

</style>