require('./bootstrap');

    function addHyphen (element) {
        	let inputValue = document.getElementById(element.id);
        	let zipCode = "";
        	
            zipCode = inputValue.value;
              if(zipCode.length === 8) {
                inputValue.value = `${zipCode.substr(0,5)}-${zipCode.substr(5,9)}`;
                console.log(zipCode); 
              }
    }
