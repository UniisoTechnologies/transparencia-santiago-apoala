document.getElementById("foto").onchange = function(e) {
    // Creamos el objeto de la clase FileReader
    let reader = new FileReader();
  
    // Leemos el archivo subido y se lo pasamos a nuestro fileReader
    reader.readAsDataURL(e.target.files[0]);
  
    // Le decimos que cuando este listo ejecute el código interno
    reader.onload = function(){
      let preview = document.getElementById('preview'),
              image = document.createElement('img');
  
      image.src = reader.result;
      image.getElementsByClassName('rounded-circle');
      image.style.width="200px";
      image.style.height="200px";
      image.style.borderRadius="50%";
      preview.innerHTML = '';
      preview.append(image);
    };
  }