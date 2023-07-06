<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="main-container">
    <div class="heading">
        <h1 class="heading__title">Visualizar Exames</h1>
    </div>
    <div class="cards">

<!--        WHERE consultas.cpf ='". $_SESSION['cpf']."'order by id";-->

        <?php
        include 'conexao.php';
        $query =
            "SELECT
    lacifs93_ifsp_lacif.consultas.idTipoExame,
    lacifs93_ifsp_lacif.exames.idTipoExame,
    lacifs93_ifsp_lacif.consultas.id, title, description, start, horario, idconvenio, celular, resultado, status,
    lacifs93_ifsp_lacif.exames.nomeExame, valor
FROM lacifs93_ifsp_lacif.consultas
         INNER JOIN lacifs93_ifsp_lacif.exames ON lacifs93_ifsp_lacif.consultas.idTipoExame = lacifs93_ifsp_lacif.exames.idTipoExame;";

        $query2 = "SELECT lacifs93_ifsp_lacif.consultas.cpf,
       lacifs93_ifsp_lacif.usuarios.cpf, id, title, description, start, horario, idconvenio, idTipoExame, resultado, status, idusuario, nome, email, senha, endereco, tiposanguineo, sexo, datanasc, tipo_acesso
FROM lacifs93_ifsp_lacif.consultas
         INNER JOIN lacifs93_ifsp_lacif.usuarios ON lacifs93_ifsp_lacif.consultas.cpf = lacifs93_ifsp_lacif.usuarios.cpf;";


        $resultado = mysqli_query($conn, $query);
        while($row = mysqli_fetch_assoc($resultado)) {

            $resultado2 = mysqli_query($conn, $query2);
            while($row2 = mysqli_fetch_assoc($resultado2)){

            ?>

            <div class="box">
                <div class="card card-1">

                    <div class="card__icon"><?php echo "<font color='black'>Tipo do Exame: " . $row['nomeExame'] . "</font>"; ?></div>

                    <p class="card__exit"><?php echo "<font color='black'>Data do Exame: " . $row['start'] . "</font>"; ?></p>

                    <h2 class="card__title"><?php echo "<font color='black'>Status do Exame: " . $row['status'] . "</font>"; ?></h2>


                    <a href="#" onclick="generatePDF()">Download do Resultado <i class='fa fa-file-pdf-o'></i></a>

<!--                    <a href="img/--><?php //echo $row2['resultado'], '">Download do Resultado '?><!--<i class='fa fa-file-pdf-o'></i></a>"-->

                </div>

            </div>


            <script src="https://unpkg.com/jspdf-invoice-template@1.4.0/dist/index.js"></script>
        <script>
            function generatePDF()
            {
                var pdfObject = jsPDFInvoiceTemplate.default(props); //returns number of pages created
                console.log("Object Created: ", pdfObject)
            }

            var props = {
                outputType: jsPDFInvoiceTemplate.OutputType.Save,
                returnJsPDFDocObject: true,
                fileName: "LACIF - IFSP | 2022",
                orientationLandscape: false,
                compress: true,
                logo: {
                    src: "https://raw.githubusercontent.com/Xandyssz/Instituto-Federal-LACIF/main/img/images/logo.png",
                    type: 'PNG', //optional, when src= data:uri (nodejs case)
                    width: 50.50, //aspect ratio = width/height
                    height: 15.50,
                    margin: {
                        top: 5, //negative or positive num, from the current position
                        left: 0 //negative or positive num, from the current position
                    }
                },

                business: {
                    name: "LACIF",
                    address: "R. José Ramos Júnior, 27-50 - Jardim Tropical, Pres. Epitácio - SP, 19470-000",
                    phone: "+55 (18) 3281-9599",
                    email: "alexandre.ferreira@aluno.ifsp.edu.br",
                    email_1: "everton.t@aluno.ifsp.edu.br",
                    website: "melissa@ifsp.edu.br",
                },

                contact: {
                    name: "<?php echo $row2['nome']; ?>",
                    address: "<?php echo $row2['endereco']; ?>",
                    phone: "<?php echo $row['celular']; ?>",
                    email: "<?php echo $row2['email']; ?>",
                },
                invoice: {
                    label: "Data/Hora da Consulta",
                    num: ":",
                    invDate: "<?php echo $row2['start']; ?>;",
                    invGenDate: "<?php echo $row2['horario']; ?>;",
                    headerBorder: false,
                    tableBodyBorder: false,
                    header: [
                        {
                            title: "#",
                            style: {
                                width: 10
                            }
                        },
                        {
                            title: "Nome",
                            style: {
                                width: 30
                            }
                        },
                        {
                            title: "Descrição",
                            style: {
                                width: 80
                            }
                        },
                        { title: "Valor"},
                        // { title: "Unit"},
                    ],
                    table: Array.from(Array(1), (item, index)=>([
                        index + 1,
                        "<?php echo $row['nomeExame']; ?>",
                        "<?php echo $row['description']; ?>",
                        "<?php echo $row['valor']; ?>",
                        // "m2",
                    ])),
                },
                pageEnable: true,
                pageLabel: "Page ",
            };
        </script>

            <?php
          }
        }
        ?>
    </div>
</div>


