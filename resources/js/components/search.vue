<template>
    <div class="menu_srch d-flex" >
        <i class="fas fa-search search_btn" @click="showSearch=!showSearch"></i>
        <!-- SEARCH INPUT -->
        <div class="header_serch" v-if="showSearch">
            <div class="header_serch_input">
                <input type="text" autofocus v-on:keyup.enter="searchBlog" v-model="str" name="" placeholder="Search">
            </div>
            <div class="header_serch_i" @click="searchBlog">
                <i class="fa fa-search"></i>
            </div>
        </div>
        <!-- SEARCH INPUT -->
    </div>
</template>

<script>
export default {
    data(){
        return{
            showSearch: false,
            str: '',
        }
    },
    methods: {
        searchBlog(){
            window.location = `/search?str=${this.str}`
        }
    }
}
</script>