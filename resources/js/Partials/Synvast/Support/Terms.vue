<script>
import AppContainer from "@/Layouts/Brenden/AppContainer.vue"
import CompBreadcrumbs from "@/Component/CompBreadcrumbs"
import CompHeading from "@/Component/CompHeading.vue"
import { ref, reactive, computed, watch, onMounted } from '@vue/composition-api' 

export default{
  components: { AppContainer, CompBreadcrumbs, CompHeading, },
  props: {},

  setup (props, ctx) {
    const state = reactive({  
      breadcrumbs: [ 
        { text: 'Home', disabled: false, href: route('home'), },
        { text: 'Support Center', disabled: false, href: route('support'), },
        { text: 'Terms & Conditions', disabled: true, href: '', },
      ],
      page: {
        title: 'Terms & Conditions',
        description: 'Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas',
      },      
    })
    
    return { } 
  }
} 
</script>

<template>
  <div>
    <app-container>

      <!-- Page Slot Header -->
      <template #header></template>

      <!-- Page Slot Home-->
      <template #page>
        <comp-breadcrumbs :breadcrumbs="breadcrumbs" active></comp-breadcrumbs>
        <comp-heading v-bind="page" header1></comp-heading>
        <v-card>
          <p> Terms and Conditions Agreement</p>
          <p>The terms and conditions (T&C) agreement is a legal document that sets out the rules, guidelines and requirements that need to be followed by your users and customers when using your website, app or service. The agreement also acts as a contract between service providers and their clients or people who use their service. A T&C agreement is also known as a service level agreement where the service provider and the service user agree with a few aspects of the services, such as quality, responsibilities and availability. </p>
          <p>Governing Law Clause: Include governing laws of the country and state that you operate in your T&C agreement.</p>
          <p>Users Rights and Responsibilities: Include the rules governing the use of your websites, such as refund policy, billing and policies, minimum age requirements, order cancellation policy and potential warranties on your products or services.</p>
          <p>Confidentiality Clause: This clause states that the collected information via the website will not be disclosed to any third parties unless permitted.</p>
          <p>Security: Mention the different forms of security measures you've implemented on your website.</p>
          <p class="text-subtitle-2">The security of your Personal Information is important to us, but remember that no method of transmission over the Internet, or method of electronic storage is 100% secure. While we strive to use commercially acceptable means to protect your Personal Information, we cannot guarantee its absolute security.</p>
          <p>Termination Clause: This outlines the conditions of termination of an agreement between a service provider and the user.</p>
          <p>Copyright Notice: It is vital to protect your intellectual property, such as your logo, unique web or mobile app design and the full content of your website. Therefore, you must include a copyright notice in your terms and conditions.</p>
          <p>A Disclaimer Notice: This explains what you will do if a user doesn't abide by your rules and guidelines or abuses your website or mobile app.</p>
        </v-card>
      </template>

      <!-- Page Slot Supp -->
      <template #supp></template>
      
       <!-- Page Slot Footer -->
      <template #footer></template>    

    </app-container>
  </div>
</template> 
