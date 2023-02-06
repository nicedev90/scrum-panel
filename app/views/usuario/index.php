<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="scrum.css"> -->
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/basic.css">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/util.css">
  <!-- <script src="app.js"></script> -->


  <title>dashboard</title>

</head>
<body>
<div class="container grid">
  <div class="scrum-board flex-col backlog">
    <a href="<?php echo URLROOT;?>/users/logout" class="btn btn-green"> Cerrar SESSION</a>
    <h2>Proyecto: LXDE Blog</h2>

    <div class="flex">
      <h3>Backlog</h3>
      <input type="submit" id="modalBtn" class="btn btn-green" value="Add Task">
    </div>

    <div class="alertas">message has been send</div>

    <div class="task-list">
      
    </div>

    <div class="card">
      <div class="card-head">
        <p>Id: 01 </p>
        <p>Media</p>
        <p>02 hr</p>
      </div>
      <div class="card-body">
        <p>Titulo de Story Lorem ipsum dolor sit, amet .</p>
        <p>Descipcion Lorem ipsum dolor sit amet. Lorem, ipsum, dolor sit amet consectetur adipisicing elit. Distinctio, rerum.</p>
      </div>

      <div class="card-footer">
        <a href="#"><svg><use href="icons.svg#log"></use></svg></a>
        <a href="#"><svg><use href="icons.svg#in-progress"></use></svg></a>
        <a href="#" id="done"><svg><use href="icons.svg#done"></use></svg></a>
        <a href="#" id="archived"><svg><use href="icons.svg#archive"></use></svg></a>
      </div>
    </div>

    <div class="card">
      <div class="card-head">
        <p>Id: 01 </p>
        <p>Media</p>
        <p>02 hr</p>
      </div>
      <div class="card-body">
        <p>Titulo de Story Lorem ipsum dolor sit, amet .</p>
        <p>Descipcion Lorem ipsum dolor sit amet. Lorem, ipsum, dolor sit amet consectetur adipisicing elit. Distinctio, rerum.</p>
      </div>

      <div class="card-footer">
        <a href="#"><svg><use href="icons.svg#log"></use></svg></a>
        <a href="#"><svg><use href="icons.svg#in-progress"></use></svg></a>
        <a href="#" id="done"><svg><use href="icons.svg#done"></use></svg></a>
        <a href="#" id="archived"><svg><use href="icons.svg#archive"></use></svg></a>
      </div>
    </div>

    <div class="card">
      <div class="card-head">
        <p>Id: 01 </p>
        <p>Media</p>
        <p>02 hr</p>
      </div>
      <div class="card-body">
        <p>Titulo de Story Lorem ipsum dolor sit, amet .</p>
        <p>Descipcion Lorem ipsum dolor sit amet. Lorem, ipsum, dolor sit amet consectetur adipisicing elit. Distinctio, rerum.</p>
      </div>

      <div class="card-footer">
        <a href=""><svg><use href="icons.svg#log"></use></svg></a>
        <a href=""><svg><use href="icons.svg#in-progress"></use></svg></a>
        <a href=""><svg><use href="icons.svg#done"></use></svg></a>
        <a href=""><svg><use href="icons.svg#archive"></use></svg></a>
      </div>
    </div>


  </div>

  <div class="scrum-board flex-col in-progress">
    <h3>In progress</h3>
    <div class="card">
      <div class="card-head">
        <p>Id: 01 </p>
        <p>Media</p>
        <p>02 hr</p>
      </div>
      <div class="card-body">
        <p>Titulo de Story Lorem ipsum dolor sit, amet .</p>
        <p>Descipcion Lorem ipsum dolor sit amet. Lorem, ipsum, dolor sit amet consectetur adipisicing elit. Distinctio, rerum.</p>
      </div>

      <div class="card-footer">
        <a href=""><svg><use href="icons.svg#log"></use></svg></a>
        <a href=""><svg><use href="icons.svg#in-progress"></use></svg></a>
        <a href=""><svg><use href="icons.svg#done"></use></svg></a>
        <a href=""><svg><use href="icons.svg#archive"></use></svg></a>
      </div>
    </div>
  </div>

  <div class="scrum-board flex-col done">
    <h3>Done</h3>
    <div class="card">
      <div class="card-head">
        <p>Id: 01 </p>
        <p>Media</p>
        <p>02 hr</p>
      </div>
      <div class="card-body">
        <p>Titulo de Story Lorem ipsum dolor sit, amet .</p>
        <p>Descipcion Lorem ipsum dolor sit amet. Lorem, ipsum, dolor sit amet consectetur adipisicing elit. Distinctio, rerum.</p>
      </div>

      <div class="card-footer">
        <a href=""><svg><use href="icons.svg#log"></use></svg></a>
        <a href=""><svg><use href="icons.svg#in-progress"></use></svg></a>
        <a href=""><svg><use href="icons.svg#done"></use></svg></a>
        <a href=""><svg><use href="icons.svg#archive"></use></svg></a>
      </div>
    </div>

  </div>

  <div class="scrum-board flex-col archive">
    <h3>Archive</h3>
        <div class="card">
      <div class="card-head">
        <p>Id: 01 </p>
        <p>Media</p>
        <p>02 hr</p>
      </div>
      <div class="card-body">
        <p>Titulo de Story Lorem ipsum dolor sit, amet .</p>
        <p>Descipcion Lorem ipsum dolor sit amet. Lorem, ipsum, dolor sit amet consectetur adipisicing elit. Distinctio, rerum.</p>
      </div>

      <div class="card-footer">
        <a href=""><svg><use href="icons.svg#log"></use></svg></a>
        <a href=""><svg><use href="icons.svg#in-progress"></use></svg></a>
        <a href=""><svg><use href="icons.svg#done"></use></svg></a>
        <a href=""><svg><use href="icons.svg#archive"></use></svg></a>
      </div>
    </div>
  </div>

</div>


<div id="simpleModal" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <span class="closeBtn">&times;</span>
        <h2>Add Task</h2> 
      </div>
      <div class="modal-body">
        <div class="form-group">
        <form>
            <div class="input-row">
              <div class="input-group small">
                <label for="">Story ID</label>
                <input id="story" placeholder="" type="text" required>
              </div>
              <div class="input-group small">
                <label for="">Priority</label>
                <input id="priority" placeholder="" type="text" required>
              </div>
              <div class="input-group small">
                <label for="">Estim. Time</label>
                <input id="estimate" placeholder="" type="text" required>
              </div>
            </div>
            <div class="input-group">
              <label for="">Title </label>
              <input id="title" placeholder="" type="text" required>
            </div>
            <div class="input-group">
              <label for="">Description</label>
              <input id="description" placeholder="" type="text" required>
              <input type="submit" class="formBtn" value="Agregar">
            </div>
          
        </form>
        </div>
      </div>
      <div class="modal-footer">
        <h3>modal footer</h3>
      </div>
    </div>
  </div>


<!-- <script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-firestore.js"></script> -->

<!-- <script src="scum-move.js"></script>
<script src="modal.js"></script>
<script src="db.js"></script> -->

</body>
</html>
