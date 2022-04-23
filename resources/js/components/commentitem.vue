<template>
  <!-- comment -->
  <div :style="commentMargin">
    <div class="cmnt_box_all">
      <div class="cmnt_box_top dis_flx">
        <div class="cmnt_box_top_left d-flex">
          <div class="cmnt_img mar_r15">
            <img src="/img/profile-pic.jpg" alt="image" />
          </div>
          <div class="cmnnt_name">
            <div class="cmnt_name_left">
              <h4 class="tchr_nam mar_b10">
                {{ comment.bloguser.fullName }}
              </h4>
            </div>
            <h4 v-if="parentUsername"> 
                Replied to: {{parentUsername}}
            </h4>
            <div class="cmnt_name_right">
              <p class="cmnt_name_right_p">{{ comment.created_at }}</p>
            </div>
          </div>
        </div>
      </div>

      <div class="cmnnt_p pad_t10">
        <p>
          {{ comment.comment }}
        </p>
      </div>
      <a v-if="getUser == false" href="/login_page" ><button class="btn btn-primary btn-sm rounded-0" >Reply</button></a>
      <a v-else @click="showWritecomment"><button class="btn btn-primary btn-sm rounded-0">Reply</button></a>

      <writecomment v-if="displayWritecomment"  :parentID="comment.id"></writecomment>
      
      
    </div>
    <div v-if="hasChildren">
      <commentitem v-for="child in comment.children" :key="child.id" :comment="child" :spacing="spacing + 5" :parentUsername="comment.bloguser.fullName"></commentitem>
    </div>
  </div>
  <!-- comment -->
</template>

<script>
import writecomment from "./writecomment.vue";
import { mapGetters } from "vuex";

export default {
  name: 'commentitem',
  data(){
    return{
      displayWritecomment: false
    }
  },
  components: {
		writecomment,
	},
  props: {
    comment: {
      type: Object,
      required: true
    },
    parentUsername:{
      type: String,
      default: null,
    },
    spacing: {
      type: Number,
      default: 0
    }
  },
  computed: {
    hasChildren() {
      const children = this.comment.children;
      return children && children.length > 0;
    },

    ...mapGetters(['getUser']),

    commentMargin() {
      return {
        'margin-left': `${this.spacing}px`
      }
    },
  },
  methods:{
    showWritecomment(){
      this.displayWritecomment = !this.displayWritecomment
    }
  }
};
</script>

