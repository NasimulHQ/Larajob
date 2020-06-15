<template>
    <div>
        <input type="text" placeholder="What Are You Dekte Chan?" v-model="keyword"
               v-on:keyup="searchJob" class="form-control">
        <div class="card-footer" v-if="results.length">
            <ul class="list-group">
                <li class="list-group-item" v-for="result in results">
                    <a style="color: black" :href=" '/job/' + result.id +'/'+result.slug+'/'">
                        {{result.title}}<br>
                        <small class="badge badge-primary">
                            {{result.position}}
                        </small>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data(){
            return{
                keyword:'',
                results:[]
            }
        },
        methods:{
            searchJob(){
                this.results=[];
                if(this.keyword.length>1){
                    axios.get('/jobs/search',{params:{keyword:this.keyword}})
                        .then(response=>{
                            this.results=response.data
                        });
                }
            }
        }

    }
</script>
