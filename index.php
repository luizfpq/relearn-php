<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto PHP-Relearn</title>


    <style type="text/css">
        #projects .h {
            background-color: #71bc78;
        }

        #projects .e {
            background-color: #d2ffcc;
        }

        #projects .v {
            background-color: white;
        }
        #projects .v>a {
            background-color: white;
            color: #1e6d25;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="center" id="projects">
        <table>
            <tbody>
                <tr class="h">
                    <td>
                        <h1 class="p">Listagem de projetos disponíveis</h1>
                    </td>
                </tr>
            </tbody>
        </table>
        <table>
            <tbody>
                <tr class="h">
                    <th>Nome</th>
                    <th>URL</th>
                    <th>Data de cria&ccedil;&atilde;o</th>
                </tr>
                <tr>
                    <td class="e">Curso PHP 7 &middot; COD3R</td>
                    <td class="v"><a href="cod3r-udemy/">cod3r-udemy/</a></td>
                    <td class="v">2020-12-21</td>
                </tr>
                <tr>
                    <td class="e">Prestaki - Back-end</td>
                    <td class="v"><a href="prestaki-backend/">prestaki-backend/</a></td>
                    <td class="v">2021-01-02</td>
                </tr>
            </tbody>
        </table>
    </div>


    <?php
    phpinfo();
    ?>
</body>

</html>