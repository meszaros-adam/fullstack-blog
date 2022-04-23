<template>
  <!--WRITE COMMENT BOX -->
  <div>
    <div v-if="getUser == false" class="cmnt_frm mar_t30">
      <h2 class="post_dtls_title2 pad_b20">Login to leave a comment:</h2>
      <div class="cmnt_frm_all">
        <div class="row">
          <div class="dtls_frm_btn mar_t20">
            <a href="/login_page"><button class="btn1">LOGIN</button></a>
          </div>
        </div>
      </div>
    </div>
    <div v-else class="cmnt_frm mar_t30">
      <h2 class="post_dtls_title2 pad_b20">Leave A Comment:</h2>
      <div class="cmnt_frm_all">
        <div class="row">
          <div class="col-12 col-md-12 col-lg-12">
            <div class="cmnt_input">
              <p class="mar_b10">MESSAGE:</p>
              <textarea
                autofocus
                placeholder="Type your comment"
                name="message"
                required=""
                v-model="data.commentTxt"
              ></textarea>
            </div>
          </div>
          <button class="btn btn-primary rounded-0" @click="sendComment">Send Message</button>
        </div>
      </div>
    </div>
  </div>

  <!--WRITE COMMENT BOX -->
</template>

<script>
import { mapGetters } from "vuex";

export default {
  props: {
    replyTo: {
      type: String,
    },
    parentID: {
      type: Number,
    },
  },
  data() {
    return {
      data: {
        parentCommentId: '',
        commentTxt: '',
        bloguserId: '',
        blogId: '',
      },
    };
  },
  methods: {
    async sendComment() {
      const res = await this.callApi('post', '/create_comment', this.data)
      location.reload();
    },
  },
  computed:{
     ...mapGetters(['getUser', 'getBlogId'])
  },
  mounted(){
      this.data.parentCommentId = this.parentID
      this.data.bloguserId = this.getUser.id
      this.data.blogId = this.getBlogId
  }
};
</script>
