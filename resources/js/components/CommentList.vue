<template>
  <div>
    <comment-item />
  </div>
</template>

<script>
import CommentItem from "./CommentItem.vue";
export default {
  props: ["post", "loginuser"],
  components: { CommentItem },
  data() {
    return {
      comments: [],
    };
  },
  methods: {},
};
</script>