
var  modalWrap  =  null ;

const  showModal  =  ( item , callback)  =>  {
  if  (modalWrap !==  null )  {
    modalWrap.remove() ;
  }

var  items = item.split('|');

var title = items[0];
var description = items[1];
var image = items[2];

  modalWrap  =  document.createElement('div');
  modalWrap.innerHTML  =  `
  <div class="modal fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-light">
        <h5 class="modal-title">${title}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><img id="modal-img" src="${image}" class="card-img-top" alt="..."></p>
        <p>${description}</p>
      </div>
      <div class="modal-footer bg-light">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
  ` ;


  
  // modalWrap.querySelector('.modal-success-btn').onclick = callback ;

  document.body.append(modalWrap) ;

  var  modal  =  new  bootstrap.Modal(modalWrap.querySelector('.modal')) ;
  modal.show() ;
}

function msgLoc() {
  alert("Venha nos visitar!");
}