function addField( table ){

  var tableRef = document.getElementById(table);
  var newRow   = tableRef.insertRow(-1);

  var newCell  = newRow.insertCell(0);
  var newElem = document.createElement( 'input' );
  newElem.setAttribute("name", "links");
  newElem.setAttribute("type", "text");
  newCell.appendChild(newElem);

  newCell = newRow.insertCell(1);
  newElem = document.createElement( 'input' );
  newElem.setAttribute("name", "keywords");
  newElem.setAttribute("type", "text");
  newCell.appendChild(newElem);

  newCell = newRow.insertCell(2);
  newElem = document.createElement( 'input' );
  newElem.setAttribute("name", "violationtype");
  newElem.setAttribute("type", "text");
  newCell.appendChild(newElem);

  newCell = newRow.insertCell(3);
  newElem = document.createElement( 'input' );
  newElem.setAttribute("name", "violationtype");
  newElem.setAttribute("type", "text");
  newCell.appendChild(newElem);

  newCell = newRow.insertCell(4);
  newElem = document.createElement( 'input' );
  newElem.setAttribute("name", "violationtype");
  newElem.setAttribute("type", "text");
  newCell.appendChild(newElem);

  newCell = newRow.insertCell(5);
  newElem = document.createElement( 'label' );
  newElem.setAttribute("name", "violationtype");
  newElem.setAttribute("type", "text");
  newCell.appendChild(newElem);

  newCell = newRow.insertCell(6);
  newElem = document.createElement( 'input' );
  newElem.setAttribute("type", "button");
  newElem.setAttribute("value", "X");
  newElem.setAttribute("onclick", 'SomeDeleteRowFunction(this)')
  newCell.appendChild(newElem);
}


window.SomeDeleteRowFunction = function SomeDeleteRowFunction(o) {
     var p=o.parentNode.parentNode;
     p.parentNode.removeChild(p);
}

$("input[name*='Deskripsi']").change(function(){
    
});
