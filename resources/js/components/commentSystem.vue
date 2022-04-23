<template>
  <div>
    <div class="post_dtls_cmnt_sec mar_t20">
      <h2 v-if="comments.length>0" class="post_dtls_title2 pad_b20">Comments:</h2>
       <h2 v-else class="post_dtls_title2 pad_b20">Be the first Commenter!</h2>
      <commentitem
        v-for="comment in this.commentTree"
        :key="comment.id"
        :comment="comment"
      >
      </commentitem>
    </div>
    <writecomment> </writecomment>
  </div>
</template>

<script>
import commentitem from "./commentitem.vue";
import writecomment from "./writecomment.vue";

export default {
  components: {
    commentitem,
    writecomment,
  },
  data() {
    return{
      commentTree: [],
    }
  },
  props: ['comments', 'user', 'blogid'],
  created() {
    //this function creates a tree
    const nest = (items, id = null, link = "parent_comment_id") =>
      items
        .filter((item) => item[link] === id)
        .map((item) => ({ ...item, children: nest(items, item.id) }));

    this.commentTree = nest(this.comments);
    //this function creates a tree

    this.$store.commit("setUser", this.user);
    this.$store.commit("setBlogId", this.blogid);
  },
};
</script>