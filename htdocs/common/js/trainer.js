const app = Vue.createApp({
    //option
    data: () => ({
      url: 'https://into-the-program.com', //WPのhome_urlを指定
      perpage: 100, //投稿データ取得件数
      posts: '', //投稿データ
      errors: '', //エラー
    }),
    created() {
        this.getPosts();
    },
    methods: {
      //投稿データ取得
      getPosts: function(){
          axios.get('https://goodlifegym.jp/wp-json/wp/v2/trainer', {
              params: {
                  per_page: this.perpage,
              }
          })
          .then(response => {
              this.posts = response.data
              console.log(this.posts)
            })
          .catch(error => {
              this.errors = error
          })
          
      },
    }
  })
  app.mount('#app')