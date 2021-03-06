<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Norse Tribes Kampfsimulator</title>
</head>

<body>
    <form id="kampfSim" action="action.php" method="post">
        <h1>Kampfsimulator</h1>
        <section>
            <h2>Angreifer</h2>
            <p>
              <label for="s">
                <span>Sverrir: </span>
              </label>
              <input type="text" id="att_s" name="att_s">
            </p>
            <p>
              <label for="v">
                <span>Vermundr: </span>
              </label>
              <input type="text" id="att_v" name="att_v">
            </p>
            <p>
              <label for="b">
                <span>Bogenschützen: </span>
              </label>
              <input type="text" id="att_b" name="att_b">
            </p>
        </section>
        <section>
            <h2>Verteidiger</h2>
            <p>
              <label for="s">
                <span>Sverrir: </span>
              </label>
              <input type="text" id="def_s" name="def_s">
            </p>
            <p>
              <label for="v">
                <span>Vermundr: </span>
              </label>
              <input type="text" id="def_v" name="def_v">
            </p>
            <p>
              <label for="b">
                <span>Bogenschützen: </span>
              </label>
              <input type="text" id="def_b" name="def_b">
            </p>
        </section>
        <section>
            <h2>Berechnung</h2>
            <p> 
              <span>Generatoren: </span>
              <input type="text" id="gens" name="gens">
            </p>
            <p> 
              <span>Kampftickss: </span>
              <input type="text" id="kampfticks" name="kampfticks">
            </p>
            <p> <button type="submit">Berechne</button> </p>
        </section>
    </form>
</body>

</html>
