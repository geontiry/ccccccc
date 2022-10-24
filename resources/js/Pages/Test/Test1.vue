<template>
  <div>
    <app-container>

      <!-- Page Slot Header -->
      <template #header></template>

      <!-- Page Slot Home-->
      <template #page>
        <comp-heading v-bind="page" header1></comp-heading>
        <blog-pricing></blog-pricing>


        <blog-post 
        post-title="hello!" 
        :likes="22" 
        :is-published="true" 
        :comment-ids="[234, 266, 273]"
        :author="{ name: 'Veronica', company: 'Veridian Dynamics'}"
        ></blog-post>
        
        <blog-post 
        :post-title="post.title + ' Brenden' " 
        :likes="post.likes" 
        :is-published="post.isPublished"
        :comment-ids="post.commentIds"
        :author="post.author"
        ></blog-post>

        <blog-post v-bind="post"></blog-post>
        <blog-card :cardLoading="cardLoading"></blog-card>
        <blog-count :year="event.year"
      :month="event.month"
      :day="event.day"
      :hour="event.hour"
      :minute="event.minute"
      :second="event.second"
      :milliseconds="event.milliseconds"></blog-count>
 
      </template>

      <!-- Page Slot Supp -->
      <template #supp></template>
      
       <!-- Page Slot Footer -->
      <template #footer></template>    

    </app-container>
  </div>
</template> 
         
    

<script>

import AppContainer from "@/Layouts/Brenden/AppContainer.vue";
import CompHeading from "@/Components/CompHeading.vue";
import BlogPost from "@/Layouts/Brenden/BlogPost.vue";
import BlogCard from "@/Layouts/Brenden/BlogCard.vue";
import BlogCount from "@/Layouts/Brenden/BlogCount.vue";
import BlogPricing from "@/Layouts/Brenden/BlogPricing.vue";


export default {
  components: {
    AppContainer,   
    CompHeading,
    BlogPost, 
    BlogCard,
    BlogCount,
    BlogPricing,
  },
  data: () => ({
      page: {
        title: 'Web Design Services',
        description: 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas',
      }, 
      post:{
        title: 'Heading 1',
        likes: 45,
        isPublished: true,
        commentIds: [234, 266, 273],
        author: { name: 'Veronica', company: 'Veridian Dynamics'},
      },
      cardLoading: false,
      event: {
        year: 2021,
          month: 11,
          day: 21,
          hour: 0,
          minute: 0,
        seconds: 0,
          milliseconds: 0
      },

    }),
    methods: {
      
    },
};
</script>
