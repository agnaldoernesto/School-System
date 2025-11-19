<body>
    <main>
        <div class="conteiner-logo">
            <img src="pic/esafe_logo__2_-removebg-preview.png" alt="">
        </div>
        <h1>Cadasatro de alunos</h1>
        <div class="conteiner-form">
            <form action="backend/cadastrar.php" method="post">
                <label for="Nome">
                    Nome<br><input type="text" name="nome" id="nome" maxlength="12" required
                        placeholder="Escreva seu nome">
                </label>
                <label for="Apelido">
                    Apelido<br><input type="text" name="apelido" id="apelido" maxlength="12" required
                        placeholder="Escreva seu apelido">
                </label>
                <label for="Nascimento">
                    Nascido <br><input type="date" name="nascimento" id="nascimento" required>
                </label>
                <label for="Morada">
                    Morada<br><input type="text" name="morada" id="morada" required placeholder="Escreva sua morada">
                </label>
                <label for="Classe">
                    Classe<br><input type="number" name="classe" id="classe" maxlength="2" min="7" max="12" required
                        placeholder="7*-12*">
                </label>
                <label for="Sala">
                    Sala<br><input type="number" name="sala" maxlength="2" id="sala" min="1" max="100" required
                        placeholder="1-100">
                </label>
                <label for="Contacto">
                    Contacto<br><input type="tel" name="contacto" id="contacto" maxlength="9" required
                        placeholder="Escreva seu contacto">
                </label>
                <fieldset>
                    <button type="submit">Cadastrar</button>
                    <button type="reset">Limpar</button>
                </fieldset>
            </form>
        </div>
    </main>
    <span><a href="index.php"><abbr title="Voltar para CASA!"><img src="ico/3917033.png" alt=""></abbr></a></span>
</body>

</html>