<template>
    <transition name="fade">
        <div class="notification is-success" role="alert" v-if="show">
            <button class="delete" @click="show = false"></button>
            <strong>{{ text }}</strong>
        </div>
    </transition>
</template>

<script>
export default {
  props: {
    text: {
      type: String,
      required: true
    }
  },
  data() {
    return {
      show: true
    };
  }
};
</script>