const btn_agregar = document.getElementById('agregar');
btn_agregar.addEventListener("click", function( ){
    //crear el div que contiene los 2 sub-divs
    const div_principal = D.create('div',{style: 'display: flex; justify-content: center; align-items: center;'});
    //crear el div para el span e input del SRC_SCHEMA_ID
    const div_SRC_SCHEMA_ID = D.create('div');

    //crear el div para el span e input del OBJ_NAME
    const div_OBJ_NAME = D.create('div');

    //crear los span de SRC_SCHEMA_ID y OBJ_NAME
    const span_SRC_SCHEMA_ID = D.create('span', { innerHTML: '' } );
    const span_OBJ_NAME = D.create('span', { innerHTML: '' });

    //crear los inputs de SRC_SCHEMA_ID y OBJ_NAME
    const input_SRC_SCHEMA_ID = D.create('textarea', { name: 'SRC_SCHEMA_IDS[]', autocomplete: 'off', placeholder: 'SRC_SCHEMA_ID de la dependencia', style: 'border-radius: 5px; border: 1px solid #1271fd; padding: .5em 1em;'} );

    const input_OBJ_NAME = D.create('textarea', { name: 'OBJ_NAMES[]', autocomplete: 'off', placeholder: 'OBJ_NAME de la dependencia', style: 'border-radius: 5px; border: 1px solid #1271fd; padding: .5em 1em;'});

    //crear un botoncito de eliminar este div 
    const center = D.create('center', { innerHTML: '' });
    const borrar = D.create('input', { type: 'button', href: 'javascript:void(0)', value: 'Borrar', style: 'background-color:#CB0909; color:white; border-radius: 5px; border: 1px solid #CB0909;  display: inline-block; padding: .5em 1em; width: 10%; height: 15%; word-break: break-all; animation: aparece 1s ease;', onclick: function( ){ D.remove(div_principal); } } );

    //agregar cada etiqueta a su nodo padre
    D.append(span_SRC_SCHEMA_ID, div_SRC_SCHEMA_ID);
    D.append(input_SRC_SCHEMA_ID, div_SRC_SCHEMA_ID);

    D.append([span_OBJ_NAME, input_OBJ_NAME], div_OBJ_NAME);

    D.append([div_SRC_SCHEMA_ID, div_OBJ_NAME, borrar, center], div_principal);
    
    //agregar el div del primer comentario al contenedor con id #container
    D.append(div_principal, D.id('divcon') );
} );