<template>
    <div>

        <button @click="followUser" class="btn btn-primary">Follow</button>



    </div>
</template>

<script>
    export default {
        props: ['userId'],

        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            followUser() {
               axios.post('../follow/' + this.userId)
                   .then(response => {
                       alert(response.data);
                   });
            }
        }
    }
</script>
