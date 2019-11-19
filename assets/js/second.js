if ($(".profile-image").hasClass("disable-login") === false) {
  $(".profile-image").dblclick(() => {
    $("#myModalBox").modal("show");
  });
}

setTimeout(() => {
  $(".slide-up").slideUp(1000);
}, 5000);

$("#adminDescription.admin-edit").dblclick(() => {
  let tempText = $("#adminDescription")
    .text()
    .trim();
  $("#adminDescription")
    .replaceWith(`<form class="about-edit" action="index.php" method="POST">
        <textarea class="form-control" rows="10" name="area-description">${tempText}</textarea>
        <button class="btn btn-primary" type="submit" name="btn-description">Save</button>
        <button class="btn btn-can-about btn-danger">Cancel</button>
    </form>`);
});

$(".item.projects.admin-edit").dblclick(function() {
  let id = $(this).attr("id");
  let title = $(`#${id}.projects .title`)
    .text()
    .trim();
  let tempText = $(`#${id}.projects .p-project`)
    .text()
    .trim();
  let tempLink = $(`#${id}.projects a.more-link`).attr("href");

  $(
    `#${id}.projects`
  ).replaceWith(`<form class="projects-form" action="index.php" method="POST">
    <input class="form-control" type="hidden" name="project-id" value="${id}">
    <input class="form-control" name="title-project" type="Text" value="${title}">
    <textarea class="form-control" rows="5" name="text-project">${tempText}</textarea>
    <input class="form-control" type="Text" name="link-project" value="${tempLink}">
    <div class="flex">
    <button class="btn btn-primary" type="submit" name="btn-projects-save">Save</button>
    <button class="btn btn-danger">Cancel</button>
    </form>
    <form action="index.php" method="POST">
    <input  type="hidden" name="project-id-hidden" value="${id}">
    <button class="btn btn-warning btn-del-proj" type="submit">Delete</button>
  </form>`);
});

$(".item.work.admin-edit").dblclick(function() {
  let id = $(this).attr("id");
  let title = $(`#${id}.work .title`)
    .text()
    .trim();
  let place = $(`#${id}.work .placce`)
    .text()
    .trim();
  let year = $(`#${id}.work .year`)
    .text()
    .trim();
  let description = $(`#${id}.work p`)
    .text()
    .trim();

  $(
    `#${id}.work`
  ).replaceWith(`<form class="projects-form" action="index.php" method="POST">
    <input class="form-control" type="hidden" value="${id}" name="work-id">
    <input class="form-control" type="Text" value="${title}" name="work-title">
    <input class="form-control" type="Text" value="${place}" name="work-place">
    <input class="form-control" type="Text" value="${year}" name="work-year">
    <textarea class="form-control" rows="5" name="work-description">${description}</textarea>
    <div class="flex">
    <button class="btn btn-primary " type="submit">Save</button>
    <button class="btn btn-danger ">Cancel</button>
    </form>
    <form action="index.php" method="POST">
    <input class="form-control" type="hidden" value="${id}" name="work-id-hidden">
    <button class="btn btn-warning btn-del-work">Delete</button>
    </form>
    </div>`);
});

$(".item.skill.admin-edit").dblclick(function() {
  let id = $(this).attr("id");
  let title = $(`#${id}.skill .level-title`)
    .text()
    .trim();
  let percent = $(`#${id}.skill .level-bar-inner`).attr("data-level");

  $(
    `#${id}.skill`
  ).replaceWith(`<form class="projects-form" action="index.php" method="POST">
  <input class="form-control" type="hidden" value="${id}" name="skill-id">
    <input class="form-control" type="Text" value="${title}" name="skill-title">
    <input class="form-control" type="Text" value="${percent}" name="skill-percent">
    <div class="flex">
    <button class="btn btn-primary" type="submit">Save</button>
    <button class="btn btn-danger">Cancel</button>
    </form>
    <form action="index.php" method="POST">
    <input class="form-control" type="hidden" value="${id}" name="skill-id-hidden">
    <button class="btn btn-warning btn-del-skill">Delete</button>
     </form>`);
});

$(".project-add").click(function() {
  $(".projects-form-add").addClass("visible");
});

$(".btn-work-add").click(function() {
  $(".work-form-add").addClass("visible");
});

$(".btn-skill-add").click(function() {
  $(".skill-form-add").addClass("visible");
});

$(".btn-can").click(function(event) {
  event.preventDefault();
  $(".skill-form-add").removeClass("visible");
});

$(".btn-work-can").click(function(event) {
  event.preventDefault();
  $(".work-form-add").removeClass("visible");
});

$(".btn-proj-can").click(function(event) {
  event.preventDefault();
  $(".projects-form-add").removeClass("visible");
});
