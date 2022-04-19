<template>
  <div class="post_dtls_cmnt_sec mar_t20">
    <h2 class="post_dtls_title2 pad_b20">Comments</h2>
    <!-- comment -->
    <div class="cmnt_box_all">
      <div class="cmnt_box_top dis_flx">
        <div class="cmnt_box_top_left d-flex">
          <div class="cmnt_img mar_r15">
            <img src="img/girl-cmnt.jpg" alt="image" />
          </div>
          <div class="cmnnt_name">
            <div class="cmnt_name_left">
              <h4 class="tchr_nam mar_b10">james smith</h4>
            </div>
            <div class="cmnt_name_right">
              <p class="cmnt_name_right_p">05 Nov 2019 AT 12:00 AM</p>
            </div>
          </div>
        </div>
      </div>

      <div class="cmnnt_p pad_t10">
        <p>
          I recently completed another course from the 365 team "Data Science
          Boot Camp" where I was able to review my college course work taken
          many years ago in statistics along with an overview of programming
          languages (Python) I use regularly.
        </p>
        <p class="post_reply mar_t5">Reply</p>
      </div>
    </div>
    <!-- comment -->

    <!-- reply -->
    <div class="cmnt_box_all reply_sec">
      <div class="cmnt_box_top d-flex">
        <div class="cmnt_box_top_left d-flex">
          <div class="cmnt_img mar_r15">
            <img src="img/girl3-cmnt.jpg" alt="image" />
          </div>
          <div class="cmnnt_name">
            <div class="cmnt_name_left dis_fx_cntr">
              <h4 class="tchr_nam mar_b10">Jake Ball</h4>
              <div class="cmnt_name_left_rating"></div>
            </div>
            <div class="cmnt_name_right">
              <p class="cmnt_name_right_p">07 Nov 2019 AT 05:23 AM</p>
            </div>
          </div>
        </div>
      </div>

      <div class="cmnnt_p pad_t10">
        <p>
          Great to understand the mechanics, mathematics and also statistics in
          back of BI. I really liked it, and the exercises are great to confirm
          the knowledge.
        </p>
        <p class="post_reply mar_t5">Reply</p>
      </div>
    </div>
    <!-- reply -->
  </div>
</template>

<script>
export default {
    data(){
        return{
            comments: [],
        }
    },
    async created(){
        const res = await this.callApi('get','https://jsonplaceholder.typicode.com/todos/1')
        if(res.status==200){
            
        }else{
            console.log('Something went wrong...')
        }
    }
}
</script>