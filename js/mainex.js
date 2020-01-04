/*Exemplo

**/
function dropdown(){
var menu = document.getElementById('nav').getElementsByTagName('li');
for(i=0; i < menu.length; i++){
	if(menu.item(i).getElementsByTagName('ul').length > 0){

		menu.item(i).onmouseover = function(){
			this.style.background = 'url(img/bg_btn.jpg)';
            this.style.backgroundPosition = '0px 40px';
			this.getElementsByTagName('ul').item(0).style.display = 'block';
		}

		menu.item(i).onmouseout = function(){
			this.style.background = 'url(img/bg_btn.jpg)';
            this.style.backgroundPosition = '0px 0px';
			this.getElementsByTagName('ul').item(0).style.display = 'none';	
		}

	}
}
}