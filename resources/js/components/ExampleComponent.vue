<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        <ul>
                            <!-- <li v-for="(playing, index) in top_playing" :index="index"> -->
                                {{ playing.surah }}
                            <!-- </li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                "top_playing" : [
                    {
                        "surah" : "Al-fatihah",
                        "reciter" : "Abdullah"
                    },
                    {
                        "surah" : "Baqarah",
                        "reciter" : "Abdullah"
                    }
                ],
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
