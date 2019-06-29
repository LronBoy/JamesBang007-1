<template>
  <div class="example">{{ msg }}</div>
</template>

<script>
export default {
  data() {
    return {
      msg: 'Hello world!'
    };
  },
  methods: {
    handleOpen() {
      console.log('Hello world');
    }
  }
};
</script>

<style>
.example {
  color: red;
}
</style>
