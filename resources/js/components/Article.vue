<template>
        <div class="card mb-3">
            <div class="card-header">{{title}}</div>

            <div class="card-body">
                {{ ellipses}}
                <div class="mt-3">
                    <a :href="viewArticle(id)"
                       class="btn btn-info btn-sm">View</a>

                    <a :href="editArticle(id)"
                       class="btn btn-success btn-sm">Edit</a>

                    <a href="javascript:void(0)" @click.prevent="deleteArticle(id)"
                       class="btn btn-danger btn-sm">Delete</a>
                </div>
            </div>
        </div>
</template>

<script>
    export default {
        name: 'post',
        props: ['post'],
        data() {
            return {
                id: this.post.id,
                title: this.post.title,
                body: this.post.body
            }
        },

        computed: {
            ellipses: function() {
                return (this.body.length > 250) ? this.body.substring(0, 250) + '...' : this.body;
            }
        },

        methods: {
            viewArticle(id) {
                return `/articles/${id}`;
            },
            editArticle(id) {
                return `/articles/${id}`;
            },
            deleteArticle(id) {
                axios.delete(`/articles/${id}`);
            },
        }
    }
</script>
