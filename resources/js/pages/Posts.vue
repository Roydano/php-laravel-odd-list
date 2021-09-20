<template>
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-md-4" v-for="post in posts" :key="post.id">

        <div class="card text-dark bg-info my-5 mx-3" style="max-width: 18rem;">
          <div class="card-header text-center">{{ post.title }}</div>
          <div class="card-body">
            <h5 class="card-title">{{ post.author }}</h5>
            <span><i>{{ formatoData( post.updated_at ) }}</i></span>
            <hr>
            <p class="card-text">{{ post.description }}</p>
          </div>
          <router-link :to="{ name: 'dettagli', params:{ slug: post.slug }}" class="btn btn-button">Dettagli</router-link>
        </div>

      </div>
    </div>

    <hr>
    <p class="text-center">Pag. {{currentPage}}</p>

    <div class="row justify-content-center">
      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item" :class="{'disabled' : currentPage == 1}">
            <a class="page-link" href="#" aria-label="Previous" @click="getPosts(currentPage - 1)">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>

          <li class="page-item" v-for="i in lastPage" :key="i"><a class="page-link" href="#" @click="getPosts(i)">{{i}}</a></li>

          <li class="page-item" :class="{'disabled' : currentPage == lastPage}">
            <a class="page-link" href="#" aria-label="Next" @click="getPosts(currentPage + 1)">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>


  </div>
    

</template>

<script>
export default {
  name: 'Posts',
  data(){
    return {
      postUrl: 'http://127.0.0.1:8000/api/posts',
      posts: [],
      currentPage: [],
      lastPage: []
    }
  },
  created(){
    this.getPosts(1);
  },
  methods:{
    getPosts(pagePost){
      axios.get(this.postUrl, {
        params:{
            page: pagePost
        }
      })
      .then(response => {
        // console.log(response.data.result.data);
        this.posts = response.data.result.data;
        // console.log(response.data.result);
        this.currentPage = response.data.result.current_page;
        this.lastPage = response.data.result.last_page;
      })
      .catch();
    },
    formatoData(date){
      const data = new Date(date);
      let month = data.getMonth();
      let day = data.getDate();

      if(month < 10){
          month = '0' + parseInt(month + 1);
      }

      if(day < 10){
          day = '0' + day;
      }

      return day + '/' + month + '/' + data.getFullYear();
    }
  }
}
</script>

<style lang="scss" scoped>

  .card{
    box-shadow: 2px 2px 2px 2px rgb(117, 117, 117);

    .card-header{
      font-size: 20px;
      color: white;
    }

    .card-body{
      background-color: white;

        .card-title{
          display: -webkit-box;
          -webkit-box-orient: vertical;
          -webkit-line-clamp: 1; 
          overflow: hidden;
        }

        .card-text{
          display: -webkit-box;
          -webkit-box-orient: vertical;
          -webkit-line-clamp: 3; 
          overflow: hidden;
        }
    }

    .btn{
      color: white;
      &:hover{
        background-color: rgb(160, 160, 160);
      }
    }
  }

</style>