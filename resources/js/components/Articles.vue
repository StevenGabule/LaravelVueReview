<template>
    <div>
        <Post class="card mb-3" v-for="(post, index) in posts" :key="index" :post="post"></Post>
    </div>
</template>

<script>
    import Post from "./Article";
    export default {
        name: 'articles-page',
        components: {Post},
        props: ['articles'],
        data() {
            return {
                posts: this.articles,
            }
        },
    }
</script>
