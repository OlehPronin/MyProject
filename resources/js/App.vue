<template>

<div class="alert">{{ messega }}</div>

</template>

<script>
export default {
    data() {
        return {
            messega: 'hello its me !'
        }
    }
}
</script>

<style>
.alert { 
    background: red;
}
</style>