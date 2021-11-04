<template>
  <div class="container">
    <div class="row">
      <div class="panel panel-default widget">
        <div class="panel-heading">
          <span class="glyphicon glyphicon-comment"></span>
          <!-- <h3 class="panel-title">Recent Comments</h3>
          <textarea
            class="form-control m-auto"
            id="comment"
            rows="2"
          ></textarea>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-primary me-md-2 m-2" type="submin">
              등록
            </button>
          </div> -->
          <!-- <span class="label label-info"> 78</span> -->
        </div>
        <div class="panel-body">
          <ul class="list-group">
            <li class="list-group-item">
              <div class="row">
                <div class="col-xs-10 col-md-11">
                  <div>
                    <!-- 작성한 사람 -->
                    <a href="#" class="hover:underline text-sm">
                      {{ comment.user.name }}
                    </a>
                    <div class="mic-info">
                      <!-- 작성한 날짜 -->
                      on 11 Nov 2013
                    </div>
                  </div>
                  <div class="comment-text">
                    <!-- {{ 작성한 댓글 들어갈 자리 }}   -->
                    {{ comment.comment }}
                  </div>

                  <div class="action">
                    <button
                      type="button"
                      class="btn btn-primary btn-xs"
                      title="Edit"
                    >
                      <span class="glyphicon glyphicon-pencil"></span>
                    </button>
                    <button
                      type="button"
                      class="btn btn-success btn-xs"
                      title="Approved"
                    >
                      <span class="glyphicon glyphicon-ok"></span>
                    </button>
                    <button
                      type="button"
                      class="btn btn-danger btn-xs"
                      title="Delete"
                    >
                      <span class="glyphicon glyphicon-trash"></span>
                    </button>
                  </div>
                </div>
              </div>
            </li>
          </ul>
          <!-- <a href="#" class="btn btn-primary btn-sm btn-block" role="button"
            ><span class="glyphicon glyphicon-refresh"></span> More</a
          > -->
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["comment"],
};
</script>