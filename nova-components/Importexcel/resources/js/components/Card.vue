<template>
    <card class="flex flex-col items-center justify-center">
        <div class="px-3 py-3">
            <input v-on:change="startUpload" type="file" name="xls_file" id="file-input" style="display: none;">
            <button v-on:click="openFileBrowser" class="btn btn-default btn-primary">Importa Utenti</button>
        </div>
    </card>
</template>

<script>
export default {
    props: [
        'card',

        // The following props are only available on resource detail cards...
        // 'resource',
        // 'resourceId',
        // 'resourceName',
    ],

    mounted() {
        //
    },

    methods: {
        openFileBrowser() {
            document.getElementById("file-input").click();
        },

        startUpload() {
            let data = new FormData();
            data.append("xls_file", document.getElementById("file-input").files[0]);

            document.getElementById("file-input").setAttribute("disabled", "");

            axios.post("/nova-vendor/importexcel", data).then((response) => {

                let router = this.$router;

                router.push({
                    path: '/',
                }, function() {
                    router.push({
                        path: '/resources/users',
                    });
                });

                this.$toasted.show(
                    'Importazione completata.',
                    { type: 'success' }
                );
            });
        }
    },
}
</script>