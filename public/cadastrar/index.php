<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
    <title>cadastrar</title>
</head>
<body>
    <div class="container-flex">
        <div class="container">
            <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
                <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                    <span class="fs-4">Clientes</span>
                </a>
                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="../cadastrar/index.php" class="nav-link active"
                            aria-current="page">CADASTRO</a></li>
                    <li class="nav-item"><a href="../consultar/index.php" class="nav-link">CONSULTA</a></li>
                </ul>
            </header>
        </div>
        <aside class="container">
            <h1 class="lead">Cadastrar agendamento de potenciais clientes</h1>
        </aside>
        <div id="status-flag">
        </div>
        <main class="container" style="margin: 10vh auto;">
            <form action="../../server/RegisterData.php" method="post">
                <fieldset>
                    <div class="mb-3">
                        <label for="nameInput" class="form-label">nome<sup>*</sup></label>
                        <input autocapitalize="words" type="text" class="form-control" id="nameInput" placeholder="Nome completo" required style="text-transform: capitalize;" name="name">
                    </div>
                </fieldset>
                <fieldset>
                    <div class="mb-3">
                        <label for="phoneInput" class="form-label">telefone<sup>*</sup></label>
                        <input type="tel" class="form-control" id="phoneInput" placeholder="Telefone ou celular" required name="phone">
                    </div>
                </fieldset>
                <fieldset>
                    <div class="mb-3">
                        <label for="originInput" class="form-label">origem<sup>*</sup></label>
                        <select class="form-select" id="originInput" aria-label="Selecione uma origem" required name="origin">
                            <option value="cel" selected>celular</option>
                            <option value="tel">fixo</option>
                            <option value="whatsapp">whatsapp</option>
                            <option value="facebook">facebook</option>
                            <option value="instagram">instagram</option>
                            <option value="gmn">Google Meu Negocio</option>
                        </select>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="mb-3">
                        <label for="dateInput" class="form-label">data de contato</label>
                        <input type="date" class="form-control" id="dateInput" name="contact_date">
                    </div>
                </fieldset>
                <fieldset>
                    <div class="mb-3">
                        <label for="obsInput" class="form-label">observações</label>
                        <textarea class="form-control" id="obsInput" rows="4" maxlength="250" name="note"></textarea>
                      </div>
                </fieldset>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">cadastrar</button>
                </div>
            </form>
        </main>
    </div>
    <script>
        const uri = new DocumentFragment().baseURI;
        const fragmentIndex = uri.search("#");
        if (fragmentIndex !== -1){
            const fragment = uri.slice(fragmentIndex + 1, uri.length);
            const flagType = (fragment == 'success') ? "success" : "danger";
            const flagMessage = (fragment == 'success') ? "Cliente cadastrado com sucesso!" : "Ocorreu um erro ao cadastrar";
            const alertElement = `<div class="container alert alert-${flagType}" role="alert">${flagMessage}</div>`;
            
            document.querySelector('#status-flag').outerHTML = alertElement;
        }
    </script>
</body>

</html>