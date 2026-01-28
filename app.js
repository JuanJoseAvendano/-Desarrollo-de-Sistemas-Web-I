var Alert = new CustomAlert();

function CustomAlert(){
    this.render = function(){
        // Muestra el cuadro de texto [cite: 75]
        let popUpBox = document.getElementById('popUpBox');
        popUpBox.style.display = "block";
        
        // Crea el botón para regresar al inicio [cite: 71, 77]
        document.getElementById('closeModal').innerHTML = '<a href="index.php"><button type="button">¡Si quiero!</button></a>';
    }
    
    this.ok = function(){
        document.getElementById('popUpBox').style.display = "none";
    }
}
