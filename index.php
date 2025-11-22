<?php
session_start();
require_once 'scripts/conn.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Cuphead - Banco de Dados</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>

    <div class="container">
        <header>
            <h1>Projeto Banco de Dados</h1>
        </header>

                <main>
            <section id="cadastro">
                <h2>Cadastrar Personagem</h2>
                <form action="scripts/cad.php" method="POST">
                    <div>
                        <label for="nome">Nome:</label>
                        <input type="text" id="nome" name="nome" required placeholder="Ex: Cuphead">
                    </div>
                    <div>
                        <label for="especie">Espécie:</label>
                        <input type="text" id="especie" name="especie" required placeholder="Ex: Xícara">
                    </div>
                    <div>
                        <label for="genero">Gênero:</label>
                        <select name="genero" id="genero" style="display: none;" required>
                            <option value="" disabled selected>Selecione o Gênero</option>
                            <option value="M">Masculino</option>
                            <option value="F">Feminino</option>
                            <option value="NB">NB</option>
                        </select>

                        <div class="custom-select-wrapper">
                            <div class="custom-select">
                                <div class="custom-select__trigger">
                                    <span>Gênero</span>
                                    <div class="arrow"></div>
                                </div>
                                <div class="custom-options">
                                    <span class="custom-option" data-value="M">Masculino</span>
                                    <span class="custom-option" data-value="F">Feminino</span>
                                    <span class="custom-option" data-value="NB">NB</span>
                                </div>
                            </div>
                        </div>

                        <label for="super_art">Super Art:</label>
                        <select name="super_art" id="super_art" style="display: none;" required>
                            <option value="" disabled selected>Selecione a Super Art</option>
                            <option value="1">Energy Beam</option>
                            <option value="2">Invincibility</option>
                            <option value="3">Giant Ghost</option>
                            <option value="4">Spiral Pillar</option>
                            <option value="5">Shield Pal</option>
                            <option value="6">Ghostly Barrage</option>
                        </select>

                        <div class="custom-select-wrapper">
                            <div class="custom-select">
                                <div class="custom-select__trigger">
                                    <span>Super Art</span>
                                    <div class="arrow"></div>
                                </div>
                                <div class="custom-options">
                                    <span class="custom-option" data-value="1">Energy Beam</span>
                                    <span class="custom-option" data-value="2">Invincibility</span>
                                    <span class="custom-option" data-value="3">Giant Ghost</span>
                                    <span class="custom-option" data-value="4">Spiral Pillar</span>
                                    <span class="custom-option" data-value="5">Shield Pal</span>
                                    <span class="custom-option" data-value="6">Ghostly Barrage</span>
                                </div>
                            </div>
                        </div>

                        <label for="arma">Arma:</label>
                        <select name="arma" id="arma" style="display: none;" required>
                            <option value="" disabled selected>Selecione a Arma Primária</option>
                            <option value="10">Peashooter</option>
                            <option value="11">Spread</option>
                            <option value="12">Chaser</option>
                            <option value="13">Lobber</option>
                            <option value="14">Charge</option>
                            <option value="15">Roundabout</option>
                            <option value="16">Crackshot</option>
                            <option value="17">Converge</option>
                            <option value="18">TwistUp</option>
                        </select>

                        <div class="custom-select-wrapper">
                            <div class="custom-select">
                                <div class="custom-select__trigger">
                                    <span>Arma Primária</span>
                                    <div class="arrow"></div>
                                </div>
                                <div class="custom-options">
                                    <span class="custom-option" data-value="10">Peashooter</span>
                                    <span class="custom-option" data-value="11">Spread</span>
                                    <span class="custom-option" data-value="12">Chaser</span>
                                    <span class="custom-option" data-value="13">Lobber</span>
                                    <span class="custom-option" data-value="14">Charge</span>
                                    <span class="custom-option" data-value="15">Roundabout</span>
                                    <span class="custom-option" data-value="16">Crackshot</span>
                                    <span class="custom-option" data-value="17">Converge</span>
                                    <span class="custom-option" data-value="18">TwistUp</span>
                                </div>
                            </div>
                        </div>

                         <label for="arma2">Arma 2:</label>
                        <select name="arma2" id="arma2" style="display: none;" required>
                            <option value="" disabled selected>Selecione a Arma Segundária</option>
                            <option value="10">Peashooter</option>
                            <option value="11">Spread</option>
                            <option value="12">Chaser</option>
                            <option value="13">Lobber</option>
                            <option value="14">Charge</option>
                            <option value="15">Roundabout</option>
                            <option value="16">Crackshot</option>
                            <option value="17">Converge</option>
                            <option value="18">TwistUp</option>
                        </select>

                        <div class="custom-select-wrapper">
                            <div class="custom-select">
                                <div class="custom-select__trigger">
                                    <span>Arma Segundária</span>
                                    <div class="arrow"></div>
                                </div>
                                <div class="custom-options">
                                    <span class="custom-option" data-value="10">Peashooter</span>
                                    <span class="custom-option" data-value="11">Spread</span>
                                    <span class="custom-option" data-value="12">Chaser</span>
                                    <span class="custom-option" data-value="13">Lobber</span>
                                    <span class="custom-option" data-value="14">Charge</span>
                                    <span class="custom-option" data-value="15">Roundabout</span>
                                    <span class="custom-option" data-value="16">Crackshot</span>
                                    <span class="custom-option" data-value="17">Converge</span>
                                    <span class="custom-option" data-value="18">TwistUp</span>
                                </div>
                            </div>
                        </div>

                         <label for="charm">Charm</label>
                        <select name="charm" id="charm" style="display: none;" required>
                            <option value="" disabled selected>Selecione o Charm</option>
                            <option value="1">Heart</option>
                            <option value="2">Smoke Bomb</option>
                            <option value="3">P. Sugar</option>
                            <option value="4">Coffee</option>
                            <option value="5">Twin Heart</option>
                            <option value="6">Wheatstone</option>
                            <option value="7">Astral Cookie</option>
                            <option value="8">Heart King</option>
                            <option value="9">Broken Relic</option>
                        </select>

                        <div class="custom-select-wrapper">
                            <div class="custom-select">
                                <div class="custom-select__trigger">
                                    <span>Charm</span>
                                    <div class="arrow"></div>
                                </div>
                                <div class="custom-options">
                                    <span class="custom-option" data-value="1">Heart</span>
                                    <span class="custom-option" data-value="2">Smoke Bomb</span>
                                    <span class="custom-option" data-value="3">P. Sugar</span>
                                    <span class="custom-option" data-value="4">Coffee</span>
                                    <span class="custom-option" data-value="5">Twin Heart</span>
                                    <span class="custom-option" data-value="6">Wheatstone</span>
                                    <span class="custom-option" data-value="7">Astral Cookie</span>
                                    <span class="custom-option" data-value="8">Heart King</span>
                                    <span class="custom-option" data-value="9">Broken Relic</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="cadastrar">Salvar!</button>
                </form>
            </section>

            <div class="tables-wrapper">
                <section class="perso" id="consulta">
                    <h2>Personagens</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Nome</th>
                                <th>Espécie</th>
                                <th>Gênero</th>
                                <th>Super Art</th>
                                <th>Arma 1</th>
                                <th>Arma 2</th>
                                <th>Charm</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql_char = "SELECT characters.char_id, characters.char_name, characters.char_esp, characters.char_gend, superart.supeart_name AS superart, weapons.weapon_name AS weapon1, weapons.weapon_name AS weapon2, charms.charm_name AS charm FROM characters
                            JOIN superart ON characters.supart_id = superart.supart_id
                            JOIN weapons ON characters.weapon1_id = weapons.weapon_id
                            JOIN weapons AS weapons2 ON characters.weapon2_id = weapons2.weapon_id
                            JOIN charms ON characters.charm_id = charms.charm_id";
                            $result_char = $conn -> query($sql_char);

                            if($result_char -> num_rows > 0){
                                while($row = $result_char -> fetch_assoc()){
                                    echo "<tr>";
                                        echo "<td>" . $row["char_id"] . "</td>";
                                        echo "<td>" . $row["char_name"] . "</td>";
                                        echo "<td>" . $row["char_esp"] . "</td>";
                                        echo "<td>" . $row["char_gend"] . "</td>";
                                        echo "<td>" . $row["superart"] . "</td>";
                                        echo "<td>" . $row["weapon1"] . "</td>";
                                        echo "<td>" . $row["weapon2"] . "</td>";
                                        echo "<td>" . $row["charm"] . "</td>";
                                        echo "</tr>";
                                }
                            }else{
                                    echo "<tr><td colspan='8'>Nenhum personagem cadastrado.</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </section>
    
                <section class="boss" id="consulta">
                    <h2>Bosses</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Nome</th>
                                <th>Level</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql_boss = "SELECT bosses.boss_id, bosses.boss_name, level.lvl_name FROM bosses
                            JOIN level ON bosses.lvl_id = level.lvl_id";
                            $result_boss = $conn -> query($sql_boss);

                            if($result_boss -> num_rows > 0){
                                while($row = $result_boss -> fetch_assoc()){
                                    echo "<tr>";
                                        echo "<td>" . $row["boss_id"] . "</td>";
                                        echo "<td>" . $row["boss_name"] . "</td>";
                                        echo "<td>" . $row["lvl_name"] . "</td>";
                                    echo "</tr>";
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </section>
            </div>
        </main>
    </div>

    <script src="js/index.js"></script>
</body>
</html>