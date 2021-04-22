<template>
    <component 
    @details="selectedUser = $event"
    @changeComponent="selectedComponent = $event"
    :user="selectedUser" 
    :is="selectedComponent"
    >
    </component>
</template>

<script>
import List from './List'
import User from './User'

export default {
    components : {
        List, User, 
    },
    data() {
        return {
            selectedComponent : 'List'
        }
    },
    metaInfo() {
        return {
          title: 'TestTool',
        }
    },
}
</script>


<style>

</style>
