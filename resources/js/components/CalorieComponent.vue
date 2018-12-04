<template>
  <v-content>
    <v-container fluid fill-height>
      <v-layout justify-center fluid>
        <v-flex xs12 offset-mx5>
          this page is caloriecomponent.
        </v-flex>
      </v-layout>
    </v-container>
  </v-content>
</template>

<script>
  export default {
    data: () => ({
    }),

    props: {
    },

    created() {
      console.log('Home Component created.')
      this.initialize()
    },

    mounted() {
      console.log('Home Component mounted.')
    },

    methods: {
      initialize: function() {
      },
    },

  }
</script>