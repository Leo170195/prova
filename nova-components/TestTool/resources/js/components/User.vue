<template>
  <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <h1 class="text-center">User details</h1>
                <p>ciao {{ user.name }}</p>
                <button @click="$emit('changeComponent', 'List')" class="btn btn-warning">Torna indietro</button>
            </div>
        </div>

    </div>
</template>

<script>
export default {
   props : ['user']
}
</script>

<style>

</style>