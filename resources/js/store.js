import Vue from 'vue'
import vuex from 'vuex'

Vue.use(vuex)

export default new vuex.Store({
    state:{
        user: null,
        blogId: null,
    },
    getters:{
        getUser(state){
            return state.user
        },
        getBlogId(state){
            return state.blogId
        },
    },
    mutations:{
        setUser(state, data){
            state.user= data
        },
        setBlogId(state, data){
            state.blogId = data
        },
    }
})