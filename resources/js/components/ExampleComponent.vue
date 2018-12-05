<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                        <span class="test">{{ test }}</span> 
                        <!-- Laravelから受け取ったデータを表示 -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
    .test {
        color: red;
    }
    </style>

<script>
    export default {
        props: {
            test: String,
            // Laravelからデータを受け取る
        },
        mounted() {
            console.log('Component mounted.')
        },
    }
</script>
