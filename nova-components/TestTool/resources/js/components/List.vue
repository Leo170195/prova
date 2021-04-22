<template>
  <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Test tool</h1>
            </div>
            <div class="col-12">
                <table class="table table-light 2 text-white">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">name</th>
                            <th scope="col">email</th>
                            <th scope="col">create</th>
                            <th scope="col">link card</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="user in users" :key="user.id">
                            <th scope="row">{{ user.id }}</th>
                            <td>{{ user.name }}</td>
                            <td>{{ user.email }}</td>
                            <td>{{ user.created_at }}</td>
                            <td @click="$emit('details', user), $emit('changeComponent', 'User')" class="text-warning border">Link</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</template>

<script>
import axios from 'axios'
export default {
    metaInfo() {
        return {
          title: 'List',
        }
    },
    data() {
        return{
            users : []
        }  
    },
    created() {
        axios.get('/nova-vendor/test-tool/users').then( (response) => {
            this.users = response.data
        })
    },
}
</script>

<style>

</style>