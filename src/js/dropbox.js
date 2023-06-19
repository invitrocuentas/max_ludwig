(function () {
  let idd = 0;
  let idd2 = 0;
  let idd3 = 0;
  let idd4 = 0;

  if (document.getElementById("drop_1")) {
    var opcion1 = document.getElementById("imagen-convenio");

    document.getElementById("drop_1").onclick = function () {
      var opcion = document.getElementById("opcion-1");
      if (idd != 1) {
        opcion.classList.add("mostrar_div");
        opcion1.classList.add("ocultar_div");

        if (idd != 0) {
          var opcion2 = document.getElementById(`opcion-${idd}`);
          opcion2.classList.remove("mostrar_div");
        }

        idd = 1;
      } else {
        opcion.classList.remove("mostrar_div");
        opcion1.classList.remove("ocultar_div");

        idd = 0;
      }
    };

    document.getElementById("drop_2").onclick = function () {
      var opcion = document.getElementById("opcion-2");
      if (idd != 2) {
        opcion.classList.add("mostrar_div");
        opcion1.classList.add("ocultar_div");

        if (idd != 0) {
          var opcion2 = document.getElementById(`opcion-${idd}`);
          opcion2.classList.remove("mostrar_div");
        }

        idd = 2;
      } else {
        opcion.classList.remove("mostrar_div");
        opcion1.classList.remove("ocultar_div");

        idd = 0;
      }
    };

    document.getElementById("drop_3").onclick = function () {
      var opcion = document.getElementById("opcion-3");

      if (idd != 3) {
        opcion.classList.add("mostrar_div");
        opcion1.classList.add("ocultar_div");

        if (idd != 0) {
          var opcion2 = document.getElementById(`opcion-${idd}`);
          opcion2.classList.remove("mostrar_div");
        }

        idd = 3;
      } else {
        opcion.classList.remove("mostrar_div");
        opcion1.classList.remove("ocultar_div");

        idd = 0;
      }
    };

    document.getElementById("drop_4").onclick = function () {
      var opcion = document.getElementById("opcion-4");
      if (idd != 4) {
        opcion.classList.add("mostrar_div");
        opcion1.classList.add("ocultar_div");

        if (idd != 0) {
          var opcion2 = document.getElementById(`opcion-${idd}`);
          opcion2.classList.remove("mostrar_div");
        }

        idd = 4;
      } else {
        opcion.classList.remove("mostrar_div");
        opcion1.classList.remove("ocultar_div");

        idd = 0;
      }
    };
  }

  if (document.getElementById("dropbox_1")) {
    document.getElementById("dropbox_1").onclick = function () {
      var opcion = document.getElementById("opcion-1");
      if (idd2 != 1) {
        opcion.classList.add("mostrar_div");

        if (idd2 != 0) {
          var opcion2 = document.getElementById(`opcion-${idd2}`);
          opcion2.classList.remove("mostrar_div");
        }

        idd2 = 1;
      } else {
        opcion.classList.remove("mostrar_div");

        idd2 = 0;
      }
    };

    document.getElementById("dropbox_2").onclick = function () {
      var opcion = document.getElementById("opcion-2");
      if (idd2 != 2) {
        opcion.classList.add("mostrar_div");

        if (idd2 != 0) {
          var opcion2 = document.getElementById(`opcion-${idd2}`);
          opcion2.classList.remove("mostrar_div");
        }

        idd2 = 2;
      } else {
        opcion.classList.remove("mostrar_div");

        idd2 = 0;
      }
    };

    document.getElementById("dropbox_3").onclick = function () {
      var opcion = document.getElementById("opcion-3");

      if (idd2 != 3) {
        opcion.classList.add("mostrar_div");

        if (idd2 != 0) {
          var opcion2 = document.getElementById(`opcion-${idd2}`);
          opcion2.classList.remove("mostrar_div");
        }

        idd2 = 3;
      } else {
        opcion.classList.remove("mostrar_div");

        idd2 = 0;
      }
    };

    document.getElementById("dropbox_4").onclick = function () {
      var opcion = document.getElementById("opcion-4");
      if (idd2 != 4) {
        opcion.classList.add("mostrar_div");

        if (idd2 != 0) {
          var opcion2 = document.getElementById(`opcion-${idd2}`);
          opcion2.classList.remove("mostrar_div");
        }

        idd2 = 4;
      } else {
        opcion.classList.remove("mostrar_div");

        idd2 = 0;
      }
    };

    document.getElementById("dropbox_5").onclick = function () {
      var opcion = document.getElementById("opcion-5");
      if (idd2 != 5) {
        opcion.classList.add("mostrar_div");

        if (idd2 != 0) {
          var opcion2 = document.getElementById(`opcion-${idd2}`);
          opcion2.classList.remove("mostrar_div");
        }

        idd2 = 5;
      } else {
        opcion.classList.remove("mostrar_div");

        idd2 = 0;
      }
    };

    document.getElementById("dropbox_6").onclick = function () {
      var opcion = document.getElementById("opcion-6");
      if (idd2 != 6) {
        opcion.classList.add("mostrar_div");

        if (idd2 != 0) {
          var opcion2 = document.getElementById(`opcion-${idd2}`);
          opcion2.classList.remove("mostrar_div");
        }

        idd2 = 6;
      } else {
        opcion.classList.remove("mostrar_div");

        idd2 = 0;
      }
    };
  }

  if (document.getElementById("drop_trabaja_1")) {
    document.getElementById("drop_trabaja_1").onclick = function () {
      var opcion = document.getElementById("opcion-1");
      if (idd3 != 1) {
        opcion.classList.add("mostrar_div");

        idd3 = 1;
      } else {
        opcion.classList.remove("mostrar_div");

        idd3 = 0;
      }
    };

    document.getElementById("drop_trabaja_2").onclick = function () {
      var opcion = document.getElementById("opcion-2");
      if (idd3 != 2) {
        opcion.classList.add("mostrar_div");

        idd3 = 2;
      } else {
        opcion.classList.remove("mostrar_div");

        idd3 = 0;
      }
    };
  }

  if (document.getElementById("boton_formulario_trabaja")) {
    document.getElementById("boton_formulario_trabaja").onclick = function () {
      var modal = document.getElementById("modal-1");
      modal.classList.add("mostrar_div");
    };

    document.getElementById("boton_formulario_trabaja_2").onclick =
      function () {
        var modal = document.getElementById("modal-1");
        modal.classList.remove("mostrar_div");
      };
  }

  if (document.getElementById("boton_formulario_admision")) {
    document.getElementById("boton_formulario_admision").onclick = function () {
      var modal = document.getElementById("modal-1");
      modal.classList.add("mostrar_div");
    };

    document.getElementById("boton_formulario_admision_cerrar").onclick =
      function () {
        var modal = document.getElementById("modal-1");
        modal.classList.remove("mostrar_div");
      };

    document.getElementById("boton_formulario_admision_1").onclick =
      function () {
        var modal = document.getElementById("modal-2");
        modal.classList.add("mostrar_div");
      };

    document.getElementById("boton_formulario_admision_1_cerrar").onclick =
      function () {
        var modal = document.getElementById("modal-2");
        modal.classList.remove("mostrar_div");
      };

    document.getElementById("boton_formulario_admision_2").onclick =
      function () {
        var modal = document.getElementById("modal-3");
        modal.classList.add("mostrar_div");
      };

    document.getElementById("boton_formulario_admision_2_cerrar").onclick =
      function () {
        var modal = document.getElementById("modal-3");
        modal.classList.remove("mostrar_div");
      };
  }
})();
