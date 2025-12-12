function cargarReceta(idExpediente) {
    fetch("recetaParaDoctor.php?IdExpediente=" + idExpediente)
        .then(response => response.text())
        .then(html => {
            imprimirHTML(html);
        })
        .catch(error => console.error(error));
}

function imprimirHTML(contenido) {
    const ventana = window.open("", "_blank", "width=800,height=600");

    ventana.document.write(`
        <html>
            <head>
                <title>Receta Óptica</title>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        font-size: 12px;
                        margin: 10px;
                    }
                    table {
                        width: 100%;
                        border-collapse: collapse;
                    }
                    th, td {
                        border: 1px solid #000;
                        padding: 6px;
                        text-align: center;
                    }
                </style>
            </head>
            <body>
                ${contenido}
            </body>
        </html>
    `);

    ventana.document.close();
    ventana.focus();
    ventana.print();
}
