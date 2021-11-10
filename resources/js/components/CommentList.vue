<template>
  <div>
    <div class="bg-light p-2">
      <label>댓글 작성</label>
      <div class="d-flex flex-row align-items-start">
        <textarea
          v-model="newComment"
          class="form-control ml-1 shadow-none textarea"
        ></textarea>
      </div>
      <div class="mt-2 text-right">
        <button @click="addComment" class="btn btn-primary btn-sm shadow-none">
          등록
        </button>
      </div>
    </div>
    <button @click="getComments" class="btn btn-default">댓글 불러오기</button>
    <comment-item
      v-for="(comment, index) in comments.data"
      :key="index"
      :comment="comment"
      :login_user_id="loginuser"
    />
    <pagination
      @pageClicked="getPage($event)"
      v-if="comments.links != null"
      :links="comments.links"
    />
  </div>
</template>

<script>
import CommentItem from "./CommentItem.vue";
import Pagination from "./Pagination.vue";
export default {
  props: ["post", "loginuser"],
  components: { CommentItem, Pagination },
  data() {
    return {
      comments: [],
      newComment: "",
    };
  },
  methods: {
    addComment() {
      if (this.newComment == "") {
        alert("글을 입력해주세요!");
        return;
      }
      axios
        .post("/comments/" + this.post.id, { comment: this.newComment })
        .then((response) => {
          console.log(response.data);
          this.getComments();
          this.newComment = "";
        })
        .catch((error) => {
          console.log(error);
        });
    },
    getPage(url) {
      console.log(url);
      axios
        .get(url)
        .then((response) => {
          this.comments = response.data;
        })
        .catch((error) => {
          console.log(error);
        });
    },
    getComments() {
      axios
        .get("/comments/" + this.post.id)
        .then((response) => {
          // console.log(response);
          this.comments = response.data;
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
};
</script>