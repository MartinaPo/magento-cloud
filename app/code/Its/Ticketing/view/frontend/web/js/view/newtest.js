define(['uiComponent'],function(Component) {
    'use strict';
   
    console.log("nuovo test.LOG")
   
    return Component.extend({
        defaults: {
            nuovoTicketLabel: 'Default String',
            tickets: [
              { "id": 1, "label": "Task 4", "status": false },
              { "id": 2, "label": "Task 5", "status": false },
              { "id": 3, "label": "Task 6", "status": true },
              { "id": 4, "label": "Task 7", "status": false }
            ],
            initObservable: function () {
                this._super().observe(['tickets']);
                return this;
            },
            prova: function(){
                console.log('testJS');
                return this;
            },
            //ogni volta che si verifica l'evento
            //il click passerà data e event
            //gli input della funzione consentono di accedere all'oggetto event
            cambiaStatus: function (data, event) {

                //Recupera il data-id dell'elemento che ha scatenato l'evento
                const idElemento = $(event.target).data('id');
        
                var elementi = this.lista().map(function (elemento) {
                  if (elemento.id === idElemento) {
                    elemento.status = !elemento.status;
                  }
                  return elemento;
                });
                this.lista(elementi);
            }
          }    
    });
});